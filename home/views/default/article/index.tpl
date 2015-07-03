<{ include file="public/header.tpl" }>
<div class="art">
	<div class="article">
		<div class="a"> 当前位置:	
			<{ section name=loc loop=$locs }> <a href="<{$app}>/list/index/pid/<{ $locs[loc].id }>" title="<{ $locs[loc].description }>"><{ $locs[loc].title|truncate:18 }></a> &gt;
			<{ /section }>
			<{ $article.title|truncate:27 }></div>
		<h2><{ $article.title|truncate:100 }></h2>
		<center>
			【点击数:<{ $article.views }>&nbsp;&nbsp;&nbsp;&nbsp;更新时间：<{ $article.posttime|date_format:"%Y-%m-%d" }>】
		</center>
		<div class="dd">
			<div class="nav123123"> </div>
			<div id="ccont"> <{ $article.content }> </div>
			<div class="nav123123"> </div>
		</div>
	</div>
	<div class="nav123"> </div>
</div>

<{ include file="public/footer.tpl" }> 