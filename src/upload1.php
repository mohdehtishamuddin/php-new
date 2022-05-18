
<?php

//Upload Image

if(isset($_POST['submit']))
{

$imgFile = $_FILES['file']['name'];
$tmp_dir = $_FILES['file']['tmp_name'];
$imgSize = $_FILES['file']['size'];

if(!empty($imgFile))
{

$upload_dir = 'image/'; // upload directory

$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

// valid image extensions
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

// rename uploading image
// $coverpic = rand(1000,1000000).".".$imgExt;

// allow valid image file formats
if(in_array($imgExt, $valid_extensions))
{
// Check file size '2MB'
if($imgSize < 2000000)
{
move_uploaded_file($tmp_dir,$imgFile);
echo "uploading Done";
}
else{
$errMSG = "Sorry, your file is too large.";
}
}
else{
$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
<p><input type="file" name="file" required="required" /></p>
<p><input type="submit" name="submit" style="background-color: rgb(255, 102, 0);" class="btn btn-warning" value="Upload"/></p>
</form>
</body>
</html>