
<?php
include("databaseCon.php");

$Menge = -$_POST['Menge'];
$Waren_ID = $_POST['W_ID'];
$KID = $_POST['Kunde1'];



if(!empty($Menge)) {
	
	$fetchID = mysqli_query($conn,"SELECT kunde_lieferant_ID FROM kunde_lieferant WHERE Name = '$KID'");
	
	//Bestellung o. Lieferung? -------------- Funktion zur Prüfung
	
	$fetchKennung = mysqli_query($conn, "SELECT Kennung FROM kunde_lieferant WHERE Name ='$KID'");
	
	while($row1 = mysqli_fetch_assoc($fetchKennung)){
	$Kennung = $row1['Kennung'];}
	
	
	
	if ($Kennung == 1) {
		echo "<script> alert('Fehler! Achtung, der ausgewählte Kunde ist Lieferant. Warenausgänge erfolgen nicht an Zulieferer!');
		    window.location.href='../Warenbewegung(J).php';

			</script>";
		
		
	} else {
	
	//Bestellung o. Lieferung? --------------

		while($row = mysqli_fetch_assoc($fetchID)){
		$banana = $row['kunde_lieferant_ID'];
		}
		$sqlL = "INSERT INTO bestellung (Menge, Waren_ID, kunde_lieferant_ID) VALUES ('$Menge', '$Waren_ID', '$banana');";
		mysqli_query($conn, $sqlL);
	}
	
	


	echo "<script>
    alert(' Bestellung erfolgt! Warenbestand angeglichen! ');
    window.location.href='../Home(J).php';
    </script>";
	
	 }else{ 


 echo "<script>
 alert('  Fehler! ');
 window.location.href='../Warenbewegung(J).php';
		</script>";

} 
	