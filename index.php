<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to JobBillboard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor2/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor2/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body class="bg-light text-dark">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-xs navbar-expand-sm navbar-expand-md bg-light static-top">
    <div class="col-9">
      <a class="navbar-brand" href="index.php" style="padding: 0">
                <img src ="images/logojb (2).png" href="index.php" width ="160px" height="45px" style="padding: 0">
            </a>
    </div>
    <div class="col-3">
      <ul class="navbar-nav">
        <li class="nav-item" style="margin-right: 15px">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
        </li>
        <li class="nav-item" style="margin-right: 15px">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalRegist">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="btn btn-primary" href="" data-toggle="modal" data-target="#modalLogin">Post a Job</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Modal Login -->
  <div class="modal fade" id="modalLogin">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="padding: 20px 0px">
        <div class="modal-header">
          <h4 class="modal-title">Log in to Continue</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="controller/login.php">
            <div class="form-group">
              <input class="form-control" type="text" name="user" placeholder="Username" required></input>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="pass" placeholder="Password" required></input>
            </div>
        </div>
        <div class="modal-footer">
              <button class="btn btn-primary" type="submit" name="submit" value="submit" style="width: 100%">Login</button>
          </form>
        </div>
        <div align="center" >
           <label>Dont't have an account? <a href="" data-dismiss="modal" data-toggle="modal" data-target="#modalRegist"><strong>Sign Up</strong></a></label>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Daftar -->
  <div class="modal fade" id="modalRegist">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="padding: 20px 0px">
        <div class="modal-header">
          <h4 class="modal-title">Create Your Account</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="controller/register.php">
            <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="Email" required></input>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="user" placeholder="Username" required></input>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="pass" placeholder="Password" required></input>
            </div>
            <div class="row">
              <div class="form-group col-md-6" align="right">
                <input class="form-radio-input" type="radio" name="status" value="student">Student</input>
              </div>
              <div class="form-group col-md-6">
                <input class="form-radio-input" type="radio" name="status" value="lecturer">Lecturer</input>
              </div>
            </div>
        </div>
        <div class="modal-footer">
              <button class="btn btn-primary" type="submit" name="submit" value="submit" style="width: 100%">Submit</button>
          </form>
        </div>
        <div align="center">
              <label>Have an account? <a href="" data-dismiss="modal" data-toggle="modal" data-target="#modalLogin"><strong>Log in</strong></a></label>
            </div>
      </div>
    </div>
  </div>


  <!-- Masthead -->
  <header class="masthead text-black text-center" style="background-image: url('images/header.png'); filter: brightness(98%);">
    <div class="carousel-title">
      <h1><span class="total-count">1000++ Jobs di Telkom University</span></h1>
      <h5>
        <span class="quality-job">Job Berkualitas</span><span class="bullet">&emsp;•&emsp;</span>
        <span class="quality-emp">Terpercaya</span><span class="bullet">&emsp;•&emsp;</span>
        <span class="quality-trust">Menambah TAK :)</span>
      </h5>
      <br>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalLogin">GET STARTED</button>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Post a Job (free)</h3>
            <p class="lead mb-0">Tell us about your project!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Payment Simplified</h3>
            <p class="lead mb-0">Pay hourly or fixed-price and receive invoices through JobBillboard!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>

  <!-- Footer -->
  <footer class="text-dark" style="background-color: #c4dfe6">
		<div class="container-fluid text-center text-md-left">
			<div class="row bg-light" style="height: 250px">
				<div class="col-sm-4 col-md-4 col-xs-4">
					<div class="container">
						<h5 class="my-4 text-dark">JobBillboard</h5>
						<h5 class="text-primary">About Us</h5>
						<p class="text-dark">JobBillboard is a Job Listing website and application that makes it easy for users to search for jobs or projects around Telkom University</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-4">
					<div class="container py-5 my-4">
						<h5 class="text-primary">Contact Us</h5>
						<p class="text-dark"><i class="fa fa-phone mr-md-3"></i>+62 22-1234567</p>
						<p class="text-dark"><i class="fa fa-envelope mr-md-3"></i>kelompok15@JobBillboard.com</a></p>
						<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook fa-2x text-dark mr-md-5"></i></a>
            <a href="https://aboutme.google.com/u/0/?referer=gplus" target="_blank"><i class="fab fa-google-plus fa-2x text-dark mr-md-5"></i></a>
            <a href="https://twitter.com/login" target="_blank"><i class="fab fa-twitter fa-2x text-dark mr-md-5"></i></a>
            <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-2x text-dark mr-md-5"></i></a>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-4">
					<div class="container py-5 my-4">
						<h5 class="text-primary">Address</h5>
						<p class="text-dark"> <i class="fa fa-map-marker mr-md-3"></i>Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura Bandung, Jawa Barat - 40257</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright text-center py-3">&copy;JobBillboard. All Rights Reserved</div>
	</footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor2/jquery/jquery.min.js"></script>
  <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>