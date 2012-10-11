<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/redditcss.css" type="text/css" media="screen">

        <script type="text/javascript" src="dom-drag.js"></script>

        
        <title>Reddit Menu</title>
        
        
    </head>
    
    <body>
        <?php
        // put your code here
        ?>
    
        
    <!-- Planet Div for Testing -->    
    <div id="planet" style="position: relative;">
        <ul>
            <li><a id="example" href="#movingDiv5">planet</a></li>
        </ul>
    </div>
    
        
        
    <!-- moveable div that dynamically loads information -->
    <div id="movingDiv5" class="movingDiv" style="position: absolute;">
        <div>
            <h1>Reddit Title Goes Here!!</h1>
            <img src="http://i.imgur.com/mTjO4.png" alt="" title="Hosted by imgur.com" />
            <ul>
                <li><a href="#">CLOSE</a></li>                      <!--CLOSE SYMBOL-->
                <li><a href="#">YES</a></li>  <!--EXTERNAL LINK-->
            </ul>
            
            
        </div>
    </div>
    
    <script type="text/javascript">
            Drag.init(document.getElementById("movingDiv5"));
    </script>
        
        
    </body>
</html>
