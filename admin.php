<?php include_once('invisible/sessionlogin/connect.php'); ?> 
<?php include_once('invisible/sessionlogin/session.php'); ?> 

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles/style.css">
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
      <!--Admin Panel-->
      <?php include 'cart.php';?>
      <!--Navbar-->
      <?php include 'menu.php';?>
      <!--Container-->
      <div class="container">
         <center>
            <h1>Admin Panel</h1>
         </center>
         <div class="loginform">
            <form name="oefen" action="invisible/sessionlogin/adminlogin.php" method="post">
               <input placeholder="Gebruikersnaam" id="username" name="username"> <br>
               <input placeholder="Wachtwoord" id="password" type="password" name="password"> <br>
               <button style="width:175px; margin-top:20px;" id="send" name="loginbutton">Login</button>
            </form>
         </div>
         <div class="adminpanel">
            <div class="details">
        

               <form name="oefen" method="post">
               <select style="width:170px;" id="bestelcode" name="bestelcode">
               </select> 
               <button style="width: 152px;" id="send" class="inzien" name="knop">Inzien</button>
              
               <p class="label">Uit te voeren actie:</p>
               <select class="adminoption">
                  <option>Bewerken</option>
                  <option>Toevoegen</option>
                  <option>Verwijderen</option>
               </select>
               
               <br>
               <input placeholder="ID bewerken kan niet" id="idnieuwgerecht" name="idnieuwgerecht"> <br>
               <input placeholder="Naam gerecht" id="naamgerecht" name="naamgerecht"> <br>
               <input placeholder="Prijs gerecht" id="prijsgerecht" name="prijsgerecht"> <br>
               <input placeholder="Klasse gerecht" id="klassegerecht" name="klassegerecht"> <br>
               <input placeholder="Foto link" id="fotolink" name="fotolink"> 
               <textarea placeholder="Nieuwe beschrijving" id="beschrijving" name="beschrijving"></textarea>
               <br>
               <img id="dishimg" src="http://localhost/minicrud/img/friet1.png">
               <button style="width: 152px;" id="updaten" name="update">Updaten</button>
               <button style="width: 152px;" id="toevoegen" name="add">Toevoegen</button>
               <button style="width: 152px;" id="verwijderen" name="delete">Verwijderen</button>
            </div>
         </div>
      <!--Footer-->
   </body>
</html>

<?php include_once('invisible/other/adminfunctions.php'); ?> 
<?php include_once('invisible/other/logincheck.php'); ?>