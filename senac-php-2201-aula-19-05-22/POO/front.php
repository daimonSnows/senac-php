<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <div>
        <form method="POST">
            <label for="num1">Número 1:</label>
            <input type="text" name="num1" value="<?php echo $n1; ?>">
            <label for="num2">Número 2:</label>
            <input type="text" name="num2" value="<?php echo $n2; ?>">
            <select name="operacao" id="operacao">
                <option value="somar">Somar</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">multiplicação</option>
                <option value="divisao">divisão</option>
            </select>
            <input type="submit" value="calcular">
        </form>       
    </div>
    <div>
        Resultado: <?php echo $resultado; ?>
    </div>
</body>
</html>