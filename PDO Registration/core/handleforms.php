<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewDeveloperBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$age = trim($_POST['age']);
	$email = trim($_POST['email']);
	$school = trim($_POST['school']);
	$devSkills = trim($_POST['devSkills']);
	$portfolio = trim($_POST['portfolio']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($age) && !empty($email) && !empty($school) && !empty($devSkills) && !empty($portfolio)) {
		$query = insertIntoDeveloperRecords($pdo, $firstName, $lastName, $gender, $age, $email, $school, $devSkills, $portfolio);

		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "Insertion failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['editDeveloperBtn'])) {
    $developer_id = $_GET['developer_id']; 
    $firstName = trim($_POST['first_name']); 
    $lastName = trim($_POST['last_name']); 
    $gender = trim($_POST['gender']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $school = trim($_POST['school']);
    $devSkills = trim($_POST['dev_skills']); 
    $portfolio = trim($_POST['portfolio']);

    if (!empty($developer_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($age) && !empty($email) && !empty($school) && !empty($devSkills) && !empty($portfolio)) {
        $query = updateADeveloper($pdo, $developer_id, $firstName, $lastName, $gender, $age, $email, $school, $devSkills, $portfolio);

        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteDeveloperBtn'])) {
	$query = deleteADeveloper($pdo, $_GET['developer_id']);

	if ($query) {
		header("Location: ../index.php");
	} else {
		echo "Deletion failed";
	}
}
?>
