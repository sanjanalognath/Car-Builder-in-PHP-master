<?php
session_start();
$_SESSION['myWheelStatus']= "false";
$_SESSION['myengineStatus']= "false";
$_SESSION['myBodyStatus']= "false";
$_SESSION['myengineCount']=0;
$_SESSION['cusName']="";


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
            <ul id="mainnav">
               
            </ul>
            </div>
            
            <div id="content">
                <div id="rotator">
                    
		<form action="carEngine.php" method="post" style="margin-bottom:none;">	
                    <h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">My Car</h2>
                    <table style="height:auto; width: 860px;" >
                        <tr style="height:auto; width: 860px;">
                            <td style="height:auto; width: 230px;">
                                
                                <div id="logo" style="left: 100px; height: auto; top: 23px; width: 230px; position: absolute; z-index:4;">

                                    
                                    <div class="accordion-content" style="margin-bottom: 15px;">

                                            <span style="margin-right: 11px;">Select Engine:
                                            <select name="engine" id="engine" style="width: 191px; margin-right: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
                                            <option value="150 horsepower">150 horsepower</option>
                                            <option value="250 horsepower">250 horsepower</option>
                                            <option value="400 horsepower">400 horsepower</option>
                                            </select>
                                            </span><br><br><br>
                                            <span style="margin-right: 9px;">Car Bodies:
                                            <select name="carBody" style="width: 191px; margin-left: 1px; border: 3px double #CCCCCC; padding:5px 10px;">
                                            <option>Similar to Ford Fiesta</option>
                                            <option>Similar to Ford Fusion</option>
                                            <option>Similar to Ford Mustang</option>
                                            </select>
                                            </span><br><br><br>
                                            <span style="margin-right: 9px;">Wheel Type:<br>
                                                <div class="radio-btn">  
                                                        <input id="option1" type="radio" name="carWheel" value="1" >
                                                        <label for="option1">
                                                            <img src="xres/images/wheel1.jpg" class="radio-image">
                                                            <p class="radio-heading">Wheel 1</p>
                                                           
                                                        </label>
                                            </div>

                                            <div class="radio-btn">  
                                                        <input id="option2" type="radio" name="carWheel" value="2">
                                                        <label for="option2">
                                                            <img src="xres/images/wheel2.jpg" class="radio-image">
                                                            <p class="radio-heading">Wheel 2</p>
                                                        
                                                        </label>
                                            </div>  
                                            <div class="radio-btn">  
                                                        <input id="option2" type="radio" name="carWheel" value="3" >
                                                        <label for="option2">
                                                            <img src="xres/images/wheel3.jpg" class="radio-image">
                                                            <p class="radio-heading">Wheel 3</p>
                                                            
                                                        </label>
                                            </div>  
