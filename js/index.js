$(document).ready(function(){
    console.log("check......");
    $("#but_submit").click(function(){   
        var username = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();

        if( username != "" && password != "" ){
            $.ajax({
                url:'login.php',
                type:'POST',
                data:{username:username,password:password},
                success:function(data){
                    var msg = "";
                    alert(data);
                    if(data == "true"){
                        window.location = "index.php";
                    }else{
                        msg = "Invalid username and password!";
                    }
                    $("#message").html(msg);
                    
                }
            });
        }
    });
    $("#sign").click(function () {
        window.location="signup.html";
    });
 
    
});