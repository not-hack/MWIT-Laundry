<?php
    $DB_HOST = 'localhost';
    $DB_USERNAME = 'root';
    $DB_PASSWORD = '';
    $DB_NAME = 'MWIT-Laundry';

    $connection = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

    if ($connection->connect_error) {
        echo 'Connect to database fail';
    }
?>