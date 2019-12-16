<html lang='en'>
<head>
	<meta name="Registration Form" content="Codefactory">
	<meta charset='utf-8'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Own CSS -->
	<link rel='stylesheet' type='text/css' href='registration_form.css'>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Registration Form</title>
</head>
<body>

<div class="container py-5">
	<div class="row">
    	<div class="col-md-12">
        	<div class="row">
            	<div class="col-md-6 mx-auto">
                	<div class="card border-secondary">
                    	<div class="background_settings card-header">
                    		<img src="https://secure.meetupstatic.com/photos/event/c/2/7/b/600_481729787.jpeg" id="icon" alt="Please Log In"/>
                        	<h3 class="mb-0 my-2">Please sign up for Codefactory</h3>
                    	</div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type ="text"  name="name"  class ="form-control input-sm"  placeholder ="Enter Name"  maxlength ="50"   value = "">
                               	<br>
                               	<span   class = "text-danger" ></span>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3">Email</label>
                                <input   type = "email"   name = "email"   class = "form-control input-sm"   placeholder = "Enter Your Email"   maxlength = "40"   value ="">
                              	<br>
                              	<span   class = "text-danger" ></span>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3">Password</label>
                                <input   type = "password"   name = "pass"   class = "form-control input-sm"   placeholder = "Enter Password"   maxlength = "15"  />
                                <br>
                                <span   class = "text-danger" ></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name ="btn-signup" class="color_button btn-lg float-right">Register</button>
                            <a href = "index.php" >Sign in Here...</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>

</body>
</html>