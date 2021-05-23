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

	$id = $_GET['id'];
	$sql = mysqli_query($conn, "SELECT * FROM post  WHERE id = '$id'");
	$e = mysqli_query($conn, "SELECT*FROM message ");
	$d = mysqli_query($conn, "SELECT*FROM notif ");
	$f = mysqli_query($conn, "SELECT*FROM comment ");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to JobBillboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="title icon" type="image/png" href="images/title-img.png"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="text-dark" style="background-color: #f4f4f4">
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
				<li class="nav-item" style="margin-right: 15px"><a class="nav-link" href="post_page.php">Write a post</a></li>
				<li class="nav-item" style="margin-right: 15px">
					<form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
      					<input class="form-control mr-sm-2" type="text" name="name" required="" placeholder="Search" aria-label="Search"> 	
						<input class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="submit" value="Go">
      				</form>
				  </li>

				
				  
				 


              <!-- Messages -->
			  
              <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope bg-green"></i><span class="badge bg-orange badge-corner">10</span></a>
                
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
						<a class="dropdown-item" href="controller/redirect_profile.php">Profile</a>
						<a class="dropdown-item" href="controller/logout.php">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
<br><br>


    <?php while ($value = mysqli_fetch_row($sql)) {?>
	<div class = "container">
    <div class="container-fluid">
       <!-- Breadcrumb-->
       <header class="page-header">
            <div class="breadcrumb-holder">
			   <ul class="breadcrumb">
				   <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
				   <li class="breadcrumb-item active"><?= $value[1]?></li>
			   </ul>
	   		</div>
			   </div>
       </header>
       

        <section>
        	<div class="container">
        		<div class="card">
				  <div class="card-header">
				    <?= $value[5]?>
				  </div>
				  <div class="card-body">
				    <h5 class="card-title" style="text-align:center"><?= $value[1]?></h5>
				   <center> <img src="images/<?= $value[4]?>" width="300" height="300" > </center> 
				   <p class="card-text" ><br><?= $value[3]?></p>
					<a class="btn btn btn-success new-message" href="#" data-toggle="modal" data-target="#modalMessage" > <i class="fa fa-envelope"></i> Kirim Pesan </a>

<!-- Modal Message -->
<div class="modal fade" id="modalMessage">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content" style="padding: 20px 0px">
<div class="modal-header">
<h4 class="modal-title">Kirim Pesan</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<form method="POST" action="controller/send.php">
<div class="form-group">
<label> Untuk </label> <br>
<input class="form-control" type="text" name="user" placeholder="Masukkan Username" required></input>
</div>
<div class="form-group">
<label> Pesan </label>
<input class="form-control" type="text" name="message" placeholder="Masukkan Pesan" required></input>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-primary" type="submit" name="submit" value="submit" style="width: 100%">Kirim</button>
</form>
</div>
</div>
</div>
</div>

				  </div>
				  <div class="card-footer text-muted">
				   Deadline <?= $value[2]?>
				  </div>
				</div>
        	</div>
        </section>
        <?php } ?>

        <hr>

		<section>
        	<div class="container" style="padding: 0">
				<form method="POST" action="">
				    <div class="form-group" id="comment">
				        <label class="control-label col-sm-2" id="desc">Comment</label>
				        <div class="col-sm-10">
				        <textarea class="form-control" id="desc" rows="5" placeholder="Enter Comment here" name="comment"></textarea>
				        </div>
				    </div>
				                        
				   
				    <div class="form-group">        
				    <div class="col-sm-offset-2 col-sm-10">
				        <button type="submit" class="btn btn-default" name="submit">Submit</button>
				    </div>
				    </div>
				</form>
        	</div>
		</section>
		<br>
		<?php
        foreach($f as $data){
        ?> 
		<div class="media-grids">
							
							<div class="media">
								<div class = "container">
								<div class="media-body">
								<div class="container">
								<div class="container">
								<h5><?= $data["nama"] ?></h5>
									<p><?= $data["comment"] ?></p>
									<span><a href="#desc"> Comment </a></span>
								</div>
								</div>
								</div>
								</div>
							</div>
    </div>
	</div>
	</div>
	<?php } ?>
    <!-- Footer -->

	<hr style=" margin-top: 20px">
	<footer class="text-dark" style="background-color: #c4dfe6;">
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
</body>
</html>