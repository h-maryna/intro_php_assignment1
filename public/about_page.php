<?php 

$title = 'about_page';
$h1 = 'Hello from Coffee Time';

require 'functions.php';
require 'config.php';
include __DIR__ . '/../inc/header.inc.php';

?>
      <title><?=$title?></title>
      <main>
        <h1><?=$h1?></h1>
          <p>Coffee Time is a Winnipeg-based company registered in the province of 
          Manitoba. Meg Rayan is president of Coffee Time, and her husband, Bob Krichkov,
          is partner and owner.</p>
          <p>Our parents immigrated from Brazil. They usually told us story how they 
          liked to smell real coffee in Brazil. And when we married, we decided to 
          open a coffee shop.</p>


          <p id="hello_img"><img src="images/hello_couple.jpg" alt="Couple of owners" style="width:100%" />
        <h2>Our Equipment</h2>
          <a href="#" class="go_top">Go to the top</a>  
          <p>We used a high quality equipment for making taste of our product delicious</p>
          <p id="machine"><img src="images/mashine.jpg" alt="Coffee Maker" style="width:100%" />
          
        <h2>Our Mission</h2> 
          <a href="#" class="go_top">Go to the top</a>
          <p>The mission of our company is to make everybody happy and satisfied</p>
          <p id="example1"><img src="images/coffee_heart.jpg" alt="Cup with coffee formed heart" style="width:100%" />
       </main>
  
  <?php 

   include __DIR__ . '/../inc/footer.inc.php';

  ?>    
     
    