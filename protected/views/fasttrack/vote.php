<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/swiper.min.js"></script>

<div class="section">
	<div class="menu">
		<ul>
			<li class="hover"></li>
			<li><a href="/fasttrack/video"></a></li>
			<li><a href="/fasttrack/kol"></a></li>
			<li><a href="/fasttrack/pro"></a></li>
		</ul>
		<img src="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>
	
	<!-- vote -->
	<div class="pageCon" id="vote">

		<div class="voteSwiperCon">
			<!-- Swiper -->
		    <div class="swiper-container" id="voteSwiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide hover">
						<img src="/vstyle/fasttrack/img/pro/v0.jpg" width="100%">
						<span>花样美男</span>
		            </div>
		            <div class="swiper-slide">
						<img src="/vstyle/fasttrack/img/pro/v0.jpg" width="100%">
						<span>文艺青年</span>
		            </div>
		            <div class="swiper-slide">
						<img src="/vstyle/fasttrack/img/pro/v0.jpg" width="100%">
						<span>文艺青年</span>
		            </div>
		            <div class="swiper-slide">
						<img src="/vstyle/fasttrack/img/pro/v0.jpg" width="100%">
						<span>文艺青年</span>
		            </div>
		            <div class="swiper-slide">
						<img src="/vstyle/fasttrack/img/pro/v0.jpg" width="100%">
						<span>文艺青年</span>
		            </div>
		        </div>

		        <span class="arrWhite"></span>
		    </div>


	    </div>

	</div>

	<div class="section_foot vote_foot">
		<span class="btn">
			<a href="/fasttrack/form"></a>
			<img src="/vstyle/fasttrack/img/mystyle_btn.png" width="100%">
		</span>
	</div>

</div>

<script>
$(function(){

	var swiper = new Swiper('#voteSwiper', {
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 2
    });

    $("#voteSwiper .swiper-wrapper").delegate(".swiper-slide", "click", function(){
		$("#voteSwiper .swiper-slide").removeClass("hover");
		$(this).addClass("hover");
	})
    
});
</script>



	<!--  
	<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script> -->




