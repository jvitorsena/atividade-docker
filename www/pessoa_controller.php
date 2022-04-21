<?php

require "pessoa_model.php";
require "pessoa_service.php";
require "conexao.php";

// require "./model.php";
// require "../service.php";
// require "../conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
	$pessoa = new Pessoa();
	// echo '<p>'.$_POST['name'].'</p>';
	// echo '<p>'.$_POST['email'].'</p>';
	// echo '<p>'.$_POST['assunto'].'</p>';
	// echo '<p>'.$_POST['mensagem'].'</p>';

	$pessoa->__set('name', $_POST['name']);
	$pessoa->__set('email', $_POST['email']);
	$pessoa->__set('idade', $_POST['idade']);

	// echo '<p>'.$contato->__get('mensagem').'</p>';

	$conexao = new Conexao();

	$PessoaService = new PessoaService($conexao, $pessoa);
	$PessoaService->inserir();

	header('Location: index.php');

} else if ($acao == 'recuperar') {

	$pessoas = new Pessoa();
	$conexao = new Conexao();

	$PessoaService = new PessoaService($conexao, $pessoas);
	$pessoas = $PessoaService->recuperar();
	
} else if ($acao == 'remover') {

	$contato = new Pessoa();
	$contato->__set('id', $_GET['id']);

	$conexao = new Conexao();

	// $tarefaService = new ContatoService($conexao, $contato);
	// $tarefaService->remover();

	if (isset($_GET['pag']) && $_GET['pag'] == 'index') {
		header('location: adm.php');
	} else {
		header('location: adm.php');
	}
}
