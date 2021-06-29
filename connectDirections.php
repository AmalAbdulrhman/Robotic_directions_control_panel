<?php 

$host ='localhost';
$un =  'root';
$pass = '';
$dbname = 'robotDirections';

$db = new mysqli($host , $un ,$pass, $dbname ) ;

switch ($_REQUEST['btn']){
case "F": 
    echo "~~~~~~~~~ clicked on forward :  F ~~~~~~~~~"; 
    $insert = mysqli_query($db ,"INSERT INTO baseDirections (direction) VALUES ('F')");
    break;
case "L":  
    echo "~~~~~~~~~ clicked on left :  L ~~~~~~~~~"; 
    $insert = mysqli_query($db ,"INSERT INTO baseDirections (direction) VALUES ('L') ");
    break;
case"S":  
    echo "~~~~~~~~~ clicked on Stop :  S ~~~~~~~~~";
    $insert = mysqli_query($db ,"INSERT INTO baseDirections (direction) VALUES ('S')" );
    break;
case"R":  
    echo "~~~~~~~~~ clicked on Right :  R ~~~~~~~~~"; 
    $insert = mysqli_query($db ,"INSERT INTO baseDirections (direction) VALUES ('R')");
    break;
case"B": 
     echo "~~~~~~~~~ clicked on Backward :  B ~~~~~~~~~"; 
     $insert = mysqli_query($db ,"INSERT INTO baseDirections (direction) VALUES ('B')");
     break;

}




mysqli_close($db);

?>