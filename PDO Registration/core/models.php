<?php 

require_once 'dbConfig.php';

function insertIntoDeveloperRecords($pdo, $firstName, $lastName, $gender, $age, $email, $school, $devSkills, $portfolio) {
	$sql = "INSERT INTO developer_registration (first_name, last_name, gender, age, email, school, dev_skills, portfolio) VALUES (?,?,?,?,?,?,?,?)";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$firstName, $lastName, $gender, $age, $email, $school, $devSkills, $portfolio]);
	return $executeQuery;
}

function seeAllDeveloperRecords($pdo) {
	$sql = "SELECT * FROM developer_registration";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll();
}

function getDeveloperByID($pdo, $developer_id) {
	$sql = "SELECT * FROM developer_registration WHERE developer_id = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$developer_id]);
	return $stmt->fetch();
}

function updateADeveloper($pdo, $developer_id, $firstName, $lastName, $gender, $age, $email, $school, $devSkills, $portfolio) {
	$sql = "UPDATE developer_registration 
			SET first_name = ?, 
				last_name = ?, 
				gender = ?, 
				age = ?, 
				email = ?, 
				school = ?, 
				dev_skills = ?, 
				portfolio = ? 
			WHERE developer_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$firstName, $lastName, $gender, $age, $email, $school, $devSkills, $portfolio, $developer_id]);
	return $executeQuery;
}

function deleteADeveloper($pdo, $developer_id) {
	$sql = "DELETE FROM developer_registration WHERE developer_id = ?";
	$stmt = $pdo->prepare($sql);
	return $stmt->execute([$developer_id]);
}
?>
