<?php
if (isset($_COOKI["loggedin"])){
    if($_COOKIE["loggedin"] == "true"){
        header("Location: MainAccount.php");
    }
}
session_start();
$Username = $_POST["uname"];
$Password = $_POST["password"];

//CONNECT TO DATABASE
//GET VALUE FROM DATABASE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guitarbuild";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Test";
}
else{
echo "Connected successfully";
}
$sql = "SELECT * FROM useraccount WHERE Username ='".$Username."'";// WHERE Username = '".$Username."'";

$result = $conn->query($sql);

if (($result->num_rows) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Username"]. " - Name: " . $row["Password"]. "<br>";
        $uname = $row["Username"];
        $User_Id_Logged = $row["User_Id"];
        //$_SESSION["Username"] = $uname;
        echo $uname;
        $pword = $row["Password"];
        echo $pword;  
    }
} else {
    $uname = "";
    $pword = "";
    echo "0 results";
    
}

//Closes connection 
$conn->close();
//$uname = "Admin"; //Placeholder
//$pword = "Admin"; //Placeholder
if (($uname==$Username) && ($pword==$Password)){
    $_SESSION["Username"] = $uname;
    $_SESSION["User_Id"] = $User_Id_Logged;
    setcookie("loggedin", "yes", time() + 86400); // loggedin save
    header("Location: MainAccount.php");
}

else{
    echo "Nout";
}
?>