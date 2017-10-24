<?php

require_once 'identitas3.php';

$identitas = new identitas('Rachel','Bandung');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>"."<br>";

$identitas = new identitas('Reina','Jakarta');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>"."<br>";

?>