<?php
session_start();

  
  
  $mywheel = $_REQUEST["mywheel"]; 
    $array = explode(',', $mywheel);
    $_SESSION['car'][$array[1]]['wheel_status'] = "false";
    $_SESSION['car'][$array[1]]['wheel_type']=$array[0];
    $_SESSION['car'][$array[1]]['wheel_color']=$array[2];
    session_write_close();
    if(strcmp($array[0],"1")== 0){
        sleep(12);
    }
    if(strcmp($array[0],"2")== 0){
        sleep(13);
    }
    if(strcmp($array[0],"3")== 0){
        sleep(14);
    }
    session_start();
     
     if(strcmp($array[2],"Blue") != 0){
        $_SESSION['car'][$array[1]]['wheel_status'] = "false";
        $wheelStatus=2;
        echo $wheelStatus;
    }
    else{
     $_SESSION['car'][$array[1]]['wheel_status'] = "true";
     $wheelStatus=0;
     echo $wheelStatus;
    }
  
?>

