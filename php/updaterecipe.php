<html>
	<head>
		<title>Update Recipe</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/styles.css" > 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id = "myPage">
	
		<nav class="navbar navbar-default">
			<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="recipelist.php"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="recipedetails.php">Recipe Details</a></li>
			<li><a href="addrecipe.php">Add New Recipe</a></li>
			<li><a href="categories.php">Categories</a></li>
			<li><a href="login.php">Sign In</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="jumbotron text-center">
		<h1>Update Recipe</h1> 
	</div>
	
	<div id="pricing" class="container-fluid">
	  <div class="row">
		<div class="col-sm-4 col-xs-12">
		  <div class="panel panel-image text-center">
			<div class="panel-image">
				<img height = '400' width ='' src='../img/slideone.jpg'></img>
			</div>
		  </div>      
		</div>     
		<div class="col-sm-8 col-xs-12">
		  <div class="panel panel-default text-center">
		  
		 <!-- <div class="panel-heading">
			<input class="form-control" id="newRecipeTitle" value= 'Chicken' type="text" required>
			</div>-->
			
			<div class="panel-body">
				<p>Recipe Title<input class="form-control" id="newRecipeTitle" value = "Garlic Roasted Chicken" type="text required"></p>
				<p>Category<input class="form-control" id="newRecipeCategory" value = "Chicken" type="text" required></p>
				<p>Calories<input class="form-control" id="newRecipeCalories" value="550" type="text" required></p>
				<p>Ingredients<input class="form-control" id="newRecipeIngredients" value="2 Cups: Chicken, 2 TBSP: garlic, 1tsp: Chives" type="text" required></p>
			  <p>Description<input class="form-control" id="newRecipeDescription" value="Delicious take on a classic chicken recipe!" type="text" required></p>
			  <p>Uploader<input class="form-control" id="newRecipeUploader" value="Ryan" type="text" required></p>
			</div>
		  </div>      
		</div>           
	  </div>
	  <div class="row" align="right">
		<a href= "recipelist.php"><button type="button" class="btn btn-secondary">Submit Changes</button><button type="button" class="btn btn-secondary">Delete Recipe</button></a>
	  </div>
	</div>
	
	<footer class="container-fluid text-center">
		<p>Property of Student Eats. All rights reserved</p>
	</footer>
	
	</body>	
</html>
