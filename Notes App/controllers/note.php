<?php

$config = require("config.php");
$db = new Database($config);

$heading = 'Note';

$note = $db -> query("SELECT * FROM notes WHERE user_id = :id", ["id" => $_GET["id"]]) -> fetch();

require "views/note.view.php";