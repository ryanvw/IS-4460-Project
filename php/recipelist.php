<html>

<head>
	<title>Student Eats</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/styles.css" > 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

<body id ="Student Eats">

	<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="recipelist.php"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="categories.php">Categories</a></li>
			<li><a href="addrecipe.php">Add New Recipe</a></li>
			<li><a href="login.php">Sign In</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="jumbotron text-center">
		<h1>Student Eats</h1> 
	</div>
	
	
<div id="Latest Recipes" class="container-fluid text-center background-color: transparent">
    
  <h2>Latest Recipes</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <a href="recipedetails.php"><img src='../img/slideone.jpg' alt="image1"></a>
        <h4>Garlic Roasted Chicken</h4>
      </div>
      <div class="item">
       <a href="recipedetails.php"><img src='../img/slidetwo.jpg' alt="image2"></a>
       <h4>Grilled Tacos</h4>
      </div>
      <div class="item">
       <a href="recipedetails.php"><img src='../img/slidethree.jpg' alt="image3"></a>
       <h4>Thin Crust Pizza</h4>
      </div>
	  <div class="item">
       <a href="recipedetails.php"><img src='../img/slidefour.jpg' alt="image4"></a>
       <h4>Homemade Mac and Cheese</h4>
      </div>
    </div>
  </div>
	
	<!--Controls for slides -->
	
	 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<footer class="container-fluid text-center">
		<p>Property Of Student Eats. All rights reserved</p>
	</footer>
	
	</body>	
</html>

	
