<?php 
date_default_timezone_set('America/Sao_Paulo');


$dados = array(

	'nome' => $_POST['nome'],
	'nacionalidade' => $_POST['nacionalidade'],
	'idade' => $_POST['idade'],
	'sexo' => $_POST['sexo'],
	'estadocivil' => $_POST['estadocivil'],
	'endereco' => $_POST['endereco'],
	'estado' => $_POST['estado'],
	'cidade' => $_POST['cidade'],
	'celular' => $_POST['celular'],
	'email' => $_POST['email'],
	
	'objetivo' => $_POST['objetivo'],
	
	'formacao-campo' => isset($_POST['curso']) ? 
		array(
			'curso' => $_POST['curso'],
			'instituicao' => $_POST['instituicao'],
			'conclusao' => $_POST['conclusao'],
		) :null,
	
	'exp-campo' => isset($_POST['empresa']) ?
    	array(
			'empresa' => $_POST['empresa'],
			'cargo' => $_POST['cargo'],
			'inicio' => $_POST['inicio'],
			'termino' => $_POST['termino'],
			'atividades' => $_POST['atividades'],
		): null,
		
	
	'qualificacoes' => $_POST['qualificacoes']

);

require_once("GeradorDeCurriculo.php");
