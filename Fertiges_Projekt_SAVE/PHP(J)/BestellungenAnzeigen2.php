
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Red-Hammer</title>
		        <meta name="keywords" contents="Hammer, Quality, Made in Ussr">
		        <meta charseit="UTF-8">
		        <meta name="viewport" content="width=device-width, initial-sca-le=1.0">

	<style>
	table, th, td {
          border: 2px solid black;
          border-collapse: collapse;
                                    }
  th, td {
          padding: 20px;
          font-size: 25px;
                                }
 table {
          text-align: center;
          margin-left: auto;
          margin-right: auto;
          width:50%;
		  background-color: lightgrey;
		  margin-top: 5%;
		  margin-bottom: 5%;
 }
	
	h2 {
		text-align:center;
	}
	
	p {
		text-align: center;
	}
	
	</style>


	</head>

<main>
	<div id="cont">
	<?php
	
		include('databaseCon.php');
		$fetchKunde =$_POST['Kunde1'];
		
		echo "<h1 style='text-align: center;'>".$fetchKunde."</h1>";
		
		

		$fetchKennung = "SELECT Kennung FROM kunde_lieferant WHERE Name = '$fetchKunde'";
		$result5 = mysqli_query($conn, $fetchKennung);

		while ($Kennung = $result5 -> fetch_assoc()) {
								
			if ($Kennung['Kennung'] == 0){
				echo "<h2 style ='text-align: center;'>Kunde - Warenausgänge </h2>";
				
			}elseif($Kennung['Kennung'] == 1){
				
				echo "<h2 style ='text-align: center;'>Lieferant - Wareneingänge</h2>"; 
				
		}else{
			
				echo "<h1> ERROR! </h1>";
		}
			}
	?>		
			<table>
				<tr>
				<th>Bestellnummer</th>
				<th>Warenname</th>
				<th>Bestellmenge</th>
				<th>Einzelpreis</th>
				<th>Bestellwert</th>	
				
				</tr>
	<?php
		$fetchNummer =	"SELECT Bestell_ID, kunde_lieferant_ID FROM bestellung WHERE kunde_lieferant_ID IN (
						SELECT kunde_lieferant_ID FROM kunde_lieferant WHERE Name ='$fetchKunde') GROUP BY Bestell_ID";
						
		$fetchName = 	"SELECT Name FROM ware WHERE Waren_ID IN (
						SELECT Waren_ID FROM bestellung WHERE kunde_lieferant_ID IN(
						SELECT kunde_lieferant_ID FROM kunde_lieferant WHERE name = '$fetchKunde'))";
						
		$fetchMenge =	"SELECT SUM(Menge), Bestell_ID FROM bestellung WHERE kunde_lieferant_ID IN 
						(SELECT kunde_lieferant_ID FROM kunde_lieferant WHERE Name ='$fetchKunde') GROUP BY Bestell_ID";
						
		$fetchWert =	"SELECT Verkaufspreis FROM ware WHERE Waren_ID IN(
						SELECT Waren_ID FROM bestellung WHERE kunde_lieferant_ID IN (
						SELECT kunde_lieferant_ID FROM kunde_lieferant WHERE Name = '$fetchKunde'))";
						
		$fetchPreis = "SELECT Verkaufspreis FROM ware WHERE Waren_ID IN(
						SELECT Waren_ID FROM bestellung WHERE kunde_lieferant_ID IN (
						SELECT kunde_lieferant_ID FROM kunde_lieferant WHERE Name = '$fetchKunde'))";
						
		
		$result1 = mysqli_query($conn, $fetchNummer);
		$result2 = mysqli_query($conn, $fetchName);
		$result3 = mysqli_query($conn, $fetchMenge);
		$result4 = mysqli_query($conn, $fetchWert);
		$result5 = mysqli_query($conn, $fetchPreis);
		
		$total = 0;
		
		while ($row = $result1 -> fetch_assoc() AND $row2 = $result2 -> fetch_assoc() AND $row3 = $result3 -> fetch_assoc() AND $row4 = $result4 ->fetch_assoc() AND $row5 = $result5 ->fetch_assoc()) {
		
		$total2 = ($total += abs($row3['SUM(Menge)']) * $row4['Verkaufspreis']);
		
		echo "<tr><td>".$row['Bestell_ID']."</td><td>".$row2['Name']."</td><td>".abs($row3['SUM(Menge)'])."</td><td>".$row5['Verkaufspreis'] ."</td><td>".abs($row3['SUM(Menge)']) * $row4['Verkaufspreis']."</td></tr>";
															
			}
			
			if (!empty($total)){ 
			echo "<h3 style = 'text-align: center'>Gesamtwert Transaktionen: ".$total2." $</h3>";
			}else{
			
			echo "<h1 style = 'text-align: center'>KEINE EINTRÄGE!</h1>";
		}		
			
			
			
		echo "</table><br>";
		
			
		$conn -> close();

	?>											


	</div>
</main>