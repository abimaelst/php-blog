<?php

require "functions.php";
// require "route.php";
require 'Database.php';

$db = new Database();

$posts = $db->query('select * from posts');


dd($posts);




