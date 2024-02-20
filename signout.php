<?php
session_start();
session_destroy();

?>
<script>
    alert("You have logged out!");
    window.location.href="index.php";
</script>
<?php


?>