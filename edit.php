<?php
include "db_conn.php";
if (isset($_GET['username']) & isset($_GET['id']) & isset($_GET['flashcardid'])) {
$Username = $_GET['username'];
$id = $_GET['id'];
$flashcardid = $_GET['flashcardid'];
}
else{
    header("Location: index.php");
}
$sql = "select * from flashcard where FlashCardsID = $flashcardid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashcard App - SCOPE Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body id="body-main">
    <header id="header-main">
    <!-- Navigation Bar -->
        <nav class="nav-page">
            <img src="logo.jpg" alt="Website Logo" id="logo-main">
            <ul>
               <li><a href='main.php?username=<?php echo $Username ?>&id=<?php echo $id ?>'>Home</a></li>
                <li><a href='createSet.php?username=<?php echo $Username ?>&id=<?php echo $id ?>'>Create Flashcards</a></li>
                <li><a href='chooseSet.php?username=<?php echo $Username ?>&id=<?php echo $id ?>'>View Flashcard Sets</a></li>
                <li><a href='support.php?username=<?php echo $Username ?>&id=<?php echo $id ?>'>Customer Service</a></li>
                <li><a href='index.php'>Login / Sign up</a></li>
            </ul>
        </nav>
    </header>
    <div id="edit-form">
            <h2>Login</h2>
            <form action="editCard.php" method="POST">
                <input style="display: none;" type="text" id="UserName" name="UserName" value="<?php echo $Username ?>" required>
                <input style="display: none;" type="text" id="Id" name="Id" value="<?php echo $id ?>" required>
                <input style="display: none;" type="text" id="flashcardId" name="flashcardId" value="<?php echo $row['FlashCardsID'] ?>" required>
                <label for="question">Question</label>
                <input type="text" id="question" name="Question" value="<?php echo $row['front'] ?>" required>

                <label for="answer">Answer</label>
                <input type="text" id="answer" name="Answer" value="<?php echo $row['back'] ?>" required>

                <button type="submit">Edit</button>
            </form>
            <div class="switch-form">
                <p>Don't have an account? <a href="#">Create one</a></p>
            </div>
        </div>
    </body>
</html>