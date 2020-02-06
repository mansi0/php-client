<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <title></title>
        <link rel="stylesheet" href="./css/css/cart.css">
    </head>
<body> 
        <div class="textbox">
                <i class="fas fa-user" aria-hidden="true"></i>
                <input type="number"   class="text" id="qnty" placeholder="QUANTITY" required>
                
        </div>

        <button type="submit" class="btn btn-success btn-block" onclick=quant(<?php echo(json_encode($url)); ?>)>
            submit</button>


</body>
<script src="./js/cart.js"></script>
</html>
