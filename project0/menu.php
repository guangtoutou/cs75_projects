<!Doctype html>
<html lang="zh-CN">
<head>
	<title>Menu</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet">

</head>
<body>
	<header>
	menu
	</header>
	<nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
		<div class="container-fluid"> 
			<div class="collapse navbar-collapse bs-js-navbar-scrollspy">
				<ul class="nav navbar-nav">
					<li><a href="#1">Pizza</a></li>
					<li><a href="#2">Speciality Pizza</a></li>
					<li><a href="#3">Special dinners</a></li>
				</ul>
			</div>
		</div> 
	</nav>

	<content>
		<div class="container">
		<div class="row">
		<div class="col-md-12">
	<?php
		$menu = simplexml_load_file('menu.xml');
		foreach($menu->category as $category){
			echo "<div class='CategoryTitle' id='${category['seq']}'> ${category['name']}</div>";
			echo '<div style="display: flex;flex-wrap:wrap">';
			foreach($category->dish as $dish){
				echo "<div class='DishBlock'> <img src='http://placehold.it/160X160'>${dish['name']}</div>";	
			}
			echo '</div>';
		}
	?>
		</div>
		</div>
		</div>
	</content>

</body>
</html>


