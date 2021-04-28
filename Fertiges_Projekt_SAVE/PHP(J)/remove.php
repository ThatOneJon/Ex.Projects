<?php

include('databaseCon.php');

$Name = $_GET['name'];

$sql = "DELETE  FROM ware WHERE Name='".$Name."'";
$sql2 = "DELETE FROM bestellung WHERE Waren_ID IN (SELECT Waren_ID FROM ware WHERE Name='".$Name."')";

echo "<script>
				if (confirm('Die gewählte Ware :  ".$Name."  aus dem Inventar löschen?')) {
									
				}else{
					window.location='https://bob.rewi.uni-mainz.de/ebusiness029/Fertiges_Projekt/Gesamtbestand.php';
					}
					
		</script>";
	


if (mysqli_query($conn, $sql2) AND mysqli_query($conn, $sql)) {		
	
			echo "Records Deleted!";
			echo "<a href = 'https://bob.rewi.uni-mainz.de/ebusiness029/Fertiges_Projekt/Gesamtbestand.php'> >> Back</a>";
			mysqli_close($conn);

} else {

	echo "Fatal Error deleting Record";
		mysqli_close($conn);


}

	



		
		
