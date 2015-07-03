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
	<div class="a"> 文章搜索结果</div>
	<div class="b"> <{ section name=article loop=$searchs }>
		<dl>
			<dt>&nbsp;&nbsp;<a href="<{$app}>/article/index/aid/<{ $searchs[article].id }>" title="<{ $searchs[col].article }>"><{ $searchs[article].title|truncate:30 }></a></dt>
			<dd><{ $searchs[article].posttime|date_format:"%Y-%m-%d" }></dd>
		</dl>
		<{ sectionelse }>
		<li>该栏目下没有文章</li>
		<{ /section }> </div>
	<div class="c"><{$fpage}> </div>
</div>
</div>
<{ include file="public/footer.tpl" }> 