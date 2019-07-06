<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolução - HTTP</title>
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
                    <!-- Pergunta 1 -->
                    Crie uma página com o seguinte formulário:<br><br>
                    <!-- Resposta 1 -->
                    <form action="exibir.php" method="POST">

                        Nome: <input type="text" name="nome"><br><br>

                        E-mail: <input type="text" name="email"><br><br>

                        Como você ficou sabendo desta informação ?<br>
                        Google <input type="checkbox" name="informacao[]" value="google">
                        Rádio <input type="checkbox" name="informacao[]" value="radio">
                        Amigo <input type="checkbox" name="informacao[]" value="amigo"><br><br>
                        
                        Informe seu sexo:<br>
                        Masculino <input type="radio" name="sexo" value="masculino">
                        Feminino <input type="radio" name="sexo" value="feminino">
                        Outro <input type="radio" name="sexo" value="outros"><br><br>

                        <input type="checkbox" name="termos" value="termos"> Termos e Condições<br><br>
                        <input type="submit">
                    </form>
                </li>
            </ol>
            <ol start="3">
                <li>
                    <!-- Pergunta 3 -->
                    Modificar o formulário para que ele envie os dados através de <a href="https://secure.php.net/manual/pt_BR/reserved.variables.post.php">$_POST</a>. Como deveríamos modificar <b>exibir.php</b> para que continue funcionando?<br><br>
                    <!-- Resposta 3 -->
                    R: Quando alterado o método de envio dos dados, devemos alterar também no arquivo que irá tratar essas informações, no caso
                    também iremos obter a diferença no envio, pois,  uma requisição <b>$_GET</b> é enviada como string anexada a URL e é menos segura,
                    enquanto que a requisição <b>$_POST</b> é encapsulada junto ao corpo da requisição HTTP, não pode ser vista na URL e é mais segura.
                </li>
                <li>
                    <!-- Pergunta 4 -->
                    Adicionar ao formulário os seguintes inputs:<br><br>

                    <!-- Pergunta 4 - a -->
                    a. Adicionar uma <a href="https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_checkbox">checkbox</a> com opções, que responda à pergunta “Como você ficou sabendo deste site?”. Opções: “Google”, “Rádio”, “Indicação de Amigo”.<br>
                    <!-- Resposta 4 - a -->
                    R: O campo foi adicionado ao formulário da questão 1.<br><br>

                    <!-- Pergunta 4 - b -->
                    b. Adicionar um <a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_radio">radio button</a> para selecionar o sexo.<br>
                    <!-- Resposta 4 - b -->
                    R: O campo foi adicionado ao formulário da questão 1.<br><br>

                    <!-- Pergunta 4 - c -->
                    c. Adicionar uma <a href="https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_checkbox">checkbox</a> para aceitar “Termos e Condições”.<br>
                    <!-- Resposta 4 - c -->
                    R: O campo foi adicionado ao formulário da questão 1.<br><br>

                    <!-- Pergunta 4 - d -->
                    d. Na página <b>exibir.php</b> imprima os valores selecionados no formulário.
                    
                </li>
                <li>
                    <!-- Pergunta 5 -->
                    Testar a função de php <a href="https://secure.php.net/manual/pt_BR/function.getallheaders.php">getAllHeaders()</a> e imprimir o resultado. 
                    O que encontramos? Imprima todos os valores usando foreach, apenas para você conhecê-los.<br><br>
                    <!-- Resposta 5 -->
                    <?php
                        foreach (getallheaders() as $name => $value) {
                            echo "$name: $value <br>";
                        }
                    ?>
                </li>
            </ol>
        </section>
    </div>
</body>
</html>