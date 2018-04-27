<?php
//user login active
user_login_finalize($user);

//save user

$user = \Drupal\user\Entity\User::create();
$user->setPassword('defaultPassword,.');
$user->enforceIsNew();
$user->setEmail($remail);
$user->setUsername($account);
$user->set('field_name', $value);
$user->activate();
$result = $user->save();