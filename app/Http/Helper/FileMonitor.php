<?php

/**
 * Created by PhpStorm.
 * User: radityacandra
 * Date: 20/06/16
 * Time: 12:59
 */
class FileMonitor
{
  public function getExtension($str)
  {
    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
  }
}