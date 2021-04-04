<?php

session_start();
//Check user login or not
if(!isset($_SESSION['usna']) && $_SESSION['usna'] == ''){
    header('Location: logins.html');
}


?>
<!doctype html>
<html>
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery-3.6.0.js"></script>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="css/home.css">
<script src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/edit.js"></script>
</head>
    <body>
      
        <div class="container">
  <h2>Homepage</h2>                  
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">HTML</a></li>
    <li><a href="#" name="ed" id="ed">Profile Edit</a></li>
    <li><a href="logout.php">Logout</a></li>        
  </ul>
  <div class="">
    <head>Contents</head>
  </div>
  <div class="footer">
      <h1>WITHINLOOP</h1>

    </div>
    <style type="text/css">
      
    </style>
</div>
      <!-- <h1>Homepage</h1>
        <button name="ed" id="ed">EDIT</button>
        <br>
        <a href="logout.php">Logout</a>-->
    
    </body>
</html>
