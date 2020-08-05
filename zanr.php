<?php 
require_once 'konfiguracija.php';

if(!isset($_SESSION['autoriziran'])){
  header('location: index.php');
}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movieshare</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/app4.css">
  </head>
<body>

<?php
          // READ IZ CRUD
          $izraz=$veza->prepare('select * from zanr');
          $izraz->execute();
          $rezultati=$izraz->fetchAll();
          //elog($rezultati);
          ?> 

<?php 

foreach($rezultati as $red):
?>

<div class="callout callout-hover-reveal" data-callout-hover-reveal>
  <div class="callout-body">

    <h2><?=$red->naziv; ?></h2>
  </div>
  <div class="callout-footer">
  <p><?=$red->opis; ?></p>
  </div>
</div>

<?php 
            endforeach;
              ?>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
