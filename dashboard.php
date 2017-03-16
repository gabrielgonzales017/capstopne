
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADMIN PAGE</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
  <link href="bootstrap.css" rel="stylesheet" type="text/css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="style1.css" rel="stylesheet" type="text/css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</head>
<body>

<div class="wrapper">
     <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


   <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
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
echo mysql_result($result, 0); // output ng index galing DB

mysql_close($link);
?> 
                </a>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Administrator 
                
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-note2"></i>
                        <p>items</p>
                    </a>
                </li>
                
            
                <li>
                    <a href="custom.php">
                        <i class="pe-7s-pen"></i>
                        <p>Customize</p>
                    </a>
                </li>
                <li>
                    <a href="upload.php">
                        <i class="pe-7s-camera"></i>
                        <p>Upload</p>
                    </a>
                </li>
                <li>
                    <a href="uploada.php">
                        <i class="pe-7s-wine"></i>
                        <p>amenities</p>
                    </a>
                </li>
                
                  <li>
                    <a href="sms.php">
                        <i class="pe-7s-comment"></i>
                        <p>Questions</p>
                    </a>
                </li>
                
                  <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>Admin</p>
                    </a>
                </li>
				  <li>
                    <a href="index.php">
                        <i class="pe-7s-close-circle"></i>
                        <p>logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php
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
echo mysql_result($result, 0); // output ng index galing DB

mysql_close($link);
?></h4>
                                <p class="category">
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
echo mysql_result($result, 4); // output ng index galing DB

mysql_close($link);
?>
</p>
                            </div>
                       
   <br />
   
   <div class="form-group">
    <div class="input-group">
     <span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Search:&nbsp;&nbsp;<i class="pe-7s-search"></i></span>
     &nbsp;&nbsp;<input type="text" name="search_text" id="search_text"  class="search " />  &nbsp;&nbsp;&nbsp;&nbsp;
   <input type="button" value="Add" class ="button" onclick="window.location.href='addS.php'"><!-- admin lang -->
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
        
      

 <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">             <?php
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
echo mysql_result($result, 0); // output ng index galing DB

mysql_close($link);
?> </a>
                </p>
            </div>  </div>
        </footer>

    </div>
</div>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>