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
        <h1 class="goal" align="left">員工登入畫面</h1>
        <div align = "right">
            <a href="logout.php">登出</a>
        </div>
    </div>

    <?php
        include("mysql_connect.inc.php");
        echo '<br><br>';

        //此判斷為判定觀看此頁有沒有權限
        //說不定是路人或不相關的使用者
        //因此要給予排除
        if($_SESSION['username'] != null)
        {
            echo "<table style='border:3px #FFD382 dashed;' border='1'><tr>
                    <td><a href='register.php'>新增</a></td>
                    <td><a href='update.php'>修改</a></td>
                    <td><a href='delete.php'>刪除</a></td>
                 </tr></table><br><br>";

            echo "<h1>所有員工資料:</h1><br><table style='border:3px #FFD382 dashed;' border='1'><tr>";
            echo "<tr>  
                    <td>員工編號</td>
                    <td>姓名(帳號)</td>
                    </tr>";
            //將資料庫裡的所有會員資料顯示在畫面上
           $sql = "SELECT * FROM employee";
            $result = mysql_query($sql);
            while($row = mysql_fetch_row($result))
            {
                echo "<tr>  
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                     </tr>";
            }
            echo "</table><br><br>";

            echo "<table style='border:3px #FFD382 dashed;' border='1'><tr>
                    <td><a href='merchandise.php'>商品資料表</a></td>
                    <td><a href='combo.php'>套餐資料表</a></td>
                    <td><a href='nutrition.php'>營養資料表</a></td>
                    <td><a href='store.php'>店家資料表</a></td>
                 </tr></table><br><br>";
        }
        else
        {
            echo '您無權限觀看此頁面!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
    ?>
</body>
</html>