<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> HOME</title>
</head>
<body>
<h1> Welcome <?php echo $_SESSION['usrname']; ?> </h1>  
</body>
</html>