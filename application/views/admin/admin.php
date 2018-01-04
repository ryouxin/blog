<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>home page</title>
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script type='text/jscript'>
		$(function(){
			$('#btn').click(function(){
				let username = $('#username').val();
				let password = $('#password').val();
				let url = `/index.php/admin/user_sign/${username}/${password}`;
				$.ajax({
					url:url,
					success:function(response){
						if(response.c==0){
							console.log(response.m);
						}else{
							console.log(response.m);
						}
					},
					dataType:'json'
				});

			});
		})

	</script>
</head>
<body>

<div id="container">
	username<input id='username' type='text'>
	password<input id='password' type='text'>
	<button id='btn'>submit</button>
</div>

</body>
</html>
