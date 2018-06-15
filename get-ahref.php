<!DOCTYPE html>
<html>
<body>
	
<p></p><a href="<?php echo $_SERVER['PHP_SELF'] ?>?x=TestTest">This is a test link!</a></p>

<?php
function println($name){
    if (empty($name)){
		echo "empty!<br>";
	} else {
		echo $name . "<br>";
	}
}

echo '$_SERVER[REQUEST_METHOD]: ' . $_SERVER['REQUEST_METHOD'] . "<br>";
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
</html>