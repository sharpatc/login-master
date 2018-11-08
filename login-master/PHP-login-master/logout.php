<?php

session_start();
session_unset($_SESSION['email']);
session_destroy();

header('location: http://localhost:8080/login-de-android-master/');

?>