<?php 
    include_once('connect.php'); 

    if (isset($_POST['knop'])) {
       
        $sql = "UPDATE voorraad SET beschrijving = :beschrijving WHERE ID=:id";
        $stmt = $connect->prepare($sql);
        $productDesc = $_POST['beschrijving'];
        $id = $_POST['bestelcode'];
        $stmt->bindParam(":beschrijving", $productDesc);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        ?> 
        <script>
            window.location="http://localhost/minicrud/admin.php";
        </script>
        <?php
    }
?>
