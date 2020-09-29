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
$collection=$db->notes; 
  if($_POST){
		   //echo '<p>delete clicked</p>';
		   $id=$_POST['del'];
//echo $id;
$deleteResult = $collection->deleteOne( [ "_id" => new MongoDB\BSON\ObjectId($_POST['del']) ] );//(["_id" => $_POST['del']]);
  }
 echo '<div class="container"> <table class="table"> <th>Subject</th> <th>Title</th> <th>Text</th> <th>Tag 1</th> <th>Tag 2</th> <th>Tag 3</th> <th>Tag 4</th> <th>Difficulty</th> <th>Topics</th> <th>Operation</th>';
  echo '<br>';
 $document=$collection->find();
	  foreach ($document as $doc){
		   echo '<form action="delete.php" method="post"  name="delete"><tr><input type="hidden" value='.$doc->_id.' name="del" ></input>';
		   echo '<td>'.$doc->subjects.'</td> ';
		   echo '<td>'.$doc->title.'</td> ';
		   echo '<td>'.$doc->text.'</td> ';
		   echo '<td>'.$doc->first.'</td> ';
		   echo '<td>'.$doc->second.'</td> ';
		   echo '<td>'.$doc->third.'</td> ';
		   echo '<td>'.$doc->fourth.'</td> ';
		   echo '<td>'.$doc->difficulty.'</td> ';
		   echo '<td>'.$doc->topics.'</td> ';
		   //echo '<td>'.$doc->date.'</td> ';
		   echo '<td><input type="submit" name="submit" value="Delete" style="font-size:20px; border-radius:5px;"></input></td></tr></form> ';
		   echo '<br>';
	  }
	  echo '</table></div>';
	  
	
	  
	  
?>
<form action="" method="post" >
<button type="submit" formaction="operation.php" style="font-size:20px; border-radius:5px;">Go to Note Section's Page</button>
</form>

</body>
</html>