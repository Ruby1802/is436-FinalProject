/* 
A work in progress...
<?php
session_start();
require 'db.php';
if($SERVER['REQUEST_METHOD'] == 'POST') {
  $username = trim($_POST['username']);
  $password = $_POST['password'];
  $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->execute([$username]);
  $user = $stmt->fetch();
  if($user && password_verify($password, $user['password_hash'])) {
    $_SESSION['ls_id'] = $user['ls_id'];
    $_SESSION['username'] = $user['username'];
    header('Location: lf_homepage.php');
    exit();
  } elseif (!$user) {
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('INSERT INTO loginsign (ls_id, user_name, username, password, email) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$username, $password_hash, $username . '@example.com']);
    $_SESSION['ls_id'] = $pdo->lastInsertId();
    $_SESSION['username'] = $username;
    header('Location: lf_homepage.php');
    exit();
  } else {
    $error = "Invalid login. Please try again!";
  }
}
?>
*/

/* Login.html content goes here */
