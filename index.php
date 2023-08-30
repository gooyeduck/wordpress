<?php
// require 'functions.php';
// // require 'router.php';

// class Database {

// public $conncetion;

// public function __construct() {
// }
// public function query( $query ) {

// $statement = $pdo->prepare( $query );
// $statement
// }
// }

// $db = new Database();

// $host     = 'localhost';
// $db       = 'WordPress';
// $user     = 'root';
// $password = '';


// $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

// try {
// $pdo = new PDO( $dsn, $user, $password );

// if ( $pdo ) {
// echo "Connected to the $db database successfully!";
// }
// } catch ( PDOException $e ) {
// echo $e->getMessage();
// die();
// }

// $statement = $pdo->prepare( 'SELECT * FROM posts' );
// $statement->execute();
// $posts = $statement->fetchAll( PDO::FETCH_ASSOC );

// foreach ( $posts as $post ) {
// echo "<li>{$post['title']}</li>";
// }
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Define a list of common mobile user-agent keywords
$mobileKeywords = array( 'Mobile', 'Android', 'iPhone', 'iPad', 'Windows Phone', 'BlackBerry', 'Kindle', 'Tablet' );

$isMobileDevice = true;

// Check if any of the mobile keywords are present in the User-Agent string
foreach ( $mobileKeywords as $keyword ) {
	echo stripos( $userAgent, $keyword );
	if ( stripos( $userAgent, $keyword ) !== false ) {
		$isMobileDevice = true;
		break;
	}
}

//testing  o f tshs 

if ( ! $isMobileDevice ) {
	// It's not a mobile device
	echo 'This is not a mobile device.';
} else {
	// It's a mobile device
	echo 'This is a mobile device.';
}
