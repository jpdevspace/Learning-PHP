<?php

require base_path("Validator.php");

$config = require base_path("config.php");
$db = new Database($config);

$REQ_METHOD = $_SERVER["REQUEST_METHOD"];
$errors = [];

if ($REQ_METHOD === "POST") {

  if (!Validator::string($_POST["body"], 1, 1000)) {
    $errors["body"] = "A body is required and can't be longer than 1,000";
  }

  $db->query("INSERT INTO notes (body, user_id) VALUES(:body, :user_id)", [
    "body" => $_POST["body"],
    "user_id" => 1
  ]);
}

view("notes/create.view.php", [
  "heading" => "Create New Note",
  "errors" => $errors
]);
