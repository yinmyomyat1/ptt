<?php
    require_once("user.php");
    $result = User::delete($_GET['id']);
    if($result){
        header("Location: userlist.php");
    }
?>
