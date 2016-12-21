<!Doctype html>
<html lang="zh-CN">
<head>
	<title>Menu</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<header>
	menu
	</header>

	<?php
		$xml = simplexml_load_file("menu.xml");
		$result = $xml->xpath("dish");
		print_r($result);
	?>


</body>
</html>


