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
        <h1 class="goal" align="left">修改密碼畫面</h1>
        <div align = "right">
            <a href="member.php">回員工畫面</a>
        </div>
    </div>
    <?php
		include("mysql_connect.inc.php");

		if($_SESSION['username'] != null)
		{
			//將$_SESSION['username']丟給$id
			//這樣在下SQL語法時才可以給搜尋的值
			$id = $_SESSION['username'];
			//若以下$id直接用$_SESSION['username']將無法使用
			$sql = "SELECT * FROM employee where username='$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_row($result);

			echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\"><table style='border:3px #FFD382 dashed;' border='1'>";
			echo "<tr>
					<td>帳號：</td>
					<td><input type=\"text\" name=\"id\" value=\"$row[1]\" placeholder='此項目無法修改'/></td>
					</tr>";
			echo "<tr>
					<td>密碼：</td>
					<td><input type=\"password\" name=\"pw\" value=\"\" /></td>
					</tr>";
			echo "<tr>
					<td>再一次輸入密碼：</td>
					<td><input type=\"password\" name=\"pw2\" value=\"\" /></td>
					</tr>";
			echo "<tr>
					<td colspan='2'><input type=\"submit\" name=\"button\" value=\"確定\" style=\"width:300px; height:80px; font-size: 50px; font-family: 微軟正黑體; color: red; background-color: lightblue\"/></td>
					</tr>";
			echo "</table></form>";
		}
		else
		{
			echo '您無權限觀看此頁面!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
		}
	?>
</body>
</html>