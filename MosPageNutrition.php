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

        <form method="post" action="insertNewNutrition.php" name="form2" id="form2">
            商品編號 <input type="text" name="nutrition_id" value="" id="nutrition_id">
            商品名稱 <input type="text" name="nutrition_name" value="" id="nutrition_name">
            熱量 <input type="text" name="nutrition_calories" value="" id="nutrition_calories">
            蛋白質 <input type="text" name="nutrition_protein" value="" id="nutrition_protein">
            油脂 <input type="text" name="nutrition_oil" value="" id="nutrition_oil">
            飽和脂肪 <input type="text" name="nutrition_saturatedFat" value="" id="nutrition_saturatedFat"><br>
            反式脂肪 <input type="text" name="nutrition_transFat" value="" id="nutrition_transFat">
            碳水化合物 <input type="text" name="nutrition_carbohydrate" value="" id="nutrition_carbohydrate">
            鈉 <input type="text" name="nutrition_sodium" value="" id="nutrition_sodium">
            種類 <input type="text" name="nutrition_category" value="" id="nutrition_category">
            <input type="submit" value="新增營養成分資料"  style="width: 150px; height: 50px;"">
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
             if($id == "")
             {
                echo '  <table style="border:3px #9482FF dashed;" border="2">
                            <thead>
                            <tr>
                                <th style="width:60px;">商品編號</th>
                                <th style="width:150px;">商品名稱</th>
                                <th style="width:100px;">熱量</th>
                                <th style="width:80px;">蛋白質</th>
                                <th style="width:80px;">油脂</th>
                                <th style="width:80px;">飽和脂肪</th>
                                <th style="width:80px;">反式脂肪</th>
                                <th style="width:80px;">碳水化合物</th>
                                <th style="width:80px;">鈉</th>
                                <th style="width:80px;">種類</th>
                                <th style="width:120px;">功能</th>
                            </tr>
                            </thead>';

                $sql = "SELECT * FROM mosnutrition";
                $result = mysqli_query($con,$sql);
                $num = mysqli_num_rows($result);
                for($i=1; $i<=$num;$i++)
                {
                    $row = mysqli_fetch_row($result);
                    $id = $row[0];
                    
                    echo "<tr><form>";
                    echo "<td align='center'><input type='text' name = 'item_id' value='$row[0]' style='width:30px;'></td>";
                    echo "<td align='center'><input type='text' name = 'item_name' value='$row[1]' style='width:150px;'></td>";
                    echo "<td align='center'><input type='text' name = 'calories' value='$row[2]' style='width:60px;'></td>";
                    echo "<td align='center'><input type='text' name = 'protein' value='$row[3]' style='width:60px;'></td>";
                    echo "<td align='center'><input type='text' name = 'oil' value='$row[4]' style='width:60px;'></td>";
                    echo "<td align='center'><input type='text' name = 'saturatedFat' value='$row[5]' style='width:60px;'></td>";
                    echo "<td align='center'><input type='text' name = 'transFat' value='$row[6]' style='width:60px;'></td>";
                    echo "<td align='center'><input type='text' name = 'carbohydrate' value='$row[7]' style='width:60px;'></td>";
                    echo "<td align='center'><input type='text' name = 'sodium' value='$row[8]' style='width:60px;'></td>";
                    echo "<td align='center'><input type='text' name = 'category' value='$row[9]' style='width:60px;'></td>";
                    echo "<td align='center'><input type='submit' name='Submit' value='修改'/>
                              <input type='hidden' name='id' value='$id'/>
                              <input type='submit' name='Submit' value='刪除'/>
                              <input type='hidden' name='id' value='$id'/></td>
                              </form></tr>";
                }
                echo "</table>";
             }
            else
            {
                $msg='';
                $item_id = !empty($_GET["item_id"]) ? $_GET["item_id"] : null;
                $item_name = !empty($_GET["item_name"]) ? $_GET["item_name"] : null;
                $calories = !empty($_GET["calories"]) ? $_GET["calories"] : null;
                $protein = !empty($_GET["protein"]) ? $_GET["protein"] : null;
                $oil = !empty($_GET["oil"]) ? $_GET["oil"] : null;
                $saturatedFat = !empty($_GET["saturatedFat"]) ? $_GET["saturatedFat"] : null;
                $transFat = !empty($_GET["transFat"]) ? $_GET["transFat"] : null;
                $carbohydrates = !empty($_GET["carbohydrate"]) ? $_GET["carbohydrate"] : null;
                $sodium = !empty($_GET["sodium"]) ? $_GET["sodium"] : null;
                $category = !empty($_GET["category"]) ? $_GET["category"] : null;
                $Submit = !empty($_GET["Submit"]) ? $_GET["Submit"] : null; 

                if($Submit == '修改')
                {
                    $sql = "UPDATE mosnutrition SET itemID = $item_id, itemName = '$item_name', category = '$category' ,Calories = $calories, protein = $protein, oil=$oil, saturatedFat=$saturatedFat, transFat=$transFat, carbohydrates = $carbohydrates,  sodium=$sodium WHERE itemID = $id";
                    $msg='修改成功';
                }
                else if ($Submit == '刪除')
                {
                    $sql = "DELETE FROM mosnutrition WHERE itemID = $id";
                    $msg='刪除成功';
                }
                mysqli_query($con,$sql);
                echo "$msg<p><a href='MosPageNutrition.php'>回上頁</a></p>";    
            }
            mysqli_close($con);
        ?>  
    <div>
</body>
</html>