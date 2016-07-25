<div class="section">
	<div class="menu">
		<ul>
			<li><a href="/fasttrack/vote"></a></li>
			<li><a href="/fasttrack/video"></a></li>
			<li class="hover"></li>
			<li><a href="/fasttrack/pro"></a></li>
		</ul>
		<img src="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>

	<!-- personal -->
	<div class="pageCon" id="personal">
		<div class="personalCon ycenter">
			<ul>
				<li class="nopadding">
					<a href="/fasttrack/koldetailed"></a>
					<div class="personalInfo">
						<img src="/vstyle/fasttrack/img/m0.jpg" width="100%">
						<div class="pInfo ycenter">
							<p>
							   赛车手<br>
							   <strong>董荷斌</strong>
							</p>
						</div>
					</div>
				</li>
				<li class="nopadding">
					<a href="/fasttrack/koldetailed/id/1"></a>
					<div class="personalInfo">
						<img src="/vstyle/fasttrack/img/m1.jpg" width="100%">
						<div class="pInfo ycenter">
							<p>
							   企业家<br>
							   <strong>陈默</strong>
							</p>
						</div>
					</div>
				</li>
				<li class="nopadding">
					<a href="/fasttrack/koldetailed/id/2"></a>
					<div class="personalInfo">
						<img src="/vstyle/fasttrack/img/m2.jpg" width="100%">
						<div class="pInfo ycenter">
							<p>
							   艺人<br>
							   <strong>王博文</strong>
							</p>
						</div>
					</div>
				</li>

				<!-- <li>
					<a href="/fasttrack/koldetailed/id/2"></a>
					<i>他英俊潇洒 <strong>8月15日</strong> 鲜肉来袭</i>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="section_foot">
		<a href="javascript:;" class="qrcodelink"><img src="/vstyle/fasttrack/img/attention.png" width="100%"></a>
		<img src="/vstyle/fasttrack/img/slogan.png" width="100%">
		<span class="btn">
			<a href="/fasttrack/vote"></a>
			<img src="/vstyle/fasttrack/img/earnBtn.png" width="100%">
		</span>
	</div>

</div>


<script type="text/javascript">
$(function(){
	if($(".personalCon li").length > 3){
    	$(".personalCon").removeClass("ycenter");
    };

    $(".qrcodelink").on("click", function(){
        $("#qrcode").show();
    })

    $(".close").on("click", function(){
        $(this).parents(".pup-con").hide();
    })
})
</script>



