<?php
//fetch.php live search ng sa dashboard
$connect = mysqli_connect("localhost", "root", "", "dbcapstone");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tbltext 
  WHERE Description LIKE '".$search."%'
  
 
 ";
}
else
{
 $query = "
  SELECT * FROM tbltext ORDER BY price_id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output  ?>
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th><div align="center">DESCRIPTION</th>
     <th><div align="center">ITEM</th>
     <th><div align="center">EDIT</th>
	 
     
    </tr>

<?php

// kunin niya yung value ng item sa db = tbl name ,id 
 while($row = mysqli_fetch_array($result))
 {
  $output?>
       <div align="center">
  <tr>
      <td><b><?php echo $row["Description"];?></b></td>
    <td><div align="center"><?php echo $row["name"];?></td>
    </div>
  
	<td align="center"><a href="edit1.php?price_id=<?php echo $row["price_id"];?>">Edit</a></td>
  </tr><?php

 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
