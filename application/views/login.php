<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
	<script src="/js/user.js"></script>
</head>
<body>
	<div class="container">
		<div class="userTip">sweetChen</div>
		<div class="login-box">
			<div class="icon"></div>
			<h1>Sign in to <span>sweetChen<span></h1>
			<div class="userId">
				<input id='username' type="text" name="userId" title="请填写此字段" placeholder="User ID" autocomplete="on">
			</div>
			<div class="userPassword">
				<input id='passwd' type="text" name="userPassword" title="请填写此字段" placeholder="Password" autocomplete="off">
			</div>
			<div class="userCheckbox">
				<input type="checkbox" name="rememberMe" title="请勾选此项"> Remember me
			</div>
		</div>
	</div>
	<canvas></canvas>
	<script src="/js/particleBg.js"></script>
	<script type='text/javascript'>
	$(function(){
		$('#btn').click(function(){
			userLogin();
		});
		$(document).keydown(function(event){
    		if(event.keyCode==13){
       			userLogin();
    		}
 		});
	})
	let userLogin = () =>{
		console.log(1);
		let username = $('#username').val();
		let password = $('#passwd').val();
		let url = `/index.php/User_login/login/${username}/${password}`;
		$.ajax({
			url:url,
			success:function(response){
				if(response.c==0){
					user.userId=response.d.userInfo.user_id;
					user.userName=response.d.userInfo.user_name;
					user.userInfo=response.d.userInfo.user_info;
					user.userStage=response.d.userInfo.user_stage;
					console.log(user);
				}else{
					alert(response.m);
				}
			},
			dataType:'json'
		});
	}

	</script>
</body>
</html>
