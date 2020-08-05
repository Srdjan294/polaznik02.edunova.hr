<?php 
require_once 'konfiguracija.php';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movieshare</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
<body>

<form class="callout text-center" action="autoriziraj.php" method="POST">
  <div class="sign-in-form">
    <h4 class="text-center">Sign In</h4>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email">
    <label for="password">Password</label>
    <input type="password" id="pass" name="password" placeholder="Password">
    <button type="submit" class="sign-in-form-button">Sign In</button>
  </div>
</form>

<?php

$p=isset($_GET['p']) ? (int)$_GET['p'] : 0;

switch ($p) {
  case 1:
    echo 'Greška ulaznih parametar';
    break;
  case 2:
    echo 'Molim Vas unesite email i lozinku';
    break;
  case 3:
    echo 'Neispravna kombinacija korisničkog imena i lozinke';
    break;
  default:
    echo 'Molim Vas autorizirajte se';
    break;
}

?>
 
<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
