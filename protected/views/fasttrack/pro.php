
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/swiper.min.js"></script>


<div class="section">
	<div class="menu">
		<ul>
			<li><a href="/fasttrack/vote"></a></li>
			<li><a href="/fasttrack/video"></a></li>
			<li><a href="/fasttrack/kol"></a></li>
			<li class="hover"></li>
		</ul>
		<img src="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>

	<!-- proShoe -->
	<div class="pageCon" id="proShoe">
		<div class="proShoeArea">
			<!-- Swiper -->
		    <div class="swiper-container" id="proShoeSwiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
						<div class="videoModel">
							<a href="/fasttrack/prodetailed">
								<div class="con ycenter">
										<div class="proInfo">
											<p><strong>颜色:</strong> Nero (黑色)</p>
											<p><strong>材质:</strong> 釉面小牛皮</p>
											<p><strong>价格:</strong> ¥6900.00</p>
										</div>
										<img src="/vstyle/fasttrack/img/pro/p0/bpic.jpg" width="100%">
								</div>
								<img src="/vstyle/fasttrack/img/v_bg.png" width="100%">
							</a>
						</div>
		            </div>
		            <div class="swiper-slide">
						<div class="videoModel">
							<a href="/fasttrack/prodetailed/id/1">
								<div class="con ycenter">
										<div class="proInfo">
											<p><strong>颜色:</strong> Desert Night (蓝色)</p>
											<p><strong>材质:</strong> 植鞣小牛皮</p>
											<p><strong>价格:</strong> ¥7900.00</p>
										</div>
										<img src="/vstyle/fasttrack/img/pro/p1/bpic.jpg" width="100%">
								</div>
								<img src="/vstyle/fasttrack/img/v_bg.png" width="100%">
							</a>
						</div>
		            </div>
		            <div class="swiper-slide">
						<div class="videoModel">
							<a href="/fasttrack/prodetailed/id/2">
								<div class="con ycenter">
										<div class="proInfo">
											<p><strong>颜色:</strong> Tobacco Bis (棕色)</p>
											<p><strong>材质:</strong> 植鞣小牛皮</p>
											<p><strong>价格:</strong> ¥7900.00</p>
										</div>
										<img src="/vstyle/fasttrack/img/pro/p2/bpic.jpg" width="100%">
								</div>
								<img src="/vstyle/fasttrack/img/v_bg.png" width="100%">
							</a>
						</div>
		            </div>
		        </div>

		        <!-- Add Arrows -->
		        <div class="swiper-button-next"></div>
		        <div class="swiper-button-prev"></div>
		    </div>
		</div>
	</div>


	<div class="section_foot">
		<a href="javascript:;" class="qrcodelink"><img src="/vstyle/fasttrack/img/attention.png" width="100%"></a>
		<img src="/vstyle/fasttrack/img/slogan.png" width="100%">
		<span class="btn">
			<a href="/fasttrack/vote"></a>
			<img src="/vstyle/fasttrack/img/earnBtn.png" width="100%">
		</span>
	</div>

</div>


<script>
$(function(){

	var swiperProShoe = new Swiper('#proShoeSwiper', {
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    
});
</script>



	<!--  
	<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script> -->




