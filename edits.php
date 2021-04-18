<?php
    include("conns.php");
    session_start();
    $us=mysqli_real_escape_string($conn,$_POST['username']);
    $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
    $dateb=mysqli_real_escape_string($conn,$_POST['dateb']);
    $phonen=mysqli_real_escape_string($conn,$_POST['phonen']);
    $adds=mysqli_real_escape_string($conn,$_POST['adds']);
    $userses=$_SESSION['usem'];
    $upassses=$_SESSION['uspass'];
    $newDate = date("Y-m-d", strtotime($dateb));

    /*$sql_query = "select * from logins where email='".$userses."' and password='".$upassses."' ";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
        */
    //$count = $row;

    //if($count > 0){
    /*
    IF NOT EXISTS(SELECT 1 FROM Payments WHERE CustomerID = '145300')
        INSERT INTO Payments(CustomerID,Amount)
        VALUES('145300',12.33)
    ELSE
        UPDATE Payments
        SET Amount = 12.33
        WHERE CustomerID = '145300'
    */
        $query="UPDATE logins SET name = '".$us."',lastn='".$lastname."',dob='".$newDate."',phone='".$phonen."',address='".$adds."'
        WHERE email ='".$userses."'";

        if (mysqli_query($conn, $query)) {
            $_SESSION['usna']=$us;
            $_SESSION['phonen']=$phonen;
            $_SESSION['adds']=$adds;
            echo "true";

        } else {
            echo "false".$conn->error;
        }

       /*$query="INSERT INTO logins (name,lastn,dob,phone,address) VALUES ('".$us."','".$lastname."',STR_TO_DATE('".$dateb."', '%Y-%M-%d'),'".$phonen."','".$adds."') where email=='".$userses."' and password=='".$upassses."' ";
        //$ress = mysqli_query($conn,$query);
        //$sql_query = "select * from logins where lastn='".$lastname."' and phone='".$phonen."' ";
        //$result = mysqli_query($conn,$sql_query);
        //$row = mysqli_fetch_array($result);
        //$counts = $row;
        //echo "$counts[4]";
        if($counts > 0){
            
        }else{
            
    //}else{
    //    echo "false";
    //}*/

$conn->close();
?>