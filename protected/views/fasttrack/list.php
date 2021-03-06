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
									<img src="/vstyle/fasttrack/img/avater.jpg" width="100%">
								</a>
								<em>-%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.jpg" class="opacity0" width="100%">
						</li>
						<li>
							<div class="con">
								<a href="javascript:;">
									<img src="/vstyle/fasttrack/img/avater.jpg" width="100%">
								</a>
								<em>-%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.jpg" class="opacity0" width="100%">
						</li>
						<li>
							<div class="con">
								<a href="javascript:;">
									<img src="/vstyle/fasttrack/img/avater.jpg" width="100%">
								</a>
								<em>-%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.jpg" class="opacity0" width="100%">
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
		


	</div>

	<div class="section_foot voteFooter">
		<a href="javascript:;" class="qrcodelink"><img src="/vstyle/fasttrack/img/attention.png" width="100%"></a>
		<img src="/vstyle/fasttrack/img/shareTips.png" width="100%">
		<span class="joinBtn">
			<a href="/fasttrack/vote"></a>
			<img src="/vstyle/fasttrack/img/joinBtn.png" width="100%">
		</span>
	</div>
	
</div>


<script type="text/javascript">
	var cv;
	<?php if($version == "1") {
	?>
		cv = "v1";
	<?php 
	} else if($version == "2") {
	?>
		cv = "v2";
	<?php 
	} else {
	?>
		cv = "v3";
	<?php
	}?>

	var jssdkPushData = {
			"week": weekId,
		},
		voteNum = [];

		pfun.ajaxFun("POST", "/api/getballot", jssdkPushData, "json", function(data){

			if(data.code != 1){
				pfun.formErrorTips(data.msg);
			}
			$.map(data.msg, function(v, k){
				voteNum.push({"_id": k, "_ratio": parseFloat(v)});
			});

			voteNum.sort(function(a,b){return (a["_ratio"] < b["_ratio"]) ? 1 : -1});

			$(".voteList li").eq(0).find("em").html(voteNum[1]["_ratio"]+"%");
			$(".voteList li").eq(1).find("em").html(voteNum[0]["_ratio"]+"%");
			$(".voteList li").eq(2).find("em").html(voteNum[2]["_ratio"]+"%");

			$(".voteList li").eq(0).find("a img").attr("src", "/vstyle/fasttrack/img/"+cv+"/avater-"+voteNum[1]["_id"]+".png");
			$(".voteList li").eq(1).find("a img").attr("src", "/vstyle/fasttrack/img/"+cv+"/avater-"+voteNum[0]["_id"]+".png");
			$(".voteList li").eq(2).find("a img").attr("src", "/vstyle/fasttrack/img/"+cv+"/avater-"+voteNum[2]["_id"]+".png");

			$("#voteResult").show();
		});

</script>






