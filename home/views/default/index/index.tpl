<{ include file="public/header.tpl" }>
<div class="content">
	<div class="left">
		<div class="a"> <span><{ $first.title}></span><a href="<{$app}>/list/index/pid/<{ $first.id}>"> <img src="<{$res}>/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"><{ section name=article loop=$a max=5 }>
				<dl>
					<dt><a href="<{$app}>/article/index/aid/<{ $a[article].id }>"><{ $a[article].title|truncate:19}></a></dt>
					<dd><{ $a[article].posttime|date_format:"%m-%d" }></dd>
				</dl>
				<{ /section }> </div>
		</div>
		<div class="b"><span><{ $second.title}></span><a href="<{$app}>/list/index/pid/<{ $second.id}>"><img src="<{$res}>/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"> <{ section name=article loop=$b max=5 }>
				<dl>
					<dt><a href="<{$app}>/article/index/aid/<{ $b[article].id }>"><{ $b[article].title|truncate:19 }></a></dt>
					<dd><{ $b[article].posttime|date_format:"%m-%d" }></dd>
				</dl>
				<{ /section }></div>
		</div>
		<div class="c"><span><{ $six.title}></span><a href="<{$app}>/list/index/pid/<{ $six.id}>"><img src="<{$res}>/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"> <{ section name=article loop=$f max=5 }>
				<dl>
					<dt><a href="<{$app}>/article/index/aid/<{ $f[article].id }>"><{ $f[article].title|truncate:19 }></a></dt>
					<dd><{ $f[article].posttime|date_format:"%m-%d" }></dd>
				</dl>
				<{ /section }></div>
		</div>
		
	</div>
	<div class="center">
		<div style="margin-bottom:7px;"><img src="<{$res}>/images/bg1.jpg" width="6" height="20" style="padding-left:2px; padding-top:2px"/><span style="color:#000; font-size:14px; font-family:'黑体'">&nbsp;&nbsp;&nbsp;图片新闻</span>
		</div>
		<div id="pwSlidePlayer" class="pwSlide cc" onmouseover="pwSlidePlayer('pause');" onmouseout="pwSlidePlayer('goon');">
			<{section name=pic loop=$play max=6}> <div id="Switch_<{$smarty.section.pic.index}>" <{ if $smarty.section.pic.first ne true }>style="display:none;"<{/if}>> <a href="<{$app}>/article/index/aid/<{$play[pic].id}>" target="_blank"><img src="<{$public}>/uploads/<{$play[pic].picname}>" /><h3><{$play[pic].title}></h3></a></div> 

			<{/section}>
			<div class="pwSlide-bg"></div>
			<ul id="SwitchNav">
			</ul>
		</div>			
		<script src="<{$res}>/js/player.js"></script> 
		<script>pwSlidePlayer('play',1);</script> 
		<div class="a">
			<a href="http://zxzx.swu.edu.cn/zhaopin" target="_blank"><img src="<{$res}>/images/button1.jpg" width="364" height="102"/></a>
		</div>
		<div class="b">
			<a href="http://xsc.swu.edu.cn/teli/index.php" target="_blank" style="margin-right:15px; float:left"><img src="<{$res}>/images/button2.jpg" width="174" height="52"/></a>
			<a href="http://qgzx.swu.edu.cn" target="_blank" style="float:left"><img src="<{$res}>/images/button3.jpg" width="174" height="52"/></a>
		</div>
	</div>
	<div class="right">
		<div class="a"> <span><{ $three.title}></span><a href="<{$app}>/list/index/pid/<{ $three.id}>"> <img src="<{$res}>/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"><{ section name=article loop=$c max=5 }>
				<dl>
					<dt><a href="<{$app}>/article/index/aid/<{ $c[article].id }>"><{ $c[article].title|truncate:19 }></a></dt>
					<dd><{ $c[article].posttime|date_format:"%m-%d" }></dd>
				</dl>
				<{ /section }> </div>
		</div>
		<div class="b"><span><{ $four.title}></span><a href="<{$app}>/list/index/pid/<{ $four.id}>"><img src="<{$res}>/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"> <{ section name=article loop=$d max=5 }>
				<dl>
					<dt><a href="<{$app}>/article/index/aid/<{ $d[article].id }>"><{ $d[article].title|truncate:19 }></a></dt>
					<dd><{ $d[article].posttime|date_format:"%m-%d" }></dd>
				</dl>
				<{ /section }></div>
		</div>
		<div class="c"><span><{ $five.title}></span><a href="<{$app}>/list/index/pid/<{ $five.id}>"><img src="<{$res}>/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"> <{ section name=article loop=$e max=5 }>
				<dl>
					<dt><a href="<{$app}>/article/index/aid/<{ $e[article].id }>"><{ $e[article].title|truncate:19 }></a></dt>
					<dd><{ $e[article].posttime|date_format:"%m-%d" }></dd>
				</dl>
				<{ /section }></div>
		</div>
	</div>
</div>
<div class="w"></div>

<{ include file="public/footer.tpl" }> 