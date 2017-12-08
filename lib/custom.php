<?php

function my_acf_google_map_api( $api ){
$api['key'] = 'AIzaSyCjzvku9k8Cq07opT_eH2yWuKLjS1Z8xh8';
return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/*-------------------------------------------*/
/*	アーカイブページで現在のカテゴリー・タグ・タームを取得する
/*-------------------------------------------*/
function get_current_term(){

	$id;
	$tax_slug;

	if(is_category()){
		$tax_slug = "category";
		$id = get_query_var('cat');
	}else if(is_tag()){
		$tax_slug = "post_tag";
		$id = get_query_var('tag_id');
	}else if(is_tax()){
		$tax_slug = get_query_var('taxonomy');
		$term_slug = get_query_var('term');
		$term = get_term_by("slug",$term_slug,$tax_slug);
		$id = $term->term_id;
	}

	return get_term($id,$tax_slug);
}

/*-------------------------------------------*/
/*	各queryの設定の表示件数
/*-------------------------------------------*/
function change_posts_per_page($query) {
if ( is_admin() || ! $query->is_main_query() )
return;
if ( $query->is_post_type_archive( 'blog' ) ) {
$query->set( 'posts_per_page', '12' );
}
if ( $query->is_post_type_archive( 'works' ) ) {
$query->set( 'posts_per_page', '5' );
}
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


/*-------------------------------------------*/
/*	カテゴリーの一覧取得
/*-------------------------------------------*/
function each_category_archive() {
  global $post;

  $cat_info = get_the_category();
  $cat_term = $cat_info[0] -> category_parent;
  $cat_info = get_categories( 'child_of='.$cat_term );

  foreach ($cat_info as $category) {
    setup_postdata($category);
    $str = '<h2><a href="'. get_category_link( $category->term_id ) .'">'. $category->cat_name .'</a>の記事一覧</h2>
            <ul>';
    // 'posts_per_page'に好きな数を入れて件数を調整できます
    $ozPosts = get_posts( 'posts_per_page=-1&order=DESC&category__in='.$category->term_id );
    foreach( $ozPosts as $post ) {
      if($category->count != 0) {
      setup_postdata($post);
		if ( has_post_thumbnail() ) { // サムネイルを付けるとき
		  $title = get_the_title();
		  $args = array('alt' => $title);
		  $ozThumbnail = get_the_post_thumbnail( get_the_ID(), 'thumbnail', $args );
		} else { // サムネイルが設定されてないとき
		  $ozThumbnail = '<img src="'.get_template_directory_uri().'thumbnail.png">';
		}
      $str .= '<li><a href="'. get_permalink() .'">'. $title .'</a></li>';
      }
    }
    wp_reset_postdata();

    $str .= '</ul>';

    $strFinal .= $str; // $strの出力をキャッシュ
  }
  wp_reset_postdata();

  return $strFinal;
}

/*-------------------------------------------*/
/*	画像のURLのサイズ違いのURLを取得する
/*-------------------------------------------*/
function get_attachment_image_src($url, $size) {
  $image = wp_get_attachment_image_src(get_attachment_id($url), $size);
  return $image[0];
}
/*-------------------------------------------*/
/*	画像のURLからattachemnt_idを取得する
/*-------------------------------------------*/
function get_attachment_id($url)
{
  global $wpdb;
  $sql = "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s";
  preg_match('/([^\/]+?)(-e\d+)?(-\d+x\d+)?(\.\w+)?$/', $url, $matches);
  $post_name = $matches[1];
  return (int)$wpdb->get_var($wpdb->prepare($sql, $post_name));
}

function pn_get_attachment_id_from_url( $attachment_url = '' ) {

	global $wpdb;
	$attachment_id = false;

	// If there is no url, return.
	if ( '' == $attachment_url )
		return;

	// Get the upload directory paths
	$upload_dir_paths = wp_upload_dir();

	// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
	if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {

		// If this is the URL of an auto-generated thumbnail, get the URL of the original image
		$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );

		// Remove the upload path base directory from the attachment URL
		$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );

		// Finally, run a custom database query to get the attachment ID from the modified attachment URL
		$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );

	}

	return $attachment_id;
}

?>