<!--                                            <input type="radio" name="carWheel" value="1">wheel1 <img src="wheel1.jpg"><br>
                                            <input type="radio" name="carWheel" value="2">wheel2<img src="wheel2.jpg"><br>
                                            <input type="radio" name="carWheel" value="3">wheel3<img src="wheel2.jpg">-->
                                            </span><br><br><br>
                                            
                                    </div>

                                </div>
                                 
                                <td style="height:auto; width: 230px;">
                                    <div id="logo" style="right: 100px; height: auto; top: 23px; width: 230px; position: absolute; z-index:4;">
                                        <div class="accordion-content" style="margin-top: 0px;">
                                            <span style="margin-right: 11px;">Customer Name:
                                               <input type="text" name="myname" id="myname" style="height: 20px;  width: 140px; padding: 5px; "/>
                                            </span><br><br><br>
                                            
                                            <span style="margin-right: 11px;">Car Color:
                                                <select name="carColor" style="width: 191px; margin-right: 25px; border: 3px double #CCCCCC; padding:5px 10px;"/>
                                                <option>Blue</option>
                                                <option>Red</option>
                                                <option>Gold</option>
                                                </select>
                                            </span><br><br><br>
                                            <span style="margin-right: 11px;">Wheel Color:
                                                <select name="wheelColor" style="width: 191px; margin-right: 25px; border: 3px double #CCCCCC; padding:5px 10px;"/>
                                                <option>Blue</option>
                                                <option>Red</option>
                                                <option>Gold</option>
                                                </select>
                                            </span><br><br><br><br><br><br>
                                            <button type = "button"  onclick = "carCount(this.form)" style="height: 34px;  width: 140px; padding: 5px; " id="submit">
                                            Submit
                                           </button>
                                            
                                        </div>
                                    </div>    
                                </td>
                            </tr>
                    </table>
                    <h2 style="height: 18px; margin-top: 360px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">My Car Status</h2>
                    <p id="thispart" style="height:auto; width: 860px;"> We are updating your status</p>
                    <p id="thispart2" style="height:auto; width: 860px;"><br></p>
                    <p id="thispart3" style="height:auto; width: 860px;"><br></p>
                    <p id="thispart4" style="height:auto; width: 860px;"><br></p>
                    <p id="thispart5" style="height:auto; width: 860px;"><br></p>
                </form>
                <script type = "text/javascript">
                    
                    function carCount(theform) {
                        //alert("Inside-->");
                            request = new XMLHttpRequest();
                            request.open("GET","checkCount.php?myname="+theform.myname.value,true); 
                            document.getElementById("thispart3").innerHTML = "";
                            document.getElementById("thispart2").innerHTML = "";
                                    document.getElementById("thispart4").innerHTML = "";
                                    document.getElementById("thispart5").innerHTML = "";
                            request.onreadystatechange = function () {
                                //alert("resdy-->"+this.readyState+"request.status-->"+request.status);
                                if (this.readyState == 4 && request.status == 200){
                                     
                                        var car_id = this.responseText;
                                        
                                         if(car_id == 0){
                                             alert("The Assembeler is full.Please try again after some time. Sorry for the inconvenience");
                                         }
                                         else{
                                             alert("Congratulations on your new car. Your car is getting ready!");
                                             alert("Inside-->"+car_id);
                                             call_function(theform,car_id);
                                         }
                                      
                                } 
                            };
                            
                            request.send();
    
                    }
                    
                    function call_function(theform,car_id){
                        
                        //wheel(theform);
                        engine(theform,car_id);
                        
                       // body(theform);
                        //assembly(theform);
                    }
                    function engine(theform,car_id){
                        alert("Inside--> engine "+car_id);
                        request = new XMLHttpRequest();
                            request.open("GET","carEngine.php?myengine="+theform.engine.value+","+car_id,true); 
                            
                            request.onreadystatechange = function () {
                                //alert("resdy1-->"+this.readyState+"request.status1-->"+request.status);
                                if (this.readyState == 4 && request.status == 200){
                                     
                                         
                                        var temp = this.responseText;
                                     //alert("temp--->"+temp);
                                        if(temp == 0){
                                        //    alert("call--->"+temp);
                                           
                                            document.getElementById("thispart3").innerHTML = "Your "+theform.engine.value+" is ready";
                                            document.getElementById("thispart3").style.font = "italic bold 20px arial,serif";
                                            //assembly(theform,car_id);
                                        }
                                        
                                        /*document.getElementById("thispart").innerHTML = "Your "+theform.engine.value+" is ready";
                                        document.getElementById("thispart").style.font = "italic bold 20px arial,serif";*/
                                        
                                         /*if(assembly_status =="0"){
                                            document.getElementById("thispart").innerHTML = "Your "+theform.engine.value+" is ready";
                                            document.getElementById("thispart").style.font = "italic bold 20px arial,serif";
                                         }
                                         else{
                                             //call_function(theform);
                                         }*/
                                      
                                } 
                            };
                            
                            request.send();
                    }
                    
                    function wheel(theform){
                         request = new XMLHttpRequest();
                            request.open("GET","carWheel.php?mywheel="+theform.carWheel.value+","+theform.myname.value+","+theform.wheelColor.value,true); 
                            
                            request.onreadystatechange = function () {
                               // alert("resdy1 wheel-->"+this.readyState+"request.status1-->"+request.status);
                                if (this.readyState == 4 && request.status == 200){
                                        var wheel = this.responseText;
                                        //alert("wheel--->"+wheel);
                                        if(wheel == 0){
                                            //alert("call2--->"+wheel);
                                            document.getElementById("thispart2").innerHTML = "Your Wheel "+theform.carWheel.value+" is ready";
                                            document.getElementById("thispart2").style.font = "italic bold 20px arial,serif";
                                            //assembly(theform);
                                        }
                                        else if(wheel == 2){
                                            paint2(theform);
                                            document.getElementById("thispart2").innerHTML = "Your Wheel "+theform.carWheel.value+" is ready and is getting painted in "+theform.wheelColor.value;
                                            document.getElementById("thispart2").style.font = "italic bold 20px arial,serif";
                                            
                                        }
                                } 
                            };
                            
                            request.send();
                    }
                    
                    
                    function body(theform){
                        request = new XMLHttpRequest();
                            request.open("GET","carBody.php?mybody="+theform.carBody.value+","+theform.myname.value+","+theform.carColor.value,true); 
                            
                            request.onreadystatechange = function () {
                                //alert("resdy1-->"+this.readyState+"request.status1-->"+request.status);
                                if (this.readyState == 4 && request.status == 200){
                                        var body = this.responseText;
                                        //alert("body--->"+body);
                                        if(body == 0){
                                            //alert("call3--->"+body);
                                            document.getElementById("thispart4").innerHTML = "Your car body "+theform.carBody.value+" is ready";
                                            document.getElementById("thispart4").style.font = "italic bold 20px arial,serif";
                                            //assembly(theform);
                                        }
                                        else if(body == 2){
                                            paint1(theform);
                                            document.getElementById("thispart4").innerHTML = "Your car body "+theform.carBody.value+" is ready and is getting painted in "+theform.carColor.value;
                                            document.getElementById("thispart4").style.font = "italic bold 20px arial,serif";
                                            
                                        }
                                } 
                            };
                            
                            request.send();
                    }
                    function paint1(theform){
                        //alert("in painting");
                        request = new XMLHttpRequest();
                            request.open("GET","paint.php?paintType=1"+","+theform.myname.value,true); 
                            
                            request.onreadystatechange = function () {
                                //alert("resdy paint-->"+this.readyState+"request.status1-->"+request.status);
                                if (this.readyState == 4 && request.status == 200){
                                        var paint_status = this.responseText;
                                        //alert("paint_status--->"+paint_status);
                                        if(paint_status == 0){
                                            //alert("call3--->"+body);
                                            document.getElementById("thispart4").innerHTML = "Your car body "+theform.carBody.value+" is ready and painted in "+theform.carColor.value+" color";
                                            document.getElementById("thispart4").style.font = "italic bold 20px arial,serif";
                                            //assembly(theform);
                                        }
                                } 
                            };
                            
                            request.send();
                    }
                    
                    function paint2(theform){
                        //alert("in painting2");
                        request = new XMLHttpRequest();
                            request.open("GET","paint.php?paintType=2"+","+theform.myname.value,true); 
                            
                            request.onreadystatechange = function () {
                                if (this.readyState == 4 && request.status == 200){
                                        var paint_status = this.responseText;
                                        //alert("body--->"+body);
                                        if(paint_status == 0){
                                            //alert("call3--->"+body);
                                            document.getElementById("thispart2").innerHTML = "Your wheel "+theform.carWheel.value+" is ready and painted in "+theform.wheelColor.value+" color";
                                            document.getElementById("thispart2").style.font = "italic bold 20px arial,serif";
                                            //assembly(theform);
                                        }
                                } 
                            };
                            
                            request.send();
                    }
                    
                    
                    
                    function assembly(theform,car_id){
                        alert("Inside44--->"+car_id);
                        request = new XMLHttpRequest();
                        request.open("GET","assemblyStatus.php?mydata="+car_id); 
                            
                            request.onreadystatechange = function () {
                                alert("resdy1-->"+this.readyState+"request.status1-->"+request.status);
                                if (this.readyState == 4 && request.status == 200){
                                        var assembly = this.responseText;
                                        alert("assembly--->"+assembly);
                                        
                                        
                                        if(assembly == "0"){
                                            //alert("assembly--->");
                                            document.getElementById("thispart5").innerHTML = "Your  car is ready";
                                            document.getElementById("thispart5").style.font = "italic bold 40px arial,serif";
                                            
                                        }
                                        else{
                                            /*document.getElementById("thispart5").innerHTML = "Your car is in progress";
                                            document.getElementById("thispart5").style.font = "italic bold 20px arial,serif";*/
                                        }
                                } 
                            };
                            
                            request.send();
                    }
                    
                        
                     
                </script>    
                   
                    
        </div>    
    </body>
</html>
