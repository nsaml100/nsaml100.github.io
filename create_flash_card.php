<?php
	include "db_conn.php";
	$UserName = $_POST['UserName'];
	$front = $_POST['front'];
	$back = $_POST['back'];
	$setid = $_POST['setid'];
	$id = $_POST['Id'];

			$stmt = $conn->prepare("insert into flashCard(front, back, SetID, StudentID)
			values(?, ?, ?, ?)");
			$stmt->bind_param("ssss", $front, $back, $setid, $id);
			$stmt->execute();
			header("Location: createFlashCard.php?username=$UserName&id=$id&setid=$setid&error=Success");
			$stmt->close();
			$conn->close();
?>