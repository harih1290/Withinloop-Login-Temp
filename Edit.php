<?php

session_start();
//Check user login or not
if(!isset($_SESSION['usna']) && $_SESSION['usna'] == ''){
   header('Location: logins.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT INFORMATION</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/jquery" src="js/edit.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.6.0.js"></script>

        <script src="js/jquery-ui.min.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="js/jquery-3.6.0.min.js"></script>



</head>
<body>
    <div class="jumbotron text-center">
        <h1>Edit Your Information</h1>
        <p><code>Way to Explore New Things!<code></p>
    </div>
<div class="container">

    <div class="was-validated">
        <div id="message"></div>
        <div class="form-group">
            <input type="text" class="form-control" id="txt_uname" name="txt_uname" placeholder="User Name" />
            <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="lastns" name="lastns" placeholder="Last Name" />
            <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.
        </div>
        <div class="form-group">
            <input type="date" class="form-control" id="dobs" name="dobs" value="2020-03-29"
       min="1950-01-01" max="2020-04-20"/>
       <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone Number" />
            <div id="phoneval" name="phoneval"></div>
        </div>
        <div class="form-group">
        	<textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
            <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.
        </div>
        <div class="form-group">
            <input type="button" class="btn btn-primary" value="Submit" name="edit_submit" id="edit_submit" />
        </div>
    </div>

</div>

<div id='response'></div>
<script type="text/javascript"> $(document).ready(function(){
    alert("working");
    /*alert('DONE');
        var useremail =<%=Session["usem"] %>;
        var password = <%=Session["uspass"] %>;
        //alert(useremail);
        if( useremail != "" && password != "" ){
            $.ajax({
                url:'datagen.php',
                type:'POST',
                data:{useremail:useremail,password:password},
                success:function(data){
                
                    if(data == "b"){
                        var x = document.getElementById("container");
                           x.style.display = "block";
                            //x.style.display = "none";
                    }else{
                       console.log("DONE");
                    }
                    
                }
            })
        }*/

    $("#edit_submit").click(function() {
        console.log("checking");
        alert("WELCOME");
        var username = $("#txt_uname").val().trim();
        var lastname = $("#lastns").val().trim();
        var dateb = $("#dobs").val().trim();
        var phonen = $("#phone").val().trim();
        var adds = $("#address").val().trim();
        //var useremail =<%=Session["usem"] %>;
        //var password = <%=Session["uspass"] %>;
        //alert(useremail);
        //if( useremail != "" && password != "" ){
             $.ajax({
                url:'edits.php',
                type:'POST',
                data:{username:username,lastname:lastname,dateb:dateb,phonen:phonen,adds:adds},
                success:function(data){
                    var msg = "";
                    console.log(data);
                    if(data == "true"){
                        window.location = "index.php";
                        console.log('success');
                    }else{
                        msg = "Something was Wrong!";
                    }
                    $("#response").html(msg);
                    
                }
            });
            
        //}
       
    });
});
   
</script>
</body>
</html>