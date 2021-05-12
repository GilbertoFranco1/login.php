<?php

/*=================================================================
para melhorar a conexao da aplicação, dependendo da conexao pode ser
local ou em um host no server
Só trocar as variaveis e conectar.
==================================================================*/

define('HOST','127.0.0.1');
define('USUARIO','root');
define ('SENHA','');
define('DB','login');


$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('ERRO DE CONEXÃO');    

