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
        <h1 class="goal" align="left">刪除帳號畫面</h1>
        <div align = "right">
            <a href="member.php">回員工畫面</a>
        </div>
    </div>
    	<?php
			if($_SESSION['username'] != null)
			{
			    echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\"><table style='border:3px #FFD382 dashed;' border='1'>";
			    echo "<tr>
			    		<td>要刪除的帳號：</td>
			    		<td><input type=\"text\" name=\"id\" /></td>
			    		</tr>";
			    echo "<tr>
			    		<td colspan='2'><input type=\"submit\" name=\"button\" value=\"刪除\" style=\"width:300px; height:80px; font-size: 50px; font-family: 微軟正黑體; color: red; background-color: lightblue\"/></td>
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