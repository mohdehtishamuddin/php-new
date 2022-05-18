<?php
$area=0;
$perimeter=0;
$len="";
$wid="";
if(isset($_POST["submit"]))
{
    $len= $_POST["length"];
    $wid= $_POST["width"];
    
    //area formula length*width
    $area=$len*$wid;
 
    //perimeter formula 2*(length+width)
    $perimeter=2*($len+$wid);
}
 
?>
<!doctype html>
<html>
    <head>
        <title>Calculate Area</title>
        <meta charset="utf-8">
        <style>
            label{
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Area and Perimeter of Rectangle</h1>
       
        <form action="" method="post">
            <label for="len">Length:
                <input type="text" name="length" value="<?=$len?>">
            </label>
            <label for="wid">Width:
                <input type="text" name="width" value="<?=$wid?>">
            </label>
            <button name="submit" type="submit">Calculate</button>
        </form>
        <h2>Area: <?=$area?></h2>
        <h2>Perimeter:<?=$perimeter?></h2>
    </body>
</html>
 