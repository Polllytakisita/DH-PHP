<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolução - Funções no PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        li{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <section>
            <ol> 
                <li>
                    Gerar um arquivo chamado <b>funcoes.php:</b><br><br>
                    <!-- Pergunta 1 - a -->
                    a. Definir uma função maior() que receba 3 números e retorne o maior deles.<br>
                    <!-- Resposta 1 - a -->
                    <?php
                        function maior ($num,$num2,$num3){
                            return max($num,$num2,$num3);
                        }
                        echo maior(2,1,3);
                    ?>
                    <br>
                    <!-- Pergunta 1 - b --> 
                    b. Definir uma função tabela() que receba um parâmetro base, um parâmetro limite, e retorne um array com a sequência de números a partir do número base até o número limite.<br>
                    <!-- Resposta 1 - b -->
                    <?php
                        function tabela ($base, $limite){
                            $adicionandoItens = [];
                            // vamos adicionar os números num array vazio
                            for($i = $base; $i <= $limite; $i++){
                                array_push($adicionandoItens, $i);
                            }
                            return $adicionandoItens;
                        }

                        $percorrendoArray = tabela(1,6);
                        // agora percorreremos o array que adicionamos os itens
                        foreach ($percorrendoArray as $item) {
                            echo "$item <br>";
                        }
                    ?>
                    <br>

                    c. Definir uma função triangulo() que retorne sua área.<br>
                    <!-- Resposta 1 - c -->    
                    <?php
                        function triangulo($base, $altura){
                          $area = (($base * $altura) / 2);
                          return $area;
                        }
                        echo triangulo(3,2);
                    ?>
                    <br>
                    <!-- Pergunta 1 - d -->
                    d. Definir uma função retangulo() que retorne sua área.<br>
                    <!-- Resposta 1 - d -->    
                    <?php
                        function retangulo($base, $altura){
                            $area = ($base * $altura);
                            return $area;
                        }
                        echo retangulo(3,2);
                    ?>  
                    <br>
                    <!-- Pergunta 1 - e -->
                    e. Definir uma função quadrado() que retorne sua área.<br>
                    <!-- Resposta 1 - e -->    
                    <?php
                        function quadrado($lado){
                          $area = ($lado * $lado);
                          return $area;
                        }
                        echo quadrado(2);
                    ?>
                    <br>
                    <!-- Pergunta 1 - f -->
                    f. Utilizando a função <a href="https://secure.php.net/manual/pt_BR/function.pi.php">pi()</a>, definir uma função circulo() que retorne sua área.<br>
                    <!-- Resposta 1 - f -->    
                    <?php
                        function circulo($raio){
                            $area = (pi() * ($raio * $raio));
                            return $area;
                        }
                        echo circulo(5);
                    ?>
                </li>
                <li>
                    <!-- Pergunta 3 -->
                    Utilizando <a href="https://secure.php.net/manual/pt_BR/function.strpos.php">strpos()</a>, encontrar a posição da primeira aparição de "php" dentro da string: "Adoro php, Eu também adoro php!".<br>
                    <!-- Resposta 3 --> 
                    <?php 
                        $frase = "Adoro php, Eu também adoro php!";
                        $stringAProcurar = "php";
                        $array = strpos($frase, $stringAProcurar);
                        echo $array;
                    ?>
                </li>
                <li>
                    <!-- Pergunta 4 -->
                    Utilizando a função <a href="https://secure.php.net/manual/pt_BR/function.strlen.php">strlen()</a>. Criar uma função hobbyValido. Essa função recebe uma string e retorna verdadeiro caso essa string tenha mais de 15 caracteres.<br>
                    <!-- Resposta 4 --> 
                    <?php
                        function hobbyValido($palavra){
                            if(strlen($palavra) >= 15){
                                return true;
                            } else {
                                return false;
                            }
                        }
                        hobbyValido('FazendoTesteDaFunção');
                    ?>
                </li>
            </ol>
        </section>
    </div>
</body>
</html>vai