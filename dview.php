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
 
  <body>
  <form action="" method="post" >
<button type="submit" formaction="dauthor.php" style="font-size:20px; border-radius:5px;">Filter based on Author</button>
<button type="submit" formaction="ddate.php" style="font-size:20px; border-radius:5px;">Filter Based on Date</button>
<button type="submit" formaction="dsort.php" style="font-size:20px; border-radius:5px;" name="number;">Sort By Number Of Notes</button>
<button type="submit" formaction="dsort.php" style="font-size:20px; border-radius:5px;" name="total;">Sort By Total Notes Entered</button>
	</form>
<?php
require 'vendor/autoload.php';
$m=new MongoDB\Client("mongodb://localhost:27017");
//echo "connection successful";
$db=$m->notesmgmt;
$collection=$db->dailydata; 

 echo '<div class="container"> <table class="table"> <th>Subject</th> <th>Number of Notes</th> <th>Total Notes</th> 
 <th>Date</th>';
  echo '<br>';
 $document=$collection->find();
	  foreach ($document as $doc){
		   echo '<tr><td>'.$doc->subjects.'</td> ';
		   echo '<td>'.$doc->title.'</td> ';
		   echo '<td>'.$doc->total.'</td> ';
		   echo '<td>'.$doc->date.'</td> ';
		   echo '<br>';
	  }
	  echo '</table></div>';
?>
</body>
<form action="" method="post" >
<button type="submit" formaction="index.php" style="font-size:20px; border-radius:5px;">Go to Home Page</button>
<button type="submit" formaction="dailydata.php" style="font-size:20px; border-radius:5px;">Go to Daily Data Section's Page</button>
</form>
</html>