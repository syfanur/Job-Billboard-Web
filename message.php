<?php
	include ('config/connect.php');
	session_start();
	$user = $_SESSION['user'];
	$status = $_SESSION['status'];


	$e = mysqli_query($conn, "SELECT*FROM message ");
	$d = mysqli_query($conn, "SELECT*FROM notif ");
?>
<!DOCTYPE html>
<html lang="en">
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
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
<!-- Bootstrap core CSS -->
<link href="vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor2/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor2/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Custom styles for this template -->
<link href="css/landing-page.min.css" rel="stylesheet">

    
    <style type="text/css">

    
    	
body{
    margin-top:20px;
    background:#eee; 
}
.contacts li > .info-combo > h3.name{
    font-size:12px;    
}

.contacts li .message-time {
    text-align: right;
    display: block;
    margin-left: -15px;
    width: 70px;
    height: 25px;
    line-height: 28px;
    font-size: 14px;
    font-weight: 600;
    padding-right: 5px;
}
.contacts li > .info-combo > h5 {
    width: 180px;
    font-size: 12px;
    height: 28px;
    font-weight: 500;
    overflow: hidden;
    white-space: normal;
    text-overflow: ellipsis;
}

.contacts li > .info-combo > h3 {
    width: 167px;
    height: 20px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.info-combo > h3 {
    margin: 3px 0;
}

.no-margin-bottom {
    margin-bottom: 0 !important;
}

.info-combo > h5 {
    margin: 2px 0 6px 0;
}
/* Messages */
.messages-panel img.img-circle {
    border: 1px solid rgba(0,0,0,0.1);
}

.medium-image {
    width: 45px;
    height: 45px;
    margin-right: 5px;
}

.img-circle {
    border-radius: 50%;
}
.messages-panel {
  width: 100%;
  height: calc(100vh - 150px);
  min-height: 460px;
  background-color: #fbfcff;
  display: inline-block;
  border-top-left-radius: 5px;
  margin-bottom: 0;
}

.messages-panel img.img-circle {
  border: 1px solid rgba(0,0,0,0.1);
}

.messages-panel .tab-content {
  border: none;
  background-color: transparent;
}

.contacts-list {
  background-color: #fff;
  border-right: 1px solid #cfdbe2;
  width: 305px;
  height: 100%;
  border-top-left-radius: 5px;
  float: left;
}

.contacts-list .inbox-categories {
  width: 100%;
  padding: 0;
  margin-left: 0;
}

.contacts-list .inbox-categories > div {
  float: left;
  width: 76px;
  padding: 15px 5px;
  font-size: 14px;
  text-align: center;
  border-right: 1px solid rgba(0,0,0,0.1);
  background-color: rgba(255,255,255,0.75);
  cursor: pointer;
  font-weight: 700;
}

.contacts-list .inbox-categories > div:nth-child(1) {
  color: #2da9e9;
  border-right-color: rgba(45,129,233,0.06);
  border-bottom: 4px solid #2da9e9;
  border-top-left-radius: 5px;
}

.contacts-list .inbox-categories > div:nth-child(1).active {
  color: #fff;
  background-color: #2da9e9;
  border-bottom: 4px solid rgba(0,0,0,0.15);
}

.contacts-list .inbox-categories > div:nth-child(2) {
  color: #0ec8a2;
  border-right-color: rgba(14,200,162,0.06);
  border-bottom: 4px solid #0ec8a2;
}

.contacts-list .inbox-categories > div:nth-child(2).active {
  color: #fff;
  background-color: #0ec8a2;
  border-bottom: 4px solid rgba(0,0,0,0.15);
}

.contacts-list .inbox-categories > div:nth-child(3) {
  color: #ff9e2a;
  border-right-color: rgba(255,152,14,0.06);
  border-bottom: 4px solid #ff9e2a;
}

.contacts-list .inbox-categories > div:nth-child(3).active {
  color: #fff;
  background-color: #ff9e2a;
  border-bottom: 4px solid rgba(0,0,0,0.15);
}

.contacts-list .inbox-categories > div:nth-child(4) {
  color: #314557;
  border-bottom: 4px solid #314557;
  border-right-color: transparent;
}

.contacts-list .inbox-categories > div:nth-child(4).active {
  color: #fff;
  background-color: #314557;
  border-bottom: 4px solid rgba(0,0,0,0.35);
}

.contacts-list .panel-search > input {
  margin-left: 5px;
  background-color: rgba(0,0,0,0);
}

.contacts-outter-wrapper {
  position: relative;
  width: 305px;
  direction: rtl;
  min-height: 405px;
  overflow: hidden;
}

.contacts-outter-wrapper:after, .contacts-outter-wrapper:nth-child(1):after {
  content: "";
  position: absolute;
  width: 100%;
  height: 5px;
  bottom: 0;
  background-color: #2da9e9;
  border-bottom-left-radius: 4px;
}

.contacts-outter-wrapper:nth-child(2):after {
  background-color: #0ec8a2;
}

.contacts-outter-wrapper:nth-child(3):after {
  background-color: #ff9e2a;
}

.contacts-outter-wrapper:nth-child(4):after {
  background-color: #314557;
}

.contacts-outter {
  position: relative;
  height: calc(100vh - 278px);
  width: 325px;
  direction: rtl;
  overflow-y: scroll;
  padding-left: 20px;
}

@media screen and (min-color-index:0) and(-webkit-min-device-pixel-ratio:0) {
  @media {
    .contacts-outter-wrapper {
      direction: ltr;
    }

    .contacts-outter{
      direction: ltr;
      padding-left: 0;
    }
  }
}

.contacts {
  direction: ltr;
  width: 305px;
  margin-top: 0px;
}

.contacts li {
  width: 100%;
  border-top: 1px solid transparent;
  border-bottom: 1px solid rgba(205,211,237,0.2);
  border-left: 4px solid rgba(255,255,255,0);
  padding: 8px 12px;
  position: relative;
  background-color: rgba(255,255,255,0);
}

.contacts li:first-child {
  border-top: 1px solid rgba(205,211,237,0.2);
}

.contacts li:first-child.active {
  border-top: 1px solid rgba(205,211,237,0.75);
}

.contacts li:hover {
  background-color: rgba(255,255,255,0.25);
}

.contacts li.active, .contacts.info li.active {
  border-left: 4px solid #2da9e9;
  border-top-color: rgba(205,211,237,0.75);
  border-bottom-color: rgba(205,211,237,0.75);
  background-color: #fbfcff;
}

.contacts.success li.active {
  border-left: 4px solid #0ec8a2;
}

.contacts.warning li.active {
  border-left: 4px solid #ff9e2a;
}

.contacts.danger li.active {
  border-left: 4px solid #f95858;
}

.contacts.dark li.active {
  border-left: 4px solid #314557;
}

.contacts li > .info-combo {
  width: 172px;
  cursor: pointer;
}

.contacts li > .info-combo > h3 {
  width: 167px;
  height: 20px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.contacts li .contacts-add {
  width: 50px;
  float: right;
  z-index: 23299;
}

.contacts li .message-time {
  text-align: right;
  display: block;
  margin-left: -15px;
  width: 70px;
  height: 25px;
  line-height: 28px;
  font-size: 14px;
  font-weight: 600;
  padding-right: 5px;
}

.contacts li .contacts-add .fa-trash-o {
  position: absolute;
  font-size: 14px;
  right: 12px;
  bottom: 15px;
  color: #a6a6a6;
  cursor: pointer;
}

.contacts li .contacts-add .fa-paperclip {
  position: absolute;
  font-size: 14px;
  right: 34px;
  bottom: 15px;
  color: #a6a6a6;
  cursor: pointer;
}

.contacts li .contacts-add .fa-trash-o:hover {
  color: #f95858;
}

.contacts li .contacts-add .fa-paperclip:hover {
  color: #ff9e2a;
}

.contacts li > .info-combo > h5 {
  width: 180px;
  font-size: 12px;
  height: 28px;
  font-weight: 500;
  overflow: hidden;
  white-space: normal;
  text-overflow: ellipsis;
}

.contacts li .message-count {
  position: absolute;
  top: 8px;
  left: 5px;
  width: 20px;
  height: 20px;
  line-height: 20px;
  text-align: center;
  background-color: #ff9e2a;
  border-radius: 50%;
  color: #fff;
  font-weight: 600;
  font-size: 10px;
}

.message-body {
  background-color: #fbfcff;
  height: 100%;
  width: calc(100% - 305px);
  float: right;
}

.message-body .message-top {
  display: inline-block;
  width: 100%;
  position: relative;
  min-height: 53px;
  height: auto;
  background-color: #fff;
  border-bottom: 1px solid rgba(205,211,237,0.5);
}

.message-body .message-top .new-message-wrapper {
  width: 100%;
}

.message-body .message-top .new-message-wrapper > .form-group {
  width: 100%;
  padding: 10px 10px 0 10px;
  height: 50px;
}

.message-body .message-top .new-message-wrapper .form-group .form-control {
  width: calc(100% - 50px);
  float: left;
}

.message-body .message-top .new-message-wrapper .form-group a {
  width: 40px;
  padding: 6px 6px 6px 6px;
  text-align: center;
  display: block;
  float: right;
  margin: 0;
}

.message-body .message-top > .btn {
  height: 53px;
  line-height: 53px;
  padding: 0 20px;
  float: right;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  margin: 0;
  font-size: 15px;
  opacity: 0.9;
}

.message-body .message-top > .btn:hover,
.message-body .message-top > .btn:focus,
.message-body .message-top > .btn.active {
  opacity: 1;
}

.message-body .message-top > .btn > i {
  margin-right: 5px;
  font-size: 18px;
}

.new-message-wrapper {
  position: absolute;
  max-height: 400px;
  top: 53px;
  background-color: #fff;
  z-index: 105;
  padding: 20px 15px 30px 15px;
  border-bottom: 1px solid #cfdbe2;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-shadow: 0 7px 10px rgba(0,0,0,0.25);
  transition: 0.5s;
  display: none;
}

.new-message-wrapper.closed {
  opacity: 0;
  max-height: 0;
}

.chat-footer.new-message-textarea {
  display: block;
  position: relative;
  padding: 0 10px;
}

.chat-footer.new-message-textarea .send-message-button {
  right: 35px;
}

.chat-footer.new-message-textarea .upload-file {
  right: 85px;
}

.chat-footer.new-message-textarea .send-message-text {
  padding-right: 100px;
  height: 90px;
}

.message-chat {
  width: 100%;
  overflow: hidden;
}

.chat-body {
  width: calc(100% + 17px);
  min-height: 290px;
  height: calc(100vh - 320px);
  background-color: #fbfcff;
  margin-bottom: 30px;
  padding: 30px 5px 5px 5px;
  overflow-y: scroll;
}

.message {
  position: relative;
  width: 100%;
}

.message br {
  clear: both;
}

.message .message-body {
  position: relative;
  width: auto;
  max-width: calc(100% - 150px);
  float: left;
  background-color: #fff;
  border-radius: 4px;
  border: 1px solid #dbe3e8;
  margin: 0 5px 20px 15px;
  color: #788288;
}

.message:after {
  content: "";
  position: absolute;
  top: 11px;
  left: 63px;
  float: left;
  z-index: 100;
  border-top: 10px solid transparent;
  border-left: none;
  border-bottom: 10px solid transparent;
  border-right: 13px solid #fff;
}

.message:before {
  content: "";
  position: absolute;
  top: 10px;
  left: 62px;
  float: left;
  z-index: 99;
  border-top: 11px solid transparent;
  border-left: none;
  border-bottom: 11px solid transparent;
  border-right: 13px solid #dbe3e8;
}

.message .medium-image {
  float: left;
  margin-left: 10px;
}

.message .message-info {
  width: 100%;
  height: 22px;
}

.message .message-info > h5 > i {
  font-size: 11px;
  font-weight: 700;
  margin: 0 2px 0 0;
  color: #a2b8c5;
}

.message .message-info > h5 {
  color: #a2b8c5;
  margin: 8px 0 0 0;
  font-size: 12px;
  float: right;
  padding-right: 10px;
}

.message .message-info > h4 {
  font-size: 14px;
  font-weight: 600;
  margin: 7px 13px 0 10px;
  color: #65addd;
  float: left;
}

.message hr {
  margin: 4px 2%;
  width: 96%;
  opacity: 0.75;
}

.message .message-text {
  text-align: left;
  padding: 3px 13px 10px 13px;
  font-size: 14px;
}

.message.my-message .message-body {
  float: right;
  margin: 0 15px 20px 5px;
}

.message.my-message:after {
  content: "";
  position: absolute;
  top: 11px;
  left: auto;
  right: 63px;
  float: left;
  z-index: 100;
  border-top: 10px solid transparent;
  border-left: 13px solid #fff;
  border-bottom: 10px solid transparent;
  border-right: none;
}

.message.my-message:before {
  content: "";
  position: absolute;
  top: 10px;
  left: auto;
  right: 62px;
  float: left;
  z-index: 99;
  border-top: 11px solid transparent;
  border-left: 13px solid #dbe3e8;
  border-bottom: 11px solid transparent;
  border-right: none;
}

.message.my-message .medium-image {
  float: right;
  margin-left: 5px;
  margin-right: 10px;
}

.message.my-message .message-info > h5 {
  float: left;
  padding-left: 10px;
  padding-right: 0;
}

.message.my-message .message-info > h4 {
  float: right;
}

.message.info .message-body {
  background-color: #2da9e9;
  border: 1px solid #2da9e9;
  color: #fff;
}

.message.info:after, .message.info:before {
  border-right: 13px solid #2da9e9;
}

.message.success .message-body {
  background-color: #0ec8a2;
  border: 1px solid #0ec8a2;
  color: #fff;
}

.message.success:after, .message.success:before {
  border-right: 13px solid #0ec8a2;
}

.message.warning .message-body {
  background-color: #ff9e2a;
  border: 1px solid #ff9e2a;
  color: #fff;
}

.message.warning:after, .message.warning:before {
  border-right: 13px solid #ff9e2a;
}

.message.danger .message-body {
  background-color: #f95858;
  border: 1px solid #f95858;
  color: #fff;
}

.message.danger:after, .message.danger:before {
  border-right: 13px solid #f95858;
}

.message.dark .message-body {
  background-color: #314557;
  border: 1px solid #314557;
  color: #fff;
}

.message.dark:after, .message.dark:before {
  border-right: 13px solid #314557;
}

.message.info .message-info > h4, .message.success .message-info > h4,
.message.warning .message-info > h4, .message.danger .message-info > h4,
.message.dark .message-info > h4 {
  color: #fff;
}

.message.info .message-info > h5, .message.info .message-info > h5 > i,
.message.success .message-info > h5, .message.success .message-info > h5 > i,
.message.warning .message-info > h5, .message.warning .message-info > h5 > i,
.message.danger .message-info > h5, .message.danger .message-info > h5 > i,
.message.dark .message-info > h5, .message.dark .message-info > h5 > i {
  color: #fff;
  opacity: 0.9;
}

.chat-footer {
  position: relative;
  width: 100%;
  padding: 0 80px;
}

.chat-footer .send-message-text {
  position: relative;
  display: block;
  width: 100%;
  min-height: 55px;
  max-height: 75px;
  background-color: #fff;
  border-radius: 5px;
  padding: 5px 95px 5px 10px;
  font-size: 13px;
  resize: vertical;
  outline: none;
  border: 1px solid #e0e6eb;
}

.chat-footer .send-message-button {
  display: block;
  position: absolute;
  width: 35px;
  height: 35px;
  right: 100px;
  top: 0;
  bottom: 0;
  margin: auto;
  border: 1px solid rgba(0,0,0,0.05);
  outline: none;
  font-weight: 600;
  border-radius: 50%;
  padding: 0;
}

.chat-footer .send-message-button > i {
  font-size: 16px;
  margin: 0 0 0 -2px;
}

.chat-footer label.upload-file input[type="file"] {
  position: fixed;
  top: -1000px;
}

.chat-footer .upload-file {
  display: block;
  position: absolute;
  right: 150px;
  height: 30px;
  font-size: 20px;
  top: 0;
  bottom: 0;
  margin: auto;
  opacity: 0.25;
}

.chat-footer .upload-file:hover {
  opacity: 1;
}

@media screen and (max-width: 767px) {
  .messages-panel {
    min-width: 0;
    display: inline-block;
  }

  .contacts-list, .contacts-list .inbox-categories > div:nth-child(4) {
    border-top-right-radius: 5px;
    border-right: none;
  }

  .contacts-list, .contacts-outter-wrapper, .contacts-outter, .contacts {
    width: 100%;
    direction: ltr;
    padding-left: 0;
  }

  .contacts-list .inbox-categories > div {
    width: 25%;
  }

  .message-body {
    width: 100%;
    margin: 20px 0;
    border: 1px solid #dce2e9;
    background-color: #fff;
  }

  .message .message-body {
    max-width: calc(100% - 85px);
  }

  .message-body .chat-body {
    background-color: #fff;
    width: 100%;
  }

  .chat-footer {
    margin-bottom: 20px;
    padding: 0 20px;
  }

  .chat-footer .send-message-button {
    right: 40px;
  }

  .chat-footer .upload-file {
    right: 90px;
  }

  .message-body .message-top > .btn {
    border-radius: 0;
    width: 100%;
  }

  .contacts-add {
    display: none;
  }
}

/* Profile page */

.profile-main {
  background-color: #fff;
  border: 1px solid #dce2e9;
  border-radius: 3px;
  position: relative;
  margin-bottom: 20px;
}

.profile-main .profile-background {
  background-image: url('../images/samples/forest.png');
  background-repeat: no-repeat;
  background-size: 100%;
  background-position: center;
  width: 100%;
  height: 260px;
}

.profile-main .profile-info {
  width: calc(100% - 380px);
  max-width: 1100px;
  margin: 0 auto;
  background-color: #fff;
  height: 70px;
  border-radius: 0 0 3px 3px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.profile-main .profile-info > div {
  margin: 0 10px;
}

.profile-main .profile-info > div:last-child {
  padding-right: 25px;
}

.profile-main .profile-info > div h4 {
  font-size: 16px;
  margin-bottom: 0;
}

.profile-main .profile-info > div h5 {
  margin-top: 5px;
  font-weight: 500;
}

.profile-main .profile-button {
  padding: 8px 0;
  position: absolute;
  right: 25px;
  bottom: 16px;
  width: 150px;
}

.profile-main .profile-picture {
  width: 150px;
  height: 150px;
  border: 4px solid #fff;
  position: absolute;
  left: 25px;
  bottom: 14px;
}

@media screen and (max-width: 767px) {
  .profile-main .profile-info .profile-status,
  .profile-main .profile-info .profile-posts,
  .profile-main .profile-info .profile-date {
    display: none;
  }
}

.contacts li > .info-combo {
   display:inline-block;
}
    </style>
</head>
<body>
<?php
    while ($select = mysqli_fetch_assoc($d)){ ?>
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

				  <!-- Notifications-->
				  <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell bg-green"></i><span class="badge bg-red badge-corner">12</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification">
				  <?php
                 	foreach($d as $data){
                	?>
					<div class="notification-content"><i class="<?= $data["icon"] ?>"></i><?= $data["notif"] ?> </div>
                        <div class="notification-time"><small><?= $data["waktu"] ?></small></div>
					  </div></a></li>

                     
					  <?php }?>
					  
                
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                </ul>
              </li>
				  
				 


              <!-- Messages -->
              <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope bg-green"></i><span class="badge bg-orange badge-corner">10</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
				  <?php
                 	foreach($e as $data){
                	?>
                      <div class="msg-profile"> <img src="<?= $data["image"] ?>" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5"><?= $data["user"] ?></h3><span><?= $data["message"] ?></span>
					  </div></a></li>
					  <?php }?>
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


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="panel messages-panel">
        <div class="contacts-list">
            <div class="inbox-categories">
                <div data-toggle="tab" data-target="#inbox" class="active"> Inbox </div>
            </div>
            <div class="tab-content">
                <div id="inbox" class="contacts-outter-wrapper tab-pane active">
                   <br>
                    <div class="contacts-outter">
                        <ul class="list-unstyled contacts">
                            <li data-toggle="tab" data-target="#inbox-message-1" class="active">
                                <div class="vcentered info-combo">
                                <?php
                 	foreach($e as $data){
                	?>
                                    <h3 class="no-margin-bottom name"> <?= $data["user"] ?> </h3>
                                    <h5> <?= $data["message"] ?></h5>
                                    <?php } ?>
                                </div>
                               
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane message-body active" id="inbox-message-1">
                <div class="message-top">
                    <a class="btn btn btn-success new-message" href="#" data-toggle="modal" data-target="#modalMessage"> <i class="fa fa-envelope"></i> New Message </a>

                  <!-- Modal Login -->
  <div class="modal fade" id="modalMessage">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="padding: 20px 0px">
        <div class="modal-header">
          <h4 class="modal-title">Write a Message</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="controller/send.php">
            <div class="form-group">
            <label> To </label> <br>
              <input class="form-control" type="text" name="user" placeholder="Write a username" required></input>
            </div>
            <div class="form-group">
            <label> Message </label>
              <input class="form-control" type="text" name="message" placeholder="Write your message" required></input>
            </div>
        </div>
        <div class="modal-footer">
              <button class="btn btn-primary" type="submit" name="submit" value="submit" style="width: 100%">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>

                    <div class="new-message-wrapper">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Send message to...">
                            <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                        </div>

                        <div class="chat-footer new-message-textarea">
                            <textarea class="send-message-text"></textarea>
                            <label class="upload-file">
                                <input type="file" required="">
                                <i class="fa fa-paperclip"></i>
                            </label>
                            <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                        </div>
                    </div>
                </div>

                <div class="message-chat">
                    <div class="chat-body">
                        <div class="message info">
                            <div class="message-body">
                                <div class="message-info">
                                    <h4> <?= $data["user"] ?></h4>
                                </div>
                                <hr>
                                <div class="message-text">
                                <?= $data["message"] ?>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="message my-message">
                            <div class="message-body">
                                <div class="message-body-inner">
                                    <div class="message-info">
                                        <h4> <?= $data["user"] ?> </h4>
                                    </div>
                                    <hr>
                                    <div class="message-text">
                                    <?= $data["message"] ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                       
                    </div>

                    <div class="chat-footer">
                        <textarea class="send-message-text"></textarea>
                        <label class="upload-file">
                            <input type="file" required="">
                            <i class="fa fa-paperclip"></i>
                        </label>
                        <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                </div>
            </div>

<!--  -->

          

           

             

                </div>
                </div>
                </div>
                </div>
                
<!-- Footer -->

<hr style=" margin-top: 60px">
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
						<a href="#"><i class="fab fa-facebook fa-2x text-dark mr-md-5"></i></a>
						<a href="#"><i class="fab fa-google-plus fa-2x text-dark mr-md-5"></i></a>
						<a href="#"><i class="fab fa-twitter fa-2x text-dark mr-md-5"></i></a>
						<a href="#"><i class="fab fa-youtube fa-2x text-dark mr-md-5"></i></a>
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

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	

</script>
</body>
</html>