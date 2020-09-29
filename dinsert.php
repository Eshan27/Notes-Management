<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
   body{
        background:#666666;
	    background: -webkit-linear-gradient(#666666 0%, #00b7ea 100%);
        height: 100%;
   }
   h1{
     text-align: center;
   }
   input{
     border:white;
     border-radius:4px;
     height:20%;
     padding: 12px 20px;
     margin: 8px 0;
   }
   select{
     border:white;
     border-radius:4px;
   }
  </style>
</head>
<?php
session_start();
$auth= $_SESSION['auSession'];
?>
<body>
<div>
<h1>Daily Data Management</h1>

<form action="dconnect.php" method="post" name="insnotes" style="align: center; 
height: 100%; width: 60%; padding-left: 7.8cm; border: 2px ; border-radius: 25px; font-size: 25px;">
  <div>
    <label for="subjects">Subjects:</label>
    <select name="subjects" id="subjects" style="font-size:20px;"></br></br>
	    <option value="physics">Physics</option>
	    <option value="chemistry">Chemistry</option>
	    <option value="maths">Maths</option>
	    <option value="biology">Biology</option>
	  </select>
  </div>
  <div>
    <label for="title">Number Of Notes Entered: </label>
    <input type="title" id="title" name="title"><br><br>
  </div>
  <div>
    <label for="total">Total Notes Entered: </label>
    <input type="total" id="total" name="total"><br><br>
    </textarea>
  </div>
  <div>
    <label for="Date">Date:</label>
    <input type="date" id="date" name="date">
  </div>
  <!--<div>
  

  <input type='date' name="date" hidden value='<?php //echo date('d-m-y');?>'>
  </div>-->
  <div>
    <label for="authors">Selected Author: </label>
    <input type="text" id="authors" name="authors" value="<?php echo $auth?>" disabled>
  </div>
  
  <button type="submit" style="font-size:20px; border-radius:5px;">Submit</button>
  <button type="submit" formaction="dailydata.php" style="font-size:20px; border-radius:5px;">Go to Daily Data Section's Page</button>
</form>
</div>

</body>
</html>