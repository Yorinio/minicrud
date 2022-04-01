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
            $sql = "SELECT ID FROM voorraad";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

                foreach($result as $value)
                {  
                    ?>
                        <script>
                            var jsvar = '<?=$value['ID']?>';
                            var x = document.getElementById("bestelcode");
                            var option = document.createElement("option");
                            option.text = jsvar;
                            option.id = jsvar;
                            x.add(option);
                        </script>
                   <?php 
                }
        ?> 
</body>
</html>