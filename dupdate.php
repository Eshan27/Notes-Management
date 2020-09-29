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
		   //echo '<p>update clicked</p>';
		   $id=$_POST['del'];
//echo $id;




$collection->updateOne(['_id' => new \MongoDB\BSON\ObjectID($_POST['del'])], 
['$set' => ['subjects' => $_POST['subjects'],
'title' => $_POST['title'],
'total' => $_POST['total'],
'date' => $_POST['date'],
'authors' => $_POST['authors']]]); 

}
echo '<div class="container"> <table class="table"> <th>Subject</th> <th>Number of Notes</th> <th>Total Number of Notes</th> <th>Date</th>  <th>Operation</th>';
echo '<br>';
$document=$collection->find();
	  foreach ($document as $doc){
		   echo '<form action="dupdate.php" method="post"  name="update"><tr><input type="hidden" value='.$doc->_id.' name="del" >
		   </input><td><input name="subjects"value="'.$doc->subjects.'"/></td> ';
		   echo '<td><input name="title"value="'.$doc->title.'"/></td> ';
		   echo '<td><input name="total"value="'.$doc->total.'"/></td> ';
		   echo '<td><input type="date" name="date"value="'.$doc->date.'"/></td> ';
		   echo '<td><input type="submit" name="submit" value="Update"></input></td></tr></form> ';
		   echo '<br>';
	  }
	  echo '</table></div>';
	  
	
	  
	  
?>
<form action="" method="post" >
<button type="submit" formaction="dailydata.php" style="font-size:20px; border-radius:5px;">Go to Daily Data Section's Page</button>
</form>
</body>
</html>