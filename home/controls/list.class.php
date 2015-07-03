<?php
	class List {
		function index(){
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
				global $homeid;
				$this->assign("phone", PHONE);
				$this->assign("mail", MAIL);
				
				//获取并分配菜单项
				$column=D("column");
				$menu=$column->field('id,title')->where(array("pid"=>0,"display"=>1, "isnav"=>1))->select();
				$menu1=$column->field('id,title')->where(array("pid"=>0,"display"=>1))->select();
				$this->assign("menu",$menu);
				$this->assign("menu1",$menu1);
				$this->assign("size",960/(count($menu)+1));
				
				//获取并分配文章
				$article=D("article");
				$current=$column->where(array("id"=>$_GET["pid"], "display"=>1))->find();
				if(!$current){
					$this->error("该栏目不存在或已经被关闭!", 3, "index/index");
				}

				if($current)
					$image=D("image")->field('name')->find($current["picid"]);
				else
					$image["name"]="no_image.gif";
		
				$current['picname']=$image['name'];
				$this->assign("appname", "栏目：".$current["title"]);
				$this->assign("keywords",$current["title"]);
				$this->assign("description", $current["description"]);

				$this->assign("column", $current); 
		
				
				//上面导航
				$locs=$column->field('id,title,description')->where(str_replace('-',',', $current["path"]).','.$_GET["pid"])->select();
				$this->assign("locs",$locs);
				$time=strtotime(date("Y-m-d"));
				if($current["audit"]==1){
					$wherelist=array("pid"=>$_GET["pid"], "audit"=>1);
					$rwhere=array("recommend >"=>0, "audit"=>1, "pid"=>$_GET["pid"]);	
					$hwhere=array("audit"=>1, "pid"=>$_GET["pid"]);
				}else{
					$wherelist=array("pid"=>$_GET["pid"]);
					$rwhere=array("recommend >"=>0, "pid"=>$_GET["pid"]);	
					$hwhere=array("pid"=>$_GET["pid"]);
				}

				$page=new Page($article->where($wherelist)->total(), ARTICLE_PAGE_SIZE, "pid/{$_GET["pid"]}");
				
				
				if($wherelist["pid"]==$homeid["first"]){
					$this->assign("articles", $article->field('id,title,posttime')->where(array("pid"=>$homeid["first"]),array("news"=>1))->order("posttime desc")->limit($page->limit)->select());
				}else if($wherelist["pid"]==$homeid["three"]){
					$this->assign("articles", $article->field('id,title,posttime')->where(array("pid"=>$homeid["three"]),array("news"=>2))->order("posttime desc")->limit($page->limit)->select());
				}
				else{
					$this->assign("articles", $article->field('id,title,posttime')->where($wherelist)->order("posttime desc")->limit($page->limit)->select());
				}
				
				$this->assign("fpage", $page->fpage(0,3,4,5,6));
			
			}
			//获取并分配友情链接内容
				$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
			$this->getVisitor1();
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}
	}