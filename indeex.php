<?php

$password = 'The12345678!';

$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

echo $hash;