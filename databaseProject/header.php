<?php session_start(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <link rel="stylesheet" href="Reset.css" type="text/css">
    <link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="Index.php">Home</a></li>
            </ul>
            <div class="nav-login">
                <form>
                    <input type="text" name="uid" placeholder="Username/email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                </form>
                <a href="signup.php">Sign Up</a>
            </div>
        </div>
    </nav>
</header>
</body>
</html>