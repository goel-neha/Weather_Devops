<?php


try
{

  $pdo = new PDO('mysql:host=localhost;dbname=Weather_login', 'root', 'test123');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';

  exit();
}

// $user = 'root';
// $password = 'Mummypapa@23';
// $db = 'Weather_login';
// $host = 'localhost';
// $port = 3306;
//
// $link = mysqli_init();
// $success = mysqli_real_connect(
//    $link,
//    $host,
//    $user,
//    $password,
//    $db,
//    $port
// );


?>
