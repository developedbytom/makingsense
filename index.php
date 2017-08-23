<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inspira: Making Sense</title>
</head>
<body>
  
<?php 

  // Step 1: write out proposed structure
  
  // foo = making
  // bar = sense
  // for i < 100
    // if i/3 and i/5
      // echo foo bar
    // elseif i/3
      // echo foo
    // elseif i/5
      // echo $bar
    // else
      // echo i
  
  
  // Step 2: make for loop and check runs from 1 to 100
  
  // declare variables
  $foo = "Making";
  $sense = "Sense";

  for ($i = 1; $i <= 100; $i++) {
    // if i/3 and i/5
      // echo foo bar
    // elseif i/3
      // echo foo
    // elseif i/5
      // echo $bar
    // else
    echo $i."<br>";
  }


?>

</body>
</html>