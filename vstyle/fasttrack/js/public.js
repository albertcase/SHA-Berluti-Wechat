var shareArr = {
    "_title": '快人一步赢取你的Berluti新款鞋履！', //分享标题
    "_desc": "快人一步赢取你的Berluti新款鞋履！",    // 分享朋友圈的描述
    "_desc_friend": "快人一步赢取你的Berluti新款鞋履！",    // 分享好友的描述
    "_link": window.location.href,    //分享的连接
    "_imgUrl": "http://" + window.location.host + "/vstyle/fasttrack/img/share.jpg",   //分享的图片
    "_url": window.location.href.split("#")[0]//encodeURIComponent(window.location.href.split("#")[0]) //.replace('http%3A%2F%2F','')
}

var weekId = "V1";

var pfun = {
    init: function(){
        var self = this;
        self.ajaxFun("GET", "/weixin/jssdk", {"url": shareArr["_url"]}, "json", function(data){
            self.wechatFun(data.appid, data.time, data.noncestr, data.sign);
        });
    },
    loadFn: function(arr , fn , fn2){
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
    },
    formErrorTips: function(alertNodeContext){  //错误提示弹层
        var alertInt;
        clearTimeout(alertInt);
        if($(".alertNode").length > 0){
            $(".alertNode").html(alertNodeContext);
        }else{
            var alertNode = document.createElement("div");
                alertNode.setAttribute("class","alertNode");
                alertNode.innerHTML = alertNodeContext;
                document.body.appendChild(alertNode);

        }
        alertInt = setTimeout(function(){
            $(".alertNode").remove();
        },3000);
    },
    wechatFun: function(_appId, _timestamp, _nonceStr, _signature){  //分享函数
        wx.config({
            debug: false,
            appId: _appId,
            timestamp: _timestamp,
            nonceStr: _nonceStr,
            signature: _signature,
            jsApiList: [
                // 所有要调用的 API 都要加到这个列表中
                'checkJsApi',
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                'onMenuShareQQ',
                'onMenuShareWeibo',
                'hideMenuItems',
                'showMenuItems',
                'hideAllNonBaseMenuItem',
                'showAllNonBaseMenuItem',
                'getNetworkType',
                'openLocation',
                'getLocation',
                'hideOptionMenu',
                'showOptionMenu',
                'closeWindow'
            ]
        });

        this.wxshareFun();
    },
    wxshareFun: function(){  //分享信息重置函数
        wx.ready(function () {
            // 在这里调用 API
            // 2. 分享接口
            // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口

            wx.onMenuShareAppMessage({
                title: shareArr._title,
                desc: shareArr._desc_friend,
                link: shareArr._link,
                imgUrl: shareArr._imgUrl,
                trigger: function (res) {
                    //  alert('用户点击发送给朋友');
                },
                success: function (res) {

                    //  alert('已分享');
                },
                cancel: function (res) {
                    //  alert('已取消');
                },
                fail: function (res) {
                    //  alert(JSON.stringify(res));
                }
            });


            // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口

            wx.onMenuShareTimeline({
                title: shareArr._desc,
                link: shareArr._link,
                imgUrl: shareArr._imgUrl,
                trigger: function (res) {
                    //   alert('用户点击分享到朋友圈');
                },
                success: function (res) {

                    // alert('已分享');
                },
                cancel: function (res) {
                    //  alert('已取消');
                },
                fail: function (res) {
                    //   alert(JSON.stringify(res));
                }
            });
        }); //end of wx.ready
    },
    txVideoFun: function(_vCodeNum, _vposter, _vid){

        var video,
            videoWidth = parseInt($(".videoArea").css("width"), 10),
            videoHeight = parseInt($(".videoArea").css("height"), 10);

            video = new tvp.VideoInfo(); 
            video.setVid(_vCodeNum);
            player = new tvp.Player(); 
            player.create({
              width: videoWidth + 'px',
              height: videoHeight + 'px',
              video: video,
              pic: _vposter,
              modId: _vid, //mod_player是刚刚在页面添加的div容器 autoplay:true
                oninited: function () {
                    //播放器在视频载入完毕触发
                },
                onplaying: function () {
                    //播放器真正开始播放视频第一帧画面时
                },
                onpause: function () {
                    //播放器触发暂停时，目前只针对HTML5播放器有效
                },
                onresume: function () {
                    //暂停后继续播放时触发
                },
                onallended: function () {
                    //播放器播放完毕时
                },
                onfullscreen: function (isfull) {
                    //onfullscreen(isfull) 播放器触发全屏/非全屏时，参数isfull表示当前是否是全屏
                },
                onended: function(){
                }
            });


    },
    ajaxFun: function(ajaxType, ajaxUrl, ajaxData, ajaxDataType, ajaxCallback){
       $.ajax({
            type: ajaxType,
            url: ajaxUrl,
            data: ajaxData,
            dataType: ajaxDataType
        }).done(function(data){
            ajaxCallback(data)
        })
        

        // ajaxfun("GET", "/weixin/jssdk", jssdkPushData, "json", jssdkCallback);

        // function jssdkCallback(data){
        //     wechatShare(data.appid, data.time, data.noncestr, data.sign);
        // }  
    },
    isPhoneNum: function(v){
        return /^0|^((\+?86 )|(\(\+86 \)))?(13[0-9]|15[012356789]|18[012356789]|14[57])[0-9]{8}$/.test(v);
    },
    isEmailNum: function(v){
        return /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(v);
    }

}




pfun.init();

