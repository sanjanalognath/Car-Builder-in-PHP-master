<?php
    session_start();
    $car_id = $_REQUEST["mydata"];
    //$car_id ="cust1";
    $assembly_status="1";
    session_write_close();
    while(1){
        //session_start();
        $assembly_progress= $_SESSION['car']['cust1']['assembly_progress'];
        //session_write_close();
        if($assembly_progress == "Completed"){
            die("0");
        }   
        session_write_close();
                sleep(1);
        session_start();
       
    } 
     //echo $assembly_status;
    
?>

