<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/PxLoader.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/swiper.min.js"></script>


<div class="section">
	<div class="menu">
		<ul>
			<li><a href="/fasttrack/vote"></a></li>
			<li><a href="/fasttrack/video"></a></li>
			<li><a href="/fasttrack/kol"></a></li>
			<li><a href="/fasttrack/pro"></a></li>
		</ul>
		<img src="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>
	
	<!-- 默认页面 -->
	<div class="proswiperCon">

		<div class="proBox">
			<div class="con">
				
				<div class="thumbsList">
					<ul>
						<li class="hover"><img src="/vstyle/fasttrack/img/pro/s0.jpg" width="100%"></li>
						<li><img src="/vstyle/fasttrack/img/pro/s1.jpg" width="100%"></li>
						<li><img src="/vstyle/fasttrack/img/pro/s2.jpg" width="100%"></li>
					</ul>
				</div>

				<div class="proInfoArea">

					<!-- Swiper -->
				    <div class="swiper-container gallery-top">
				        <div class="swiper-wrapper" id="proGallery">
				           
				        </div>
				        <!-- Add Arrows -->
				        <div class="swiper-button-next swiper-button-white"></div>
				        <div class="swiper-button-prev swiper-button-white"></div>
				    </div>

					<dl class="proDetails">
						
					</dl>

				</div>

		    </div>
		</div>

    </div>


</div>


<script>
	$(function(){
		var proData = [
			{
				"size": 1,
				"type": "运动鞋",
				"name": "FAST TRACK",
				"style": "2016年秋冬系列",
				"description": "该款运动鞋从跑鞋上汲取灵感, 采用尼龙搭配釉光的皮革表面，三孔系带，配上轻便、防滑的鞋底，让你在任何场合都能轻松驾驭。"
			},
			{
				"size": 1,
				"type": "运动鞋",
				"name": "FAST TRACK",
				"style": "2016年秋冬系列",
				"description": "该款运动鞋从跑鞋上汲取灵感, 采用“Vitello Unico”皮革表面，三孔系带搭配压花细节，配上轻便、防滑的鞋底，让你在任何场合都能轻松驾驭。"
			},
			{
				"size": 1,
				"type": "运动鞋",
				"name": "FAST TRACK",
				"style": "2016年秋冬系列",
				"description": "该款运动鞋从跑鞋上汲取灵感, 采用“Vitello Unico”皮革表面，三孔系带搭配压花细节，配上轻便、防滑的鞋底，让你在任何场合都能轻松驾驭。"
			}
		]

		//console.log(proData);

		
		var thumbsliWidth = parseInt($(".thumbsList").css("width")) / 3,
			thumbsliLen,
			_id = !"<?php echo $id ?>" ? "0" : "<?php echo $id ?>";

		var gallerySwiper = new Swiper('.gallery-top', {
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev',
		        paginationClickable: true
			});
	
		function proDataFun(pNum){
			$(".thumbsList li").removeClass("hover");
			$(".thumbsList li").eq(pNum).addClass("hover");

			var proGalleryHTML, proDetailsHTML;
		    $.map(proData, function(v, k){
		    	if(k == pNum){
		    		proGalleryHTML = "",
		    		proDetailsHTML = "";
			    	for(var i=0; i<=v.size; i++){
			    		proGalleryHTML += '<div class="swiper-slide"><img src="/vstyle/fasttrack/img/pro/p'+pNum+'/photo-'+i+'.jpg" width="100%"></div>'
			    	}
			    	
			    	proDetailsHTML = '<dt><img src="/vstyle/fasttrack/img/pro/p'+pNum+'/bpic.jpg" width="100%"></dt><dd><h2><em>'+v.type+'</em>'+v.name+'</h2><div class="proDetailed"><p><strong>'+v.style+'</strong>'+v.description+'</p></div></dd>';
		    	}
		    	
		    })
		   $("#proGallery").html(proGalleryHTML);
		   $(".proDetails").html(proDetailsHTML);

		   gallerySwiper.update();
		   $(".swiper-button-white").removeClass("swiper-button-disabled");
		   $(".swiper-button-prev").addClass("swiper-button-disabled");
		}

		proDataFun(_id);

		$(".thumbsList li").click(function(){
			if($(this).hasClass("hover")) return false;
			var cindex = $(this).index();
			$("#proGallery").removeAttr("style");
			proDataFun(cindex);
		})
		

	});
</script>






