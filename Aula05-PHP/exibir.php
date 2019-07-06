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
            <ol start="2"> 
                <li>
                    <!-- Pergunta 2 -->
                    Criar um arquivo exibir.php que imprima a variável $_GET através de um var_dump.<br><br>
                    <!-- Resposta 2 -->  
                    <pre>
                        <?php var_dump($_POST); ?>
                    </pre>
                    <br>

                    <!-- Pergunta 2 - a -->
                    a. O que acontece agora em <b>exibir.php</b>?<br><br>
                    <!-- Resposta 2 - a -->
                    R: Ao fazermos var_dump() no $_GET, obtemos os dados digitados pelos usuários nos campos Nome e E-mail.<br><br>

                    <!-- Pergunta 2 - b -->
                    b. Modificar exibir.php para que imprima o nome e e-mail digitado no formulário<br><br>
                    <!-- Resposta 2 - b -->
                    <b>Nome:</b> <?php echo $_POST['nome'] . '<br>'; ?>
                    <b>Email:</b> <?php echo $_POST['email'] . '<br>'; ?>
                </li>
            </ol>
            <ol start="4">
                <li>
                    <!-- Pergunta 4 - d -->
                    d. Na página <b>exibir.php</b> imprima os valores selecionados no formulário.<br><br>
                    <!--Resposta 4 - d -->
                    <?php
                        $informacoes = $_POST['informacao'];
                        $sexo = $_POST['sexo'];
                        $termos = $_POST['termos'];  
                    ?>
                    Exibindo informações selecionadas:<br>
                    <?php
                        foreach ($informacoes as $informacao) {
                            echo $informacao . ', ';
                        }
                    ?>
                    <br><br>

                    <p>O sexo selecionado foi: <?php echo $sexo; ?></p>
                    <p>Os <?php echo $termos; ?> foram a aceitos</p>
                </li>
            </ol>
        </section>
    </div>
</body>
</html>