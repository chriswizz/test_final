<html lang='en'>
<head>
	<meta name="log_in" content="Codefactory">
	<meta charset='utf-8'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Own CSS -->
	<link rel='stylesheet' type='text/css' href='log_in.css'>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Log In</title>
</head>
<body>

<div class="wrapper fadeInDown">
	<div id="formContent">
    <!-- Tabs Titles -->

    	<!-- Icon -->
    	<div class="fadeIn first">
      		<img src="https://secure.meetupstatic.com/photos/event/c/2/7/b/600_481729787.jpeg" id="icon" alt="Please Log In" />
    	</div>        
    	<!-- Login Form -->
    	<form>
      		<input  type="text" id="login" name="email"  class="fadeIn second" placeholder= "Your Email" value=""  maxlength="40">
      		<br>
      		<span class="text-danger">E-Mail Error</span>
     		<input type="password" id="password" name="pass" class="fadeIn third" placeholder ="Your Password" maxlength="15">
      		<br>
      		<span  class="text-danger">Password Error</span>
      		<input type="submit" class="fadeIn fourth" name="btn-login" value="Sign In">
    	</form>

		<!-- Create User -->
		<div id="formFooter">
  			<a  href="register.php" class="underlineHover">Sign Up Here...</a>
		</div>
	</div>
</div>

</body>
</html>