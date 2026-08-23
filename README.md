Foi lançado um desafio para a correção do codigo abaixo:
Para essa correção forma alterados partes do código:
  Erro do cálculo corrigido, foram alterdos os tipos de pagamentos, add pix, dinheiro e cartão de credito.
  Corrigido os valores de descontos 0 para crédito, 8% para pix e 10% para dinheiro.
  Corrigido a mensagem final, mostra o resultado final da compra.
  Valores mostram duas casas decimais depois da virgula.

  Para a correção do código foram alterados os valores da porcentagem de desconto na variável $valorcompra 
  Forma de pagamento invalido foi retirado, as opçoes se apresentam de forma de lista suspensa, não permite digitção de valores, sem margem para erro.
  A correção da mensagem de desconto foi corrigida com adição da variável $valorFinal = $valorCompra - $desconto; subtraindo o desconto e  adicionando um echo para exibira o $valorFinal*/


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["txtNome"];
    $valorCompra = $_POST["txtValorCompra"];
    $formaPagamento = $_POST["cmbPag"];
    $desconto = 0;

    // ERRO: cálculo incorreto para boleto e depósito
    if ($formaPagamento == "cartaoCredito") {
        $desconto = 0;
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com cartão de crédito. Não há desconto.";
    } elseif ($formaPagamento == "boleto") {
        $desconto = $valorCompra * 0.1; // ERRO: deveria ser 8% para boleto
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com boleto. Seu desconto é de R$ $desconto.";
    } elseif ($formaPagamento == "deposito") {
        $desconto = $valorCompra * 0.08; // ERRO: deveria ser 10% para depósito
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com depósito. Seu desconto é de R$ $desconto.";
    } else {
        $mensagem = "Forma de pagamento inválida.";
    }

    // ERRO: mensagem final não mostra valor com desconto
    echo "<div class='w3-panel w3-green'>$mensagem</div>";
}
?>
