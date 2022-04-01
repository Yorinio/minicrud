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
         <div class="adddish">
            <form name="oefen" action="uitkomst.php" method="post">
               <input placeholder="Foto link" id="naam" name="voornaam"> <br>
               <input placeholder="Naam gerecht" id="wachtwoord" name="wachtwoord"> <br>
               <input placeholder="Beschrijving gerecht" id="wachtwoord" name="wachtwoord"> <br>
               <button style="width:175px; margin-top:20px;" id="send" name="knop">Toevoegen</button>
            </form>
         </div>
         <br>
         <div class="editdish">
            <form name="oefen" action="update.php" method="post">
                <select  style="width:175px;" id="bestelcode" name="bestelcode">
                </select> <br>
               <textarea style="height:150px; width:175px;"  placeholder="Nieuwe beschrijving" id="beschrijving" name="beschrijving"></textarea> <br>
               <button style="width:175px; margin-top:20px;" id="send" name="knop">Bewerk</button>
               
            </form>
         </div>






       




 

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