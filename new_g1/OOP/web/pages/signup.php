<?php

    require_once("user.php");
    $roleA =array();
    if(isset($_GET['email']) && isset($_GET['password'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];
    $user = User::checkBymailandPsw($email,$password);

   $roleA['role']=$user->role;

   $roleA = explode(',',$roleA['role']);
   $roleA=array_map('strtolower', $roleA);

   
   echo'<hr> data from get';
    $getRole =$_GET['role'];
  
    print_r( $getRole);
    echo"<hr>";
    $flag = false;

  
    for($i= 0;$i<count($getRole);$i++){
        if($getRole[$i]==$roleA[$i]){
            $flag = true;
            echo"true";
        }
    }

   $check = false;
    if($flag){
        $check = true;
         header("Location:../index.php?check=".$check);
        // echo"your password is correct";
        
    }else{
        // echo "<script>alert('Incorrect password');</script>";
        $check = false;
         header("Location:login.php?check=".$check);
       
    }

    }
   

   

?>