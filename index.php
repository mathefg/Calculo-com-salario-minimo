<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo com salario minimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>
            Quantos salários minimos você ganha
        </h1>
        <?php 
            $minimo = 1_380.60;
            $salario = $_GET['s'] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="s">Salario (R$)</label>
            <input type="number" name="s" id="s" step="0,001" value="<?=$salario?>">
            <p>
                Considerando o salario minimo de <strong>R$ <?= number_format($minimo,2,',','.')?></strong>
            </p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
        $tot = intdiv($salario, $minimo);
        $dif = $salario % $minimo ;

        echo" <p> Quem recebe um salario de R\$".number_format($salario,2,',','.').".<strong> Recebe $tot salarios minmos</strong> + R\$ " . number_format($dif,2,',','.'). ".</p>";
        ?>
    </section>
    
</body>
</html>