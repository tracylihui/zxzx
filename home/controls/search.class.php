<?php
	class Search {
		function index(){
			//获取并分配菜单项
			
				
			//将网站名称分配到模板中，在标题栏中显示
			$this->assign("appname", APP_NAME);
			$this->assign("keywords", KEYWORD);
			$this->assign("description", DESCRIPTION);
			$this->assign("phone", PHONE);
			$this->assign("mail", MAIL);
			//获取并分配菜单项 
			$column=D("column");
			$article=D("article");
			$time=strtotime(date("Y-m-d"));
			
			$menu=$column->field('id,title')->where(array("pid"=>0,"display"=>1, "isnav"=>1))->select();
			$menu1=$column->field('id,title')->where(array("pid"=>0,"display"=>1))->select();
			$this->assign("menu",$menu);
			$this->assign("menu1",$menu1);
			$this->assign("size",960/(count($menu)+1));
			
			$sers=!empty($_POST["search"]) ? $_POST : $_GET;

			

			$where=array($sers["serType"]=>"%{$sers["search"]}%", "audit"=>"1");
			
			$args="serType/{$sers["serType"]}/search/{$sers["search"]}";
			$total=$article->where($where)->total();
			$page=new Page($total, ARTICLE_PAGE_SIZE, $args);
			$this->assign("searchs", $article->field('id,title,summary,posttime,uid,views')->where($where)->limit($page->limit)->r_select(array("user", "username as author", 'id', 'uid')));

			$this->assign("fpage", $page->fpage());
			$this->assign("total", $total);
			$this->assign("search", $sers["search"]);
			$this->assign("serType", $sers["serType"]);
			//获取并分配友情链接内容
				$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
			$this->getVisitor1();
			$this->display();
		}
	}
