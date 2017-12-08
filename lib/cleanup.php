<?php
/*-------------------------------------------*/
/*	クリーンアップ
/*-------------------------------------------*/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head', 'se_global_head');
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

/*-------------------------------------------*/
/*	インラインスタイル削除
/*-------------------------------------------*/
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );

/*-------------------------------------------*/
/*	使用しないメニューを非表示にする
/*-------------------------------------------*/
function remove_admin_menus() {

    // level10以外のユーザーの場合
    if (!current_user_can('')) {
        global $menu;
        // unsetで非表示にするメニューを指定
        //unset($menu[2]);        // ダッシュボード
        unset($menu[5]);        // 投稿
        //unset($menu[10]);       // メディア
        //unset($menu[20]);       // 固定ページ
        unset($menu[25]);       // コメント
        //unset($menu[60]);       // 外観
        //unset($menu[65]);       // プラグイン
        //unset($menu[70]);       // ユーザー
        //unset($menu[75]);       // ツール
        //unset($menu[80]);       // 設定

    }
}
add_action('admin_menu', 'remove_admin_menus');

?>
