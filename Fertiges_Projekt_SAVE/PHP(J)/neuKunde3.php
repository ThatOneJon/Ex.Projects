<?php

include('databaseCon.php');

$Name = $_POST['Name'];
$Anschrift = $_POST['Anschrift'];
$Kennung = $_POST['KL'];


if(isset($_POST['KL']) AND !empty($Name)) {

$sqlz = "INSERT INTO kunde_lieferant(Kennung, Name, Anschrift) VALUES('$Kennung','$Name', '$Anschrift')";

mysqli_query($conn, $sqlz);

  echo "<script>
    alert('  Neue Kundendaten aufgenommen! ');
    window.location.href='../Home(J).php';
    </script>";
	
$conn -> close();

}else{
	
	 echo "<script>
    alert('  Fehler! Versuchen Sie es erneut... ');
    window.location.href='../Home(J).php';
    </script>";

	
}

