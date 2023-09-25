<?php

class Estoque {
    private $itens = [];

    public function adicionarItem($nome, $quantidade) {
        $this->itens[$nome] = $quantidade;
    }

    public function visualizarEstoque() {
        echo "Estado atual do estoque:\n";
        foreach ($this->itens as $nome => $quantidade) {
            echo "$nome: $quantidade\n";
        }
    }

    public function removerItem($nome) {
        if (isset($this->itens[$nome])) {
            unset($this->itens[$nome]);
            echo "$nome removido do estoque.\n";
        } else {
            echo "$nome não encontrado no estoque.\n";
        }
    }
}

$estoque = new Estoque();

$estoque->adicionarItem("Celular", 25);
$estoque->adicionarItem("Computador", 20);
$estoque->adicionarItem("Teclado", 15);
$estoque->adicionarItem("Mouse", 10);
$estoque->adicionarItem("Monitor", 5);

$estoque->visualizarEstoque();

$itemRemover = readline("Digite o nome do item que deseja remover: ");
$estoque->removerItem($itemRemover);

$estoque->visualizarEstoque();
?>