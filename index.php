<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo("Hello"); ?>
    <?php echo "<h1>Welcome to HTTP5225</h1>" ?>
    <?php echo '<p>We will learn PHP</p>' ?>
    <?php echo "<p>Things we will learn:</p>" ?>
    <?php
    '<ul>
        <li>PHP</li>
        <li>mySQL</li>
        <li>Laravel</li>
    </ul>';
    ?>
    <img src="<?php echo 'https://placehold.co/600x400'; ?>">
    <?php echo '<img src="https://placehold.co/600x400">' ?>

    <?php 
        $fname = "Bhavya";
        $lname = "Patel";
        $name['fname'] = "Bhavya";
        $name2 = array("Bhavya", "Patel");
    ?>

    <?php 
        echo "<br>Hello " . $fname . " " . $lname . "!";
        echo "<br>Hello " . $name['fname'] . " " . $lname . "!";
        echo "<br>Hello " . $name2[0] . " " . $name2[1] . "!";
    ?>
</body>
</html>