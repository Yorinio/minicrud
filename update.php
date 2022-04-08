
<?php 
    include_once('connect.php'); 


    if (isset($_POST['knop'])) {
       
        $sql = "UPDATE voorraad SET beschrijving WHERE ID=1";
        $stmt = $connect->prepare($sql);
        $productDesc = `fdasd`;
        $stmt->bindParam(":beschrijving", $productDesc);
        $stmt->execute();
        $result = $stmt->fetchAll();
      
    }
?>
<script>window.location:("s")</script>
