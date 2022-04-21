<?php
//CRUD
class PessoaService {

	private $conexao;
	private $pessoa;
	private $name;
	private $email;
	private $assunto;
	private $mensagem;

	public function __construct(Conexao $conexao, Pessoa $pessoa) {
		$this->conexao = $conexao->conectar();
		$this->pessoa = $pessoa;
	}

	public function inserir() { //create
		$dateTime = date('Y-m-d H:i:s', time());
		$query = 'insert into pessoa (name, email, idade, createdAt) values (:name,:email,:idade,:createdAt)';
		// $query = 'insert into contato (name, email, assunto, mensagem) values (name,email,assunto,mensagem)';
		// $query = 'insert into contato(tarefa)values(:tarefa)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':name', $this->pessoa->__get('name'));
		$stmt->bindValue(':email', $this->pessoa->__get('email'));
		// $stmt->bindValue(':idade', $this->contato->__get('idade'));
		// $stmt->bindValue(':mensagem', $this->contato->__get('mensagem'));
        $stmt->bindValue(':idade', $this->pessoa->__get('idade'));
		$stmt->bindValue(':createdAt', $dateTime );
		// echo '<p>'.$this->contato->__get('mensagem').'</p>';
		$stmt->execute();
	}

	public function recuperar() { //read
		$query = 'select * from pessoa';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

}

?>