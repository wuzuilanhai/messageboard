<?php if (!defined('THINK_PATH')) exit();?><?xml version='1.0' encoding='UTF-8' ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no,text/html,charset=UTF-8'">
	<title>登录界面</title> <link rel="stylesheet" type="text/css" href="/messageboard/Public/css/style.css" />
</head>

<body>

	<div class="login-container">
		<div class="connect">
			<h1>
				<p>Login</p>
			</h1>
		</div>
		<form action=<?php echo U( 'User/login');?> method="post" id="loginForm">
			<div>
				<input type="text" name="username" class="username"
					placeholder="用户名" autocomplete="off" />
			</div>
			<div>
				<input type="password" name="password" class="password"
					placeholder="密码" oncontextmenu="return false"
					onpaste="return false" />
			</div>
			<button id="submit" type="submit">登 陆</button>
		</form>

		<a href="register.html">
			<button type="button" class="register-tis">还有没有账号？</button>
		</a>

	</div>
	<script type="text/javascript" src="/messageboard/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/messageboard/Public/js/common.js"></script>
	<!--背景图片自动更换-->
	<script type="text/javascript" src="/messageboard/Public/js/supersized.3.2.7.min.js"></script>
	<script type="text/javascript" src="/messageboard/Public/js/supersized-init.js"></script>
	<!--表单验证-->
	<script type="text/javascript" src="/messageboard/Public/js/jquery.validate.min.js"></script>
	<div
		style="text-align: center; margin: 50px 0; font: normal 14px/24px 'MicroSoft YaHei';">
		<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
		<p>Copyright &copy; 2015</p>
	</div>
</body>
</html>