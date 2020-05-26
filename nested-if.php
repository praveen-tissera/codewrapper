<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
    <?php 
    
    $ball = "green";

    $redBox = 'red';
    $greeBox = 'green';
    $blueBox = 'blue';
    $redCount = 0;
    $greenCount = 0;
    $blueCount = 0;

    // nested if
    if($ball == $greeBox){
        //increment 
        $greenCount += 1; //$greenCount = $greenCount +1;
    }else if($ball == $redBox){
        $redCount += 1;
    }else if($ball == $blueBox){
        $blueCount += 1;
    }else{
       echo "Ball color not match"; 
    }
    
    echo "Count in box green : " . $greenCount . "<br>";
    echo "Count in box red : " . $redCount . "<br>";
    echo "Count in box blue : " . $blueCount . "<br>";
    ?>
    </body>
</html>