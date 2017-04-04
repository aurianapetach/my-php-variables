<?php
  $title = 'Variables';
  $name = 'Timmy';
  $catnumber = 8;
  $turtlenumber = 4; 
  $petrocknumber = 1;
  $dognumber = 1;
  // Let's get the age based on birth year
  $currentYear = date("Y");
  $birthYear = 2004;
  $totalpets = $catnumber + $turtlenumber + $dognumber + $petrocknumber;

  // Let's get the real age based on dates
  $dob = '08/07/1996'; 
  $dogage = $currentYear - $birthYear;
  $humanyears = $dogage * 7;


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1 class="pb-4">Hey there, <?php echo $name; ?></h1>
      <?php echo '<p>I hear you have '.$catnumber.' cats, '.$turtlenumber.' turtles, '.$dognumber.' dog and '.$petrocknumber.' pet rock. So you have '.$totalpets.' pets, huh? That&rsquo;s like a zoo!</p>'; ?>
    <?php echo '<p>Your dog was born in '.$birthYear.', so he is '.$dogage.'. That&rsquo;s the equivalent of '.$humanyears.' human years!</p>' ; ?> 
    </main>  
    </body>
</html>