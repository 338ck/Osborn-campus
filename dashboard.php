<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skyline Campus - Dashboard</title>
    <!--bootstrap 5-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <!--Font awesome CDN link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--custom css-->
<link rel="stylesheet" type="text/css" href="../css/style.css">
    
</head>
<body>
<div class="container-fluid ">
		<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img class="logo "src="../img/logo.png" width="100px"></a>
		<p class="text-light">WELLCOME ADMIN</p>
		</div>
	</nav><!--navbar end-->
	<!--heading Area-->
	<div class="bg-light text-center">
		<h2> Admin Area</h2>
		</div><!--heading Area end-->
<!--*******************************************************-->
<!--option Area-->
<div class="row p-2">
	<div class="col-12 bg-dark d-flex align-items-center">
		<!--avatar image start-->
		<div>
			<a class="navbar-brand" href="#"></a>
		</div><!--avatar image end-->
		
		<!--option button area-->
		<div class="button text-center p-4">
	<button class=" btn btn-outline-primary"><a href="register.php"class="nav-link bg-light text-black "><b> Register Student</b></a></button>
	
	<button class=" btn btn-outline-success"><a href="search.php"class="nav-link bg-light text-black"><b>Search Student</a></button>
	
	<button class=" btn btn-outline-success"><a href="update.php"class="nav-link bg-light text-black "><b>Update Student</b></a></button>
	
	<button class=" btn btn-outline-success"><a href="delete.php"class="nav-link bg-light text-black "><b>Delete Student</b></a></button>
	
	<button class=" btn btn-outline-success"><a href="index.php?insert_brand"class="nav-link bg-light text-black "><b>Live lecture</b></a></button>
	
	<button class=" btn btn-outline-success"><a href=""class="nav-link bg-light text-black "><b>free Lesson</b></a></button>
	
	<button class=" btn btn-outline-success"><a href=""class="nav-link bg-light text-black "><b>Result</b></a></button>
	
	<button class=" btn btn-outline-success"><a href=""class="nav-link bg-light text-black "><b>Assignments</b></a></button>
	
	<button class=" btn btn-outline-success"><a href="index.php"class="nav-link bg-light text-black "><b>Logout</b></a></button>
			
		</div>


	</div><!--colums end-->
	
</div><!--row end-->

<!--content area/insert_category.php is display-->
<div class="container">


</div>
		
</div><!--main container-fluid end-->
			












<!--<div class="dashboard">
        <h2>Skyline Campus Dashboard</h2>
        <a href="register.php">➕ Register Student</a>
        <a href="search.php">🔍 Search Student</a>
        <a href="update.php">📝 Update Student</a>
        <a href="delete.php">❌ Delete Student</a>
        <a href="logout.php" class="logout">🔓 Logout</a>
    </div>-->


    
</body>
</html>

   <?php
include("footer.php");
?>     