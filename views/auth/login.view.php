<html lang="en">
<?php require_once __DIR__ . "/../shared/layouts/head.partial.php"; ?>

<body>
	<main>
		<div class="container centered-container">
			<div class="container">
				<div class="centered-container">
					<h1>Login</h1>
				</div>
				<form method="POST">
					<div class="my-3">
						<input class="text-center" type="text" name="username">
					</div>
					<div class="my-3">
						<input class="text-center" type="password" name="password">
					</div>
					<div class="centered-container">
						<button>submit</button>
					</div>
				</form>
			</div>
		</div>


		<div class="container centered-container">
			<p>
				<?php echo $status ?>
			</p>
		</div>
	</main>
	<?php require_once __DIR__ . "/../shared/layouts/scripts.partial.php"; ?>
</body>

</html>