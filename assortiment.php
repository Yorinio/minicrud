
<?php include_once('invisible/sessionlogin/connect.php'); ?> 
<!DOCTYPE html>
<html lang="en">
   </div>
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="styles/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
      <title>Multibar S</title>
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
            <h1>Assortiment</h1>
         </center>
         <div class="harrowleft"></div>
         <p>Bij Multibar S hebben wij ervoor gekozen om een balans te vinden tussen luxe en convenience.</p>
         <p>Voor vragen over allergenen kunt u ons bellen op 0648293092.</p>
         <form class="searchdishpanel" name="search" method="post">
            <input name="term">
            <button name="search" id="startsearch">Zoeken</button>
         </form>
         <div class="all">
            <?php include_once('invisible/other/searchorgetall.php'); ?>
         </div>
      </div>
      </div>
      </div>
      <!--Footer-->
   </body>
</html>
<?php include_once('invisible/other/logincheck.php'); ?>
