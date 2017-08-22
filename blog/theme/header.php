<!DOCTYPE HTML>
<!-- The source code for this website is available at: https://github.com/ericpapamarcos/ericpapamarcos.com -->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if (is_single()) : ?>
<?php $tags = get_the_tags(); if ($tags) : ?>
		<meta name="keywords" content="<?php $count = count($tags); $counter = 1; foreach($tags as $tag) { echo $tag->name; if ($counter != $count) { echo ", "; } $counter++; } ?>" />
<?php endif; ?>
<?php if (has_post_thumbnail()) : ?>
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:image" content="<?php the_post_thumbnail_url(); ?>" />
<?php else : ?>
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:image" content="https://<?php echo $_SERVER['SERVER_NAME']; ?>/images/logo.png" />
<?php endif; ?>
		<meta name="twitter:site" content="@epaps" />
		<meta name="twitter:title" content="<?php echo get_the_title(); ?>" />
		<meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>" />
<?php endif; ?>
		<link rel="stylesheet" type="text/css" href="/style.css" />
		<link rel="shortcut icon" type="image/png" href="/favicon.png">
		<title><?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
    </head>

    <body>

        <div id="header">
            <div id="header-content">
                <a href="/">Eric Papamarcos</a>
                <div id="header-links">
                    <a href="/">About</a>
                    <a href="/blog">Blog</a>
                </div>
            </div>
        </div>

        <div id="content">