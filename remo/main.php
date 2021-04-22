<?php
include "conns.php";

// Check user login or not
if(!isset($_SESSION['usname'])){
   header('Location: login.html');
}

?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <br>
        <a href="logout.php">Logout</a>
    </body>
</html>
