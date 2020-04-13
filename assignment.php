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
        echo "<h1>Assignment operator</h1>";

        $count = 10;

        //$count = $count + 5;
        $count += 5;


        echo "<input type='text' value='$count'>";
        echo "<input type=\"text\" value=\"$count\">";

    
    ?>
    
    </body>
</html>