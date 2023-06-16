<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TUGAS 2 | Web Lanjutan</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/logoku.jpg" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>\css\style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/profil.png" class="brand">
			<div class="user">Louliq Rifky Alfachry</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>golongan">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Data Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>users">
						<img class="icon" src="<?php echo AST; ?>/img/users.png" alt=""> Data Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/pengunjung.png" alt=""> Data Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/Log/logout">
						<img class="icon" src="<?php echo AST; ?>/img/logout.png" alt=""> Logout
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>
	</main>
	<footer>
			Copyright &copy; 2023. Louliq Rifky Alfachry
	</footer>
</body>

</html>