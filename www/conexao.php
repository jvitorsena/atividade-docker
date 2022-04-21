<?php



class Conexao {

	private $host = 'db';
	private $dbname = 'docker';
	private $user = 'root';
	private $pass = 'test';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>