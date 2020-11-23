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
            <p style="color:red; font-size:25px;">Enrol to donate blood</p>
			<p style="color:black;">Please read the questions carefully and respond by selecting the relevant box.</p>
          </div>
          <div class="col-md-12">
            <form action="addenrol.php" method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12>
					 <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder=""> 
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-md-6">
                     <p><span style="color:red;">1.</span> Are you aged between 16-70 years?</p>
					  <input type="radio" id="q1a" name="q1" value="Yes">
					  <label for="male">Yes.</label><br>
					  <input type="radio" id="q1b" name="q1" value="No">
					  <label for="female">No. You may not be able to give blood. Please contact us.</label><br>
                  </div>
				  <div class="col-md-6">
                    <p><span style="color:red;">4.</span> At this time, are you feeling fit and healthy?</p>
					  <input type="radio" id="q4a" name="q4" value="Yes">
					  <label for="male">Yes.</label><br>
					  <input type="radio" id="q4b" name="q4" value="No">
					  <label for="female">No. You may not be able to give blood. Please contact us.</label><br>
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-md-6">
                     <p><span style="color:red;">2.</span> Are you aged 16-17 years? </p>
					  <input type="radio" id="q2a" name="q2" value="Yes">
					  <label for="male">Yes. Parental Consent Form required.</label><br>
					  <input type="radio" id="q2b" name="q2" value="No">
					  <label for="female">No.</label><br>
                  </div>
				  <div class="col-md-6">
                    <p><span style="color:red;">5.</span> In the last 12 months, have you undergone any surgical procedures?</p>
					  <input type="radio" id="q5a" name="q5" value="Yes">
					  <label for="male">Yes. You may not be able to give blood. Please contact us.</label><br>
					  <input type="radio" id="q5b" name="q5" value="No">
					  <label for="female">No.</label><br>
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-md-6">
                     <p><span style="color:red;">3.</span> Do you weigh at least 50 kg? </p>
					  <input type="radio" id="q3a" name="q3" value="Yes">
					  <label for="male">Yes.</label><br>
					  <input type="radio" id="q3b" name="q3" value="No">
					  <label for="female">No. You may not be able to give blood. Please contact us.</label><br>
                  </div>
				  <div class="col-md-6">
                    <p><span style="color:red;">6.</span> In upcoming days do you intend to
					participate in any activity which would place you or others at risk of injury if you were to become unwell
					after donating, such as driving public transport, operating heavy machinery, underwater diving, 
					piloting a plane or other activities?</p>
					  <input type="radio" id="q6a" name="q6" value="Yes">
					  <label for="male">Yes. You may not be able to give blood. Please contact us.</label><br>
					  <input type="radio" id="q6b" name="q6" value="No">
					  <label for="female">No.</label><br>
                  </div>
                </div>
				<p>*The personal information collected on this form allows us to register you as a potential blood donor.</p>
			  </div>				                
              <div class="form-group row">
                <div class="col-lg-6">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit Form">
                </div>
				<div class="col-lg-6">
                  <input type="submit" onclick="window.print()" class="btn btn-primary btn-lg btn-block" value="Print Form">
                </div>
              </div>
 
            </form>
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