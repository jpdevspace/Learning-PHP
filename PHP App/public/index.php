<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "functions.php";

/*
|--------------------------------------------------------------------------
| spl_autoload_register()
|--------------------------------------------------------------------------
| This function tracks when a class is being instantiated with the new keyword
| finds the class definition and requires it, so you don't have to
| do that manually
*/
spl_autoload_register(function ($class) {
  require base_path("{$class}.php");
});

// the spl_autoload_register() function above does this
// require base_path("Database.php");
// require base_path("Response.php");

require base_path("router.php");
