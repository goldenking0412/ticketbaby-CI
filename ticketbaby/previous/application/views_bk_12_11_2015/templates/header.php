<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap-select.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/bootstrapvalidator/bootstrapValidator.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/owl.carousel.css" />
<!-- Titcket Baby CSS -->
<link rel="stylesheet" href="<?=base_url()?>assets/css/style.min.css">
<!-- recaptcha js -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<title>TicketBaby</title>
</head>
<body>
<div class="container-fluid top-strip"></div>
<div class="container-fluid orange-strip">
    <div class="container no-pad">
        <div class="col-md-3 col-sm-12 logo">
            <a href="<?=base_url();?>"><img src="<?=base_url()?>assets/images/logo2.png" /></a>
        </div>
        <div class="col-md-9 col-sm-12 header-right-panel">

                <div class="alert alert-success" style="position:absolute;display: none;">
                <a href="#" class="close" data-hide="alert" data-dismiss="alert"> &times; </a>
                <strong>Success!</strong> Your message has been sent successfully.
                </div>

                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4 social-icon">
                    <a href="#"><img src="<?=base_url()?>assets/images/fb.png" /></a>
                    <a href="#"><img src="<?=base_url()?>assets/images/twtr.png" /></a>
                    <a href="#"><img src="<?=base_url()?>assets/images/pin.png" /></a>
                </div>
                <div class="clearfix"></div>
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse main-menu navbar-right no-pad" id="myNavbar">
                      <ul class="nav navbar-nav">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="<?=base_url()?>index.php/event/movie-video-and-screen-awards">Galas & Awards</a></li>
                        <li><a href="#">Theatre & Arts</a></li>
                        <li><a href="<?=base_url()?>index.php/event/southport-family-day-trip">Family & Attractions</a></li>
                        <li><a href="#">Festivals</a></li>                        
                        <li><a href="#">Exhibitions</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Shop</a></li>
                      </ul>                                                                    
                    </div>
                </nav>
        </div>
     </div>
</div>
<div class="container-fluid search-bar">
    <div class="container">
        <div class="col-md-8 col-sm-6 col-xs-12 no-pad search">
            <div class="col-md-1 col-sm-2 col-xs-2 mobilenone">
                <img src="<?=base_url()?>assets/images/search-icon.png" />
            </div>
            <div class="col-md-10 col-sm-10 col-xs-12 no-pad">
            <input type="text" placeholder="Enter an address, zip code or city..." />
            <input type="button" value="Search" />
            </div>
            
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12">
                
            </div>
        <div class="col-md-2 col-sm-3 col-xs-12 barclay mobilenone">
            <img src="<?=base_url()?>assets/images/barclay.png" />
        </div>
    </div>
</div>




