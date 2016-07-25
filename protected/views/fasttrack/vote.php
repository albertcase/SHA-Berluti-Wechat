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
		            <div class="swiper-slide" data-model="1">
						<p><img src="/vstyle/fasttrack/img/pro/m0/v0.jpg" width="100%"></p>
						<span><i>赛道黑马</i></span>
		            </div>
		            <div class="swiper-slide" data-model="2">
						<p><img src="/vstyle/fasttrack/img/pro/m0/v1.jpg" width="100%"></p>
						<span><i>追风型男</i></span>
		            </div>
		            <div class="swiper-slide" data-model="3">
						<p><img src="/vstyle/fasttrack/img/pro/m0/v2.jpg" width="100%"></p>
						<span><i>霹雳战神</i></span>
		            </div>
		        </div>

		        <span class="arrWhite"></span>

		        <!-- Add Scroll Bar -->
        		<div class="swiper-scrollbar"></div>
		    </div>

	    </div>

	</div>

	<div class="section_foot vote_foot">
		<a href="javascript:;" class="qrcodelink"><img src="/vstyle/fasttrack/img/attention.png" width="100%"></a>
		<span class="btn voteBtn">
			<a href="javascript:;"></a>
			<img src="/vstyle/fasttrack/img/mystyle_btn.png" width="100%">
		</span>
	</div>

</div>

<script>
$(function(){

	var swiper = new Swiper('#voteSwiper', {
		scrollbar: '.swiper-scrollbar',
        direction: 'horizontal',
        slidesPerView: 'auto',
        mousewheelControl: true,
        freeMode: true

        // paginationClickable: true,
        // spaceBetween: 3
        // slidesPerView: 'auto',
    }),voteId,isform = "<?php echo $info ?>";

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

				pfun.formErrorTips(data.msg);
				if(data.code == 1){
					if(isform){
						location.href = "/fasttrack/form";
					}else{
						location.href = "/fasttrack/list";
					}
				}
				
			});
    	}else{
    		pfun.formErrorTips("请选择你喜欢的模特并且为他投票<br>赢取你的 BERLUTI FAST TRACK 专属鞋履");
    	}
    	
    })




    $(".qrcodelink").on("click", function(){
        $("#qrcode").show();
    })

    $(".close").on("click", function(){
        $(this).parents(".pup-con").hide();
    })
    
});
</script>



	<!--  
	<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script> -->




