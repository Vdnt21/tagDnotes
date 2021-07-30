<?php

if (isset($_POST['upload-btn'])) {

	$title = $_POST['title'];
	$course = $_POST['course'];
	$semester = $_POST['semester'];
	$subject = $_POST['subject'];
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg', 'pptx', 'ppt');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 200000000) {

				$fileNameNew = rand(100,10000)."-".$fileName;
				$fileDestination = "uploads/".$fileNameNew;

				include_once "dbh.php";

				if (empty($title) || empty($subject) || $course === "COURSE" || $semester === "SEMESTER") {
					
					header("Location: ../notes.php?error=emptyinput");
					exit();

				} else {

					$sql = "INSERT INTO notesupload (title, course, semester, subject, notes) VALUES ('$title', '$course', '$semester', '$subject', '$fileNameNew')";

					if (mysqli_query($conn,$sql)){
						move_uploaded_file($fileTmpName, $fileDestination);
						header("Location: ../notes.php?upload=success");
					}
						
				}
			} else {
				header("Location: ../notes.php?error=filetoobig");
				exit();
			}
		} else {
			header("Location: ../notes.php?uploaderror");
			exit();
		}
	} else {
		header("Location: ../notes.php?error=invalidfile");
		exit();
	}
}