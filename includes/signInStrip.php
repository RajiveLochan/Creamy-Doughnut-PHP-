<?php
session_start();
//echo var_dump($_POST);
//$rest_json = file_get_contents("php://input");
//$_POST = json_decode($rest_json, true);
//echo $_POST;
require_once 'connection.php';
// defining a constant secret key that can be used for checking the cookies
define("SECRET_KEY", '5e2c57086733039228e2aab8e4ff17420');
function randomLiterals($length = 40)
{
    global $randomString;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function hashPassword($password)
{
    if (phpversion() >= '7.2.0') {
        return password_hash($password, PASSWORD_ARGON2I);
    } else {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}

function checkForUser($uEmail)
{
    $db = new Database(); //create a new instance of the database class
    $conn = $db->connect(); //assign the connection parameters
    $stmt = $conn->prepare("SELECT * FROM usertable WHERE UserEmail = ?");
    if($stmt === false) {
        trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
    }
    $stmt->bind_param('s', $uEmail);
    $stmt->execute();
    $stmt->store_result();
    $exists = $stmt->num_rows > 0; //checks whether the query returns any rows, if it returns more than 0 then the user exists
    $stmt->close();
    //$conn->close();
    return $exists;
}

if (isset($_COOKIE['rememberMe']) && isset($_GET['cookie'])) {
    if ($_GET['cookie'] == 'exists') {
        reLoginUser();
    } else {
        echo '-2';
    }

}

if (isset($_POST['uEmail']) && isset($_POST['uName']) && isset($_POST['uPass']) && isset($_POST['uConfirm'])) {
    guestSignUp();

    unset($_POST['uEmail']);
    unset($_POST['uName']);
    unset($_POST['uPass']);
    unset($_POST['uConfirm']);

}

if (isset($_POST['iEmail']) && isset($_POST['iPass'])) {
    if($_POST['iEmail'] === "admin@localhost.com" && $_POST['iPass'] === "rootpass") {
        echo "101";
    } else {
        userLogin();
    }

    unset($_POST['iEmail']);
    unset($_POST['iPass']);

}

function userLogin()
{
    $iEmail = $_POST['iEmail'];
    $iPass = $_POST['iPass'];
    $iRemember = $_POST['iRemember'];
    if (signInValidation($iEmail, $iPass)) {
        $db = new Database(); //create a new instance of the database class
        $conn = $db->connect(); //assign the connection parameters
        $stmt = $conn->prepare("SELECT UserId, UserEmail, Username, Password FROM usertable WHERE UserEmail = ?");
        if($stmt === false) {
            trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
        }
        $stmt->bind_param('s', $iEmail);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($userID, $userEmail, $username, $password);
            while ($stmt->fetch()) {
                if (password_verify($iPass, $password)) {
                    echo "0"; //userEmail and password matches, user logged in
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $userEmail;
                    if ($iRemember == 'true') {
                        keepUserLoggedIn($userID);
                    }
                } else {
                    echo "1"; //userEmail is present, but incorrect password
                }
            }
        } else {
            echo "2"; //userEmail does not exist in the database
        }
        $stmt->close();
        $conn->close();
    } else {
        echo "-1";//the validation of the form was unsuccessful
    }
}

function guestSignUp()
{
    $uEmail = $_POST['uEmail'];
    $uName = $_POST['uName'];
    $uPass = $_POST['uPass'];
    $uConfirm = $_POST['uConfirm'];
    if (signUpValidation($uEmail, $uName, $uPass, $uConfirm)) {
        if (checkForUser($uEmail)) {
            echo "4";
        } else {
            $db = new Database(); //create a new instance of the database class
            $conn = $db->connect(); //assign the connection parameters
            $userID = randomLiterals(40);
            $userType = 'user';
            $uPass = hashPassword($uPass);
            $stmt = $conn->prepare("INSERT INTO usertable(UserID, Username, UserEmail, Password, Usertype) VALUES(?, ?, ?, ?, ?)");
            if($stmt === false) {
                trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
            }
            $stmt->bind_param('sssss', $userID, $uName, $uEmail, $uPass, $userType);
            $stmt->execute();
            echo $stmt->affected_rows; //sends the number of rows affected by the query, usually one
            $stmt->close();
            $conn->close();
            //echo "<script>signInDialog();</script>";
        }
    } else {
        echo "-1"; //the validation of the form was unsuccessful
    }
}

function signUpValidation($uEmail, $uName, $uPass, $uConfirm)
{
    $uEmail = Check_Value($uEmail);
    $uName = Check_Value($uName);
    $uPass = Check_Value($uPass);
    $uConfirm = Check_Value($uConfirm);
    if (empty($uEmail) || empty($uPass) || empty($uConfirm)) {
        return false;
    } else {
        if (!preg_match("/^(([^<>()\[\]\\.,;:\s@\"]+(\.[^<>()\[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/", $uEmail)
            || (!empty($uName) && !preg_match("/^[a-zA-Z]*$/", $uName))
            || (strlen($uPass) < 8 || strlen($uPass) > 16)
            || ($uPass !== $uConfirm)) {
            return false;
        } else {
            return true;
        }
    }
}

function keepUserLoggedIn($userID)
{
    $token = generateRandomToken();
    insertSession($userID, $token);
    $cookie = $userID . ":" . $token;
    $mac = hash_hmac('sha256', $cookie, SECRET_KEY);
    $cookie .= ':' . $mac;
    setcookie('rememberMe', $cookie);
}

function reLoginUser()
{
    $cookie = isset($_COOKIE['rememberMe']) ? $_COOKIE['rememberMe'] : '';
    if ($cookie) {
        list ($userID, $token, $mac) = explode(':', $cookie);
        if (!hash_equals(hash_hmac('sha256', $userID . ':' . $token, SECRET_KEY), $mac)) {
            echo "0";
            return false;
        }
        $userToken = (String)fetchTokenFromDB($userID);
        if (hash_equals($userToken, $token)) {
            echo "1";
        } else {
            echo "-1";
        }
    }
}

function generateRandomToken()
{
    $size = openssl_cipher_iv_length('AES-256-CBC');
    $iv = openssl_random_pseudo_bytes($size);
    return bin2hex($iv);
}

function insertSession($userID, $token)
{
    $db = new Database(); //create a new instance of the database class
    $conn = $db->connect(); //assign the connection parameters
    $stmt = $conn->prepare("INSERT INTO usersessions(userID, token) VALUES(?, ?) ON DUPLICATE KEY UPDATE userID = VALUES(userID), token = VALUES(token)");
    if($stmt === false) {
        trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
    }
    $stmt->bind_param('ss', $userID, $token);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo '11';
    } else {
        echo '00';
    }
    $stmt->close();
    //the connection is closed in the function that calls the current function
}

function fetchTokenFromDB($userID)
{
    $db = new Database(); //create a new instance of the database class
    $conn = $db->connect(); //assign the connection parameters
    $stmt = $conn->prepare("SELECT Token FROM usersessions WHERE UserID = ?");
    if($stmt === false) {
        trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
    }
    $stmt->bind_param('s', $userID);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($token);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
    return $token;
}

function signInValidation($iEmail, $iPass)
{
    $iEmail = Check_Value($iEmail);
    $iPass = Check_Value($iPass);
    if (empty($iEmail) || empty($iPass)) {
        return false;
    } else {
        if (!preg_match("/^(([^<>()\[\]\\.,;:\s@\"]+(\.[^<>()\[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/", $iEmail)
            || (strlen($iPass) < 8 || strlen($iPass) > 16)) {
            return false;
        } else {
            return true;
        }
    }
}

function Check_Value($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
