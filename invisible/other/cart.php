<?php
if (isset($_POST['logout'])) {
    session_destroy();
?>
    <script>
        location.href = "/minicrud/admin.php"
    </script>
    <?php
} else if (isset($_POST['login'])) {
?>
        <script>
             location.href = "/minicrud/admin.php"

        </script>
        <?php
}
?>
