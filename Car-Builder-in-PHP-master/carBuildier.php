<?php
    session_start();
    //$cusName=$_REQUEST["mydata"];
    $_SESSION['car']['cust1']=array('costumer_active'=>"",'engine_type'=> "",'engine_status' => "false",'wheel_type'=> "",'wheel_color' => "",'wheel_status' => "false",'body_type'=> "",'body_color'=> "",'body_status' => "false",'assembly_progress'=>"Yet to start");
    $_SESSION['car']['cust2']=array('costumer_active'=>"",'engine_type'=> "",'engine_status' => "false",'wheel_type'=> "",'wheel_color' => "",'wheel_status' => "false",'body_type'=> "",'body_color'=> "",'body_status' => "false",'assembly_progress'=>"Yet to start");
    $_SESSION['car']['cust3']=array('costumer_active'=>"",'engine_type'=> "",'engine_status' => "false",'wheel_type'=> "",'wheel_color' => "",'wheel_status' => "false",'body_type'=> "",'body_color'=> "",'body_status' => "false",'assembly_progress'=>"Yet to start");
    $_SESSION['car']['cust4']=array('costumer_active'=>"",'engine_type'=> "",'engine_status' => "false",'wheel_type'=> "",'wheel_color' => "",'wheel_status' => "false",'body_type'=> "",'body_color'=> "",'body_status' => "false",'assembly_progress'=>"Yet to start");
    $car_id ="cust1";
    $status=1;
    $assemblyCount=1;
    
    echo $car_id;
    session_write_close();
    while(1){
        echo $car_id;
        //session_start();
        $engStatus=$_SESSION['car'][$car_id]['engine_status'];
        $wheelStatus= $_SESSION['car'][$car_id]['wheel_status'];
        $bodystatus= $_SESSION['car'][$car_id]['body_status'];
        $costumer_active= $_SESSION['car'][$car_id]['costumer_active'];
        //session_write_close();
        //if($wheelStatus == "true" && $engStatus == "true" && $bodystatus == "true" && $costumer_active == "1"){
        if($engStatus == "true" && $costumer_active == "1"){    
            $_SESSION['car'][$cusName]['assembly_progress']="In progress";
            session_write_close();
                sleep(3);
            session_start();
            $_SESSION['car'][$cusName]['assembly_progress']="Completed";

            $_SESSION['myCarCount']--;
            echo "Completed";
            $status=0;
            die("0");
        }
        if($status == 0){
            $assemblyCount++;
            if($assemblyCount>4){
                $assemblyCount=1;
            }
            $car_id="cust".$assemblyCount;
            $status=1;
            //die("finished");
        }
        //session_write_close();
                //sleep(1);
        //session_start();
        
    }
    
?>