<?php
session_start();
require_once('config.php');
    
    $username = $_POST['name'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM users WHERE name = ? AND password = ? AND role = ? LIMIT 1";
    $stmtselect = $db->prepare($sql);
    $result = $stmtselect->execute([$username, $password, $role]);

    if($result){
        $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
        if($stmtselect -> rowCount() > 0){
            $_SESSION['signin'] = $user;
            echo '1';
            // header('Location: ../index.php');
        }else{
            echo 'There no user for that combo';
        }
        
    }else{
        echo 'There were errors while connecting to the database';
    }
?>