<?php 
session_start();
require 'vendor/autoload.php';
$m=new MongoDB\Client("mongodb://localhost:27017");

$db=$m->notesmgmt;
$collection=$db->dailydata;
//echo $_POST;
$_POST['authors']= $_SESSION['auSession'];

if ($_POST){
$insert=array(
'subjects'=>$_POST['subjects'],
'title'=>$_POST['title'],
'total'=>$_POST['total'],
'date'=>$_POST['date'],
'authors'=>$_POST['authors'],
);
if ($collection->insertOne($insert)){
	echo "Data Inserted";
}
else{
	echo "Errors or Issues found!";
}
	
}
else{
	echo "Data Entered was Null";
}
?>
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
  ></head>

</head>
<body>
<form action="" method="post" >
<button type="submit" formaction="/mongo/dailydata.php" class="btn btn-primary" style="font-size:20px; border-radius:5px;">Go to Daily Data Section's Page</button>
</form>
</body>
</head>