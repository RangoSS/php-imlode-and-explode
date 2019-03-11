<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <form method="post" action="">
  	<p> enter name sepate by spaces</p>
  	<input type="text" name="myImplode">
  	<input type="submit" value="submit">
  </form>
</body>
</html>


<?php
//the use of implode and explode
if(isset($_POST['myImplode'])){
$myImplode=array($_POST['myImplode']);
$str="hello my name is fano.have a wonderful day.";
echo implode(" ",$myImplode ).'<br>';
print_r(explode(" ",$str ));
}
?>