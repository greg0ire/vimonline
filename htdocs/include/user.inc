<?php

function authenticateUser($userName, $password) {
    global $DB_NAME;
    $passwordHash = md5($password);
    $select = "select user_id
               from vs_users
               where user_name = '$userName'
               and password = '$passwordHash'";
    $result = mysql_db_query($DB_NAME,$select) or die("Query attempt failed: ". mysql_error());
    if (mysql_num_rows($result) != 1) {
        // authentication failed
        return false;
    } else {
        // authentication successful
        $resultData = mysql_fetch_array($result);
        return $resultData['user_id'];
    }
}

function createUser($userName, $password, $firstName, $lastName, $email) {
    global $DB_NAME;
    $passwordHash = md5($password);
    $select = "select 1 from vs_users
               where user_name = '$userName'";
    $result = mysql_db_query($DB_NAME,$select) or die("Query attempt failed: ". mysql_error());
    if (mysql_num_rows($result) != 0) {
        return false;
    } else {
        $insert = "insert into vs_users set
                   user_name  = '$userName',
                   password   = '$passwordHash',
                   first_name = '$firstName',
                   last_name  = '$lastName',
                   email  = '$email'";
        $result = mysql_db_query($DB_NAME,$insert) or die("Query attempt failed: ". mysql_error());
        return mysql_insert_id();
    }
}

function updateUser($userId, $firstName, $lastName, $email) {
    global $DB_NAME;
    $update = "update vs_users set
                   first_name = '$firstName',
                   last_name  = '$lastName',
                   email  = '$email'
                 where user_id=$userId";
    mysql_db_query($DB_NAME,$update);
}

function updatePasswd($userId,$passwd){
    global $DB_NAME;
    $passwdHash = md5($passwd);
    $update = "update vs_users set password = '$passwdHash' where user_id = $userId";
    mysql_db_query($DB_NAME,$update);
}

function getUserById($userId) {
    $user = new User($userId);
    return $user;
}

function getUserByName($userName) {
    global $DB_NAME;
    $select = "select user_id from vs_users
               where user_name = '$userName'";
    $result = mysql_db_query($DB_NAME,$select) or die("Query attempt failed: ". mysql_error());
    if (mysql_num_rows($result) == 0) {
        return false;
    } else {
        $resultData = mysql_fetch_array($result);
        $user = new User($resultData['user_id']);
        return $user;
    }
}
class User {

    var $userId;
    var $userName;
    var $password;
    var $firstName;
    var $lastName;
    var $email;
    var $access;

    function User($userId) {
        global $DB_NAME;
        $select = "select user_id, user_name, password, first_name, last_name, email, access
                   from vs_users
                   where user_id = $userId";
    	$result = mysql_db_query($DB_NAME,$select) or die("Query attempt failed: ". mysql_error());
        $userData  = mysql_fetch_array ($result);
        $this->userId    = $userData['user_id'];
        $this->userName  = $userData['user_name'];
        $this->password  = $userData['password'];
        $this->firstName = $userData['first_name'];
        $this->lastName  = $userData['last_name'];
        $this->email  = $userData['email'];
        if(!$userData['access']){
            $this->access  = 0;
        } else {
            $this->access  = $userData['access'];
        }
    }

    function getUserId() {
        return $this->userId;
    }

    function getUserName() {
        return $this->userName;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }
    function getEmail() {
        return $this->email;
    }
    function getAccess() {
        return $this->access;
    }
    // admin is bit 0
    function isAdmin(){
        return $this->access & 1;
    }
    // submit news is bit 1
    function canSubmitNews(){
        return $this->access & 2;
    }

}

?>
