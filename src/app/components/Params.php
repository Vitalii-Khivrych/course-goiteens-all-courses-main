<?php

namespace components;

class Params
{
  public function save()
  {
    if ($this->validatePassword($_POST['password'])) {
      $file = fopen(dirname(__FILE__, 2) . '/params.ini', 'w+');
      fwrite($file, "PRODUCT_NAME={$_POST['PRODUCT_NAME']}\n");
      fwrite($file, "PRODUCT_ID={$_POST['PRODUCT_ID']}\n");
      fwrite($file, "scratch_NAME={$_POST['scratch_NAME']}\n");
      fwrite($file, "scratch_ID={$_POST['scratch_ID']}\n");
      fwrite($file, "minecraft_NAME={$_POST['minecraft_NAME']}\n");
      fwrite($file, "minecraft_ID={$_POST['minecraft_ID']}\n");
      fwrite($file, "wix_NAME={$_POST['wix_NAME']}\n");
      fwrite($file, "wix_ID={$_POST['wix_ID']}\n");
      fwrite($file, "roblox_NAME={$_POST['roblox_NAME']}\n");
      fwrite($file, "roblox_ID={$_POST['roblox_ID']}\n");
      fwrite($file, "design_NAME={$_POST['design_NAME']}\n");
      fwrite($file, "design_ID={$_POST['design_ID']}\n");
      fwrite($file, "frontend_NAME={$_POST['frontend_NAME']}\n");
      fwrite($file, "frontend_ID={$_POST['frontend_ID']}\n");
      fwrite($file, "gameDev_NAME={$_POST['gameDev_NAME']}\n");
      fwrite($file, "gameDev_ID={$_POST['gameDev_ID']}\n");
      fwrite($file, "python_NAME={$_POST['python_NAME']}\n");
      fwrite($file, "python_ID={$_POST['python_ID']}\n");
      fwrite($file, "LEELOO_HASH={$_POST['LEELOO_HASH']}\n");
      fwrite($file, "ELZA_TOKEN={$_POST['ELZA_TOKEN']}\n");
      fwrite($file, "GTM={$_POST['GTM']}\n");
      fclose($file);
    } else {
      echo "<p>Wrong password</p>";
    }
  }

  public function validatePassword($password)
  {
    return password_verify($password, $_ENV['PASSWORD_FORM']);
  }

  public static function getParams()
  {
    return parse_ini_file(dirname(__FILE__, 2) . '/params.ini');
  }
}