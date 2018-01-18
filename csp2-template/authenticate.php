<?php 

session_start();

$users = [
	['username' => 'admin', 'password' => 'abc123'],
	['username' => 'erwin', 'password' => '123abc'],
	['username' => 'chris', 'password' => 'abcd1234']
];

$isLoginSuccessful = false; //monitor signin status

$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);

// echo $userName;
// echo $passWord;

foreach ($users as $user) {
	// echo $user['username'] . '<br>';
	// echo $user['password'] . '<br>';

	if ($user['username'] == $userName && $user['password'] == $passWord) {
		// echo $userName . ' was found.';
		// echo ' Password is correct.';
		// header('location: home.php'); //will reroute to home.php
		$isLoginSuccessful = true;
		break;
	}
}

if ($isLoginSuccessful) {
	// successful signin
	// session_start();
	$_SESSION['current_user'] = $userName;
	header('location: home.php');
}
else {
	// failed signin
	header('location: signin.php');
}

if (isset($_SESSION['current_user']) && $isLoginSuccessful)
	$_SESSION['message'] = 'Sign in was successful.';
else
	$_SESSION['message'] = 'Sign in was unsuccessful.';
	