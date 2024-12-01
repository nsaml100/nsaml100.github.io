<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flashcard App - Login / Create Account</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS for styling -->
</head>
<body id="body-login">
    <div class="container">
        <!-- Welcome Message -->
        <h1>Welcome to SCOPE</h1>
        <p class="welcome-text">A flashcard app for students and teachers</p>

        <!-- Login Form -->
        <div id="login-form">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                    <p class="errors"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>
            <form action="login.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="Username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="Password" required>

                <button type="submit">Login</button>
            </form>
            <div class="switch-form">
                <p>Don't have an account? <a href="#" onclick="toggleForms()">Create one</a></p>
                <p>Forgot your password? <a href="support.php">submit a ticket!</a></p>
            </div>
        </div>

        <!-- Account Creation Form (hidden initially) -->
        <div id="create-account-form" style="display:none;">
            <h2>Create Account</h2>
            <form action="create_account.php" method="POST">
                <!-- Student ID will be auto-generated on the server -->
                <input type="hidden" name="studentid" value="AUTO_GENERATED_ID">

                <label for="name">Full Name</label>
                <input type="text" id="name" name="Name" required>

                <label for="username">Username</label>
                <input type="text" id="username" name="UserName" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="Password" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="Email" required>

                <button type="submit">Create Account</button>
            </form>
            <div class="switch-form">
                <p>Already have an account? <a href="#" onclick="toggleForms()">Login</a></p>
            </div>
        </div>
    </div>

    <script>
        function toggleForms() {
            var loginForm = document.getElementById('login-form');
            var createAccountForm = document.getElementById('create-account-form');
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                createAccountForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                createAccountForm.style.display = 'block';
            }
        }
    </script>
</body>
</html>
