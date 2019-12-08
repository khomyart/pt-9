<?php
    if(isset($method["registration"])) {
        $query = "SELECT `login` FROM `users` WHERE `login` LIKE ?;";
        $feedback = "This login already registered";
        fieldValueExistanceChecker($query, 'login', $feedback);

        $query = "SELECT `display_name` FROM `users` WHERE `display_name` LIKE ?;";
        $feedback = "This display name already registered";
        fieldValueExistanceChecker($query, 'display_name', $feedback);

    
        if(empty($feedbackData)) {
            $query = "INSERT INTO `users`(`login`, `pwd`, `display_name`) VALUES (?,?,?);";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(1, $method["login"], PDO::PARAM_STR);
            $stmt->bindParam(2, password_hash($method["pwd"], PASSWORD_DEFAULT), PDO::PARAM_STR);
            $stmt->bindParam(3, $method["display_name"], PDO::PARAM_STR);
            $stmt->execute();
            header('Refresh:2; url=index.php');            
        }
    }
?>