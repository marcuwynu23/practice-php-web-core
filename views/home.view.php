<html lang="en">
<?php require_once __DIR__ . "/shared/layouts/head.partial.php"; ?>
</head>



<body>
	<?php require_once __DIR__ . "/shared/layouts/header.partial.php"; ?>

	<main>
		<div class="container">
			<h1>Home</h1>
			<?php foreach ($users as $user) : ?>
				<p>
					<?php echo $user["username"] . " " . $user['password'] ?>
				</p>
			<?php endforeach ?>
		</div>
	</main>
	<?php require_once __DIR__ . "/shared/layouts/footer.partial.php"; ?>
	<?php require_once __DIR__ . "/shared/layouts/scripts.partial.php"; ?>

</body>

</html>