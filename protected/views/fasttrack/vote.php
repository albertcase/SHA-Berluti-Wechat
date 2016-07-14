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
		            <div class="swiper-slide" data-model="M1">
						<img src="/vstyle/fasttrack/img/pro/v0.jpg" width="100%">
						<span>花样美男</span>
		            </div>
		            <div class="swiper-slide" data-model="M2">
						<img src="/vstyle/fasttrack/img/pro/v1.jpg" width="100%">
						<span>文艺青年</span>
		            </div>
		            <div class="swiper-slide" data-model="M3">
						<img src="/vstyle/fasttrack/img/pro/v2.jpg" width="100%">
						<span>文艺青年</span>
		            </div>
		        </div>

		        <span class="arrWhite"></span>
		    </div>


	    </div>

	</div>

	<div class="section_foot vote_foot">
		<span class="btn voteBtn">
			<a href="javascript:;"></a>
			<img src="/vstyle/fasttrack/img/mystyle_btn.png" width="100%">
		</span>
	</div>

</div>

<script>
$(function(){

	var swiper = new Swiper('#voteSwiper', {
        slidesPerView: 2,
        paginationClickable: true,
        spaceBetween: 3
    }),voteId;

    $("#voteSwiper .swiper-wrapper").delegate(".swiper-slide", "click", function(){
		$("#voteSwiper .swiper-slide").removeClass("hover");
		$(this).addClass("hover");

		voteId = $(this).attr("data-model");
	})


    $(".voteBtn a").on("click", function(){

    	if(voteId){
    		var jssdkPushData = {
	    		"week": weekId,
			    "id": voteId
			}

			pfun.ajaxFun("POST", "/api/ballot", jssdkPushData, "json", function(data){
				if(data.code){
					location.href = "/fasttrack/form";
				}
				pfun.formErrorTips(data.msg);
			});
    	}else{
    		pfun.formErrorTips("请选择你喜欢的模特并且为他投票<br>赢取你的 BERLUTI FAST TRACK 专属鞋履");
    	}
    	
    })

    
});
</script>



	<!--  
	<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script> -->




