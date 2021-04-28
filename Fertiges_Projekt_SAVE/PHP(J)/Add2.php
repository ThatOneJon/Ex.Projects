<?php

$conn = mysqli_connect('localhost','ebusiness029','gGvHzwEnss','ebusiness029');


$Name = $_POST['Name'];
$Eink = $_POST['Eink'];
$Verk = $_POST['Verk'];

if (!empty($_POST['$Ware']) AND !empty ($_POST['$Name'])) {
}
else {
$sql = "INSERT INTO ware (Name, Einkaufspreis, Verkaufspreis) VALUES ('$Name', '$Eink', '$Verk');";

    mysqli_query($conn, $sql);


    echo "<script>
    alert('  Neuer Wareneintrag erfolgt! ');
    window.location.href='../Home(J).php';
    </script>";
	
	$conn -> close();

  }

