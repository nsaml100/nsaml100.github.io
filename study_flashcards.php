<?php
$conn = new mysqli('localhost', 'root', '', 'flashcards_db');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $sql = "SELECT id, Term, Definition FROM flashcards";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $flashcards = [];

        while ($row = $result->fetch_assoc()) {
            $flashcards[] = [
                'id' => $row['id'],
                'term' => $row['Term'],
                'definition' => $row['Definition']
            ];
        }

        echo json_encode($flashcards);
    } else {
        echo json_encode(['error' => 'No flashcards found.']);
    }

    $conn->close();
}
?>
