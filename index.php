<?php

include 'arvore.class.php';

$no1 = New No();
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
print_r($no1->direita->esquerda->esquerda->esquerda);


$no2 = $arvore->remove_valor_minimo_da_arvore($no1->direita->esquerda->esquerda->esquerda);

echo '<br>Ordenamento ';
$arvore->em_ordem($no2);

// $no3 = $arvore->remove_valor_minimo_da_arvore($no2);

// echo '<br>Ordenamento ';
// $arvore->em_ordem($no3);

// $no4 = $arvore->remove_valor_minimo_da_arvore($no3);

// echo '<br>Ordenamento ';
// $arvore->em_ordem($no4);

// echo '<br>Prefixado ';
// $arvore->prefixado($no1);

print_r($no1);