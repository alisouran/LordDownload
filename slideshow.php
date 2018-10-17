<div class="container">
    	<!--Start SlideShow And LastPost,...-->
      <div class="col-lg-8 col-md-8 hidden-sm hidden-xs slide-show-div">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <h3>عنوان اول</h3>
                <p class="mahdode">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora labore nulla recusandae at et qui. Suscipit esse architecto ipsam, blanditiis eius repellat quia accusantium hic rem! Deleniti cumque saepe iusto!</p>
              </div>
            </div>
      
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="Chicago" style="width:100%;">
              <div class="carousel-caption">
                <h3>عنوان دوم</h3>
                <p class="mahdode">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum consequatur explicabo nesciunt! Nemo asperiores excepturi, veniam ducimus maxime corrupti consequatur iusto quam nulla.</p>
              </div>
            </div>
          
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="New york" style="width:100%;">
              <div class="carousel-caption">
                <h3>عنوان سوم</h3>
                <p class="mahdode">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus enim commodi placeat ratione voluptate officia, voluptas odit veniam, quod earum explicabo nisi. Debitis fugiat rerum delectus placeat totam quas autem.</p>
              </div>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="New york" style="width:100%;">
              <div class="carousel-caption">
                <h3>عنوان چهارم</h3>
                <p class="mahdode">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus enim commodi placeat ratione voluptate officia, voluptas odit veniam, quod earum explicabo nisi. Debitis fugiat rerum delectus placeat totam quas autem.</p>
              </div>
            </div>
          </div>
      
          
        </div>
      </div>

      <div class="col-lg-4 col-md-4 hidden-sm hidden-xs taghir-chap">
                
        <div class="tab">
          <button class="tablinks active" onclick="openCity(event, 'NewPost')">تازه ها</button>
          <button class="tablinks" onclick="openCity(event, 'Tags')">برچسب ها</button>
          <button class="tablinks" onclick="openCity(event, 'Comments')">کامنت ها</button>
        </div>

        <div id="NewPost" class="tabcontent">
          <h4>پست 1</h4>
          <p>تاریخ و این چیزا</p>
          <p>قسمت توضیحات برای پست جدید این قسمت توضیحات برای پست جدید...</p>
          <hr>
          <h4>پست 2</h4>
          <p>تاریخ و این چیزا</p>
          <p>قسمت توضیحات برای پست جدید این قسمت توضیحات برای پست جدید...</p>
          <hr>
          <h4>پست 3</h4>
          <p>تاریخ و این چیزا</p>
          <p>قسمت توضیحات برای پست جدید این قسمت توضیحات برای پست جدید...</p>
        </div>

        <div id="Tags" class="tabcontent">
          <h4>برچسب ها</h4>
          <a href="#">برچسب 1<span class="badge">42</span></a>
          <a href="#">برچسب 2<span class="badge">40</span></a>
          <a href="#">برچسب 3<span class="badge">45</span></a>
          <hr id="hr">
          <a href="#">برچسب 4<span class="badge">20</span></a>
        </div>

        <div id="Comments" class="tabcontent">
          <h4>شخص کامنت 1</h4>
          <p>تاریخ و این چیزا</p>
          <p>قسمت توضیحات برای پست جدید این قسمت توضیحات برای پست جدید...</p>
          <hr>
          <h4>شخص کامنت 2</h4>
          <p>تاریخ و این چیزا</p>
          <p>قسمت توضیحات برای پست جدید این قسمت توضیحات برای پست جدید...</p>
          <hr>
          <h4>شخص کامنت 3</h4>
          <p>تاریخ و این چیزا</p>
          <p>قسمت توضیحات برای پست جدید این قسمت توضیحات برای پست جدید...</p>
        </div>
      </div>
    <!--End SlideShow And LastPost,...-->
    </div>