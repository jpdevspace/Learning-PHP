<?php

require "Validator.php";

$config = require "config.php";
$db = new Database($config);

$heading = "Create New Note";
$REQ_METHOD = $_SERVER["REQUEST_METHOD"];

if ($REQ_METHOD === "POST") {
  $errors = [];

  if (!Validator::string($_POST["body"], 1, 1000)) {
    $errors["body"] = "A body is required and can't be longer than 1,000";
  }

  $db->query("INSERT INTO notes (body, user_id) VALUES(:body, :user_id)", [
    "body" => $_POST["body"],
    "user_id" => 1
  ]);
  // dd($form_input);
}

require("views/notes/create.view.php");
