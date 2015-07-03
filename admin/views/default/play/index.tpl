<{include file="public/header.tpl"}>
<div id="main">
	<div class="head-dark-box">
		<div class="tit">系统管理>幻灯片管理>管理幻灯片</div>
	</div>
	<{ include file="public/title.tpl" }>
	<form  method="post" action="<{$url}>/order" >
		<div class="msg-box">
			<ul class="viewmess">
				<li class="dark-row"> <span class="list_width width_font" style="width:500px;">幻灯片标题</span><span class="list_width width_font" style="width:100px;">添加时间</span> <span class="list_width width_font">操&nbsp;&nbsp;作</span> </li>
				<{ section name=doc loop=$plays }>
				<li class="<{if $smarty.section.doc.index is even}>light-row<{else}>dark-row<{/if}>" style="padding-top:2px; padding-bottom:2px"> <span class="list_width" style="width:500px;"><{ $plays[doc].title }></span>
				<span class="list_width" style="width:100px;"><{$plays[doc].posttime|date_format:"%Y-%m-%d"}></span>
					<input type="hidden" name="ids[]" value="<{ $plays[doc].id }>">
					<span class="list_width" style="width:120px;"> 【<a href="<{$url}>/mod/id/<{ $plays[doc].id }>">修改</a>】 </span> </li>
				<{ sectionelse }>
				<li class="light-row"> 暂无幻灯片 </li>
				<{ /section }>
			</ul>
		</div>
	</form>
</div>
<{include file="public/footer.tpl"}> 