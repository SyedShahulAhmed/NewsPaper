<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<?php
    require('connection.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '$password', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form1'>
                  <h3>Account Successfully Created</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form2'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='signup.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="signup-container">
        <h2 style="color:yellow">Sign up</h2>
        <form action="signup.php" method="post">
            <input type="text" class="signup-input" name="username" placeholder="Username" required>
            <input type="email" class="signup-input" name="email" placeholder="Email" required>
            <input type="password" class="signup-input" name="password" placeholder="Password" required>
            <button type="submit" class="signup-button">Sign Up</button>
            <p style="color: white;">Already Have an Account?</p>
            <a href="index.php" class="signup-link">Login</a>
        </form>
        <?php
    }
?>
    </div>
</body>
</html>
