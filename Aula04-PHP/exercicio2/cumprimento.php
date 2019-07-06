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
            <ol start="2">
                <li>
                    Gerar um arquivo chamado <b>incluir.php</b> que tenha um echo com a seguinte string “Sou incluir.php” e logo após gerar um arquivo <b>cumprimento.php.</b><br><br>
                    <!-- Pergunta 2 - a -->
                    a. Incluir no arquivo <b>cumprimento.php</b> o arquivo <b>incluir.php</b>. O que acontece?<br>
                    <!-- Resposta 2 - a -->
                    <?php
                        include("../exercicio2/incluir.php");
                    ?>
                    <br><br>
                    
                    <!-- Pergunta 2 - b -->
                    b. Substituir <a href="https://secure.php.net/manual/pt_BR/function.include.php">include</a> por <a href="https://secure.php.net/manual/pt_BR/function.require.php">require</a>. O que acontece?<br>
                    <!-- Resposta 2 - b -->
                    R: Ao substituirmos include por require temos uma diferença que podemos notar, a função include() apenas inclui o arquivo e caso o arquivo
                    que for incluso estiver com algum erro o arquivo na qual criamos o include() é executado da mesmo forma, caso utilzarmos o require o arquivo
                    na qual criarmos o require só irá ser executado caso o arquivo que estiver sendo incluso não possua nenhum erro.<br><br>
                    
					<!-- Pergunta 2 - c -->
                    c. No arquivo <b>cumprimento.php</b> crie somente echo “Olá, Mundo”. O que acontece agora com o <b>ponto a</b> e o <b>ponto b?</b><br>
                    <!-- Resposta 2 - c -->
                    <?php
                        echo "Olá Mundo!";
                    ?>
                    <br><br>

                    <!-- Pergunta 2 - d -->
                    d. No arquivo <b>cumprimento.php</b>, substituir o <a href="https://secure.php.net/manual/pt_BR/function.require.php">require</a> por <a href="https://secure.php.net/manual/pt_BR/function.include.php">include</a>, e incluir 2 vezes o mesmo arquivo. O que acontece? <br>
                    <!-- Respsota 2 - d -->
                    Repare que iremos incluir o arquivo todas as vezes que utilizarmos a função include().<br>
                    <?php
                        include("../exercicio2/incluir.php");
                        include("../exercicio2/incluir.php");
                        include("../exercicio2/incluir.php");
                    ?>
					<br><br>
					
					<!-- Pergunta 2 - e -->
                    e. O arquivo <b>cumprimento.php</b>, substituir todos os <a href="https://secure.php.net/manual/pt_BR/function.include.php">include</a> por <a href="https://secure.php.net/manual/pt_BR/function.include-once.php">include_once</a>. O que acontece?<br>
					<!-- Resposta 2 - e -->
					Resposta: Se criarmos mais de um include_once() incluindo o mesmo arquivo teremos um problema, pois, a função include_once() 
					tem a responsabilidade de incluir apenas uma vez um arquivo que necessitamos, descartando o risco de criarmos vários includes do mesmo arquivo.
				</li>
            </ol>
        </section>
    </div>
</body>
</html>