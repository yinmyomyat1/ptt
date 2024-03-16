<?php  
require_once('config.php');
echo'this is insert.php';

		 if(!isset($_POST['signup'])){
		 $name 		= $_POST['name'];
		 $email 	= $_POST['email'];
		 $password 	= $_POST['password'];
		 $gender 	= $_POST['gender'];
		  $role 		= $_POST['role'];
		//  $RoleArr = explode(',', $_POST['role']);

		 echo "this is role";
		 var_dump($role);
 	
		 $sql = "INSERT INTO users (name, email, password, gender, role)
		 VALUES (?,?,?,?,?)";
		 $stmtinsert = $db->prepare($sql);
		 $result = $stmtinsert->execute([$name,$email,$password,$gender,$role]);
		 echo"$result";
		 if($result){
			header("Location: userlist.php?changelogin=true&rolefromsignup=true");
				
		 }else{
			echo "there were errors";
		 }
		 }

		 // function chageLogin(){
		 // 	return 1;
		 // } 

?>
