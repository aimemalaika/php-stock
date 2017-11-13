<?php

session_start();
setcookie('username', '', time()-360*24);
setcookie('password', '', time()-360*24);
session_destroy();
header('Location: ../login');
?>
