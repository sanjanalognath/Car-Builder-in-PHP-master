<?php
    session_start();
    $cusName=$_REQUEST["myname"];
    $assembly_status=1;
    //$_SESSION['car'][$cusName]=array('engine_type'=> "",'engine_status' => "false",'wheel_type'=> "",'wheel_color' => "",'wheel_status' => "false",'body_type'=> "",'body_color'=> "",'body_status' => "false",'assembly_progress'=>"Yet to start");
    $count=0;
    $custIdCount=0;
    $custId="";
    if (isset($_SESSION['custIdCount']))
    {
        $custIdCount=$_SESSION['custIdCount'];
        
    }
    if (isset($_SESSION['myCarCount']))
    {
        $count=$_SESSION['myCarCount'];
        
    }
    $count++;
    $custIdCount++;
    //echo "count--->".$count;
    $_SESSION['myCarCount']=$count;
    $_SESSION['custIdCount']=$custIdCount;
    if($count>4){
        $assembly_status=0;
        echo $assembly_status;
    }
    else{
        if($custIdCount>4){
            $custIdCount=1;
            $_SESSION['custIdCount']=$custIdCount;
        }
        $custId="cust".$custIdCount;
        $assembly_status =$custId;
        $_SESSION['car'][$custId]['costumer_active']="1";
        //$_SESSION['car'][$custId]=array('engine_type'=> "",'engine_status' => "false",'wheel_type'=> "",'wheel_color' => "",'wheel_status' => "false",'body_type'=> "",'body_color'=> "",'body_status' => "false",'assembly_progress'=>"Yet to start");
        echo $custId;
        
    }
        
    
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>