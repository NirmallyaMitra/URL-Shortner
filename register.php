<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	    <!-- CSS Stylesheets -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
	    <link rel="stylesheet" href="CSS/Register.css" />

	    <!-- Google Fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com" />
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@400;800&family=Padauk&display=swap" rel="stylesheet"/>

	    <!-- Font Awesome -->
	    <link
	      rel="stylesheet"
	      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
	      crossorigin="anonymous"
	    />
		<title>URL-Shortner</title>
	</head>
	<body>
		<!-- main box -->
		<section id="main-content">
			<div class="container">
				<div class="row">
					<div class="img-body col-lg-6">
	      		<!-- image body -->
	      		<img src="images/man.jpg" alt="" class="man" />
	    		</div>
	        <div class="img-body col-lg-1"></div>
	    		<!-- login box -->
	    		<div class="col-lg-4">
	      		<div class="login-div">
	        			<h1 style="font-weight: 600; line-height: 1.4em">Get Started.</h1>
	        			<div class="login">
	         				Alread have an account? <a href="index.php">Login</a>
	        			</div>
	        			<div class="fields">
	           			<form method="post" action="User.php">
			  						<div class="name">
											<input type="name" class="user-input" placeholder="Name" name="name" required />
											<i class="fad fa-user"></i>
			  						</div>
			  
			  						<div class="phone">
											<input type="phone" class="user-input" placeholder="Mobile Number" name = "phone" required />
											<i class="far fa-phone-alt"></i>
			  						</div>
			 
										<div class="mail">    
			  							<input type="mail" class="user-input" placeholder="Email" name="mail" required />
			  							<i class="fad fa-envelope"></i>
										</div>

										<div class="password">
			  							<input type="" class="pass-input" placeholder="Password" name="pwd" required />
			  							<i class="fad fa-lock"></i>
										</div>
										<input type="submit" value="Sign In" class="BUTTON">
									</form>
	      				</div>
	    			</div>
	  			</div>
	      </div>
	    </div>
	  </section>
		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
	</body>
</html>