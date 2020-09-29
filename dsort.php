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
<?php
require 'vendor/autoload.php';
$m=new MongoDB\Client("mongodb://localhost:27017");
//echo "connection successful";
$db=$m->notesmgmt;
$collection=$db->dailydata; 

 echo '<div class="container"> <table class="table"> <th>Subject</th> <th>Number of Notes</th> <th>Total Notes</th> 
 <th>Date</th>';
  echo '<br>';
  if(isset($number)){
    $sort3 = array('sort' => array('title'=> 1));
    $document4 = $collection->find(array(),$sort3);	  
        foreach ($document4 as $doc){
		   echo '<tr><td>'.$doc->subjects.'</td> ';
		   echo '<td>'.$doc->title.'</td> ';
		   echo '<td>'.$doc->total.'</td> ';
		   echo '<td>'.$doc->date.'</td> ';
		   echo '<br>';
      }
      else{
        $sort4 = array('sort' => array('total'=> 1));
        $document5 = $collection->find(array(),$sort4);	  
            foreach ($document5 as $doc){
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