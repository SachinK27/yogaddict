<?php
  session_start();
  define('ACCESS_ALLOWED',TRUE);
  require_once('../config/define.php');
  $currentPage = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Benefits of Yoga that you should know! - Yogaddict</title>
  <?php include(ROOT_PATH."includes/links.php");?>
</head>
<body>
<!-- Navbar -->
  <?php include (ROOT_PATH."includes/nav.php");?>
<!-- Navbar ends -->

<!-- Article -->
  <article class="container">
    <div class="mycont">
      <div class="row">
        <!-- Main Article -->
        <div class="margin_top_only col-lg-9 col-md-9 col-xs-12 col-sm-12">
          <h2 class="article_title">Benefits of Yoga that you should know!</h2>
          <h5 class="article_by"><u>John Doe - November 4, 2019</u></h5>
            <a href="https://www.facebook.com/" class="social_links"><img src="<?php echo BASE_URL;?>/assets/imgs/fb_icon_rev.png" width="30px"></a>
            <a href="https://www.instagram.com/" class="social_links"><img src="<?php echo BASE_URL;?>/assets/imgs/insta_icon_rev.png" width="30px"></a>
            <a href="https://twitter.com/" class="social_links"><img src="<?php echo BASE_URL;?>/assets/imgs/twitter_icon_rev.png" width="30px"></a>

          <div class="artic">

            <div class='sample_artic_imgs'>
              <img src="<?php echo BASE_URL;?>/assets/imgs/article1.jpg" width="70%">
            </div>

            <p>Yoga is a spiritual, mental and physical practice that has been around since ages. With time, people have discovered a number of health benefits associated with yoga. Yoga does more than burning calories and strengthening muscles, it is a workout which involves both body and mind.</p>

            <p>This International Yoga Day start a good habit and promise yourself the following health benefits:</p>

            <h2 class="section-heading">Improves posture</h2>

            <p>Working for long hours on a desk could not only hurt your spine but also make you feel tired at the end of the day. Practicing certain yoga asanas could help you in improving your posture and also prevent pain in your neck and lower back.</p>

            <h2 class="section-heading"> Increases flexibility</h2>

            <p>When was the last time you wished you could easily touch your toes which bending forward? Well, practicing yoga could help you in that. Yoga can not only help you in increasing your flexibility but also let you perform complex asanas.</p>

            <div class='sample_artic_imgs'>
              <img src="<?php echo BASE_URL;?>/assets/imgs/article2.jpg" width="70%">
            </div>

            <h2 class="section-heading">Builds muscle strength</h2>

            <p>Yoga could help in strengthening weak muscles of the body. It helps in toning which prevents frequent straining of the muscles.</p>

            <h2 class="section-heading">Boosts metabolism</h2>

            <p>Yoga helps in retaining the vitality in your body along with keeping it fit. It motivates you towards healthy eating and improves the metabolic system of the body.</p>

            <h2 class="section-heading">Helps in lowering blood sugar</h2>

            <p>Yoga not only helps in lowering blood sugar but also lowers bad cholesterol and boosts good cholesterol. It encourages weight loss and improves the body’s sensitivity to insulin.</p>

            <div class='sample_artic_imgs'>
              <img src="<?php echo BASE_URL;?>/assets/imgs/article3.jpg" width="70%">
            </div>

            <h2 class="section-heading">Increases blood flow</h2>

            <p>The relaxation exercises in yoga regulates blood to all parts of your body. Exercises such as handstand, helps venous blood from the lower part of the body to flow back to your heart, where it can be pumped back to the lungs to be oxygenated.</p>

            <h2 class="section-heading">Keep diseases at bay</h2>

            <p>Yoga exercises have a beneficial effect on the immune system. It not only helps in destroying various viruses we catch during season change, but also boosts our immunity to fight off diseases.</p>

            <h2 class="section-heading">Increases self-esteem</h2>

            <p>Practicing yoga would help you explore a different side of yourself. It would make you feel good about yourself and helps you take a positive approach in life.</p>

            <div class='sample_artic_imgs'>
              <img src="<?php echo BASE_URL;?>/assets/imgs/article4.jpg" width="70%">
            </div>

            <h2 class="section-heading">Improves lung function</h2>

            <p>A lot of breathing exercises are said to improve lung function. Doing such exercises in a long run could cure respiratory problems. It also increases the capacity of your lungs.</p>

            <h2 class="section-heading">Helps you sleep better</h2>

            <p>Yoga helps in reducing stress and creates a routine which in turn makes a regular sleeping pattern. A relaxed body gets a deeper and more peaceful sleep.</p>
          </div>

          <div class="related_article">

          </div>
        </div>

        <!-- Sidebar hidden in mobile devices -->
        <div class="margin_top_only2 col-lg-3 col-md-3">
          <h2 class="thumb_title">You May Also Like</h2>
            <div class="thumbnail">
              <a href="<?php echo BASE_URL;?>pages/article.php">
                <img src="<?php echo BASE_URL;?>/assets/imgs/blog_2.webp" alt="blog">
                <div class="caption">
                  <h4>5 Poses to Inspire More Self-Love, Less Self Smack-Talk</h4>
                </div>
              </a>
            </div>
            <div class="thumbnail">
              <a href="<?php echo BASE_URL;?>pages/article.php">
                <img src="<?php echo BASE_URL;?>/assets/imgs/blog_1.webp" alt="blog">
                <div class="caption">
                  <h4>How a Daily Meditation Practice Helps You Find Trust</h4>
                </div>
              </a>
            </div>
            <div class="thumbnail">
              <a href="<?php echo BASE_URL;?>pages/article.php">
                <img src="<?php echo BASE_URL;?>/assets/imgs/slider_5.jpg" alt="blog">
                <div class="caption">
                  <h4>These Exercises Will Teach You How to Prevent Shoulder Injuries</h4>
                </div>
              </a>
            </div>
            <div class="thumbnail">
              <a href="<?php echo BASE_URL;?>pages/article.php">
                <img src="<?php echo BASE_URL;?>/assets/imgs/slider_6.jpg" alt="blog">
                <div class="caption">
                  <h4>Stand Tall & Steady: 10 Yoga Sequences for the Legs</h4>
                </div>
              </a>
            </div>
          <a href="<?php echo BASE_URL;?>/pages/login_signup.php"><img width="100%" src="<?php echo BASE_URL;?>/assets/imgs/sidebar.png" class="sidebar"></a>
        </div>

      </div>
    </div>
  </article>
  <hr> 
  <article class="container">
    <div class="mycont">
      <div class="row">
        <!-- Recent Blogs -->
        <div class="container">
          <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
            <h2 class="thumb_title">Recent Blogs</h2>

            <div class="col-md-3 col-lg-3">
              <div class="thumbnail">
                <a href="<?php echo BASE_URL;?>pages/article.php">
                  <img src="<?php echo BASE_URL;?>/assets/imgs/blog_2.webp" alt="blog">
                  <div class="caption">
                    <h4>5 Poses to Inspire More Self-Love, Less Self Smack-Talk</h4>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-3 col-lg-3">
              <div class="thumbnail">
                <a href="<?php echo BASE_URL;?>pages/article.php">
                  <img src="<?php echo BASE_URL;?>/assets/imgs/blog_1.webp"alt="blog">
                  <div class="caption">
                    <h4>How a Daily Meditation Practice Helps You Find Trust</h4>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-3 col-lg-3">
              <div class="thumbnail">
                <a href="<?php echo BASE_URL;?>pages/article.php">
                  <img src="<?php echo BASE_URL;?>/assets/imgs/slider_5.jpg" alt="blog">
                  <div class="caption">
                    <h4>These Exercises Will Teach You How to Prevent Shoulder Injuries</h4>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-3 col-lg-3">
              <div class="thumbnail">
                <a href="<?php echo BASE_URL;?>pages/article.php">
                  <img src="<?php echo BASE_URL;?>/assets/imgs/slider_6.jpg" alt="blog">
                  <div class="caption">
                    <h4>Stand Tall & Steady: 10 Yoga Sequences for the Legs</h4>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>

        <!-- Comment -->
        <div class="comments container">
          <div class="col-xs-12 col-md-12 col-lg-12">
            <h2 class="thumb_title">Comments</h2>
            <form>
              <textarea class="txtarea_comment form-control" placeholder="Whats on your mind?" rows="4" cols="100">
              </textarea>
              <button type="submit" class="btnbx btn btn-primary">Comment</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </article>
<!-- Article Ends Here-->

<!-- Footer Start-->
  <?php require_once(ROOT_PATH."includes/footer.php");?>
<!-- Footer Ends Here-->

  <script type="text/javascript" src="jquery/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
</body>
</html>
