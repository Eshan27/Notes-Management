<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
   	body{
      	background:#666666;
	   	background: -webkit-linear-gradient(#666666 0%, #00b7ea 100%);
   }
	table, th, td {
 		border: 1px solid black;
		margin-right: 10px;
		padding: 10px;
		border-collapse: collapse;
}
  </style>
  </head>
  <body>
<?php
require 'vendor/autoload.php';
$m=new MongoDB\Client("mongodb://localhost:27017");
//echo "connection successful";
$db=$m->notesmgmt;
$collection=$db->dailydata; 
  if($_POST){
		   //echo '<p>delete clicked</p>';
		   $id=$_POST['del'];
//echo $id;
$deleteResult = $collection->deleteOne( [ "_id" => new MongoDB\BSON\ObjectId($_POST['del']) ] );//(["_id" => $_POST['del']]);
  }
 echo '<div class="container"> <table class="table"> <th>Subject</th> <th>Number Of Notes</th> <th>Total Notes</th> <th>Date</th> <th>Operation</th>';
  echo '<br>';
 $document=$collection->find();
	  foreach ($document as $doc){
		   echo '<form action="ddelete.php" method="post"  name="delete"><tr><input type="hidden" value='.$doc->_id.' name="del" ></input>';
		   echo '<td>'.$doc->subjects.'</td> ';
		   echo '<td>'.$doc->title.'</td> ';
		   echo '<td>'.$doc->total.'</td> ';
		   echo '<td>'.$doc->date.'</td> ';
		   echo '<td><input type="submit" name="submit" value="Delete" style="font-size:20px; border-radius:5px;"></input></td></tr></form> ';
		   echo '<br>';
	  }
	  echo '</table></div>';
	  
	
	  
	  
?>
<form action="" method="post" >
<button type="submit" formaction="dailydata.php" style="font-size:20px; border-radius:5px;">Go to Daily Data Section's Page</button>
</form>

</body>
</html>