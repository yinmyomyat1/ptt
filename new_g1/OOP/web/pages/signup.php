<?php

    require_once("user.php");
    $roleA =array();
    if(isset($_GET['email']) && isset($_GET['password'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];
    var_dump($email, $password);
    $user = User::checkBymailandPsw($email,$password);
    var_dump($user);

//    $roleA=$user->role;
   var_dump($user['role']);

   $roleA = explode(',',$roleA['role']);
   $roleA=array_map('strtolower', $roleA);

   
//    echo'<hr> data from get';
//     $getRole =$_GET['role'];
  
//     print_r( $getRole);
//     print_r( $getRole[0]);
//     echo"<hr>";

//     echo'<hr> data from table';
   
  
//     print_r( $roleA);
//     print_r( $roleA[0]);
//     echo"<hr>";


    $flag = false;
    $adminstaffrole = '';
    var_dump($getRole[0]===$roleA[0]);
  
    for($i= 0;$i<count($getRole);$i++){
        echo "this is in the for loop";
        
        if($getRole[$i]==$roleA[$i]){
            $flag = true;
            echo"true";

           switch($getRole[$i]){
            case "admin": $adminstaffrole = "admin";
            break;
            case "staff": $adminstaffrole = "staff";
            break;

            case "teacher": $adminstaffrole = "teacher";
            break;

            case "student": $adminstaffrole = "student";
            break;
           }
        }
    }

   $check = false;
    if($flag){
        $check = true;
        //  header("Location:../index.php?check=".$check."&role=".$adminstaffrole);
        // echo"your password is correct";
        header("Location:userlist.php?check=".$check."&role=".$adminstaffrole);
        
    }else{
        // echo "<script>alert('Incorrect password');</script>";
        $check = false;
         header("Location:login.php?check=".$check);
       
    }

    }
   

   

?>