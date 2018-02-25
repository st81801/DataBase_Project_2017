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
        <h1 class="goal" align="left">申請帳號畫面</h1>
        <div align = "right">
            <a href="index.php">回主畫面</a>
        </div>
    </div>
    <form name="form" method="post" action="register_finish.php">
    	<table style="border:3px #FFD382 dashed; " border='1'>
    		<tr>
    			<td>帳號：</td>
    			<td><input type="text" name="id" /></td>
    		</tr>
    		<tr>
    			<td>密碼：</td>
    			<td><input type="password" name="pw" /></td>
    		</tr>
    		<tr>
    			<td>再一次輸入密碼：</td>
    			<td><input type="password" name="pw2" /></td>
    		</tr>
    		<tr>
    			<td colspan="2"><input type="submit" name="button" value="確定" style="width:300px; height:80px; font-size: 50px; font-family: 微軟正黑體; color: red; background-color: lightblue"/></td>
    		</tr>
    	</table>
	</form>
</body>
</html>