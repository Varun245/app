<?php


// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "root", "training");

session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['login_user'];
var_dump($user_check);

// SQL Query To Fetch Complete Information Of User
$query = "SELECT user_credientials.email_id from user_credientials,user where user_credientials.email_id = '$user_check' AND user_credientials.id=user.id" ;
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email_id'];




?>