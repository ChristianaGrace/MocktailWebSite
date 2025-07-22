<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            background-image: url('images/10.jpg'); 
            background-size: cover; 
            background-position: center; 
    </style>
</head>
<body>
    <div class="login-container">
        <form action="userlogin.php" method="post" class="login-form">
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="uname" id="username" required>
            </div><br>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="pword" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div><br>
            <button type="submit">Login</button>
            <p id="error-message"></p>
        </form>
    </div>
</body>
</html>
