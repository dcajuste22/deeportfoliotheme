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


<section class="blue">
  <div class="section_text">
  </div>
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="card">
    <img src="./assets/Pics/dee.JPG" alt="Darleene" style="width:50%">
    <h1 class="dee">Darleene "Dee" Cajuste</h1>

    <h3 class="title">CEO & Founder</h3>

    <p class="texter">My name is Darleene "Dee" Cajuste. I am born and raised in Miami, FL with my 6 siblings and parents. I attended North Miami Senior High School and graduated Summa Cum Laude of my class in 2018. When I graduated, I was given the opportunity to work for the city of Miami City Hall as an I.T. Graphic Designer. I always knew I wanted to become a graphic designer since the age of 8 because of my passion to design and create content, putting ideas together to create something great. Fast forward, I wanted to expand my skills, to receive my diploma in GDWD from F.I.R.S.T. Institute.</p>

    <a class="icon" href="#"><i class="fa fa-twitter"></i></a>
    <a class="icon" href="#"><i class="fa fa-linkedin"></i></a>
    <a class="icon" href="#"><i class="fa fa-facebook"></i></a>
    <a class="icon" href="#"><i class="fa fa-instagram"></i></a>
</div>
</section>

<?php get_footer() ?>
