<?php
       include ("connect.php");
		$sql = " INSERT INTO moscategorynutrition VALUES ($_POST[six_id], '$_POST[six_name]', $_POST[six_weight], $_POST[six_grain], $_POST[six_meat], $_POST[six_milk], $_POST[six_vegetable], $_POST[six_fruit], $_POST[six_oil])";  //新增資料
		mysqli_query($con,$sql); //執行sql語法
		mysqli_close($con); //關閉資料庫連結
		header( "location:MosPageCategoryNutrition.php");  //回index.php
?>