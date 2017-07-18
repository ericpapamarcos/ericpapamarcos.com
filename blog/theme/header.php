<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if (is_single()) : ?>
<?php $tags = get_the_tags(); if ($tags) : ?>
		<meta name="keywords" content="<?php $count = count($tags); $counter = 1; foreach($tags as $tag) { echo $tag->name; if ($counter != $count) { echo ", "; } $counter++; } ?>" />
<?php endif; ?>
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