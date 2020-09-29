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
$collection=$db->notes; 
  if($_POST){
		   //echo '<p>update clicked</p>';
		   $id=$_POST['del'];
//echo $id;




$collection->updateOne(['_id' => new \MongoDB\BSON\ObjectID($_POST['del'])], 
['$set' => ['subjects' => $_POST['subjects'],'title' => $_POST['title'],'text' => $_POST['text'],
'first' => $_POST['first'],'second' => $_POST['second'],'third' => $_POST['third'],'fourth' => $_POST['fourth'],
'difficulty' => $_POST['difficulty'],'topics' => $_POST['topics'],'authors' => $_POST['authors']]]); 

}
echo '<div class="container"> <table class="table"> <th>Subject</th> <th>Title</th> <th>Text</th> <th>Tag 1</th> <th>Tag 2</th> <th>Tag 3</th> <th>Tag 4</th> <th>Difficulty</th> <th>Topics</th>  <th>Operation</th>';
echo '<br>';
$document=$collection->find();
	  foreach ($document as $doc){
		   echo '<form action="update1.php" method="post"  name="update"><tr><input type="hidden" value='.$doc->_id.' name="del" >
		   </input><td><input name="subjects"value="'.$doc->subjects.'"/></td> ';
		   echo '<td><input name="title"value="'.$doc->title.'"/></td> ';
		   echo '<td><input name="text"value="'.$doc->text.'"/></td> ';
		   echo '<td><input name="first"value="'.$doc->first.'"/></td> ';
		   echo '<td><input name="second"value="'.$doc->second.'"/></td> ';
		   echo '<td><input name="third"value="'.$doc->third.'"/></td> ';
		   echo '<td><input name="fourth"value="'.$doc->fourth.'"/></td> ';
		   echo '<td><input name="difficulty"value="'.$doc->difficulty.'"/></td> ';
		   echo '<td><input name="topics"value="'.$doc->topics.'"/></td> ';
		   //echo '<td><input type="date" name="date"value="'.$doc->date.'"/></td> ';
		   echo '<td><input type="submit" name="submit" value="Update"></input></td></tr></form> ';
		   echo '<br>';
	  }
	  echo '</table></div>';
	  
	
	  
	  
?>
<form action="" method="post" >
<button type="submit" formaction="operation.php" style="font-size:20px; border-radius:5px;">Go to Note Section's Page</button>
</form>
</body>
</html>