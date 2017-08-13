<!DOCTYPE html>

<html>

    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>test</title>
        <link rel="stylesheet" type="text/css" href="test.css">
    
    </head>
    
    <body>
      
        <canvas id="canvas" width="400" height="400"></canvas>
        <?php
        echo "<script>var canvas = document.getElementById('canvas');

        var ctx = canvas.getContext(\"2d\");
        var data = [1,1,1,1,1,1];

        var colors = [\"#7E3817\", \"#000000\", \"#ffff00\", \"#C35817\", \"#EE9A4D\", \"#A0C544\"];

        var center = [canvas.width / 2, canvas.height / 2];

        var radius = Math.min(canvas.width, canvas.height) / 2;

        var lastPosition = 0, total = 0;
        for(var i in data) { total += data[i]; }
        for (var i = 0; i < data.length; i++) {

        ctx.fillStyle = colors[i];

        ctx.beginPath();

        ctx.moveTo(center[0],center[1]);

        ctx.arc(center[0],center[1],radius,lastPosition,lastPosition+(Math.PI*2*(data[i]/total)),false);

        ctx.lineTo(center[0],center[1]);

        ctx.fill();

        lastPosition += Math.PI*2*(data[i]/total);

        }</script>";?>
        
        <script src="js/jquery-3.2.0.min.js"></script>
        <!--Bootstrap JS-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    </body>

</html>