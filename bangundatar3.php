<?php
 class bangundatar{
 	public $p,$l;

 	function set_luas1($panjang,$lebar){
 		$this->p=$panjang;
 		$this->l=$lebar;
 	}
 	function get_luas1 (){
 		return $this->p * $this->l;
 	}
 	function get_luas11 (){
 		return 2 * $this->p + 2 * $this->l;
 	}
 }
 $bangundatar = new bangundatar;
 $bangundatar->set_luas1(20,20);
  echo "Luas Persegi Panjang :".$bangundatar->get_luas1().'<br>';
 echo "Keliling Persegi Panjang :".$bangundatar->get_luas11().'<br>';
?>