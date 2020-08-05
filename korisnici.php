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
    <link rel="stylesheet" href="assets/css/app2.css">
  </head>
<body>

<?php
          // READ IZ CRUD
          $izraz=$veza->prepare('select * from korisnik');
          $izraz->execute();
          $rezultati=$izraz->fetchAll();
          //elog($rezultati);
          ?> 


<table class="responsive-card-table unstriped">
  <thead>
    <tr>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Korisničko ime</th>
      <th>Datum rođenja</th>
      <th>Adresa</th>
      <th>Email</th>
      <th>Broj mobitela</th>
    </tr>
  </thead>
  <?php 

foreach($rezultati as $red):
?>


  <tbody>
    <tr>
      <td data-label="Ime"><?=$red->ime; ?></td>
      <td data-label="Prezime"><?=$red->prezime; ?></td>
      <td data-label="Korisničko ime"><?=$red->korisnicko_ime; ?></td>
      <td data-label="Datum rođenja"><?=$red->datum_rodenja; ?></td>
      <td data-label="Adresa"><?=$red->adresa; ?></td>
      <td data-label="Email"><?=$red->email; ?></td>
      <td data-label="Broj mobitela"><?=$red->broj_mobitela; ?></td>

</tr>
  </tbody>
  <?php 
            endforeach;
              ?>
</table>





<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
