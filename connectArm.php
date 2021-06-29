<?php 

$host ='localhost';
$un =  'root';
$pass = '';
$dbname = 'roboticArm';

$db = new mysqli($host , $un ,$pass, $dbname ) ;

$Slider1 = mysqli_real_escape_string($db, $_POST['slider1']);   
$Slider2 = mysqli_real_escape_string($db, $_POST['slider2']); 
$Slider3 = mysqli_real_escape_string($db, $_POST['slider3']); 
$Slider4 = mysqli_real_escape_string($db, $_POST['slider4']); 
$Slider5 = mysqli_real_escape_string($db, $_POST['slider5']); 
$Slider6 = mysqli_real_escape_string($db, $_POST['slider6']); 


 if (isset($_POST['save'])){

    $insert = mysqli_query($db , "INSERT INTO control_panel ( M1 , M2 , M3 , M4 , M5 , M6 , ArmState)
    VALUES ('$Slider1' , '$Slider2' , '$Slider3' , '$Slider4' , '$Slider5' , '$Slider6' ,'off') " );
    
    echo "<b> Motor 1: </b>" .$Slider1 ;
    echo "<br><b> Motor 2: </b>" .$Slider2 ;
    echo "<br><b> Motor 3:  </b>" .$Slider3 ;
    echo "<br><b> Motor 4:  </b>" .$Slider4 ;
    echo "<br><b> Motor 5:  </b>" .$Slider5 ;
    echo "<br><b> Motor 6:  </b>" .$Slider6 ;
    echo "<br><b> State: OFF  </b>"  ;


   } else if ( isset($_POST['run'])){

    $insert = mysqli_query($db , "INSERT INTO control_panel ( M1 , M2 , M3 , M4 , M5 , M6 , ArmState)
    VALUES ('$Slider1' , '$Slider2' , '$Slider3' , '$Slider4' , '$Slider5' , '$Slider6' ,'on') " ); 

   echo "<b> Motor 1: </b>" .$Slider1 ;
   echo "<br><b> Motor 2: </b>" .$Slider2 ;
   echo "<br><b> Motor 3:  </b>" .$Slider3 ;
   echo "<br><b> Motor 4:  </b>" .$Slider4 ;
   echo "<br><b> Motor 5:  </b>" .$Slider5 ;
   echo "<br><b> Motor 6:  </b>" .$Slider6 ;
   echo "<br><b> State: ON </b>" ;

   }

   mysqli_close($db);

?>