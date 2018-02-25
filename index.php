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
   	        width: 500px; 	
   	        word-wrap: break-word;
   	        table-layout: fixed;
   	        font-family:微軟正黑體;
   	        font-size: 18px;
        }
        td
        {
        	text-align: center;
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
        <h3 class="goal" align="left">
        	肯德基的英文標誌KFC 是Kentucky Fried Chicken （肯德基炸雞） 的縮寫
        	<br />六十多年前，肯德基的創始人哈蘭‧桑德斯在家鄉美國肯德基州開了一家餐廳，圖案一直以桑德斯上校為藍本。
        	<br />自1952 年正式面世以來，歷經五代。2006 年推出的肯德基新標誌保留了桑德斯上校招牌的蝶形領結，但首次將他經典的白色雙排扣西裝換成了紅色圍裙。
        	<br />這紅色圍裙代表著肯德基品牌家鄉風味的烹調傳統。
        	<br />它告訴顧客，今天的肯德基依然像桑德斯上校當年一樣，在廚房裏辛勤為顧客手工烹製新鮮、美味、高質量的食物。
        </h3>
    </div>

    <div>
        <form name="form" method="post" action="connect1.php">
        	<table style="border:3px #FFD382 dashed; " border='1'>
        		<tr>
        			<td style = "text-align:right">帳號：</td>
        			<td colspan="2"><input type="text" name="id" style="width:300px" /></td>
        		</tr>
        		<tr>
        			<td style = "text-align:right">密碼：</td>
        			<td colspan="2"><input type="password" name="pw" style="width:300px"/></td>
        		</tr>
        		<tr>
        			<td></td>
        			<td><a href="register.php">申請帳號</a></td>
        			<td><input type="submit" name="button" value="登入" /></td>
        		</tr>
        	</table>
		</form>
    </div>
</body>
</html>