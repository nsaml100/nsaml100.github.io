<?php
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

 	$sql = "select * from user where Username = '$Username' AND Password = '$Password'";
 	$result = mysqli_query($conn, $sql);

 	if (mysqli_num_rows($result) === 1) {
 		$row = mysqli_fetch_assoc($result);
 		if($row['UserName'] === $Username &&$row['Password'] === $Password ){
 			$_SESSION['Username'] = $row['Username'];
 			$ID = $row['ID'];
 			header("Location: main.php?username=$Username&id=$ID");
 			exit();	
 		}else{
 			header("Location: index.php?error=username or password incorrect");
 			exit();	
 		}
 	}else{
 			header("Location: index.php?error=username or password incorrect");
 			exit();	
 	}
 }
 ?>
