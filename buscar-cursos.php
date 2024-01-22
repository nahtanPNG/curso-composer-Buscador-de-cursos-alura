<?php

require 'vendor/autoload.php';

use \GuzzleHttp\Client;
use nahtanpng\BuscadorDeCursos\Buscador;
use \Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br']); //Criando um cliente HTTP e definindo uma html base
$crawler = new Crawler(); //Criando um crawler
// $crawler->addHtmlContent($html); Adicionando o conteudo HTML

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php'); //Buscando o elemento e definindo o parametro da url

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
