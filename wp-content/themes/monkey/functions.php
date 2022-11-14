

<?php
function register_my_menus() {
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'main-menu' => 'Main Menu',
    'footer-menu'  => 'Footer Menu',
    'sub-menu'  => 'Sub Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );
?>

<?php
function custom_excerpt_length( $length ) {

  if ( is_front_page() ) {
    return 30;
  } elseif ( is_search() ) {
    return 40;
  } else {
    return 3;
  }

}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// カスタムロゴを有効にする。
add_theme_support('custom-logo');
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// 読み込み

/*
JS
*/
// JS・CSSファイルを読み込む
function add_files() {
	// WordPress本体のjquery.jsを読み込まない
	wp_deregister_script('jquery');

	// jQueryの読み込み
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', "", "20160608", false );

  wp_enqueue_script( 'js',get_stylesheet_directory_uri() . '/assets/js/script.js' );
  wp_enqueue_script( 'tel',get_stylesheet_directory_uri() . '/assets/js/tel-3.1.js' );
  wp_enqueue_script( 'aos',get_stylesheet_directory_uri() . '/assets/js/aos.js' );

  wp_enqueue_script( 'slick',get_stylesheet_directory_uri() . '/assets/js/slick.min.js' );
  wp_enqueue_script( 'common',get_stylesheet_directory_uri() . '/assets/js/common.js' );
}

add_action('wp_enqueue_scripts', 'add_files');
function twpp_deregister_scripts() {
  wp_deregister_script( 'script-handle' );
}



//headにタグを追加
add_action( 'wp_head', 'add_meta_to_head' );
function add_meta_to_head() {
echo '
<link rel="stylesheet" href="', $uri = get_stylesheet_directory_uri() ,'/assets/css/reset.css" />
<link rel="stylesheet" href="', $uri = get_stylesheet_directory_uri() ,'/assets/css/aos.css" />
  <link rel="stylesheet" type="text/css" href="', $uri = get_stylesheet_directory_uri() ,'/assets/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="', $uri = get_stylesheet_directory_uri() ,'/assets/css/slick.css" />
<link rel="stylesheet" href="', $uri = get_stylesheet_directory_uri() ,'/assets/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="', $uri = get_stylesheet_directory_uri() ,'/assets/css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/mgk1aob.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500;700&display=swap" rel="stylesheet">


';
}





// ?>
