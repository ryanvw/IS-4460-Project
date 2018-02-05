<html>
	<head>
		<title>Recipe Details</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/styles.css" > 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id = "myPage">
	
	<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="recipelist.php"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<!--<li><a href="movie-details.php">DETAILS</a></li>-->
			<li><a href="addrecipe.php">Add New Recipe</a></li>
			<li><a href="updaterecipe.php">Edit Recipe</a></li>
			</ul>
		</div>
	</div>
</nav>

	<div class="jumbotron text-center">
		<h1>Recipe Details</h1> 
	</div>
	
	<div id="pricing" class="container-fluid">
	  <div class="row">
		<div class="col-sm-4 col-xs-12">
		  <div class="panel panel-default text-center">
			<div class="panel-body">
				<img height = '350' width ='' src='../img/slideone.jpg'></img>
			</div>
		  </div>      
		</div>     
		<div class="col-sm-8 col-xs-12">
		  <div class="panel panel-default text-center">

			<div class="panel-heading">
			  <h1 id = 'recipeTitle'>Chicken</h1>
			</div>
			<div class="panel-body">
			  <p id = 'recipeTitle'><strong>Category</strong><br>Chicken</p>
			  <p id = 'movieCast'><strong>Calories</strong><br> 550</p>
			  <p id = 'movieRunningTime'><strong>Ingredient</strong><br>2 Cups: Chicken, 2 TBSP garlic, 1tsp: Chives</p>
			  <p><strong>Description:</strong><br>Delicious take on a classic chicken recipe!</p>
			  <p><strong>Submitted By</strong><br> Ryan</p>
			</div>
		  </div>      
		</div>           
	  </div>
	  <div class="row" align="right">
		<a href= "movie-update.php"><button type="button" class="btn btn-secondary">Update Recipe</button></a>
	  </div>
	</div>
	
	
	<footer class="container-fluid text-center">
		<p>Property of Student Eats. All rights reserved</p>
	</footer>
	
	</body>	
</html>
	
