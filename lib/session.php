<?php /**
 *
 */
class Session
{

  public static function session_start()
  {
  session_start();
  }

  public static function session_set($arg,$value)
  {
  $_SESSION[ $arg ] = $value;
  }

  public static function session_get($arg)
  {
  return $_SESSION[ $arg ];
  }

  public static function session_unset($arg)
  {
  unset($_SESSION[ $arg]);

  }
  public static function session_destroy()
  {
      session_destroy();
  }
}
 ?>
