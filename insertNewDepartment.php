<?php
       include ("connect.php");

        //echo $_POST['department_id'];
		$sql = " INSERT INTO mosdepartment VALUES ('$_POST[department_id]', '$_POST[department_name]', '$_POST[department_adress]', '$_POST[department_telphone]', '$_POST[department_time]', '$_POST[department_service]')";  //新增資料
		mysqli_query($con,$sql); //執行sql語法
		mysqli_close($con); //關閉資料庫連結
		header( "location:MosPageDepartment.php");  //回index.php
?>