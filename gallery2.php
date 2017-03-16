  <?php

	require_once 'dbconfig.php';
	

?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Gallery</title>
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
                     <a href="index.php">gab <br /><strong>gab</strong></a>
                  </div>                  
                 
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li style="active"><a href="gallery.php">Gallery</a>
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
                     
                        <li><a href="about.php">About us</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
	  
       
    
	  <br><br><br><br><br><br>
         <!-- SECOND BLOCK --> 	
		
         <div id="second-block">
			<div class="section">
				<div class="container">
					
						<div class="row">
							<div class="col-md-12">
							
								<ul class="nav_vertical">
									<li ><a href="gallery.php">Wedding</a></li>
									<li><a href="gallery1.php">Birthday</a></li>
									<li class="active"><a href="gallery2.php">Baptism</a></li>
									<li><a href="gallery3.php">Reunion</a></li>
									<li><a href="gallery4.php">Others</a></li>
								</ul>
								
							</div>
						</div>
						<div class="nav_content">
							<?php
	
	$stmt = $DB_con->prepare('SELECT userID, title, caption, img FROM tbl_users2 ORDER BY title ASC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<div class="col-xs-6"><table><center>
			<div class="picsize">
			
              <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
				<img src="user_images/<?php echo $row['img']; ?>"class="pop-out" />
					<center>
                        <p class=""><?php echo $title; ?>	<br><?php echo $caption; ?>
            
               
			
				</div>
                </div></table>       
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Image Found ...
            </div>
        </div>
        <?php
	}
	
?>
						</div>
				</div>
			</div>
		</div>
		
		</div>
		<br><br><br>	
		  <section>	
     
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
                        <a class="button s-12 l-4 center" href="product.php">Read more</a>  			
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
             <b> <?php
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
                 ?></b> <br><?php
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
echo mysql_result($result, 4); // outputs index galing DB

mysql_close($link);
?></br>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  Copyright 2017, Capstone BulSU_CICT
               </p>
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