<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Luhn</title>
</head>
<body>
<div class="borda">
    <?php
        $num = $_POST['numero'];
        $numero = str_split($num);
        
        //$numero = array($num);
        if(count($numero) == 16){
            for($num = 0;$num<=15;$num++){
                $numero[$num] = $numero[$num] *1; 
            }     

            for($num = 0; $num<=15; $num++){
                if($num%2 == 0){
                    $numero[$num] *= 2;
                        if($numero[$num] > 9){
                            $numero[$num] -= 9;
                        }
                }
            }

            $soma = array_sum($numero);

            if($soma%10 == 0){
                echo "<h2>Numero do Cartão validado com Sucesso!!</h2>";
            }else{
                echo "<h2>Numero do Cartão Inválido!!</h2>";
            }


        }else{
            echo "<p>Numeros inválido!</p>";
        }
    ?>  
    <a href="index.php">Voltar</a>
</div>

</body>
</html>
 