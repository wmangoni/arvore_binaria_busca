<?php

include 'arvore.class.php';
include 'no.class.php';
include 'linear.class.php';

$linear = new Linear();
$linear->set_array(3);
$linear->set_array(5);
$linear->set_array(2);
$linear->set_array(9);
$linear->set_array(1);
$linear->print_array();
$el = 11;
echo 'Buscando elemento '.$el;

if ( $linear->search($el) !== 'false' ) {
	echo '<br>Elemento encontrado no indice '.$linear->search($el);
} else {
	echo '<br>Elemento '.$el.' não existe dentro da estrutura.';
}

echo '<br>---------------<br>';

$no1 = New No(8);
$arvore = New Arvore();

echo '<pre>';

$arvore->inserir($no1, 8);
$arvore->inserir($no1, 6);
$arvore->inserir($no1, 10);
$arvore->inserir($no1, 12);
$arvore->inserir($no1, 5);
$arvore->inserir($no1, 3);
$arvore->inserir($no1, 16);
$arvore->inserir($no1, 15);
$arvore->inserir($no1, 2);
$arvore->inserir($no1, 9);
$arvore->inserir($no1, 1);
$arvore->inserir($no1, 18);
$arvore->inserir($no1, 4);
$arvore->inserir($no1, 14);
$arvore->inserir($no1, 17);
$arvore->inserir($no1, 7);

echo '<br>Ordenamento ';
$arvore->em_ordem($no1);
echo '<br>';

$no2 = $arvore->remove_valor_minimo_da_arvore($no1);

echo '<br>Ordenamento ';
$arvore->em_ordem($no2);

echo '<br>Prefixado ';
$arvore->prefixado($no2);
echo '<br>Posfixado ';
$arvore->posfixado($no2);

$num = 14;
echo '<br>Buscando número '.$num.'<br>';
$result = $arvore->buscar($no1, $num);
var_dump($result);
if ($result !== 'false') {
	echo '<br>Valor encontrado no nível: '.$result.'<br>';
} else {
	echo '<br>Valor não encontrado na árvore<br>';
}

// $no3 = $arvore->remove_valor_minimo_da_arvore($no2);

// echo '<br>Ordenamento ';
// $arvore->em_ordem($no3);

// $no4 = $arvore->remove_valor_minimo_da_arvore($no3);

// echo '<br>Ordenamento ';
// $arvore->em_ordem($no4);

// echo '<br>Prefixado ';
// $arvore->prefixado($no1);
echo '<br><br><br>';
print_r($no1);