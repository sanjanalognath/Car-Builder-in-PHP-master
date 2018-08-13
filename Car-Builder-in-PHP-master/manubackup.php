<?php
session_start();
$_SESSION['myWheelStatus']= "false";
$_SESSION['myengineStatus']= "false";
$_SESSION['myBodyStatus']= "false";
$_SESSION['myengineCount']=0;
if (isset($_SESSION['myCarCount']))
{
    //Do stuff
}
else{
    $_SESSION['myCarCount']=0;
}

?> 

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Jack Car Builder</title>
        <link href="xres/css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="xres/css/style.css" />
        <link rel="icon" type="image/png" href="xres/images/favicon.png" />
        <!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
        <script type="text/javascript" src="xres/js/saslideshow.js"></script>
        <script type="text/javascript" src="xres/js/slideshow.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
            <!--<h1><a href="index.php"><img src="xres/images/logo.png" class="logo" alt="James Buchanan Pub and Restaurant" /></a></h1>-->
            
            </div>
            
            <div id="content">
                <div id="rotator">
                    
		<form action="carEngine.php" method="post" style="margin-bottom:none;">	
                    
                   <h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">My Status</h2>
                    <p id="thispart" style="height:auto; width: 860px;"> We are updating your status</p>
                    <p id="thispart2" style="height:auto; width: 860px;">
                        <table>
                    <?php
                            $types=array("jack"=>array('engine_type'=> "250",
                                                    'engine_status' => "false",'wheel_status' => "false",
                                                    'wheel_type'=> "1",'body_status' => "false",
                                                    'body_type'=> "",'assembly_progress'=>"Yet to start"),
                                    
                                    "adi"=>array('engine_type'=> "150",'engine_status' => "false",
                                        'wheel_status' => "false",'wheel_type'=> "2",
                                        'body_status' => "false",'body_type'=> "",
                                        'assembly_progress'=>"in assembly"),
                                    
                                    "nit"=>array('engine_type'=> "150",'engine_status' => "false",
                                        'wheel_status' => "false",'wheel_type'=> "2",
                                        'body_status' => "false",'body_type'=> "",
                                        'assembly_progress'=>"in assembly"));
                            
$keys = array_keys($types);
for($i = 0; $i < count($types); $i++) {
    echo $keys[$i] . "<br>";
    foreach($types[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
                            }
                    ?>
                    </table>
                    </p>
                    <p id="thispart3" style="height:auto; width: 860px;"><br></p>
                    <p id="thispart4" style="height:auto; width: 860px;"><br></p>
                </form>
                   
        </div>    
    </body>
</html>