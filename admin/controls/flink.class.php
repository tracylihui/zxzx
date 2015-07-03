<?php
	class Flink {
		function index(){
			$flink=D("flink");
			$this->mess('共有 <b class="red_font">'.$flink->total().'</b> 条友情链接，可以通过输入整数改变友情链接在首页中的显示顺序,从小到大的排列顺序.<br>深色的记录被设置为不显示.');

			if($_GET["display"]=="off"){
				$where=array("audit"=>0);
			}else if($_GET["display"]=="on") {
				$where=array("audit"=>1);
			}else {
				$where="";
			}

		
			$links=$flink->field("id,ord,webname,logo,url,dtime,rname,audit")
				->order("ord,id asc")
				->where($where)
				->select();

			$this->assign("links", $links);
		
			$this->display();
		}

		function add(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->display();
		}

		function insert(){
			$flink=D("flink");
			$data=$_POST;
			$data["dtime"]=time();
			if($flink->insert($data,1,1)){
					$this->mess("友情链接 <b>{$_POST["webname"]}</b> 添加成功，可以继续添加！",true);		
				}else{
					$this->mess($flink->getMsg(), false);
					$this->assign("post", $_POST);
				}
			
			$this->display("add");
		}
		function mod(){
			$flink=D("flink");
			$this->mess("提示: 带*的项目为必填信息.");
			$this->assign("post",$flink->find($_GET["id"]));
			
			$this->display();	
		}
		function update(){
			$flink=D("flink");
		
			
				if($flink->update($_POST, 1, 1)){
					$this->redirect("index");		
				}else{
					$mess=$flink->getMsg();
					if($mess=="")
						$mess="没有数据被修改！";
					$this->mess($mess, false);
					$this->assign("post", $_POST);
				}
			
			$this->display("mod");
		}

		function del(){
			$flink=D("flink");
			$row=$flink->field("logo")->find($_GET["id"]);
			if($flink->delete($_GET["id"])){
				$logo=PROJECT_PATH.'public/uploads/logos/'.$row["logo"];
				if(file_exists($logo))
					unlink($logo);
				$this->redirect("index");
			}else{
				$this->error("友情链接删除失败！", 3, "index");
			}
				
		}
		function order(){
			$flink=D("flink");

			for($i=0; $i < count($_POST["ids"]); $i++){
				$flink->update(array("id"=>$_POST["ids"][$i],"ord"=>$_POST["ord"][$i]));	
			}

			$this->redirect("index");
		}
	}
