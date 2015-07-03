<{include file="public/header.tpl"}>

<div id="main">
	<div class="head-dark-box">
		<div class="tit">内容管理->文章管理->修改文章</div>
	</div>
	<{ include file="public/title.tpl" }>
	<form name="article" method="post" action="<{$url}>/update" enctype="multipart/form-data">
		<div class="msg-box">
			<ul class="viewmess">
				<input type="hidden" name="id" value="<{$post.id}>">
				<li class="light-row"><span class="col_width" style="float:left;">上传图片 </span>
					<div class="file-box">
						<input type='text' name='textfield' id='textfield' class='txt' value="<{ $post.picname }>" />
						<input type='button' class='btn' value='浏览' />
						<input type='button' class='btn' value='清空' onclick="document.getElementById('textfield').value=''"/>
						<input type="file" name="pic" class="file" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" />
					</div>
				</li>
				<li class="dark-row"> <span class="col_width" style="height:48px">&nbsp;</span>为文章设置LOGO，如果设置LOGO，将会自动显示到前台中间模块</br>支持上传的图片格式为（'jpg','gif','png','jpeg'）</br>如果上传的为其他格式的文件，该文件不会上传，且文章将不会显示到前台中间模块
					 </span>
				</li>
				
				<li class="light-row"> <span class="col_width">文章标题&nbsp;<span class="red_font">*</span></span>
					<input type="text" class="text-box" name="title" size="70" value="<{ $post.title }>" >
				</li>
				<li class="light-row" style="margin:0px; padding:0px">
					<textarea id="editor_id" name="content" style="width:700px;height:300px;">
						<{$post.content}>
					</textarea> </li>
				<li class="dark-row"> <span class="col_width">文章类别&nbsp;<span class="red_font">*</span></span> <{ $select }> </li>
				<li class="dark-row">
					<span class="col_width">发布日期<span class="red_font">*</span></span>
					<{$posttime}> &nbsp;
				</li>
				<li class="dark-row"><span class="col_width">同时发布到&nbsp;</span>
					
					<input type="radio"  name="news" <{if $post.news eq 0}>checked<{/if}> value="0">不同步
					<input type="radio"  name="news" <{if $post.news eq 1}>checked<{/if}>  value="1">新闻
					<input type="radio"  name="news" <{if $post.news eq 2}>checked<{/if}> value="2">公告
				
				</li>
				<li class="dark-row"><span class="col_width">是否直接链接到目标页面</span>
					
					<input type="radio"  name="ishttp" <{if $post.ishttp eq 0}>checked<{/if}> value="0">否
					<input type="radio"  name="ishttp" <{if $post.ishttp eq 1}>checked<{/if}>  value="1">是
					
					&nbsp;&nbsp;&nbsp;&nbsp;如果选择是，请在文章内容中添加超链接
				</li>
				
				
				<li class="dark-row"> <span class="col_width">&nbsp; </span>
					<input type="submit" class="button"  value="修 改">
					&nbsp;&nbsp;
					<input type="reset" class="button" value="重 置">
					&nbsp;&nbsp;
					<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<{$url}>/del/id/<{$post.id}>'" class="button" value="删 除">
				</li>
			</ul>
		</div>
	</form>
</div>
<{include file="public/footer.tpl"}> 