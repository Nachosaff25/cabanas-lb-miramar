<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<title>Cabañas LB</title>
		<link href="./assets/css/contact.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	</head>
	<body>
		<nav class="menu">
			<div class="fix">
			<b><a href="index.html" class="logo2" style="font-family: 'Product Sans Bold'; letter-spacing: -.5px; font-size: 1.5rem;"><img src="./assets/img/logo-contact.png"> </a></b>
			</div>
			<div class="nav__toggle" id="nav-toggle">
				<i class='bx bx-grid-alt'></i>
			</div>
		</nav>
		<div class="resolucion">	
			<div class="contact-in">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12532.798094972113!2d-57.8484996!3d-38.2516783!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2839c1bd75a7ecdf!2sCaba%C3%B1as%20LB!5e0!3m2!1ses-419!2sar!4v1670116619323!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="contact-form">
					<h1>Contactanos</h1>
					<form action="./correo.php" method="POST">
						<input type="text" placeholder="Nombre" class="contact-form-txt" name="nombre" required>
						<input type="text" placeholder="Email" class="contact-form-txt" name="email" required>
						<input type="text" placeholder="Telefono" class="contact-form-txt" name="telefono" required>
						<textarea placeholder="Mensaje" class="contact-form-textarea" name="mensaje" required></textarea >
						<input type="submit" class="contact-form-btn">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

