<?php
// core methods for session management

/**
 * check if a user's session is valid
 * @return true if the session is valid, false otherwise
 */
function isSessionValid() {
    global $sessionIdCookie;
    global $DB_NAME;

    if ($sessionIdCookie) {
        $select = "select 1
                   from vs_sessions
                   where session_id = '$sessionIdCookie'";
        $result = mysql_db_query($DB_NAME,$select) or die("Query attempt failed: ". mysql_error()); 
        if (mysql_num_rows($result) == 1) {
            return true;
        }
    }
    return false;
}

/**
 * redirect to the login page
 * @param referrer where the login page should send the user after login
 */
function redirectToLoginPage($referrer) {
    global $BASE;
    $location = 'Location: http://' . getenv('HTTP_HOST') . $BASE . "/login.php";
    if($referrer){
        $location = $location . "?referrer=" . rawurlencode($referrer);
    }
    header($location);
    print("\n\n");
}

/**
 * redirect to the my account page
 */
function redirectToAccountPage() {
    global $BASE;
    header('Location: http://' . getenv('HTTP_HOST') . $BASE . "/account/index.php");
    print("\n\n");
}

function redirectToReferrer($referrer) {
    global $BASE;
    header('Location: http://' . getenv('HTTP_HOST') . $BASE . rawurldecode($referrer));
    print("\n\n");
}

/**
 * create a user a session and set a cookie to keep them logged in. This method
 * is called after a user is authenticated
 */
function createSession($userId) {
    global $DB_NAME;
    global $REMOTE_ADDR;
    do {
        $preHash = time() . rand() . $REMOTE_ADDR . microtime();
        $sessionId = md5($preHash); 
        $select = "select 1
                   from vs_sessions
                   where session_id = '$sessionId'";
        $result = mysql_db_query($DB_NAME,$select) or die("Query attempt failed: ". mysql_error()); 
    } while (mysql_num_rows($result) != 0);
    $select = "insert into vs_sessions set
               session_id = '$sessionId',
               user_id = '$userId',
               remote_address = '$REMOTE_ADD',
               creation_date = now()";
    $result = mysql_db_query($DB_NAME,$select);
    setCookie("sessionIdCookie", $sessionId);
}

/**
 * remove a user's session when they logout
 */
function deleteSession() {
    global $DB_NAME;
    global $sessionIdCookie;
    $delete = "delete from vs_sessions
               where session_id = '$sessionIdCookie'";
    mysql_db_query($DB_NAME,$delete);
}

/**
 * get the current logged in user's info
 */
function getSessionUser() {
    global $DB_NAME;
    global $sessionIdCookie;
    $select = "select user_id
               from vs_sessions
               where session_id = '$sessionIdCookie'";
    $result = mysql_db_query($DB_NAME,$select);
    $resultData = mysql_fetch_array($result);
    return getUserById($resultData['user_id']);
}

?>
