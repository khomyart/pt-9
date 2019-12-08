<?php
	if(isset($method["login_button"])) {
		$query = "SELECT * FROM `users` WHERE `login` LIKE ?;";

		$stmt = $conn->prepare($query);
		$stmt->bindParam(1, $method["log_in"], PDO::PARAM_STR);
		$stmt->execute();
		$query_result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		var_dump($query_result);
	    echo "<br><br> method pwd: ".$method["pwd"];
        echo "<br><br> query_result: ".$query_result[0]["pwd"];
        if(empty($query_result)) {
            addFeedback("login_form", "Incorrect username or password");
        } elseif (password_verify($method["pwd"], $query_result[0]["pwd"]) !== TRUE){
        	addFeedback("login_form", "Incorrect username or password");
        } else {
        	$_SESSION["auth"]["id"] = $query_result[0]["user_id"];
        	$_SESSION["auth"]["login"] = $query_result[0]["login"];
        	$_SESSION["auth"]["display_name"] = $query_result[0]["display_name"];
        	echo "SESSION<br><br><br>";
        	var_dump($_SESSION);
        }

		//;
	} 


?>