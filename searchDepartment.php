<?php
       include ("connect.php");

 		$search_section = $_POST['search_section'];
 		$search_name = $_POST['search_name'];
 		$search_tel = $_POST['search_tel'];


		$sql = "SELECT * FROM mosdepartment WHERE depAdress like '%$search_section%' AND depName like '%$search_name%' AND depTel like '%$search_tel%'";
		
		$result = mysqli_query($con,$sql); //執行sql語法
		
		echo "<a href ='MosPageDepartment.php'><p>回上頁</p></a>";
		 echo '  <table style="border:3px #9482FF dashed;" border="2">
                            <thead>
                            <tr>
                                <th style="width:40px;">門市編號</th>
                                <th style="width:90px;">門市名稱</th>
                                <th style="width:200px;">地址</th>
                                <th style="width:100px;">電話</th>
                                <th style="width:70px;">營業時段</th>
                                <th style="width:40px;">外送服務</th>
                            </tr>
                            </thead>';
 		while($row = mysqli_fetch_array($result))
	  	{
		  	echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td></tr>";
	  	}
		echo "</table>";

		mysqli_close($con); //關閉資料庫連結
?>