<!DOCTYPE html>
<html>
<body>
	
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
	You Name: <input type="text" name="x">
	<input type="submit">
</form>

<?php
function println($name){
    if (empty($name)){
		echo "empty!<br>";
	} else {
		echo $name . "<br>";
	}
}

if ($_SERVER['REQUEST_METHOD']=='GET') {
	$name_post = $_POST['x'];
	$name_get = $_GET['x'];
	$name_request = $_REQUEST['x'];
	
	echo "name_post: ";
	println($name_post);
	echo "name_get: ";
	println($name_get);
	echo "name_request: ";
	println($name_request);
}

?>

</body>
</html