<?php
ini_set ("default_charset","");
include_once("gzip/gzipHTML.php");
//include_once("extranet/autoload.php");
//session_start();
include_once("RequestManager.php");
$rotas = array(
	'/quem-somos'=> 'quem-somos.php',
	'/empreendimentos'=> 'empreendimentos_page.php',
	'/servico/(?P<servico>\S+)/(?P<titulo>\S+)'=>'servicos_mostra.php',
  '/'=>'inicial.php',
	'/inicial'=>'inicial.php',
	'/inicial/(?P<acesso>\w+)'=>'inicial.php',
	'/index'=>'inicial.php',
	'/inicial'=>'inicial.php',
	'/(?P<url>\S+)'=>'inicial.php',
);
$request_manager = new RequestManager();
$request_manager->run($rotas);
exit;