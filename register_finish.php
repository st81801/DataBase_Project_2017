<?php session_start(); ?>
<!DOCTYPE html>

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
            text-align: center;
            font-family:微軟正黑體;
            font-size: 18px;
        }
        a{
            font-family:微軟正黑體;
            font-size: 40px;
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
			include("mysql_connect.inc.php");

			$id = $_POST['id'];
			$pw = $_POST['pw'];
			$pw2 = $_POST['pw2'];

			//判斷帳號密碼是否為空值
			//確認密碼輸入的正確性
			if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
			{
				//新增資料進資料庫語法
				$sql = "insert into employee (username, password) values ('$id', '$pw')";
				if(mysql_query($sql))
				{
					echo '<h1 class="goal" align="left">新增成功!</h1>';
					echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
				}
				else
				{
					echo '<h1 class="goal" align="left">新增失敗!</h1>';
					echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
				}
			}
			else
			{
				echo '您無權限觀看此頁面!';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
			}
		?>
    </div>
</body>
</html>