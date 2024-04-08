<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$mysql = new MySQL;
$table = new UsersTable($mysql);

$id = $table->insert([
    "name" => "Alice",
    "email" => "alice@gmail.com",
    "phone" => "1234",
    "address" => "some Address",
    "password" => "password",
]);

echo $id;



//$mysql = new MySQL;
// $db = $mysql->connect();

// $result = $db->query("SELECT * FROM roles");

// print_r($result->fetchAll());

//use Helpers\HTTP;
//use Helpers\Auth;


//$user =Auth::check();
// print_r($user);

//HTTP ::redirect('/index.php','http=test');

// use Helpers\Auth;
// use Helpers\HTTP;
// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;
// use Faker\Factory as Faker;

// Auth::check();
// HTTP::redirect();

// $db = new MySQL;
// $db->connect();

// $table = new UsersTable;
// $table->insert();

// $faker = Faker::create();
// echo $faker->name;