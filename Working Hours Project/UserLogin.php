<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Work Study Hours</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>

<body>
      
	<div class="row">
		
    <div class="tittle col-xs-12 col-sm-12 col-md-12 col-lg-12">
    </div>
    </div>

	   <div class="container col-xs-12 col-sm-8 col-md-6 col-lg-4" id= "LoginArea" >

         <form action="" method="POST">

         
        <br>
        <h2 style="text-align: center;font-family: arial; color: #616161">LOGIN </h2>

  			<div class="form-group">
    			 <label for="Username"  style="color: #424242">Username</label>
    			 <input name="username" class="form-control" aria-describedby="UserHelp" placeholder="Enter Username">
    
  			</div>

  			<div class="form-group">
   			     <label for="InputPassword1"  style="color: #424242">Password</label>
    		     <input type="password" name="password" class="form-control" placeholder="Enter Password">
                 <a rel="facebox" href="index_admin.php"><small style="color: #ffab00">Login as Admin</small></a>
  			</div>

            <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
            ?>
            <div class="form-group">
                 <div class="col text-center">
  			     <button type="submit"  name="login-user" class="btn btn-lg btn-warning  col-xs- 12 col-sm-10 col-md-8 col-lg-6" >Login </button>
			     </div>
			</div>

		 </form>

	   </div>

	<div class="bottom">
	
	</div>
	
    <?php
     include ('FooterLogin.php');
    ?>


	<script src = "./bootstrap/js/jquery.js"></script>
	<script src = "./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>