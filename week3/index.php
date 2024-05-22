<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week3</title>
</head>
<body>
    <?php
        $hour = rand(1,24);
        echo $hour.'<br>';
        if($hour <= 6) {
            echo "Good Morning!";
        }
        if($hour > 6 && $hour <= 12) {
            echo "Good Afternoon!";
        }
        if($hour > 12 && $hour <= 18) {
            echo "Good Evening!";
        }
        if($hour > 18 && $hour <= 24) {
            echo "Good Night!";
        }
    ?>

    <?php
        $number = rand(1,100);
        echo '<br>'.$number.'<br>';

        if($number % 3 == 0) {
            echo "Fizz";
        }
        elseif($number % 5 == 0) {
            echo "Buzz";
        }
        elseif($number % 3 == 0 && $number % 5 == 0) {
            echo "FizzBuzz";
        }
        else {
            echo "The magic number is the number itself";
        }
    ?>
</body>
</html>