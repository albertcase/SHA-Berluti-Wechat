
 var player = new YKU.Player('mod_player',{
    styleid: '0',
    client_id: '7ea1dcdd8ea5d799',
    vid: 'XNjg0NDQ5MTY0',
    autoplay: false,
    show_related: true,
    allowfullscreen: true,
    hideControls: true,
    events:{
        onPlayEnd: function(){ /*your code*/
            //$(".poster").show();
        },
        onPlayStart: function(){ /*your code*/ },
        onPlayerReady: function(){ /*your code*/ }
    }
});
function playVideo(){
    player.playVideo();
}
function pauseVideo(){
    player.pauseVideo();
}
function seekTo(s){
    player.seekTo(s);
}
function currentTime(){
    return player.currentTime();
}


$(".poster").click(function(){
    playVideo();
    $(this).hide();
})


function ani(){

    $("#proSwiper .draw").stop().animate({"opacity": 1});
    $("#proSwiper .swiper-slide-active .draw").stop().animate({"opacity": 0});

    $("#proSwiper .p").removeAttr("style");
    $("#proSwiper .swiper-slide-active .p").stop().animate({"opacity": 1}, 1200);
 
}


// /weixin/jssdk?url=xxx













