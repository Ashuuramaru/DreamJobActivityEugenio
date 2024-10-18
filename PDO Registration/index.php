<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Game Developer Registration</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Game Developer Registration System. Input your details here</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="age">Age</label> <input type="text" name="age"></p>
		<p><label for="email">Email</label> <input type="email" name="email"></p>
		<p><label for="school">School</label> <input type="text" name="school"></p>
		<p><label for="devSkills">Development Skills</label> <input type="text" name="devSkills"></p>
		<p><label for="portfolio">Portfolio URL</label> <input type="url" name="portfolio"></p>
		<p><input type="submit" name="insertNewDeveloperBtn"></p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Developer ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Age</th>
	    <th>Email</th>
	    <th>School</th>
	    <th>Development Skills</th>
	    <th>Portfolio</th>
	    <th>Action</th>
	  </tr>

	  <?php $allRecords = seeAllDeveloperRecords($pdo); ?>
	  <?php foreach ($allRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['developer_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['school']; ?></td>
	  	<td><?php echo $row['dev_skills']; ?></td>
	  	<td><?php echo $row['portfolio']; ?></td>
	  	<td>
	  		<a href="editdeveloper.php?developer_id=<?php echo $row['developer_id'];?>">Edit</a>
	  		<a href="deletedeveloper.php?developer_id=<?php echo $row['developer_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>
