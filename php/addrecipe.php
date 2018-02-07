<html>
	<head>
		<title>Add A New Recipe</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/styles.css" > 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id = "myPage">
	
	<!--NavBar-->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="recipelist.php"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="categories.php">Categories</a></li>
			<li><a href="updaterecipe.php">Edit Recipe</a></li>
			<li><a href="login.php">Sign In</a></li>
			</ul>
		</div>
	</div>
</nav>
	
	<!-- Header -->
	<div class="jumbotron text-center">
		<h1>Add A New Recipe</h1> 
	</div>
	
	
	<div id="pricing" class="container-fluid">
	  <div class="row">
		<div class="col-sm-4 col-xs-12">
		  <div class="panel panel-image text-center">
			<div class="panel-image">
				<img height = '350' width ='350' src='../img/newrecipe.jpg'></img>
				
			</div>
		  </div>      
		</div>     
		<div class="col-sm-8 col-xs-12">
		  <div class="panel panel-default text-center">
		  
			<!--<div class="panel-heading">
				<input class="form-control" id="newRecipeTitle" placeholder="Recipe Name" type="text" required>
			</div>-->
			
			<div class="panel-image">
				<p><input class="form-control" id="newRecipeTitle" placeholder="What is the name of the recipe?" type="text" required></p>	
			  <p><input class="form-control" id="newRecipeCategory" placeholder="What category does this recipe belong in?" type="text" required></p>
			  <p><input class="form-control" id="newRecipeCalories" placeholder="Estimated Calories" type="text" required></p>
			  <p><input class="form-control" id="newRecipeIngredients" placeholder="Enter Ingredients" type="text" required></p>
			  <p><input class="form-control" id="newRecipeDescription" placeholder="Recipe Description" type="text" required></p>
				<p><input class="form-control" id="newRecipeDescription" placeholder="Recipe Added By" type="text" required></p>
			</div>
		  </div>      
		</div>           
	  </div>
	  <div class="row" align="right">
		<a href= "recipelist.php"><button type="button" class="btn btn-secondary">Submit</button></a>
	  </div>
	</div>
	
	<footer class="container-fluid text-center">
		<p>Property Of Student Eats. All rights reserved</p>
	</footer>
	
	</body>	
</html>
