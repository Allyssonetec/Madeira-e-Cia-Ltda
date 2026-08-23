<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["txtNome"];
    $valorCompra = $_POST["txtValorCompra"];
    $formaPagamento = $_POST["cmbPag"];

    $desconto = 0;

    //Erro do cálculo corrigido, foram alterdos os tipos de pagamentos, add pix, dinheiro e cartão de credito.
    //Corrigido os valores de descontos 0 para crédito, 8% para pix e 10% para dinheiro.
    
    if ($formaPagamento == "cartao") {

        $desconto = 0;

        $mensagem = "Olá $nome, sua compra de R$ " . number_format($valorCompra, 2, ',', '.') . " foi realizada com cartão de crédito. Não há desconto.";

    } elseif ($formaPagamento == "pix") {

        $desconto = $valorCompra * 0.08;

        $mensagem = "Olá $nome, sua compra de R$ " . number_format($valorCompra, 2, ',', '.') . " foi realizada com PIX. Seu desconto é de R$ " . number_format ($desconto, 2, ',', '.');

    } elseif ($formaPagamento == "dinheiro") {

        $desconto = $valorCompra * 0.1;

        $mensagem = "Olá $nome, sua compra de R$ " . number_format($valorCompra, 2, ',', '.') . " foi realizada com dinheiro. Seu desconto é de R$ " . number_format ($desconto, 2, ',', '.');
    }

// Corrigido a mensagem final, mostra o resultado final da compra.
//Valores mostram duas casas decimais depois da virgula.

/* Para a correção do código foram alterados os valores da porcentagem de desconto na variável $valorcompra 
Forma de pagamento invalido foi retirado, as opçoes se apresentam de forma de lista suspensa, não permite digitção de valores, sem margem para erro.
A correção da mensagem de desconto foi corrigida com adição da variável $valorFinal = $valorCompra - $desconto; subtraindo o desconto e  adicionando um echo para exibira o $valorFinal*/

    $valorFinal = $valorCompra - $desconto;

    echo "<div>$mensagem</div>";
   
    echo "<div class='w3-panel w3-green'> Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.') . "</div>";
}
?>