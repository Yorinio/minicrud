<?php include_once ('invisible/sessionlogin/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Week 1</title>
   </head>
   <body>
      <?php
            $sql = "SELECT DISTINCT `klasse` FROM `voorraad`";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach ($result as $value) {
            ?>

                    <div class="klasse">
                        <center>
                            <p class="classheader"><?php echo $value['klasse']; ?></p>
                        </center>
                        <hr>
                            <div class="<?php echo $value['klasse']; ?>">

                <?php
                $sql2 = "SELECT * FROM voorraad WHERE klasse = :klasse";
                $stmt2 = $connect->prepare($sql2);
                $stmt2->bindParam(':klasse', $value['klasse']);
                $stmt2->execute();
                $producten = $stmt2->fetchAll();
                foreach ($producten as $product) {
            ?>  
                    <div class="option">
                        <div class="content">
                            <img id="itemimg" src="<?php echo $product['foto']; ?>">
                            <p id="name"><?php echo $product['naam']; ?><a id="price"><?php echo $product['prijs']; ?></a></p>
                            <p id="desc"><?php echo $product['beschrijving']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                    ?>

                                
</div>
                    </div>
                    <?php
                }
            ?> 
   </body>
</html>