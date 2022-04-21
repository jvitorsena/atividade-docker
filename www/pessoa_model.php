<?php

class Pessoa {
	private $id;
	private $name;
	private $email;
	private $idade;
	private $createdAt;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>