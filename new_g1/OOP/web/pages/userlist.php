<?php
    require_once("user.php");
    $users = User::getAll();
    $id = '';
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EPDA</title>
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- bootstrap -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



	  <!--jquery ui css1-->
        <link href="../assets/libs/jquery-ui-1.13.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />

       
	 <!-- google font api -->
	 <style>
	@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
	</style>


	<!-- title logo -->
	 <link rel="icon" type="image/png" href="../image/titleLogo.jpg">

	 <!-- custom css -->
	 <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<div class="container">
		

		 <!-- Start Header Section -->
		<header>
				<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white fixed-top">
					  <div class="container-fluid ">
					  		<a href="index.php" class="navbar-brand ">
					  			<img src="../image/logo.jpg" class="imgnav d-lg-block ">
					  		</a>
						  
							        <button type="button" class="navbar-toggler navbuttons" data-bs-target="#navbarNav" data-bs-toggle="collapse">
									    <div class="bg-secondary lines1"></div>
									    <div class="bg-secondary lines2"></div>
									    <div class="bg-secondary lines3"></div>
									</button> 
 
								    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
								      <ul class="navbar-nav">
								        <li class="nav-item  ">
								          <a class="nav-link " aria-current="page" href="../index.php" >Home</a>
								        </li>
								       <li class="nav-item  dropdown">
								          <a class="nav-link dropdown-toggle " style="color:#002059;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								            Courses
								          </a>
								          <ul class="dropdown-menu mt-1">
								            <li><a class="dropdown-item " href="#">IP</a></li>
								            <li><a class="dropdown-item " href="#">FE</a></li>
								            <li><a class="dropdown-item " href="#">PHP</a></li>
								          </ul>
								        </li>
																		
							
								        <li class="nav-item  ">
								          <a class="nav-link active" href="userlist.php">User List</a>
								        </li>
								         <li class="nav-item aboutus">
								          <a class="nav-link " href="#">About Us</a>
								        </li>
								         <li class="nav-item ">
								          <a class="nav-link " href="#">Contact Us</a>
								        </li>
								        <li class="nav-item d-flex circular-picture">
								          

								           <?php if (isset($_GET)) { 
								           		 foreach($users as $u){
								           		 	$id=$u->id;
								           		 }
								           		

								            ?>

								      

										<a href="profile.php?id=<?= $id ?>" class="circle-container"><img src="../image/fe.jpg"></a>



								     	 <?php }else{ ?>
								      			<i class="fa-solid fa-circle-user mt-4"></i><a class="nav-link active" href="login.php">
								      			 Login </a>
								      	<?php } ?>


								     
								        </li>
								      </ul>
								    </div>
 
		  			</div>
				</nav>

		</header>


				<div class="afterHover ">
					<table cellpadding="10px" cellspacing="50px" class="mb-5 afertable" >
						<tr>
							<td class="text-muted ">CEO</td>
							<td class="text-muted ">PRINCIPAL </td>
							<td class="text-muted ">TOTAL BATCH</td>
							<td class="text-muted ">STAFF</td>
						</tr>

						<tr>
							<td class="text-secondary t-transform">U Kyaw Min Htun</td>
							<td class="text-secondary t-transform">Daw Tin Myo Myo Win</td>
							<td class="text-secondary t-transform">Batch 1</td>
							<td class="text-secondary t-transform">Ko Chan Myae</td>
						</tr>

						<tr>
							<td class="text-secondary t-transform"></td>
							<td class="text-secondary t-transform"></td>
							<td class="text-secondary t-transform">Batch 2</td>
							<td class="text-secondary t-transform">Ko Aung Chang Thar</td>
						</tr>

						<tr>
							<td class="text-secondary t-transform"></td>
							<td class="text-secondary t-transform"></td>
							<td class="text-secondary t-transform">Foundation</td>
							<td class="text-secondary t-transform">Ma May Thu </td>
						</tr>
					</table>
				</div>
		 <!--End Nav Section-->

		 <!-- start userlist form -->

		<!-- <div class="userlist"> -->
    <div class=" userlist bg-white">
        <div class=" dashL ">
          
                        <h3 class="mt-5  mb-5"><i class="fa-solid fa-gauge-high ml-3"></i> Dashboard</h3>
                        <ul class="uDash text-center" style="list-style-type: none;">
                            <li class="pt-3 pb-3"><i class="fa-brands fa-uikit"></i> UI elements</li>
                            <li class="pt-3 pb-3"><i class="fa-solid fa-chart-pie"></i> Charts</li>
                            <li class="pt-3 pb-3"><i class="fa-solid fa-table-columns"></i> Tables</li>
                            <li class="pt-3 pb-3"><i class="fa-solid fa-square-caret-down"></i> Multi-level Dropdown</li>
                            <li class="pt-3 pb-3"><i class="fa-regular fa-file-lines"></i> Sample pages</li>
                            
                        </ul>
                   <a href="createstaff.php" class="btn btn-outline-light ml-3">Create Staff</a>
   
        </div>
        
        	<div class=" mt-3 dashR ">
				
            
           <div class="m-3 text-secondary">	<span>Home/User List</span> </div>
           <hr>

		   <h2 class="text-center mt-5">User Lists</h2>
		   
           <?php 

			// var_dump($_GET['changelogin']);
			// var_dump($_REQUEST['rolefromsignup']);
			$rolefromsignup = $_REQUEST['rolefromsignup']??'';
			$role = $_REQUEST['role']??'';

			if( $rolefromsignup || (($role=='teacher')||$role=='student')){
				$TSusers = User::getTeacherStudent($users);
			
				?>

<div class="d-flex justify-content-center align-item-center">
	           <table border="1" cellspacing="2" cellpadding="2" class="text-center m-5 usertb">
	          		<tr>
	          			<th>ID</th>
	          			<th>Name</th>
	          			<th>Email</th>
	          			<th>Password</th>
	          			<th>Gender</th>
	          			<th>Role</th>
	          			
	          		</tr>

<?php foreach($TSusers as $u): ?>
    <tr>  
        <td><?=$u->id?></td>
        <td><?=$u->name?></td>
        <td><?=$u->email?></td>
		<td><?=$u->password?></td>
		<td><?=$u->gender?></td>
		<td>
			<?php
				if($u->role=='teacher' || $u->role== 'student'){?>
				<?=$u->role?>

				<?php } ?>
		
		
	
	
		</td>
       
    </tr>
<?php endforeach; ?>

</table>

           </div>

				
			<?php }else if( $role=='staff'){
				$TSusers = User::getTeacherStudentStaff($users);
			
				?>

<div class="d-flex justify-content-center align-item-center">
	           <table border="1" cellspacing="2" cellpadding="2" class="text-center m-5 usertb">
	          		<tr>
	          			<th>ID</th>
	          			<th>Name</th>
	          			<th>Email</th>
	          			<th>Password</th>
	          			<th>Gender</th>
	          			<th>Role</th>
						<th>Action</th>
	          			
	          		</tr>

<?php foreach($TSusers as $u): ?>
    <tr>  
        <td><?=$u->id?></td>
        <td><?=$u->name?></td>
        <td><?=$u->email?></td>
		<td><?=$u->password?></td>
		<td><?=$u->gender?></td>
		<td>
			<?php
				if($u->role=='teacher' || $u->role== 'student'){?>
				<?=$u->role?>

				<?php } ?>
		</td>
		<td><a href="Edit.php?id=<?=$u->id?>">Update</a></td>
       
    </tr>
<?php endforeach; ?>

</table>

           </div>

				
			<?php }else{?>

<div class="d-flex justify-content-center align-item-center">
	           <table border="1" cellspacing="2" cellpadding="2" class="text-center m-5 usertb">
	          		<tr>
	          			<th>ID</th>
	          			<th>Name</th>
	          			<th>Email</th>
	          			<th>Password</th>
	          			<th>Gender</th>
	          			<th>Role</th>
	          			<th>Action</th>
	          		</tr>

<?php foreach($users as $u): ?>
    <tr>  
        <td><?=$u->id?></td>
        <td><?=$u->name?></td>
        <td><?=$u->email?></td>
		<td><?=$u->password?></td>
		<td><?=$u->gender?></td>
		<td><?=$u->role?></td>
		 <!-- <td><?=$u->getRoleName()?></td> -->
        <td><a href="CRUD.php?id=<?=$u->id?>">Delete</a></td>
        <td><a href="Edit.php?id=<?=$u->id?>">Update</a></td>
    </tr>
<?php endforeach; ?>

</table>

           </div>
				

		<?php	}
 		?>

          

          

        </div>


    </div>
