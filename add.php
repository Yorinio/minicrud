<?php include_once('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Week 1</title>
</head>
<body>
    <p id="tekst">Hallo</p>


    <?php

     $sql = "INSERT INTO `voorraad` (`ID`, `klasse`, `foto`, `beschrijving`, `naam`, `prijs`) VALUES (:ID, :klasse, :foto, :beschrijving, :naam, :prijs);";
     $stmt = $connect->prepare($sql);

     $stmt->bindParam(":ID", $_POST['idnieuwgerecht']);
     $stmt->bindParam(":klasse", $_POST['klassegerecht']);
     $stmt->bindParam(":foto", $_POST['fotolink']);
     $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
     $stmt->bindParam(":naam", $_POST['naamgerecht']);
     $stmt->bindParam(":prijs", $_POST['prijsgerecht']);
     $stmt->execute();
     $result = $stmt->fetchAll();

     ?>
</body>
</html>