<?php

/**
 * Created by PhpStorm.
 * User: radityacandra
 * Date: 25/06/16
 * Time: 20:41
 */
namespace App\Helper;

class RandomString
{
  public static function randomString($length = 10){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
}