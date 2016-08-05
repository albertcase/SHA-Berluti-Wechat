
<div class="section">
	
	<!-- 默认页面 -->
	<div class="pageCon pageSection" id="form" style="display: inline-block;">
		<div class="formCon">
			<div class="formText">
				<h2>感谢您的参与！</h2>
				<p>
					马上留下您的联系方式，<br>
					就有机会快人一步赢取您的Berluti最新款鞋履，<br>
					获奖名单公布后，工作人员将会第一时间与您联络<br>
					<br>
				</p>
			</div>

			<ul class="formul">
				<li>
					<span>姓名</span> <input type="text" name="name">
					<div class="gender">
						<em><input type="radio" name="sex" value="先生">先生</em>
						<em><input type="radio" name="sex" value="女士">女士</em>
					</div>
				</li>
				<li>
					<span>电话</span> <input type="tel" name="tel">
				</li>
				<li>
					<span>邮箱</span> <input type="text" name="email">
				</li>
				<li class="address">
					<span>地址</span> <input type="text" name="address">
				</li>
			</ul>

		</div>

		
	</div>

	<div class="section_foot">
		<a href="javascript:;" class="qrcodelink"><img src="/vstyle/fasttrack/img/attention.png" width="100%"></a>
		<span class="btn form_footer">
			<a href="javascript:" class="submitBtn"></a>
			<img src="/vstyle/fasttrack/img/submit_btn.png" width="100%">
		</span>
	</div>



</div>


<script type="text/javascript">
	
	$(".gender").delegate("em", "click", function(){
		$(".gender em").removeClass("hover");
		$(this).addClass("hover");
	})

	$(".submitBtn").on("click", function(){
		var fname = $("input[name='name']").val(),
			fsex = $("input[name='sex']:checked").val(),
			ftel = $("input[name='tel']").val(),
			femail = $("input[name='email']").val(),
			faddress = $("input[name='address']").val();
			$(this).addClass("disable");

		if(fname == ""){
			pfun.formErrorTips("姓名不能为空！");
			$(this).removeClass("disable");
		}else if(!fsex){
			pfun.formErrorTips("请选择您的性别！");
			$(this).removeClass("disable");
		}else if(ftel == ""){    //if(!pfun.isPhoneNum(ftel)){
			pfun.formErrorTips("手机号码输入有误！");
			$(this).removeClass("disable");
		}else if(!pfun.isEmailNum(femail)){
			pfun.formErrorTips("邮件地址输入有误！");
			$(this).removeClass("disable");
		}else if(!faddress){
			pfun.formErrorTips("请输入您的所在城市！");
			$(this).removeClass("disable");
		}else{
			

			var jssdkPushData = {
					"name": fname,
					"sex": fsex,
				    "mobile": ftel,
				    "email": femail,
				    "city": faddress
				}

				pfun.ajaxFun("POST", "/api/submit", jssdkPushData, "json", function(data){

					pfun.formErrorTips(data.msg);
					if(data.code == 1){
						location.href = "/fasttrack/list";
					}
					
				});

		}
	})
</script>














