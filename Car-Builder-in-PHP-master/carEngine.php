<?php
    session_start();
    
    
    
    $myengine = $_REQUEST["myengine"];
    
    
    $array = explode(',', $myengine);
    $_SESSION['car'][$array[1]]['engine_status'] = "false";
    $_SESSION['car'][$array[1]]['engine_type']=$array[0];
    session_write_close();
    
    sleep(8);
        
    
    
    session_start();
     $_SESSION['car'][$array[1]]['engine_status'] = "true";
     $_SESSION['car'][$array[1]]['assembly_progress']="In progress";
     $engStatus=0;
     session_write_close();
  //print "<p>Hi, $array[1] ---$ $engtype $engStatus Engine is ready.</p> ";
     echo $engStatus;
?>

