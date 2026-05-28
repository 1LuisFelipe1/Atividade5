<?php

require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'Pedido.php';
require_once 'Itempedido.php';


$cliente = new Cliente("Luis Felipe", "luis@gmail.com");
$produto = new Produto("Mouse Gamer", 150.00);
$pedido = new Pedido(1, "28/05/2026");
$itempedido = new Itempedido("Mouse Gamer", 2);


echo "<h1>Sistema de Pedidos</h1>";

echo "<h2>Cliente</h2>";
echo "Nome: " . $cliente->getNome() . "<br>";
echo "Email: " . $cliente->getEmail() . "<br>";

echo "<h2>Produto</h2>";
echo "Nome: " . $produto->getNome() . "<br>";
echo "Preço: R$ " . $produto->getPreco() . "<br>";

echo "<h2>Pedido</h2>";
echo "Número: " . $pedido->getNumero() . "<br>";
echo "Data: " . $pedido->getData() . "<br><br>";

echo "<h2>Item do Pedido</h2>";
echo "Produto: " . $itempedido->getProduto() . "<br>";
echo "Quantidade: " . $itempedido->getQuantidade();

?>