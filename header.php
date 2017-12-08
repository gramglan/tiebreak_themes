<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
$canonical = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="ja-jp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title><?php if ( is_home() || is_front_page() ) : ?><?php bloginfo('name'); ?>
	<?php elseif(is_page()): ?><?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>
	<?php elseif(is_single()): ?><?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>
	<?php elseif(is_category()): ?><?php single_cat_title() ?>の一覧 ｜ <?php bloginfo('name'); ?>
	<?php elseif(is_tax()): ?><?php single_term_title(); ?> ｜ <?php bloginfo('name'); ?>
	<?php elseif(is_tag()): ?><?php single_tag_title(); ?> ｜ <?php bloginfo('name'); ?>
	<?php else: ?><?php bloginfo('name'); ?><?php endif; ?></title>

	<meta name="description"  content="<?php bloginfo('description'); ?>" />
	<meta name="keywords"  content="" />
	<link rel="canonical" href="<?php echo $canonical ?>" />

		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php bloginfo('url'); ?>" />
		<meta property="og:image" content="<?php the_field('ogp_img','option');?>" />
		<meta property="og:site_name"  content="<?php bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php the_field('facebook_text','option');?>" />

		<meta property="fb:app_id" content="146097699246720" />

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@" />
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
		<meta name="twitter:url" content="<?php bloginfo('url'); ?>" />
		<meta name="twitter:description" content="<?php the_field('twitter_text','option');?>" />
		<meta name="twitter:image" content="<?php the_field('ogp_img','option');?>" />

		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/icon/favicon.ico">
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/icon/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/icon/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_directory'); ?>/icon/android-chrome-192x192.png">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/base/css/style.css">
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

				<?php wp_deregister_script('jquery'); ?>
		<?php wp_head();?>
		<script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
	</head>

	<body>
<div id="Loader"></div>
<div id="contents">
<!-- [ contents/ ] -->
	<img src="<?php bloginfo('template_directory'); ?>/base/img/line.png" alt="TIE BREAK Inc." class="mod-head-line" width="100%">
	<div class="recommend_banner"data-aos="fade-down">
		<a href="<?php the_field('rec_banner_url','option');?>" target="<?php the_field('rec_banner_target','option');?>">
			<img src="<?php the_field('rec_banner_img','option');?>" alt="<?php the_field('rec_banner_text','option');?>">
		</a>
	</div>
	<header id="header" data-aos="fade-down">
		<div class="head_wrap">
			<?php if ( is_home() || is_front_page() ) : ?>
				<h1 class="h1">
					<a href="/">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/tiebreak.svg" alt="<?php bloginfo('name'); ?>">
					</a>
				</h1>
			<?php else: ?>
				<div class="h1">
					<a href="/">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/tiebreak.svg" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
			<?php endif; ?>

			<div class="read">
				<p>
					株式会社タイブレイクはイオングループのコンビニエンスストア・ミニストップのフランチャイズ店舗経営<br>
および人材のトータルサポートを行っている会社です。
				</p>
			</div>
		</div>

	</header>

	<nav id="nav" data-aos="fade-down">
		<!-- [ sp menu] -->
		<div class="smp_menu">
			<a class="menu-trigger modal-open" data-target="menu">
					<span></span>
					<span></span>
					<span></span>
			</a>
		</div>
		<!-- [ sp menu] -->
		<div class="frame">
		<ul id="menu" class="modal-content">
			<li class="">
				<a href="/news">
					<strong class="left-line">新着情報</strong>
					<span class="font-color left-line">News</span>
				</a>
			</li>
			<li class="">
				<a href="/company">
					<strong class="left-line -blue">企業情報</strong>
					<span class="font-color left-line -blue">Company</span>
				</a>
			</li>
			<li class="">
				<a href="/service">
					<strong class="left-line -yellow">商品・サービス情報</strong>
					<span class="font-color left-line -yellow">Service</span>
				</a>
			</li>
			<li class="">
				<a href="/shop">
					<strong class="left-line -red">店舗一覧</strong>
					<span class="font-color left-line -red">Shoplist</span>
				</a>
			</li>

			<li class="">
				<a href="/recruit">
					<strong class="left-line -green">採用情報</strong>
					<span class="font-color left-line -green">Recruit</span>
				</a>
			</li>
			<li class="">
				<a href="/contact">
					<strong class="left-line -gray">お問い合わせ</strong>
					<span class="font-color left-line -gray">Contact</span>
				</a>
			</li>
			<?php if(is_mobile()) {?>
			<li class="sp">
				<a style="text-align:center;" href="<?php the_field('rec_banner_url','option');?>" target="<?php the_field('rec_banner_target','option');?>">
					<img src="<?php the_field('rec_banner_img','option');?>" alt="<?php the_field('rec_banner_text','option');?>">
				</a>
			</li>
			<?php } else { ?><?php } ?>
		</ul>
		</div>
	</nav>
