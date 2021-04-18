 $(document).ready(function(){
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