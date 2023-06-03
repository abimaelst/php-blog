<?php
$config = require "config.php";
$db = new Database($config['database']);

$heading = 'Create a Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if(strlen($_POST['body']) === 0) {
        $errors['body'] = 'Body is required.';
    }

    if(strlen($_POST['body']) > 100) {
        $errors['body'] = 'The body can not be more than 100 characters.';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }


}

require "views/notes-create.view.php";