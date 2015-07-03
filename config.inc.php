<?php
	define("DEBUG", 0);				      //开启调试模式 1 开启 0 关闭
	define("DRIVER", "mysqli");		              //数据库的驱动，本系统支持pdo(默认)和mysqli两种
	//define("DSN", "mysql:host=localhost;dbname=brophp"); //如果使用PDO可以使用，不使用则默认连接MySQL
	define("HOST", "localhost");			      //数据库主机
	define("USER", "root");                               //数据库用户名
	define("PASS", "admin");                              //数据库密码
	define("DBNAME", "zxzx");			      //数据库名
	define("TABPREFIX", "swu_");                           //数据表前缀
        //缓存开关 1开启，0为关闭
	define("CSTART", 0); 
	define("CTIME", "24*60*60*7");                          //缓存时间
	define("TPLPREFIX", "tpl");                           //模板文件的后缀名


//	$memServers = array("localhost", 11211);	     //使用memcache服务器
	
	//如果有多台memcache服务器可以使用二维数组
	$memServers = array(
			array("192.168.90.124", 11212),
			array("192.168.90.150", 11211),
			array("192.168.90.250", 11211)
		
		); 
	
      
	define("ARTICLE_PAGE_SIZE", "10");                                //后台文章每页显示的数目
	define("COMMENT_PAGE_SIZE", "15");                                //后台文章每页显示的数目
	define("PICTURE_PAGE_SIZE", "20");                                //后台图片每页显示的数目
	define("WATER","20111101145400_612.gif");                                   //水印图片名称
	define("POSITION", "0");
	$styleList = array("default" => "默认风格");  	//系统风格数组
	$pictureSize = array('maxWidth' => 600, 'maxHeight' => 500); 		//定义生成后的大小
	$thumbSize = array('width' => 50, 'height' => 50);   			//定义缩略图的大小
	$homeid = array('first' => 1, 'second' => 4, 'three' => 2, 'four' => 8, 'five' => 12, 'six' => 5);
	define("APP_NAME", "西南大学资助管理中心");
	define("KEYWORD", "");
	define("DESCRIPTION", "");
	define("PHONE", "023-68250921");
	define("MAIL", "zxzxxsc@126.com");
