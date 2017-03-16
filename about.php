
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
      <title>About</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
	 
      <link href="assets/css/webstyle.css" rel="stylesheet" />
	 
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>

   
<script>
    function handle(e){
        if(e.keyCode === 49){
            e.preventDefault(); // Ensure it is only this code that rusn

            var user = "admin";
            var pass = "1";

            alert("Administrator Panel");
            var username = prompt("Enter Administrator Username:");
            var password = prompt("Enter Administrator Password:");

            if(user == username && pass == password){
                alert ("Success");
                window.location="dashboard.php";
            }else{
              alert ("Incorrect Password");
            }
        }
    }
</script>

		
   </head><body onkeypress="handle(event)">
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
                        <li><a href="rates.php">Rates</a>
                        </li>
                        <div class="top-nav s-12 l-5">
                    <ul class="top-ul chevron"> 
                        <li><a href="recentAct.php">Recent Activities</a>
                        </li>
                     
                        <li style="active" ><a href="about.php">About us</a>
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
       
             
							
			 <center>
			<video width="700" controls>
			<source src="video.mp4" type="video/mp4">
			<source src="video.ogg" type="video/ogg">
									  
			</video>
			</center>
			<br>
			<br>
			<div class="caption">
				<h5><center><?php
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
echo nl2br( mysql_result($result, 9)); // outputs index galing DB

mysql_close($link);
?></center></h5>
			</div>
					<br><br>
					<h1>Find Us:</h1>
					<a target="_black" href="map.jpg">
					<center><img  src="map.png" width="200" height="300" ></center>
					</a>

					<h5 ><?php
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
echo nl2br( mysql_result($result, 4)); // outputs index galing DB

mysql_close($link);
?>
					<br><br>
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
echo nl2br( mysql_result($result, 6)); // outputs index galing DB

mysql_close($link);
?>
                      	<br><br>
                       
					<br><a href="
			<?php
$link = mysql_connect('localhost', 'root', '');// link sa fb page
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
echo nl2br( mysql_result($result,10)); // outputs index galing DB

mysql_close($link);
?>	">		<?php
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
echo nl2br( mysql_result($result,10)); // outputs index galing DB

mysql_close($link);?> </a>
	
				</h5>
					 
				</div>

     
         </div>
      
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
      <form action="#">
    <input type="hidden" name="txt"/ >
</form>

       
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