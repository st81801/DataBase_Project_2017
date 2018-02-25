<?php include ("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="Shortcut Icon" type="image/x-icon" href="iconSu.ico" />
    <meta charset="utf-8" />
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
            width: 1300px;  
            word-wrap: break-word;
            table-layout: fixed;
        }

    </style>
    <script>
        var count = 1;

    </script>
    
</head>
<body style="background-color:blanchedalmond">
    <div class="upperdiv">
        <a href="HomePage.html"><img src="logo.png" class="logoSu" /></a>
        <h3 class="goal" align="left">麥當勞以品質、服務、衛生與超值（Quality、Service、Cleanliness、Value）等核心價值廣獲消費者的支持，<br />
            並長期深耕台灣。1984年1月28日，麥當勞在台灣成立第一家餐廳，<br />
            近年來，台灣麥當勞持續創新服務，推出快速便利的「得來速」、<br />
            「24小時營業」餐廳、新型態「McCafé」與「為你現做」等服務。<br />
            2010年起，導入麥當勞亞太區全新設計風格，不只滿足顧客的味蕾，也將服務提升至感官美學享受，<br />
            提供顧客美學風格、美感服務、美味多元的美學饗宴。<br />
        </h3>
    </div>

    <div style='margin-top: 20px;'>
		<a href="McDAllData.php" style='margin-left:20px;'><input type="button" value="商品和營養資料表" style="width: 300px; height:50px; font-size: 25px;"></a>
        <a href="McDItemPage.php" style='margin-left:20px;'><input type="button" value="商品資料表" style="width: 200px; height:50px; font-size: 25px;"></a>
        <a href="McDNutritionPage.php" style='margin-left:20px;'><input type="button" value="營養資料表" style="width: 150px; height:50px; font-size: 25px;"></a>
		<a href="Mc_aggregate.php" style='margin-left:20px;'><input type="button" value="商品平均熱量" style="width: 200px; height:50px; font-size: 25px;"></a>
    </div>

    <div style="margin-top: 40px;">
               
        <?php
      
                echo '  <table style="border:3px #9482FF dashed;" border="2">
                            <thead>
                            <tr>
                                <th >總商品數</th>
                                
                            </tr>
                            </thead>';
                $sql = "SELECT COUNT(`名稱`) as total From mcditem";
                $result = mysqli_query($con,$sql);
                for($i=1; $i<=1;$i++)
                {
                    $row = mysqli_fetch_row($result);
                    
                    echo "<tr><form>";
                    echo "<th>$row[0]</th>";
                    
                    echo "</form></tr>";
                }
                echo "</table>";
           
            mysqli_close($con);
        ?>  
    <div>
    
</body>
</html>