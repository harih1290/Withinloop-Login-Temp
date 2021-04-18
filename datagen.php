<?php
	include("conns.php");
	$uem=$_POST['useremail'];
	$pass=$_POST['password'];
	$query="select * FROM logins where email='".$uem."' and password=md5('".$pass."')";
	$result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $count = $row;
    if($count > 0){
        $_SESSION['usem']= $count[2];
        $_SESSION['uspass'] = $count[3];
        $_SESSION['usna']=$count[1];
        $_SESSION['phonen']=$count[5];
        $_SESSION['adds']=$count[6];
        echo "b";
    }else{
    	echo "a";
    }

?>