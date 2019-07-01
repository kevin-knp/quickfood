<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>QuickFood - Quality delivery or take away food</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url("frontend_assets/img/favicon.ico"); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url("frontend_assets/img/apple-touch-icon-57x57-precomposed.png"); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url("frontend_assets/img/apple-touch-icon-72x72-precomposed.png"); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url("frontend_assets/img/apple-touch-icon-114x114-precomposed.png"); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url("frontend_assets/img/apple-touch-icon-144x144-precomposed.png"); ?>">
    
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url('frontend_assets/css/animate.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend_assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend_assets/css/menu.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend_assets/css/style.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend_assets/css/responsive.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend_assets/css/elegant_font/elegant_font.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend_assets/css/fontello/css/fontello.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend_assets/css/magnific-popup.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend_assets/css/pop_up.css'); ?>" rel="stylesheet">
	
	<!-- YOUR CUSTOM CSS -->
	<link href="<?php echo base_url('frontend_assets/css/custom.css'); ?>" rel="stylesheet">
    
    <!-- Modernizr -->
	<script src="<?php echo base_url('frontend_assets/js/modernizr.js'); ?>"></script> 
</head>

<body>
    <?php
        if(isset($content))
        {
            echo $content;
        }
    ?>
    <!-- Footer ================================================== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Secure payments with</h3>
                    <p>
                        <img src="<?php echo base_url('frontend_assets/img/cards.png');?>" alt="" class="img-responsive">
                    </p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                        <li><a href="#0" data-toggle="modal" data-target="#register">Register</a></li>
                        <li><a href="#0">Terms and conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3" id="newsletter">
                    <h3>Newsletter</h3>
                    <p>
                        Join our newsletter to keep be informed about offers and news.
                    </p>
                    <div id="message-newsletter_2">
                    </div>
                    <form method="post" action="<?php echo base_url('frontend_assets/assets/newsletter.php');?>" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2" type="email" value="" placeholder="Your mail" class="form-control">
                        </div>
                        <input type="submit" value="Subscribe" class="btn_1" id="submit-newsletter_2">
                    </form>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-instagram"></i></a></li>
                            <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>
                            © Quick Food 2015
                        </p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-popup">
			<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
			<form action="#" class="popup-form" id="myLogin">
            	<div class="login_icon"><i class="icon_lock_alt"></i></div>
				<input type="text" class="form-control form-white" placeholder="Username">
				<input type="text" class="form-control form-white" placeholder="Password">
				<div class="text-left">
					<a href="#">Forgot Password?</a>
				</div>
				<button type="submit" class="btn btn-submit">Submit</button>
			</form>
		</div>
	</div>
</div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-popup">
			<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
			<form action="#" class="popup-form" id="myRegister">
            	<div class="login_icon"><i class="icon_lock_alt"></i></div>
				<input type="text" class="form-control form-white" placeholder="Name">
				<input type="text" class="form-control form-white" placeholder="Last Name">
                <input type="email" class="form-control form-white" placeholder="Email">
                <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                <div id="pass-info" class="clearfix"></div>
				<div class="checkbox-holder text-left">
					<div class="checkbox">
						<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
						<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
					</div>
				</div>
				<button type="submit" class="btn btn-submit">Register</button>
			</form>
		</div>
	</div>
</div><!-- End Register modal -->
    
<!-- COMMON SCRIPTS -->
<script src="<?php echo base_url('frontend_assets/js/jquery-2.2.4.min.js'); ?>"></script>
<script src="<?php echo base_url('frontend_assets/js/common_scripts_min.js'); ?>"></script>
<script src="<?php echo base_url('frontend_assets/js/functions.js'); ?>"></script>
<script src="<?php echo base_url('frontend_assets/assets/validate.js'); ?>"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="<?php echo base_url('frontend_assets/js/video_header.js'); ?>"></script>
<script>
$(document).ready(function() {
	'use strict';
   	  HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: true
    });    

});
</script>

</body>
</html>