<html>
	<head>
		<title>Star Wars: The Last Jedi - Details</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/styles.css" > 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id = "myPage">
	
		<nav class="navbar navbar-default">
			<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="movie-list.php"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="movie-details.php">DETAILS</a></li>
			<li><a href="movie-add.php">ADD MOVIE</a></li>
			<!--<li><a href="movie-update.php">EDIT</a></li>-->
			</ul>
		</div>
	</div>
</nav>

<div class="jumbotron text-center">
		<h1>Update Movie</h1> 
	</div>
	
	<div id="pricing" class="container-fluid">
	  <div class="row">
		<div class="col-sm-4 col-xs-12">
		  <div class="panel panel-default text-center">
			<div class="panel-body">
				<img height = '433' width ='' src='../img/lastjedi.jpg'></img>
			</div>
		  </div>      
		</div>     
		<div class="col-sm-8 col-xs-12">
		  <div class="panel panel-default text-center">
		  
		  <div class="panel-heading">
			<input class="form-control" id="newMovieTitle" value= 'Star Wars: The Last Jedi' type="text" required>
			</div>
			
			<div class="panel-body">
				<p>Cast<input class="form-control" id="newMovieCast" value = "Mark Hamill, Carrie Fisher, Adam Driver, Daisy Ridley, John Boyega" type="text" required></p>
				<p>Runtime<input class="form-control" id="newMovieRunTime" value="2h 32min" type="text" required></p>
				<p>Genre<input class="form-control" id="newMovieGenre" value="Sci-Fi" type="text" required></p>
			    <p>Description<input class="form-control" id="newMovieDescription" value="Rey develops her newly discovered abilities with the guidance of Luke Skywalker, who is unsettled by the strength of her powers. Meanwhile, the Resistance prepares for battle with the First Order." type="text" required></p>
			    <p>Year Released<input class="form-control" id="newMovieYear" value="2017" type="text" required></p>
			    <p>Director<input class="form-control" id="newMovieDirector" value="Rian Johnson" type="text" required></p>
			</div>
		  </div>      
		</div>           
	  </div>
	  <div class="row" align="right">
		<a href= "movie-list.php"><button type="button" class="btn btn-secondary">Submit Changes</button><button type="button" class="btn btn-secondary">Delete Movie</button></a>
	  </div>
	</div>
	
	<footer class="container-fluid text-center">
		<p>Property of UA Cinemas. All rights reserved</p>
	</footer>
	
	</body>	
</html>
