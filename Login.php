<!DOCTYPE html>
<html>
<head>
	<title> LOGIN</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style>
		body{
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url('images/img1.jpg');
    background-size: cover;
    background-position: center;
			}
	.login-box{
		max-width: 700px;
		float: none;
		margin: 100px auto;
}
.login-left{
	background: rgba(211,211,211,0.5);
	padding: 30px;
}
.login-right{
	background: #fff;
	padding: 30px;
}
.form-control{
	background-color: transparent !important;
}
/*section{ display: flex;  }

.left { width: 30%; height: auto; overflow: hidden; margin-top: 160px;}
.left img{  width: 250px;  height: 250px; margin-left: 70px; }
	*/</style>
</head>
<body>
	<section>
 <div class="right">
<div class="container">
<div class="login-box">
<div class="row">
	<div class="col-md-6 login-left">
		<h2> LOGIN</h2>
		<form action="Valid.php" method="post">
			<div class="form-group">
				<label> USERNAME </label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label> PASSWORD </label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">LOGIN</button>
		</form>
	</div>
	<div class="col-md-6 login-right">
		<h2> REGISTRATION</h2>
		<form action="Register.php" method="post">
			<div class="form-group">
				<label> USERNAME </label>
				<input type="text" name="user" class="form-control" value="" required>
			</div>
			<div class="form-group">
				<label> PASSWORD </label>
				<input type="password" name="password" class="form-control" value=""required>
			</div>
			<button type="submit" class="btn btn-primary">REGISTER</button>
		</form>
	</div>
</div>
</div>
</div>
</section>
</body>
</html>