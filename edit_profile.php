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
  $id = $_SESSION['id'];
  $status = $_SESSION['status'];
  $e = mysqli_query($conn, "SELECT*FROM message ");
  $s = mysqli_query($conn, "SELECT * FROM user  WHERE id = '$id'");
?>

<?php
require ('config/connect.php');
$id = $_SESSION['id'];
$user = $_SESSION['user'];
$email = $_SESSION['email'];



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

  </head>

<body>
<?php
    while ($select = mysqli_fetch_assoc($e)){ ?>
	<nav class="navbar navbar-expand-sm bg-light sticky-top" style="">
		<div class="col-xs-6 col-md-6 col-sm-6">
			<a class="navbar-brand" href="homepage.php">
                <img src ="images/logojb (2).png" class="navbar-brand" href="homepage.php" width ="200px" height="80px">
            </a>
		</div>
		<div class="col-xs-6 col-md-6 col-sm-6">
			<ul class="navbar-nav">
				<li class="nav-item" style="margin-right: 15px; color:blue"><a class="nav-link" href="post_page.php">Write a post</a></li>
				<li class="nav-item" style="margin-right: 15px">
					<form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
      					<input class="form-control mr-sm-2" type="text" name="name" required="" placeholder="Search" aria-label="Search"> 	
						<input class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="submit" value="Go">
      				</form>
				  </li>

				
				  
				 


              <!-- Messages -->
			  
              <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fab fa-envelope bg-blue"></i><span class="badge bg-orange badge-corner">10</span></a>
                
				<ul aria-labelledby="notifications" class="dropdown-menu">
				<?php
                 	foreach($e as $data){
                	?>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
				  
                   
                      <div class="msg-body">
                        <h6 style="font-size:14px;">You have a message from <?= $data["user"] ?></h6>
						<p style="font-size:12px;"><?= $data["message"] ?></p>
					  </div></a>
					  <?php }?>
					  </li>
					  <?php }?>  
                
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                </ul>
              </li>
				<li class="nav-item dropdown">
				<a class="btn btn-primary dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown"><?= $user?></a>
					<div class="dropdown-menu">
					    <a class="dropdown-item" href="homepage.php">Home</a>
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
              <p>User Dashboard</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="user_dashboard.php"> <i class="icon-home"></i>My Profile</a></li>
            <li class="active"><a href="edit_profile.php"> <i class="icon-grid"></i>Edit Profile</a></li>
            <li><a href="user_post.php"> <i class="icon-padnote"></i>Inbox</a></li>
        </nav>

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Edit Profile</h2>
            </div>
          </header>
          
          <section>
          	<div class="container-fluid">
			  <?php
    while ($select = mysqli_fetch_assoc($s)){ ?>
          		<div class="container" style="padding: 20px 20px; border-radius: 20px; box-shadow: 0px 0px 10px -6px">
          			<form method="POST" action="" enctype="" style="margin: 40px 20px">
						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="Username">Username</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10" class="col-xs-10 col-md-10 col-sm-10">
								<input type="text" class="form-control" placeholder="Username" name="user"  value="<?php echo $user; ?>"></input>
							</div>
						</div>

						
							
						
						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="Email">Email</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10">
								<input type="email" class="form-control" placeholder="Email" name="email"  value="<?php echo $email; ?>"></input>
							</div>
								
						</div>
						<div class="form-group row">
						<?php
                 	foreach($s as $data){
                	?>
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="About">About</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10">
							<input type="email" class="form-control" placeholder="about me" name="about"  value="<?= $data["About"] ?>"></input>
							</div>
							<?php }?>  	
						</div>
						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="Avatar">Avatar</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10">
								<input type="file" class="form-control" placeholder="Avatar" name="avatar"></input>
							</div>
								
						</div>
						<div class="row">
							<div class="col">
								<button type="submit" class="btn btn-success">Save Change</button>
							</div>	
							<div class="col">
								<a href="edit_profile.php" class="btn btn-secondary" style="float: right;">Cancel</a>
							</div>
						</div>
					</form>
          		</div>
          	</div>
          </section>
		  <?php }?>  
    	</div>
    </div>
  
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>