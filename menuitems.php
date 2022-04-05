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

     
        <?php
            $sql = "SELECT * FROM voorraad";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

                foreach($result as $value)
                {  
                    ?>  
                        <script>
                            var naam = '<?=$value['naam']?>'; 
                            var klasse = '<?=$value['klasse']?>'; 
                            var foto = '<?=$value['foto']?>'; 
                            var beschrijving = '<?=$value['beschrijving']?>'; 
                            var prijs = '<?=$value['prijs']?>'; 
                            console.log(naam);

                            var tag = document.createElement("p");
                            tag.id = naam;
                            var text = document.createTextNode(naam);
                            tag.appendChild(text);
                            var element = document.querySelector(".all");
                            element.appendChild(tag);
                            tag.innerHTML = 
                             `
                             <div class="option">
                                <div class="content">
                                    <img id="itemimg" src="` + foto + `">
                                    <p id="name">` + naam + `</p>
                                    <p id="desc">` + beschrijving + `</p>
                                    <p id="price">` + prijs + `</p>
                                </div>
                            </div>
                             `
                        </script>
                   <?php 
                }
        ?> 
</body>
</html>