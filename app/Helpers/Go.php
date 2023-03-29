<?php

namespace App\Helpers;

class Go
{
   public static function getPublic($path)
   {
      $file = URL . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . $path;
      return $file;
   }
}
