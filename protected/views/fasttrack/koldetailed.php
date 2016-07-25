<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/PxLoader.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/swiper.min.js"></script>

<div class="section">
	<div class="menu">
		<ul>
			<li><a href="/fasttrack/vote"></a></li>
			<li><a href="/fasttrack/video"></a></li>
			<li class="hover"></li>
			<li><a href="/fasttrack/pro"></a></li>
		</ul>
		<img src="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>
	
	<!-- 默认页面 -->
	<div class="kolwiperCon">
		<!-- Swiper -->
	    <div class="swiper-container" id="kolSwiper">
	        <div class="swiper-wrapper">
	            <div class="swiper-slide">
					<div class="kolBox character">
						<div class="personalInfo">
							<img src="/vstyle/fasttrack/img/m0.png" width="100%">
							<div class="pInfo ycenter">
								<p>
								   赛车手<br>
								   <strong>董荷斌</strong>
								</p>
							</div>
						</div>

						<div class="con">
							<img src="/vstyle/fasttrack/img/pro/m0/v1.jpg" width="100%">
							<p>董荷斌，毕业于中国政法大学国际经济法专业，大学主修法律，辅修计算机，现任美力三生科技有限公司(iLife3)市场传播与公关副总裁。他曾是奥美公司晋升最快的中国籍员工，其学识不下于刘同，犀利不输于马丁。因参加大型求职类综艺节目《职来职往》而被观众所熟知，还是北京音乐广播台的每周五《男左女右》节目主持人。</p>
							<!--<center>拍摄花絮</center>
							 <div class="videoArea">
								<div id="vplay"></div>
								<img src="/vstyle/fasttrack/img/poster.jpg" class="opacity0" width="100%">
							</div> -->
						</div>
						<span class="arr"></span>
					</div>
	            </div>
	            <div class="swiper-slide">
					<div class="kolBox character">
						<div class="personalInfo">
							<img src="/vstyle/fasttrack/img/m1.png" width="100%">
							<div class="pInfo ycenter">
								<p>
								   企业家<br>
								   <strong>陈默</strong>
								</p>
							</div>
						</div>

						<div class="con">
							<img src="/vstyle/fasttrack/img/pro/m1/v0.jpg" width="100%">
							<!-- <div id="vplay2"></div> -->
							<p>陈默，毕业于中国政法大学国际经济法专业，大学主修法律，辅修计算机，现任美力三生科技有限公司(iLife3)市场传播与公关副总裁。他曾是奥美公司晋升最快的中国籍员工，其学识不下于刘同，犀利不输于马丁。因参加大型求职类综艺节目《职来职往》而被观众所熟知，还是北京音乐广播台的每周五《男左女右》节目主持人。</p>
						</div>
						<span class="arr"></span>
					</div>
	            </div>
	            <div class="swiper-slide">
					<div class="kolBox character">
						<div class="personalInfo">
							<img src="/vstyle/fasttrack/img/m2.png" width="100%">
							<div class="pInfo ycenter">
								<p>
								   艺人<br>
								   <strong>王博文</strong>
								</p>
							</div>
						</div>
						<div class="con">
							<img src="/vstyle/fasttrack/img/pro/m2/v2.jpg" width="100%">
							<p>王博文，毕业于中国政法大学国际经济法专业，大学主修法律，辅修计算机，现任美力三生科技有限公司(iLife3)市场传播与公关副总裁。他曾是奥美公司晋升最快的中国籍员工，其学识不下于刘同，犀利不输于马丁。因参加大型求职类综艺节目《职来职往》而被观众所熟知，还是北京音乐广播台的每周五《男左女右》节目主持人。</p>
						</div>
						<span class="arr"></span>
					</div>
	            </div>
	        </div>

			<!-- Add Arrows -->
	        <div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>

	    </div>
    </div>




</div>


<script>
	$(function(){
		var _id = !"<?php echo $id ?>" ? "0" : "<?php echo $id ?>",
			vArr = ["s0311orkbpr", "x0308hpn9ev"],
			vposter = ["/vstyle/fasttrack/img/kol_poster_0.jpg", "/vstyle/fasttrack/img/poster.jpg"];

		//console.log(_id);
		var swiper = new Swiper('#kolSwiper', {
			nextButton: '.swiper-button-next',
        	prevButton: '.swiper-button-prev',
        	initialSlide : _id,
        	onSlideChangeEnd: function(swiper){
        		// $("#vplay video")[0].pause();
        		// $("#vplay2 video")[0].pause();
        	}
		});

		// var vposterimg = new Image();
		// vposterimg.src="/vstyle/fasttrack/img/poster.jpg";
		// vposterimg.onload=function(){
		//     //图片加载完你想做的事情
		//     pfun.txVideoFun(vArr[_id], vposter[_id], "vplay");
		// 	pfun.txVideoFun(vArr[_id], vposter[_id], "vplay2");
		// }
		

	});
</script>



<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script>




