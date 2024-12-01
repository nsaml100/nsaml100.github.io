<?php
include "db_conn.php";
if (isset($_GET['username']) & isset($_GET['id'])) {
$Username = $_GET['username'];
$id = $_GET['id'];
}
else{
    header("Location: index.php");
}
$sql = "select * from flashcardset";
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

    <!-- Create new set input -->
    <div id="create-set">
        <?php if (isset($_GET['error'])) { ?>
                    <p class="errors"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>
        <form action="create_set.php?username=<?php echo $Username ?>&id=<?php echo $id ?>" method="POST">
            <label for="new-set-name">Enter the name for your new set:</label>
            <input type="text" id="new-set-name" name="SetName" placeholder="Enter set name" required>
            <button>Create Set</button>
        </form>
    </div>
    <h1>Flashcard Sets</h1>
    <table border="5">
            <thead>
                <tr>
                    <th><h3>Choose a set</h3></th>
                    <?php 
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                            <tr><td><a href='viewSet.php?username=<?php echo $Username ?>&id=<?php echo $id ?>&setid=<?php echo $row['SetID'] ?>'><?php echo $row['SetName']; ?></a></td></tr>
                        <?php
                        }
                    ?>
                </tr>

            </thead>
            <tbody id="table_body1">
                
            </tbody>
        </table>
    </main>
</body>
</html>