<!DOCTYPE html>
<html lang="en">

<head>
  <title>BloodBud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">BloodBud</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="active"><a href="register.html">Request Blood</a></li>
              </ul>
            </nav>
        </div>
      </div>
    </div>
	
	<!-- Sidebar -->
	<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
	  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
	  <a href="enrol.php" class="w3-bar-item w3-button">Donate Blood</a>
	</div>

	<!-- Page Content -->
    <div style="margin-left:30%;">
		<div class="site-section">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<h2 class="h3 mb-5 text-black">Find blood donors</h2>
			  </div>
			  <div class="col-md-12">
		
				<form action="addrequest.php" method="POST">
		
				  <div class="p-3 p-lg-5 border">
					<div class="form-group row">
					  <div class="col-md-12">
						<label for="fname" class="text-black">Blood Group <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="bloodgroup" name="bloodgroup">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="col-md-12">
						<label for="lname" class="text-black">State <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="state" name="state">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="col-md-12">
						<label for="dob" class="text-black">City <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="city" name="city" placeholder="">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="col-md-12">
						<label for="age" class="text-black">Zip code <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="zip" name="zip" placeholder="">
					  </div>
					<div class="form-group row">
					  <div class="col-lg-12">
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
					  </div>
					</div>
				  </div>
				</form>
			  </div>          
			</div>
			<br>
			
		  </div>
		</div>
	</div>
	
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>This systematic approach of blood donations acts as an effective bridge between the 
			  4receiver of the blood and the sender as they are directly linked to each other via the mobile application.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">492, Sector 44, New Delhi- 121007</li>
                <li class="phone"><a href="tel://23923929210">0129 317 9921</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>