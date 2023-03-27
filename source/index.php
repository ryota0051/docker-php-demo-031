<?php
const HOSTNAME = 'mysql';
const DATABASE = 'php_db';
const USERNAME = 'phper';
const PASSWORD = 'password';

try {
  $pdo = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
  $sql = "SELECT * FROM sample_table";
  $stmt = $pdo->query($sql);
  foreach ($stmt as $row) { 
    // データベースのフィールド名で出力
    echo $row['message'];
    // 改行を入れる
    echo '<br>';
  }
} catch (PDOException $e) {
  $msg  = 'MySQLへの接続失敗...<br>' . $e->getMessage();
  echo $msg;
}
