<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_unset();

// destroy the session
session_destroy();
	unlink("users.json");
	header('Location: logins.html');
?>
</body>
</html>
