<?php
class identitas{
	public $nama;
	public $tempatlahir;

	public function __construct($n,$t){
		$this->nama=$n;
		$this->tempatlahir=$t;
	}
	public function get_nama(){
		return $this->nama;
	}
	public function get_tempatlahir(){
		return $this->tempatlahir;
	}
}
?>