<?php

$Term = $_POST['Term'];
$Definition = $_POST['Definition'];

$conn = new mysqli('localhost', 'root', '', 'flashcards_db');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO flashcards (Term, Definition) VALUES (?, ?)");
    
    $stmt->bind_param("ss", $Term, $Definition);
    
    if ($stmt->execute()) {
        echo "Flashcard created successfully!";
    } else {
        echo "Error creating flashcard: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>
