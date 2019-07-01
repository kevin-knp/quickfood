
<div id="preloader">
    <div class="sk-spinner sk-spinner-wave" id="status">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div><!-- End Preload -->

<!-- Header ================================================== -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="index.html" id="logo">
                <img src="<?php echo base_url('frontend_assets/img/logo.png'); ?>" width="190" height="23" alt="" data-retina="true" class="hidden-xs">
                <img src="<?php echo base_url('frontend_assets/img/logo_mobile.png'); ?>" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
                <div id="header_menu">
                    <img src="<?php echo base_url('frontend_assets/img/logo.png');?>" width="190" height="23" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                <ul>
                    <li class="submenu"><a href="#">Home</a></li>
                    <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Restaurants<i class="icon-down-open-mini"></i></a>
                    <ul>
                        <li><a href="list_page.html">Row listing</a></li>
                        <li><a href="map_listing.html">Map listing</a></li>
                    </ul>
                    </li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="about.html">Contact us</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#register">Register</a></li>
                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
</header>
<!-- End Header =============================================== -->

<!-- SubHeader ================================================ -->
<section class="header-video">
    <div id="hero_video">
        <div id="sub_content">
            <h1>Order Takeaway or Delivery Food</h1>
            <p>
                Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
            </p>
            <form method="post" action="list_page.html">
                <div id="custom-search-input">
                    <div class="input-group">
                        <input type="text" class=" search-query" placeholder="Your Address or postal code">
                        <span class="input-group-btn">
                        <input type="submit" class="btn_search" value="submit">
                        </span>
                    </div>
                </div>
            </form>
        </div><!-- End sub_content -->
    </div>
    <img src="<?php echo base_url('frontend_assets/img/video_fix.png');?>" alt="" class="header-video--media" data-video-src="" data-teaser-source="<?php echo base_url('frontend_assets/video/intro');?>" data-provider="" data-video-width="1920" data-video-height="960">
    <div id="count" class="hidden-xs">
        <ul>
            <li><span class="number">2650</span> Restaurant</li>
            <li><span class="number">5350</span> People Served</li>
            <li><span class="number">12350</span> Registered Users</li>
        </ul>
    </div>
</section><!-- End Header video -->
<!-- End SubHeader ============================================ -->

<!-- Content ================================================== -->
<div class="container margin_60">
    
    <div class="main_title">
        <h2 class="nomargin_top" style="padding-top:0">How it works</h2>
        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="box_home" id="one">
                <span>1</span>
                <h3>Search by address</h3>
                <p>
                    Find all restaurants available in your zone.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="two">
                <span>2</span>
                <h3>Choose a restaurant</h3>
                <p>
                    We have more than 1000s of menus online.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="three">
                <span>3</span>
                <h3>Pay by card or cash</h3>
                <p>
                    It's quick, easy and totally secure.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="four">
                <span>4</span>
                <h3>Delivery or takeaway</h3>
                <p>
                    You are lazy? Are you backing home?
                </p>
            </div>
        </div>
    </div><!-- End row -->
    
    <div id="delivery_time" class="hidden-xs">
        <strong><span>2</span><span>5</span></strong>
        <h4>The minutes that usually takes to deliver!</h4>
    </div>
</div><!-- End container -->
        
<div class="white_bg">
    <div class="container margin_60">
        
        <div class="main_title">
            <h2 class="nomargin_top">Choose from Most Popular</h2>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset.
            </p>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <a href="detail_page.html" class="strip_list">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="<?php echo base_url('frontend_assets/img/thumb_restaurant.jpg');?>" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Taco Mexican</h3>
                        <div class="type">
                            Mexican / American
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
               <a href="detail_page.html" class="strip_list">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="<?php echo base_url('frontend_assets/img/thumb_restaurant_2.jpg');?>" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Naples Pizza</h3>
                        <div class="type">
                            Italian / Pizza
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <a href="detail_page.html" class="strip_list">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="<?php echo base_url('frontend_assets/img/thumb_restaurant_3.jpg');?>" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Japan Food</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            <div class="col-md-6">
                <a href="detail_page.html" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="<?php echo base_url('frontend_assets/img/thumb_restaurant_4.jpg');?>" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Sushi Gold</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_close_alt2 no"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <a href="detail_page.html" class="strip_list">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="<?php echo base_url('frontend_assets/img/thumb_restaurant_5.jpg');?>" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Dragon Tower</h3>
                        <div class="type">
                            Chinese / Thai
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <a href="detail_page.html" class="strip_list">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="<?php echo base_url('frontend_assets/img/thumb_restaurant_6.jpg');?>" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>China Food</h3>
                        <div class="type">
                            Chinese / Vietnam
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
            </div>
        </div><!-- End row -->   
        
    </div><!-- End container -->
</div><!-- End white_bg -->
    
<div class="high_light">
  	<div class="container">
  		<h3>Choose from over 2,000 Restaurants</h3>
        <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        <a href="list_page.html">View all Restaurants</a>
    </div><!-- End container -->
</div><!-- End hight_light -->
              
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('frontend_assets/img/bg_office.jpg');?>" data-natural-width="1200" data-natural-height="600">
    <div class="parallax-content">
        <div class="sub_content">
            <i class="icon_mug"></i>
            <h3>We also deliver to your office</h3>
            <p>
                Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
            </p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End Content =============================================== -->

<div class="container margin_60">
    <div class="main_title margin_mobile">
        <h2 class="nomargin_top">Work with Us</h2>
        <p>
            Cum doctus civibus efficiantur in imperdiet deterruisset.
        </p>
    </div>
  	<div class="row">
        <div class="col-md-4 col-md-offset-2">
        	<a class="box_work" href="submit_restaurant.html">
            <img src="<?php echo base_url('frontend_assets/img/submit_restaurant.jpg');?>" width="848" height="480" alt="" class="img-responsive">
            <h3>Submit your Restaurant<span>Start to earn customers</span></h3>
            <p>Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.</p>
            <div class="btn_1">Read more</div>
            </a>
        </div>
        <div class="col-md-4">
        	<a class="box_work" href="submit_driver.html">
            <img src="<?php echo base_url('frontend_assets/img/delivery.jpg');?>" width="848" height="480" alt="" class="img-responsive">
			<h3>We are looking for a Driver<span>Start to earn money</span></h3>
            <p>Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.</p>
            <div class="btn_1">Read more</div>
            </a>
        </div>
    </div><!-- End row -->
</div><!-- End container -->