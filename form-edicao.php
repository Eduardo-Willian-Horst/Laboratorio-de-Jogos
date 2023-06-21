<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Laborat&oacuterio de Jogos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<body>
<?php

    $div_form = 'block';
    $div_agradecimento = 'none';

    $alerta = '';
    if(isset($_POST['doIt'])){
        $doIt = $_POST['doIt'];


    }else{
        $doIt = '';
    };




    if ($doIt == 1){

        $username = empty($_POST['usernameA']) ? '' :  $game = $_POST['usernameA'];
        $game = $_POST['slc-page'] == 0 ? $game = $_POST['slc-page'] :'' ;
        $desc = empty($_POST['txtD']) ? '' : $desc = $_POST['txtD'];
        $email = !filter_var($_POST['emailAlt'], FILTER_VALIDATE_EMAIL) ? '': $email = $_POST['emailAlt'];

    };
    if ($doIt == 2){
        $username = empty($_POST['username']) ? '' :  $game = $_POST['username'];
        $game = empty($_POST['game-name']) ? '' :  $game = $_POST['game-name'];
        $desc = empty($_POST['txtDesc']) ? '' : $desc = $_POST['txtDesc'];
        $email = !filter_var($_POST['emailDef'], FILTER_VALIDATE_EMAIL) ? '': $email = $_POST['emailDef'];
        
    };

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
         if (empty($game)) {
            $alerta = 'Faltou referenciar o jogo. Repita o processo!';
            $_SERVER['REQUEST_METHOD'] = 'GET';
         }else if(empty($desc)){
            $alerta = 'Faltou definir uma descri&ccedil&atildeo. Repita o processo';
            $_SERVER['REQUEST_METHOD'] = 'GET';
         }else if(empty($username)){
            $alerta = 'Nome é obrigat&oacuterio. Repita o processo';
            $_SERVER['REQUEST_METHOD'] = 'GET';
         }else if(empty($email)){
            $alerta = 'E-mail é obrigat&oacuterio. Repita o processo';
            $_SERVER['REQUEST_METHOD'] = 'GET';
         }else{//aqui t&aacute certo =)
            
            $div_form = 'none';
            $div_agradecimento = 'block';

            $to = 'edu.wilh@gmail.com';
            $subject = 'Proposta de edi&ccedil&atildeo';
            if ($doIt == 1){
                $type = 'Altera&ccedil&atildeo';

            }else{
                $type = 'Adi&ccedil&atildeo de p&aacutegina';
            };

            $body = "   Nome: $username \r\n
            E-mail: $email \r\n
            Tipo de mudan&ccedila: $type \r\n
            Jogo: $game \r\n
            Descri&ccedil&atildeo: $desc ";

            
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: '.$username.' <'.$email.'>';

            if(mail($to, $subject, $body, $header)){
                $div_form = 'none';
                $div_agradecimento = 'block';

            }else{
                $alerta = 'Falhou! Tente novamente.';
            };


         };
    };


?>
    <section>
        <article class="art-form">
                <a href="index.html" class="voltar">< P&aacutegina Inicial</a>
                <p style="color: red;"><?php echo $alerta ?></p>
                <div style="display: <?php echo $div_form; ?>;">
                    <h1>Formul&aacuterio de edi&ccedil&atildeo</h1>
                    <form action="form-edicao.php" method="post">
                        <label for="doIt">O que voc&ecirc deseja fazer?</label><br>
                        <select onchange="selecionaForm()" name="doIt" id="doIt">
                            <option value="" selected>Selecione uma op&ccedil&atildeo...</option>
                            <option value="1">Sujerir uma altera&ccedil&atildeo</option>
                            <option value="2" >Sujerir nova p&aacutegina</option>
                        </select>
                    <br>
                    <br>
                    <div id="div-pagina" id="formularioMudanca" name="formularioMudanca">
                            <label for="usernameA">Qual seu nome?</label><br>
                            <input style="width: 100%;" type="text" name="usernameA" id="usernameA"><br>
                            <label for="emailAlt">E-mail:</label><br>
                            <input style="width: 100%;" type="text" name="emailAlt" id="emailAlt"><br>
                            <br>
                            <label for="slc-page">Qual p&aacutegina gostaria de sugerir uma altera&ccedil&atildeo?</label><br>
                            <select name="slc-page" id="slc_page">
                                <option value="0" selected>Selecione uma p&aacutegina...</option>
                                <option value="A_LENDA_DO_HEROI">A lenda do Her&oacutei</option>
                                <option value="GOD_OF_WAR">God of War</option>
                                <option value="SAMOROST">Samorost</option>
                                <option value="SHIELDMAIDEN">Shieldmaiden</option>
                            </select><br>
                            <br>
                            <label for="txtAlt">Que altera&ccedil&atildeo deseja sujerir?</label><br>
                            <textarea name="txtD" id="txtD" cols="43" rows="10"
                                placeholder="Escreva aqui sua sujest&atildeo..."></textarea>
                            <br>
                            <br>
                            <input class="submit" value="Enviar" type="submit">
                    </div>
                    <div id="div-novo-jogo">
                            <label for="username">Qual seu nome?</label><br>
                            <input style="width: 100%;" type="text" name="username" id="username"><br>
                            <label for="emailDef">E-mail:</label><br>
                            <input style="width: 100%;" type="text" name="emailDef" id="emailDef"><br>
                            <br>
                            <label for="game-name">Sobre qual jogo seria a p&aacutegina?</label><br>
                            <input style="width: 100%;" type="text" name="game-name" id="game-name"><br>
                            <br>
                            <label for="txtNew">Me conven&ccedila a jogar esse jogo</label><br>
                            <textarea name="txtDesc" id="txtDesc" cols="43" rows="10"
                                placeholder="Me conte sobre esse jogo..."></textarea><br>
                            <br>
                            <input class="submit" value="Enviar" type="submit">
                    </div>
                                </form>
                </div>
                <div style="display: <?php echo $div_agradecimento; ?>;">
                    <h1>Formul&aacuterio Enviado.</h1>
                    <p>Obrigado pela colabora&ccedil&atildeo!</p>
                </div>
        </article>
    </section>


    <script src='main.js'></script>
</body>

</html>