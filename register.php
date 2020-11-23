<!DOCTYPE html>
<html lang="en">

<head>
  <title>BloodBud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                <li class="active"><a href="register.html">Registration</a></li>
              </ul>
            </nav>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Register here to save a life :)</h2>
          </div>
          <div class="col-md-12">
    
            <form action="addregister.php" method="POST">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fname" name="fname">
                  </div>
				  <div class="col-md-6">
                    <label for="lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lname" name="lname">
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-4">
                    <label for="dob" class="text-black">DOB <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="">
                  </div>
				  <div class="col-md-4">
                    <label for="age" class="text-black">Age <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="">
                  </div>
				  <div class="col-md-4">
                    <label for="occupation" class="text-black">Occupation <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="">
                  </div>
				</div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                  </div>
				  <div class="col-md-6">
                    <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="state" class="text-black">State <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="state" name="state">
                  </div>
				  <div class="col-md-6">
                    <label for="zip" class="text-black">Zip Code <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="zip" name="zip">
                  </div>
                </div>
				<div class="form-group row">
				  <div class="col-md-6">
					  <label for="prev_donate" class="text-black">Have you ever donated blood before?<span class="text-danger">*</span></label>
						<select id="prev_donate" name="prev_donate">
						  <option value="Yes">Yes</option>
						  <option value="No">No</option>
						</select>
				  </div>
				</div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="state" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="pass" name="pass">
                  </div>
				  <div class="col-md-6">
                    <label for="zip" class="text-black">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="cpass" name="cpass">
                  </div>
                </div>
				
				
				<p style="color:red; font-size:25px;">Thank you for enrolling to donate blood<p>
					<p style="color:black;">Blood donations are essential in providing life-saving treatments for the community. 
					The greatest need for blood typically comes from patients with cancer or leukaemia, accident 
					victims and some mothers during pregnancy and childbirth.<br>
					The questions on page 2 are a quick checklist to help determine if you are able to give blood.*<br>
					<span style="font-weight:900">*Further eligibility criteria apply, and you will be required to 
					complete a comprehensive questionnaire before your eligibility to donate is determined.</span></p>					
					<p style="color:red; font-size:25px;">On the day of donation</p>
						<p style="color:black;"><span style="font-weight:900">Be prepared</span> by having plenty of liquid in the 24 hours before donation especially in warm weather.<br>
							<span style="font-weight:900">Eat up.</span> Make sure that you eat something in the 3 hours before donating.<br>
							<span style="font-weight:900">Drink up.</span> Have 3 good-sized glasses of water or juice in the 3 hours prior to visiting the donor centre.<br>
							<span style="font-weight:900">Bring ID.</span> Please bring at least one form of photo identification.</p>
				
				                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register">
                  </div>
                </div>
              </div>
            </form>
          </div>          
        </div>
		<br>
		
      </div>
    </div>



    <div class="site-section bg-warning">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Why should you donate?</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">1.</span>
              <p class="mb-0">Blood required every 2 seconds</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">2.</span>
              <p class="mb-0">3 blood banks per 10 lakh of population</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">3.</span>
              <p class="mb-0">Immediate transfusion is a big problem</p>
            </div>
          </div>
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