<?php
if (isset($_POST["search"])) {
    $sql = "SELECT * FROM voorraad WHERE naam=:term";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":term", $_POST['term']);
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $value) {
    ?>       
                   <div class="option">
                       <div class="content">
                       <img id="itemimg" src="<?php echo $value['foto']; ?>">
                            <p id="name"><?php echo $value['naam']; ?><a id="price"><?php echo $value['prijs']; ?></a></p>
                            <p id="desc"><?php echo $value['beschrijving']; ?></p>
                       </div>
                   </div>
               </script>
     <?php
    }
} else {
    include_once ('invisible/other/getallitems.php');
}
?>
