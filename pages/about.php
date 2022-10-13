<?php
	session_start();
	define('ACCESS_ALLOWED',TRUE);
	require_once('../config/define.php');
	$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us - Yogaddict</title>
	<?php include(ROOT_PATH."includes/links.php");?>

</head>
<body>
<!-- Navbar -->
	<?php include (ROOT_PATH."includes/nav.php");?>
<!-- Navbar ends -->

<!-- About Us -->
	<div class="container-fluid mycontfluid_about">
		<!-- <img src="<?php echo BASE_URL;?>/assets/imgs/about_us10.jpg" width="100%"> -->
		<h1 align="center">“The body is your temple. <br> Keep it pure and clean for the soul to reside in.”</h1>
	</div>
	<div class="container-fluid">
		
		<div class="container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-10 mx-auto">
						<h1 class="sample_blogs">Our Team</h2>
						<div class="col-lg-3 col-xs-6">
							<img src="<?php echo BASE_URL;?>/assets/imgs/team-2.jpg" width="100%">
							<p class="name_title">John Doe</p>
						</div>
						<div class="col-lg-3 col-xs-6">
							<img src="<?php echo BASE_URL;?>/assets/imgs/team-3.jpg" width="100%">
							<p class="name_title">Juan Perez</p>
						</div>
						<div class="col-lg-3 col-xs-6">
							<img src="<?php echo BASE_URL;?>/assets/imgs/team-4.jpg" width="100%">
							<p class="name_title">Jean Stewer</p>
						</div>
						<div class="col-lg-3 col-xs-6">
							<img src="<?php echo BASE_URL;?>/assets/imgs/team-5.jpg" width="100%">
							<p class="name_title">Fred Nerk</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="about_us">
			<div class="container">
				<div class="col-lg-12 col-md-10 mx-auto about_us">
						<h1 class="sample_blogs">About Us</h2>
						<p class="artic">
						Yoga has made me more self-aware, both of my body and of my mind. One of the most useful benefits I've gotten is that yoga helps to slow down my consciousness so that I can notice when I am about to get out of balance - literally, such as when I am about to fall out of a pose but I can slow down and correct myself, but also mentally, such as when I find myself becoming angry or upset, and there also I can slow down and observe the process, and take steps to change it, rather than allow the reaction to overcome me.
						</p>
						<p class="artic">
						There's also a certain type of integration I have now from my yoga practice. Whereas before I would usually think of one body part at a time, or focus on one thought at a time, I can now see my body as an integrated whole and feel all of it at once, from the skin to the internal organs to the bones. The same is true (occasionally) of my mind, where I can experience the whole storm of thoughts without being swept up in them.
						</p>
						<p class="artic">
						Yoga also helps in relating to other people, since it promotes the idea that, underneath our bodies, before we are men or women, we are all pure consciousness, and that there is a part of each of us that is linked in a basic way with every other conscious being, and that helps to see other people as though they are all members of our own family. 

						</p>
					</div>
			</div>
		</div>
	</div>
<!-- About Us ends -->

<!-- Footer Start-->
	<?php include(ROOT_PATH."includes/footer.php")?>
<!-- Footer Ends Here-->

	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
</body>
</html>