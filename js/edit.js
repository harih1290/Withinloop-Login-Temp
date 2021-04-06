$(document).ready(function(){
    $("#ed").click(function () {
        window.location="Edit.php";
        
    });
    $("#edit_submit").click(function() {
        console.log("checking");
        alert("WELCOME");
        var username = $("#txt_uname").val().trim();
        var lastname = $("#lastns").val().trim();
        var dateb = $("#dobs").val().trim();
        var phonen = $("#phone").val().trim();
        var adds = $("#address").val().trim();
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
                    $("#message").html(msg);
                    
                }
            });
    });
});