<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/PxLoader.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/swiper.min.js"></script>
<div class="loading ycenter">
	<div class="loadCon">
		<img src="/vstyle/fasttrack/img/shoe_loading.png" width="100%">
		<div class="loadingBar">
			<div class="loadingProgress"></div>
		</div>
	</div>
</div>

<div class="comingsoon"></div>

<div class="pup-con rulePup">
	<a href="javascript:;" class="close">
		<img src="" sourcesrc="/vstyle/fasttrack/img/close.png" width="100%">
	</a>
	<div class="ruleCon">
		<h2>条款与细则</h2>
		<p>本次活动“Fast Track”（“活动”）由Berluti（“主办方”）主办。通过参与该活动，即代表您（“参与者”）同意并接受以下条款与细则的约束：</p>
		<img src="" sourcesrc="/vstyle/fasttrack/img/line.png" class="line">
		<h3>一般规则</h3>
		<p>活动时间：2016年8月1日至2016年8月21日23:59:00（北京时间）<br>
		参与办法：<br>
		</p>
		<p class="olstyle olone">
			本活动将分三个阶段进行：<br>
			阶段1：2016年8月1日至2016年8月7日<br>
			阶段2：2016年8月8日至2016年8月14日<br>
			阶段3：2016年8月15日至2016年8月21日<br>
		</p>
		<p class="olstyle oltwo">
			参与者须于每个特定的阶段内参与该阶段投票，投票选出最喜爱造型，并填写正确的个人信息，以此取得获奖资格。若因资料虚假引起任何争议，主办方有权取消其参与资格。<br>
			每位参与者的参与权可不仅限于一个阶段，但在每阶段的投票次数以最多50次为限，超出此限的投票将不予被计算。<br>
			同一位参与者在每个阶段中并不会重复获奖，但仍可在不同阶段获奖。<br>
			主办方将于每个阶段完结后，以随机的方式在该阶段投票者中抽出1位获奖者。<br>
			每个阶段的获奖者将于该阶段结束后3天内由主办方工作人员通过微信与其联络。<br>
			如果参与者未能在收到获奖信息的3天内回复主办方，或因获奖者所预留信息不准确、不详细而导致无法与其联系，主办方将视其为自动放弃奖项，且不会提供任何形式的补偿。所空出的获奖名额由主办方另行选择。
		</p>
		<img src="" sourcesrc="/vstyle/fasttrack/img/line.png" class="line">
		<h3>奖项设置</h3>
		<p>每位获奖者可获得主办方送出的 Berluti Fast Track 鞋履一双。主办方保留奖项内容最终决定权，并不另作通知。</p>
		<p>鞋履款式、颜色由主办方决定，不得异议或更换。</p>
		<p>鞋履尺码一经确定后不予更换。</p>
		<p>主办方将根据活动参与者提供的个人信息，在一个月内通过邮递服务的形式寄送相应奖品。</p>
		<p>若奖品在运输过程中有任何损耗，或因邮寄信息的不准确而导致奖品无法被邮寄，主办方将不再给予任何奖金、实物或奖品的兑换或补偿。</p>
		<p>所有奖品不可兑换成现金或替换成其它任何形式的物品。</p>
		<img src="" sourcesrc="/vstyle/fasttrack/img/line.png" class="line">
		<h3>隐私保障和个人资料</h3>
		<p class="ruleCopyright">
			本次活动所收集到的个人信息将会由主办方严格保密，<br>
			并只作为本次活动及日后推广用途。<br>
			本活动最终解释权归Berluti所有。
		</p>
	</div>
</div>

<div class="section" id="mainer">
	<div class="menu">
		<ul>
			<li><a href="/fasttrack/vote"></a></li>
			<li><a href="/fasttrack/video"></a></li>
			<li><a href="/fasttrack/kol"></a></li>
			<li><a href="/fasttrack/pro"></a></li>
		</ul>
		<img src="" sourcesrc="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>
	
	<!-- 默认页面 -->
	<div class="pageCon" id="index">
		<div class="videoModel">
			<div class="con ycenter">
				<img src="" sourcesrc="/vstyle/fasttrack/img/kv-0.jpg" width="100%">
			</div>
			<img src="" sourcesrc="/vstyle/fasttrack/img/v_bg.png" width="100%">
		</div>
	</div>

	<div class="section_foot">
		<a href="javascript:;" class="rulelink"><img src="/vstyle/fasttrack/img/rule.png" width="100%"></a>
		<img src="" sourcesrc="/vstyle/fasttrack/img/slogan.png" width="100%">
		<span class="btn">
			<a href="/fasttrack/vote"></a>
			<img src="" sourcesrc="/vstyle/fasttrack/img/earnBtn.png" width="100%">
		</span>
	</div>

</div>


<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/main.js"></script>
<script>
$(function(){

	var baseUrl = "/vstyle/fasttrack/img/";
	//声明资源文件列表
	var fileList = [
		baseUrl + 'kv-0.jpg',
		baseUrl + 'kv-1.jpg',
		baseUrl + 'kv-2.jpg',
		baseUrl + 'avater-1.png', 
		baseUrl + 'avater-2.png', 
		baseUrl + 'avater-3.png', 
		baseUrl + 'avater.jpg', 
		baseUrl + 'bg.png', 
		baseUrl + 'd_arr.png', 
		baseUrl + 'downArr.png', 
		baseUrl + 'close.png', 
		baseUrl + 'line.png', 
		baseUrl + 'earnBtn.png', 
		baseUrl + 'v_bg.png', 
		baseUrl + 'logo.png', 
		baseUrl + 'micon.png', 
		baseUrl + 'rule.png', 
		baseUrl + 'shoe_loading.png',
		baseUrl + 'slogan.png',

		baseUrl + 'personal_hover.png',
		baseUrl + 'personal.png',
		baseUrl + 'rule.png',
		baseUrl + 'shoe_hover.png',
		baseUrl + 'shoe.png',
		baseUrl + 'video_hover.png',
		baseUrl + 'video.png',
		baseUrl + 'vote_hover.png',
		baseUrl + 'vote.png',
		baseUrl + 'r.png',
		baseUrl + 'm0.png',
		baseUrl + 'm1.png',
		baseUrl + 'm2.png',
		baseUrl + 'place.jpg',
		baseUrl + 'share.jpg',
		baseUrl + 'play.png',
		baseUrl + 'poster.jpg',
		baseUrl + 'shareBtn.png',
		baseUrl + 'submit_btn.png',
		baseUrl + 'swiperArr_l.png',
		baseUrl + 'swiperArr_r.png',
		baseUrl + 'mystyle_btn.png',

		baseUrl + '/pro/s0.jpg',
		baseUrl + '/pro/s1.jpg',
		baseUrl + '/pro/s2.jpg',
		baseUrl + '/pro/m0/v0.jpg',
		baseUrl + '/pro/m0/v1.jpg',
		baseUrl + '/pro/m0/v2.jpg',
		baseUrl + '/pro/m1/v0.jpg',
		baseUrl + '/pro/m1/v1.jpg',
		baseUrl + '/pro/m1/v2.jpg',
		baseUrl + '/pro/m2/v0.jpg',
		baseUrl + '/pro/m2/v1.jpg',
		baseUrl + '/pro/m2/v2.jpg',

	];

	mfun.loadingFnDoing(fileList, function(e){
		mfun.init();
	});
    
});
</script>



	<!--  
	<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script> -->




