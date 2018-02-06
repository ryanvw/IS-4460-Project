
<!doctype html>
<html>
    <head>
    <title>Categories</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/styles.css" > 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

<body id ="Categories">

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
		<h1>Categories</h1> 
	</div>

     
        <div class="container categories-container"  >
            <!--<h1 class="home-title" style="letter-spacing: 2px;">Categories</h1>-->
            <div class="container" style="max-width: 100% !important">                
                <div class="row form-row" >
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2 filter-select">
                            <select class="form-control">
                                <option>Chicken</option>
                                <option>Beef</option>
                                <option>Pork</option>
                                <option>Quick and Easy</option>
                                <option>Oriental</option>
                                <option>Other</option>
                               
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-dark mb-2">
                            <span style="letter-spacing: 2px">FILTER</span>
                            <i class="fas fa-filter"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">


            </div>
        </div>
    </body>

</html>