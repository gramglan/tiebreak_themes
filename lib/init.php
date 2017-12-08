<?php

//Contact Form 7 URLパラメーター取得　関数
function my_form_tag_filter($tag){
  if ( ! is_array( $tag ) )
  return $tag;

  if(isset($_GET['job'])){
    $name = $tag['name'];
    if($name == 'job-name')
      $tag['values'] = (array) $_GET['job'];
  }

  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter');
//Contact Form 7 URLパラメーター取得　関数

//iframeのレスポンシブ対応
function wrap_iframe_in_div($the_content) {
  if ( is_singular() ) {
    $the_content = preg_replace('/<iframe/i', '<div class="video-container"><div class="video"><iframe', $the_content);
    $the_content = preg_replace('/<\/iframe>/i', '</iframe></div></div>', $the_content);
  }
  return $the_content;
}
add_filter('the_content','wrap_iframe_in_div');

/*-------------------------------------------*/
/*	スマホ表示分岐
/*-------------------------------------------*/
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
				'iPad', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser

    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/*-------------------------------------------*/
/*	アイキャチ有効化
/*-------------------------------------------*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumbnail001', 320, 320, true );


/*-------------------------------------------*/
/*	アイキャッチ画像のURLだけを指定し出力
/*-------------------------------------------*/
function thumbnails_url(){
// 画像idを取得する
$thumbnail_id = get_post_thumbnail_id( $thumbnail_id );
/*
* 返ってくる引き数は配列
* [0]アイキャッチ画像のURL
* [1]幅
* [2]高さ
*/
$thumbnail = wp_get_attachment_image_src( $thumbnail_id, "none" );
//URLを出力
echo $thumbnail[0];
}

/*-------------------------------------------*/
/*	投稿記事一覧にアイキャッチ画像を表示
/*-------------------------------------------*/
function manage_posts_columns($columns) {
	$columns['thumbnail'] = __('Thumbnail');
	return $columns;
}
function add_column($column_name, $post_id) {
	if ( 'thumbnail' == $column_name) {
		$thum = get_the_post_thumbnail($post_id, array(75,75), 'thumbnail');
	}
	if ( isset($thum) && $thum ) {
		echo $thum;
	} else {
		echo __('');
	}
}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );

/*-------------------------------------------*/
/*	アイキャッチ画像に任意のデフォルト画像を登録
/*-------------------------------------------*/
add_action( 'save_post', 'save_default_thumbnail' );
function save_default_thumbnail( $post_id ) {
	$post_thumbnail = get_post_meta( $post_id, $key = '_thumbnail_id', $single = true );
	if ( !wp_is_post_revision( $post_id ) ) {
		if ( empty( $post_thumbnail ) ) {
			update_post_meta( $post_id, $meta_key = '_thumbnail_id', $meta_value = '62' );
		}
	}
}


/*-------------------------------------------*/
/*	投稿IDを管理画面で表示
/*-------------------------------------------*/
function add_posts_columns_postid($columns) { $columns['postid'] = 'ID'; return $columns; } function add_posts_columns_postid_row($column_name, $post_id) { if( 'postid' == $column_name ) { echo $post_id; } } add_filter( 'manage_posts_columns', 'add_posts_columns_postid' ); add_action( 'manage_posts_custom_column', 'add_posts_columns_postid_row', 10, 2 );

$posttype = "'post','recruit','holiday','news','growup'";
/*-------------------------------------------*/
/*	検索結果にカスタム投稿を含める
/*-------------------------------------------*/
function filter_search($query) {
if ($query->is_search) {
$query->set('post_type', array($posttype)
);
};
return $query;
};
add_filter('pre_get_posts', 'filter_search');


/*-------------------------------------------*/
/*	カテゴリーのアーカイブページにカスタム投稿を含める
/*-------------------------------------------*/
function add_post_category_archive( $wp_query ) {
if ($wp_query->is_main_query() && $wp_query->is_category()) {
$wp_query->set( 'post_type', array($posttype));
}
}
add_action( 'pre_get_posts', 'add_post_category_archive' , 10 , 1);

/*-------------------------------------------*/
/*	タグのアーカイブページにカスタム投稿を含める
/*-------------------------------------------*/
function add_post_tag_archive( $wp_query ) {
if ($wp_query->is_main_query() && $wp_query->is_tag()) {
$wp_query->set( 'post_type', array($posttype));
}
}
add_action( 'pre_get_posts', 'add_post_tag_archive' , 10 , 1);

?>
