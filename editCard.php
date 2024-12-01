<?php
	include "db_conn.php";
	$UserName = $_POST['UserName'];
	$Id = $_POST['Id'];
	$flashcardID = $_POST['flashcardId'];
	$Question = $_POST['Question'];
	$Answer = $_POST['Answer'];

	 	$sql = "update flashcard set front = '$Question', back = '$Answer' where FlashCardsID = '$flashcardID'";
	 	$result = mysqli_query($conn, $sql);
	 	$sql = "select * from flashcard where FlashCardsID = '$flashcardID'";
	 	$result = mysqli_query($conn, $sql);
	 	$row = mysqli_fetch_assoc($result);
	 	$setid = $row['SetID'];

 		if (mysqli_num_rows($result)) {
 			header("Location: viewSet.php?username=$UserName&id=$Id&setid=$setid");
 			exit();	
 		}
 		else{
			header("Location: edit.php?error=error");
		}
?>
