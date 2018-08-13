<?php
session_start();


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
    <body onload="timer = setTimeout('auto_reload()',3000);">
    <!--<body onload="ajaxCall()">-->
        <div id="wrapper">
            <div id="header">
            <!--<h1><a href="index.php"><img src="xres/images/logo.png" class="logo" alt="James Buchanan Pub and Restaurant" /></a></h1>-->
            
            </div>
            
            <div id="content">
                <div id="rotator">
                    
		<form action="carEngine.php" method="post" style="margin-bottom:none;">	
                    
                   <h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Admin Status</h2>
                    <p id="thispart" style="height:auto; width: 860px;"> We are updating your status</p>
                    <p id="thispart2" style="height:auto; width: 860px;">
                    <?php 
                    
                        /*$temp=$_SESSION["he"]['engine_type'];
                        $temp2=$_SESSION["he"]['engine_progress'];*/

                        //print "<p>$temp---$temp2</p> ";  
                   if (isset($_SESSION['car']))
                    {
                        $types=$_SESSION['car'];
                        
                        $cusCount= count($types);
                         
                        $keys = array_keys($types);
                        if($cusCount > 4){
                            array_splice($_SESSION['car'], 0, 1);
                        } 
                       
                        for($i = 0; $i < count($types); $i++) {
                            echo $keys[$i] . "<br>";
                            foreach($types[$keys[$i]] as $key => $value) {
                                echo $key . " : " . $value . "<br>";
                            }
                            echo "<br>";
                        } 
                    }    
                    ?>
                    </p>
                    <p id="thispart3" style="height:auto; width: 860px;"><br></p>
                    <p id="thispart4" style="height:auto; width: 860px;"><br></p>
                </form>
                <script type = "text/javascript">   
                    var timer = null;
                    function auto_reload(){
                    
                        window.location = 'http://localhost/PhpProject2/manufacturer.php'; 
                    }
                    
                    function ajaxCall(){
                        while(true){
                            request = new XMLHttpRequest();
                            request.open("GET","adminCall.php",true); 
                            
                            request.onreadystatechange = function () {
                                //alert("resdy-->"+this.readyState+"request.status-->"+request.status);
                                if (this.readyState == 4 && request.status == 200){
                                     
                                        document.getElementById("thispart").innerHTML = request.responseText;
                                        document.getElementById("thispart").style.font = "italic bold 15px arial,serif";
                                         
                                      
                                } 
                            };
                            
                            request.send();
                                sleep(3);
                        }    
                    }
                </script>   
        </div>
                
    </body>
</html>
