
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>food</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/line-awesome-font-awesome.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<?php include_once("header.php");?>

		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay2"></div>
			<div class="fh5co-cover user" data-stellar-background-ratio="0.5" style="background-image: url(images/userlogin.jpg);">
				<div class="desc nopadding" id="fh5co-contact">
					<div class="container"><h3></h3></div>
					<div class="clearfix"></div>
					<form action="#">
					<div class="container">
							
							<div class="col-md-6 col-md-offset-3 whitebg animate-box">
								<div class="col-md-12"><h3>Create User</h3></div>
								<div class="">
										<img id="blah" class="img-resize" src="http://placehold.it/180" alt="your image" />
										<div class="row">
											<input type='file' onchange="readURL(this);" class="custom-file-upload"/>
										</div>
										
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>User Name</label>
												<input type="text" class="form-control" placeholder="User name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Password</label>
												<input class="form-control" name="password" placeholder="Password" type="password" value="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Confirm Password</label>
												<input class="form-control" name="password" placeholder="Confirm Password" type="password" value="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" class="form-control" placeholder="Your first name">
											</div>
											
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" class="form-control" placeholder="Your last name">
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label>Gender</label>
												<select class="form-control">
														<option value="" disabled="" selected="">Male</option>
														<option value="1">Female</option>
														<option value="2">Other</option>
													
													</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email Id</label>
												<input type="text" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Country</label>
												<select class="form-control">
														<option value="" disabled="" selected="">India</option>
														<option value="1">USA</option>
														<option value="2">KSA</option>
												</select>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label>State</label>
												<select class="form-control">
														<option value="" disabled="" selected="">Kerala</option>
														<option value="1">Tamilnadu</option>
														<option value="2">Bangalore</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>State</label>
												<select class="form-control">
														<option value="" disabled="" selected="">Kerala</option>
														<option value="1">Tamilnadu</option>
														<option value="2">Karnadaka</option>
												</select>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label>City</label>
												<select class="form-control">
														<option value="" disabled="" selected="">Calicut</option>
														<option value="1">Ernakulam</option>
														<option value="2">Wayanad</option>
												</select>
											</div>
										</div>
										</div>
										
									</div>
								</div>
								
								
							</div>
					</div>
					
					</form>
				</div>
			</div>

		</div>
		<?php include_once("footer.php");?>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script>
		 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>

	</body>
</html>

