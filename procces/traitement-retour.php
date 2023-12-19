<?php
include_once('../partials/header.php');
require_once('../database.connect.php');
$request = $database->query("SELECT * FROM utilisateur");

$pseudos = $request->fetchAll();
// var_dump($pseudos);

$request = $database->query("SELECT * FROM message");

$messages = $request->fetchAll();
?>