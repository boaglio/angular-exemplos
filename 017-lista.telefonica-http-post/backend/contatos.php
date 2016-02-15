<?php
$contatos[] = array('nome' => 'Bruno',   'telefone' =>'999911111', 'operadora' =>  '{"nome": "Oi",   "codigo": 14, "categoria": "Celular"}' );
$contatos[] = array('nome' => 'Sandra',  'telefone' =>'999922222', 'operadora' =>  '{"nome": "Vivo", "codigo": 15, "categoria": "Celular"}' );
$contatos[] = array('nome' => 'Mariana', 'telefone' =>'999933333', 'operadora' =>  '{"nome": "Tim",  "codigo": 41, "categoria": "Celular"}' );

if(isset($_COOKIE['api_contatos'])){
	$array_contatos = unserialize($_COOKIE['api_contatos']);
	if(isset($_GET['id'])){
		$indice = $_GET['id']-1;
		$contato = isset($array_contatos[$indice]) ? $array_contatos[$indice] : 'Esse contato não existe';
		echo json_encode($contato);
	}else{		
	  echo json_encode($array_contatos);
	}
} else {
  echo json_encode($contatos);
}