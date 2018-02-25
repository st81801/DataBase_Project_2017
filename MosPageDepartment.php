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
        <form method="post" action="insertNewDepartment.php" name="form1" id="form1">
            門市編號 <input type="text" name="department_id" value="" id="department_id">
            門市名稱 <input type="text" name="department_name" value="" id="department_name">
            地址 <input type="text" name="department_adress" value="" id="department_adress">
            電話 <input type="text" name="department_telphone" value="" id="department_telphone">
            營業時段 <input type="text" name="department_time" value="" id="department_time">
            外送服務 <input type="text" name="department_service" value="" id="department_service">
            <input type="submit" value="新增門市資料"  style="width: 150px; height: 50px;"">
        </form>

        <form method="post" action="searchDepartment.php" name="form4" id="form4">
            <p style="color:blue;">
            查詢地區 <input type="text" name="search_section" value="" id="search_section">
            查詢相關站名 <input type="text" name="search_name" value="" id="search_service">
            查詢電話 <input type="text" name="search_tel" value="" id="search_service">
            <input type="submit" value="查詢門市" style="width: 150px; height: 50px;"">
            </p>
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
                                <th style="width:40px;">門市編號</th>
                                <th style="width:90px;">門市名稱</th>
                                <th style="width:200px;">地址</th>
                                <th style="width:100px;">電話</th>
                                <th style="width:70px;">營業時段</th>
                                <th style="width:40px;">外送服務</th>
                                <th style="width:50px;">功能</th>
                            </tr>
                            </thead>';
                $sql = "SELECT * FROM mosdepartment";
                $result = mysqli_query($con,$sql);
                $num = mysqli_num_rows($result);
                for($i=1; $i<=$num;$i++)
                {
                    $row = mysqli_fetch_row($result);
                    $id = $row[0];
                    
                    echo "<tr><form>";
                    echo "<td><input type='text' name = 'dep_id' value='$row[0]' style='width:30px;'></td>";
                    echo "<td><input type='text' name = 'dep_name' value='$row[1]' style='width:120px;'></td>";
                    echo "<td><input type='text' name = 'dep_address' value='$row[2]' style='width:300px;'></td>";
                    echo "<td><input type='text' name = 'dep_tel' value='$row[3]' style='width:150px;'></td>";
                    echo "<td><input type='text' name = 'dep_time' value='$row[4]' style='width:120px;'></td>";
                    echo "<td><input type='text' name = 'dep_service' value='$row[5]' style='width:40px;'></td>";
                    echo "<td><input type='submit' name='Submit' value='修改'/>
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
                $dep_id = !empty($_GET["dep_id"]) ? $_GET["dep_id"] : null;
                $dep_name = !empty($_GET["dep_name"]) ? $_GET["dep_name"] : null;
                $dep_adress = !empty($_GET["dep_address"]) ? $_GET["dep_address"] : null;
                $dep_tel = !empty($_GET["dep_tel"]) ? $_GET["dep_tel"] : null;
                $dep_time = !empty($_GET["dep_time"]) ? $_GET["dep_time"] : null;
                $dep_service = !empty($_GET["dep_service"]) ? $_GET["dep_service"] : null;
                $Submit = !empty($_GET["Submit"]) ? $_GET["Submit"] : null; 

                if($Submit == '修改')
                {
                    $sql = " UPDATE mosdepartment SET depID = '$dep_id', depName = '$dep_name', depAdress = '$dep_adress', depTel = '$dep_tel', depTime = '$dep_time', depService = '$dep_service' WHERE depID = $id";
                   $msg='修改成功';
                }
                else if ($Submit == '刪除')
                {
                    $sql = "DELETE FROM mosdepartment WHERE depID = $id";
                    $msg='刪除成功';
                }
                mysqli_query($con,$sql);
                echo "$msg<p><a href='MosPageDepartment.php'>回上頁</a></p>";    
            }
            mysqli_close($con);
        ?>  
    <div>
</body>
</html>