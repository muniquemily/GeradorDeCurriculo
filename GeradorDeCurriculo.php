<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="modelocurriculo.css">
    <title>Curriculum Vitae</title>
</head>

<body>
        <section>
            <div id="nome">
                <h1><?= $dados['nome']; ?></h1>
            </div>
        

             <div class="principal">
                <h3><?= $dados['nacionalidade']; ?>, <?= $dados['estadocivil']; ?>, <?= $dados['idade']; ?> anos</h3>
                <h3><?= $dados['endereco']; ?></h3>
                <h3><?= $dados['cidade']; ?>, <?= $dados['estado']; ?></h3>
                <h3>Celular: <?= $dados['celular']; ?></h3>
                <h3>E-mail: <?= $dados['email']; ?></h3>
            </div>
        </section>
        <hr>
        <section class="grupo">
            <h2>Objetivo</h2>
                <div class="dados">
                    <h3><?= $dados['objetivo']; ?></h3>
                </div>
        </section>

        <section>
            
            <?php if($dados['formacao-campo']) { ?>
                <h2>Formação Acadêmica</h2>

                <ul class="lista-topicos">
                <!--   ?php for($i = 0; $i < sizeof($dados['formacao-campo']); $i++) { ? !-->
                        <li>
                            <div class="dados">
                                <h4><?= $dados['formacao-campo']['curso'] ?></h4>
                                <p>Instituição: <?= $dados['formacao-campo']['instituicao'] ?></p>
                                <p>Conclusão: <?= $dados['formacao-campo']['conclusao'] ?></p>
                            </div>
                        </li>
                 <!--   ?php } ?> !-->
                </ul>
            <?php } ?>
        </section>

        <section>    
            <?php if($dados['exp-campo']) { ?>
                <h2>Experiência Profissional</h2>

                <ul class="lista-topicos">
                        <li>
                            <div class="dados">
                                <h4><?= $dados['exp-campo']['empresa'] ?></h4>
                                <p>Cargo: <?= $dados['exp-campo']['cargo'] ?></p>
                                <p>Início: <?= $dados['exp-campo']['inicio'] ?> Término: <?= $dados['exp-campo']['termino'] ?></p>
                                <p>Atividades desenvolvidas: <?= $dados['exp-campo']['atividades'] ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </section>

        <section class="grupo">
            <h2>Qualificações e Informações Adicionais</h2>
            
            <div class="dados">
                <h4><?= $dados['qualificacoes']; ?></h4>
            </div>
            
        </section>

</body>
    <script>
        window.print();
    </script>
    
</html>
