<?php include_once('connect.php'); ?> </div>


<?php
$sql = "UPDATE voorraad SET beschrijving='test' WHERE id=1";
$productID = "1"

 $stmt = $connect->prepare($sql);
 $productID = 'FRI01';
 $stmt->bindParam(":id", $productID);
 $stmt-> execute();
 $result = $stmt->fetch();
 echo $result['beschrijving'];
                               $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
?>