            <?php get_header(); ?>
              <div class="container">
                    <?php include("inc/right-sidebar.php"); ?>
                      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 color-posts-co">
                        <?php 
                          while(have_posts()){
                          the_post();
                          
                          ?>                          


                        <div class="row">
                          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>

                        <div class="row">
                          
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single-post">
                            <?php the_content(); ?>
                        </div>

                        <div class="row">
                                <p class="etelaate-post">ارسال توسط: ادمین   در روز:تاریخ   در:وارد کردن قسمت   تعداد نظرات   نمایش:تعداد نمایش   لایکها</p>
                              </div>
                        </div>

                          <?php
                        }
                        ?>

                      </div>
                      </div>

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