
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
			

			var jssdkPushData = {
					"name": fname,
				    "mobile": ftel,
				    "email": femail
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














