<?php

class NewsView{
    public static function render($allNews,$lastelast,$Zoeken = ''){
        ?>




<!DOCTYPE html>
<!--
Template Name: Skaxis
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Skaxis</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../sources/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="bgded overlay light" style="background-image:url('../sources/images/demo/backgrounds/01.png');"> 
  
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      
      <div id="logo" class="fl_left">
        <h1><a href="index.html">RTN news</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#">Politiek</a>
          <li><a href="#">Sport</a></li>
          <li><a href="#">Gezondheid</a></li>
          <li><a href="#">Over onze</a></li>
         

        
      </nav>
    </header>
  </div>
 
 
 
  <div id="pageintro" class="hoc clear"> 
    <div class="flexslider basicslider">
      <ul class="slides">

        <!-- <li>
          <article>
            <p>Condimentum</p>
            <h3 class="heading">Ligula at fermentum</h3>
            <p>Sodales sapien donec porttitor dolor nec elit</p>
            <footer><a class="btn" href="#">Luctus suscipit in</a></footer>
          </article>
        </li> -->


        <li>
          <article>
            
            <h3 class="heading">RTN NEWS</h3>
            <p>The world between your hands </p>
            <footer>
              <form class="group" method="post">
                  <fieldset>
                  <legend>ZOEKE:</legend>
            
                  <input type="text"  name="zoekterm" value="<?php echo $Zoeken ?>" placeholder="Zoeken&hellip;">
                  <button class="fa fa-search" type="submit" value="Zoeken" title="Submit"><em>Submit</em></button>
              </form>



           
                   

                </fieldset>
            
            </footer>
          </article>
        </li>



        
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>


<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <article class="group btmspace-80">
      <div class="two_third first"> 

      <?php 
            if($lastelast->image == null){

            ?>
                  
                  <img class="borderedbox inspace-10" src="../sources/images/demo/660x360.png" alt="">

            <?php } else{ ?>

                 <img  class="borderedbox inspace-10" src="../uploads/<?php echo $lastelast->image ?>" alt="">

                <?php } ?>
            

      </div>
      <div class="one_third">
        <h6 class="heading"  ><?php echo $lastelast->title?></h6>
        <ul class="nospace meta">
          <li><i class="fa fa-user"></i> <a href="#"><?php echo $lastelast->user_name?></a></li>
          <li><i class="fa fa-tag"></i> <a href="#"><?php echo $lastelast->category_name?></a></li>
        </ul>
        <p><?php echo $lastelast->post?></p>
        
        <footer class="nospace"><a class="btn" href="#">Full Story &raquo;</a></footer>
      </div>
    </article>




    
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <ul class="nospace group overview">




    <?php
        foreach ($allNews as $x) {
         ?>
    <li class="one_third">
        <article><a href="#">
            <?php 
            if($x->image == null){

            ?>
                  
                  <img class="borderedbox inspace-10" src="../sources/images/demo/320x240.png" alt="">

            <?php } else{ ?>

                 <img src="../uploads/<?php echo $x->image ?>" alt="">

                <?php } ?>
            
        </a>
          <h6 class="heading"><?php echo $x->title?></h6>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#"><?php echo $x->user_name?></a></li>
            <li><i class="fa fa-tag"></i> <a href="#"><?php echo $x->category_name?></a></li>
          </ul>
          <p><?php echo $x->post?>&hellip;</p>
          <footer class="nospace"><a class="btn" href="#">Read more &raquo;</a></footer> 
          <p><?php echo $x->date?></p>
        </article>
      </li>
         <?php
      }
     
    ?>

    </ul>



    
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay coloured" style="background-image:url('../sources/images/demo/backgrounds/02.png');">
  <article class="hoc cta clear"> 
    <!-- ################################################################################################ -->
    <h6 class="three_quarter first">Quis orci neque praesent posuere venenatis tempor</h6>
    <footer class="one_quarter"><a class="btn" href="#">Mauris sit rhoncus &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Mauris ac pulvinar</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Urna mauris suscipit</h6>
      <ul class="nospace linklist">
        <li><a href="#">Nunc condimentum ut donec</a></li>
        <li><a href="#">Et tempus metus morbi platea</a></li>
        <li><a href="#">Sed orci eu urna tristique</a></li>
        <li><a href="#">Euismod ac in elit quisque</a></li>
        <li><a href="#">Et porta odio ut gravida</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Feugiat imperdiet</h6>
      <ul class="nospace linklist">
        <li><a href="#">Augue sit amet ligula</a></li>
        <li><a href="#">Tristique iaculis semper</a></li>
        <li><a href="#">Lorem suscipit maecenas</a></li>
        <li><a href="#">Ultricies feugiat libero</a></li>
        <li><a href="#">In gravida felis consectetur</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Turpis sed non enim</h6>
      <p class="nospace btmspace-15">Convallis laoreet mi quis ornare ante nam pretium dignissim justo amet consequat.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../sources/layout/scripts/jquery.min.js"></script>
<script src="../sources/layout/scripts/jquery.backtotop.js"></script>
<script src="../sources/layout/scripts/jquery.mobilemenu.js"></script>
<script src="../sources/layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>
          



<?php

        
 }
}

?>