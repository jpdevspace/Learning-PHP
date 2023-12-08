<?php

$heading = "Create New Note";
$REQ_METHOD = $_SERVER["REQUEST_METHOD"];

if ($REQ_METHOD === "POST") {
  $form_input = $_POST["note-body"];
  // dd($form_input);
}

require("views/note-create.view.php");
