<?php get_header(); ?>
<?php include("inc/slideshow.php"); ?>
<div class="container">
	<?php include("inc/right-sidebar.php") ?>
      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 color-posts-co">

      	<?php

      		while (have_posts()) {
      			the_post();
      			?>

      			<div class="row">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <div class="row">
          <div class="etelaate-post">
          	<p class="sub1">ارسال توسط <?php the_author(); ?></p>
          	<p class="sub1"><?php echo get_the_date(); ?></p>
          	<p class="sub1">در <?php the_category(" و "); ?></p>
          	<p class="sub1">تعداد نظرات <?php echo get_comments_number(); ?></p>
          	<p class="sub1"><?php the_tags(); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="<?php the_post_thumbnail(); ?>" class="img-responsive" alt="">
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <?php the_content(""); ?>
            <a href="<?php the_permalink(); ?>">بیشتر بخوانید...</a>
          </div>
        </div>
        <hr id="hr">
        

      			<?php
      		}

      	 ?>

        
      </div>

      <?php include("inc/left-sidebar.php") ?>
      
</div><!-- ./content container-->
<!--Start footer-->
<hr id="hr">
<div class="container">
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-style">
    طراحی سایت توسط علی رضا سوران
  </div>  
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-style">
    تمامی حقوق این سایت متعلق به نام سایت می باشد
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-style">
    شماره تماس: شماره
  </div>
</div>

 <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.js"></script>
 <!-- Optional JavaScript -->
 <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js" ></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
  }
  </script>
  
  </body>
</html>