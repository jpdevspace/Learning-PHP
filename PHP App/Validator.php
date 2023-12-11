<?php

class Validator
{
  // This is a pure function, so we can add "static" and call the method directly
  // no need to instantiate it first
  public static function string($value, $min = 1, $max = INF)
  {
    $char_count = strlen(trim($value));

    return $char_count >= $min && $char_count <= $max;
  }

  public static function email($value)
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }
}
