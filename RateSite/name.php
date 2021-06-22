<?php
session_start();
include "../../../RateSite/functions.php";
include "../../../RateSite/connection.php";
$user_data=check_login($con);
$username=$user_data['user_name'];

?>