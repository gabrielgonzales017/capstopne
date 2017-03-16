
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
      <title>Rates</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
	 
      <link href="webstyle/webstyle.css" rel="stylesheet" />
	 
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>

      <style>
    .pop-out
    {
        transition: transform .5s;
    }

    .pop-out:hover
    {
        -ms-transform: scale(1.5, 1.5);
        -webkit-transform: scale(1.5, 1.5);
        transform: scale(1.5, 1.5);
    }
</style>
		
   </head>
   <body>
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="index.php"><?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query('SELECT name FROM tbltext');
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo mysql_result($result, 0); // outputs index galing DB

mysql_close($link);
?></strong></a>
                  </div>                  
                 
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="gallery.php">Gallery</a>
                        </li>
                        <li><a href="amenities.php">Amenities</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="index.php"><?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query('SELECT name FROM tbltext');
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo mysql_result($result, 0); // outputs index galing DB

mysql_close($link);
?></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li style="active"><a href="rates.php">Rates</a>
                        </li>
                        <div class="top-nav s-12 l-5">
                    <ul class="top-ul chevron"> 
                        <li><a href="recentAct.php">Recent Activities</a>
                        </li>
                     
                        <li><a href="about.php">About us</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
	  
  
       <br><br><br><br><br><br>
      <section>

		<div id="second-block">
       
             
                    
                        <h1><?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query('SELECT name FROM tbltext');
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 0)); // outputs index galing DB

mysql_close($link);
?></h1>
            
            

						<br>
                        <h5><?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 0)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 0)); // outputs index galing DB

mysql_close($link);
?>          <br>   
                            <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 1)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 1)); // outputs index galing DB

mysql_close($link);
?>          <br>  
                            <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query('SELECT name FROM tbltext');
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 7)); // outputs index galing DB

mysql_close($link);
?></h5>
							<br><br>
							<h1><?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query('SELECT name FROM tbltext');
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 8)); // outputs index galing DB

mysql_close($link);
?></h1>
							<br>
							<h5><?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 3)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 3)); // outputs index galing DB

mysql_close($link);
?>          <br> 
            
            <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 5)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 5)); // outputs index galing DB

mysql_close($link);
?>          
            
            <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 6)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 6)); // outputs index galing DB

mysql_close($link);
?>          <br> 
                                
                                <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 7)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 7)); // outputs index galing DB

mysql_close($link);
?>          <br> 
                <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 8)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 8)); // outputs index galing DB

mysql_close($link);
?>          <br> 
                                <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 9)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 9)); // outputs index galing DB

mysql_close($link);
?>          <br> 
                                <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 10)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 10)); // outputs index galing DB

mysql_close($link);
?>          <br> 
                                <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 11)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 11)); // outputs index galing DB

mysql_close($link);
?>          <br> 
                                <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 12)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 12)); // outputs index galing DB

mysql_close($link);
?>          <br> 
                                <?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT place FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 13)); // outputs index galing DB

mysql_close($link);
?>
              &#8369;               
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query("SELECT price FROM price");
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo nl2br( mysql_result($result, 13)); // outputs index galing DB

mysql_close($link);
?>          <br> 
                                
            </h5>
							
          
         </div>
		 </section>
      <section>
		<br><br><br><br>
         <!-- SECOND BLOCK --> 	
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1><?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query('SELECT name FROM tbltext');
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo mysql_result($result, 0); // outputs index galing DB

mysql_close($link);
?></h1>
                        <p class="margin-bottom"><?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dbcapstone')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query('SELECT name FROM tbltext');
if (!$result) {
    die('Could not query:' . mysql_error());
}
echo mysql_result($result, 3); // outputs index galing DB

mysql_close($link);
?>
                        </p>
                        <a class="button s-12 l-4 center" href="about.php">Read more</a>  			
                     </article>
                  </div>
               </div>
            </div>
         </div>
      
       
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
             <b> </br>
            </div>
           
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script> 
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
           	slideSpeed : 300,
           	autoPlay : true,
           	navigation : false,
           	pagination : false,
           	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
           	slideSpeed : 300,
           	autoPlay : true,
           	navigation : false,
           	pagination : true,
           	singleItem:true
           });
         });	
          
      </script> 
   </body>
</html>