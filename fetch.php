<?php
//fetch.php live search ng sa dashboard
$connect = mysqli_connect("localhost", "root", "", "dbcapstone");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM price 
  WHERE place LIKE '".$search."%'
  OR price LIKE '".$search."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM price ORDER BY place
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output  ?>
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ITEM</th>
     <th><div align="center">PRICE</th>
     <th>EDIT</th>
	 
     
    </tr>

<?php
// kunin niya yung value ng item sa db = tbl name ,id 
 while($row = mysqli_fetch_array($result))
 {
  $output?><div align="center">
  <tr>
      <td><b><?php echo $row["place"];?></b></td>
    <td><div align="center">&#8369; <?php echo $row["price"];?></td>
   
  
	<td ><a href="edit.php?price_id=<?php echo $row["price_id"];?>">Edit</a></td>
  </tr> </div>
  <?php

 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
