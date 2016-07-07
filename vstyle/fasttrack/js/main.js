var mfun = {
    init: function(){
    	var self = this;

		$(".rulelink").on("click", function(){
			$(".rulePup").show("200");
		})

		$(".close").on("click", function(){
			$(".rulePup").hide("100");
		})

		self.wechatShare();
    },
    loadingFnDoing: function(allAmg, loadCallback){
    	pfun.loadFn(allAmg , function (){

	        $("img").each(function(){ 
	            $(this).attr("src",$(this).attr("sourcesrc"));
	        })

	        $(".loading").fadeOut("100", function(){
	        	$("#mainer").css({"opacity": 1});
	        });
	        
	        loadCallback();
	        
	    } , function (p){
	    	$(".loadingProgress").stop().animate({"width": p+"%"});
	        //console.log(p);
	    });
    },
    wechatShare: function(){
    	pfun.ajaxfun("GET", "/weixin/jssdk", {"url": shareArr["_url"]}, "json", this.jssdkCallback);
    },
    jssdkCallback: function(){
    	pfun.wechatShare(data.appid, data.time, data.noncestr, data.sign);
    }
}





