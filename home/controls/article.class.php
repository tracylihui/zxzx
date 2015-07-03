<?php
	class Article {
		function index(){
			
			$article=D("article");
			$this->assign("phone", PHONE);
			$this->assign("mail", MAIL);
			//设置访问数量
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
				//如果是自己发的文章没有审核只有自己能看
				$data=$article->where(array("id"=>$_GET["aid"]))->find();
				if($data["ishttp"]==1){
					$preg='/<a .*?href=&quot;(.*?)&quot;.*?>/is';
					preg_match_all($preg,$data["content"],$match);	
					$url = $match[1][0];
					echo "<script language='javascript' type='text/javascript'>";
					echo "window.location.href='$url'";
					echo "</script>";
				}
				if(!$data) { 
					$find=array("id"=>$_GET["aid"], "audit"=>"1");
					//如果是后台管理员查看则可以是不用审核的
					if($_SESSION["articleadmin"]=="1")
						unset($find['audit']);
					$data=$article->where($find)->find();
				}
				if(!$data){
					$this->error("你现在访问的文章不存在或没有审核!", 3, "index/index");
				}
			
				//获取并分配菜单项
				$column=D("column");
				$menu=$column->field('id,title')->where(array("pid"=>0,"display"=>1,"isnav"=>1))->order("ord asc")->select();
				
				$this->assign("menu",$menu);
				$this->assign("size",960/(count($menu)+1));
				//将文章分配到模板中
				$data["content"]=str_replace("&quot;", "'", $data["content"]);
				$data["content"]=str_replace("&amp;", "&",$data["content"]);
				$data["content"]=str_replace("&lt;", "<",$data["content"]);
				$data["content"]=str_replace("&gt;", ">",$data["content"]);
				$this->assign("article", $data);
				
				//获取并分配将前位置到模板中
				$columns=$column->find($data["pid"]);
				$locs=$column->field('id,title,description')->where(str_replace('-',',', $columns["path"]).','.$columns["id"])->select();
				$this->assign("locs", $locs);

				//将网站名称分配到模板中，在标题栏中显示
				$this->assign("appname", $data["title"]);
				//将这个文章的摘要分配到模板中，在搜索引擎中标题下显示 
				$this->assign("keywords",$data["keyword"]);
				$this->assign("description", $data["summary"]);

				$this->assign("fbpl", true);
			}
			$this->getVisitor();
			//获取并分配友情链接内容
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
			$this->display(null, $_SERVER["REQUEST_URI"]);
			
			$article->where(array("id"=>$_GET["aid"]))->update("views=views+1");
			
			
		}



	}
