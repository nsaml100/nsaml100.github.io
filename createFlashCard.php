<?php
// written by: Nathan Lynott
// tested by: Nathan Lynott
// debugged by: Nathan Lynott
include "db_conn.php";
if (isset($_GET['username']) & isset($_GET['id']) & isset($_GET['setid'])) {
$Username = $_GET['username'];
$id = $_GET['id'];
$setid = $_GET['setid'];
}
else{
    header("Location: index.php");
}
$sql = "select * from flashcardset where SetID = $setid";
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
    <!-- Add Flashcard Section (Initially hidden) -->
    <div id="add-flashcard-section">
        <form action="create_flash_card.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                    <p class="errors"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>
            <h2>Add Flashcard</h2>
            <input style="display: none;" type="text" id="UserName" name="UserName" value="<?php echo $Username ?>" required>
            <input style="display: none;" type="text" id="Id" name="Id" value="<?php echo $id ?>" required>
            <input style="display: none;" type="text" id="setid" name="setid" value="<?php echo $setid ?>" required>
            <label for="front-text">Front:</label>
            <textarea id="front-text" name="front" placeholder="Enter the front of the flashcard" required></textarea>
            <br>
            <label for="back-text">Back:</label>
            <textarea id="back-text" name="back" placeholder="Enter the back of the flashcard" required></textarea>
            <br>
            <button>Add Flashcard</button>
        </form>
        <br><br>
    </div>