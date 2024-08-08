<?php

// log the user out

use Core\Authenticator;

// temp
$auth = new Authenticator;
$auth->logout();

header('location: /');
exit();