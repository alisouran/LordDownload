<!doctype html>
<html lang="fa">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title><?php bloginfo("name"); wp_title(); ?> </title>
    <?php wp_head(); ?>
  </head>
  <body>
   
    <div class="container">
      <!--Start: Logo va samt rast va chap logo-->
      <div class="row">
        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs ">
          <div class="row">
            <ul class="top-list-ul">
              <li class="top-list"><a href="#">لرد آپلود</a></li>
              <li class="separator glyphicon glyphicon-certificate"></li>
              <li class="top-list"><a href="#">سریال نود ۳۲</a></li>
              <li class="separator glyphicon glyphicon-certificate"></li>
              <li class="top-list"><a href="#">جدید ترین نرم افزار ها</a></li>
            </ul>
          </div>
          <div class="row row-white matn-row-1 hidden-md hidden-sm hidden-xs">
            خبر نرم افزاری روز
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 logo-bg">
            <div class="row row-white hidden-md hidden-sm hidden-xs ">
              <div class="trapezoid hidden-md">
                <div class="title"><a href="<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a></div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
            <div class="row">
                <ul class="top-list-ul">
                  <li class="top-list">امروز ۲۳ خرداد ۹۴</li>
                  <li class="top-list" ><img class="img-responsive img-n" src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt=""></li>
                  <li class="top-list" ><img class="img-responsive img-n" src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt=""></li>
                  <li class="top-list" ><img class="img-responsive img-n" src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt=""></li>
                </ul>
              </div>
              <div class="row row-white matn-row-2 hidden-md hidden-sm hidden-xs">
                  <div class="circle">
                      <span class="glyphicon glyphicon-phone phone-span"></span>
                  </div> 
                  <span class="span-matn">شارژ همراه</span>
              </div>
        </div>
      <!--End: Logo va samt rast va chap logo-->
      </div>
      <!--Start: Navbar-->
      <div class="row">
          <nav class="navbar navbar-default  color-navbar">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav nav1">
                    <li ><a  href="#">صفحه اصلی <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">محصولات</a></li>
                    <li><a href="#">مقالات</a></li>
                    <li><a href="#">آموزش</a></li>
                    <li><a href="#">تماس با ما</a></li>
                    <li><a href="#">درباره ما</a></li>
                    <li class="hidden-lg hidden-md"><a href="#">ثبت نام</a></li>
                    <li class="hidden-lg hidden-md"><a href="#">ورود</a></li>
                    <li class="hidden-lg hidden-md hidden-sm">
                      <form action="">
                        <input type="text" name="" id="">
                        <button><span class="fas fa-search"></span></button>
                      </form>
                    </li>
                  </ul>
                  <div>
                      <ul>
                          <li class="tel-phone hidden-sm hidden-xs">
                            <span class="fab fa-telegram-plane "></span>
                            <span>09388179097</span>
                          </li>
                          <br>
                          <li class="tel-phone hidden-sm hidden-xs">
                            <span class="fas fa-phone "></span>
                            <span>09377472015</span>
                          </li>
                        </ul>
                  </div>
                  <a class="" href="">
                    <img class=" img-responsive size-logo hidden-sm hidden-xs" src="<?php echo get_template_directory_uri(); ?>/img/asd.png" alt="logo">
                  </a>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
      </div>
      <!--End: Navbar-->

      <div class="row">
        <div class="header-img hidden-xs">
          <!-- <img src="img/1.jpg" alt="header" class="img-responsive header-img  hidden-xs "> -->
         <div class="row">
           <div class=" row1-header col-lg-4 col-md-4 hidden-sm hidden-xs">
             <button>ثبت نام</button>
             <button>ورود</button>
           </div>
           <div class=" row1-header col-lg-8 col-md-8">
             <div class="moteharek">
               <a href="#" class="matn-moteharek"> 1یه نوشته داخلشه که متحرکه</a>
               <a href="#" class="matn-moteharek"> 2یه نوشته داخلشه که متحرکه</a>
               <a href="#" class="matn-moteharek"> 3یه نوشته داخلشه که متحرکه</a>
             </div>
             <div>
               <form action="" class="search-style">
                 <input class="search-input" type="text" name="" id="">
                 <button class="search-button"><span class="fas fa-search"></span></button>
               </form>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="button-row">
             <button>دانلود نرم افزار</button>
             <button>مقاله روانشناسی</button>
             <button>دانلود فایل</button>
             <button>مقاله مذهبی</button>
             <button>پایان نامه</button>
           </div>
         </div>
        </div>
      </div>

      <!--Start nav2-->
      <div class="row hidden-sm hidden-xs">
        <nav class="navbar navbar-default  color-navbar2">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="#">صفحه اصلی <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">انجمن شبکه</a></li>
                  <li><a href="#">دانلود پروژه معماری</a></li>
                  <li><a href="#">دانلود پروژه سیسکو</a></li>
                  <li><a href="#">فایل های آموزشی شبکه</a></li>
                  <li><a href="#">پشتیبانی وب</a></li>

                </ul>

                <ul class="nav navbar-nav">
                  <li><a href="#" class="fab fa-facebook-square "></a></li>
                  <li><a href="#" class="fab fa-telegram "></a></li>
                  <li><a href="#" class="fab fa-instagram"></a></li>
                  <li><a href="#" class="fab fa-google-plus-square "></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
    </div>

    <!--end Nav2-->
    </div><!-- ./header container-->