<?php

class Linear {
	private $array = array();

	public function __construct() {
	
	}

	public function set_array($num) {
		array_push($this->array, $num);
	}

	public function get_array() {
		return $this->array;
	}

	public function print_array() {
		echo '<pre>';
		print_r($this->array);
		echo '</pre>';
	}

	public function search($valor) {

	    foreach ($this->array as $key => $value) {

	    	if ($value == $valor) {
            	return $key;
         	}

        }

    	return 'false';
 	}
}