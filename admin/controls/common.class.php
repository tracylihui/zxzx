<?php
	class Common extends Action {
		function init(){
			if(!file_exists("./runtime/install.lock")){
				header("Location:./install/index.php");
			}
			if(!(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"]===1)){
				$this->redirect("login/index");
			}
		}

		function mess($mess="ok", $is=null){
			$message="";
			if(is_array($mess)){
				foreach($mess as $m){
					$message.=$m;
				}	
			}else{
				$message=$mess;
			}

			if(is_null($is)){
				$this->assign("mess", "");
			}else if($is){
				$this->assign("mess", "ok");
			}else{
				$this->assign("mess", "error");
			}
			$this->assign("tmess", $message);
		}
		function upimage(){
			$path=PROJECT_PATH.'public/uploads';
			
			global $pictureSize;
			$up=new FileUpload($path.'/tmp');
			
			$up->set("allowtype", array("gif", "png", "jpg", "jpeg"))
			   ->set("thumb", array("width"=>$pictureSize["maxWidth"], "height"=>$pictureSize["maxHeight"]))
			   ->set("watermark", array("water"=>$path.'/'.WATER, "position"=>POSITION));

			if($up->upload("upload")){
				$filename=$up->getFileName();
				$_SESSION["article"][]=$filename;
				$this->mkhtml(B_PUBLIC."/uploads/tmp/".$filename);
			}else{
				$mess=strip_tags($up->getErrorMsg());	
				$this->mkhtml('', $mess);
			}
		}

		function upflash(){
			$up=new FileUpload(PROJECT_PATH.'public/uploads/tmp');
			$up->set("allowtype", array("flv","swf"));
			if($up->upload("upload")){
				$filename=$up->getFileName();
				$_SESSION["article"][]=$filename;
				$this->mkhtml(B_PUBLIC."/uploads/tmp/".$filename);
			}else{
				$mess=strip_tags($up->getErrorMsg());	
				$this->mkhtml('', $mess);
			}
		}
function editor($name,$value='',$width='100%',$height='300px') {

				$ckeditor = new CKEditor($GLOBALS ['public'] . 'ckeditor/');    //这里调用BroPHP全局变量$GLOBALS['public']
//设置模式为输出,否则下面的editor方法没有返回值,而是直接输出,无法显示在我们想要显示编辑器的位置
				$ckeditor->returnOutput=true;
				$configArray=array(
                	'height'=>$height,  //编辑器高度
               		 'width'=>$width     //编辑器宽度
				);
//CKfinder与CKEditor整合,参数1为上面实例化的CKEditor对象,参数2为CKfinder的位置public.ckfinder
				CKFinder::SetupCKEditor($ckeditor, $GLOBALS['public'].'ckfinder/') ; //无需上传功能则跳过
//创建编辑器并返回代码,用于分配到页面
				$CK = $ckeditor->editor($name,$value,$configArray);
//分配编辑器到页面,但未显示
				$this->assign ( "ck", $CK );
		}

		protected function mkhtml($fileurl,$message="") {
			$str='<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction('.$_GET['CKEditorFuncNum'].', \''.$fileurl.'\', \''.$message.'\');</script>';
			exit($str);
		}

	}
