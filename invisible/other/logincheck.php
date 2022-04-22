<?php
if (isset($_SESSION['loggedin'])) {
?>
         <script>
            var sessionli = '<?=$_SESSION['loggedin'] ?>';
            console.log(sessionli);
               if(sessionli == "yes") {
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

