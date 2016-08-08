<script src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/fasttrack/js/PxLoader.js"></script>
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
			<li><a href="/fasttrack/vote"></a></li>
			<li><a href="/fasttrack/video"></a></li>
			<li><a href="/fasttrack/kol"></a></li>
			<li><a href="/fasttrack/pro"></a></li>
		</ul>
		<img src="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>
	
	<!-- 默认页面 -->
	<div class="kolwiperCon">
		<!-- Swiper -->
	    <div class="swiper-container" id="kolSwiper">
	        <div class="swiper-wrapper">
	            <div class="swiper-slide">
					<div class="kolBox character">
						<div class="personalInfo">
							<img src="/vstyle/fasttrack/img/m0.png" width="100%">
							<div class="pInfo ycenter">
								<p>
								   赛车手<br>
								   <strong>董荷斌</strong>
								</p>
							</div>
						</div>

						<div class="con">
							<img src="/vstyle/fasttrack/img/pro/m0/v1.jpg" width="100%">
							<p>当人们还在为《速度与激情》里的酷炫漂移感到热血沸腾时，董荷斌，这个精通6门外语，驱车驾驭375公里时速的龙的传人，已经成为了赛车界的黑马，把电影里风驰电掣的特技变为了现实。 这个魅力型男不仅在跑道上有着异于常人的坚韧和果敢，举手投足间也凸显出一股独特的迷人气质，在时尚的跑道上勇往直前。</p>
							<p>董荷斌第一次和卡丁车邂逅是在14岁，那时他就和赛车结下了不解之缘。对速度的渴望，和15年不改初心的坚持，促使他永远要求自己把事情做到极致。赛车是世界上唯一不能练习的运动，因为车手的比赛用车，很少能作为其日常的练习车使用。所以车手唯一能做的就是提升体能以应对赛场上的各种速度和挑战。运动生活一定少不了合适的鞋履来应对重重挑战。董荷斌对选择鞋履极富美学追求，不仅要在外观上符合他始终如一的真我个性，还要在设计上满足人性化的健康需求。</p>
							<center><strong>他眼中的 Fast Track</strong></center>
							<div class="videoArea">
								<div class="videoTab" id="vplay-kol"></div>
								<img src="/vstyle/fasttrack/img/poster.jpg" class="opacity0" width="100%">
							</div> 
							<p>Berluti延逾百年匠心工艺，打造了凝聚速度与激情的Fast Track运动鞋。鞋面选用最优质的釉面小牛皮或植鞣小牛皮制作，柔软轻盈，舒适透气；传统的染色技法让皮革散发出迷人质感；而防滑的胶底在步履间增添些许动感气息，将追风掣电的速度和韵律展现得淋漓尽致。</p>
							<p>许多人认为冲破终点的瞬间最热血，但董荷斌却喜欢在每一段赛道中享受超越极限带来的快感。正是这种从一而终的追求，才能和Berluti Fast Track的超越创新融为一体，在长途奔袭的赛道上延续运动风尚。</p>
							<p><img src="/vstyle/fasttrack/img/pro/m0/v2.jpg" width="100%"></p>
							<img src="/vstyle/fasttrack/img/pro/m0/v0.jpg" width="100%">
						</div>
						<span class="arr"></span>
					</div>
	            </div>
	            <?php if($version >= "2") {
				?>
					<div class="swiper-slide">
						<div class="kolBox character">
							<div class="personalInfo">
								<img src="/vstyle/fasttrack/img/m1.png" width="100%">
								<div class="pInfo ycenter">
									<p>
									   企业家<br>
									   <strong>陈默</strong>
									</p>
								</div>
							</div>

							<div class="con">
								<img src="/vstyle/fasttrack/img/pro/m1/v0.jpg" width="100%">
								<p>陈默，公关专家，时尚型男，镜头前阳光帅气、渊博犀利，荧幕后德才兼备，机智过人。如今陈默再创职场传奇，却依旧朝气蓬勃，努力拼搏。可是抛开成功的光环，不是所有人都了解他领先时代、永不落后的秘密。</p>
								<p>懂得如何选择、在选择后拼尽全力，这就是陈默摆脱无趣生活的信条。总是奔走在台前幕后的他，常常一人分饰多角：面对创业之路的风雨，陈默总是坚毅冷静;但就算再忙再累，也不忘分出时间和朋友相聚，共享难得的友情时光。</p>
								<center><strong>他眼中的 Fast Track</strong></center>
								<div class="videoArea">
									<div class="videoTab" id="vplay-kol-02"></div>
									<img src="/vstyle/fasttrack/img/poster.jpg" class="opacity0" width="100%">
								</div> 
								<p>对于陈默而言，鞋履是与身体融为一体的，它承受了生命之重，也支撑起了人的精神和情怀。Berluti Fast Track，拥有无可挑剔的植鞣小牛皮，由天然及矿物性鞣革制成，搭配精美得体的动感设计和经典雅致的染色技艺，不仅带来活力夺目的独特外形，还能塑造优雅庄重的经典气质，行走之间带来愉悦的舒适体验。穿上这双最佳伴履 — 既能奔走生意职场，又能亲赴友人派对, 享受无拘无束，完美多面的人生！ </p>
								<p>世间一切经典都是在磨砺中蜕变，又在蜕变中坚守它独有的本源。Berluti的品牌精神如此，陈默的为人处世亦如此。正是这种对生活和工作不改初心的极致要求，才不断推进一个人的成长和收获。正如陈默所言：“时光会雕琢你，也会雕琢那些你曾经觉得难以面对的坎坷。”经时间淬炼出的品质，因风雨洗礼后的风姿，显现出更加绚烂的光辉，历久弥新，恒久传承。</p>
								<p><img src="/vstyle/fasttrack/img/pro/m1/v1.jpg" width="100%"></p>
								<img src="/vstyle/fasttrack/img/pro/m1/v2.jpg" width="100%">
							</div>
							<span class="arr"></span>
						</div>
		            </div>
				<?php
				}?>
	            
	            <?php if($version == "3") {
				?>
					<div class="swiper-slide">
						<div class="kolBox character">
							<div class="personalInfo">
								<img src="/vstyle/fasttrack/img/m2.png" width="100%">
								<div class="pInfo ycenter">
									<p>
									   艺人<br>
									   <strong>王博文</strong>
									</p>
								</div>
							</div>
							<div class="con">
								<img src="/vstyle/fasttrack/img/pro/m2/v1.jpg" width="100%">
								<p>男士的魅力随历练的累积而散发，从13年的乒乓训练与3年的星途，我们看到的不仅是他如何以球技征服对手, 以歌声打动观众，更是如何从国家一级运动员成功蜕变为现在这位敢于突破自我且善于展现个人独特风格的全能艺人。他，就是魅力风发的王博文。</p>
								<p>君士不器，男士都必须为自己走出一条专属的道路。2013年，这位青春大男孩王博文毅然放弃了熟悉的乒乓生涯，转战到截然不同的音乐世界。3年后，他以充满热诚与希望的音符向我们证明了只要有梦想，没有不能实现的可能。这份超人的勇气, 你也有吗？</p>
								<p>想要摆脱无趣的生活，就必须创新突破。这是王博文的时尚觉悟，亦是Berluti Fast Track运动鞋的设计初衷。Fast Track分为植鞣小牛皮和釉面小牛皮两种：植鞣小牛皮的鞋款分为蓝色和棕色两种款式，鞋头印有对称的点面花纹，鞋面上的古法染色修饰得恰到好处，鞋舌则回归庄严的牛津鞋设计，既有英伦的高贵，又有运动的活泼；釉面小牛皮的鞋款则在鞋舌上采用了交叉鞋带的创意，凭添青春趣味。</p>
								<p>王博文用自己的梦想诠释了青春的意义，将Fast Track的率真和无畏，载入步履之间。无论是成长挑战，还是拼搏狂欢，Berluti始终如影随形，助你加速前行。</p>
							</div>
							<span class="arr"></span>
						</div>
		            </div>
				<?php
				}?>
	        </div>

			<!-- Add Arrows -->
	        <div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>

	    </div>
    </div>




</div>


<script>
	$(function(){
		var _id = !"<?php echo $id ?>" ? "0" : "<?php echo $id ?>",
			vArr = ["g03161xq4d1", "a03187advye"],
			vposter = ["/vstyle/fasttrack/img/video/v1_poster.jpg", "/vstyle/fasttrack/img/video/v2_poster.jpg"];

		//console.log(_id);
		var swiper = new Swiper('#kolSwiper', {
			nextButton: '.swiper-button-next',
        	prevButton: '.swiper-button-prev',
        	initialSlide : _id,
        	onSlideChangeEnd: function(swiper){
        		if($("#vplay-kol video")[0]){
        			$("#vplay-kol video")[0].pause();
        		}
        		if($("#vplay-kol-02 video")[0]){
        			$("#vplay-kol-02 video")[0].pause();
        		}
        	}
		});

		var vposterimg = new Image();
		vposterimg.src = vposter[_id];
		vposterimg.onload=function(){
		    //图片加载完你想做的事情
		    pfun.txVideoFun(vArr[0], vposter[0], "vplay-kol");
			pfun.txVideoFun(vArr[1], vposter[1], "vplay-kol-02");
		}
		

	});
</script>



<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script>




