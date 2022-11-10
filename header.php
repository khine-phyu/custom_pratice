<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Tutorial theme</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css?v=1.2.0.<?=rand();?>">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open();?>
    <div id="page" class="site l">
        <header id="masthead" class="site-header l-hd">
			<div class="l-hd-inn">
				<h1>Header</h1>
			</div>

		</header><!-- #masthead -->
		<div id="content" class="site-content">
        <h1>HEADER</h1>
    