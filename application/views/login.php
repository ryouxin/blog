<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="sweetChen️">
  <meta name="keywords" content="sweetChen 网站 个人博客">
	<title>sweetChen</title>
	<link rel="shortcut icon" type="/img/x-icon" href="favicon.ico">
	<link rel="icon" type="/img/x-icon" href="favicon.ico">
	<link href="https://cdn.bootcss.com/normalize/7.0.0/normalize.min.css" rel="stylesheet">
	<link href="/css/login.css" rel="stylesheet">
	<script src="/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="userTip">sweetChen</div>
		<div class="login-box">
			<div class="icon"></div>
			<h1>Sign in to <span>sweetChen<span></h1>
			<div class="userId">
				<input type="text" name="userId" title="请填写此字段" placeholder="User ID" autocomplete="on">
			</div>
			<div class="userPassword">
				<input type="text" name="userPassword" title="请填写此字段" placeholder="Password" autocomplete="off">
			</div>
			<div class="userCheckbox">
				<input type="checkbox" name="rememberMe" title="请勾选此项"> Remember me
			</div>
		</div>
	</div>
	<canvas></canvas>
	<script src="/js/particleBg.js"></script>
</body>
</html>