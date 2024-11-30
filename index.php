<!DOCTYPE html>
<html lang="en">
    <head>
        <style>  
.form-incorrect {
    text-align: center;
    margin: 50px auto;
    padding: 20px;
    width: 80%;
    max-width: 400px;
    background-color:#05445E;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-incorrect h3 {
    color: darkgoldenrod;
    font-size: 20px;
    margin-bottom: 20px;
}

.form-incorrect p {
    font-size: 16px;
    margin-top: 10px;
    color: #f9f9f9;
}

.form-incorrect .link a {
    color: white;
}

.form-incorrect .link a:hover {
    text-decoration: underline;
    color: yellow;
}
.bottom{
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
}

        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>home</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" >
        <link rel="stylesheet" href="styles.css">
        <script src="script.js" defer></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <boby>
    <?php
    require('connection.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_POST['username']);   
        $username= mysqli_real_escape_string($con, $username);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con)); 
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            echo "<div class='form-incorrect'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
        <header>
            <nav class="navbar">
                <a href="#" class="logo">
                    <img src="images/lion.png" alt="logo">
                    <h3>ROYAL<span class="logo1">Insights</span></h3>
                </a>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <button class="login-btn">LOG IN</button>
            </nav>
        </header>
        <div class="start">
            <h6 style="color: yellow;">HELLO!</h6>
            <p style="color: #f9f9f9;">Discover a world of knowledge at your fingertips with us. We're your premier destination for accessing high-quality academic resources, from scholarly articles to study guides, all in one convenient location.

                Whether you're a student, educator, or researcher, ROYALInsights is here to support your academic journey. Explore our vast collection, engage with our vibrant community, and unlock the tools you need to excel in your studies.
                Join us today and take the first step towards achieving your academic goals with ROYALInsights!</p>
                <div class="get">
           <a href="signup.php" class="started">Get Started</a>
        </div>
            </div>
        <div class="blur-bg"></div>
        <div class="popup">
            <span  class="close material-symbols-outlined" >close</span>        
                    <div class="popup-box">
                <div class="details">
                    <h1><b>Welcome back</b></h1>
                    <p>We're thrilled to have you return. Your presence means a lot to us. Please log in to access your account and continue your journey with us. Thank you for choosing us again!"</p>
                </div>
                <div class="form-content">
                    <h2 style="color: #f9f9f9;">LOGIN</h2>
                    <form action="#" method="post">
                        <div class="input-field">
                            <input type="text" name="username" required>
                            <label>Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password"name="password" required>
                            <label>password</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot password?</a>
                        <button type="submit" name="submit">Login</button>

                    </form>
                    <?php
    }
?>
                    <div class="bottom">
                        <p style="color: #f9f9f9;">Don't have an account? <a href="signup.php">Signup now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </boby>
</html>