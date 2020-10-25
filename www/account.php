<?php
if (isset($_COOKIE["loggedin"])){
    if($_COOKIE["loggedin"] == "yes"){
        header("Location: MainAccount.php");
    }}

?>


<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Description...ext... -->
        <title>Guitar Project</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="account">
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="light">Guitar</span> Designer</h1>
            </div>
            <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="plan.php">Plan</a></li>
                <li class="selected"><a href="account.html">Account</a></li>
                </ul>
            </nav>
        </div>
        </header>
        <section class="login_page">
            <h1>Log In</h1>
            <div class="login">
                <form action="Login.php" method="post" >
                Username:<br/>
                <input type="text" name="uname" placeholder="Enter Your Userame Name"><br/>
                Enter a password:<br/>
                <input type="password" name="password" placeholder="Enter your password"><br/>
                <input class="submit_1" type="submit" value="submit">
                </form>
            </div>
        </section>    
    </body>
</html>

