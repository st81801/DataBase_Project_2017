<!DOCTYPE html>

<?php session_start(); ?>
	<!--上方語法為啟用session，此語法要放在網頁最前方-->

<html lang="en">
<head>
    <link rel="Shortcut Icon" type="image/x-icon" href="iconSu.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>速糧館</title>
    <style>
        .upperdiv {
            background-color:aquamarine;
            height:170px;
            position:center;
        }
        .goal {
              position:relative;
              top:0px;  
              left:500px;
              color:crimson;
              font-family:微軟正黑體;
        }
        .logoSu {
            width:280px;
            height:220px;
            position:absolute;
            top:-35px;
            left:-20px;
        }
        table{
   	        border-collapse: collapse;
   	        width: 1500px; 	
   	        word-wrap: break-word;
   	        table-layout: fixed;
   	        font-family:微軟正黑體;
   	        font-size: 18px;
        }
        h1{
            font-family:微軟正黑體;
            font-size: 40px;
        }
    </style>
</head>
<body style="background-color:blanchedalmond">
    <div class="upperdiv">
        <a href="HomePage.html"><img src="logo.png" class="logoSu" /></a>
        <?php
			//連接資料庫
			//只要此頁面上有用到連接MySQL就要include它
			include("mysql_connect.inc.php");
			$id = $_POST['id'];
			$pw = $_POST['pw'];

			//搜尋資料庫資料
			$sql = "SELECT * FROM employee where username = '$id'";
			$result = mysql_query($sql);
			$row = @mysql_fetch_row($result);

			//判斷帳號與密碼是否為空白
			//以及MySQL資料庫裡是否有這個會員
			if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
			{
			        //將帳號寫入session，方便驗證使用者身份
			        $_SESSION['username'] = $id;
			        echo '<span class="goal"><h1>登入成功!</h1></span>';
			        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
			}
			else
			{
			        echo '<span class="goal"><h1>登入失敗!</h1></span>';
			        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
			}
		?>
    </div>
</body>
</html>