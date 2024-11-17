<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once realpath(__DIR__ . '/../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(realpath(__DIR__ . '/..'));
$dotenv->load();

$localhost = $_ENV['localhost'];
$username = $_ENV['username'];
$password = $_ENV['password'];
$database_name = $_ENV['database_name'];
$port = $_ENV['port'];


$conn = mysqli_connect($localhost, $username, $password, $database_name, $port) or die("Connection failed: " . mysqli_connect_error());