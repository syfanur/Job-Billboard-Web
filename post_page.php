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
    
    $months = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
    $user = $_SESSION['user'];
    $status = $_SESSION['status'];
    $e = mysqli_query($conn, "SELECT*FROM message ");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to JobBillboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" type="image/png" href="images/title-img.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/post-style.css">
    <script type="text/javascript">
        $('#BSbtninfo').filestyle({ 
        buttonName : 'btn-info',
        buttonText : ' Select a File'
        });
    </script>

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
				<li class="nav-item" style="margin-right: 15px"><a class="nav-link" href="homepage.php">Home</a></li>
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

  
    <div class="container" style="margin: 60px auto">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="images/ann.png" alt="image"/>
                    <h3>Let's Post your new Job Vacancies Here!</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">
                    <form action = "controller/create.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <br>
                            <label class="control-label col-sm-2" >Title</label>
                            <div class="col-sm-10">          
                            <input type="text" class="form-control" id="judul" placeholder="Enter Title Here" name="title" required>
                            </div>
                        </div>
                                           
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="lname">Deadline</label>
                            <div class="col-sm-10">
                            <select class="form-control" id="deadline" name="deadline" required>
                                <option value="">-- Choose One --</option>
                                <?php foreach ($months as $month) { ?>
							        <option value="<?= $month?>"><?= $month?></option>
						        <?php	} ?>
                            </select>
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <label class="control-label col-sm-2">Description</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" id="desc" rows="5" placeholder="Enter Description here" name="description" required></textarea>
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <label class="control-label col-sm-2">Category</label>
                            <div class="col-sm-10">
                            <select class="form-control" id="judul" name="category" required>
                                <option value="">-- Choose One --</option>
                                <option value="Project">Project</option>
                                <option value="Asisten">Asisten</option>
                                <option value="Tutor">Tutor</option>
                            </select>
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <label class="control-label col-sm-2">Poster</label>
                            <div class="col-sm-10">
                            <input type="file" id="BSbtninfo" class="form-control" name="file"></input>
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

    <!-- Footer -->
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