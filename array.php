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
        //create an array
        $myTodoList = array();
       // echo gettype($myTodoList);//array datatype
       $myTodoList[0] = "Sunday";
       $myTodoList[1] = "Monday";
       $myTodoList[2] = "Tuesday";
       $myTodoList[3] = 7;
       $myTodoList['working_hours'] = "8 to 5";


       $officeWork = array(
           'monday' => 'meeting with HOD',
           'Tuesday' => 'visit to client place at colombo 7',
           'Thursday' => 'meeting with BA'
       );


       $countryList  = array();
       $countryList[] ='Sri Lanka';
       $countryList[] ='Japan';
       $countryList[] ='China';

       //print
       print_r($myTodoList);
       echo "<hr>";
       var_dump($myTodoList);


       //loop
       echo "<table border ='1'>";
       foreach($myTodoList as $key => $value){
        echo "<tr>";
            echo "<td>";
                echo $key;
            echo "</td>";
            echo "<td>";
                echo $value;
            echo "</td>";
        echo "</tr>";
       }
       echo "</table>";

    echo "<hr>";
    print_r($countryList);
    
    ?>
    </body>
</html>