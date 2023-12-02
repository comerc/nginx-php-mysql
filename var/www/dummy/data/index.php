<?php
  // phpinfo(); exit;
  // #1
  $mysqlnd = function_exists('mysqli_fetch_all');
  if ($mysqlnd) {
      echo 'mysqlnd включен!';
  } else {
    echo "mysqlnd не включен!";
  }
  // #2
  $pdo = new PDO('mysql:host=mysql;dbname=mydatabase', 'newuser', 'password');
  if (strpos($pdo->getAttribute(PDO::ATTR_CLIENT_VERSION), 'mysqlnd') !== false) {
      echo 'PDO MySQLnd включен!';
  }
  // #3
  $con = mysqli_connect("mysql","newuser","password","mydatabase");
  // Проверка соединения
  if (mysqli_connect_errno()) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
  } else {
    echo "MySQL подключён!";
  }
?>

