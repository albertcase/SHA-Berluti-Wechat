
<div class="section">
	
	<!-- 默认页面 -->
	<div class="pageCon pageSection" id="form" style="display: inline-block;">
		<div class="formCon">
			
			<div class="formText">
				<h2>感谢您的参与！</h2>
				<p>
					已经选好你最喜爱的款式了吗？<br>
					也许你就是它的主人哟！
				</p>
				<p>
					马上留下您的联系方式吧，<br>
					获奖名单公布后，我们的工作人员会第一时间联系您！
				</p>
			</div>

			<ul class="formul">
				<li>
					<span>姓名</span> <input type="text" name="name">
				</li>
				<li>
					<span>电话</span> <input type="tel" maxlength="11" name="tel">
				</li>
				<li>
					<span>电邮</span> <input type="text" name="email">
				</li>
			</ul>

		</div>

		<div class="section_foot">
			<span class="btn">
				<a href="javascript:" class="submitBtn"></a>
				<img src="/vstyle/fasttrack/img/submit_btn.png" width="100%">
			</span>
		</div>
	</div>

	<!-- 投票结果页面 -->
	<div class="pageCon pageSection" id="voteResult">
		<div class="formCon">
			
			<div class="formText">
				<h2>再次感谢您的参与！</h2>
				
				<h3>投票结果</h3>
			</div>

			<div class="voteResult_con">
				<div class="voteList">
					<ul>
						<li>
							<div class="con">
								<a href="javascript:;">
									<img src="/vstyle/fasttrack/img/avater.png" width="100%">
								</a>
								<em>25%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.png" class="opacity0" width="100%">
						</li>
						<li>
							<div class="con">
								<a href="javascript:;">
									<img src="/vstyle/fasttrack/img/avater.png" width="100%">
								</a>
								<em>45%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.png" class="opacity0" width="100%">
						</li>
						<li>
							<div class="con">
								<a href="javascript:;">
									<img src="/vstyle/fasttrack/img/avater.png" width="100%">
								</a>
								<em>30%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.png" class="opacity0" width="100%">
						</li>
					</ul>

					<div class="listline">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>

		</div>
		
		<div class="section_foot">
			<p>
				这么好玩的游戏，快点叫上朋友一起来参加吧！
			</p>
			<span class="btn">
				<a href="javascript:" class="shareBtn"></a>
				<img src="/vstyle/fasttrack/img/shareBtn.png" width="100%">
			</span>
		</div>

	</div>


	

</div>


<script type="text/javascript">
	$(".submitBtn").on("click", function(){
		var fname = $("input[name='name']").val(),
			ftel = $("input[name='tel']").val(),
			femail = $("input[name='email']").val();
			$(this).addClass("disable");
		if(fname == ""){
			pfun.formErrorTips("姓名不能为空！");
			$(this).removeClass("disable");
		}else if(!pfun.isPhoneNum(ftel)){
			pfun.formErrorTips("手机号码输入有误！");
			$(this).removeClass("disable");
		}else if(!pfun.isEmailNum(femail)){
			pfun.formErrorTips("邮件地址输入有误！");
			$(this).removeClass("disable");
		}else{
			console.log(8989);
		}
	})
</script>














