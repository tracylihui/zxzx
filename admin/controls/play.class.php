<?php
	class Play {
		function index(){
			$article=D("article");
			
			
			$this->assign("plays",  $article->where("picname!='0'")->order("posttime desc")->select());		
			$this->mess('在首页中最多显示6张幻灯片');
			$this->display();
		}
		
		private function showform($posttime=""){
			if($posttime==""){
				$this->assign("posttime", Form::date("posttime", date("Y-m-d H:i:s", time()), 1));
			}
			else{
				
				$this->assign("posttime", Form::date("posttime", date("Y-m-d H:i:s", $posttime), 1));
			}
			
		}
		function mod() {
			$article=D("article");
			$post=$article->find($_GET["id"]);
			$column=D("column");
			$this->assign("select", $column->formselect("pid", $post["pid"]));
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息.');
			$this->editor('content',$post["content"]);
			$this->showform($post["posttime"]);
			$this->assign("post",$post);
			$this->display();
		}
		function update(){
			
			$article=D("article");
			global $pictureSize,$thumbSize;
			$up=new FileUpload();
			
			if($_POST["textfield"]!=''){
				if($up->upload("pic")){
					$_POST["picname"]=$up->getFileName();
				}else{		
					if(strpos($up->getErrorMsg(),"未允许类型")){
						$_POST["picname"]=0;
					}
				}
			}else{
				$_POST["picname"]=0;
			}
			
			if($_POST["pid"]=="0")
				$_POST["pid"]="";
			$content=$_POST["content"];
			$_POST["posttime"]=strtotime($_POST["posttime"]);
			unset($_POST["content"]);
			
			$affected=$article->update($_POST);
			$affected1=$article->aimage($content, $_POST["id"]);
			$affected_rows=$affected+$affected1;
			if($affected_rows){
				$mess="文章 {$_POST["title"]} 修改";	
				$this->redirect("index", "pid/{$_POST["pid"]}/mess/{$mess}/stats/1");
			}else{
				$_POST["content"]=stripslashes($content);
				$this->assign("post", $_POST);
				$mess=$article->getMsg();

				if($mess=="")
					$mess="没有数据被改变！";
				$this->mess($mess, false);
				$this->assign("select", D("column")->formselect("pid", $_POST["pid"]));
				$this->editor('content',$post["content"]);
				$this->showform($post["posttime"]);
				
				$this->display("mod");		
			}	
		}
		
	}
