<html>
<head>
	<title> CONTACT FORM</title>	
	<style>
		body{
    margin: 0;
    padding: 0;
    text-align: center;
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/img11.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.contact-title
{
    margin-top: 40px;
    color: #fff;
    text-transform: uppercase;
    transition: all 4s ease-in-out;
}
.contact-title h1{
    font-size: 32px;
    line-height: 180px;
}
form
{
    margin-top: 50px;
    transition: all 4s ease-in-out;
}
.form-control
{
    width: 600px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid grey;
    color: #fff;
    font-size: 18px;
    margin-bottom: 16px;
}
input
{
    height: 45px;
}
form .submit
{
    background: #ff5722;
    border-color: transparent;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    height: 50px;
    margin-top: 20px;
}
form .submit:hover
{
    background-color: #f44336;
    cursor: pointer;
}
	</style>
</head>
<body>
	<div class="contact-title">
		<font size="48" color= #ff751a ><b> CONTACT FORM </b></font>
	</div>
	<div class="contact-form">
		<form id="contact-form" method="post" action="Contact-form.php">
			<input type="text" name="name" class="form-control" placeholder="ENTER YOUR NAME" required>
			<br>
			<input type="email" name="email" class="form-control" placeholder="ENTER YOUR EMAIL ADDRESS" required>
			<br>
			<textarea name="message" class="form-control" placeholder="ENTER MESSAGE YOU WANT TO SENT...." rows="4" required></textarea>
			<br>
			<input type="submit" class="form-control submit" value="SUBMIT">
		</form>
	</div>
</body>
</html>
