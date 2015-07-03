<?php
	class User {
		function index(){
			$user=D("user");
			
			$this->mess('管理员用户不能删除，否则将不能登录系统,<a href="'.B_URL.'/index/disable/1" style="background:#EECCCC;">深色记录</a>为禁用用户. ');
			$arr=$_GET;
			if($arr["disable"] == "1") {
				$where=array("disable"=>1);
				$this->assign("disable", 1);
				$pget="disable/1";  //分页条件
			}else{
				$where="";
				$select=!empty($arr['gid']) ? $arr['gid'] : 0;
			
				$search=!empty($arr["search"]) ? $arr['search'] : "";
		
				$this->assign('select', D('group')->formselect('gid', $select));
			
				if($select != 0) {  //选择用户组
					$where["gid"]=$select;
					$pget.="/gid/{$select}";  //分页条件
					$this->assign("gid", $select);
				} 
				if($search!="") {    //搜索
					$where["username"]="%{$arr["search"]}%";
					$pget.="/search/{$arr["search"]}";  //分页条件
			
				}
			}
				
			$page=new Page($user->total($where), ARTICLE_PAGE_SIZE, $pget);
			$users=$user->field("id,username,regtime,email,disable")
				    ->limit($page->limit)
                                    ->where($where)
				    ->select();

			$page->set("head", "个用户");
			$this->assign("users",$users);
			$this->assign("search", $search);
			$this->assign("fpage", $page->fpage(0,3,2,4,5,6));
			$this->assign("page", $page->page);
			$this->display();	
		}
	
		function  add(){
			$column=D("column");
			
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->assign("column",$column->select());
			$this->assign("select", D("group")->formselect("gid", 2));
			$this->display();
		}

		function insert(){
			
			$user=D("user");
			$uc=D("uc");
			$column=D("column");
			$cids=$column->field("id")->select();
			
			$_POST["srcpwd"]=$_POST["userpwd"];
			$_POST['userpwd']=md5($_POST['userpwd']);
			$_POST['repwd']=md5($_POST['repwd']);
			$uid=$user->insert($_POST, 1, 1);
			if($uid){
				foreach ($cids as $cid){
					if($_POST[$cid["id"]]!=NULL){
						$data=array("uid"=>$uid,"cid"=>$cid["id"]);
						$uc->insert($data);
					}
				}	
				$this->mess("添加用户 <b>{$_POST["username"]}</b> 成功,可以继续添加！. ", true);
				$this->redirect('index');

			}else{
				$this->mess($user->getMsg(), false);
				$this->assign("post", $_POST);
				$this->assign("column",$column->select());
				$this->display("add");
			}			
		}

		function mod(){
			$user=D("user")->find($_GET['id']);
			$column=D("column");
			$columndata=$column->field("id,title")->select();
			$uc=D("uc");
			$ucdata=$uc->where(array("uid"=>$_GET['id']))->select();
			
			for($i=0;$i<count($columndata);$i++){
				foreach($ucdata as $data){
					if($columndata[$i]["id"]==$data["cid"]){
						$columndata[$i]["checked"]=1;
					}
				}	
			}	
			$this->assign("column",$columndata);
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->assign("select", D("group")->formselect("gid", $user['gid']));
			$this->assign("post", $user);
			$this->display();
		}

		function update(){
			if($_POST["systemadmin"]==NULL){
				$_POST["systemadmin"]=0;
			}
			if($_POST["useradmin"]==NULL){
				$_POST["useradmin"]=0;
			}
			
			$user=D("user");
			$uc=D("uc");
			$column=D("column");
			$cids=$column->field("id")->select();
			if(!isset($_POST["disable"]))
				$_POST['disable']=0;
			if($_POST["userpwd"]=="") {
				unset($_POST["userpwd"]);
			}else {
				$_POST['userpwd']=md5($_POST['userpwd']);
				$_POST['repwd']=md5($_POST['repwd']);
			}
			$user->update($_POST, 1, 1);
			
			$uc->delete(array("uid"=>$_POST["id"]));
				
			foreach ($cids as $cid){
				if($_POST[$cid["id"]]!=NULL){
					$data=array("uid"=>$_POST["id"],"cid"=>$cid["id"]);
					$uc->insert($data);
				}
			}	
			$this->redirect('index');
		
		}
		function del(){
			$user=D("user");

			if(!empty($_POST)){
				$id=$_POST["id"];
				
			}else{
				$id=$_GET["id"];
			}

			if(!empty($_GET["search"]))
				$pget.="/search/{$_GET["search"]}";
				
			if(!empty($_GET["gid"]))
				$pget.="/gid/{$_GET["gid"]}";

			if(!empty($_GET["disable"]))
				$pget.="/disable/{$_GET["disable"]}";


			if($user->where($id)->r_delete(
				array("message", 'uid'),
				array("dynamic", 'uid'),
				array("dynamic", 'cid', array("otype"=>5)), 
				array("article", 'uid'), 
				array('comment', 'uid'))){
				
				$this->redirect("index", "page/{$_GET['page']}".$pget);
			}else{
				$this->error("删除用户失败!", 3, "user/index/page/{$_GET['page']}".$pget);
			}

		}

	}
