<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hours And Minutes</title>
</head>
<body>
    <?php
    if(isset($_POST['min'])){
    if(isset($_POST['convert'])){
        $Hours = $_POST['hours'];
        $result=$Hours*60;
    }
    echo "$Hours hours = $result mins";
}
if(isset($_POST['sec'])){
    if(isset($_POST['convert'])){
        $Hours = $_POST['hours'];
        $result = $Hours*60*60;
    }
    echo "$Hours hours =  $result second";
}
   ?>
    <h2>Calculate Hours in Min </h2>
    <form action="" method="POST">
       <div> <input type="number" name="hours" value="<?php echo $Hours;?>"></div><br>
       <div> <input type="radio" name="min" value="<?php echo $min; ?>">Hours to min</div><br>
      <div><input type="radio" name="sec" value="<?php echo $sec; ?>">Hours to sec</div><br><br>
      <div><input type="submit" name= "convert" value="convert"></div>
 </form>
</body>
</html>