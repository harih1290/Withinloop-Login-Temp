$(document).ready(function(){
//var a=document.getElementById("passcheck");
//a.innerHTML = "Hello";

$('input[name="txt_pwd"]').focusout(function(){ 
    var npa = $("#txt_pwd").val().trim();
    $('input[name="retxt_pwd"]').focusout(function(){
        var nre = $("#retxt_pwd").val().trim();
        if(npa == nre){
            var a=document.getElementById("passcheck");
            a.innerHTML = "Matched";
        }else{
            var a=document.getElementById("passcheck");
            a.innerHTML = "Mismatch Password";
        }
    });
});

$("#sign_submit").click(function(){
    	var nuseremail = $("#usemail").val().trim();
    	var nusername = $("#ustxt_uname").val().trim();
    	var npassword = $("#txt_pwd").val().trim();
    	var nrepassword = $("#retxt_pwd").val().trim();

    	if(npassword==nrepassword){
    		if( nuseremail != "" && (npassword != "" && nusername != "" )){
            $.ajax({
                url:'signups.php',
                type:'POST',
                data:{nuseremail:nuseremail,nusername:nusername,npassword:npassword},
                success:function(data){
                    var msg = "";
                    alert(data);
                    if(data == "true"){

                        window.location = "index.php";
                    }else{
                        msg = "User Already Exists";
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
});