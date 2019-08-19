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


  // 1. Connexion (au serveur ET à la BDD)
//  $conn =  pg_connect($host, $login, $mdp, $bdd);
//  if(!$conn) die("Echec de connexion: ".pg_connect_error());

  $conn = pg_connect("host={$host} port={$port} dbname={$db} user={$user} password={$pass}");


$sql=('select sex from users;');
$result1 = pg_query($conn, $sql);
$n = pg_num_rows($result1);



# Find all active users

$sql=('select sex from users where sex = true ;');
$result2 = pg_query($conn, $sql);
$m = pg_num_rows($result2);

$sql=('select sex from users where sex = false ;');
$result3 = pg_query($conn, $sql);
$f = pg_num_rows($result3);

//echo $n;
//echo ' ';
//echo $m;
//echo '  ';
//echo $f;
///echo ' ';
echo floor(($m/$n)*100);
echo '% /  ';
echo floor(($f/$n)*100);
echo '%';

?>

<!--
<!?php  content="text/plain; charset=utf-8"
require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_pie.php');

$data = array(40,60,21,33);

$graph = new PieGraph(300,200);
$graph->SetShadow();

$graph->title->Set("A simple Pie plot");

$p1 = new PiePlot($data);
$graph->Add($p1);
$graph->Stroke();

?>
-->
</body>
</html>
