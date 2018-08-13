<?php
session_start();
    
    
    $mybody = $_REQUEST["mybody"]; 
    $array = explode(',', $mybody);
    $_SESSION['car'][$array[1]]['body_status'] = "false";
    $_SESSION['car'][$array[1]]['body_type']=$array[0];
    $_SESSION['car'][$array[1]]['body_color']=$array[2];
    session_write_close();
    
    if(strcmp($array[0],"Similar to Ford Fiesta")== 0){
        sleep(3);
        
    }
    if(strcmp($array[0],"Similar to Ford Fusion")== 0){
        sleep(4);
        
    }
    if(strcmp($array[0],"Similar to Ford Mustang")== 0){
        sleep(5);
        
    }
    
    session_start();
    if(strcmp($array[2],"Blue") != 0){
        $_SESSION['car'][$array[1]]['body_status'] = "false";
        $bodyStatus=2;
        echo $bodyStatus;
    }
    else{
     $_SESSION['car'][$array[1]]['body_status'] = "true";
     $bodyStatus=0;
     echo $bodyStatus;
    }
?>
