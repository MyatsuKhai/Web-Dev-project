<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;

$mysql = new MySQL;
$db = $mysql->connect();

$result = $db->query("SELECT * FROM roles");

print_r($result->fetchAll());

//use Helpers\HTTP;
use Helpers\Auth;


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