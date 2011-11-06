<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="WordPressテーマをデザインする時に使える、テーマの型です。HTML5でマークアップされ、facebook OGPにも対応しています。" />
	<meta name="keywords" content="WordPress,theme,WordPressテーマ" />
	
	<!-- Open Graph Protocol -->
	<meta property="og:title" content="Code is Poetry." />
	<meta property="og:url" content="http://wp.djjimba.jp" />
	<meta property="og:image" content="http://ia.media-imdb.com/rock.jpg" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="WordPressテーマをデザインする時に使える、テーマの型です。HTML5でマークアップされ、facebook OGPにも対応しています。" />
		
	<!-- CSSファイル -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<!-- IEフィクス -->
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- favicon、他 -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	
	<!-- プラグイン等のためのフック。</head>の直前に置く。 -->
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<h1><a href="<?php bloginfo('url'); ?>" class="title"><?php bloginfo('name'); ?></a></h1>
		<!-- <?php if(is_home()): ?>
			<h1><a href="<?php bloginfo('url'); ?>" class="title"><?php bloginfo('name'); ?></a></h1>
		<?php else: // ホーム以外のページが表示されている場合は H1 を削除。各記事やページのタイトルに H1 を使用 ?>
			<a href="<?php bloginfo('url'); ?>" class="title"><?php bloginfo('name'); ?></a>
		<?php endif; ?> -->

		<!-- キャッチフレーズ -->
		<p id="catchPhrase"><?php bloginfo('description'); ?></p>
		
		<!-- ナビゲーション -->
		<nav>
			<?php wp_nav_menu( array('menu_id' => 'nav' )); ?>
		</nav>
	</header>
	
	<div id="wrapper">