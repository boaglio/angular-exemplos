<?php
$contatos[] = array('nome' => 'Bruno',   'telefone' =>'999911111', 'operadora' =>  '{"nome": "Oi",   "codigo": 14, "categoria": "Celular"}' );
$contatos[] = array('nome' => 'Sandra',  'telefone' =>'999922222', 'operadora' =>  '{"nome": "Vivo", "codigo": 15, "categoria": "Celular"}' );
$contatos[] = array('nome' => 'Mariana', 'telefone' =>'999933333', 'operadora' =>  '{"nome": "Tim",  "codigo": 41, "categoria": "Celular"}' );
echo json_encode($contatos);