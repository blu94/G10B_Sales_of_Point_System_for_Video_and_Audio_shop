<!--<?php
  include("../dataconn/dataconn.php");
  if(!isset($_SESSION))
	{
		session_start();
	}
	$user_id = $_SESSION['user_id'];

	require("../dataconn/page_load.php");

	$user_id = $_SESSION['user_id'];
	$result = mysql_query("SELECT * FROM user WHERE User_ID = '$user_id'");
	$row = mysql_fetch_assoc($result);
?>-->
<!DOCTYPE html>
<html>
<head>
<title>Admin > Index</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/bg_style_black.css" media="screen" />
<!--<link rel="shortcut icon" href="../img/mmu_icon.png" type="image/png">-->
<!--<script type="text/javascript" src="../timer.js"></script>-->
<style type="text/css">
table
{
	width: 50%;
	margin-left: 180px;
}
</style>
</head>
<body>
  <div class="wrap">
  	<div id="header">
  		<div id="top">
  			<div class="left">
  				<!--<img src="../img/logo_bg.png" style="position:absolute; width: 490px; margin: -128px 0 0 -50px;">-->
  				<!--<img src="../img/mmu_logo.png" alt="MMU Logo" style="position:absolute; width: 160px;">-->
  				<!--<img src="../img/title.png" alt="System Title" style="position:absolute; width: 200px; margin-left: 200px;">-->
  				<!--<img src="../img/logo.ico" alt="Blu Video and Audio Shop" id="" class="logo_images" style="position:absolute; width: 85px; margin: -15px 0 0 -50px;"/>-->
          <?php echo "<img src='".$row['User_Profile_Pic']."' style='border:1px solid black' padding='5px' height='150px' width='150px'/>";?><!--call image by php-->
          <form action="upload_profile_picture.php?user_id=<?php echo $row['User_ID'];?>" id="upload_profile" enctype="multipart/form-data" method="post">
              <button class="file-upload">
              <input type="file" name="edit_profile_pic" accept="image/x-png, image/gif, image/jpeg" id="edit_profile" class="file-input"/>
              Upload Photo
              </button>
          </form>
          <p id="" class="shop_name" style="font-size:25px;display:;background-color:;width:100%;color:white; margin-left:50px; margin-top:10px;">Blu Video And Audio Shop</p>
  			</div>

  		</div>
  		<div id="nav">
  			<ul>
  				<li class="upp"><a href="#">Home</a></li>
  				<li class="upp"><a href="#">Rent & Sales</a>
  					<ul>
  						<li><a href="">List of video</a></li>
  						<li><a href="">Transaction History</a></li>
  					</ul>
  				</li>
  				<li class="upp"><a href="#">Coming Soon</a></li>
  			</ul>
  		</div>
  	</div>

  	<div id="content">
  		<div id="sidebar">
  			<div class="box">
  				<div class="h_title">Admin Profile</div>
  				<div style="background:white; padding: 10px 55px;"><img src="../img/user_photo.gif" style="border:1px solid black; padding: 5px;" /></div>
  				<p style="text-align:center; line-height: 20px;">Welcome, testing</p>
  				<ul id="home">
  					<li class="b1"><a class="icon profile" href="" >View profile</a></li>
  					<li class="b1"><a class="icon logout" href="">Log Out</a></li>
  				</ul>
  			</div>
  			<div class="box">
  				<div class="h_title">Product</div>
  				<ul>
  					<li class="b1"><a class="icon add_product" href="">Add Product</a></li>
  					<li class="b2"><a class="icon delete_product" href="">Delete Product</a></li>
  					<li class="b2"><a class="icon delete_product" href="">Product List</a></li>
  				</ul>
  			</div>
  			<div class="box">
  				<div class="h_title">Graph</div>
  				<ul>
  					<li class="b1"><a class="icon delete_product" href="">View Report</a></li>
  				</ul>
  			</div>
  			<div class="box">
  				<div class="h_title">Manage Users</div>
  				<ul>
  					<li class="b1"><a class="icon add_user" href="">Add User</a></li>
  					<li class="b2"><a class="icon delete_user" href="">Delete User</a></li>
  				</ul>
  			</div>
  		</div>
  		<div id="main">
  			<div class="full_w">
  				<div class="h_title">Personal Details</div>
  				<form>
  				<div style="float:left;">
  					<img src="../img/user_photo.gif" style="border:1px solid black; padding: 5px; height: 150px; width: 150px;" />
  				</div>
  				<div>
  					<table>
  						<tr>
  							<td colspan="2" style="font-size: 18pt; font-weight:bold;"><?php echo $row["User_Name"] ?>'s Profile</td>
  						</tr>
  						<tr>
  							<td><b>Admin ID</b></td>
  							<td>1121115935</td>
  						</tr>
  						<tr>
  							<td><b>Email</b> </td>
  							<td><?php echo $row["User_Email"] ?></td>
  						</tr>
  						<tr>
  							<td><b>Contact No.</b></td>
  							<td><?php echo $row["User_Phone"] ?></td>
  						</tr>
  						<tr>
  							<td><b>Username</b></td>
  							<td><?php echo $row["User_Name"] ?></td>
  						</tr>
              <tr>
  							<td><b>Position</b></td>
  							<td><?php echo $row[""] ?></td>
  						</tr>
  					</table>
  					<div style="margin-left: 180px;">
  						<button class="edit" type="button" onclick="location.href='';" style="background: #F3F3F3 url(../img/i_edit.png) no-repeat 4px center; padding-left: 25px;">Edit</button>
  					</div>
  				</div>
  				</form>
  			</div>
  		</div>
  	</div>
  	<div id="footer">
  			<p style="text-align:center;">Copyright 2016</p>
  	</div>
  </div>
</body>
</html>
