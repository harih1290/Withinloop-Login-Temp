<?php
	include("conns.php");
    session_start();
    //print_r($_SESSION);
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    //$myfile = fopen("users.json", "w");
	$us=validate($_POST['username']);
    //mysqli_real_escape_string($conn,$_POST['username']);
	$pass=validate($_POST['password']);
    //mysqli_real_escape_string($conn,$_POST['password']);
if ($us != "" && $pass != ""){

    $sql_query = "select * from logins where email='".$us."' and password=md5('".$pass."')";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row;
    if($count > 0){
    //     $rawJsonFileData = file_get_contents("users.json");
    //$decodeJsonFileData = json_decode($rawJsonFileData,true);
    //$jsonDatas = array(
    //    "Email" => $count[2],
    //    "Password" => $count[3],
    //);
    //$decodeJsonFileData[$_POST['username']] = $jsonDatas;
    //file_put_contents("users.json",json_encode($decodeJsonFileData));
    
        $_SESSION['usna'] =$count[1] ;
        $_SESSION['usem'] =$count[2] ;
        $_SESSION['uspass']=$count[3];
        $_SESSION['phonen'] =$count[6] ;
        $_SESSION['adds']=$count[7];
        $cookie_name = $count[2];
        $cookie_value = $count[3];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        echo "true";
    }else{
        echo "false";
    }
}

$conn->close();
//fclose($myfile);
?>