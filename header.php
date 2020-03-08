<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Renovation Homes - Responsive Onepage HTML Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Renovation Homes One Page HTML Template">
<meta name="keywords" content="one page, html, template, responsive, business">
<meta name="author" content="Edward">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head();?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117770939-2"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117770939-2');
</script>
 <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<div class="preloader">
  <div class="windows8">
    <div class="wBall" id="wBall_1">
      <div class="wInnerBall"></div>
    </div>
    <div class="wBall" id="wBall_2">
      <div class="wInnerBall"></div>
    </div>
    <div class="wBall" id="wBall_3">
      <div class="wInnerBall"></div>
    </div>
    <div class="wBall" id="wBall_4">
      <div class="wInnerBall"></div>
    </div>
    <div class="wBall" id="wBall_5">
      <div class="wInnerBall"></div>
    </div>
  </div>
</div>

<!-- Navigation Section -->
<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
  <div class="container"> 
    
    <!-- NAVBAR HEADER -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
      <!-- lOGO TEXT HERE --> 
      <a href="index.html" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="whtlogo" alt="" /> <img src="images/logo-dark.png" class="dark-logo" alt="" /></a> </div>
    
    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="smoothScroll">Home</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#ourServices" class="smoothScroll">Service</a></li>
        <li><a href="#team" class="smoothScroll">Team</a></li>
        <li><a href="#packages" class="smoothScroll">Price</a></li>
        <li><a href="#testimonials" class="smoothScroll">Clients</a></li>
        <li><a href="#contact" class="smoothScroll">Contact</a></li>
        <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> 123 456 7890</span></li>
      </ul>
    </div>
  </div>
</div>