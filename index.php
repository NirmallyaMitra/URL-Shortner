<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS Stylesheet-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
	<link rel="stylesheet" href="CSS/Login.css" />

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@400;800&family=Padauk&display=swap" rel="stylesheet"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
              			<h1 style="font-weight: 600; line-height: 1.4em">LOGIN</h1>

              			<!-- uses solid style -->
              			<div class="register">
                			Don't have an account? <a href="register.html">register now</a>
              			</div>
              			<div class="fields">
              				<form method="POST" action="PHP/login.php">
	                			<div class="mail">
	                  				<input type="mail" class="user-input" placeholder="Email" />
	                  				<i class="fad fa-envelope"></i>
	                			</div>

	                			<div class="password">
	                  				<input type="" class="pass-input" placeholder="Password" />
	                  				<i class="fad fa-lock"></i>
	                			</div>
	                			<input type="submit" value="Sign In"
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