<html>
<head>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   body{
      background:#666666;
	   background: -webkit-linear-gradient(#666666 0%, #00b7ea 100%);
   }
   section{
      font-size:15px;
   }
   input[type=radio]{
      font-size: 15px;
   }

</style>
</head>
<?php
 session_start();
require 'vendor/autoload.php';
$m=new MongoDB\Client("mongodb://localhost:27017");
echo "Welcome to Daily Data Section ";
echo $_SESSION['auSession'];
$db=$m->notesmgmt;
$collection=$db->dailydata;
if(isset($_POST['radio']) && ($_POST['radio']) == "add"){

    header("Location: dinsert.php"); 

 }

elseif(isset($_POST['radio']) && ($_POST['radio']) == "delete"){

    header("Location: ddelete.php"); 

 }

 elseif(isset($_POST['radio']) && ($_POST['radio']) == "view"){
    header("Location: dview.php"); 
 }
	
 elseif(isset($_POST['radio']) && ($_POST['radio']) == "update"){
    header("Location: dupdate.php"); 
	 
 }
 ?> 
<body>
<header>
   <h1>Daily Data Section:</h1></br>
</header>
<section>
            <form action="/mongo/dailydata.php" method="post">
                
                <input type="radio" name='radio' value="add" >Add Data<br><br>
                <input type="radio" name='radio' value="delete" >Delete Data<br><br>
                <input type="radio" name='radio' value="update" >Update Data<br><br>
				<input type="radio" name='radio' value="view" >View Data<br><br>
               
				
<button type="submit" name="submit"  value="Submit" style="font-size:20px; border-radius:5px;">Submit</button>
<button type="submit" formaction="/mongo/index.php" style="font-size:20px; border-radius:5px;">Go to HomePage</button>
            </form>
</section>
</body>
</html>
