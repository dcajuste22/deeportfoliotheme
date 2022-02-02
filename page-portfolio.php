<?php get_header() ?>

<nav class="money">
  <h1>Every Detail Matters</h1>
  <!-- <div>
    <ul>
      <li class="money_button"><a>Home</a></li>
      <li class="money_button"><a>About</a></li>
      <li class="money_button"><a>Inquiries</a></li>
      <li class="money_button"><a>Portfolio</a></li>
      <li class="money_button"><a>Contact</a></li>
    </ul>
  </div> -->
  <?php
  $args = array(
    'theme_location' => 'primary'
  );

  wp_nav_menu( $args );

   ?>
</nav>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/brouchure.jpg" style="width:90%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/book_cover.gif" style="width:90%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/produce.jpg" style="width:70%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/smoothie.jpg" style="width:90%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/woman.jpg" style="width:90%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/business.png" style="width:90%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/darleene.jpg" style="width:90%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/shirt.jpg" style="width:70%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/donuts.jpg" style="width:70%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/creative_text.jpg" style="width:90%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/garden.jpg" style="width:60%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./assets/Pics/icon.png" style="width:90%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<?php get_footer() ?>
