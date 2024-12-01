<?php
if (isset($_GET['username']) & isset($_GET['id'])) {
$Username = $_GET['username'];
$id = $_GET['id'];
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
<body id="body-login">
    <div class="container">
        <!-- Login Form -->
        <div id="ticket-form">
            <h2>Submit a Support Ticket</h2>
            <?php if (isset($_GET['error'])) { ?>
                    <p class="errors"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>
            <form action="supportTicket.php" method="POST">
            <input style="display: none;" type="text" id="Id" name="Id" value="<?php echo $id ?>" required>
                <label for="ticket-title">Ticket Title:</label>
                <input type="text" id="ticket-title" name="ticket-title" required>
                <br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                <br>
                <label for="ticket-description">Ticket Description:</label>
                <textarea id="ticket-description" name="ticket-description" rows="4" required></textarea>
                <button type="submit">Submit Ticket</button>
            </form>
            </div>
        </div>
</body>
</html>



<?php
}
else{
    $id = '0'
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
<body id="body-login">
    <div class="container">
        <!-- Login Form -->
        <div id="ticket-form">
            <h2>Submit a Support Ticket</h2>
            <?php if (isset($_GET['error'])) { ?>
                    <p class="errors"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>
            <form action="supportTicket.php" method="POST">
                <label for="ticket-title">Ticket Title:</label>
                <input type="text" id="ticket-title" name="ticket-title" required>
                <br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                <br>
                <label for="ticket-description">Ticket Description:</label>
                <textarea id="ticket-description" name="ticket-description" rows="4" required></textarea>
                <button type="submit">Submit Ticket</button>
            </form>
            </div>
        </div>
</body>
</html>
<?php
}
?>