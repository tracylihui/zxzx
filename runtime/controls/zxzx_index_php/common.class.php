<?php
	class Common extends Action {
		function init(){
			if(!file_exists("./runtime/install.lock")){
				header("Location:./install/index.php");
			}
			//消息数
			$amks=array("index", "list", "article", "search");
			if(in_array($_GET["m"], $amks) && isset($_SESSION["login"]) && $_SESSION["login"]===1){
				$message=D("message");
				$where=array("revicename"=>$_SESSION["username"], "stutas"=>1);
				$this->assign("mtotal",$message->where($where)->total());
			}
			//没登录不能操作
			$bmks=array("user", "dynamic", "message");
			if(in_array($_GET["m"], $bmks) && $_SESSION["login"]!==1 && $_GET["a"] !="gts"){
				$this->error("你还没有登录，请先登录才能完成该操作", 3, "index/index");
			}

			if($_SESSION["articleadmin"] != "1") {
				//没有发文章的权限不能操作
				$aczs=array("add", "insert", "mod", "update", "upimage", "upflash"); //和文章有关的操作
				if($_GET["m"]=="dynamic" && in_array($_GET["a"], $aczs) && $_SESSION["sendarticle"]!=1){
					$this->error("你没有对文章的操作权限", 3);
				}
				//没有发评论的权限不能操作
				$bczs=array("addc", "modc"); //和评论有关的操作
				if($_GET["m"]=="dynamic" && in_array($_GET["a"], $bczs) && $_SESSION["sendcomment"]!=1){
					$this->error("你没有对评论的操作权限", 3);
				}
			}
			$nocache=array("user", "dynamic", "message","search");

			if(in_array($_GET["m"], $nocache)){
				$this->caching=0;     //设置缓存关闭
			}

		}	
		
		function getVisitor(){
				$visitor=D("visitor");
				$posttime=date("Ymd", time());
				
				if($visitor->where(array("posttime"=>$posttime))->find()){
					$visitor->where(array("posttime"=>$posttime))->update("views=views+1");	
				}else{
					$visitor->insert(array("posttime"=>$posttime,"views"=>1));	
				}
				
				
				//获取访问量
				$vdata=$visitor->select();
				//访问量存储变量
				$allv=0;
				$todayv=0;
				$yesterdayv=0;
				$fmonthv=0;
				$tmonthv=0;
				//获取上个月为哪一个月
				$tmp_date=date("Ym");   
   				$tmp_year=substr($tmp_date,0,4);   
    			$tmp_mon =substr($tmp_date,4,2); 
    			$tmp_forwardmonth=mktime(0,0,0,$tmp_mon-1,1,$tmp_year);  
    			$forward_month=date("Ym",$tmp_forwardmonth);   
				//遍历         
				foreach($vdata as $value){
					if($posttime==$value[posttime]){
						$todayv=$value[views];
					}
					if((date("Ymd", strtotime('-1 day')))==$value[posttime]){
						$yesterdayv=$value[views];
					}
					if(substr($value[posttime],0,6)==date("Ym")){
						$tmonthv=$tmonthv+$value[views];	
					}
					if(substr($value[posttime],0,6)==$forward_month){
						$fmonthv=$fmonthv+$value[views];	
					}
					$allv=$allv+$value[views];
				}
				$this->assign("allv",$allv);
				$this->assign("todayv",$todayv);
				$this->assign("yesterdayv",$yesterdayv);
				$this->assign("fmonthv",$fmonthv);
				$this->assign("tmonthv",$tmonthv);	
		}	
		function getVisitor1(){
				$visitor=D("visitor");
				$posttime=date("Ymd", time());

				//获取访问量
				$vdata=$visitor->select();
				//访问量存储变量
				$allv=0;
				$todayv=0;
				$yesterdayv=0;
				$fmonthv=0;
				$tmonthv=0;
				//获取上个月为哪一个月
				$tmp_date=date("Ym");   
   				$tmp_year=substr($tmp_date,0,4);   
    			$tmp_mon =substr($tmp_date,4,2); 
    			$tmp_forwardmonth=mktime(0,0,0,$tmp_mon-1,1,$tmp_year);  
    			$forward_month=date("Ym",$tmp_forwardmonth);   
				//遍历         
				foreach($vdata as $value){
					if($posttime==$value[posttime]){
						$todayv=$value[views];
					}
					if((date("Ymd", strtotime('-1 day')))==$value[posttime]){
						$yesterdayv=$value[views];
					}
					if(substr($value[posttime],0,6)==date("Ym")){
						$tmonthv=$tmonthv+$value[views];	
					}
					if(substr($value[posttime],0,6)==$forward_month){
						$fmonthv=$fmonthv+$value[views];	
					}
					$allv=$allv+$value[views];
				}
				$this->assign("allv",$allv);
				$this->assign("todayv",$todayv);
				$this->assign("yesterdayv",$yesterdayv);
				$this->assign("fmonthv",$fmonthv);
				$this->assign("tmonthv",$tmonthv);	
		}
	}
