var LoadingImg = [
	"img/arr.png",
	"img/backArr.png",
	"img/contactText.png",
	"img/email.png",
	"img/hands.png",
	"img/indexBg.jpg",
	"img/insideBg.jpg",
	"img/logo_black.png",
	"img/logo.png",
	"img/mask.jpg",
	"img/name.png",

	"img/orderBtn.jpg",
	"img/p1.png",
	"img/p2.png",
	"img/p3.png",
	"img/p4.png",
	"img/p5.png",
	"img/p6.png",

	"img/p7.png",
	"img/play.png",
	"img/poster.jpg",
	"img/shoeTree.png",
	"img/shoseBg.png",
	"img/slogan.png",
	"img/startBtn.png",

	"img/tel.png",
	"img/tmTips.png",

	"img/pro/pro1_draw.png",
	"img/pro/pro2_draw.png",
	"img/pro/pro3_draw.png",
	"img/pro/pro4_draw.png",
	"img/pro/pro5_draw.png",
	//"img/pro/pro6_draw.png",
	//"img/pro/pro7_draw.png",

	"img/pro/pro1.png",
	"img/pro/pro2.png",
	"img/pro/pro3.png",
	"img/pro/pro4.png",
	"img/pro/pro5.png",
	//"img/pro/pro6.png",
	"img/pro/pro7.png"

]


function LoadFn ( arr , fn , fn2){
		var loader = new PxLoader();
		for( var i = 0 ; i < arr.length; i ++)
		{
			loader.addImage(arr[i]);
		};
		
		loader.addProgressListener(function(e) {
				var percent = Math.round( e.completedCount / e.totalCount * 100 );
				if(fn2) fn2(percent)
		});	
		
		
		loader.addCompletionListener( function(){
			if(fn) fn();	
		});
		loader.start();	
}



function loading(allAmg){
	LoadFn(allAmg , function (){

		$("img").each(function(){ 
			$(this).attr("src",$(this).attr("sourcesrc"));
		})
		$(".loading").hide();
		
	} , function (p){
		$("#dreambox").stop().animate({"opacity": p});
		//$("#loading span").html("<i>"+p+"%</i>");
		console.log(p);
	});
}


