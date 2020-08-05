<?php

session_start();

$server='127.0.0.1';
$baza='movieshare';
$korisnik='edunova';
$lozinka='edunova';

$dsn='mysql:host=' . $server. ';dbname=' . $baza . ';charset=utf8';

$opcije=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];

$veza = new PDO($dsn,$korisnik,$lozinka,$opcije);

function elog($sto)
{
    echo '<pre>';
    print_r($sto);
    echo '</pre>';
}