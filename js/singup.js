$(document).ready(function(){
//var a=document.getElementById("passcheck");
//a.innerHTML = "Hello";
    $('input[name="usemail"]').focusout(function(){ 
        var npa = $("#usemail").val().trim();
    
        var atpos = npa.indexOf("@");
        var dotpos = npa.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=npa.length) {
            var a=document.getElementById("userchek");
            a.innerHTML = "Invalid Email Id";
        }
            
        else{
            var a=document.getElementById("userchek");
            a.innerHTML = "Valid Email";
        }
    
    });

    $('input[name="ustxt_uname"]').focusout(function(){ 
            var npaa = document.getElementById("ustxt_uname").value;
            if (npaa.length>=1) {
                var a=document.getElementById("nam");
                a.innerHTML = "User Name Valid";
            }
            
    });


$('input[name="txt_pwd"]').focusout(function(){ 
    var npa = $("#txt_pwd").val().trim();
    var aa = document.getElementById("txt_pwd").value;
    //lert();
    if(aa == null || aa == ""){
        var a=document.getElementById("passs");
            a.innerHTML = "Please Enter your the password";
    }
    if(aa.length<5 || aa.length>25){
        var a=document.getElementById("passs");
            a.innerHTML = "Password length not enough password Above 6 digits Below 24 digits";
    }else{
        var a=document.getElementById("passs");
            a.innerHTML = "Password Valid";
            
    }
      
});
$('input[name="retxt_pwd"]').focusout(function(){
            var nre = $("#retxt_pwd").val().trim();
            var nra = $("#txt_pwd").val().trim();
            //var aab = document.getElementById("txt_pwd").value;
            if(nre == nra){
                var aaa=document.getElementById("passcheck");
                aaa.innerHTML = "Matched";
            }else{
                var aaa=document.getElementById("passcheck");
                aaa.innerHTML = "Mismatch Password";
        }
});

   

$("#sign_submit").click(function(){
    	var nuseremail = $("#usemail").val().trim();
    	var nusername = $("#ustxt_uname").val().trim();
    	var npassword = $("#txt_pwd").val().trim();
    	var nrepassword = $("#retxt_pwd").val().trim();
        //validateForm();
    	if(npassword==nrepassword){
    		if( nuseremail != "" && (npassword != "" && nusername != "" )){
            $.ajax({
                url:'signups.php',
                type:'POST',
                data:{nuseremail:nuseremail,nusername:nusername,npassword:npassword},
                success:function(data){
                    var msg = "";
                    if(data == "false"){
                        msg = "User Already Exists";
                        
                    }else{
                        
                        window.location = "index.php";
                    }
                    $("#message").html(msg);
                    
                }
            	});
        	}
    	}
    	
    	else{
    		msg="Password Mismatch";
            
    	}
    	$("#message").html(msg);

    });
/*function validateForm() {
    var y = document.getElementById("name").value;
    var letters = /^[A-Za-z]+$/;
    if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
    }
    var z =document.getElementById("college").value;
    if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
    }
    var x = document.getElementById("email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {a
        lert("Not a valid e-mail address.");
        return false;
    }
    var a = document.getElementById("password").value;
    if(a == null || a == ""){
        alert("Password must be filled out");
        return false;
    }
    if(a.length<5 || a.length>25){
        alert("Passwords must be 5 to 25 characters long.");
        return false;
    }
    var b = document.getElementById("cpassword").value;
    if (a!=b){
        alert("Passwords must match.");
        return false;
    }
}*/
 $("#sign").click(function () {
        window.location="logins.html";
    });
});