<?php  
setcookie("loggedin", "val", time() - (120), "/");
header("Location: loginform.php");


?>