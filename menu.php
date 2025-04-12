<?php
session_start();
$name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
	.yash
	{
		border-style:solid black;
		width: 60px;
		float: right;
	}
</style>
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="http://localhost/shlok/new2/index.php">
							<img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="http://localhost/shlok/new2/index.php
									">Home</a>
								</li>

								<li>
									<a href="http://localhost/shlok/new2/menu.php">Menu</a>
								</li>

								<li>
									<a href="http://localhost/shlok/new2/reservation.php">Reservation</a>
								</li>

								<li>
									<a href="http://localhost/shlok/new2/gallery.php">Gallery</a>
								</li>

								<li>
									<a href="http://localhost/shlok/new2/about.php">About</a>
								</li>

								<li>
									<a href="http://localhost/shlok/new2/blog.php">Blog</a>
								</li>

								<li>
									<a href="http://localhost/shlok/new2/contact.php">Contact</a>
								</li>
								<li>
								<a href="http://localhost/shlok/new2/cart.php"><i class="fa fa-shopping-cart" style="font-size:24px;"></i></a>
								</li>
								<li>
									<a href="http://localhost/shlok/new2/login/login.html">Account</a>
								</li>
								</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<!-- <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a> -->

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>
         
		<!-- - -->
		<link rel="stylesheet" type="text/css" href="profile.css">
		<br>
		 <br>
    <div class="center">

        <div class="card">
          <div class="additional">
            <div class="user-card">
              <!-- <div class="level center">
                Level 13
              </div>
              <div class="points center">
                5,312 Points
              </div> -->
              <svg width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center">
                <title id="title"><h1><?php echo $name;?></h1></title>
                <desc id="desc">Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white collar drawn by Alvaro Montoro.</desc>
                <style>
                  .skin { fill: #eab38f; }
                  .eyes { fill: #1f1f1f; }
                  .hair { fill: #2f1b0d; }
                  .line { fill: none; stroke: #2f1b0d; stroke-width:2px; }
                </style>
                <defs>
                  <clipPath id="scene">
                    <circle cx="125" cy="125" r="115"/>
                  </clipPath>
                  <clipPath id="lips">
                    <path d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
                  </clipPath>
                </defs>
                <circle cx="125" cy="125" r="120" fill="rgba(0,0,0,0.15)" />
                <g stroke="none" stroke-width="0" clip-path="url(#scene)">
                  <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />
                  <g id="head">
                    <path fill="none" stroke="#111111" stroke-width="2" d="M 68,103 83,103.5" />
                    <path class="hair" d="M 67,90 67,169 78,164 89,169 100,164 112,169 125,164 138,169 150,164 161,169 172,164 183,169 183,90 Z" />
                    <circle cx="125" cy="100" r="55" class="skin" />
                    <ellipse cx="102" cy="107" rx="5" ry="5" class="eyes" id="eye-left" />
                    <ellipse cx="148" cy="107" rx="5" ry="5" class="eyes" id="eye-right" />
                    <rect x="119" y="140" width="12" height="40" class="skin" />
                    <path class="line eyebrow" d="M 90,98 C 93,90 103,89 110,94" id="eyebrow-left" />
                    <path class="line eyebrow" d="M 160,98 C 157,90 147,89 140,94" id="eyebrow-right"/>
                    <path stroke="#111111" stroke-width="4" d="M 68,103 83,102.5" />
                    <path stroke="#111111" stroke-width="4" d="M 182,103 167,102.5" />
                    <path stroke="#050505" stroke-width="3" fill="none" d="M 119,102 C 123,99 127,99 131,102" />
                    <path fill="#050505" d="M 92,97 C 85,97 79,98 80,101 81,104 84,104 85,102" />
                    <path fill="#050505" d="M 158,97 C 165,97 171,98 170,101 169,104 166,104 165,102" />
                    <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 119,102 C 118,111 115,119 98,117 85,115 84,108 84,104 84,97 94,96 105,97 112,98 117,98 119,102 Z" />
                    <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 131,102 C 132,111 135,119 152,117 165,115 166,108 166,104 166,97 156,96 145,97 138,98 133,98 131,102 Z" />
                    <path class="hair" d="M 60,109 C 59,39 118,40 129,40 139,40 187,43 189,99 135,98 115,67 115,67 115,67 108,90 80,109 86,101 91,92 92,87 85,99 65,108 60,109" />
                    <path id="mouth" fill="#d73e3e" d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" /> 
                    <path id="smile" fill="white" d="M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z" clip-path="url(#lips)" />
                  </g>
				  
                  <g id="shirt">
                    <path fill="#8665c2" d="M 132,170 C 146,170 154,200 154,200 154,200 158,250 158,250 158,250 92,250 92,250 92,250 96,200 96,200 96,200 104,170 118,170 118,170 125,172 125,172 125,172 132,170 132,170 Z"/>
                    <path id="arm-left" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 118,178 C 94,179 66,220 65,254" />
                    <path id="arm-right" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 132,178 C 156,179 184,220 185,254" />
                    <path fill="white" d="M 117,166 C 117,166 125,172 125,172 125,182 115,182 109,170 Z" />
                    <path fill="white" d="M 133,166 C 133,166 125,172 125,172 125,182 135,182 141,170 Z" />
                    <circle cx="125" cy="188" r="4" fill="#5a487b" />
                    <circle cx="125" cy="202" r="4" fill="#5a487b" />
                    <circle cx="125" cy="216" r="4" fill="#5a487b" />
                    <circle cx="125" cy="230" r="4" fill="#5a487b" />
                    <circle cx="125" cy="244" r="4" fill="#5a487b" />
                    <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-left" d="M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278" /> 
                    <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-right" d="M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278"/> 
				</g>
                </g>
              </svg>
			  
            </div>
		
			
			<?php 
			if($count==1)
			{?>
			
			<h3><?php echo $name;?></h3>
			<h4>name:<?php echo $row['fname']." ".$row['lname'];?></h4>
			<h4>age:<?php echo $row['age'];?></h4>
			<h4>address:<?php echo $row['address'];?></h4>
			<h4>Country:<?php echo $row['country'];?></h4>
			
			<?php
			}
			else{?>
				<h1><?php echo $name;?></h1>
				<?php
			}
			?>
			<a href="profile2.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Edit Profile
							</a>
            <div class="more-info">
              <h1><?php //echo $name;?></h1>
              <!--<div class="coords">
                <span>Group Name</span>
                <span>Joined January 2019</span>
              </div> -->
              <!-- <div class="coords">
                <span>Position/Role</span>
                <span>City, Country</span>
              </div>  -->
              <!-- <div class="stats">
                <div>
               <div class="title">Awards</div>
                  <i class="fa fa-trophy"></i>
                  <div class="value">2</div>
                </div>
                <div>
                  <div class="title">Matches</div>
                  <i class="fa fa-gamepad"></i>
                  <div class="value">27</div>
                </div>
                <div>
                  <div class="title">Pals</div>
                  <i class="fa fa-group"></i>
                  <div class="value">123</div>
                </div>
                <div>
                  <div class="title">Coffee</div>
                  <i class="fa fa-coffee"></i>
                  <div class="value infinity">∞</div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="general">
            <h1><?php echo $name;?></h1>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;welcom to Dreams cafe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name;?></p>
            <span class="more">Mouse over the card for more info</span>
          </div>
        </div>
      
			<li class="t-center m-b-33">
				<!-- Button3 -->
				<form action="http://localhost/shlok/new2/login/logout.php" method="post">
		<button class='btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto' type="submit">
	  Logout
  </button>
   </form>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
		<h2 class="tit6 t-center">
			Dreams menu
		</h2>
	</section>


	<!-- Main menu -->
	<section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="coffee">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Coffee
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Hot Coffee
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.180
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Hot water,Coffee powder,Cocoa powder,Milk
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Cold Coffee
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.220
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Coffee,Warm water,Chiled milk,ice cubes 
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Black Coffee
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.180
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Coffee Powder,Cup water 
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Americano
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.180
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
							Hot water,Espresso.
							</span>
						</div>

					<!-- Item mainmenu -->
					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Cappuccino
							</a>

							<div class="line-item-mainmenu bg3-pattern"></div>

							<div class="price-item-mainmenu txt22">
								RS.220
							</div>
						</div>

						<span class="info-item-mainmenu txt23">
						Coffee,Espresso,milk,instant coffee
						</span>
					</div>
				

				<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Mocha
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.200
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
						    Espresso,chocolate syrup,steamed milk,whipped cream
							</span>
						</div>
					</div>
				</div>
				</div>
			</div>
			


			<div class="Tea">
					<div class="wrap-item-mainmenu">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Tea
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Black Tea
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.40
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Tea leaves,water,suger
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Green Tea
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.40
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Water,piece cinnamon,basil leaves
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Masala Tea
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.50
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								cardamom,cloves,cinnamon,dry ginger,tulsi seeds,milk
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Sugerfree
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.40
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Tea leaves,water,milk
							</span>
						</div>
					
				        <!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									LemonTea
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.40
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Black tea,water,lemon juice,honey
							</span>
						</div>
					
				        <!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Special Tea
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.50
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								cinnamon,fennel,dry ginger,tulsi seeds,jaiphal,milk,special masala,cardamom,cloves,pepper
							</span>
						</div>
					</div>
				 
				
				   <div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<div class="milkshake">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Milkshakes
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Choco shake
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rs.120
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								milk,chocolate syrup,chocoa powder,ice cream
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Oreo shake
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.150
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Oreo cookies,milk,chocolate syrup,chocoa powder,ice cream.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									kitkat shake
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.150
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Kitkat,milk,chocolate syrup,chocoa powder,ice cream.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Strawberry shake
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.140
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Strawberrys,milk,rose syrup,ice cream.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Badam shake
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rs.130
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Almonds,milk,custard,sugar,cashew,pistachios,cardamom powder.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Blueberry shake
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.180
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Blueberry,milk,ice cream,ice,sugar.
							</span>
						</div>
					</div>

				<div class="Sandwich">	
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Sandwich
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Aloo-mater sandwich
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.80
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Boiled potatoes,bread slices,Boiled peas,onion
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Cheese sandwich
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.100
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Cheese,bread slices,vagetables
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Cheese-jam sandwich
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.80
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Bread,butter,grated cheese,fruit jam
							</span>
						</div>

					    <!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Paneer-tikka sandwich
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.140
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Paneer,katuri mathi,besan,capsicum,onion,tomato,ginger garlic paste
							</span>
						</div>
								<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Mexican sandwich
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.150
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Olive oil,bread,mayonnaise,fresh salsa,maxican cheesse bland,butter
							</span>
						</div>
								<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Veg sandwich
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									RS.150
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Bread,butter,cumin,garlic,chilies,mixed veggies,tomato,coriander leaves
							</span>
						</div>
				</div>
				<div class="Pizza">
						<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
							<div class="wrap-item-mainmenu p-b-22">
								<h3 class="tit-mainmenu tit10 p-b-25">
									Pizza
								</h3>
		
								<!-- Item mainmenu -->
								
								<div class="item-mainmenu m-b-36">
									<div class="flex-w flex-b m-b-3">
										<a href="#" class="name-item-mainmenu txt21">
											Margherita pizza
										</a>
		
										<div class="line-item-mainmenu bg3-pattern"></div>
		
										<div class="price-item-mainmenu txt22">
											Rs.200
										</div>
									</div>
		
									<span class="info-item-mainmenu txt23">
										fresh basil,garlic clove,mozzarella cheese,cherry tomatos
									</span>
								</div>
		
								<!-- Item mainmenu -->
								<div class="item-mainmenu m-b-36">
									<div class="flex-w flex-b m-b-3">
										<a href="#" class="name-item-mainmenu txt21">
											Mexican pizza
										</a>
		
										<div class="line-item-mainmenu bg3-pattern"></div>
		
										<div class="price-item-mainmenu txt22">
											RS.250
										</div>
									</div>
		
									<span class="info-item-mainmenu txt23">
										pizza sauce,butter,oregano,veg mayonnaise,black pepper powder,all veggies
									</span>
								</div>
		
								<!-- Item mainmenu -->
								<div class="item-mainmenu m-b-36">
									<div class="flex-w flex-b m-b-3">
										<a href="#" class="name-item-mainmenu txt21">
											Paneer-tikka pizza
										</a>
		
										<div class="line-item-mainmenu bg3-pattern"></div>
		
										<div class="price-item-mainmenu txt22">
											RS.280
										</div>
									</div>
		
									<span class="info-item-mainmenu txt23">
										pizza sorce,mozzarella cheese,paneer,onion,capsicum,kasuri methi
									</span>
								</div>
		
								<!-- Item mainmenu -->
								<div class="item-mainmenu m-b-36">
									<div class="flex-w flex-b m-b-3">
										<a href="#" class="name-item-mainmenu txt21">
											Pasta pizza
										</a>
		
										<div class="line-item-mainmenu bg3-pattern"></div>
		
										<div class="price-item-mainmenu txt22">
											RS.250
										</div>
									</div>
		
									<span class="info-item-mainmenu txt23">
										Pasta,spaghetti sauce,pepperoni sausage,mozzarella cheese
									</span>
								</div>
		
								<!-- Item mainmenu -->
								<div class="item-mainmenu m-b-36">
									<div class="flex-w flex-b m-b-3">
										<a href="#" class="name-item-mainmenu txt21">
											Cheese Burst Pizza
										</a>
		
										<div class="line-item-mainmenu bg3-pattern"></div>
		
										<div class="price-item-mainmenu txt22">
											Rs.300
										</div>
									</div>
		
									<span class="info-item-mainmenu txt23">
										Cheese spread,cheese slices,fresh basil,garlic clove,mozzarella cheese,sliced jalapenos
									</span>
								</div>
								<!-- Item mainmenu -->
								<div class="item-mainmenu m-b-36">
									<div class="flex-w flex-b m-b-3">
										<a href="#" class="name-item-mainmenu txt21">
											Sweet And Courn Pizza
										</a>
		
										<div class="line-item-mainmenu bg3-pattern"></div>
		
										<div class="price-item-mainmenu txt22">
											Rs.180
										</div>
									</div>
		
									<span class="info-item-mainmenu txt23">
										Boiled Sweet corn,pizza souce,mozzarella cheese,chilli flakes,oregano
									</span>
								</div>
						</div>					

							<div class="Deserts">
								<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
									<div class="wrap-item-mainmenu p-b-22">
										<h3 class="tit-mainmenu tit10 p-b-25">
											Deserts
										</h3>
				
										<!-- Item mainmenu -->
										<div class="item-mainmenu m-b-36">
											<div class="flex-w flex-b m-b-3">
												<a href="#" class="name-item-mainmenu txt21">
													Pancake
												</a>
				
												<div class="line-item-mainmenu bg3-pattern"></div>
				
												<div class="price-item-mainmenu txt22">
													Rs.150
												</div>
											</div>
				
											<span class="info-item-mainmenu txt23">
												Flour,baking powder,sugar,salt,milk,butter
											</span>
										</div>
				
										<!-- Item mainmenu -->
										<div class="item-mainmenu m-b-36">
											<div class="flex-w flex-b m-b-3">
												<a href="#" class="name-item-mainmenu txt21">
													Donuts
												</a>
				
												<div class="line-item-mainmenu bg3-pattern"></div>
				
												<div class="price-item-mainmenu txt22">
													RS.150
												</div>
											</div>
				
											<span class="info-item-mainmenu txt23">
												Milk,dry yeast,butter,suger,salt,flour,oil
											</span>
										</div>
				
										<!-- Item mainmenu -->
										<div class="item-mainmenu m-b-36">
											<div class="flex-w flex-b m-b-3">
												<a href="#" class="name-item-mainmenu txt21">
													Cupcakes
												</a>
				
												<div class="line-item-mainmenu bg3-pattern"></div>
				
												<div class="price-item-mainmenu txt22">
													RS.140
												</div>
											</div>
				
											<span class="info-item-mainmenu txt23">
												Butter,caster suger,vanilla extract,raising flour
											</span>
										</div>
				
										<!-- Item mainmenu -->
										<div class="item-mainmenu m-b-36">
											<div class="flex-w flex-b m-b-3">
												<a href="#" class="name-item-mainmenu txt21">
													Brunnie
												</a>
				
												<div class="line-item-mainmenu bg3-pattern"></div>
				
												<div class="price-item-mainmenu txt22">
													RS.150
												</div>
											</div>
				
											<span class="info-item-mainmenu txt23">
												Dark chocolate,butter,suger,yogurt,vanilla essence,cocoa powder,milk
											</span>
										</div>
				
										<!-- Item mainmenu -->
										<div class="item-mainmenu m-b-36">
											<div class="flex-w flex-b m-b-3">
												<a href="#" class="name-item-mainmenu txt21">
													pastries
												</a>
				
												<div class="line-item-mainmenu bg3-pattern"></div>
				
												<div class="price-item-mainmenu txt22">
													Rs.120
												</div>
											</div>
				
											<span class="info-item-mainmenu txt23">
												Butter,suger,yogurt,vanilla essence,chocolate syrup,cream,choco chips
											</span>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</section>



	<!-- coffee -->
	<section class="section-Coffee bgwhite">
		<div class="header-Coffee parallax0 parallax100" style="background-image: url(https://assets.newatlas.com/dims4/default/963b711/2147483647/strip/true/crop/2000x1333+0+0/resize/2000x1333!/quality/90/?url=http%3A%2F%2Fnewatlas-brightspot.s3.amazonaws.com%2F29%2F5d%2F39fac6b148b5841cdf28dc519aca%2Fcoffee-heart.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Coffee
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="https://www.kidney.org/sites/default/files/Coffee_LYK%20fb.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Hot coffee
							</a>

							<span class="txt23">
								Hot water,Coffee powder,Cocoa powder,Suger,Milk.
							</span>
							<form action="http://localhost/shlok/new2/add.php" method="post">
							<span class="txt22 m-t-20">
								Rs. 180
									<input type="hidden" name="food" value="Hot coffee">
									<input type="hidden" name="price" value="180">
									<input type="hidden" name="image_url" id="image_url"><br>
									Quantity:<input type="number" name="number" value="1" style = "margin-left: 15px;width: 70px;">
								<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</span>
								</form>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/cold-coffee.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Cold Coffee
							</a>

							<span class="txt23">
						        Coffee,Warm water,Sugar,Chiled milk,ice cubes. 
							</span>

							<span class="txt22 m-t-20">
								Rs. 220
								<form action="http://localhost/shlok/new2/add.php" method="post">
									<input type="hidden" name="food" value="Cold Coffee">
									<input type="hidden" name="price" value="220">
									Quantity:<input type="number" name="number" value="1" style = "margin-left: 15px;width: 70px;">
								<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
								</form>
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/blackcoffee.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Black Coffee
							</a>

							<span class="txt23">
								Coffee Powder,Cup water,Suger as per taste.
							</span>

							<span class="txt22 m-t-20">
								RS. 180
								<form action="http://localhost/shlok/new2/add.php" method="post">
									<input type="hidden" name="food" value="Black Coffee">
									<input type="hidden" name="price" value="180">
									Quantity:<input type="number" name="number" value="1" style = "margin-left: 15px;width: 70px;">
								<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
								</form>
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="https://cdn.shopify.com/s/files/1/0022/1393/7252/articles/20230113070552-caffe-americano-blog_1200x1200.webp?v=1673593629" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Americano
							</a>

							<span class="txt23">
								Hot water,Espresso.
							</span>

							<span class="txt22 m-t-20">
								RS. 180
								<form action="http://localhost/shlok/new2/add.php" method="post">
									<input type="hidden" name="food" value="Americano">
									<input type="hidden" name="price" value="180">
									Quantity:<input type="number" name="number" value="1" style = "margin-left: 15px;width: 70px;">
								<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
								</form>
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a  href="#"><img src="https://dairyfarmersofcanada.ca/sites/default/files/styles/recipe_image/public/image_file_browser/conso_recipe/2022/Capuccino.jpg.jpeg?itok=J1pWPwe2" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Cappuccino
							</a>

							<span class="txt23">
								Coffee,Espresso,milk,Instant Coffee.
							</span>

							<span class="txt22 m-t-20">
								Rs. 220
								<form action="http://localhost/shlok/new2/add.php" method="post">
									<input type="hidden" name="food" value="Cappuccino">
									<input type="hidden" name="price" value="220">
									Quantity:<input type="number" name="number" value="1" style = "margin-left: 15px;width: 70px;">
								<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
								</form>
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Mocha-1fc71f7.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Mocha
							</a>

							<span class="txt23">
								Espresso,Chocolate syrup,steamed milk,whipped cream,Chocolate sprinkles.
							</span>

							<span class="txt22 m-t-20">
								Rs. 200
								<form action="http://localhost/shlok/new2/add.php" method="post">
									<input type="hidden" name="food" value="Mocha">
									<input type="hidden" name="price" value="200">
									Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
								<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
								</form>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
						
<!-- tea -->
<section class="section-tea bgwhite">
	<div class="header-tea parallax0 parallax100" style="background-image: url(cafe/tea.jpg);">
		<div class="bg1-overlay t-center p-t-170 p-b-165">
			<h2 class="tit4 t-center">
				Tea
			</h2>
		</div>
	</div>

	<div class="container">
		<div class="row p-t-108 p-b-70">
			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/black_tea.jfif" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Black tea
						</a>

						<span class="txt23">
							Tea leaves,water,suger
						</span>

						<span class="txt22 m-t-20">
							Rs. 40
                            <form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="40">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/green-tea.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Green tea
						</a>

						<span class="txt23">
							Water,piece cinnamon,basil leaves
						</span>

						<span class="txt22 m-t-20">
							Rs. 40
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="40">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/masala.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Masala tea
						</a>

						<span class="txt23">
							cardamom,cloves,cinnamon,dry ginger,tulsi seeds,milk
						</span>

						<span class="txt22 m-t-20">
							Rs. 50
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="50">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>

			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/suggerfree.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Sugerfree
						</a>

						<span class="txt23">
							Tea leaves,water,milk
						</span>

						<span class="txt22 m-t-20">
							Rs. 40
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="40">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/LemonTea.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Lemon tea
						</a>

						<span class="txt23">
							Black tea,water,lemon juice,honey
						</span>

						<span class="txt22 m-t-20">
							Rs. 40
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="40">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/special-tea.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Secial tea
						</a>

						<span class="txt23">
							cinnamon,fennel,dry ginger,tulsi seeds,jaiphal,milk,special masala,cardamom,cloves,pepper
						</span>

						<span class="txt22 m-t-20">
							Rs. 50
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="50">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Milkshakes -->
<section class="section-Milkshakes bgwhite">
	<div class="header-Milkshakes parallax0 parallax100" style="background-image: url(https://food-images.files.bbci.co.uk/food/recipes/milkshake_19447_16x9.jpg);">
		<div class="bg1-overlay t-center p-t-170 p-b-165">
			<h2 class="tit4 t-center">
				Milkshakes
			</h2>
		</div>
	</div>

	<div class="container">
		<div class="row p-t-108 p-b-70">
			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/chocoshake.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Choco shake
						</a>

						<span class="txt23">
							milk,chocolate syrup,chocoa powder,ice cream
						</span>

						<span class="txt22 m-t-20">
							Rs. 120
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="120">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/oreo-shake.jpeg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Oreo shake
						</a>

						<span class="txt23">
							Oreo cookies,milk,chocolate syrup,chocoa powder,ice cream
						</span>

						<span class="txt22 m-t-20">
							Rs. 150
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="150">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/kit-kat-shake.jfif" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Kitkat shake
						</a>

						<span class="txt23">
							Kitkat,milk,chocolate syrup,chocoa powder,ice cream
						</span>

						<span class="txt22 m-t-20">
							Rs. 150
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="150">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>

			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/Strawberry-Milkshake.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Strawberry shake
						</a>

						<span class="txt23">
							Strawberrys,milk,rose syrup,ice cream
						</span>

						<span class="txt22 m-t-20">
							Rs. 140
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="140">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/badamshake.jpeg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Badam shake
						</a>

						<span class="txt23">
							Almonds,milk,custard,sugar,cashew,pistachios,cardamom powder
						</span>

						<span class="txt22 m-t-20">
							Rs. 130
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="130">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/blueberry-milkshake.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Blueberry shake
						</a>

						<span class="txt23">
							Blueberry,milk,ice cream,ice,sugar
						</span>

						<span class="txt22 m-t-20">
							Rs. 250
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="250">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--sandwich -->
<section class="section-sandwich bgwhite">
	<div class="header-sandwich parallax0 parallax100" style="background-image: url(https://kfoods.com/images1/newrecipeicon/club-sandwich_483.jpg);">
		<div class="bg1-overlay t-center p-t-170 p-b-165">
			<h2 class="tit4 t-center">
				Sandwich
			</h2>
		</div>
	</div>

	<div class="container">
		<div class="row p-t-108 p-b-70">
			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/aloo-mater.jfif" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Aloo-mater sandwich 
						</a>

						<span class="txt23">
							Boiled potatoes,bread slices,Boiled peas,onion
						</span>

						<span class="txt22 m-t-20">
							Rs. 80
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="80">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/cheese-sandwich.jfif" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Cheese sandwich
						</a>

						<span class="txt23">
							Cheese,bread slices,vagetables
						</span>

						<span class="txt22 m-t-20">
							Rs. 100
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="100">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/jam-sandwiches.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Cheese-jam sandwich
						</a>

						<span class="txt23">
							Bread,butter,grated cheese,fruit jam
						</span>

						<span class="txt22 m-t-20">
							Rs. 80
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="80">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>

			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/paneer-tikka.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Panner-tikka sandwich
						</a>

						<span class="txt23">
							Paneer,katuri mathi,besan,capsicum,onion,tomato,ginger garlic paste
						</span>

						<span class="txt22 m-t-20">
							Rs. 140
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="140">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/maxican-sandwich.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Mexican sandwich
						</a>

						<span class="txt23">
							Olive oil,bread,mayonnaise,fresh salsa,maxican cheesse bland,butter
						</span>

						<span class="txt22 m-t-20">
							Rs. 150
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="150">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/veg-sandwich.jfif" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Veg sandwich
						</a>

						<span class="txt23">
							Bread,butter,cumin,garlic,chilies,mixed veggies,tomato,coriander leaves
						</span>

						<span class="txt22 m-t-20">
							Rs. 100
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="100">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Pizza -->
<section class="section-pizza bgwhite">
	<div class="header-pizza parallax0 parallax100" style="background-image: url(https://res.cloudinary.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/xheysiet81o1h8zofhdm);">
		<div class="bg1-overlay t-center p-t-170 p-b-165">
			<h2 class="tit4 t-center">
				Pizza
			</h2>
		</div>
	</div>

	<div class="container">
		<div class="row p-t-108 p-b-70">
			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/margerita.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Margherita pizza
						</a>

						<span class="txt23">
							fresh basil,garlic clove,mozzarella cheese,cherry tomatos
						</span>

						<span class="txt22 m-t-20">
							Rs. 200
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="200">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/maxican.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Mexican pizza
						</a>

						<span class="txt23">
							pizza sauce,butter,oregano,veg mayonnaise,black pepper powder,all veggies
						</span>

						<span class="txt22 m-t-20">
							Rs. 250
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="250">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/panner-tikka-pizza.jpeg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Paneer-tikka pizza
						</a>

						<span class="txt23">
							pizza sorce,mozzarella cheese,paneer,onion,capsicum,kasuri methi

						</span>

						<span class="txt22 m-t-20">
							Rs. 280
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="280">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>

			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/pizza-pasta.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							pasta pizza
						</a>

						<span class="txt23">
							Pasta,spaghetti sauce,pepperoni sausage,mozzarella cheese
						</span>

						<span class="txt22 m-t-20">
							Rs. 250
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="250">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/CheeseBurstPizza.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Cheese bust pizza
						</a>

						<span class="txt23">
							Cheese spread,cheese slices,fresh basil,garlic clove,mozzarella cheese,sliced jalapenos
						</span>

						<span class="txt22 m-t-20">
							Rs. 300
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="300">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>	

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/sweet-corn.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Sweet and courn pizza
						</a>

						<span class="txt23">
							Boiled Sweet corn,pizza souce,mozzarella cheese,chilli flakes,oregano
						</span>

						<span class="txt22 m-t-20">
							Rs. 180
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="180">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Deserts -->
<section class="section-Deserts bgwhite">
	<div class="header-Deserts parallax0 parallax100" style="background-image: url(cafe/Desert_bg.jpg);">
		<div class="bg1-overlay t-center p-t-170 p-b-165">
			<h2 class="tit4 t-center">
				Deserts
			</h2>
		</div>
	</div>

	<div class="container">
		<div class="row p-t-108 p-b-70">
			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/pancake.webp" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Pancake
						</a>

						<span class="txt23">
							Flour,baking powder,sugar,salt,milk,butter
						</span>

						<span class="txt22 m-t-20">
							Rs. 150
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="150">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/donut_lead.jpg" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Donuts
						</a>

						<span class="txt23">
							Milk,dry yeast,butter,suger,salt,flour,oil
						</span>

						<span class="txt22 m-t-20">
							Rs. 150
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="150">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/cupcake.jfif" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Cupcakes
						</a>

						<span class="txt23">
							Butter,caster suger,vanilla extract,raising flour
						</span>

						<span class="txt22 m-t-20">
							Rs. 140
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="140">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>
			</div>

			<div class="col-md-8 col-lg-6 m-l-r-auto">
				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/brownies.jfif" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							brunnie
						</a>

						<span class="txt23">
							Dark chocolate,butter,suger,yogurt,vanilla essence,cocoa powder,milk
						</span>

						<span class="txt22 m-t-20">
							Rs. 150
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="150">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>

				<!-- Block3 -->
				<div class="blo3 flex-w flex-col-l-sm m-b-30">
					<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
						<a href="#"><img src="cafe/pastry.jfif" alt="IMG-MENU"></a>
					</div>

					<div class="text-blo3 size21 flex-col-l-m">
						<a href="#" class="txt21 m-b-3">
							Pastries
						</a>

						<span class="txt23">
							Butter,suger,yogurt,vanilla essence,chocolate syrup,cream,choco chips
						</span>

						<span class="txt22 m-t-20">
							Rs. 120
							<form action="http://localhost/shlok/new2/add.php" method="post">
								<input type="hidden" name="food" value="Mocha">
								<input type="hidden" name="price" value="120">
								Quantity:<input type="number" name="number" value="1" style = "margin-left: 10px;width: 70px;">
							<input type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10"  value="ADD" >
							</form>
						</span>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- Sign up -->
<!-- <div class="section-signup bg1-pattern p-t-85 p-b-85">
	<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
		<span class="txt5 m-10">
			Specials Sign up
		</span>

		<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
			<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
			<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
		</div> -->

		<!-- Button3 -->
		<!-- <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
			Sign-up
		</button>
	</form>
</div> -->

	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Rcti clg,Infront of sola Civil,S.G.Highway,Ahmedabad
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							94285 93882
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							DreamsCafe123@gmail.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Opening Times
					</h4>

					<ul>
						<li class="txt14">
							09:30 AM – 11:00 PM
						</li>

						<li class="txt14">
							Every Day
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Latest twitter
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@dreamscafe
						</a>

						<p class="txt14 m-b-18">
							Drinking coffee can reduce the risk of depression.
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							20 Jan 2023
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@dreamscafe
						</a>

						<p class="txt14 m-b-18">
							Drinking coffee can reduce the risk of depression.
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							20 Jan 2023
						</span>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-04.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-04.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-08.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-08.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-12.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-12.jpg" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2023 All rights reserved  |  This is mananage by Dreamscafe team <i class="fa fa-heart"></i> by <a href="http://localhost/shlok/new2/index.php" target="_blank">Dreamscafe</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>


<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

