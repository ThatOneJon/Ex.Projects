
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Red-Hammer</title>
		        <meta name="keywords" contents="Hammer, Quality, Made in Ussr">
		        <meta charseit="UTF-8">
		        <meta name="viewport" content="width=device-width, initial-sca-le=1.0">

	<style>
	
	main {			
	background: linear-gradient(90deg, rgba(50,6,6,1) 3%, rgba(156,35,35,1) 52%, rgba(79,12,23,1) 95%);
	}
	
	
	input[type = 'submit']{
		padding-left:1%;
		padding-right: 1%;
		padding-top:.5%;
		padding-bottom: .5%;
		padding-bottom: .5%;
		font-weight: bold;
	}
	
	label {
		font-size: 21px;
		text-decoration: underline;
	}
	
	select {
		padding-left:1%;
		padding-right: 1%;
		padding-top:.5%;
		padding-bottom: .5%;
		padding-bottom: .5%;
		font-weight: bold;
		}
		
	option {
		font-weight:bold;
	}	
	
	#wrap {
		border: solid black 3px;
		width: 35%;
		height: 40%;
		padding-left: 3%;
		background-color: lightgrey;
		display: block;
		margin-left: 25%;
		
	}
	
	h2 {
		text-align:center;
	}
	
	</style>


	</head>

<main id = "Form">
	<div id ="wrap">
	<h2>Transaktionsverlauf anzeigen </h2>
	<Form Method="POST" action ="../Fertiges_Projekt/Bestellung3.php">
		<label for="Kunde">Name: </label>
		<br> <br>
  
 <?php	
		include('../Fertiges_Projekt/PHP(J)/databaseCon.php');
		$sql = "SELECT Name FROM kunde_lieferant";
 ?>

		<select id="Kunde1" name="Kunde1">
		<option value = "Empty">Bitte Auswählen!</option>
		
<?php
		$result= mysqli_query($conn,$sql);

		while ($row = $result->fetch_assoc()) {
		$Name = $row['Name'];
		echo "<option value='$Name'>$Name</option><br>";
		}
 ?>	
		</select>
		<input type ="Submit" value ="Anzeigen" name ="bestellung">

	</Form>
	</div>
</main>