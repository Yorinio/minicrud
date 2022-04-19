<script>
<?php
session_start();
$_SESSION['id'] = session_id();

?>
var session = '<?=$_SESSION['id']?>';
console.log(session);
var session = '<?=$_SESSION['loggedin']?>';
console.log(session);
    
    
</script>




