<?php

session_start();
//Check user login or not
if(!isset($_SESSION['usna']) && $_SESSION['usna'] == ''){
  header('Location: logins.html');
  }else{    
   if($_SESSION['phonen'] =="" && $_SESSION['adds'] ==" "){
    $_SESSION['phonen']="abc";
    $_SESSION['adds']="xyz";
  }
}
?>

<!doctype html>
<html>
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/homes.js"></script>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery-3.6.0.js"></script>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="js/jquery-3.6.0.min.js"></script>

</head>
<body>   
 <!--<div class="rem">                
    <div class="navbar navbar-light bg-light" >
        <a class="navbar-brand" href="#">
         </a><a href="#" class="navbar-brand" id="baa" >WITHINLOOP</a>
      
    </div>
  </div>-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" id="baa" class="baa">WITHINLOOP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Option <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" id="ed" name="ed">Profile Edit</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="#"  id="lout" name="lout" ><span class="glyphicon glyphicon-log-in"></span> Login Out</a></li>
    </ul>
  </div>
</nav>
<div class="co">  

<div class="card">
  <img src="img.jpg" alt="<?php echo"".$_SESSION['usna'].""; ?>" style="width:100%">
  <h1><?php echo"".$_SESSION['usna'].""; ?></h1>
  <p class="title">Address: <?php echo"".$_SESSION['adds'].""?></p>
  <p>Phone: <?php echo"".$_SESSION['phonen']."";?></p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <a href="#" name="eds" id="eds" class="buts">Profile Edit</a>
  
</div>
 </div>


     <!-- <div class="person" id="person">
        
      </div>  -->        
  
  <div class="footer">
      <h1>WITHINLOOP</h1>

    </div>
    <style type="text/css">
      
    </style>
</div>
<!--<style>
  .dropbtn {
    background-color: transparent;
  color: blue;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: transparent;
}
</style>-->
      <!-- <h1>Homepage</h1>
        <button name="ed" id="ed">EDIT</button>
        <br>
        <a href="logout.php">Logout</a>-->
        <script type="text/javascript">
          $(document).ready(function(){
          //alert("check");
          $("#ed").click(function () {
              window.location="Edit.php";
        
              });
          $("#eds").click(function () {
              window.location="Edit.php";
        
              });
          $("#lout").click(function () {
              window.location="logout.php";
            });
          });
        </script>
    
    </body>
</html>
	