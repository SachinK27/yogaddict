<?php
	session_start();
	define('ACCESS_ALLOWED',TRUE);
	require_once('../config/define.php');
	$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Yoga Blogs - Yogaddict</title>
	<?php include(ROOT_PATH."includes/links.php");?>
</head>
<body>
<!-- Navbar -->
	<?php include (ROOT_PATH."includes/nav.php");?>
<!-- Navbar ends -->

<!-- Blogs -->
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 sample_blogs margin_top_only">
					<h1>BLOGS:</h2>
					<div class="col-xs-12 col-sm-12 col-md-12 sample_blogs_subcat">
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/assets/imgs/blog_1.webp" class='sample_blogs_imgs'>
						</div>
						<div class="col-md-7">
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_text_date">May 10, 2019</p>
								<p class="sample_blogs_text_title">How a Daily Meditation Practice Helps You Find Trust</p>
								<p class="sample_blogs_text_article" href="<?php echo BASE_URL;?>pages/article.php">One of the nice things about meditation is that when we sit with these moments as they arise, we start to trust in them and in the dark grace.</p>
							</a>
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_read_more">Read More -></p>
							</a>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 sample_blogs_subcat">
						<div class="col-md-7">
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_text_date_right">May 15, 2019</p>
								<p class="sample_blogs_text_title_right">5 Poses to Inspire More Self-Love, Less Self Smack-Talk</p>
								<p class="sample_blogs_text_article_right" href="<?php echo BASE_URL;?>pages/article.php">It’s all too easy to put ourselves down. Here’s how to use your practice to stop, once and for all.</p>
							</a>
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_read_more_right">Read More -></p>
							</a>
						</div>
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/assets/imgs/blog_2.webp" class='sample_blogs_imgs'>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 sample_blogs_subcat">
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/assets/imgs/slider_5.jpg" class='sample_blogs_imgs'>
						</div>
						<div class="col-md-7">
							<a href="<?php echo BASE_URL;?>pages/article.php">	
							<p class="sample_blogs_text_date">May 20, 2019</p>
							<p class="sample_blogs_text_title">These Exercises Will Teach You How to Prevent Shoulder Injuries</p>
							<p class="sample_blogs_text_article" href="<?php echo BASE_URL;?>pages/article.php">Ever experience shoulder pain in your yoga practice? Have a nagging shoulder injury that you can’t quite kick? Here, yoga teacher Benjamin Sears demonstrates practical exercises to better understand your shoulders, optimize the way they function, and both prevent and heal shoulder injuries.</p>
							</a>
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_read_more">Read More -></p>
							</a>`
						</div>
					</div>

					
					<div class="col-xs-12 col-sm-12 col-md-12 sample_blogs_subcat">
						<div class="col-md-7">
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_text_date_right">May 25, 2019</p>
								<p class="sample_blogs_text_title_right">Stand Tall & Steady: 10 Yoga Sequences for the Legs</p>
								<p class="sample_blogs_text_article_right" href="<?php echo BASE_URL;?>pages/article.php">Falling out of Tree Pose? Learn how to build a solid foundation from the ground up with these yoga sequences that target the leg muscles.</p>
							</a>
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_read_more_right">Read More -></p>
							</a>
						</div>
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/assets/imgs/slider_6.jpg" class='sample_blogs_imgs'>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 sample_blogs_subcat">
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/assets/imgs/blog_5.webp" class='sample_blogs_imgs'>
						</div>
						<div class="col-md-7">
							<a href="<?php echo BASE_URL;?>pages/article.php">	
							<p class="sample_blogs_text_date">May 30, 2019</p>
							<p class="sample_blogs_text_title">This 7-Pose Home Practice Harnesses the Power of Touch</p>
							<p class="sample_blogs_text_article" href="<?php echo BASE_URL;?>pages/article.php">Looking to cultivate more connection with yourself—and with others? Want to experience the oneness versus otherness so many yoga teachers talk about? This sequence will show you how.</p>
							</a>
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_read_more">Read More -></p>
							</a>
						</div>
					</div>
					<div class="last_div">
						<a href="<?php echo BASE_URL;?>pages/blogs.php"><button type="submit" class="more_blogs_btn btn btn-primary">See More</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Blogs ends -->

<!-- Footer Start-->
	<?php require_once(ROOT_PATH."includes/footer.php");?>
<!-- Footer Ends Here-->

	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
</body>
</html>