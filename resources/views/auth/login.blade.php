<!doctype html>
<html lang="en">
  <head>
  	<title>R.G. de Castro Colleges</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="images/logo.png"/>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">

			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #07</h2>
				</div>
			</div> -->

			
							
					
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md">
							<div class="text w-100">
								
								 <h2 class="rgcc">R.G. de Castro Colleges</h2>
								
  					 <center> <img class="logo" src="images/logo.png"></center>
								<!-- <p>Don't have an account?</p>
								<a href="#" class="btn btn-white btn-outline-white">Sign Up</a> -->
							</div>
			      </div>
		
						<div class="login-wrap p-4 p-lg-5">
						
							<form method="POST" action="{{ route('login') }}">
							@csrf
							
							<x-auth-session-status class="mb-4" :status="session('status')"/>
					<x-auth-validation-errors class="mb-4" :errors="$errors" id="error"/>
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input id="email" name="email" type="text" class="form-control" placeholder="Username" required autofocus>
			      		</div>
						 
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
		            </div>
					<br>
		            <div class="form-group">
						<center>
		            	 <b><button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button></b>
						</center>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

