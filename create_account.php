<?php
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
		$stmt = $conn->prepare("insert into user(Name, UserName, Password, Email)
			values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $UserName, $Password, $Email);
		$stmt->execute();
		echo "Success!";
		$stmt->close();
		$conn->close();
	}
?>