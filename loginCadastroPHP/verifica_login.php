<?php
if(!$_SESSION['user_email']){
    header('Location: index.php');
    exit();
}
?>