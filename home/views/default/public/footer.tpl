
<div class="foot">
	<div style="padding-top:15px; padding-bottom:25px;">
		<div style="width:1000px; margin:0 auto; text-align:center " >
		
			<ul>
			<li style="color:#002d68">【友情链接】</li>
				<{ section name=ls loop=$links }>
				<li><a href="<{ $links[ls].url }>" target="_blank"> <{ if $links[ls].list }> <img height="40" alt="<{ $links[ls].webname }>" src="<{$public}>/uploads/logos/<{ $links[ls].logo }>" border="0" > <{else}>
					<{ $links[ls].webname }>
					<{/if}> </a></li>
				<{ /section }>
			</ul>
		</div>
		<center>
			<font style="color:#002d68">【联系我们】</font>&nbsp;&nbsp;&nbsp;地址:重庆市北碚区天生路2号&nbsp;&nbsp;&nbsp;邮编：400715&nbsp;&nbsp;&nbsp;联系电话：<{$phone}>&nbsp;&nbsp;&nbsp;
			邮箱：<{$mail}>&nbsp;&nbsp;<a href="<{$root}>/admin.php">管理登录</a></br><font style="color:#002d68">【访问量】</font>&nbsp;&nbsp;&nbsp;今日访问量：<{ $todayv}>&nbsp;&nbsp;昨日访问量：<{ $yesterdayv}>&nbsp;&nbsp;本月访问量:：<{ $tmonthv}>&nbsp;&nbsp;上月访问量：<{ $fmonthv}>&nbsp;&nbsp;总访问量：<{ $allv}>
		</center>
	</div>
</div>
</body></html>