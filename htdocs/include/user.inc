<?php

function authenticateUser($userNameOrEmail, $password) {
    global $DB_NAME;
    $passwordHash = md5($password);
    $byUsername = "select user_id
               from vs_users
               where user_name = '$userNameOrEmail'
               and password = '$passwordHash'";
    $result = mysql_db_query($DB_NAME,$byUsername) or die("Query attempt failed: ". mysql_error());
    if (mysql_num_rows($result) != 1) {
        // authentication failed
        // try the email address
        $byEmail = "select user_id
                   from vs_users
                   where email = '$userNameOrEmail'
                   and password = '$passwordHash'";
        $result = mysql_db_query($DB_NAME,$byEmail) or die("Query attempt failed: ". mysql_error());
        if (mysql_num_rows($result) != 1) {
            return false;
        }
    }
    // authentication successful
    $resultData = mysql_fetch_array($result);
    return $resultData['user_id'];
}

function createUser($userName, $password, $firstName, $lastName, $email, $homepage) {
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
                   homepage  = '$homepage',
                   email  = '$email'";
        $result = mysql_db_query($DB_NAME,$insert) or die("Query attempt failed: ". mysql_error());
        return mysql_insert_id();
    }
}

function updateUser($userId, $firstName, $lastName, $email, $homepage) {
    global $DB_NAME;
    $update = "update vs_users set
                   first_name = '$firstName',
                   last_name  = '$lastName',
                   email  = '$email',
                   homepage  = '$homepage'
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

function getUserByEmail($email) {
    global $DB_NAME;
    $select = "select user_id from vs_users
               where email= '$email'";
    $result = mysql_db_query($DB_NAME,$select) or die("Query attempt failed: ". mysql_error());
    if (mysql_num_rows($result) == 0) {
        return false;
    } else {
        $resultData = mysql_fetch_array($result);
        $user = new User($resultData['user_id']);
        return $user;
    }
}

function generateNewPassword($user){
    srand ((float) microtime() * 1000000);
    $randval = rand();
    $passwd_chars = '0123456789!@#$%&*_' .  
                    'abcdefghijklmnopqrstuvwxyz' . 
                    'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $passwd = ""; 
    while (strlen($passwd) < 8) { 
        $passwd .= substr($passwd_chars, (rand() % strlen($passwd_chars)), 1); 
    }
    updatePasswd($user->getUserId(),$passwd);
    return mail($user->getEmail(), 
            "vim online password request",
            "Hi " . $user->getFirstName() . ",\n\n" . 
		"You have requested a new password for the following account:\n\n" .
                "username : " .$user->getUserName() . " \n" .
                "passwd   : $passwd \n\n" .
                "You can change your password on the account page once you login. " .
                "If you have any questions feel free to contact vimonline-support@lists.sourceforge.net. Thanks for using vim online.");
}

class User {

    var $userId;
    var $userName;
    var $password;
    var $firstName;
    var $lastName;
    var $email;
    var $access;
    var $homepage;

    function User($userId) {
        global $DB_NAME;
        $select = "select user_id, user_name, password, first_name, last_name, 
                          email, access, homepage
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
        $this->homepage  = $userData['homepage'];
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
    function getHomepage() {
        return $this->homepage;
    }

}

?>
