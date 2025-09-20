<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HarvestHub</title>
  <link rel="icon" href="<?= BASE_URL ?>/assets/logo/images/Harvesthub.png" type="image/png" />
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/homeHeader.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/homeHero.css" />
     <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/problemSolutionFeatures.css" />
      <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/how-it-works.css" />
      <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/who-uses-harvesthub.css" />
      <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/testimonials.css" />
      <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/why-choose-us.css" />
      <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/call-to-action.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/homepageCss/homeFooter.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

  <!-- ===== Header ===== -->
  <header class="main-banner transparent-bg" id="home">
  <div class="layout-wrapper banner-content">

    <!-- Desktop Layout -->
    <div class="desktop">
      <!-- Logo to the left of the top navigation bar-->
      <div class="logo-link">
         <a href="#home" class="nav-item is-active">Home</a>
        <img src="<?= BASE_URL ?>/assets/images/logo/Harvesthub.png" alt="HarvestHub Logo" class="logo-img" />
      </div>

      <!-- Desktop Navigation to the right of the top navigation bar -->
      <nav class="nav-desktop">
        <a href="#seasonal" class="nav-item">Browse Products</a>
        <a href="#how-it-works" class="nav-item">How It Works</a>
        <a href="#about" class="nav-item">About Us</a>
        <a href="#contact" class="nav-item">Contact</a>
      </nav>

      <!-- Desktop Actions to the right of the top navigation bar -->
      <div class="header-actions-desktop">
        <button id="toggleDarkMode" class="action-btn outline-style"><i class="fa-solid fa-moon"></i></button>
        <a href="auth/login.php" class="action-link">Login</a>
        <a href="<?= BASE_URL ?>/auth/registration/farmers-registration.php" class="action-link">Sign Up</a>
      </div>
    </div>

    <!-- Mobile Layout -->
    <div class="smaller-screens">
      <!-- Logo to the left of the top navigation bar-->
      <div class="mobile-logo-link">
        <img src="<?= BASE_URL ?>/assets/images/logo/Harvesthub.png" alt="HarvestHub Logo" class="mobile-logo-img" />
        <span>HarvestHub</span>
      </div>
      
      <!-- to the right of the top Navigation bar -->
      <div class="header-actions-mobile">
        <a href="auth/login.php" class="action-link">Login</a>
        <!-- hamburger changes to x to cancel -->
        <button id="toggleMobileNav" class="menu-toggle" aria-label="Toggle menu">
          <span></span><span></span><span></span>
        </button>
      </div>

      <!-- Mobile Navigation sidebar that emerfes from the right and below the hamburger -->
      <nav id="mobileMenu" class="nav-mobile" aria-hidden="true">
        <a href="#home" class="nav-item">Home</a>
        <a href="#seasonal" class="nav-item">Browse Products</a>
        <a href="#how-it-works" class="nav-item">How It Works</a>
        <a href="#about" class="nav-item">About Us</a>
        <a href="#contact" class="nav-item">Contact</a>

        <div class="nav-mobile-footer">
          <a href="<?= BASE_URL ?>/auth/registration/farmers-registration.php" class="action-btn gold-style full-width">Sign Up</a>
          <button id="toggleDarkModeMobile" class="action-btn outline-style full-width"><i class="fa-solid fa-moon"></i></button>
        </div>
      </nav>
    </div>

  </div>
</header>


  <!-- ===== Main Content ===== -->
  <main>
 
