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
        <h1 class="goal" align="left">店家資料表畫面</h1>
        <div align = "right">
            <a href="member.php">回員工畫面</a>
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
            $sql_query = "SELECT * FROM store";
            $result = mysql_query($sql_query);
            echo "<table style='border:3px #FFD382 dashed;' border='1'>";
            echo "<tr>
                    <td>門市編號</td>
                    <td>縣市</td>
                    <td>門市名稱</td>
                    <td>門市地址</td>
                    <td>營業時間</td>
                    <td>早餐供應</td>
                    <td>點餐車道</td>
                 </tr>";
            while($row = mysql_fetch_array($result)){      
                echo "<tr>
                        <td>$row[0]</td> 
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        <td>$row[6]</td>
                     </tr>";
            }
            echo"</table>";
        }
        else
        {
            echo '您無權限觀看此頁面!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
    ?>
</body>
</html>