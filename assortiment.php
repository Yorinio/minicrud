<!DOCTYPE html>
<html lang="en">
    <?php include_once('connect.php'); ?> </div>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
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
            <center><h1>Ons menu</h1></center>
            <div class="topleftarrow"></div>
            <div class="textbox">
                <h5>
                    <div class="harrowleft"></div>
                    <p>Bekijk hier onze heerlijke opties</p>
                    <div class="harrowright"></div>
                </h5>

      
            

                <center class="sub">Frieten</center>
                <div class="option">
                    <img src="img/friet1.png" />
                    <div class="content">
                        <p style="font-size: 30px;"><b>Robuuste Paprikafriet</b></p>
                        <div class="phpdesc">
                            <?php
                                $sql = "SELECT beschrijving FROM voorraad WHERE ID = :id";
                                $stmt = $connect->prepare($sql);
                                $productID = 'FRI01';
                                $stmt->bindParam(":id", $productID);
                                $stmt-> execute();
                                $result = $stmt->fetch();
                                echo $result['beschrijving'];
                            ?>
                        </div>
                        <p>Bestelcode: FRI01</p>
                    </div>
                </div>

                <div class="option">
                    <img src="img/friet2.jpg" />
                    <div class="content">
                    <p style="font-size: 30px;"><b>Knapperige Rasfriet</b></p>
                        <div class="phpdesc">
                            <?php
                                $productID = 'FRI02';
                                $stmt->bindParam(":id", $productID);
                                $stmt-> execute();
                                $result = $stmt->fetch();
                                echo $result['beschrijving'];
                            ?> 
                        </div>
                    <p>Bestelcode: FRI02</p>
                    </div>
                </div>

                <center class="sub">Snacks</center>
                <div class="option">
                    <img src="img/snack1.png" />
                    <div class="content">
                        <p style="font-size: 30px;"><b>El Mexicano</b></p>
                            <div class="phpdesc">
                                <?php
                                    $productID = 'SNA01';
                                    $stmt->bindParam(":id", $productID);
                                    $stmt-> execute();
                                    $result = $stmt->fetch();
                                    echo $result['beschrijving'];
                                ?> 
                            </div>
                        <p>Bestelcode: SNA01</p>
                    </div>
                </div>

                <div class="option">
                    <img src="img/snack2.png" />
                    <div class="content">
                    <p style="font-size: 30px;"><b>Kipnuggies</b></p>
                        <div class="phpdesc">
                            <?php
                                $productID = 'SNA02';
                                $stmt->bindParam(":id", $productID);
                                $stmt-> execute();
                                $result = $stmt->fetch();
                                echo $result['beschrijving'];
                            ?> 
                        </div>
                        <p>Bestelcode: SNA02</p>
                    </div>
                </div>

                <center class="sub">Burgers</center>
                <div class="option">
                    <img src="img/burger1.jpg" />
                    <div class="content">
                        <p style="font-size: 30px;"><b>El Burger S</b></p>
                            <div class="phpdesc">
                            <?php
                                $productID = 'BUR01';
                                $stmt->bindParam(":id", $productID);
                                $stmt-> execute();
                                $result = $stmt->fetch();
                                echo $result['beschrijving'];
                            ?> 
                            </div>
                        <p>Bestelcode: BUR01</p>
                    </div>
                </div>

                <div class="option">
                    <img src="img/burger2.png" />
                    <div class="content">
                        <p style="font-size: 30px;"><b>Burgerino Specialo</b></p>
                        <div class="phpdesc">
                            <?php
                                $productID = 'BUR02';
                                $stmt->bindParam(":id", $productID);
                                $stmt-> execute();
                                $result = $stmt->fetch();
                                echo $result['beschrijving'];
                            ?> 
                        </div>
                        <p>Bestelcode: BUR02</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php include 'footer.php';?>
    </body>
</html>
