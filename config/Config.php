<?php
session_start(); //inicializando a sessão
ob_start(); //limpa o buffer de redirecionamento

//url padrão do site 
define('URL', 'http://127.0.0.1/projetowmp/');
define('URLADM', 'http://127.0.0.1/projetowmp/adm/');

//controller e métodos padrão
define('CONTROLLER', 'Home');
define('METHOD', 'index');

//dados de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'projeto_wmp');