<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	//資料庫設定
	//資料庫位置
	$db_server = "127.0.0.1";
	//資料庫名稱
	$db_name = "db_project";
	//資料庫管理者帳號
	$db_user = "root";
	//資料庫管理者密碼
	$db_passwd = "";

	//$db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);
	//mysqli_set_charset($db,"utf8");

	//對資料庫連線
	if(!@mysql_connect($db_server, $db_user, $db_passwd))
	    die("無法對資料庫連線");

	//資料庫連線採UTF8
	mysql_query("SET NAMES utf8");

	//選擇資料庫
	if(!@mysql_select_db($db_name))
	    die("無法使用資料庫");

	
?> 