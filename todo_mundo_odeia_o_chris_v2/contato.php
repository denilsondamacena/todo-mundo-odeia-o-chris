<?php
/*
====================================================================
  DESENVOLVIDO POR: Denilson Silva Damacena
  ANO: 2026
--------------------------------------------------------------------
⠀⠀⠀⠀⠀⢸⠓⢄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢸⠀⠀⠑⢤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢸⡆⠀⠀⠀⠙⢤⡷⣤⣦⣀⠤⠖⠚⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀
⣠⡿⠢⢄⡀⠀⡇⠀⠀⠀⠀⠀⠉⠀⠀⠀⠀⠀⠸⠷⣶⠂⠀⠀⠀⣀⣀⠀⠀⠀
⢸⣃⠀⠀⠉⠳⣷⠞⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠉⠉⠉⠉⠉⠉⢉⡭⠋
⠀⠘⣆⠀⠀⠀⠁⠀⢀⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡴⠋⠀⠀
⠀⠀⠘⣦⠆⠀⠀⢀⡎⢹⡀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⡀⣠⠔⠋⠀⠀⠀⠀
⠀⠀⠀⡏⠀⠀⣆⠘⣄⠸⢧⠀⠀⠀⠀⢀⣠⠖⢻⠀⠀⠀⣿⢥⣄⣀⣀⣀⠀⠀
⠀⠀⢸⠁⠀⠀⡏⢣⣌⠙⠚⠀⠀⠠⣖⡛⠀⣠⠏⠀⠀⠀⠇⠀⠀⠀⠀⢙⣣⠄
⠀⠀⢸⡀⠀⠀⠳⡞⠈⢻⠶⠤⣄⣀⣈⣉⣉⣡⡔⠀⠀⢀⠀⠀⣀⡤⠖⠚⠀⠀
⠀⠀⡼⣇⠀⠀⠀⠙⠦⣞⡀⠀⢀⡏⠀⢸⣣⠞⠀⠀⠀⡼⠚⠋⠁⠀⠀⠀⠀⠀
⠀⢰⡇⠙⠀⠀⠀⠀⠀⠀⠉⠙⠚⠒⠚⠉⠀⠀⠀⠀⡼⠁⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⢧⡀⠀⢠⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⣞⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠙⣶⣶⣿⠢⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠉⠀⠀⠀⠙⢿⣳⠞⠳⡄⠀⠀⠀⢀⡞⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠀⠀⠹⣄⣀⡤⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
====================================================================
*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Todo Mundo Odeia o Chris - Contato</title>
    <link rel="shortcut icon" type="image/png" href="img/todo_mundo_odeia_o_chris_logo.ico" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <div class="site-container">

        <header class="hero-header">
            <a href="index.php">
                <img src="img/cabecalho.png" alt="cabeçalho: poster todo mundo odeia o chris" />
            </a>
        </header>

        <nav class="nav">
            <div class="nav-logo">
                <a href="index.php">
                    <img src="img/todo_mundo_odeia_o_chris_logo.png" alt="todo mundo odeia o chris logo" />
                </a>
            </div>
            <div class="nav-links">
                <a href="index.php" class="nav-btn">Início</a>
                <a href="personagens.php" class="nav-btn">Personagens</a>
                <a href="temporadas.php" class="nav-btn">Temporadas</a>
                <a href="contato.php" class="nav-btn active">Contato</a>
            </div>
        </nav>

        <div class="section-banner-panel">
            <img src="img/chris_telefone.png" style="height: 200px; width: auto;" alt="Chris no telefone" />
            <img src="img/contato.png" style="height: 60px; width: auto;" alt="palavra contato" />
        </div>

        <main class="glass-panel">

            <div class="coluna-mapa">
                <div class="mapa-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91359.18993336933!2d-73.95569523215687!3d40.701717485652516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25c75b6a8b821%3A0xf3bc87276691ebdc!2sBedford-Stuyvesant%2C%20Brooklyn%2C%20NY%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1712671848384!5m2!1spt-BR!2sbr"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="info-local">
                    <img src="img/local.png" height="30px" width="30px" alt="localização icone" />
                    <h3>EVERYBODY HATES CHRIS</h3>
                    <p>
                        <b>1985 Bedford-Stuyvesant</b> <i>(Bed-Stuy)</i>,<br />
                        Brooklyn, NY, EUA<br />
                        <b>TEL:</b> (88) 2005-2008<br />
                        <b>E-mail:</b> ocarinhaquemoralogoali@mail.com
                    </p>
                </div>
            </div>

            <div class="coluna-form">
                <h1>ENTRE EM CONTATO PARA TER DOIS EMPREGOS</h1>

                <form class="form-contato" name="meu_form" method="POST" action="">
                    <div class="campo-grupo">
                        <label for="nomeid">Nome</label>
                        <input type="text" id="nomeid" placeholder="Digite seu nome completo" required="required"
                            name="nome" />
                    </div>

                    <div class="campo-grupo">
                        <label for="foneid">Telefone</label>
                        <input type="tel" id="foneid" placeholder="(xx)xxxxx-xxxx" name="fone" />
                    </div>

                    <div class="campo-grupo">
                        <label for="emailid">E-mail</label>
                        <input type="email" id="emailid" placeholder="escreva@mail.com" name="email" />
                    </div>

                    <div class="campo-grupo">
                        <label for="mensagemid">Mensagem</label>
                        <textarea id="mensagemid" name="mensagem" placeholder="Mensagem" rows="4"></textarea>
                    </div>

                    <input class="btn-enviar" type="submit" value="Enviar" />
                </form>

                <div style="text-align: center; margin-top: 25px;">
                            <img src="img/rochelle_dirigindo.gif" class="gif-rochelle" height="215px" width="425px" alt="Rochelle dirigindo" />                    <div style="font-size: 11px; margin-top: 5px;"><b>Fonte:</b> <a
                            href="https://pettycentral.tumblr.com/post/169903121401" target="_blank"
                            style="color: var(--azul);">Tumblr</a></div>
                </div>
            </div>

        </main>

        <section class="creditos-panel">
            <div class="creditos-grid">
                <div class="membro-card">
                    <img class="imgan" src="img/perfil.png" height="80px" width="100px" alt="perfil icone" />
                    <h4>Antônio Flávio Alencar Arruda</h4>
                    <p>RGM: 31346511</p>
                </div>
                <div class="membro-card">
                    <img class="imgan" src="img/perfil.png" height="80px" width="100px" alt="perfil icone" />
                    <h4>Denilson Silva Damacena</h4>
                    <p>RGM: 31053050</p>
                </div>
                <div class="membro-card">
                    <img class="imgan" src="img/perfil.png" height="80px" width="100px" alt="perfil icone" />
                    <h4>Lucas Emanuel Américo da Silva</h4>
                    <p>RGM: 31704433</p>
                </div>
            </div>
        </section>

        <div class="control-footer">
            <a href="temporadas.php" class="btn-action">← página anterior</a>
            <a href="index.php" class="btn-action">Início</a>
        </div>

        <footer class="footer-moderno">
            <img src="img/rodape.png" class="footer-banner" alt="rodapé: familia de chris rock" />

            <div class="social-grid">
                <a href="https://www.facebook.com/chrissinceroh/" target="_blank" class="social-icon"><img
                        src="img/facebook.png" alt="facebook logo" /></a>
                <a href="https://twitter.com/chrissinceroh" target="_blank" class="social-icon"><img
                        src="img/twitter.png" alt="twitter logo" /></a>
                <a href="https://www.instagram.com/chrissinceroh/" target="_blank" class="social-icon"><img
                        src="img/instagram.png" alt="instagram logo" /></a>
                <a href="https://www.tiktok.com/@chrissinceroh" target="_blank" class="social-icon"><img
                        src="img/tiktok.png" alt="tiktok logo" /></a>
                <a href="https://www.youtube.com/@chrissinceroh" target="_blank" class="social-icon"><img
                        src="img/youtube.png" alt="youtube logo" /></a>
            </div>

            <button class="btn-glossario">
                <a href="glossario.php" target="_blank">Glossário</a>
            </button>
        </footer>

    </div>

</body>

</html>