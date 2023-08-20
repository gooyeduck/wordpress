<?php
require 'functions.php';
// require 'router.php';

class Database {
	public function query() {
	}
}

$db = new Database();

$host     = 'localhost';
$db       = 'WordPress';
$user     = 'root';
$password = '';


$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO( $dsn, $user, $password );

	if ( $pdo ) {
		echo "Connected to the $db database successfully!";
	}
} catch ( PDOException $e ) {
	echo $e->getMessage();
	die();
}

$statement = $pdo->prepare( 'SELECT * FROM posts' );
$statement->execute();
$posts = $statement->fetchAll( PDO::FETCH_ASSOC );

foreach ( $posts as $post ) {
	echo "<li>{$post['title']}</li>";
}
