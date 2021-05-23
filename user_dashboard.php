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
  $id = $_SESSION['id'];
  
 
  $sql = mysqli_query($conn, "SELECT * FROM user  WHERE id = '$id'");
  $e = mysqli_query($conn, "SELECT*FROM message ");
?>




<!DOCTYPE html>
<html>
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
				<li class="nav-item" style="margin-right: 15px; color:blue;"><a class="nav-link" href="post_page.php">Write a post</a></li>
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
            <li class="active"><a href="user_dashboard.php"> <i class="icon-home"></i>My Profile</a></li>
            <li><a href="edit_profile.php"> <i class="icon-grid"></i>Edit Profile</a></li>
            <li><a href="user_post.php"> <i class="icon-padnote"></i>Inbox</a></li>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">My Profile</h2>
            </div>
          </header>

          <section>
          	<div class="container-fluid">
            <?php
                 	foreach($sql as $data){
                	?>
          		<div class="container" style="padding: 20px 20px; border-radius: 20px; box-shadow: 0px 0px 10px -6px" align="center">
              <?php if (file_exists('images/'. $data["avatar"] .'')) { ?>
                  <!-- $path = 'images/'. $data["avatar"] .''; -->
                  <img src="images/<?= $data["avatar"] ?>" class="rounded-circle" style="width: 300px;" height="300px;" alt="avatar"></a>
              <?php }else{ ?>
                  <!-- $path = 'images/profil.jpg'; -->
                  <img src="images/profil.jpg" class="rounded-circle" style="width: 300px;" height="300px;" alt="avatar"></a>
              <?php } ?> 
                 <h2><br><?php echo $user; ?></h2>
                 <h2><?= $data["email"] ?></h2>
                 <h2><?= $data["about"] ?></h2>
          		</div>
          	</div>
          </section>
    </div>
    </div>
    <?php } ?>
    
          
          <!-- <section>
          	<div class="container-fluid">
          		<div class="container" style="padding: 20px 20px; border-radius: 20px; box-shadow: 0px 0px 10px -6px" align="center">
          			<img src="https://dummyimage.com/200x200/333333/fff.png" class="rounded-circle" alt="Profile"><hr>
          			<h2>Username</h2><br>
				<h6>Nama</h6>
				<h6>Jumlah Post</h6><hr>
				<h6>About</h6>
          		</div>
          	</div>
          </section>
    </div>
    </div> -->
  
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