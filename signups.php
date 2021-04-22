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
	$usemail=validate($_POST['nuseremail']);
    //mysqli_real_escape_string($conn,$_POST['nuseremail']);
	$usname=validate($_POST['nusername']);
    //mysqli_real_escape_string($conn,$_POST['nusername']);
    $uspass=validate($_POST['npassword']);
    //mysqli_real_escape_string($conn,$_POST['npassword']);

    $query = "select email from logins;";
    $selectedData = $conn->prepare($query);
    $selectedData->execute();
    $sresult = $selectedData->get_result();
    $userExistStatus = false;
    while($users = $sresult->fetch_assoc()){
    if($usemail == $users){
        $userExistStatus = true;
        break;
    }elseif($usemail !=$users) {
        $userExistStatus = false;
    }
}
$selectedData->close();
if($userExistStatus == true ){
    echo "false";
    }elseif ($userExistStatus == false) {
        if ($usemail != "" && ($usname != "" && $uspass !="")){

    $sql_query = "INSERT INTO logins (name,email,password)VALUES ('".$usname."','".$usemail."','".md5($uspass)."')";

    $insertData = $conn->prepare($sql_query);
    $insertData->execute();
    $insertData->close();
 //CHECKING 
    $sql_query = "select * from logins where email='".$usemail."' and password=md5('".$uspass."')";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row;
    if($count > 0){
        //$rawJsonFileData = file_get_contents("users.json");
        //$decodeJsonFileData = json_decode($rawJsonFileData,true);
       // $jsonDatas = array(
        //"Name" => $count[1],
        //"Email" =>$count[2],
       // "lastname" => $count[4],
       // "Password" => $count[3],
       // "dob" => $count[5],
       // "phone" => $count[6],
        //"address" => $count[7],
    //);
    //$decodeJsonFileData[$_POST['nuseremail']] = $jsonDatas;
    //file_put_contents("users.json",json_encode($decodeJsonFileData));*/
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

    }
	
$conn->close();
?>