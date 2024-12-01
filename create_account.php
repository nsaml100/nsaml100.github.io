<?php
// written by: Nathan Lynott
// tested by: Nathan Lynott
// debugged by: Nathan Lynott
	$Name = $_POST['Name'];
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	$Email = $_POST['Email'];

	//db connection
	$conn = new mysqli('localhost', 'root', '', 'test');
	if($conn->connect_error){
		die('Connection Failed : '.conn->connect_error);
	}
	else{
		if (isset($_POST['Username'])) {
 			function validate($data){
 				$data = trim($data);
 				$data = stripslashes($data);
 				$data = htmlspecialchars($data);
 				return $data;
	 		}
	 	}
	 	$Username = $_POST['UserName'];

	 	$sql = "select * from user where Username = '$Username'";
	 	$result = mysqli_query($conn, $sql);

 		if (mysqli_num_rows($result)) {
 			header("Location: index.php?error=username already taken");
 			exit();	
 		}
 		else{
			$stmt = $conn->prepare("insert into user(Name, UserName, Password, Email)
			values(?, ?, ?, ?)");
			$stmt->bind_param("ssss", $Name, $UserName, $Password, $Email);
			$stmt->execute();
			header("Location: main.php");
			$stmt->close();
			$conn->close();
		}
	}
?>
