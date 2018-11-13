
<?php


App::get('database')->insert('users', [
    
    'name' => $_POST['name'],

    ]);

header("Location: /my-mvc-framework");

