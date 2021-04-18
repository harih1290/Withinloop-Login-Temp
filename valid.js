function validateForm() {
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
}
