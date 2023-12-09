<?php

$config = require("config.php");
$db = new Database($config);

$heading = "Create New Note";
$REQ_METHOD = $_SERVER["REQUEST_METHOD"];

if ($REQ_METHOD === "POST") {
  $errors = [];
  $body = $_POST["body"];

  if (strlen($body) === 0) {
    $errors["body"] = "A body is required";
  }

  if (strlen($body) > 1000) {
    $errors["body"] = "Body can't be longer than 1,000 characters";
  }

  $db->query("INSERT INTO notes (body, user_id) VALUES(:body, :user_id)", [
    "body" => $body,
    "user_id" => 1
  ]);
  // dd($form_input);
}

require("views/note-create.view.php");
