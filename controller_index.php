<?php

$xml = simplexml_load_file('source.xml');

$menu = [
    $xml->page[0]->menu,
    $xml->page[1]->menu,
    $xml->page[2]->menu,
    $xml->page[3]->menu
];


$recupGet = $_GET['action'];

$test = intval($recupGet);

$title =  $xml->page[$test]->title;
$content = $xml->page[$test]->content;
