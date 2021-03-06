<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
  <?php
    include 'PHP/Connection.php';
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $email_search = "select * from user where email='$email'";
      $query = mysqli_query($conn, $email_search);

      $email_count = mysqli_num_rows($query);

      if($email_count){
          $email_pass = mysqli_fetch_assoc($query);
          $p = $email_pass['pwd'];
          if($p == $password){
            $_SESSION['username'] = $email_pass['Name'];
            header("location: PHP/url.php");
          }
          else{
            echo '<script>alert("Password Invalid.")</script>';
          }
      }
      else{
        echo '<script>alert("Email Invalid")</script>';
      }

    }
  ?>
	<!-- main box -->
    <section id="main-content">
    	<div class="container">
    		<div class="row">
          		<div class="img-body col-lg-6">
            	<!-- image body -->
            		<img src="images/man.jpg" alt="man" class="man" />
          		</div>
          		<div class="img-body col-lg-1"></div>

          		<!-- login box -->
          		<div class="col-lg-4">
            		<div class="login-div">
              			<h1 style="font-weight: 600; line-height: 1.4em">LOGIN</h1>

              			<!-- uses solid style -->
              			<div class="register">
                			Don't have an account? <a href="register.php">register now</a>
              			</div>
              			<div class="fields">
                      <form method="post" action='<?php echo htmlentities($_SERVER['PHP_SELF']);?>'>
                			<div class="mail">
                  				<input type="mail" name="email" class="user-input" placeholder="Email" autocomplete="off" required/>
                  				<i class="fad fa-envelope"></i>
                			</div>

                			<div class="password">
                  				<input id="password" type="password" name="password" class="pass-input" placeholder="Password" autocomplete="off" required/>
                  				<i class="fas fa-eye" id="togglePassword"></i>
                			</div>
                			<input type="submit" name="submit" value="Sign In" class="BUTTON">
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

    <script type="text/javascript">
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');
      togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
      });
    </script>
</body>
</html>