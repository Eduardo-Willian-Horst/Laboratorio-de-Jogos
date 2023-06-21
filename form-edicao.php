<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Laboratório de Jogos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<body>

    <section>
        <article class="art-form">
                <a href="index.html" class="voltar">◄ Página Inicial</a>
                <h1>Formulário de edição</h1>
                <label for="doIt">O que você deseja fazer?</label><br>
                <select onchange="selecionaForm()" name="doIt" id="doIt">
                    <option value="">Selecione uma opção...</option>
                    <option value="1">Sujerir uma alteração</option>
                    <option value="2">Sujerir nova página</option>
                </select>
                <br>
                <br>
                <div id="div-pagina" id="formularioMudanca" name="formularioMudanca">

                    <form action="formMudanca.php" method="post">
                        <label for="slc-page">Qual página gostaria de sugerir uma alteração?</label><br>
                        <select name="slc-page" id="slc_pagina">
                            <option value="0" selected>Selecione uma página...</option>
                            <option value="A_LENDA_DO_HEROI">A lenda do Herói</option>
                            <option value="GOD_OF_WAR">God of War</option>
                            <option value="SAMOROST">Samorost</option>
                        </select><br>
                        <br>
                        <label for="txtAlt">Que alteração deseja sujerir?</label><br>
                        <textarea onclick="" name="txtAlt" id="txtAlt" cols="43" rows="10"
                            placeholder="Escreva aqui sua sujestão..."></textarea>
                        <br>
                        <br>
                        <input class="submit" value="Enviar" type="submit">
                    </form>
                </div>
                <div id="div-novo-jogo">
                    <form action="formNewGame.php" method="post">
                        <label for="game-name">Sobre qual jogo seria a página?</label><br>
                        <input style="width: 100%;" type="text" name="game-name" id="game-name"><br>
                        <br>
                        <label for="txtNew">Me convença a jogar esse jogo</label><br>
                        <textarea name="txtNew" id="txtNew" cols="43" rows="10"
                            placeholder="Me conte sobre esse jogo..."></textarea><br>
                        <br>
                        <input class="submit" value="Enviar" type="submit">
                    </form>
                </div>
            </form>
        </article>
    </section>

    <script src='main.js'></script>
</body>

</html>