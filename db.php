<?php 
    require 'vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'db_info.env');
    $dotenv->load();

    $connection = mysqli_connect(
        $_ENV['DATABASE_HOST'],
        $_ENV['DATABASE_USER'],
        $_ENV['DATABASE_PASSWORD'],
        $_ENV['DATABASE_NAME']
    );

    if(!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

  
?>