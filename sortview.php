<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body{
      	background:#666666;
	   	background: -webkit-linear-gradient(#666666 0%, #00b7ea 100%);
   }
   </style>
</head>
<body>
   <?php>
    require 'vendor/autoload.php';
    $m=new MongoDB\Client("mongodb://localhost:27017");
    //echo "connection successful";
    $db=$m->notesmgmt;
    $collection=$db->notes; 
    if(isset($diff)){
    $sort1 = array('sort' => array('difficulty'=> 1));
    $document2 = $collection->find(array(),$sort1);
    
    echo '<div> 
        <table> <thead><th>Subject</th> <th>Title</th> <th>Text</th> <th>Tag 1</th> <th>Tag 2</th> <th>Tag 3</th> <th>Tag 4</th> <th>Difficulty</th> <th>Related Topics</th>  <th>Author</th></thead>';
        echo '<br>';
        foreach ($document2 as $doc){
        echo ' <tbody><tr><td>'.$doc->subjects.'</td> ';
        echo '<td>'.$doc->title.'</td> ';
        echo '<td>'.$doc->text.'</td> ';
        echo '<td>'.$doc->first.'</td> ';
        echo '<td>'.$doc->second.'</td> ';
        echo '<td>'.$doc->third.'</td> ';
        echo '<td>'.$doc->fourth.'</td> ';
        echo '<td>'.$doc->difficulty.'</td> ';
        echo '<td>'.$doc->topics.'</td> ';
        //echo '<td>'.$doc->date.'</td> ';
        echo '<td>'.$doc->authors.'</td></tr> <tbody> ';
        echo '<br>';
  }
  echo '</table></div>';;
}
    else{
        $sort2 = array('sortname' => array('title'=> 1));
        $document3 = $collection->find(array(),$sort2);
        
        echo '<div> 
            <table> <thead><th>Subject</th> <th>Title</th> <th>Text</th> <th>Tag 1</th> <th>Tag 2</th> <th>Tag 3</th> <th>Tag 4</th> <th>Difficulty</th> <th>Related Topics</th>  <th>Author</th></thead>';
            echo '<br>';
            foreach ($document3 as $doc){
            echo ' <tbody><tr><td>'.$doc->subjects.'</td> ';
            echo '<td>'.$doc->title.'</td> ';
            echo '<td>'.$doc->text.'</td> ';
            echo '<td>'.$doc->first.'</td> ';
            echo '<td>'.$doc->second.'</td> ';
            echo '<td>'.$doc->third.'</td> ';
            echo '<td>'.$doc->fourth.'</td> ';
            echo '<td>'.$doc->difficulty.'</td> ';
            echo '<td>'.$doc->topics.'</td> ';
            //echo '<td>'.$doc->date.'</td> ';
            echo '<td>'.$doc->authors.'</td></tr> <tbody> ';
            echo '<br>';
      }
      echo '</table></div>';;
    }
?>
</body>
<form action="" method="post" >
<button type="submit" formaction="index.php" style="font-size:20px; border-radius:5px;">Go to Home Page</button>
<button type="submit" formaction="operation.php" style="font-size:20px; border-radius:5px;">Go to Note Section's Page</button>
</form>
</html>