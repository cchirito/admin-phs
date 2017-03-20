<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Interphase by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?= base_url('assets/template/js/jquery.min.js') ?>"></script>
		<script src="<?= base_url('assets/template/js/skel.min.js') ?>"></script>
		<script src="<?= base_url('assets/template/js/skel-layers.min.js') ?>"></script>
		<script src="<?= base_url('assets/template/js/init.js') ?>"></script>
        <link rel="stylesheet" href="<?= base_url('assets/template/css/skel.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/template/css/style.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/template/css/style-xlarge.css') ?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?= base_url('assets/template/css/ie/v8.css') ?>" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Interphase</a></h1>
				<nav id="nav">
					<ul>
                        <?php
                            foreach ($pages as $page) {
                                echo '<li><a href="' . base_url($page->url) . '">' . $page->name . '</a></li>';
                            }
                        ?>
					</ul>
				</nav>
			</header>