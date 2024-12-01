<?php
// written by: Nathan Lynott
// tested by: Nathan Lynott
// debugged by: Nathan Lynott
include "db_conn.php";
	if (isset($_POST['Id'])){
	$id = $_POST['Id'];
	}else{
		$id = '0';
	}
	$title = $_POST['ticket-title'];
	$description = $_POST['ticket-description'];
	$email = $_POST['email'];
	$stmt = $conn->prepare("insert into support(StudentID, Title, Description, Email)
	values(?, ?, ?, ?)");
	$stmt->bind_param("ssss", $id, $title, $description, $email);
	$stmt->execute();
	header("Location: index.php?error=ticket recieved");
	$stmt->close();
	$conn->close();
?>