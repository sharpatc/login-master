<?php

session_start();
unset ($SESSION['username']);
session_destroy();
//esta es la locacion a la cual enviaras al usuario para desconectarse
header('Location:http://localhost:8080/login-de-android-master/');


?>