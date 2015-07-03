<{ include file="public/header.tpl" }>
<div class="wrap">
	<div class="left">
		<h2><img src="<{$res}>/images/bg9.jpg" width="250" height="35" /></h2>
		<ul>
			
			<{ section name=li loop=$menu1 }>
			<li><a href="<{$app}>/list/index/pid/<{ $menu1[li].id }>"><{ $menu1[li].title }></a></li>
			<{ /section }>
			
			
		</ul>
		<h2><img src="<{$res}>/images/bg11.jpg" width="250" height="35" /></h2>
	</div>
	<div class="right">
		<div class="a"><img src="<{$res}>/images/bgsy_25.jpg" width="12" height="11" />&nbsp;&nbsp;当前位置
			<{ section name=loc loop=$locs }>
			&gt; <a href="<{$url}>/index/pid/<{ $locs[loc].id }>" title="<{ $locs[loc].description }>"><{ $locs[loc].title }></a> <{ /section }> </div>
		<div class="b"> <{ section name=col loop=$articles }>
			<dl>
				<dt>&nbsp;&nbsp;<a href="<{$app}>/article/index/aid/<{ $articles[col].id }>" title="<{ $articles[col].title }>"><{ $articles[col].title|truncate:37 }></a></dt>
				<dd><{ $articles[col].posttime|date_format:"%Y-%m-%d" }></dd>
			</dl>
			<{ sectionelse }>
			<li>该栏目下没有文章</li>
			<{ /section }> </div>
		<div class="c"><{$fpage}> </div>
	</div>
</div>
<{ include file="public/footer.tpl" }> 