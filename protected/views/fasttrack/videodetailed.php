<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/PxLoader.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/swiper.min.js"></script>

<div class="section">
	<div class="menu">
		<ul>
			<li><a href="/fasttrack/vote"></a></li>
			<li class="hover"></li>
			<li><a href="/fasttrack/kol"></a></li>
			<li><a href="/fasttrack/pro"></a></li>
		</ul>
		<img src="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>
	
	<!-- 默认页面 -->
	<div class="pageCon infocon" id="infoVideo">
		<div class="videoArea">
			<div id="vplay"></div>
			<img src="/vstyle/fasttrack/img/poster.jpg" class="opacity0" width="100%">
		</div>
	</div>


</div>


<script>
	$(function(){
		
		var _id = !"<?php echo $id ?>" ? "0" : "<?php echo $id ?>",
			vArr = ["s0311orkbpr", "x0308hpn9ev"],
			vposter = ["/vstyle/fasttrack/img/poster.jpg", "/vstyle/fasttrack/img/kol_poster_0.jpg"];
		pfun.txVideoFun(vArr[_id], vposter[_id], "vplay");

	});
</script>



<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script>




