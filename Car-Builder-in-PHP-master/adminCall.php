<?php
    session_start();
    $temp1="";
        if (isset($_SESSION['car']))
        {
            $types=$_SESSION['car'];
            //$temp1="";
            $cusCount= count($types);

            $keys = array_keys($types);
            if($cusCount > 4){
                array_splice($_SESSION['car'], 0, 1);
            } 

            /*for($i = 0; $i < count($types); $i++) {
                echo $keys[$i] . "<br>";
                foreach($types[$keys[$i]] as $key => $value) {
                    echo $key . " : " . $value . "<br>";
                }
                echo "<br>";
            } */
            for($i = 0; $i < count($types); $i++) {
                $temp1= $temp1."<p> $keys[$i]  <br></p> ";
                foreach($types[$keys[$i]] as $key => $value) {
                    $temp1=$temp1."<p>$key   :   $value . <br></p>";
                }
                $temp1=$temp1."<p><br></p>";
            }    
        }
        session_write_close();
        sleep(3);
        session_start();
        echo $temp1;
        //session_write_close();
            //sleep(3);
        //session_start();

?>