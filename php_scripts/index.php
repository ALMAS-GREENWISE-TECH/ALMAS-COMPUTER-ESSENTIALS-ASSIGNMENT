<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login System</title>

    <!-- Include the necessary PHP files -->
    <?php
    // Use include or require based on your needs
    include("login.php");
    include("register.php");
    ?>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        
        <form action="" method="post">
            <h2>Register</h2>
            <label for="reg_username">Username:</label>
            <input type="text" id="reg_username" name="username" required>
            <label for="reg_password">Password:</label>
            <input type="password" id="reg_password" name="password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