<!-- </div> -->


		 <!-- end userlist form -->


<!-- start footer -->

			 <div id="footer" class="" style="position: absolute; top: 120vh; left: 0;">
           <div class="fd1">
                <div class="dd1">
                    <h4 style="font-size: 25px; letter-spacing: 2px;">EPDA</h4>
                    <span>lorem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</span>

                    <pre><i class="fa-brands fa-twitter"></i>  <i class="fa-brands fa-facebook"></i>  <i class="fa-brands fa-google-plus-g"></i>  <i class="fa-brands fa-linkedin"></i></pre>
                </div>

                <div class="dd2">
                    <h4>USEFUL LINK</h4>
                    <table cellpadding="5px" cellspacing="5px">
                        <tbody><tr>
                            <td>Home</td>
                            <td>Policy</td>
                        </tr>

                        <tr>
                            <td>About us</td>
                            <td>Terms</td>
                        </tr>

                        <tr>
                            <td>Services</td>
                            <td>Help</td>
                        </tr>

                        <tr>
                            <td>Events</td>
                            <td>FAQS</td>
                        </tr>

                        <tr>
                            <td>Features</td>
                            <td>Site Maps</td>
                        </tr>
                    </tbody></table>
                </div>

                <div class="dd3">
                    <h4>RECENT POST</h4>
                    <span>lorem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</span>
                    <br><br>
                    <span>lorem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</span>
                </div>

                <div class="dd4">
                    <h4>CONTACT</h4>
                    <span><i class="fa-solid fa-location-dot"></i>40 Baria Street 133/2, NewYork City,US</span>
                    <br><br>
                    <span><i class="fa-solid fa-phone"></i> (+88) 111 555 666</span><br><br>
                    <span> <i class="fa-solid fa-envelope"></i>infodeercreative@gmail.com</span>
                </div>
           </div>
            
            <hr>
            <div class="ft">Copyright ©2024 GROUP-1 All rights reserved </div>

        </div>
        <!-- end footer -->
			
		
	</div>


 
<!--jquery js1-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


 <!--bootstrap css1 js 1-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




<!--custom jquery js -->
<script src="../js/app.js" type="text/javascript"></script>






</body>
</html>

