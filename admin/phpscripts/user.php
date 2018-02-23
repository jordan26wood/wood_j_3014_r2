<?php
function createUser($fname, $username, $password, $email, $level) {
		include('connect.php');
		$date = "NULL";
		$password = md5($password);
$userstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', '{$date}', '{$level}', 'no', NULL)";
// echo $userstring;
    $userquery = mysqli_query($link, $userstring);
    if ($userquery) {
      redirect_to('admin_index.php');
    }else{
      $message = "User was not able to be created, Please try again.";
      return $message;
    }
  mysqli_close($link);
  }

?>
