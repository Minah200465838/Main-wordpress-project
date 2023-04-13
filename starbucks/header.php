<?php
/* 
The header
This is template that displays all of the <head> section
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	 <!-- fontawesome -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Anuphan&family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<!-- add our custom font -->
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> -->
		<!-- add our custom CSS file -->
		<link rel="stylesheet"
		href="<?php echo esc_url(home_url('wp-content/themes/starbucks/assets/css/starbucks.css')); ?>">
</head>

<body <?php body_class(); ?>>

<!-- nav -->


<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand"href="http://localhost:8080/cms-ecomm/"> <img src="<?php echo esc_url(home_url('wp-content/uploads/2023/04/logo.png')); ?>" alt="logo" class="logo"
        /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="http://localhost:8080/cms-ecomm/"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/cms-ecomm/about/"><i class="fa-solid fa-star"></i> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/cms-ecomm/shop/"><i class="fa-solid fa-mug-hot"></i> Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/cms-ecomm/contact/"><i class="fa-solid fa-envelope"></i> Contact</a>
            </li>
          </ul>
          <!-- top right -->
          <ul class="navbar-nav ms-auto">
            <!-- drop down -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Posts </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://localhost:8080/cms-ecomm/easter-special-drinks/">Spring special</a>
                <a class="dropdown-item" href="http://localhost:8080/cms-ecomm/activities/">Activities</a>
                <a class="dropdown-item" href="http://localhost:8080/cms-ecomm/group-order/">News</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/cms-ecomm/cart/"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/cms-ecomm/checkout/"><i class="fa-solid fa-sack-dollar"></i> Checkout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/cms-ecomm/my-account/"><i class="fa-solid fa-user"></i> My Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>