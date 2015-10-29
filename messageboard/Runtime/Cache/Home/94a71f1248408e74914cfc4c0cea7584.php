<?php if (!defined('THINK_PATH')) exit();?><?xml version='1.0' encoding='UTF-8' ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no,text/html,charset=UTF-8'">
	<title>留言板</title> <!-- <link rel="stylesheet" type="text/css" href="/messageboard/Public/css/style.css" /> -->
	<link rel="stylesheet" type="text/css" href="/messageboard/Public/css/message.css" />
</head>

<body style="background-color: #1dc45f">
	<h1 style="font: 20px 'Trebuchet MS', Arial, Helvetica, sans-serif;"
		align="right">
		Welcome,
		<?php  echo $_SESSION['username']?>
		<a href=<?php echo U('User/logout');?>>注销</a>
	</h1>
	<hr />
	<div>
		<form action=<?php echo U( 'Message/add');?> method="post" class="smart-green">
			<input type="hidden" value="<?php echo ($_SESSION['id']); ?>" name="id" />
			<h1>
				Message Board <span>Please leave your messages in the fields.
				</span>
			</h1>
			<label> <span>Message :</span> <textarea id="message"
					name="content" placeholder="Your Message to Us"></textarea>
			</label>
			<label> <span>&nbsp;</span> <input type="submit"
				class="button" value="Leave your message" />
			</label>
		</form>
	</div>
	<hr />
	<div class="smart-green">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h1>From : <?php echo ($vo["uname"]); ?></h1>
		<div style="background-color: white; height: 100px">
			<div style="height: 50px;">
				<span
					style="font: 18px 'Trebuchet MS', Arial, Helvetica, sans-serif;">&nbsp&nbspMsg：<?php echo ($vo["content"]); ?></span>
			</div>
			<div align="right">Time : <?php echo ($vo["time"]); ?></div>
		</div>
		<br/><?php endforeach; endif; else: echo "" ;endif; ?>
		<div align="center" >
			<h2><?php echo ($page); ?></h2>
		</div>
	</div>
	<hr />
	<div
		style="text-align: center; margin: 50px 0; font: normal 14px/24px 'MicroSoft YaHei';">
		<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
		<p>Copyright &copy; 2015</p>
	</div>
</body>
</html>