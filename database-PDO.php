<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=databaseName", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES utf8");
} catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
}
