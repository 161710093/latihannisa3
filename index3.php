<?php
require_once 'robot3.php';

$robot1= new robot ('lailailailai',20);
$robot2= new robot ('wiuwiuwiuit',40);

$robot1->set_berat(60);
$robot2->set_suara('hallosaybaybay');

echo 'Berat robot adalah : '.$robot1->get_berat().'<br>';
echo 'Suara robot adalah :'.$robot2->get_suara().'<br>';