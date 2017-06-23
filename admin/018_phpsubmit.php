<?php 
	$name = $email = $gender = $comment = $website = "";
	$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		# code...
		if (empty($_POST["name"])) {
			$nameErr = "Name is required !";
		}else{
			$name = test_input($_POST["name"]);
		}

		if (empty($_POST["email"])) {
			$emailErr = "Email is required ! ";
		}else{
			$email  = test_input($_POST["gender"]);

		}

		if (empty($_POST["gender"])) {
			$genderErr = "Gender is required ! ";
		}else{
			$gender  = test_input($_POST["gender"]);

		}
		if (empty($_POST["comment"])) {
			$commentErr = "Comment  is required ! ";
		}else{
			$comment = test_input($_POST["comment"]);

		}

		if (empty($_POST["comment"])) {
			$websiteErr = "Website is required ! ";
		}else{
			$website = test_input($_POST["website"]);

		}


	}

    function test_input($data){
    	$data = trim($data);
    	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
    }

 ?>