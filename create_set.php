<?php
// written by: Nathan Lynott
// tested by: Nathan Lynott
// debugged by: Nathan Lynott
	$id = $_GET['id'];
	$Username = $_GET['username'];
	//db connection
	$conn = new mysqli('localhost', 'root', '', 'test');
	if($conn->connect_error){
		die('Connection Failed : '.conn->connect_error);
	}
	else{
		if (isset($_POST['SetName'])) {
 			function validate($data){
 				$data = trim($data);
 				$data = stripslashes($data);
 				$data = htmlspecialchars($data);
 				return $data;
	 		}
	 	}
	 	$SetName = $_POST['SetName'];

	 	$sql = "select * from flashCardSet where SetName = '$SetName'";
	 	$result = mysqli_query($conn, $sql);

 		if (mysqli_num_rows($result)) {
 			header("Location: createSet.php?username=$Username&id=$id&error=SetName already taken");
 			exit();	
 		}
 		else{
			$stmt = $conn->prepare("insert into flashCardSet(SetName, StudentID)
			values(?, ?)");
			$stmt->bind_param("ss", $SetName, $id);
			$stmt->execute();
			$sql = "select * from flashCardSet where SetName = '$SetName'";
	 		$result = mysqli_query($conn, $sql);
	 		$row = mysqli_fetch_assoc($result);
	 		$setid = $row['SetID'];
			header("Location: createFlashCard.php?username=$Username&id=$id&setid=$setid");
			$stmt->close();
			$conn->close();
		}
	}
?>