<?php
	/* Session begins */
	session_start();

	/* Error display */
	error_reporting(E_ALL);
    ini_set('display_errors', 0);  

    /* Method setup */
    $method = $_POST;
    $form_method = "post";

	/* Connection config */
	$db = [
	    'server' => 'localhost',
	    'db' => 'pt-9',
	    'user' => 'root',
	    'password' => 'i29y39u68xxx',
	];
	 
	/* Connecton attempt */
	try {
	    $conn = new PDO("mysql:host={$db['server']};dbname={$db['db']}", $db['user'], $db['password']);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	    die('Something went wrong (');
	}
	 
	/**
	 * Returns all rows for a given $query
	 *
	 * @param $query
	 * @return array
	 */
	function getAllRows($query) {
	    global $conn;

	    return $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
	}
	 
	/**
	 * Returns a first row for a given $query
	 *
	 * @param $query
	 * @return array
	 */
	function getRow($query) {
	    global $conn;

	    return $conn->query($query)->fetch(PDO::FETCH_ASSOC);
    }

    /**
    * Adding feedback for a particular field if field's value 
    * already exists in DB
	*
    * @global array $method
    * @param string $query
    * @param string $field
    * @param string $feedback
    */
    function fieldValueExistanceChecker($query, $field, $feedback) {
    	global $conn;
		global $method;

        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $method[$field], PDO::PARAM_STR);
        $stmt->execute();
        $query_result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($query_result)) {
            addFeedback($field, $feedback);
        }
    }
?>