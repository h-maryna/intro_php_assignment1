<?php 

$title = 'Visit Coffee Time';
include __DIR__ . '/../inc/header.inc.php';

?>
    
    <main><!--Main page -->
      <h1><?=$title?></h1>
      <p> and sip a complimentary tea or coffee while you 
       browse our selection of unique tea and coffee offerings, including a 
       wide range of elegant Asian and European glassware, teapots and accessories</p>  
      
      
      <h2>Location</h2>
      <div class="slogan">
          <img src="images/slogan.JPG" alt="All you need is a coffe" style="width:100%">
      </div>
        <p>Coffee Time is located on the east side of</p> 
        <p>Portage Avenue at:</p>
        <p>123 Portage Avenue E</p> 
        <p>Winnipeg, MB Canada R3M 2K7</p>
        <p>Phone 204-123-4567<p>
        <p>Email info@coffeetime.com</p>
      <h2>Store Hours</h2>
        <p>We are open 7am-6pm Monday - Friday and 10am-5pm on Saturday</p>
        <p>We would like to thank you for choosing to buy from us. 
        And we hope you can find a few minutes to provide your
        feedback - it means a lot to us.</p>
      <a href="#" class="go_top">Go to the top</a>  
   
      <form method="post"
            action="http://www.scott-media.com/test/form_display.php"
            autocomplete="on">
          
      <fieldset><!-- Form with personal info -->
      <legend>Leave us your feedback</legend>
        <p><!-- Field with First name info -->
        <label for="first_name">First Name</label>
        <input type="text" 
               name="first_name" 
               id="first_name" 
               placeholder = "Type your first name" 
               required="required" />
        </p>

        <p><!-- Field with Last name info -->
          <label for="last_name">Last Name</label>
          <input type="text" 
                 name="last_name" 
                 id="last_name"
                 placeholder = "Type your last name" />
        </p>
        <p><!-- Field with Birthday info -->
          <label for="birthday">Choose your birthday: (yyyy-mm-dd)</label>
          <input type="date" name="birthday" id="birthday" />
        </p>
        <p><!-- Field with email info -->
          <label for="email">Email address</label>
          <input type="email" name="email" id="email">
        </p>
        <p><!-- Field with selection gender info -->
          <select name="gender" id="gender">
            <option value="not_selected">Please select your gender</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="transgender">Transgender</option>
            <option value="not_selected">Prefer not to disclose</option>
          </select>
        </p>
        <p><!-- Group with radio buttons and option to choose -->
          Please choose what do you usually order:<br />
          <input type="radio" id="coffee_drinks" name="order" value="Coffee Drinks" />
          <label for="coffee_drinks">Coffee Drinks</label><br />

          <input type="radio" id="tea" name="order" value="Tea" />
          <label for="tea">Tea</label><br />

          <input type="radio" id="sandwiches" name="order" value="Sandwiches" />
          <label for="sandwiches">Sandwiches</label><br />     

          <input type="radio" id="baking_goods" name="order" value="Baking goods" />
          <label for="baking_goods">Baking Goods</label><br />   
        </p>

        <p><!-- Checkbox field -->
        How do you prefer to pay for your order?<br />
          <input type="checkbox"
                 id="cash"
                 name="payment_choice1"
                 value="Cash" />
          <label for="cash">Cash</label><br />

          <input type="checkbox"
                 id="visa"
                 name="payment_choice2"
                 value="Visa" />
          <label for="visa">Visa</label><br />

          <input type="checkbox"
                 id="master_card"
                 name="payment_choice3"
                 value="Master Card" />
          <label for="master_card">Master Card</label><br />
        </p>
        <p><!-- Field with abilioty to leave a feedback -->
          <label for="comments">Your feedback</label><br />
          <textarea rows="7" 
                    cols="40" 
                    id="comments" 
                    name="comments"
                    accesskey="c"
                    title="use accesskey 'c'"></textarea>
        </p>
    </fieldset>
      <p> <!-- Submit and reset button -->
        <input value="Send Feedback" type="submit" />
        <input value="Clear Form" type="reset" />
      </p>
    </form>  
    </main>
  
  <?php 

     include __DIR__ . '/../inc/header.inc.php';

  ?>
    </div>
  </body>

</html>