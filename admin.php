<?php include_once('connect.php'); ?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <title>Cafetaria S</title>
   </head>
   <body>
      <!--Header-->
      <?php include 'header.php';?>
      <!--Cart-->
      <?php include 'cart.php';?>
      <!--Navbar-->
      <?php include 'menu.php';?>
      <!--Container-->
      <div class="container">
      <center>
         <h1>Login</h1>
      </center>
      <div class="topleftarrow"></div>
      <div class="textbox">
      <h5>
         <div class="harrowleft"></div>
         <p><i>Alleen voor admin.</i></p>
         <div class="harrowright"></div>
      </h5>
      <div class="loginform">
         <form name="oefen" action="adminlogin.php" method="post">
            <input placeholder="Gebruikersnaam" id="username" name="username"> <br>
            <input placeholder="Wachtwoord" id="password" name="password"> <br>
            <button style="width:175px; margin-top:20px;" id="send" name="knop">Login</button>
         </form>
      </div>
      <div class="adminpanel">
      <div class="details">         

            <form name="oefen" method="post">
                  <select style="width:170px;" id="bestelcode" name="bestelcode">
                  
                  </select> 

                  <button style="width: 152px;" id="send" name="knop">Inzien</button>
                  <br>
                  <input placeholder="ID voor nieuw gerecht" id="idnieuwgerecht" name="idnieuwgerecht"> <br>

                  <input placeholder="Naam gerecht" id="naamgerecht" name="naamgerecht"> <br>
                  <input placeholder="Prijs gerecht" id="prijsgerecht" name="prijsgerecht"> <br>
                  <input placeholder="Klasse gerecht" id="klassegerecht" name="klassegerecht"> <br>
                  <input placeholder="Foto link" id="fotolink" name="fotolink"> 
                  <textarea placeholder="Nieuwe beschrijving" id="beschrijving" name="beschrijving"></textarea> <br>
                  <img id="dishimg" src="http://localhost/minicrud/img/friet1.png">
                   <a href="http://localhost/minicrud/add.php">Toevoegen</a>

               </div>
 







<!-- Get item info on same page-->
<script>
           <?php
         if (isset($_POST['knop'])) {  
            $sql = "SELECT * FROM `voorraad` WHERE ID=:id";
            $stmt = $connect->prepare($sql);
            $id = $_POST['bestelcode'];
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $result = $stmt->fetchAll();
               foreach($result as $value)
               {  
                     ?>  
                           var naam = '<?=$value['naam'] ?>'; 
                           var klasse = '<?=$value['klasse'] ?>'; 
                           var foto = '<?=$value['foto'] ?>'; 
                           var beschrijving = '<?=$value['beschrijving'] ?>'; 
                           var prijs = '<?=$value['prijs'] ?>'; 
                           document.querySelector("#naamgerecht").value = naam;
                           document.querySelector("#prijsgerecht").value = prijs;
                           document.querySelector("#klassegerecht").value = klasse;
                           document.querySelector("#beschrijving").value = beschrijving;
                           document.querySelector("#fotolink").value = foto;
                           document.querySelector("#dishimg").src = foto;
            <?php
        }
    }
?>

 </script>

      </div>
      <!--Footer-->
      <?php include 'footer.php';?>
      <?php include 'getall.php';?>

      <script>
         if(localStorage.getItem("loggedin") == "true"){
             document.querySelector(".adminpanel").style.display = "block";
             document.querySelector(".loginform").innerHTML = "<p>Welkom</p> <br> <button id='logout'>Logout</button>";
             document.querySelector("#logout").addEventListener("click", myFunction);
         
         function myFunction() {
             localStorage.setItem("loggedin", "false")
             location.reload();
         }
         } else {
             document.querySelector(".adminpanel").style.display = "none";
         }
         
      </script>
   </body>
</html>