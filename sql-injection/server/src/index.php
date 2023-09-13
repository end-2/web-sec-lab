<?php
$host = 'db';
$db   = 'mydb';
$user = 'root';
$pass = 'secret';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $password . "'";
  
  $result = $pdo->query($sql);
  $user = $result->fetch();

  if ($user) {
      echo "Welcome, " . $user['username'] . "!" . "\n";
      die();
  } else {
      echo "Invalid credentials!" . "\n";
  }
}
?>

<form method="post">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>
