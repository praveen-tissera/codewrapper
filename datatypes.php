<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Datatypes</title>
        
    </head>
    <body>
    <?php 
    // php have range of datatypes
    /*
        1. string
        2. integer
        3. float or double
        4. boolean
        5. array
        6. object

     */
    
     echo gettype("this is string");//example string datatype
     echo "<br>";
     echo gettype(1234);//example integer datatype
     echo "<br>";
     echo gettype(11.455);//example float or double datatype
     echo "<br>";
     echo gettype(true);//example boolean datatype
     echo "<br>";
     $myarray = array();
     echo gettype($myarray);//example array datatype
     echo "<br>";
     class myClass{}
    $myObj = new myClass();
    echo gettype($myObj);//example object datatype
    echo "<br>";


    
    ?>



    </body>
</html>