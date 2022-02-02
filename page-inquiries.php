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

<section class="question">

  <form action="./form_handler.php" method="post" target="_blank">
  <fieldset>
    <legend>Personal Information</legend>
    <input type="text" name="first_name"/>
    <label for="first_name">First Name</label>
    <br/>
    <input type="text" name="last_name"/>
    <label for="last_name">Last Name</label>
    <br/>
    <input type="text" name="email"/>
    <label for="last_name">Email Address</label>
    <br/>
    <input type="text" name="phone"/>
    <label for="last_name">Phone Number</label>
    <br/> <br/>
  </fieldset> </br>


  <label for="pets">Would you like a graphic design or web design?</label> </br>
  <input type="radio" name="pets" value="NFL"/> Graphic Design
  <input type="radio" name="pets" value="NBA"/> Web Design
  <br/><br/>
  <label for="sun">Which part of the day do you prefer to talk?</label> </br>
  <input type="radio" name="sun" value="Morning"/> Morning
  <input type="radio" name="sun" value="Afternoon"/> Afternoon
  <input type="radio" name="sun" value="Evening"/> Evening
  <input type="radio" name="sun" value="Night"/> Night
  <br/><br/>
    <label for="color">What is your color options?</label>
    <br/><br/>
    <input type="checkbox" name="color" value="blue"/> Blue
    <input type="checkbox" name="color" value="black"/> Black
    <input type="checkbox" name="color" value="orange"/> Orange
    <input type="checkbox" name="color" value="yellow"/> Yellow
    <input type="checkbox" name="color" value="red"/> Red
    <input type="checkbox" name="color" value="green"/> Green
    <input type="checkbox" name="color" value="purple"/> Purple
    <input type="checkbox" name="color" value="white"/> White
    <input type="checkbox" name="color" value="pink"/> Pink
    <input type="checkbox" name="color" value="custom"/> Custom
    <br/><br/>
    <label for="birthday">When will you need the project to be done by?</label> <br/>
    <input type="date" name="birthday"/>
    <br/><br/>
    <label for="favorite_holiday">What will your inquiry be for?</label>
    <br/><br/>
    <select name="favorite_holiday" multiple>
      <br/><br/>
      <option value="christmas">Personal</option>
      <option value="new years day">Business</option>
      <option value="thanksgiving">Family</option>
      <option value="easter">Friends</option>
      <br/><br/>
    </select>
    <br/><br/>
    <label for="last_meal">Please explain exactly as detailed as possible about your inquiry below..</label> <br/>
    <textarea name="last_meal" rows="5" cols="50"></textarea>
    <br/><br/>
    <input type="submit" name="submit"/>
    <input type="reset" name="reset"/>

  </form>

</section>

<?php get_footer() ?>
