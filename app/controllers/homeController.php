<?php
if (!isset($_SESSION)){
    session_start();
}

$categories = getCategories($pdo);
require_once '../resources/views/home.php';