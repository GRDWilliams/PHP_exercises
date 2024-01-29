<?php
declare(strict_types=1);

// Intro, login Box

// About to generate a redirect on success, must have no output before
// the header is sent

// // Is the 'submit' member of the $_GET array set ?
// if(isset($_GET['submit'])) {
//     // Does the value of the 'username' member of $_GET have the value 'George' ?
//     if($_GET['username'] == "George") {
//         // Does the password have the value 'George' ?
//         if($_GET['password'] == "George") {
//             // Reward success by showing the BBC home page:
//             header("Location: https://www.bbc.co.uk/");
//             exit;
//         }
//     }

//     // Indicate that the login failed by setting $badlogin
//     $badlogin = true;
// }

// Is the 'submit' member of the $_POST array set ?
if(isset($_POST['submit'])) {
    // Does the value of the 'username' member of $_POST have the value 'George' ?
    if($_POST['username'] == "George") {
        // Does the password have the value 'George' ?
        if($_POST['password'] == "George") {
            // Reward success by showing the BBC home page:
            header("Location: https://www.bbc.co.uk/");
            exit;
        }
    }

    // Indicate that the login failed by setting $badlogin
    $badlogin = true;
}

?>
<!DOCTYPE html>
<html lang="en-GB">
 <head>
  <meta charset="UTF-8">
  <title><?php echo $_SERVER['PHP_SELF']?></title>
 </head>
 <body>
  <h1>Worked answer for Introduction loginBox</h1>
<?php

// Variable $badlogin will only be set if the username or password is incorrect
if(isset($badlogin)) {
    echo "Sorry, the username or password were incorrect<br>";
}

?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
   <input type="text" name="username"><br>
   <input type="password" name="password"><br>
   <input type="submit" name="submit" value="Go!">
  </form>
 </body>
</html>
