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
        <center><h1>Login</h1></center>
        <div class="topleftarrow"></div>
        <div class="textbox">
        
        <h5>
        <div class="harrowleft"></div>
        <p><i>Alleen voor werknemers/admin.</i></p>
        <div class="harrowright"></div>
        </h5>

        <form name="oefen" action="uitkomst.php" method="post">
        <input placeholder="Gebruikersnaam" id="naam" name="voornaam"> <br>
        <input placeholder="Wachtwoord" id="wachtwoord" name="wachtwoord"> <br>
        <button style="width:170px; margin-top:20px;" id="send" name="knop">Login</button>
        </form>
        <br>

        <div class="adminpanel">
        <i><p>Gerecht toevoegen</p></i>
        <form name="oefen" action="uitkomst.php" method="post">
        <input placeholder="Foto link" id="naam" name="voornaam"> <br>
        <input placeholder="Naam gerecht" id="wachtwoord" name="wachtwoord"> <br>
        <input placeholder="Beschrijving gerecht" id="wachtwoord" name="wachtwoord"> <br>
        <button style="width:170px; margin-top:20px;" id="send" name="knop">Toevoegen</button>
        </form>
        <br>

        <i><p>Gerecht bewerken</p></i>
        <form name="oefen" action="uitkomst.php" method="post">
        <input placeholder="Bestelcode" id="naam" name="voornaam"> <br>
        <input placeholder="Nieuwe beschrijving" id="wachtwoord" name="wachtwoord"> <br>

        <button style="width:170px; margin-top:20px;" id="send" name="knop">Bewerken</button>
        </form>
        </div>
    </div>
    </div>
    <!--Footer-->
    <?php include 'footer.php';?>

</body>
</html>