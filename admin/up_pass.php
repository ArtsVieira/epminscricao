<?php


/* Include the database connection script. */
include '../utils/config.php';
/* Username. */
$username = 'John';
/* Password. */
$password = '123456';
/* Secure password hash. */
$hash = password_hash($password, PASSWORD_DEFAULT);
/* Insert query template. */
$query = 'UPDATE users Set password = :passwd';
/* Values array for PDO. */
$values = [':passwd' => $hash];
/* Execute the query. */
try
{
  $res = $pdo->prepare($query);
  $res->execute($values);
}
catch (PDOException $e)
{
  /* Query error. */
  echo 'Query error.'.$e;
  die();
}


?>