<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Developer</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		.container {
			border-style: solid;
			padding: 20px;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this developer?</h1>

	<?php $getDeveloperById = getDeveloperByID($pdo, $_GET['developer_id']); ?>
	<form action="core/handleForms.php?developer_id=<?php echo $_GET['developer_id']; ?>" method="POST">

		<div class="container">
			<p>First Name: <?php echo $getDeveloperById['first_name']; ?></p>
			<p>Last Name: <?php echo $getDeveloperById['last_name']; ?></p>
			<p>Gender: <?php echo $getDeveloperById['gender']; ?></p>
			<p>Age: <?php echo $getDeveloperById['age']; ?></p>
			<p>Email: <?php echo $getDeveloperById['email']; ?></p>
			<p>School: <?php echo $getDeveloperById['school']; ?></p>
			<p>Development Skills: <?php echo $getDeveloperById['dev_skills']; ?></p>
			<p>Portfolio: <a href="<?php echo $getDeveloperById['portfolio']; ?>" target="_blank"><?php echo $getDeveloperById['portfolio']; ?></a></p>
			<input type="submit" name="deleteDeveloperBtn" value="Delete">
		</div>
	</form>
</body>
</html>
