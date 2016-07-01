var mfun = {
    init: function(){
    	var self = this;

		//声明资源文件列表
		var fileList = [
			'/vstyle/shoe/img/bg.png', 
			'/vstyle/shoe/img/m.jpg', 
			'/vstyle/shoe/img/d_arr.png', 
			'/vstyle/shoe/img/close.png', 
			'/vstyle/shoe/img/line.png', 
			'/vstyle/shoe/img/earnBtn.png', 
			'/vstyle/shoe/img/v_bg.png', 
			'/vstyle/shoe/img/logo.png', 
			'/vstyle/shoe/img/micon.png', 
			'/vstyle/shoe/img/rule.png', 
			'/vstyle/shoe/img/shoe_loading.png',
			'/vstyle/shoe/img/slogan.png',

			'/vstyle/shoe/img/personal_hover.png',
			'/vstyle/shoe/img/personal.png',
			'/vstyle/shoe/img/rule.png',
			'/vstyle/shoe/img/shoe_hover.png',
			'/vstyle/shoe/img/shoe.png',
			'/vstyle/shoe/img/video_hover.png',
			'/vstyle/shoe/img/video.png',
			'/vstyle/shoe/img/vote_hover.png',
			'/vstyle/shoe/img/vote.png',
			'/vstyle/shoe/img/r.png',
			'/vstyle/shoe/img/mystyle_btn.png'

		];

		self.loadingFnDoing(fileList, function(){
			//console.log(6);
		});

		$(".menu ul").delegate("li", "click", function(){
			$(".menu li").removeClass("hover");
			$(this).addClass("hover");
		})


		$(".rulelink").on("click", function(){
			$(".rulePup").show("200");
		})

		$(".close").on("click", function(){
			$(".rulePup").hide("100");
		})

		$("#voteSwiper .swiper-wrapper").delegate(".swiper-slide", "click", function(){
			$("#voteSwiper .swiper-slide").removeClass("hover");
			$(this).addClass("hover");
		})
		
    },
    loadingFnDoing: function(allAmg, loadCallback){
    	pfun.loadFn(allAmg , function (){

	        $("img").each(function(){ 
	            $(this).attr("src",$(this).attr("sourcesrc"));
	        })

	        $(".loading").fadeOut("100");

	        loadCallback();
	        
	    } , function (p){
	    	$(".loadingProgress").stop().animate({"width": p+"%"});
	        //console.log(p);
	    });
    }
}





