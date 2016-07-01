<!DOCTYPE HTML>
<html>
<head>
	<title>Berluti</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no">
	<!--禁用手机号码链接(for iPhone)-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimum-scale=1.0,maximum-scale=1.0,minimal-ui" />
	<!--自适应设备宽度-->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!--控制全屏时顶部状态栏的外，默认白色-->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="Keywords" content="">
	<meta name="Description" content="...">
	
	<meta name="wxm:timeline_title" content="与高圆圆一起转动Possession">
    <meta name="wxm:appmessage_title" content="与高圆圆一起转动Possession">
    <meta name="wxm:appmessage_desc" content="转动，世界由你掌握">

    <!-- 分享缩略图，必须为绝对路径 -->
    <meta name="wxm:img_url" content="http://wximg.qq.com/wxp/moment/Vy5RRaaAl/img/share.jpg">
    <!-- 分享链接 -->
    <meta name="wxm:link" content="http://wximg.qq.com/wxp/moment/Vy5RRaaAl/html/index.html">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/shoe/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/shoe/css/swiper.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/shoe/css/style.css" />
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/shoe/js/jquery.js"></script>
	
	<script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/shoe/js/public.js"></script>
</head>
<body>

	<div id="dreambox">
		<div id="head" class="ycenter">
			<a href="javascript:;" class="logo">
				<img src="/vstyle/shoe/img/logo.png" width="100%">
			</a>
		</div>
		<div id="container">
			<?php echo $content; ?>
		</div>	
	</div>
	<img src="/vstyle/shoe/img/bg.png" width="100%" class="opacity0">

</body>
</html>