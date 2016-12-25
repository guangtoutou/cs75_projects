<!Doctype html>
<html lang="zh-CN">
<head>
	<title>Menu</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
	<div class="container">
		<div class="row">

			<div class="col-md-9">
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
			<div class="col-md-3">
				<nav id="myScrollspy">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#1">Pizza</a></li>
						<li><a href="#2">Speciality Pizza</a></li>
						<li><a href="#3">Special dinners</a></li>
					</ul>
				</nav>
				<div style="position: fixed; bottom: 20px" class="btn-group">
					<button type="button" class="btn btn-primary">Shopping Cart</button>
					<button type="button" class="btn btn-primary">Check Out</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


