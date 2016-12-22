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
		$menu = simplexml_load_file('menu.xml');
		foreach($menu->category as $category){
				echo $category['name'], "</br>";
			foreach($category->dish as $dish)
				echo $dish['name'], "</br>";	
		}
	?>


</body>
</html>


