<?php


?>
<html>
<head>
<title>Login</title>

</head>

<style>
body{
	margin:0;
	padding:0;
	background:url(img/p1.jfif);
	background-size:cover;
	background-position: center;
	font-family:sans-serif;
	
}

.loginbox{
	width: 350px;
	height:420px;
	background:#000;
	color:#fff;
	top:30%;
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

.loginbox input[type="submit"]{
	border:none;
	outline:none;
	background:red;
	color:#fff;
	font-size:18px;
	border-radius:20px;
}
.loginbox input[type="submit"]:hover{
	cursor: pointer;
	background:#ffc107;
	color:#000;
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

.logo{
	margin:20px;
	
}

.p{
	  text-align: center;
	color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
	font-family: Cursive;
	 font-size: 70px;

}
</style>


<body>

 <div class="p">  Welcome to DS Beach Hotel </div>

	<div class="loginbox">
	<img src="img/login.png" class="log">
	<h1>Login Here</h1>

	<form action="#" method="POST">
		<p>Email</p>
		<input type="text" name="email" placeholder="Enter the Email">
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Passsword"><br>
		<button class ="button1"><a href="index.php"> Login </a></button><br>
		<a href="#" class="abz">Lost your Password?</a><br>
		<a href="registration.php" class="abz">Don't have an Account?</a><br>
		
	</form>
	</div> 







</body>

</html>