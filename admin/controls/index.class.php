<?php
	class Index {
		function index(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}
		function top(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}
		function menu(){
			debug(0);  //临时关闭调试模式
			$column=D("column");
			
			$this->assign("column",$column->where($_SESSION["cid"])->select());
			$this->display();
		}
		function main(){
			$this->mess("请操作左侧菜单，对本网站的内容进行管理. ");
			$this->display();
		}
		function bottom(){
			debug(0);  //临时关闭调试模式
			
			$this->display();
		}
	}
