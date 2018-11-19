<?php

session_start();

require_once "db.php";

/*if($_SERVER["REQUEST_METHOD"] == "POST") {

	//get the username and password from the form
	$user=$_POST['username'];
	$pass=$_POST['password'];


	//sql to to check if the username and password match the database
	$sql = "SELECT * FROM Users WHERE username = $user";

	$result = $conn->query($sql);
	$row= $result->fetch_assoc();
	print_r($row);

	if(password_verify($pass, $row['password'])){

    $_SESSION["loggedIn"]=true;
    $_SESSION["loginError"]=false;

    header("Location: ../index.php");
	}


	//other wise
	else{
		$_SESSION["loggedIn"]=false;
		$_SESSION["loginError"]=true;

		echo $_SESSION["loginError"];
		//header("Location: ../index.php");
    $message = "Invalid Credentials!";

	}

}

//echo $message
//header("Location: ../index.php");*/

/*if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $username = $conn->real_escape_string($username);
  $password = $conn->real_escape_string($password);

  if ($username != "" || $password != "") {

    $sql = "SELECT * FROM Users WHERE username = $username";
    $login_result = $conn->query($sql);

    if (!$login_result) {
      die($conn->connect_error);
    }

    if ($login_result->num_rows == 0) {
      header("Location: ../index.php?loginError=true");
    }


    while ($row = $login_result->fetch_assoc()) {
      $db_id = $row['user_id'];
      $db_username = $row['username'];
      $db_password = $row['password'];
      $db_userrole = $row['role'];

      $db_username;
      $db_userrole;

      $password_compare = password_verify($password, $db_password);

      if (!$password_compare) {
        header("Location: ../index.php?loginError=true");
      }
      else {
        /*
         * Save previous cookie info, and set new cookie.
         */
      /*  date_default_timezone_set("America/Halifax");

        //Hash the user ID here so that we can store the cookie for multiple users.
        $cookie_enc_user_id = hash('md5', $db_id . $db_username);
        $saved_cookie_name = "cms_access_" . $cookie_enc_user_id;

        if (isset($_COOKIE[$saved_cookie_name])) {
          $_SESSION['last_access'] = $_COOKIE[$saved_cookie_name];
        }

        $cookie_name = "cms_access_" . $cookie_enc_user_id;
        $cookie_data = date("d-M-Y") . ", at " . date("h:i:sa");
        setcookie($cookie_name, $cookie_data, time() + (60*60*24*2), "/");




        $_SESSION['username'] = $db_username;
        $_SESSION['role'] = $db_userrole;
        $_SESSION['loggedIn'] = TRUE;

        header("Location: ../index.php?user=$db_id");
      }
    }
  }
}*/

?>
