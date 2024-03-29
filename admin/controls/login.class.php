<?php
	class Login extends Action{
		function index(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}

		function prologin(){
			$this->validate();
			$user=D("user")
				->where(array("username"=>$_POST["username"], "userpwd"=>md5($_POST["userpwd"]), "disable"=>0))
				->find();
			if($user){
				$uc=D("uc")->field("cid")->where(array("uid"=>$user["id"]))->select();
				$cid=array();
				$i=0;
				foreach($uc as $tmp){
					$cid[$i]=$tmp["cid"];
					$i++;
				}
				$user["cid"]=$cid;
				
				$_SESSION=$user;
				$_SESSION["isLogin"]=1;
				$_SESSION["login"]=1;
				$this->redirect("index/index");
			}else{
				$this->error("用户登录失败,请重新登录！", 3, "index");
			}
		}

		function logout(){
			$username=$_SESSION["username"];
			
			D("user")->logout();
			
			$this->success("再见{$username}, 退出成功!", 1, "index");
		}

		private function validate(){
			$stats=false;
			$errormess="登录失败：<br>";
			if(!preg_match('/^\S+$/i', $_POST["username"])){
				$errormess.="用户名不能为空!<br>";
				$stats=true;	
			}
			if(!preg_match('/^\S+$/i', $_POST["username"])){
				$errormess.="用户密码不能为空!<br>";
				$stats=true;	
			}
			if(strtoupper($_POST["code"])!=$_SESSION["code"]){
				$errormess.="验证码输出错误!<br>";
				$stats=true;	
			}
			if($stats){
				$this->error($errormess, 3, "index");
			}
		}

		function code(){
			echo new Vcode(50,18);
		}
	}
