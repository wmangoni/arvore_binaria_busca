<?php

class Arvore {

    public function inserir($node, $valor) {

        //verifica se a árvore já foi criada
        if ($node != NULL) {

            //Verifica se o valor a ser inserido é menor que o nodo corrente da árovre, se sim vai para subarvore esquerda
            if ($valor < $node->valor) {

                //Se tiver elemento no nodo esquerdo continua a busca
                if ($node->esquerda != NULL) {
                    $this->inserir($node->esquerda, $valor);
                } else {
                    //Se nodo esquerdo vazio insere o novo nodo aqui
                    echo "Inserindo " . $valor . " a esquerda de " . $node->valor . "<br>";
                    $node->esquerda = new No($valor);
                }
                //Verifica se o valor a ser inserido é maior que o nodo corrente da árvore, se sim vai para subarvore direita
            } else if ($valor > $node->valor) {
                //Se tiver elemento no nodo direito continua a busca
                if ($node->direita != NULL) {
                    $this->inserir($node->direita, $valor);
                } else {
                    //Se nodo direito vazio insere o novo nodo aqui
                    echo "Inserindo " . $valor . " a direita de " . $node->valor . "<br>";
                    $node->direita = new No($valor);
                }
            }
        }
    }

    public function remove_valor_minimo_da_arvore($node) {
        if ($node == NULL) {
            echo "<br> Árvore vazia. <br>";
        } else if ($node->esquerda != NULL) {
            $node->esquerda = $this->remove_valor_minimo_da_arvore($node->esquerda);
            return $node;
        } else {
            //Se não tiver elemento esquerdo só nós resta o da direita
            return $node->direita;
        }
        return NULL;
    }

    public function prefixado($no) {
        if($no != null){
            echo $no->valor . " ";
            $this->prefixado($no->esquerda);
            $this->prefixado($no->direita);
        }
    }

    public function posfixado($no) {
        if($no != NULL){
            $this->posfixado($no->esquerda);
            $this->posfixado($no->direita);
            echo $no->valor . " ";
        }
    }

    public function em_ordem($no) {
        if($no != null){
            $this->em_ordem($no->esquerda);
            echo $no->valor . " ";
            $this->em_ordem($no->direita);
        }
    }
}