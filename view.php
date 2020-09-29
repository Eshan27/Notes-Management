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
  <form action="" method="post" >
<button type="submit" formaction="sortview.php" style="font-size:15px; border-radius:5px;" name="diff">Sort By Difficulty</button>
<button type="submit" formaction="filtersub.php" style="font-size:15px; border-radius:5px;">Filter By Subjects</button>
<button type="submit" formaction="sortview.php" style="font-size:15px; border-radius:5px;" name="alpha">Sort Title Alphabetically</button>
<?php
require 'vendor/autoload.php';
$m=new MongoDB\Client("mongodb://localhost:27017");
//echo "connection successful";
$db=$m->notesmgmt;
$collection=$db->notes; 

 echo '<div class="container"> <table class="table"> <th>Subject</th> <th>Title</th> <th>Text</th> 
 <th>Tag 1</th> <th>Tag 2</th> <th>Tag 3</th> <th>Tag 4</th> <th>Difficulty</th> <th>Related Topics</th>';
  echo '<br>';
 $document=$collection->find();
	  foreach ($document as $doc){
		   echo '<tr><td>'.$doc->subjects.'</td> ';
		   echo '<td>'.$doc->title.'</td> ';
		   echo '<td>'.$doc->text.'</td> ';
		   echo '<td>'.$doc->first.'</td> ';
		   echo '<td>'.$doc->second.'</td> ';
		   echo '<td>'.$doc->third.'</td> ';
		   echo '<td>'.$doc->fourth.'</td> ';
		   echo '<td>'.$doc->difficulty.'</td> ';
		   echo '<td>'.$doc->topics.'</td> ';
		   //echo '<td>'.$doc->date.'</td> '
		   echo '<br>';
	  }
	  echo '</table></div>';
?>
</body>
<form action="" method="post" >
<button type="submit" formaction="index.php" style="font-size:20px; border-radius:5px;">Go to Home Page</button>
<button type="submit" formaction="operation.php" style="font-size:20px; border-radius:5px;">Go to Note Section's Page</button>
</form>
</html>