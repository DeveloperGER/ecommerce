<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ecommerce - Verduleria</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2bf754658a.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/default.css">
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
		<nav class="nav">
			<ul class="desktop-ul">
				<li class="elements"><a href="./"><i class="fas fa-apple-alt"></i> Frutas</a></li>
				<li class="elements"><a href="pagar"><i class="fas fa-shopping-cart"></i> Pagar</a></li>
				<li class="elements li-buttons"><a href="login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
				<li class="elements li-buttons"><a href="registro"><i class="fab fa-wpforms"></i> Registro</a></li>
			</ul>
		</nav>
		<nav class="responsive-nav">
			<i class="fas fa-angle-down icon-for-slide"></i>
			<ul class="responsive-ul">
				<li class="elements"><a href="./"><i class="fas fa-apple-alt"></i> Frutas</a></li>
				<li class="elements"><a href="pagar"><i class="fas fa-shopping-cart"></i> Pagar</a></li>
				<li class="elements"><a href="login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
				<li class="elements"><a href="registro"><i class="fab fa-wpforms"></i> Registro</a></li>
			</ul>
		</nav>
	</header>
	<section class="fruits">
		<div class="all-fruits">
			<div class="fruit-section">
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/naranja.png">
					</div>
					<div class="about-fruit">
						<b>Naranja</b>
						<p>precio: <span>$39</span></p>
						<button class="buy" class="fas fa-shopping-cart" onclick="agregarProducto('Naranja','39')"><i></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/manzana.png">
					</div>
					<div class="about-fruit">
						<b>Manzana</b>
						<p>precio: <span>$28</span></p>
						<button class="buy"  class="fas fa-shopping-cart" onclick="agregarProducto('Manzana','28')"><i></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/banana.jpg">
					</div>
					<div class="about-fruit">
						<b>Banana</b>
						<p>precio: <span>$32</span></p>
						<button class="buy" class="fas fa-shopping-cart" onclick="agregarProducto('Banana','32')"><i></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/banana.jpg">
					</div>
					<div class="about-fruit">
						<b>Banana</b>
						<p>precio: <span>$32</span></p>
						<button class="buy" onclick="agregarProducto('Banana','32')"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
			</div>
			<div class="fruit-section">
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/melon.png">
					</div>
					<div class="about-fruit">
						<b>Melón</b>
						<p>precio: <span>$45</span></p>
						<button class="buy" onclick="agregarProducto('Melón','45')"><i class="fas fa-shopping-cart" ></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/sandia.png">
					</div>
					<div class="about-fruit">
						<b>Sandía</b>
						<p>precio: <span>$53</span></p>
						<button class="buy" onclick="agregarProducto('Sandía','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/kiwi.png">
					</div>
					<div class="about-fruit">
						<b>Kiwi</b>
						<p>precio: <span>$31</span></p>
						<button class="buy"  onclick="agregarProducto('Kiwi','31')"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="fruit">
					<div class="img-fruit">
						<img src="frutas/banana.jpg">
					</div>
					<div class="about-fruit">
						<b>Banana</b>
						<p>precio: <span>$32</span></p>
						<button class="buy" onclick="agregarProducto('Banana','32')"><i class="fas fa-shopping-cart" ></i> Agregar</button>
					</div>
				</div>
			</div>
		</div>
<div class="show-cart">
			<?php include("../private/show-cart.php"); ?>
		</div>
	</section>
<script src="js/default.js"></script>
<script src="js/index.js"></script>
</body>
</html>