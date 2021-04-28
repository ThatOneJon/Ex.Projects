<?php

session_start();

if (isset($_SESSION['username']) && $_SESSION['loggedin'] == true) {
    echo "<h3 style = 'text-decoration: underline; position: absolute;'>Logged in as: " . $_SESSION['username'] . "!</h3>";
	
} else {
	
	echo "<script>alert('Login erforderlich!');
	window.location.href = '../Fertiges_Projekt/Landing(J).php';
	</script>!";
	
}


