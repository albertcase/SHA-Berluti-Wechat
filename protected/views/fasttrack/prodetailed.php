<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/PxLoader.js"></script>
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
	
	<!-- 默认页面 -->
	<div class="proswiperCon">

		<div class="proBox">
			<div class="con">

				<!-- Swiper -->
			    <div class="swiper-container gallery-top">
			        <div class="swiper-wrapper">
			           <div class="swiper-slide">
							<img src="/vstyle/fasttrack/img/m.jpg" width="100%">
							<dl>
								<dt>
									<img src="/vstyle/fasttrack/img/proplace.jpg" width="100%">
								</dt>
								<dd>
									<h2>
										<em>运动鞋</em>
										PLAYTIME
									</h2>
									<div class="proDetailed">
										<p>
											<strong>2016年/夏系列</strong>
											离开去年六月在Musee Picasso 花园举办的时装
											秀之后，这款Venezia皮革运动鞋没有采取
											做旧，而采用了涂抹装饰。相信我们，这样做
											让它大不相同。
										</p>
									</div>
								</dd>
							</dl>
			           </div>
			            <div class="swiper-slide">
							<dl>
								<dt>
									<img src="/vstyle/fasttrack/img/proplace.jpg" width="100%">
								</dt>
								<dd>
									<h2>
										<em>运动鞋</em>
										PLAYTIME
									</h2>
									<div class="proDetailed">
										<p>
											<strong>2016年/夏系列</strong>
											离开去年六月在Musee Picasso 花园举办的时装
											秀之后，这款Venezia皮革运动鞋没有采取
											做旧，而采用了涂抹装饰。相信我们，这样做
											让它大不相同。
										</p>
									</div>
								</dd>
							</dl>
			            </div>
			            <div class="swiper-slide">3</div>
			            <div class="swiper-slide">4</div>
			            <div class="swiper-slide">5</div>
			        </div>
			        <!-- Add Arrows -->
			        <div class="swiper-button-next swiper-button-white"></div>
			        <div class="swiper-button-prev swiper-button-white"></div>
			    </div>
				
				<div class="thumbsList">
					<ul>
						
					</ul>
				</div>

		    </div>
		</div>

    </div>


</div>


<script>
	$(function(){
		
		var thumbsliWidth = parseInt($(".thumbsList").css("width")) / 4,
			thumbsliLen;

		var galleryTop = new Swiper('.gallery-top', {
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        slidesPerView: '1',
	        pagination: '.thumbsList ul',
	        paginationClickable: true,
	        paginationBulletRender: function (index, className) {
	            return '<li class="' + className + '" style="width: '+thumbsliWidth+'px;"><img src="/vstyle/fasttrack/img/proplace.jpg" width="100%"></li>';
	        },
	        onInit: function(swiper){
	        	$(".thumbsList ul").css({"width": thumbsliWidth * $(".thumbsList li").length});
			}
	    });
	   
    
	});
</script>






