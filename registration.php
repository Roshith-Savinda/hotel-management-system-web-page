<?php


?>





<html>
<head>
<title>Registration</title>

</head>
<style>
body{
	margin:0;
	padding:0;
	background:url(img/reg.jpeg);
	background-size:cover;
	background-position: center;
	font-family:sans-serif;
	
}

.loginbox{
	width: 350px;
	height:670px;
	background:#595959;
	color:#fff;
	top:10%;
	left:40%;
	position: absolute;
	transform: translate(-50%,-50);
	box-sizing: border-box;
	padding: 70px 30px;
	
}
.log{
	width:100px;
	height:100px;
	border-radius: 50%;
	position: absolute;
	top:-50;
	left:35%;
	
}

h1{
	margin:0;
	padding:0 0 20px;
	text-align:center;
	font-size:22px;
}

.loginbox p{
	margin:0;
	padding:0;
	font-weight:bold;
}

.loginbox input{
	width:280px;
	margin-bottom:20px;
	
}

.loginbox input[type="text"],input[type="password"]{
	border:none;
	border-bottom:1px solid #fff;
	background: transparent;
	outline:none;
	height:40px;
	color:#fff;
	font-size:16px;
}

.loginbox input[type="button"]{
	border:none;
	outline:none;
	background:red;
	color:#fff;
	font-size:18px;
	border-radius:20px;
}
.loginbox input[type="button"]:hover{
	cursor: pointer;
	background:#ffc107;
	color:#000;
}


.logo{
	margin:20px;
	
}
.loginbox a{
	text-decoration:none;
	font-size:12px;
	line-height:20px;
	color:darkgrey;
}
.loginbox a:hover{
	color:#ffc107;
}

</style>
<body>


	<div class="loginbox">
	<img src="img/rg.png" class="log">
	<h1>Register Here</h1>


	<form action="2.php" method="POST">
		<p>Full Name</p>
		<input type="text" name="fullname" placeholder="Enter Your Full Name">
		<p>Country</p>
		<input type="text" name="country" placeholder="Enter Your Country">
		<p>Gender</p>
			<input type="radio" id="Male" name="gender" value="Male">
			<label for="Male">Male</label>
			<input type="radio" id="Female" name="gender" value="Female">
			<label for="Female">Female</label><br> 
		
		<p>Email</p>
		<input type="text" name="email" placeholder="Enter The Email">
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Passsword"><br>
		<button class ="button1"><a href="login.php"> Register </a></button><br>
		<a href="login.php">Already have an account?</a><br>
		
		
	</form>
	</div> 






</body>

</html>