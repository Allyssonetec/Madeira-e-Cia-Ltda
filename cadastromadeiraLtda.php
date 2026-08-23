<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Madeireira LTDA</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="processacadastroMadeira.php"><br>
    Nome<input name="txtNome" type="text" id="txtNome" ><br>
    Valor da compra<input name="txtValorCompra" type="text" id="txtValorCompra"> <br>
    Foma de pagamento
    <select name="cmbPag">
        <option value="dinheiro">Dinheiro</option>
        <option value="cartao">Cartão de crédito</option>
        <option value="pix">PIX</option>
    </select><br>   
    
<input name="Enviar" type="submit" id="enviar" value="enviar">
</form>
</body>
</html> 