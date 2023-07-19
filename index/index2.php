

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> NOURISH Kids </title>

	<!-- swiper css link  -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="../css/style.css">
    <style>
        .email {
            font-size: 18px;
            color: #333;
            text-align: right;
        }
    </style>

</head>

<body>

	<!-- header section starts  -->

	<section class="header">

		<a href="index.php" class="logo">
			<img src="../images/logo-3.jpg" alt="">
		</a>
		<h1 style="color: rgb(60, 95, 117); font-size: 300%; text-align: left; "> NOURISH KIDS</h>

        <div class="email">
        <?php
        session_start();
        echo $_SESSION['email'];
        ?>
    </div>


		<nav class="navbar">
			<a href="">Home</a>
			<a href="">About</a>
			<a href="">Contact</a>
			<?php
			if (!isset($_SESSION['id'])) {
			?>
				
			<?php
			}
			?>

			<?php
		
			if (isset($_SESSION['id'])) {
			?>
				<a href="../login_register/logout.php" class="login">Logout</a>
				<a href ="">Welcome, <?php echo ($_SESSION['email']);?></a>
			<?php
			}
			?>
			
		</nav>

		<div id="menu-btn" class="fas fa-bars"></div>

	</section>

	<!-- header section ends -->

	<!-- home section starts  -->

	<section class="home">

		<div class="swiper home-slider">

			<div class="swiper-wrapper">

				<div class="swiper-slide slide" style="background:url(../images/home-slide-2.jpg) no-repeat">
					<div class="content">
						<span>Reached 1000 children</span>
						<h3>Around Nairobi</h3>
						<a href="package.php" class="btn">discover more</a>
					</div>
				</div>

				<div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
					<div class="content">
						<span>explore, discover, travel</span>
						<h3>discover new places</h3>
						<a href="package.php" class="btn">discover more</a>
					</div>
				</div>

				<div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
					<div class="content">
						<span>explore, discover, travel</span>
						<h3>make your tour worthwhile</h3>
						<a href="package.php" class="btn">discover more</a>
					</div>
				</div>

			</div>

			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>

		</div>

	</section>

	<!-- home section ends -->

	<!-- services section starts  -->

	<section class="services">

		<h1 class="heading-title"> our services </h1>

		<div class="box-container">

			<div class="box">
				<img src="../../images/icon-7.png" alt="">
				<a href="../data1.php">
					<h3>View Food Available</h3>
				</a>
			</div>

			<div class="box">
				<img src="../../images/icon-8.png" alt="">
				<a href="../login_register/logout.php">
					<h3>Log out?</h3>
				</a>
			</div>

			<div class="box">
				<img src="../../images/icon-7.png" alt="">
				<a href="../contactus.php">
					<h3> Contact us</h3>
				</a>
			</div>
<!--
			<div class="box">
				<img src="../../images/icon-8.png" alt="">
				<a href="index_transport.php">
					<h3>Transport Offers</h3>
				</a>
			</div>

		</div>
-->

	</section>

	<!-- services section ends -->

	<!-- home about section starts  -->

	<section class="home-about">

		<div class="image">
			<img src="../images/home-slide-1.jpg"  style="height:100;width:500px;" alt="">
		</div>

		<div class="content">
			<h3>About us</h3>
			<p>Established in 2020, Nourish Kids is a web-application that has the potential to address two critical issues in Kenya by reducing food waste and providing nutrition to vulnerable children.</p>
			<a href="" class="btn">read more</a>
		</div>

	</section>

	<!-- home about section ends -->

	<!-- home packages section starts  -->

	<section class="home-packages">

		<h1 class="heading-title"> All are welcome </h1>

		<div class="box-container">

			<div class="box">
				<div class="image">
					<img src="../images/juice.jpg" alt="">
				</div>
				<div class="content">
					<h3>Juice</h3>
					<p>Apple juice also increases acetylcholine in the brain, which gets you increased memory</p>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="../images/food.jpg" alt="">
				</div>
				<div class="content">
					<h3>Food</h3>
					<p>Potatoes were the first vegetable to be grown in space </p>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="../images/fruits.jpg" alt="">
				</div>
				<div class="content">
					<h3> Fruits</h3>
					<p>Bananas are berries... and strawberries aren't!</p>
				</div>
			</div>

		</div>

	</section>


	<!-- home packages section ends -->







	<!-- footer section starts  -->

	<section class="footer">

		<div class="box-container">

			<div class="box">
				<h3>quick links</h3>
				<a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
				<a href=""> <i class="fas fa-angle-right"></i> about</a>
				<a href=""> <i class="fas fa-angle-right"></i> view food</a>
				<a href=""> <i class="fas fa-angle-right"></i> learn more</a>
			</div>

			<div class="box">
				<h3>extra links</h3>
				<a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
				<a href="#"> <i class="fas fa-angle-right"></i> about us</a>
				<a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
				<a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
			</div>

			<div class="box">
				<h3>contact info</h3>
				<a href="#"> <i class="fas fa-phone"></i> 0759792595 </a>
				<a href="#"> <i class="fas fa-phone"></i> 0712345678 </a>
				<a href="#"> <i class="fas fa-envelope"></i> nourish@gmail.com </a>
				<a href="#"> <i class="fas fa-map"></i> Nairobi, Kenya</a>
			</div>

			<div class="box">
				<h3>follow us</h3>
				<a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
				<a href="#"> <i class="fab fa-twitter"></i> twitter </a>
				<a href="#"> <i class="fab fa-instagram"></i> instagram </a>
				<a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
			</div>

		</div>

		<div class="credit"> created by <span>NourishKids</span> | all rights reserved &copy; </div>

	</section>

	<!-- footer section ends -->









	<!-- swiper js link  -->
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<!-- custom js file link  -->
	<script src="../js/script.js"></script>

</body>

</html>