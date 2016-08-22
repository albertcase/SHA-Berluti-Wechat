<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/swiper.min.js"></script>
<script type="text/javascript">
	<?php
		if (isset($_GET['v'])) 
			$version = intval($_GET['v']);
		else 
			$version = $this->v;
	?>
	var weekId = "<?php echo $version; ?>";
</script>
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
		        	<?php if($version == "1") {
					?>
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
							<span><i>倜傥绅士</i></span>
			            </div>
					<?php 
					} else if($version == "2") {
					?>
						<div class="swiper-slide" data-model="1">
							<p><img src="/vstyle/fasttrack/img/pro/m1/v0.jpg" width="100%"></p>
							<span><i>邻家暖男</i></span>
			            </div>
			            <div class="swiper-slide" data-model="2">
							<p><img src="/vstyle/fasttrack/img/pro/m1/v1.jpg" width="100%"></p>
							<span><i>时尚精英</i></span>
			            </div>
			            <div class="swiper-slide" data-model="3">
							<p><img src="/vstyle/fasttrack/img/pro/m1/v2.jpg" width="100%"></p>
							<span><i>阳光才子</i></span>
			            </div>
					<?php 
					} else {
					?>
						<div class="swiper-slide" data-model="1">
							<p><img src="/vstyle/fasttrack/img/pro/m2/v0.jpg" width="100%"></p>
							<span><i>歌坛才俊</i></span>
			            </div>
			            <div class="swiper-slide" data-model="2">
							<p><img src="/vstyle/fasttrack/img/pro/m2/v1.jpg" width="100%"></p>
							<span><i>花样美男</i></span>
			            </div>
			            <div class="swiper-slide" data-model="3">
							<p><img src="/vstyle/fasttrack/img/pro/m2/v2.jpg" width="100%"></p>
							<span><i>率真男孩</i></span>
			            </div>
					<?php
					}?>
		            
		        </div>

		        <!-- <span class="arrWhite"></span> -->

		        <!-- Add Scroll Bar 
        		<div class="swiper-scrollbar"></div>-->
        		
		    </div>
		    <!-- Add Arrows -->
	        <div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>

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
		// scrollbar: '.swiper-scrollbar',
  //       direction: 'horizontal',
  //       slidesPerView: 'auto',
  //       mousewheelControl: true,
  //       freeMode: true
  		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        onInit: function(){
        	$("#vote").css({"opacity": 1});
        }
        // spaceBetween: 3
        
    }),voteId,isform = "<?php echo $info ?>";

    $("#voteSwiper .swiper-wrapper").delegate(".swiper-slide", "click", function(){
		$("#voteSwiper .swiper-slide").removeClass("hover");
		$(this).addClass("hover");

		voteId = $(this).attr("data-model");
	})


    $(".voteBtn a").on("click", function(){
    	pfun.formErrorTips("此次活动已经圆满结束<br>Berluti感谢您的支持与参与！");
   //  	if(voteId){
   //  		var jssdkPushData = {
	  //   		"week": weekId,
			//     "id": voteId
			// }

			// pfun.ajaxFun("POST", "/api/ballot", jssdkPushData, "json", function(data){

			// 	pfun.formErrorTips(data.msg);
			// 	if(data.code == "1"){
			// 		if(isform == "0"){
			// 			location.href = "/fasttrack/form";
			// 		}else{
			// 			setTimeout(function(){
			// 			   location.href = "/fasttrack/list";
			// 			}, 300)
			// 		}
			// 	}
				
			// });
   //  	}else{
   //  		pfun.formErrorTips("请选择你喜欢的造型并点击投票<br>赢取你的Fast Track专属鞋履");
   //  	}
    	
    })


    
});
</script>



	<!--  
	<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script> -->




