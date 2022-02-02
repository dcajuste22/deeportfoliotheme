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


<section>
            <div class="container">
    <!-- <form action="action_page.php">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname">

      <label for="lname">Phone Number</label>
      <input type="text" id="lname" name="lastname">

      <label for="lname">Email Address</label>
      <input type="text" id="lname" name="lastname">

      <label for="lname">Subject</label>
      <input type="text" id="lname" name="lastname">

      <label for="country">Country</label>
      <select id="country" name="Country">
        <option value="USA">USA</option>
        <option value="Canada">Canada</option>
        <option value="Australia">Australia</option>
        <option value="Virgin Islands">Jamaica</option>
        <option value="Virgin Islands">Dominician Republic</option>
        <option value="Virgin Islands">Puerto Rico</option>
      </select>

      <label for="subject">Your Message</label>
      <textarea id="subject" name="subject" placeholder="Let's work..." style="height:200px"></textarea>

      <input type="submit" value="Submit">
      <input type="reset" value="Reset">

    </form> -->
    <?php
while (have_posts()) {
  the_post();
  the_content();
}

     ?>
  </div>
</section>

<?php get_footer() ?>
