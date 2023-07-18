<?php

use components\Params;
require_once 'vendor/autoload.php';

/* It loads the .env file */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (!empty($_POST)) {
    $saver = new Params();
    $saver->save();
}

$ini_array = parse_ini_file('params.ini');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Params</title>
  </head>
  <body>
    <form action="" method="post">
      <!-- default -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          Zoho Product Name
          <input
            type="text"
            name="PRODUCT_NAME"
            value="<?= $ini_array['PRODUCT_NAME'] ?>"
            placeholder="<?= $ini_array['PRODUCT_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          Zoho Product ID
          <input
            type="text"
            name="PRODUCT_ID"
            value="<?= $ini_array['PRODUCT_ID'] ?>"
            placeholder="<?= $ini_array['PRODUCT_ID'] ?>"
          />
        </label>
      </div>
      <!-- scratch -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          scratch Name
          <input
            type="text"
            name="scratch_NAME"
            value="<?= $ini_array['scratch_NAME'] ?>"
            placeholder="<?= $ini_array['scratch_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          scratch ID
          <input
            type="text"
            name="scratch_ID"
            value="<?= $ini_array['scratch_ID'] ?>"
            placeholder="<?= $ini_array['scratch_ID'] ?>"
          />
        </label>
      </div>
      <!-- minecraft -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          minecraft Name
          <input
            type="text"
            name="minecraft_NAME"
            value="<?= $ini_array['minecraft_NAME'] ?>"
            placeholder="<?= $ini_array['minecraft_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          minecraft ID
          <input
            type="text"
            name="minecraft_ID"
            value="<?= $ini_array['minecraft_ID'] ?>"
            placeholder="<?= $ini_array['minecraft_ID'] ?>"
          />
        </label>
      </div>
      <!-- wix -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          wix Name
          <input
            type="text"
            name="wix_NAME"
            value="<?= $ini_array['wix_NAME'] ?>"
            placeholder="<?= $ini_array['wix_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          wix ID
          <input
            type="text"
            name="wix_ID"
            value="<?= $ini_array['wix_ID'] ?>"
            placeholder="<?= $ini_array['wix_ID'] ?>"
          />
        </label>
      </div>
      <!-- roblox -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          roblox Name
          <input
            type="text"
            name="roblox_NAME"
            value="<?= $ini_array['roblox_NAME'] ?>"
            placeholder="<?= $ini_array['roblox_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          roblox ID
          <input
            type="text"
            name="roblox_ID"
            value="<?= $ini_array['roblox_ID'] ?>"
            placeholder="<?= $ini_array['roblox_ID'] ?>"
          />
        </label>
      </div>
      <!-- design -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          design Name
          <input
            type="text"
            name="design_NAME"
            value="<?= $ini_array['design_NAME'] ?>"
            placeholder="<?= $ini_array['design_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          design ID
          <input
            type="text"
            name="design_ID"
            value="<?= $ini_array['design_ID'] ?>"
            placeholder="<?= $ini_array['design_ID'] ?>"
          />
        </label>
      </div>
      <!-- frontend -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          frontend Name
          <input
            type="text"
            name="frontend_NAME"
            value="<?= $ini_array['frontend_NAME'] ?>"
            placeholder="<?= $ini_array['frontend_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          frontend ID
          <input
            type="text"
            name="frontend_ID"
            value="<?= $ini_array['frontend_ID'] ?>"
            placeholder="<?= $ini_array['frontend_ID'] ?>"
          />
        </label>
      </div>
      <!-- gameDev -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          gameDev Name
          <input
            type="text"
            name="gameDev_NAME"
            value="<?= $ini_array['gameDev_NAME'] ?>"
            placeholder="<?= $ini_array['gameDev_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          gameDev ID
          <input
            type="text"
            name="gameDev_ID"
            value="<?= $ini_array['gameDev_ID'] ?>"
            placeholder="<?= $ini_array['gameDev_ID'] ?>"
          />
        </label>
      </div>
      <!-- python -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          python Name
          <input
            type="text"
            name="python_NAME"
            value="<?= $ini_array['python_NAME'] ?>"
            placeholder="<?= $ini_array['python_NAME'] ?>"
          />
        </label>

        <label style="width: 50%">
          python ID
          <input
            type="text"
            name="python_ID"
            value="<?= $ini_array['python_ID'] ?>"
            placeholder="<?= $ini_array['python_ID'] ?>"
          />
        </label>
      </div>
      <!--  -->
      <div style="display: flex; flex-direction: row; gap: 20px">
        <label style="width: 50%">
          Leeloo Hash
          <input
            type="text"
            name="LEELOO_HASH"
            value="<?= $ini_array['LEELOO_HASH'] ?>"
            placeholder="<?= $ini_array['LEELOO_HASH'] ?>"
          />
        </label>

        <label style="width: 50%">
          Elza Token
          <input
            type="text"
            name="ELZA_TOKEN"
            value="<?= $ini_array['ELZA_TOKEN'] ?>"
            placeholder="<?= $ini_array['ELZA_TOKEN'] ?>"
          />
        </label>
      </div>

      <label>
        GTM
        <input
          type="text"
          name="GTM"
          value="<?= $ini_array['GTM'] ?>"
          placeholder="<?= $ini_array['GTM'] ?>"
        />
      </label>

      <label>
        Password
        <input type="password" name="password" />
      </label>

      <button type="submit">Save</button>
    </form>
  </body>
</html>