<?php

$Name = $_GET['name'];

include('databaseCon.php');

$sql ="SELECT SUM(Menge) FROM bestellung WHERE Waren_ID IN(SELECT Waren_ID FROM ware WHERE Name ='".$Name."')";
$result = mysqli_query($conn, $sql);

$delete ="DELETE FROM ware WHERE Name = '".$Name."'";

$result2 = $result ->fetch_assoc();

if(!isset($result2['SUM(Menge)'])) {
	mysqli_query($conn, $delete);
	echo "Deleted Entry: ".$Name."<a href = '../Inventar.php'>  << BACK</a>";
	
	
}elseif($result2['SUM(Menge)'] > 0){

	echo "Der Artikel kann nicht gelöscht werden, weil sich ein Restbestand von " .$result2['SUM(Menge)']." Stück im Lager befindet.<a href ='../Inventar.php'>    >> BACK </a>";
}else{
	echo "ERROR";
}