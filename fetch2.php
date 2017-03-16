<?php
//fetch.php live search ng sa dashboard
$connect = mysqli_connect("localhost", "root", "", "dbcapstone");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tblcomments 
  WHERE number LIKE '".$search."%'
  OR comments LIKE '".$search."%' 
 
 ";
}
else
{
 $query = "
 SELECT * FROM `tblcomments` ORDER BY `tblcomments`.`date` DESC
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output  ?>
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>NUMBER</th>
           <th>DATE</th>
     <th><div align="center">COMMENTS/SUGGESTIONS</th>
     <th>REPLY</th>
	 
     
    </tr>

<?php
// kunin niya yung value ng item sa db = tbl name ,id 
 while($row = mysqli_fetch_array($result))
 {
  $output?><div align="center">
  <tr>
      <td><b><?php echo $row["number"];?></b></td>
         <td><b><?php echo $row["date"];?></b></td>
    <td><div align="center"> <?php echo $row["comments"];?></td>
   
  
	<td ><a href="edit2.php?id=<?php echo $row["id"];?>">REPLY</a></td>
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
