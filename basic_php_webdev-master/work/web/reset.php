<?php

require('../app/functions.php');

// setcookie('color', '');
unset($_SESSION['color']);

header('Location: http://localhost:8080/index.php');