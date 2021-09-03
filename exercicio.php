<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
    <title>EXERCICIO</title>
</head>


<body class="exercicio">
    <header class="cabecalho"> 
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
    <nav class="navegacao">
        <a href="  
            <?= "{$_GET['dir']}/{$_GET['file']}.php";?>" class="verde" > Sem Formatação</a>
        <a href="index.php" class="vermelho" > Voltar </a>
    </nav>

    <main class="principal">

        <div class="conteudo">
            <?php
            include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
        
   
    <footer class="rodape">
        WANDER & SYSTEM @ <?= date('Y'); ?>
    </footer>
</body>

</html>