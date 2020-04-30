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
if(true){
// this is true path
    if(true){

    }else{
        
    }
}else{
    //this is fail path
}

$username = 'john';
$password = '1qaz2wsx@A';


$loginUsername = 'john';
$loginPassword = '1qaz2wsx@A';

if(($username == $loginUsername) && ($password == $loginPassword)){
    echo "You can login";
}else{
    echo "you are not allow to login";
}


?>
    </body>
</html>