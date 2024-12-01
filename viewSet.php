<?php
include "db_conn.php";
if (isset($_GET['username']) & isset($_GET['id']) & isset($_GET['setid'])) {
$Username = $_GET['username'];
$id = $_GET['id'];
$setid = $_GET['setid'];
}
else{
    header("Location: index.php");
}
$sql = "select * from flashcard where setid = $setid";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashcard App - Create Flashcard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body id="body-main">
    <main id="main">
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
    <h1>Flashcard Creation</h1>
    <br><br>

    <h1>Flashcards</h1>
    <table border="5">
            <thead>
                <tr>
                    <th><h4>Question</h4></th><th><h4>Your Answer</h4></th><th><h4>Submit</h4></th><th><h4>Evaluation</h4></th><th><h4>Edit</h4></th>
                    <?php 
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                            <tr><td><?php echo $row['front']; ?></td><td><input class="submission" type="text"></td><td><button class="btn btn-submit" type="submit">submit</button></td><td><h5 class="answer" style="display: none; color: black;"><?php echo $row['back']; ?></h5></td><td><a href='edit.php?username=<?php echo $Username ?>&id=<?php echo $id ?>&setid=<?php echo $setid ?>&flashcardid=<?php echo $row['FlashCardsID']; ?>'>edit</a></td></tr>
                        <?php
                        }
                    ?>
                </tr>

            </thead>
            <tbody id="table_body1">
                
            </tbody>
        </table>
        <a href='createFlashCard.php?username=<?php echo $Username ?>&id=<?php echo $id ?>&setid=<?php echo $setid ?>'>Add Flash Card?</a>
    </main>
</body>
<script src="submit.js" async></script>
</html>