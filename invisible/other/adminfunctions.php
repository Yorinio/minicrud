<!--Login Panel Check-->
<?php
if (isset($_SESSION['loggedin'])) {
?>
         <script>
            var sessionli = '<?=$_SESSION['loggedin'] ?>';
            console.log(sessionli);
               if(sessionli == "yes") {
                  document.querySelector('.adminpanel').style.display = "block";
                  document.querySelector('.loginform').style.display = "none";
                  document.querySelector('#panelloginbtn').style.display = "none";
                  document.querySelector('#panellogoutbtn').style.display = "block";

               } else {
                document.querySelector('#panelloginbtn').style.display = "block";
                  document.querySelector('#panellogoutbtn').style.display = "none";

               }
               </script>
      <?php
}
?>

<!--Load items into select-->
<?php
$sql = "SELECT * FROM `voorraad` ORDER BY `voorraad`.`ID` ASC";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
foreach ($result as $value) {
?>  
                    <script>
                        var item = '<?=$value['naam'] ?>';               
                        var x = document.querySelector("#bestelcode");
                        var option = document.createElement("option");
                        option.text = '<?=$value['ID'] ?>';
                        option.id = '<?=$value['ID'] ?>';
                        x.add(option);
                    </script>      
                    <?php
}
?>

<!--EventListener main select-->
<script>
adminselect = document.querySelector(".adminoption");
adminselect.addEventListener('change', (event) => {
  if(document.querySelector(".adminoption").value == 'Bewerken') {
      document.querySelector("#toevoegen").style.display = "none";
      document.querySelector("#verwijderen").style.display = "none";
      document.querySelector("#bestelcode").style.display = "inline";
      document.querySelector(".inzien").style.display = "inline";
      document.querySelector("#updaten").style.display = "flex";
}
if(document.querySelector(".adminoption").value == 'Toevoegen') {
      document.querySelector("#toevoegen").style.display = "flex";
      document.querySelector("#bestelcode").style.display = "none";
      document.querySelector(".inzien").style.display = "none";
      document.querySelector("#verwijderen").style.display = "none";
      document.querySelector("#updaten").style.display = "none";
      document.querySelector("#idnieuwgerecht").value = "";
      document.querySelector("#naamgerecht").value = "";
      document.querySelector("#prijsgerecht").value = "";
      document.querySelector("#klassegerecht").value = "";
      document.querySelector("#beschrijving").value = "";
      document.querySelector("#fotolink").value = "";
      document.querySelector("#dishimg").src = "";
}
if(document.querySelector(".adminoption").value == 'Verwijderen') {
    document.querySelector("#bestelcode").style.display = "inline";
      document.querySelector(".inzien").style.display = "inline";
      document.querySelector("#toevoegen").style.display = "none";
      document.querySelector("#verwijderen").style.display = "flex";
      document.querySelector("#updaten").style.display = "none";
}
});
</script>

<!--Load items into select-->
           <?php
if (isset($_POST['knop'])) {
    $sql = "SELECT * FROM `voorraad` WHERE ID=:id";
    $stmt = $connect->prepare($sql);
    $id = $_POST['bestelcode'];
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $value) {
?>  
<script>
                           var id = '<?=$value['ID'] ?>'; 
                           var naam = '<?=$value['naam'] ?>'; 
                           var klasse = '<?=$value['klasse'] ?>'; 
                           var foto = '<?=$value['foto'] ?>'; 
                           var beschrijving = '<?=$value['beschrijving'] ?>'; 
                           var prijs = '<?=$value['prijs'] ?>'; 
                           document.querySelector("#idnieuwgerecht").value = id;
                           document.querySelector("#naamgerecht").value = naam;
                           document.querySelector("#prijsgerecht").value = prijs;
                           document.querySelector("#klassegerecht").value = klasse;
                           document.querySelector("#beschrijving").value = beschrijving;
                           document.querySelector("#fotolink").value = foto;
                           document.querySelector("#dishimg").src = foto;
                           </script>
            <?php
    }
}
?>

<!--Add New Item-->
<?php
if (isset($_POST['add'])) {
    $sql = "INSERT INTO `voorraad` (`ID`, `klasse`, `foto`, `beschrijving`, `naam`, `prijs`) VALUES (:ID, :klasse, :foto, :beschrijving, :naam, :prijs);";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['idnieuwgerecht']);
    $stmt->bindParam(":klasse", $_POST['klassegerecht']);
    $stmt->bindParam(":foto", $_POST['fotolink']);
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":naam", $_POST['naamgerecht']);
    $stmt->bindParam(":prijs", $_POST['prijsgerecht']);
    $stmt->execute();
    $result = $stmt->fetchAll();
}
?>

<!--Update Item-->
<?php
if (isset($_POST['update'])) {
    $sql = "UPDATE voorraad SET beschrijving=:nieuwebeschrijving, naam=:nieuwenaam, klasse=:nieuweklasse, foto=:nieuwefotolink, prijs=:nieuweprijs WHERE ID=:id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST['idnieuwgerecht']);
    $stmt->bindParam(":nieuweklasse", $_POST['klassegerecht']);
    $stmt->bindParam(":nieuwefotolink", $_POST['fotolink']);
    $stmt->bindParam(":nieuwebeschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":nieuwenaam", $_POST['naamgerecht']);
    $stmt->bindParam(":nieuweprijs", $_POST['prijsgerecht']);
    $stmt->execute();
    $result = $stmt->fetchAll();
}
?>

<!--Delete Item-->
<?php
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM `voorraad` WHERE ID=:id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST['idnieuwgerecht']);
    $stmt->execute();
    $result = $stmt->fetchAll();
}
?>
