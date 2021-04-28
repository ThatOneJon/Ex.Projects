<?php

session_start();
$user = $_POST['user'];
$pass = $_POST['passw'];


if (isset($user) AND $user == "nutzer" AND $pass == "geheim")	{
	    $_SESSION['loggedin'] = true;
		$_SESSION['username'] = $user;

	header('Location: ../Home(J).php');
	
}elseif($user == "nutzer" && $pass !== "geheim"){
	
	echo "<script>alert('Falsches Passwort!');
	window.location.href = '../Login(J).php';
	</script>!";
	
}elseif($user !== "nutzer"){
	
	echo "<script>alert('Ungültiger Benutzer!');
	window.location.href = '../Login(J).php';
	</script>!";
	
}else{
	echo "Error 404!";
}
