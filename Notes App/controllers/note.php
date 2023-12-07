<?php

$config = require("config.php");
$db = new Database($config);

$heading = 'Note';

$note = $db -> query("SELECT * FROM notes WHERE id = :id",
    ["id" => $_GET["id"]
]) -> fetch();

if (!$note)
{
    abortReq();
}

if ($note['user_id'] !== 1)
{
    abortReq(Response::FORBIDDEN);
}

require "views/note.view.php";