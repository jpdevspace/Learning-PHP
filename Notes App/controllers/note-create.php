<?php

$config = require("config.php");
$db = new Database($config);

$heading = "Create New Note";
$REQ_METHOD = $_SERVER["REQUEST_METHOD"];

if ($REQ_METHOD === "POST") {
  $db->query("INSERT INTO notes (body, user_id) VALUES(:body, :user_id)", [
    "body" => $_POST["body"],
    "user_id" => 1
  ]);
  // dd($form_input);
}

require("views/note-create.view.php");
