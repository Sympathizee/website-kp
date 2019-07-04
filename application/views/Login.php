<!DOCTYPE html>
<html>
<head>
	<title>Halaman Masuk</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>


<style type="text/css">
body {
	width: 100%!important;
	font-family: 'Roboto', sans-serif;
}

#middle {
	position: absolute;
	width: 400px;
	height: 500px;
	z-index: 15;
	top: 30%;
	left: 48%;
	margin: -100px 0 0 -150px;
	background: #489577;
}

div.sh {
	box-shadow: 7px 7px rgba(72, 149, 119, 0.5);
}

input {
	width: 90%!important;
	margin: 10px auto;
	padding: 0 5px 0 15px;
	border-radius: 50px;
	border-style: none;
	height: 35px;
}

::placeholder {
	opacity: 0.7;
}

button {
	border-radius: 50px;
	border-style: none;
	height: 35px;
	width: 100px;
	color: white;
	background-color: rgba(72, 130, 100, 0.8);
	margin: 15px auto;
}

.error {
	background-color: #ffeaa7;
	color: #2d3436;
	width: 90%!important;
	margin: 10px auto;
	padding: 5px 0;
	border-radius: 5px;
	border-style: none;
}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6 sh" id="middle">
				<div class="mx-auto py-2" style="text-align: center;">
					<h3 style="margin: 100px 0 25px 0; color: white;">MASUK</h2>
						<?php echo form_open('Login/do_login')?>
						<?php if (isset($error)){echo "<div class='error'>$error</div>";}?>
						<input type="text" placeholder="Nama Pengguna" name="username" required oninvalid="this.setCustomValidity('Harap masukkan username.')" onvalid="this.setCustomValidity('')">
						<input type="password" placeholder="Kata Sandi" name="password" required oninvalid="this.setCustomValidity('Harap masukkan password.')" onvalid="this.setCustomValidity('')">
						<button type="submit">Masuk</button>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
