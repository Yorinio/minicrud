<script>
           <?php
         if (isset($_POST['knop'])) {  
            $sql = "SELECT * FROM `voorraad` WHERE ID=:id";
            $stmt = $connect->prepare($sql);
            $id = $_POST['bestelcode'];
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $result = $stmt->fetchAll();
               foreach($result as $value)
               {  
                     ?>  
                           var naam = '<?=$value['naam'] ?>'; 
                           var klasse = '<?=$value['klasse'] ?>'; 
                           var foto = '<?=$value['foto'] ?>'; 
                           var beschrijving = '<?=$value['beschrijving'] ?>'; 
                           var prijs = '<?=$value['prijs'] ?>'; 
                           document.querySelector("#naamgerecht").value = naam;
                           document.querySelector("#prijsgerecht").value = prijs;
                           document.querySelector("#klassegerecht").value = klasse;
                           document.querySelector("#beschrijving").value = beschrijving;
                           document.querySelector("#fotolink").value = foto;
                           document.querySelector("#dishimg").src = foto;
            <?php
        }
    }
?>