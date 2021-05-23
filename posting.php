<?php 
  include ('config/connect.php');
  session_start();
  if (!isset($_SESSION['user'])) {
		# code...
		echo '
                <script type="text/javascript">
                    alert("Info!, You must login first!");
                    window.location.assign("index.php");
                </script>';
	}
  $user = $_SESSION['user'];
  $status = $_SESSION['status'];
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to JobBillboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Post -->
    <link rel="stylesheet" type="text/css" href="css/post-style.css">

  </head>


  <body class="bg-light">
  <nav class="navbar navbar-expand-sm bg-light sticky-top" style="padding: 8px">
    <div class="col-9">
      <a class="navbar-brand" href="homepage.php" style="padding: 0">
                <img src ="images/logojb (2).png" href="index.php" width ="160px" height="45px" style="padding: 0">
            </a>
    </div>
		<div class="col-3">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
				<a class="btn btn-primary dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown" style="background-color : #007BFF"><?= $user?></a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="controller/redirect_profile.php">Profile</a>
						<a class="dropdown-item" href="controller/logout.php">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="images/project8.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?= $user?></h1>
              <p>Admin JobBillboard</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="admin_dashboard.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="user.php"> <i class="icon-grid"></i>Account Manager</a></li>
            <li><a href="todo.php"> <i class="icon-padnote"></i>To do List </a></li>
            <li class="active"><a href="posting.php"> <i class="icon-check"></i>Create a Post</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Post Monitoring </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">All Post</a></li>
                <li><a href="#">Deleted Post</a></li>
                <li><a href="#">Post Request</a></li>
                <li><a href="#">Draft</a></li>
              </ul>
            </li>
            
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Write a Post</h2>
            </div>
          </header>

          <section class="dashboard-header container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3" style="box-shadow: 0px 0px 10px -6px">
                        <div class="contact-info">
                            <img src="images/ann.png" alt="image"/>
                            <h3>Let's Post your new Job Vacancies Here!</h3>
                        </div>
                    </div>
                    <div class="col-md-9" style="box-shadow: 0px 0px 10px -6px">
                        <div class="contact-form">
                            <form action = create.php method="POST">
                                <div class="form-group">
                                    <br>
                                    <label class="control-label col-sm-2" >Title</label>
                                    <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="judul" placeholder="Enter Title Here" name="title">
                                    </div>
                                </div>
                                                   
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="lname">Deadline</label>
                                    <div class="col-sm-10">          
                                    <input type="date" class="form-control" name="deadline">
                                    </div>
                                </div>
                                                    
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Description</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" id="desc" rows="7" placeholder="Enter Description here" name="description"></textarea>
                                    </div>
                                </div>
                                                    
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Category</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="judul" placeholder="Enter Category Here" name="category">
                                    </div>
                                </div>
                                                    
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Poster</label>
                                    <div class="col-sm-10">
                                    <input type="file" id="BSbtninfo">
                                    </div>
                                </div>
                                                    
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </section>
        </div>
        </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor2/jquery/jquery.min.js"></script>
  <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>