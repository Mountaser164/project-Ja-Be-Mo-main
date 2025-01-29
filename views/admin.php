<?php

class AdminView{

    public static function render($allNews,$allCategory){
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



<style>

 



.footer-container {
    display: flex;
    gap: 20px;
}

.btn {
    padding: 10px 20px;
    background-color: #D55A77;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
}

.btn:hover {
    background-color: #D55A77;
}


.borderedbox {
    border: 2px solid #ccc; /* Voeg een rand toe aan de afbeelding */
    padding: 5px;
    width: 100%;
    
}


.borderedbox2 {
    border: 2px solid #ccc; /* Voeg een rand toe aan de afbeelding */
    padding: 5px;
    width: 100%;
    
}

.inspace-10 {
    margin-bottom: 10px; /* Ruimte onder de afbeelding */
    

}
.hoc container clear{

}
 




</style>



</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('../sources/images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">RTN news Admin</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#">Politiek</a>

          <li><a href="#">Sport</a></li>
          <li><a href="#">Gezondheid</a></li>
          <li><a href="#">Over onze</a></li>
         

        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
 
 



  <div class="wrapper row3">
   <div class="hoc container clear">
  <table>
  <tr>
    <th>id</th>
    <th>Title</th>
    <th>Post</th>
    <th>Date</th>
    <th>Catogery</th>
    <th>User</th>
    <th>Action</th>
  </tr>

  <?php
  foreach($allNews as $x){

  
  ?>
  
  <tr>
    <td><?php echo $x->news_id?></td>
    <td><?php echo $x->title?></td>
    <td><?php echo $x->post?></td>
    <td><?php echo $x->date?></td>
    <td><?php echo $x->category_name?></td>
    <td><?php echo $x->user_name?></td>
    <td><a class="btn" href="?update_id=<?php echo $x->news_id; ?>">Update &raquo;</a>&nbsp; &nbsp;
    <a class="btn" href="?delete_id=<?php echo $x->news_id; ?>">Delete &raquo;</a></td>
  </tr>
  <?php }
  ?>
  
 
</table>
</div>
</div>
  
 
 
<hr>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <article class="group btmspace-80">

    <h2>New post</h2>
    <div class="two_third first">
    <form action="adminController.php" method="post" enctype="multipart/form-data">
        <label for="title">Inter the title </label>
         <input type="text" name="title" id="title" class="borderedbox inspace-10" required>

         <label for="date">Select your date:</label>
        <input type = "date" name="date" id="date"  class="borderedbox2 inspace-10" required>
       

            <label for="category">Choose a category:</label>
        <select name="category" id="category">
             <?php foreach($allCategory as $x){?>
                
             <option value="<?php echo $x->id?>"><?php echo $x->name?></option>

             <?php } 
             ?>
    </select>
        

         <label for="post">Enter your news:</label>
        <textarea name="post" id="post"  class="borderedbox2 inspace-10" required></textarea>

        
        

        <label for="fileToUpload">Select image to upload </label>
        <input type="file" name="image" id="image" class="borderedbox inspace-10" required>
        
        <label for="textInput">Enter your news:</label>
        <textarea name="textInput" id="textInput"  class="borderedbox2 inspace-10" required></textarea>
        <br>
        <input type="submit" value="Upload the post" name="submit">

    </form>
</div>




    

    <!-- <div class="footer-container">

        <footer class="nospace"><a class="btn" href="#">Save &raquo;</a></footer>
        <footer class="nospace"><a class="btn" href="#">Update &raquo;</a></footer>
        <footer class="nospace"><a class="btn" href="#">Delete &raquo;</a></footer>

    </div> -->
    
   

      
      <!-- <div class="one_third">
        <h6 class="heading">Per inceptos himenaeos donec lacinia mollis vel</h6>
        <ul class="nospace meta">
          <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
          <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
        </ul>
        <p>Aliquam mauris morbi tristique orci sit amet sapien tincidunt ut rutrum dui tincidunt.</p>
        <p class="btmspace-30">Cras eget lacinia magna nunc ut est est cras aliquam erat sem at dapibus lorem luctus sed nunc sagittis leo in&hellip;</p>
        <footer class="nospace"><a class="btn" href="#">Read more &raquo;</a></footer><br><br>

      </div> -->
    </article>






    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

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