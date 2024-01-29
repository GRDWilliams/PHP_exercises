<?php
    declare(strict_types=1);

    // Solution for User Input Forms twoSubmit.php
?>
<!DOCTYPE html>
<html lang="en-GB">
 <head>
  <meta charset="UTF-8">
  <title><?php echo $_SERVER['PHP_SELF']?></title>
 </head>
 <body bgcolor="white">
  <h1>Worked answer for twoSubmit, Introduction to PHP</h1>
  <br>

<?php

// If submit1 is set then show values & say submit1 was set
if(isset($_GET['submit1'])) {
    echo "input1 has value " . htmlspecialchars($_GET['input1']) . "<br>";
    echo "input2 has value " . htmlspecialchars($_GET['input2']) . "<br>";
    echo "You pressed submit1<br>\n";
}

// If submit2 is set then show values & say submit2 was set
if(isset($_GET['submit2'])) {
    echo "input1 has value " . htmlspecialchars($_GET['input1']) . "<br>";
    echo "input2 has value " . htmlspecialchars($_GET['input2']) . "<br>";
    echo "You pressed submit2<br>\n";
}
?>

  <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
   <input type="text" name="input1"><br>
   <input type="text" name="input2"><br>
   <input type="submit" name="submit1" value="Press1">
   <input type="submit" name="submit2" value="Press2">
  </form>
 </body>
</html>
