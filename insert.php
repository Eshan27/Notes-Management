<!DOCTYPE html>
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
<div class="container">
<h1>Notes Management</h1>

<form action="connect.php" method="post" name="insnotes" style="align: center; 
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
    <label for="title">Notes Title: </label>
    <input type="title" id="title" name="title"><br><br>
  </div>
  <div>
    <label for="text">Notes:</label>
    <textarea id="text" name="text" rows="4" cols="30">
      Enter your notes
    </textarea>
  </div>
  <h4>Tags:</h4>
  <div>
    <label for="first">Tag 1: </label>
    <input type="text" id="first" name="first">
  </div>
  <div>
    <label for="second">Tag 2: </label>
    <input type="text" id="second" name="second">
  </div>
  <div>
    <label for="third">Tag 3: </label>
    <input type="text" id="third" name="third">
  </div>
  <div>
    <label for="fourth">Tag 4: </label>
    <input type="text" id="fourth" name="fourth">
  </div>
  <div>
    <label for="difficulty">Difficulty Level: </label>
    <input type="number" step=1 id="difficulty" name="difficulty">
  </div>
  <div>
    <label for="topics">Related topics: </label>
    <input type="text" id="topics" name="topics">
  </div>
  <!--<div>
  

  <input type='date' name="date" hidden value='<?php //echo date('d-m-y');?>'>
  </div>-->
  <div>
    <label for="authors">Selected Author: </label>
    <input type="text" id="authors" name="authors" value="<?php echo $auth?>" disabled>
  </div>
  
  <button type="submit" style="font-size:20px; border-radius:5px;">Submit</button>
  <button type="submit" formaction="operation.php" style="font-size:20px; border-radius:5px;">Go to Note Section's Page</button>
</form>
</div>

</body>
</html>