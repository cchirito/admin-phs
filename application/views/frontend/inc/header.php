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
		<!-- Bootstrap -->
		<link href="<?= base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
		<link rel="stylesheet" href="<?= base_url('assets/template/css/style.css') ?>" />
		<link rel="stylesheet" href="<?= base_url('assets/template/css/front-style.css') ?>" />
		<script src="<?= base_url('assets/template/js/jquery.min.js') ?>"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="container">
					<div class="menu">
						<h1><a href="index.html">Mi empresa</a></h1>
						<nav id="nav">
							<?php
								foreach ($pages as $page) {
									echo '<a href="' . base_url($page->url) . '">' . $page->name . '</a>';
								}
							?>
						</nav>
					</div>
					
				</div>
			</header>