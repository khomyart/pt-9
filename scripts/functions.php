<?php 
	$feedbackData = [];

	/**
	* Is a helper method for adding feedback for a particular fild 
	*
	* @global array $feedback_data
	* @param string field 
	* @param string $feedback
	*/
	function addFeedback($field, $feedback) {
		global $feedbackData;

		$feedbackData[$field] = $feedback;
	}

	/**
	* Returns css class for a particular field
	*
    * @global array $method
	* @global array $feedbackData
	* @param string $field
	* @return string
	*/
	function getFeedbackClass($field, $button_name) {
		global $feedbackData;
		global $method;

		if(!isset($method[$button_name])) {
			return "";
		} else {
			return isset($feedbackData[$field]) ? 'invalid-field' : 'valid-field';
		}
	}

	/**
	* Returns css class for a feedback message under particular field
	*
    * @global array $method
	* @global array $feedbackData
	* @param string $field
	* @return string
	*/
	function getFeedbackText($field, $button_name) {
		global $feedbackData;
		global $method;

		if(!isset($method[$button_name])){
			return "";
		} elseif(isset($feedbackData[$field])) {
			return '<div class="invalid-text">'.$feedbackData[$field].'</div>';
		} else {
			return '<div class="valid-text"> Correct </div>';
		}
	}

	if(isset($method["registration"])) {
		/* Login validation */
		if(strlen($method["login"])<3) {
			addFeedback("login", "Min. username length is 3 symbols");
		}

		if(strlen($method["login"])>16) {
			addFeedback("login", "Max. username length is 16 symbols");
		}
		/* Login validation end */

		/* Password validation */
		if(strlen($method["pwd"])<3) {
			addFeedback("pwd", "Min. password length is 3 symbols");
		}

		if(strlen($method["pwd"])>16) {
			addFeedback("pwd", "Max. password length is 16 symbols");
		}
		/* Password validation end */

		/* Display name validation */
		if(strlen($method["display_name"])<3) {
			addFeedback("display_name", "Min. display name length is 3 symbols");
		}

		if(strlen($method["display_name"])>16) {
			addFeedback("display_name", "Max. display name length is 16 symbols");
		}
		/* Display name validation end */
	}

?>