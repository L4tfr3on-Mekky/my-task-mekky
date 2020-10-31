<!DOCTYPE html>
<html>
<head>
	<title>uploade</title>
	<form method="POST" enctype="multipart/form-data">
		<div>
			<h1 style="color:navy;margin:auto;text-align: center; "></h1>
			<input type="file" name="myup"/>
			<button>submit</button>
		</div>
		
	</form>
</head>
<body>
	<?php
	if ($_SERVER['REQUEST_METHOD']=="POST") {

		$myfile = $_FILES['myup'];
		echo $myfile['type'];
		copy ($myfile['tmp_name'] , $myfile['name']);
	}
	?>
</body>
</html>