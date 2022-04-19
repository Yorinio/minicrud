<?php
include_once "connect.php";
include_once "session.php";

if (isset($_POST["loginbutton"])) {
    $sql = "SELECT password FROM adminlogin WHERE USERNAME = :username";
    $stmt = $connect->prepare($sql);
    $username = $_POST["username"];
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $result = $stmt->fetch();
    $dbpass = $result["password"];
    $inputpass = $_POST["password"];

    if($inputpass == $dbpass) {
        $_SESSION['loggedin'] = "yes";
        ?>
        <script>
            var session = '<?=$_SESSION['loggedin']?>';
            console.log(session);
            window.location = "http://localhost/minicrud/admin.php";
            
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("Inloggegevens onjuist.");
        window.location = "http://localhost/minicrud/admin.php";

        </script>
        <?php
    }
}
?>



