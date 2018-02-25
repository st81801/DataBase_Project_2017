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
        <a href="HomePage.html"><img src="img/logo.png" class="logoSu" /></a>
        <h3 class="goal" align="left">摩斯漢堡之「MOS」為Mountain、Ocean、Sun之意思，含有大自然、健康的意味。<br />摩斯漢堡向來素以「米漢堡」的發明者聞名，是一種結合日本傳統飯糰食品與西式漢堡概念而成，<br />以白米壓製成的餅皮取代麵包來製作漢堡的混種食物，<br />漢堡裡的內餡也大都採用傳統日本料理的菜色如日式燒肉、炒牛蒡等。<br />摩斯漢堡在企業形象方面特別強調「素材嚴選」以及「點餐後製作」等原則。<br />其較佳的產品品質表現與清新的口味使其在都會區受到不少青睞。
        </h3>
    </div>
    <div style='margin-top: 20px;'>

        <form method="post" action="insertCategoryNutrition.php" name="form3" id="form3">
            商品編號 <input type="text" name="six_id" value="" id="six_id">
            商品名稱 <input type="text" name="six_name" value="" id="six_name">
            商品重量 <input type="text" name="six_weight" value="" id="six_weight">
            五穀根莖類 <input type="text" name="six_grain" value="" id="six_grain">
            蛋豆魚肉類 <input type="text" name="six_meat" value="" id="six_meat">
            奶類 <input type="text" name="six_milk" value="" id="six_milk"><br>
            蔬菜類 <input type="text" name="six_vegetable" value="" id="six_vegetable">
            水果類 <input type="text" name="six_fruit" value="" id="six_fruit">
            油脂類 <input type="text" name="six_oil" value="" id="six_oil">
            <input type="submit" value="新增食物六大類資料"  style="width: 150px; height: 50px;"">
        </form>

    </div>
   <div style='margin-top: 20px;'>
        <a href="MosPageDepartment.php" style='margin-left:20px;'><input type="button" value="門市資料表" style="width: 150px; height:80px; font-size: 25px;"></a>
        <a href="MosPageNutrition.php" style='margin-left:20px;'><input type="button" value="營養資料表" style="width: 150px; height:80px; font-size: 25px;"></a>
        <a href="MosPageCategoryNutrition.php" style='margin-left:20px;'><input type="button" value="六類資料表" style="width: 150px; height:80px; font-size: 25px;"></a>
    </div>
    <div style="margin-top: 40px;">
               
        <?php
             $id =!empty($_GET["id"]) ? $_GET["id"]:"";
                echo '  <table style="border:3px #9482FF dashed;" border="2">
                            <thead>
                            <tr>
                                <th style="width:60px;">商品編號</th>
                                <th style="width:150px;">商品名稱</th>
                                <th style="width:100px;">商品重量</th>
                                <th style="width:80px;">五穀根莖類</th>
                                <th style="width:80px;">蛋豆魚肉類</th>
                                <th style="width:80px;">奶類</th>
                                <th style="width:80px;">蔬菜類</th>
                                <th style="width:80px;">水果類</th>
                                <th style="width:80px;">油脂類</th>
                            </tr>
                            </thead>';

                $sql = "SELECT * FROM moscategorynutrition";
                $result = mysqli_query($con,$sql);
                $num = mysqli_num_rows($result);
                for($i=1; $i<=$num;$i++)
                {
                    $row = mysqli_fetch_row($result);
                    $id = $row[0];
                    
                    echo "<tr><form>";
                    echo "<td align='center'>$row[0]</td>";
                    echo "<td align='center'>$row[1]</td>";
                    echo "<td align='center'>$row[2]</td>";
                    echo "<td align='center'>$row[3]</td>";
                    echo "<td align='center'>$row[4]</td>";
                    echo "<td align='center'>$row[5]</td>";
                    echo "<td align='center'>$row[6]</td>";
                    echo "<td align='center'>$row[7]</td>";
                    echo "<td align='center'>$row[8]</td>";
                    echo "</form></tr>";
                }
                echo "</table>";
            mysqli_close($con);
        ?>  
    <div>
</body>
</html>