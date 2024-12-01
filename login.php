<?php
// written by: Nathan Lynott
// tested by: Nathan Lynott
// debugged by: Nathan Lynott
include "db_conn.php";
 if (isset($_POST['Username']) && isset($_POST['Password'])) {
 		function validate($data){
 			$data = trim($data);
 			$data = stripslashes($data);
 			$data = htmlspecialchars($data);
 			return $data;
 		}
 	$Username = $_POST['Username'];
 	$Password = $_POST['Password'];

 	$sql = "select * from user where Username = '$Username'";
 	$result = mysqli_query($conn, $sql);

 	if (mysqli_num_rows($result) === 1) {
 		$row = mysqli_fetch_assoc($result);
 		if($row['UserName'] === $Username &&$row['Password'] === $Password && $row['Attempt'] < 10){
  			$ID = $row['ID'];
 			$sql = "update user set Attempt = '0' where Username = '$Username'";
 			$result = mysqli_query($conn, $sql);
 			header("Location: main.php?username=$Username&id=$ID");
 			exit();	
 		}else if ($row['UserName'] === $Username && $row['Attempt'] > 9){
 			$Attempt = $row['Attempt']+1;
 			$sql = "update user set Attempt = $Attempt where Username = '$Username'";
 			$result = mysqli_query($conn, $sql);
 			header("Location: index.php?error=too many log in attempts, please contact support");
 			exit();	
 		}
 		else{
 			$Attempt = $row['Attempt']+1;
 			$sql = "update user set Attempt = $Attempt where Username = '$Username'";
 			$result = mysqli_query($conn, $sql);
 			header("Location: index.php?error=username or password incorrect");
 			exit();	
 		}
 	}else{
 			header("Location: index.php?error=username or password incorrect");
 			exit();	
 	}
 }
 ?>
