<?php
if (isset($_POST["search"])) {
    $sql = "SELECT * FROM voorraad WHERE naam=:term";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":term", $_POST['term']);
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $value) {
?>  
               <script>
                   var naam = '<?=$value['naam'] ?>'; 
                   var klasse = '<?=$value['klasse'] ?>'; 
                   var foto = '<?=$value['foto'] ?>'; 
                   var beschrijving = '<?=$value['beschrijving'] ?>'; 
                   var prijs = '<?=$value['prijs'] ?>'; 
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
                           <p id="name">` + naam + `<a id="price"> ` + prijs + `</a></p>
                           <p id="desc">` + beschrijving + `</p>
                       </div>
                   </div>
                   `
               </script>
     <?php
    }
} else {
    include_once ('invisible/other/getallitems.php');
}
?>
