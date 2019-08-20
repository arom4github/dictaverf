<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>

<body>

<?php
$host = 'localhost';
$port = '5432';
$user = 'dict';
$pass = 'eisti';
$db = 'dict';

  $data1='';
  $data2='';
  $data3='';
  $tab1= array();
  $tab2 = array();
  $moy='';

  // 1. Connexion (au serveur ET à la BDD)
//  $conn =  pg_connect($host, $login, $mdp, $bdd);
//  if(!$conn) die("Echec de connexion: ".pg_connect_error());

  $conn = pg_connect("host={$host} port={$port} dbname={$db} user={$user} password={$pass}");


  $sql=('select word from dict;');
$result = pg_query($conn, $sql);
$n = pg_num_rows($result);

//$sql=('select distinct word from dict;');
//$result1 = pg_query($conn, $sql);
//$r = pg_num_rows($result1);


//echo $r;
//echo ' ';
echo $n;
//echo ' ';
//echo $moy;

?>



</body>
</html>
