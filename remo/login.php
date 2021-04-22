<?php
	include("conns.php");
	$us=mysqli_real_escape_string($con,$_POST['username']);
	$pass=mysqli_real_escape_string($con,$_POST['password']);
	if ($us != "" && $pass != ""){

    $sql_query = "select count(*) as cntUser from logins where us='".$email."' and pass='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['usname'] = $us;
        echo 1;
    }else{
        echo 0;
    }

$conn->close();
?>