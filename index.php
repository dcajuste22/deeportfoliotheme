
<?php get_header() ?>



<header>

      <div class="header_left">
        <img class="logo" src="./assets/Logos/logo_3.png" alt="logo">
      </div>
      <div class="header_right">
        <p>Where Your Vision Comes To Life</p>
        <p>Orlando, FL</p>
        <p>Phillipians 4:13</p>
      </div>
    </header>
    <main>
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
          <img class="red" src="./assets/Logos/Logo_1.png" alt="">
          <p class="orange">Looking for a all around graphic designer that meets your satisfaction? Look no further. Our purpose is to create the ideal event for our clients in a convenient and unstressful way. Also providing high quality vendors and plan your next event. We always want to be your first choice for event planning in Orlando, FL and transform the client dreams in an events of a lifetime. Take a moment to look throughout our website and stop by our "Inquiries" tab for we can chat more! Visit our "Contact" tab to talk to us at any time for other questions.</p>
        </section>
    </main>

<?php get_footer() ?>
