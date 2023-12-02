<?php
  // #1
  $mysqlnd = function_exists('mysqli_fetch_all');
  if ($mysqlnd) {
    echo "mysqlnd включен!\n";
  } else {
    echo "mysqlnd не включен!\n";
  }
  // #2
  $pdo = new PDO('mysql:host=mysql;dbname=mydatabase', 'newuser', 'password');
  if (strpos($pdo->getAttribute(PDO::ATTR_CLIENT_VERSION), 'mysqlnd') !== false) {
      echo "PDO MySQLnd включен!\n";
  }
  // #3
  $con = mysqli_connect("mysql","newuser","password","mydatabase");
  // Проверка соединения
  if (mysqli_connect_errno()) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
  } else {
    echo "MySQL подключён!";
  }
  echo "\n";
  phpinfo(); exit;
?>

