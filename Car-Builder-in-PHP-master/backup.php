<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to James Buchanan Pub and Restaurant</title>
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
                <li class="current"><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="routes.php">Routes</a></li>
                <li><a href="location.php">location</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            </div>
            
            <div id="content">
                <div id="rotator">
                    
		<form action="selectset.php" method="post" style="margin-bottom:none;">	
                    <table style="height:auto; width: 860px;" >
                        <tr style="height:auto; width: 460px;">
                    <div id="logo" style="left: 100px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">

                        <h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">My Car</h2>
                        <div class="accordion-content" style="margin-bottom: 15px;">
                                
                                <span style="margin-right: 11px;">Select Engine:
                                <select name="engine" style="width: 191px; margin-right: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
                                <option>150 horsepower</option>
                                <option>250 horsepower</option>
                                <option>400 horsepower</option>
                                </select>
                                Engine Color:
                                <select name="engColor" style="width: 191px; margin-right: 25px; border: 3px double #CCCCCC; padding:5px 10px;"/>
                                <option>Blue</option>
                                <option>Red</option>
                                <option>Gold</option>
                                </select>
                                </span><br>
                                <span style="margin-right: 9px;">Car Bodies:
                                <select name="qty" style="width: 191px; margin-left: 1px; border: 3px double #CCCCCC; padding:5px 10px;">
                                <option>Similar to Ford Fiesta</option>
                                <option>Similar to Ford Fusion</option>
                                <option>Similar to Ford Mustang</option>
                                </select>
                                </span><br><br>
                                <input type="submit" id="submit" value="Next" style="height: 34px; margin-left: 1px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
                        </div>
                        
                    </div>
                    </table>
                </form>
    
                    <div id="logo" style="left: 100px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">
                        
                    </div>
                    
        </div>    
    </body>
</html>
