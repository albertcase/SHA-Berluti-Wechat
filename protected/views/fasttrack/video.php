
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

	<!-- video -->
	<div class="pageCon" id="video">
		
		<div class="videoListArea">

			<!-- Swiper -->
		    <div class="swiper-container" id="videoSwiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
						<div class="videoModel">
							<div class="con ycenter">
								<a href="/fasttrack/videoDetailed" class="playIcon"></a>
								<img src="/vstyle/fasttrack/img/place.jpg" width="100%">
							</div>
							<img src="/vstyle/fasttrack/img/v_bg.png" width="100%">
						</div>
		            </div>
		            <div class="swiper-slide">
						<div class="videoModel">
							<div class="con ycenter">
								<a href="/fasttrack/videoDetailed/id/1" class="playIcon"></a>
								<img src="/vstyle/fasttrack/img/place.jpg" width="100%">
							</div>
							<img src="/vstyle/fasttrack/img/v_bg.png" width="100%">
						</div>
		            </div>
		            <div class="swiper-slide">
						<div class="videoModel">
							<div class="con ycenter">
								<a href="/fasttrack/videoDetailed/id/2" class="playIcon"></a>
								<img src="/vstyle/fasttrack/img/place.jpg" width="100%">
							</div>
							<img src="/vstyle/fasttrack/img/v_bg.png" width="100%">
						</div>
		            </div>
		            <div class="swiper-slide">
						<div class="videoModel">
							<div class="con ycenter">
								<a href="/fasttrack/videoDetailed/id/3" class="playIcon"></a>
								<img src="/vstyle/fasttrack/img/place.jpg" width="100%">
							</div>
							<img src="/vstyle/fasttrack/img/v_bg.png" width="100%">
						</div>
		            </div>
		            <div class="swiper-slide">
						<div class="videoModel">
							<div class="con ycenter">
								<a href="/fasttrack/videoDetailed/id/4" class="playIcon"></a>
								<img src="/vstyle/fasttrack/img/place.jpg" width="100%">
							</div>
							<img src="/vstyle/fasttrack/img/v_bg.png" width="100%">
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
		<a href="javascript:;" class="qrcodelink"><img src="/vstyle/fasttrack/img/rule.png" width="100%"></a>
		<img src="/vstyle/fasttrack/img/slogan.png" width="100%">
		<span class="btn">
			<a href="/fasttrack/vote"></a>
			<img src="/vstyle/fasttrack/img/earnBtn.png" width="100%">
		</span>
	</div>

</div>

<script>
$(function(){
    var swiperVideo = new Swiper('#videoSwiper', {
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });

    $(".qrcodelink").on("click", function(){
        $("#qrcode").show();
    })

    $(".close").on("click", function(){
        $(this).parents(".pup-con").hide();
    })

});
</script>





