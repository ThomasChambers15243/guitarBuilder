<?php
//setcookie("loggedin", time() -86400);
setcookie("loggedin", "yes", time() - 86400);
header("Location: account.php");
?>