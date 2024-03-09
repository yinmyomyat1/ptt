<?php
    require_once("user.php");

    $result = User::update($_GET);
    if($result){
        header("Location: userlist.php");
    }
?>
