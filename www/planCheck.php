<?php
    
session_start();

if (!isset($_COOKIE["loggedin"])) {
    header("Location: plan.php");
    }


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guitarbuild";

 
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Test";
}
else{

}

$pandc = array
    (
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
    array("","","",""),
);


$partSections = array($_GET["body_type"], $_GET["body_wood"], $_GET["fret_surface_wood"], $_GET["neck_type"], $_GET["head_type"], $_GET["pick_up_1"], $_GET["pick_up_2"], $_GET["pick_up_3"], $_GET["tunning_nuts"], $_GET["bridge_type"], $_GET["strings"], $_GET["Finish"]);


    for ($x = 0; $x <=11; $x++){
        $sql = "SELECT * FROM guitar_part WHERE part_name = '".$partSections[$x]."'";
        $result = $conn->query($sql);

        while($row=$result->fetch_assoc()){
        $pandc[$x][0] = $row["part_name"];
        $pandc[$x][1] = $row["compatibility_1"];
        $pandc[$x][2] = $row["compatibility_2"];
        $pandc[$x][3] = $row["compatibility_3"];
    }

    }

//Comp Check
$buildCheck = '1';
$compIssueOne = array(
array("","",),
array("","",),
array("","",),
);

$compIssueTwo = array();
for ($Ncomp = 1; $Ncomp <=3; $Ncomp++){
    $compCheck = 1;
    while ($compCheck == '1'){
        for ($y = 0; $y <= 11; $y++){
            if ($pandc[$y][$Ncomp] != '0'){ 
            for ($mc = 0; $mc <=11; $mc++ ){
                if(($pandc[$y][$Ncomp] == $pandc[$mc][$Ncomp]) || ($pandc[$mc][$Ncomp] == '0')){
                    $compCheck ='1';
                }else{
                    $partPlace = $Ncomp-1;
                    $compIssueOne[$partPlace][0] = $pandc[$y][0];
                    $compIssueTwo[$partPlace][0] = $pandc[$mc][0];
                    //Setting to 11 ends  y and mc for loops
                    $y = 11;
                    $mc = 11;
                    $compCheck = '0';
                    $buildCheck = '0';
                }
            }
            }

    }
            $compCheck = '0';
    }
}

//If Build was not successful, this for loop print to the user whic parts were not compatible with each other.
//No need to check if array compIssieTwo is == "" as it will be filled at the same time as compIssueTwo.
//if($buildCheck == '0'){
//    echo nl2br("Your Build was not compatible because of these parts:\n");
//    for($x=0;$x<=2;$x++){
//    if ($compIssueOne[$x][0] != ""){
//            echo nl2br("\nThe part '" . $compIssueOne[$x][0] . "' was not compatible with the part '" . $compIssueTwo[$x][0] . "'.");
//        }
//    }
//}else{

//$RandNumBuild = mt_rand(0, 2**61);
//echo $RandNumBuild;
//$sql = "INSERT INTO build(Build_ID, body_wood, fret_surface_wood, body_type, neck_type, head_type, pick_up_1, pick_up_2,  pick_up_3, tunning_nuts, bridge_type, strings, Finish)VALUES('".$RandNumBuild."', '".$_GET['body_wood']."','".$_GET['fret_surface_wood']."','". $_GET['body_type']."','".$_GET['neck_type']."','".$_GET['head_type']."','".$_GET['pick_up_1']."','".$_GET['pick_up_2']."','". $_GET['pick_up_3']."','".$_GET['tunning_nuts']."','".$_GET['bridge_type']."','".$_GET['strings']."','".$_GET['Finish']."')"; 
//
//if ($conn->query($sql) === TRUE) {
//    //echo "New record created successfully";
//    echo "Your Build was successful! Go to your account to view it!";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$sql = "INSERT INTO user_build(Build_Id, User_Id, build_name)VALUES('".$RandNumBuild."','".$_SESSION['User_Id']."','".$_GET['build_name']."')";
//$conn->query($sql); 

$_SESSION["account_build_name"] = $_GET['build_name'];



?>  


<!DOCTYPE html>

<html>
<head>
    <body>
    </body>
    </head>
</html>

