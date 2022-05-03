<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Standard Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo h($site->title(),false) ?> | <?php echo h($page->title(),false) ?></title>
	<!-- Search Engine -->
<?php if($page->description()->isNotEmpty()): ?>
	<meta name="description" content="<?php echo h($page->description(),false) ?>">
<?php endif ?>
<?php if($page->mainimage()->isNotEmpty() && $image = $page->image($page->mainimage())): ?>
	<meta name="image" content="<?php echo thumb($image, array('width' => 1200, 'height' => 630, 'upscale' => true, 'crop' => true))->url() ?>">
<?php endif ?>
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="<?php echo h($site->title(),false) ?> | <?php echo h($page->title(),false) ?>">
<?php if($page->description()->isNotEmpty()): ?>
	<meta itemprop="description" content="<?php echo h($page->description(),false) ?>">
<?php endif ?>
<?php if($page->mainimage()->isNotEmpty() && $image = $page->image($page->mainimage())): ?>
	<meta itemprop="image" content="<?php echo thumb($image, array('width' => 1200, 'height' => 630, 'upscale' => true, 'crop' => true))->url() ?>">
<?php endif ?>
	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo h($site->title(),false) ?> | <?php echo h($page->title(),false) ?>">
<?php if($page->description()->isNotEmpty()): ?>
	<meta name="twitter:description" content="<?php echo h($page->description(),false) ?>">
<?php endif ?>
<?php if($page->mainimage()->isNotEmpty() && $image = $page->image($page->mainimage())): ?>
	<meta name="twitter:image:src" content="<?php echo thumb($image, array('width' => 1024, 'height' => 512, 'upscale' => true, 'crop' => true))->url() ?>">
<?php endif ?>
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="<?php echo h($site->title(),false) ?> | <?php echo h($page->title(),false) ?>">
<?php if($page->description()->isNotEmpty()): ?>
	<meta name="og:description" content="<?php echo h($page->description(),false) ?>">
<?php endif ?>
<?php if($page->mainimage()->isNotEmpty() && $image = $page->image($page->mainimage())): ?>
	<meta name="og:image" content="<?php echo thumb($image, array('width' => 1200, 'height' => 630, 'upscale' => true, 'crop' => true))->url() ?>">
<?php endif ?>
	<meta name="og:url" content="<?php echo $page->url() ?>">
	<meta name="og:site_name" content="<?php echo h($site->title(),false) ?>">
	<meta name="og:locale" content="en_AU">
	<meta name="og:type" content="website">

	<!-- FAVICONS -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="assets/images/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="assets/images/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="assets/images/favicons/manifest.json">
	<link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
	<meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<!-- STYLES -->
	<?php echo css('assets/css/' . $page->intendedTemplate() . '.css') ?>

	<!-- SCRIPTS -->
	<?php echo js('assets/js/' . $page->intendedTemplate() . '.js') ?>

</head>
<body>
