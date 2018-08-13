<?php
    session_start();
    $paintType=$_REQUEST["paintType"];
    $array = explode(',', $paintType);
    session_write_close();
    if(strcmp($array[0],"1")== 0){
        sleep(3);
        session_start();
        $_SESSION['car'][$array[1]]['body_status'] = "true";
        
    }
    else{
        sleep(4);
        session_start();
        $_SESSION['car'][$array[1]]['wheel_status'] = "true";
    }
    $paintStatus=0;
    echo $paintStatus;

?>