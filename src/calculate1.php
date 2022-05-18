<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "*":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
    }
}

?>
<body>
<div id="calculate">
	<h1>PHP - Simple Calculator Program</h1>
	  <form action="" method="post" id="cal">
            <p>
            <b>First Number</b><input type="number" name="first_num" id="first_num" value="<?php echo $first_num; ?>" /> 
            </p>
            <p>
            <b>Second Number</b><input type="number" name="second_num" id="second_num"  value="<?php echo $second_num; ?>" /> 
            </p>
            <p>
            <b>Result</b><input type="text" name="result" value="<?php echo $result; ?>"> 
            </p>
            <input type="submit" name="operator" value="+" />
            <input type="submit" name="operator" value="-" />
            <input type="submit" name="operator" value="*" />
            <input type="submit" name="operator" value="/" />
	  </form>
    </div>
</body>
</html>