<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Developer</title>
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
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<?php $getDeveloperById = getDeveloperByID($pdo, $_GET['developer_id']); ?>
	<form action="core/handleForms.php?developer_id=<?php echo $_GET['developer_id']; ?>" method="POST" class="container">
		<p>
			<label for="firstName">First Name</label> 
            <input type="text" name="first_name" value="<?php echo $getDeveloperById['first_name']; ?>">
        </p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getDeveloperById['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getDeveloperById['gender']; ?>">
		</p>
		<p>
			<label for="age">Age</label>
			<input type="number" name="age" value="<?php echo $getDeveloperById['age']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?php echo $getDeveloperById['email']; ?>">
		</p>
		<p>
			<label for="school">School</label>
			<input type="text" name="school" value="<?php echo $getDeveloperById['school']; ?>">
		</p>
		<p>
			<label for="dev_skills">Development Skills</label>
			<input type="text" name="dev_skills" value="<?php echo $getDeveloperById['dev_skills']; ?>">
		</p>
		<p>
			<label for="portfolio">Portfolio URL</label>
			<input type="url" name="portfolio" value="<?php echo $getDeveloperById['portfolio']; ?>">
		</p>
		<p>
			<input type="submit" name="editDeveloperBtn" value="Update Developer">
		</p>
	</form>
</body>
</html>
