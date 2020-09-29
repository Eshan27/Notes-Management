
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{
      background:#666666;
	    background: -webkit-linear-gradient(#666666 0%, #00b7ea 100%);
    }
    h1{
      text-align: center;
    }
    .container{
      text-align: center;
    }
    #authors{
      padding: 15px;
      margin: 10px;
      font-size: 15px;
      border-radius: 10px;
    }
  </style>
<body>
<?php
    session_start();
    //$auSession="";
    extract($_POST);
	if(isset($submit)){
		//echo $_POST['authors'];
		$_SESSION['auSession'] = $_POST['authors'];
      if(isset($_POST['radio']) && ($_POST['radio']) == "notes"){

    header("Location: operation.php"); 

 }

elseif(isset($_POST['radio']) && ($_POST['radio']) == "data"){

    header("Location: dailydata.php"); 

 }
        
    }
?>

<header>
  <h1>Home Page</h1>
</header>
  

<div class="container">
  <div class="row">
            <form action= "/mongo/index.php" method="post" style="align: center; height: 60%; width: 60%; padding-left: 7.8cm; border: 2px ; border-radius: 25px; font-size: 20px;">
 <label for="authors">Select author:</label></br></br>
  
                <input type="radio" value="authorA" name="author">Author A<br>
                <input type="radio" value="authorB" name="author">Author B<br>
                <input type="radio" value="authorC" name="author">Author C<br>
</select>
  <br>
    <label for="sections">Notes To be added to:</label></br> </br>
    <input type="radio" name='radio' value="notes" style="font-size:30px;">Notes Section<br>
    <input type="radio" name='radio' value="data" style="font-size:30px;">Daily Data Section<br></br>
  <button type="submit" name="submit"  value="Submit" class="btn btn-primary"style="font-size:20px; border-radius:5px;">Submit</button>
  </form>
 </div>
 </div>
 <br><br>
  
</body>
</html>