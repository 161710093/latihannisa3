<?php
 class pengurangan{
 	public $bil1,$bil2;

 	function set_nilai1($bilangan1,$bilangan2){
 		$this->bil1=$bilangan1;
 		$this->bil2=$bilangan2;
 	}
	function get_nilai1 (){
 		return $this->bil1 - $this->bil2;
 	}
 }

 $pengurangan1 = new pengurangan;
 $pengurangan1->set_nilai1(20,2);
 echo "===============================".'<br>';
 echo "Perhitungan bilangan 20 dengan bilangan 2".'<br>';
 echo "===============================".'<br>';
 echo "Hasil Pengurangan :".$pengurangan1->get_nilai1().'<br>';
?>
