<?php
include_once "connect.php";
if (isset($_POST["knop"])) {
    $sql = "SELECT password FROM adminlogin WHERE USERNAME = :username";
    $stmt = $connect->prepare($sql);
    $username = $_POST["username"];
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $result = $stmt->fetch();
    $dbpass = $result["password"];
    $inputpass = $_POST["password"];
    echo $dbpass;
    echo $inputpass;
    if ($dbpass == $inputpass) { 
    ?>
        <script>
            localStorage.setItem("loggedin", "true");
            window.location.replace("http://localhost/minicrud/admin.php");
        </script>
    <?php 
    } else { ?>
        <script>
            localStorage.setItem("loggedin", "false");
            window.location.replace("http://localhost/minicrud/admin.php");
            alert("Onjuist wachtwoord")
        </script>
        
    <?php }
    
}
?>
