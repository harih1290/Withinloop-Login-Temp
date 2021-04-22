 $(document).ready(function(){
    alert("working hari");
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
            });
        }*/
    $('input[name="phone"]').focusout(function(){ 
        //var npa = $("#txt_pwd").val().trim();
        var bb = document.getElementById("phone").value;
        alert(bb);
        if(bb == null || bb == ""){
            var a=document.getElementById("phoneval");
            a.innerHTML = "Please Enter your Phone Number";
        }
        if(bb.length<=10 || bb.length>=0){
            var a=document.getElementById("phoneval");
            a.innerHTML = "Please Enter Your Valid 10 Digit Phone Number";
        }
      console.log(bb);
    });

    $("#edit_submit").click(function() {
        console.log("checking");
        //alert("WELCOME");
        var username = $("#txt_uname").val().trim();
        var lastname = $("#lastns").val().trim();
        var dateb = $("#dobs").val().trim();
        var phonen = $("#phone").val().trim();
        var adds = $("#address").val().trim();
        //var useremail =<%=Session["usem"] %>;
        //var password = <%=Session["uspass"] %>;
        //alert(useremail);
        //var xy = document.getElementById("phone").value;
        //if( xy>=10 && xy<=0 ){
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