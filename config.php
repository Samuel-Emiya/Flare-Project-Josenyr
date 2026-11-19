<?php
date_default_timezone_set('America/Sao_Paulo');
define('BASE_PATH', __DIR__);
define('BASE_URL', '/Flare-Project');

//Conexão com o banco em todas as paginas
require_once BASE_PATH . '/src/banco.php';

//Login/sessão e status da loja (aberta ou fechada)
require_once BASE_PATH . '/src/auth.php';

iniciarSessao();