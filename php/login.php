<html>
	<head>
		<title>Update Recipe</title>
		
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
			<!--<li><a href="movie-details.php">DETAILS</a></li>-->
            <li><a href="categories.php">Categories</a></li>
			<li><a href="addrecipe.php">Add New Recipe</a></li>
            <li><a href="login.php">Sign In</a></li>
			</ul>
		</div>
	</div>
</nav>


        <div class="container login-container"  >
            <div class="login-form-container">
                <h1>Sign Up</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Your email wont be shared with anyone.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-outline-dark" style="margin-top: 10px;" >Submit</button>
                </form>
            </div>    
        </div>
    </body>

    <footer class="container-fluid text-center">
		<p>Property Of Student Eats. All rights reserved</p>
	</footer>

    </html>