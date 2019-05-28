<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Blog Site Media Co</title>
	<meta name="description" content="Blog Site">
  <meta name="keywords" content="Blog Site">
	<link rel="icon" type="img/jpg" href="">
	<link href="https://fonts.googleapis.com/css?family=Oswald|Playfair+Display" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head();?>

</head>

<body>
<div id="nav-container-box">
  <nav class="nav-container">
	<div class="inside-nav-container">
		<div class="burger">
			<div class="line-1">

			</div>
			<div class="line-2">

			</div>
			<div class="line-3">

			</div>
		</div>
    <a id="logo-image-a" href="">
      <img class="logo-image" src="" alt="Blog Site Media Co Logo">
    </a>

		<?php wp_nav_menu( array(

			'theme_location' => 'top-menu',
			'menu_class' => 'nav-ul-list'
						  )
		); ?>

		<!--
    <ul class="nav-ul-list">
      <li class="nav-item">
        <a class="ind-nav-link" href="https://www.matthewtravisblog.com">HOME</a>
      </li>
      <li class="nav-item">
        <a class="ind-nav-link" href="">POLITICS</a>
      </li>
      <li class="nav-item">
        <a class="ind-nav-link" href="">CULTURE</a>
      </li>
      <li class="nav-item">
        <a class="ind-nav-link" href="">LIFE</a>
      </li>
      <li class="nav-item">
        <a class="ind-nav-link" href="">MEDIA</a>
      </li>
      <li class="nav-item">
        <a class="ind-nav-link" href="">CONTACT</a>
      </li>
    </ul>
-->

	</div>
    <div class="social-links">
      <a class="social-link-ind" href=""><img src="https://image.flaticon.com/icons/svg/145/145802.svg" alt="LTP-Facebook"></a>
      <a class="social-link-ind" href=""><img src="https://image.flaticon.com/icons/svg/145/145812.svg" alt="LTP-Twitter"></a>
      <a class="social-link-ind" href=""><img src="https://image.flaticon.com/icons/svg/145/145805.svg" alt="LTP-Instagram"></a>
      <a class="social-link-ind" href=""><img src="https://image.flaticon.com/icons/svg/187/187210.svg" alt="LTP-Youtube"></a>
	</div>
  </nav>
</div>
	<div class="banner-area">
			<img class="banner-image" id="banner-image-long" src="" slt="LTP Subscribe Banner"/>
		<img class="banner-image" id="banner-image-short" src="" slt="LTP Subscribe Banner"/>
		<div id="sub-button-div">
			<h5>Checkout Our Latest Podcast and Subscribe via the Link Below!</h5>
			<button type="button">SUBSCRIBE</button>
		</div>
	</div>
