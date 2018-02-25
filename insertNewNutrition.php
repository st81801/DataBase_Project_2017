<?php
       include ("connect.php");

        echo $_POST['nutrition_id'];

		$sql = " INSERT INTO mosnutrition VALUES ($_POST[nutrition_id], '$_POST[nutrition_name]', $_POST[nutrition_calories], $_POST[nutrition_protein], $_POST[nutrition_oil], $_POST[nutrition_saturatedFat], $_POST[nutrition_transFat], $_POST[nutrition_carbohydrate], $_POST[nutrition_sodium], '$_POST[nutrition_category]')";  //新增資料
		mysqli_query($con,$sql); //執行sql語法
		mysqli_close($con); //關閉資料庫連結
		header( "location:MosPageNutrition.php");  //回index.php
?>