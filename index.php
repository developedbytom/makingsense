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
  //   if i/3 and i/5
  //     echo foo bar
  //   elseif i/3
  //     echo foo
  //   elseif i/5
  //     echo $bar
  //   else
  //     echo i
  
  
  // Step 2: make for loop and check runs from 1 to 100
  
  // // declare variables
  // $foo = "Making";
  // $sense = "Sense";

  // for ($i = 1; $i <= 100; $i++) {
  //   // if i/3 and i/5
  //     // echo foo bar
  //   // elseif i/3
  //     // echo foo
  //   // elseif i/5
  //     // echo $bar
  //   // else
  //   echo $i."<br>";
  // }


  // Step 3: added first modulo if statement

  // // declare variables
  // $foo = "Making";
  // $sense = "Sense";

  // for ($i = 1; $i <= 100; $i++) {
  //   // if the remainder of $i/3 is 0 i.e. if $i is a multiple of 3...
  //   if ($i%3 == 0) {
  //     echo $foo."<br>";
  //     // if i/3 and i/5
  //       // echo foo bar
  //     // elseif i/3
  //       // echo foo
  //     // elseif i/5
  //       // echo $bar
  //   } else {
  //     echo $i."<br>";
  //   }
  // }


  // Step 4: added remaining if/else checks

  // // declare variables
  // $foo = "Making";
  // $bar = "Sense";

  // for ($i = 1; $i <= 100; $i++) {
  //   // if the remainder of $i/3 is 0 and $i/5 is 0 i.e. if $i is a multiple of 3 and 5...
  //   if ($i%3 == 0 && $i%5 == 0) {
  //     echo $foo." ".$bar;
  //   } elseif ($i%3 == 0) {
  //     // if a multiple of 3...
  //     echo $foo;
  //   } elseif ($i%5 == 0) {
  //     // if a multiple of 5...
  //     echo $bar;
  //   } else {
  //     // if not a multiple of 3 and 5, or 3, or 5...
  //     echo $i;
  //   }
  //   // linebreak in every instance
  //   echo "<br>";
  // }

  
  // Step 5: check with other values

  // // declare variables
  // $foo = "Hire";
  // $bar = "Tom";

  // for ($i = 1; $i <= 100; $i++) {
  //   // if the remainder of $i/3 is 0 and $i/5 is 0 i.e. if $i is a multiple of 3 and 5...
  //   if ($i%3 == 0 && $i%5 == 0) {
  //     echo $foo." ".$bar;
  //   } elseif ($i%3 == 0) {
  //     // if a multiple of 3...
  //     echo $foo;
  //   } elseif ($i%5 == 0) {
  //     // if a multiple of 5...
  //     echo $bar;
  //   } else {
  //     // if not a multiple of 3 and 5, or 3, or 5...
  //     echo $i;
  //   }
  //   // linebreak in every instance
  //   echo "<br>";
  // }


  // Step 6: returned to original values and checked comments

  // declare variables
  $foo = "Making";
  $bar = "Sense";

  // for $i (starting at 1), where $i is less than or equal to 100, incrementing $i each loop...
  for ($i = 1; $i <= 100; $i++) {
    // if the remainder of $i/3 is 0 and $i/5 is 0 i.e. if $i is a multiple of 3 and 5...
    if ($i%3 == 0 && $i%5 == 0) {
      echo $foo." ".$bar;
    } elseif ($i%3 == 0) {
      // if a multiple of 3...
      echo $foo;
    } elseif ($i%5 == 0) {
      // if a multiple of 5...
      echo $bar;
    } else {
      // if not a multiple of 3 and 5, or 3, or 5...
      echo $i;
    }
    // linebreak in every instance
    echo "<br>";
  }

?>

</body>
</html>