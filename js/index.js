$(document).ready(function(){
    console.log("check......");
    var a=false;
    var b=false;

    $('input[name="txt_uname"]').focusout(function(){ 
        //var npa = $("#txt_uname").val().trim();
        //alert("CHECK");
        var npa = document.getElementById("txt_uname").value;
        var atpos = npa.indexOf("@");
        var dotpos = npa.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=npa.length) {
            var aaa=document.getElementById("usercheck");
            aaa.innerHTML = "Invalid Email Id";
        }
            
        else{
            var aaa=document.getElementById("usercheck");
            aaa.innerHTML = "Valid Email";
            //aaa.innerHTML="This is a success alert—check it out!";
            a=true;
        }
    
    });
    $('input[name="txt_pwd"]').focusout(function(){ 
        //var npa = $("#txt_pwd").val().trim();
        var aa = document.getElementById("txt_pwd").value;
        //lert();
        if(aa == null || aa == ""){
            var a=document.getElementById("passcheck");
            a.innerHTML = "Please Enter your the password";
        }
        if(aa.length<5 || aa.length>25){
            var a=document.getElementById("passcheck");

            a.innerHTML = "Enter Your Password length Above 6 digits";
        }else{
            var a=document.getElementById("passcheck");
            a.innerHTML = "Password Valid";
            b=true;
        }
      
    });

    $("#but_submit").click(function(){   
        var username = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();
        console.log("WORKs");
        if( a == true && b == true){
            $.ajax({
                url:'login.php',
                type:'POST',
                data:{username:username,password:password},
                success:function(data){
                    var msg = "";
                    console.log(data);
                    if(data == "false"){
                        msg = "Invalid username and password!";                                          
                    }else{
                        alert(data);
                        console.log(data);
                        window.location = "index.php";
                    }
                    var a=document.getElementById("response");
                    a.innerHTML = msg;
                    $("#message").html();
                    
                }
            });
        }
    });
    $("#sign").click(function () {
        window.location="signup.html";
    });
 
    
});

/*$('input[name="txt_uname"]').focusout(function(){ 
        //var npa = $("#txt_uname").val().trim();
        var npa = document.getElementById("txt_pwd").value;
        var atpos = npa.indexOf("@");
        var dotpos = npa.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=npa.length) {a
            var aaa=document.getElementById("usercheck");
            aaa.innerHTML = "Invalid Email Id";
        }
            
        else{
            var aaa=document.getElementById("usercheck");
            aaa.innerHTML = "Valid Email";
        }
    
    }); 
    $('input[name="txt_pwd"]').focusout(function(){ 
        //var npa = $("#txt_pwd").val().trim();
        var aa = document.getElementById("txt_pwd").value;
        //lert();
        if(aa == null || aa == ""){
            var a=document.getElementById("passcheck");
            a.innerHTML = "Please Enter your the password";
        }
        if(aa.length<5 || aa.length>25){
            var a=document.getElementById("passcheck");
            a.innerHTML = "Password length not enough password Above 6 digits Below 24 digits";
        }else{
            var a=document.getElementById("passcheck");
            a.innerHTML = "Password Valid";
        }
      
    });*/		