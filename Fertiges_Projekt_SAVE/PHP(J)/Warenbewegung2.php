<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../Funktioniert/vorlageCSS.css"/>
  <title>Warenbestand</title>
          <meta name="keywords" contents="Hammer, Quality, Made in Ussr">
          <meta charseit="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
	
		.Back {
				background: linear-gradient(90deg, rgba(50,6,6,1) 3%, rgba(156,35,35,1) 52%, rgba(79,12,23,1) 95%);
				height: 100%;
				margin-top: 1%;
				padding:1%;
				min-width: 500px;
				}
		select {
			font-size: 20px;
			display: inline-block;
			width: 10vw;

				}
		main {
			margin-left: 35%;
			margin-right: auto;
			padding-right: 5%;
			}

		form {
			margin-top: 1%;
			margin-bottom: auto;
			border: solid black 3px;
			width: 25%;
			min-width: 300px;
			padding-left: 6%;
			padding-right: 0;
			padding-bottom: 3%;
			padding-top: 3%;
			background-color: lightgrey;
			
			}

		label {
			display: inline-block;
			text-align: center;
			margin-right: 3%;
			width: 10vw;
			min-width: 10vw;
			font-size: 20px;
			margin-top: 1%;
			}

		input {
			display: inline-block;
			width: 10vw;
			min-width: 200px;
			text-align: center;
			padding: 1%;
	 
			}
		input[type="submit"] {
			padding: 3%;
			font-size: 20px;
			font-weight: bold;
			}
	
	</style>
</head>

<div class="Back">
	<body>
		<main>
			<form name ="Bestandsangleich" Method="Post" onSubmit = "return subForm();">
				<label for ="Eingang">Lieferung<Label>
				<input type = "radio" id="Ein" name="Bewegung" value ="Eingang" checked>
				<label for="Bestellung">Bestellung</Label>
				<input type="radio" id="Aus" name ="Bewegung" value="Bestellung">
  
<br> <br>

				<label for="Kunde">Kundenname: </label>

<br><br>
  
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

<br><br>
  
	<label for="W_ID">Waren ID: </label>

<br><br>

   <select id="W_ID" name="W_ID" onChange="doReload(this.value);">
   
		<?php
		if (empty($_GET)) 		{

			echo "<option value = 'Empty'>Bitte Auswählen!</option>";
		
	 } else {
			
			$Ware2 = intval($_GET['val']);
			
			echo "<option value='$Ware2'>$Ware2</option><br> ";
			}	
		?>
		
			<?php		
				$sql2 = "SELECT Waren_ID FROM ware";
				$result= mysqli_query($conn,$sql2);
	
				while ($row = $result->fetch_assoc()) {
				$Ware = $row['Waren_ID'];
				echo "<option value='$Ware'>$Ware</option><br>";
				}				
			?>
    </select>
	
<br><br>


<!-- Does a reload each time Waren_ID is selected, in order to fetch related Warenname -->

	<script>
		
		function doReload(passValue) {
		window.location = "../Fertiges_Projekt/Warenbewegung(J).php?val="+passValue;
		}
	
	</script>
	
  <label for ="Warenname">Warenname: </label>  
<br>  
	<div ID = "N_CHange" Name="N_CHange">	
		<?php
		if (empty($_GET)){
			
			echo "<h3>Kein Auswahl</h3>";
			}
			
		else {
			
			$val = intval($_GET['val']);
		
			$sql3 ="SELECT Name FROM ware WHERE Waren_ID = '$val'";
		
			$run = mysqli_query($conn, $sql3);
		
		
			while ($res = $run ->fetch_assoc())  {
			$Bez = $res['Name'];
				echo "<h3>$Bez<h3>";
			}
		}
		?>
	</div>	
		
     <label for="Menge">Menge: </label><br><br>
	<input type="number" name ="Menge" placeholder="500">
 
 <br><br>
  
	<input type="submit" value="Absenden">

			</form>
		</main>
	</div>
<!--
Checks which radio Value is selected: Lieferung vs Bestellung, submits Form accordingly vvvv 
 -->	
	<script>
			function subForm () {
				if(document.Bestandsangleich.Bewegung[0].checked ==true) {
					document.Bestandsangleich.action="../Fertiges_Projekt/PHP(J)/Lieferung.php";
					
				}
			else if(document.Bestandsangleich.Bewegung[1].checked == true) {
				
				document.Bestandsangleich.action="../Fertiges_Projekt/PHP(J)/Bestellung.php";
			}
				return true;
			}
					
	</script>

</body>

	

