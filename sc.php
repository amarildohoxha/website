<?php
if (isset($_GET['am'])){
        //open connection to mysql db
   $connection = mysqli_connect("localhost","root","","online_notice") or die("Error " . mysqli_error($connection));
   $am = $_GET['am'];
   //fetch table rows from mysql db
   $sql = "select * from notice where user  LIKE '$am%' order by Date desc";
   $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
   //create an array
   $emparra = array();
   while($row =mysqli_fetch_assoc($result))
   {
       $emparra[] = $row;
   }
   echo json_encode($emparra);
}
else{
   //open connection to mysql db
   $connection = mysqli_connect("localhost","root","","online_notice") or die("Error " . mysqli_error($connection));

   //fetch table rows from mysql db
   $sql = "select * from notice order by Date desc";
   $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

   //create an array
   $emparray = array();
   while($row =mysqli_fetch_assoc($result))
   {
       $emparray[] = $row;
   }
   echo json_encode($emparray);
   $fp = fopen('results.txt', 'w');
fwrite($fp, json_encode($emparray));
fclose($fp);}


   //close the db connection
   
?>
