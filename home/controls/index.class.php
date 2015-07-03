<?php
	class Index {
		function index(){
			if(!$this->isCached()) {
				global $homeid;
				//将网站名称分配到模板中，在标题栏中显示
				$this->assign("appname", APP_NAME);
				$this->assign("keywords", KEYWORD);
				$this->assign("description", DESCRIPTION);
				$this->assign("phone", PHONE);
				$this->assign("mail", MAIL);
	
				//获取并分配菜单项 
				$column=D("column");
				$article=D("article");				
				$menu=$column->field('id,title,isnav')->where(array("pid"=>0,"display"=>1))->select();
				$menunav=array();
				$num=0;
				foreach($menu as $value){
					if($value["isnav"]==1){
						$menunav[$num]=$value;
						$num++;
					}
					if($value["id"]==$homeid["first"]){
						$this->assign("first",$value);
					}
					if($value["id"]==$homeid["second"]){
						$this->assign("second",$value);
					}
					if($value["id"]==$homeid["three"]){
						$this->assign("three",$value);
					}
					if($value["id"]==$homeid["four"]){
						$this->assign("four",$value);
					}
					if($value["id"]==$homeid["five"]){
						$this->assign("five",$value);
					}
					if($value["id"]==$homeid["six"]){
						$this->assign("six",$value);
					}
					
				}
				$this->assign("menu",$menunav);
				$this->assign("size",960/(count($menunav)+1));
				
				$this->getVisitor();	
				//主页模块
				$this->assign("a", $article->field('id,title,posttime')->where(array("pid"=>$homeid["first"]),array("news"=>1))->order("posttime desc")->limit($page->limit)->select());
				$this->assign("b", $article->field('id,title,posttime')->where(array("pid"=>$homeid["second"]))->order("posttime desc")->limit($page->limit)->select());
				$this->assign("c", $article->field('id,title,posttime')->where(array("pid"=>$homeid["three"]),array("news"=>2))->order("posttime desc")->limit($page->limit)->select());
				$this->assign("d", $article->field('id,title,posttime')->where(array("pid"=>$homeid["four"]))->order("posttime desc")->limit($page->limit)->select());
				$this->assign("e", $article->field('id,title,posttime')->where(array("pid"=>$homeid["five"]))->order("posttime desc")->limit($page->limit)->select());
				$this->assign("f", $article->field('id,title,posttime')->where(array("pid"=>$homeid["six"]))->order("posttime desc")->limit($page->limit)->select());
				$this->assign("play", $article->field('id,title,posttime,picname')->where("picname!='0'")->order("posttime desc")->limit(6)->select());
			
				//获取并分配友情链接内容
				$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
			}
			$this->display();
		}
		
	}
