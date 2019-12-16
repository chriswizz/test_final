<html lang='en'>
<head>
	<meta name="Landing_Page" content="Codefactory">
	<meta charset='utf-8'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Own CSS -->
	<link rel='stylesheet' type='text/css' href='landing_page.css'>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- JSON -->
	<script type="text/javascript" src ="list_of_new_products.json"></script>
	<title>Landing Page</title>
</head>
<body>
	
	<div id="start_text" class="container">
		<div class="row">
			<div class="col-10 offset-1">
				<p class="signal_sentence">CODEFACTORY</p>
				<p class="signal_sentence">WE CHANGE YOUR LIFE NOW!</p>
			</div>
		<div class="col-10 offset-1">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  	</ol>
				<div class="carousel-inner">
			    	<div class="carousel-item active">
			      		<img class="d-block w-100" src="./img/carousel_1.jpg" alt="First slide">
			      		<div class="carousel-caption d-md-block">
			    			<h5>INCREASE YOUR SALARY NOW!</h5>
			    			<p class="text_carousel">Our graduates from Full-Stack-Course start with an average salary of 40k per year.</p>
			  			</div>
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="./img/carousel_2.jpg">
			    		<div class="carousel-caption d-md-block">
			    			<h5>DIGITALIZATION!</h5>
			    			<p class="text_carousel">Be competative in a digitalized world!</p>
			    		</div>
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="./img/carousel_3.jpg" alt="Third slide">
			     		<div class="carousel-caption d-md-block">
			    			<h5>WORK LIFE BALANCE!</h5>
			    			<p class="text_carousel">Work in an Job-Environment where Work-Life Balance is standard.</p>
			    		</div>
			    	</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
		</div>
	</div>

	<!-- Own JS -->
	<script type="text/javascript" src ="empty_file.js"></script>
</body>
</html>