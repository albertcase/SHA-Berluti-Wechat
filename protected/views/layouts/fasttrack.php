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

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/css/swiper.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/css/style.css" />
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/jquery.js"></script>
	
	<script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/public.js"></script>
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?33a37552e6f0e0fa416c52a226bd4d80";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>

</head>
<body>

	<div id="dreambox">
		<div id="head" class="ycenter">
			<a href="javascript:;" class="logo">
				<img src="/vstyle/fasttrack/img/logo.png" width="100%">
			</a>
		</div>
		<div id="container">
			<?php echo $content; ?>
		</div>	
		<div id="qrcode" class="pup-con">
			<a href="javascript:;" class="close">
				<img src="/vstyle/fasttrack/img/close.png">
			</a>
			<img src="/vstyle/fasttrack/img/qrcode.png" width="100%">
		</div>
	</div>
	<img src="/vstyle/fasttrack/img/bg.png" width="100%" class="opacity0">
	
	<!-- 横屏代码 -->
	<div id="orientLayer" class="mod-orient-layer">
	    <div class="mod-orient-layer__content">
	        <i class="icon mod-orient-layer__icon-orient"></i>
	        <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
	    </div>
	</div>

	<script type="text/javascript">
	$(function(){
		$(".qrcodelink").on("click", function(){
	        $("#qrcode").show();
	    })

	    $(".close").on("click", function(){
	        $(this).parents(".pup-con").hide();
	    })
	});
	</script>

</body>
</html>