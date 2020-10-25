<?php
if (isset($_COOKIE["loggedin"])){
    if($_COOKIE["loggedin"] != "yes"){
        echo "Test";
        header("Location: index.php");
    }
if (!isset($_COOKIE["loggedin"])){
    echo "test2";
    header("Location: index.php");
}
}

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guitarbuild";

 
$conn = new mysqli($servername, $username, $password,$dbname);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Description...ext... -->
        <title>Guitar Project</title>
        <link rel="stylesheet" type="text/css" href="styleaccount.css">
    </head>
    <body>
    <header>
           <div id="branding">
                <h1><span class="light">Guitar</span> Designer</h1>
            </div>
            <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="plan.php">Plan</a></li>
                <li class="selected"><a href="logOut.php">Log Out</a></li>
                </ul>
            </nav>
            </header>
        <div class="main_container">
            <section id="welcome">
                <?php              
                echo "<h1>".$_SESSION["Username"]."</h1>";
                //echo $_SESSION["account_build_name"];
                echo $_SESSION["User_Id"]."<br/>";
                echo $_SESSION["account_build_name"];
                $sql = "SELECT FROM user_build WHERE User_Id ='".$_SESSION['User_Id']."'";

                $result = $conn->query($sql);
                $testa = $result;
                echo $testa;
                ?>
            </section>
            <section>
                <h2 id="Build_Title">Your Builds</h2>
                <div id="build_dis">
                    <button class = "build_button">Test</button>
                    <button class = "build_button">Test</button>
                    <button class = "build_button">Test</button>
                    <button class = "build_button">Test</button>
                    <button class = "build_button">Test</button>
                    <button class = "build_button">Test</button> 
                    <button class = "build_button">Test</button>
                    <button class = "build_button">Test</button>
                    <button class = "build_button">Test</button>
                    <button class = "build_button">Test</button>
                </div>
        </section>
        </div>
        
    </body>
</html>