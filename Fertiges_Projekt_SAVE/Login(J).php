
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Login</title>
		        <meta name="keywords" contents="Hammer, Quality, Made in Ussr">
		        <meta charseit="UTF-8">
		        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	
	#backgr {
		background: radial-gradient(circle, rgba(15,14,14,1) 11%, rgba(106,100,100,1) 31%, rgba(101,101,101,1) 51%, rgba(22,20,20,0.969625350140056) 89%);
		border: solid black 3px;
		height:100%;
	}


	#log {
		display: flex;
		flex-direction:column ;
		width: 20%;
		height: 20%;
		background-color: lightgrey;
		border: solid black 2px;
		margin-left: 35%;
		margin-top: 10%;
		padding: 2%;
	}
	
	input[type = text] {
		display: inline-block;
		margin-left: 1%;
		float: left;
	}
	
	input[type = password] {
		display: inline-block;
		margin-left: 1%;
		float: left;		
	}
	input[type = submit]{
		font-weight: bold;
		display: inline-block;
		float: left;
		margin-left: 34%;
	}
	
	label{
		display: inline-block;
		float: left;
		clear: left;
		width: 100px;
		text-align: left;
		margin-left: 5%;
	}
	
	h2 {
		text-align:center;
	}
	
	
	</style>
				
				
	</head>
	
	<main id ="Backgr">	
	<div id ="Log">
	<div id= "Log2">
		<h2>Bitte loggen Sie sich ein!</h2> 
		<form id="loginForm" method="Post" action="../Fertiges_Projekt/PHP(J)/Login2(J).php">
			<label for = "user">Benutzername: </Label>
			<input type = "text"  name="user" placeholder ="M.Muster"> <br><br>
			<label for = "Passw">Passwort: </label> 
			<input type ="password" name = "passw" Placeholder = "*****"> <br><br>
			<input type ="submit" value = "Einloggen"><br>
		</form>
		<a href ="Landing(J).php"> << Back </a>
	</div>
	</div>
	</main>