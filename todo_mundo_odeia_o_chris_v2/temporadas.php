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
    <title>Todo Mundo Odeia o Chris - Temporadas</title>
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
                <a href="temporadas.php" class="nav-btn active">Temporadas</a>
                <a href="contato.php" class="nav-btn">Contato</a>
            </div>
        </nav>

        <div class="section-banner-panel">
            <img src="img/temporadas.png" style="height: 120px; width: auto;" alt="palavra temporada" />
            <img src="img/foto_chris.png" style="height: 200px; width: auto;" alt="Chris" />
        </div>

        <div class="grid-temporadas">

            <section class="card-temporada">
                <div class="conteudo-poster">
                    <div class="poster-img">
                        <img src="img/temporada1.png" alt="poster temporada 1" />
                        <span><b>Imagem: </b><a
                                href="https://www.amazon.com/Everybody-Hates-Chris-1st-Season/dp/B000HA4WOS"
                                target="_blank">Amazon</a></span>
                    </div>
                    <div class="txt-info">
                        <h3>Temporada 1</h3>
                        <p>Chris (Tyler James Williams) começa a estudar em uma escola predominantemente branca para
                            agradar sua mãe, Rochelle (Tichina Arnold), que deseja que o filho tenha uma educação
                            melhor. Mas ser o único aluno negro do colégio não é nada fácil. Pelo menos, ele pode contar
                            com a companhia de Greg (Vincent Martella), um menino que vira seu melhor amigo.</p>
                        <ul>
                            <li>22 episódios</li>
                            <li>Canal original: UPN</li>
                            <li>Exibida desde: 22 de setembro de 2005</li>
                        </ul>
                        <span><b>Fonte: </b><a href="https://www.adorocinema.com/series/serie-458/temporada-1086/"
                                target="_blank">AdoroCinema</a></span>
                    </div>
                </div>
                <div class="streaming-panel">
                    <div class="texto-disponivel">Disponível:</div>
                    <div class="logos-container">
                        <a href="https://globoplay.globo.com/todo-mundo-odeia-o-chris/t/tDyxRKNSFp/" target="_blank"
                            class="logo-streaming"><img src="img/globoplay_logo.png" alt="GloboPlay logo" /></a>
                        <a href="https://www.primevideo.com/detail/0MNPC817E95KMLGF4G38DXN1KB/ref=atv_dp_season_select_s1"
                            target="_blank" class="logo-streaming"><img src="img/primevideo_logo.png"
                                alt="Prime Video logo" /></a>
                        <a href="https://www.paramountplus.com/br/shows/everybody_hates_chris/" target="_blank"
                            class="logo-streaming"><img src="img/paramount_logo.png" alt="Paramount logo" /></a>
                    </div>
                </div>
            </section>

            <section class="card-temporada">
                <div class="conteudo-poster">
                    <div class="poster-img">
                        <img src="img/temporada2.png" alt="poster temporada 2" />
                        <span><b>Imagem: </b><a
                                href="https://www.amazon.com.br/Everybody-Hates-Chris-Season-2/dp/B000SO7PCO"
                                target="_blank">Amazon</a></span>
                    </div>
                    <div class="txt-info">
                        <h3>Temporada 2</h3>
                        <p>Quando Keisha (Aree Davis) se muda do bairro, outra garota passa a chamar a atenção de Chris
                            (Tyler James Williams), que decide convidá-la para um encontro. Julius (Terry Crews)
                            descobre que sofre de pressão alta e tenta reduzir a quantidade de estresse em sua vida.
                            Enquanto isso, Chris começa sua campanha para concorrer à presidência da oitava série contra
                            Caruso (Travis T. Flory).</p>
                        <ul>
                            <li>22 episódios</li>
                            <li>Canal original: UPN</li>
                            <li>Exibida desde: 1 de outubro de 2006</li>
                        </ul>
                        <span><b>Fonte: </b><a href="https://www.adorocinema.com/series/serie-458/temporada-4950/"
                                target="_blank">AdoroCinema</a></span>
                    </div>
                </div>
                <div class="streaming-panel">
                    <div class="texto-disponivel">Disponível:</div>
                    <div class="logos-container">
                        <a href="https://globoplay.globo.com/todo-mundo-odeia-o-chris/t/tDyxRKNSFp/temporadas/2/"
                            target="_blank" class="logo-streaming"><img src="img/globoplay_logo.png"
                                alt="GloboPlay logo" /></a>
                        <a href="https://www.primevideo.com/detail/0SGKIQTPQ3KMS0E2WXWZEB1F7H/ref=atv_dp_season_select_s2"
                            target="_blank" class="logo-streaming"><img src="img/primevideo_logo.png"
                                alt="Prime Video logo" /></a>
                        <a href="https://www.paramountplus.com/br/shows/everybody_hates_chris/" target="_blank"
                            class="logo-streaming"><img src="img/paramount_logo.png" alt="Paramount logo" /></a>
                    </div>
                </div>
            </section>

            <section class="card-temporada">
                <div class="conteudo-poster">
                    <div class="poster-img">
                        <img src="img/temporada3.png" alt="poster temporada 3" />
                        <span><b>Imagem: </b><a
                                href="https://www.amazon.com.br/Everybody-Hates-Chris-Season-3/dp/B0019F02WG"
                                target="_blank">Amazon</a></span>
                    </div>
                    <div class="txt-info">
                        <h3>Temporada 3</h3>
                        <p>Julius (Terry Crews) aceita um trabalho extra durante o período que deveria estar de férias.
                            Rochelle (Tichina Arnold) decide fazer campanha para Lamar Johnson, um candidato a vereador
                            muito espertalhão. Chris (Tyler James Williams) se anima com a notícia de que outro garoto
                            negro vai estudar na escola, mas Greg (Vincent Martella) fica com ciúmes.</p>
                        <ul>
                            <li>22 episódios</li>
                            <li>Canal original: UPN</li>
                            <li>Exibida desde: 1 de outubro de 2007</li>
                        </ul>
                        <span><b>Fonte: </b><a href="https://www.adorocinema.com/series/serie-458/temporada-5659/"
                                target="_blank">AdoroCinema</a></span>
                    </div>
                </div>
                <div class="streaming-panel">
                    <div class="texto-disponivel">Disponível:</div>
                    <div class="logos-container">
                        <a href="https://globoplay.globo.com/todo-mundo-odeia-o-chris/t/tDyxRKNSFp/temporadas/3/"
                            target="_blank" class="logo-streaming"><img src="img/globoplay_logo.png"
                                alt="GloboPlay logo" /></a>
                        <a href="https://www.primevideo.com/detail/0HG5F7AFX5RKU55CFHN025V5CF/ref=atv_dp_season_select_s3"
                            target="_blank" class="logo-streaming"><img src="img/primevideo_logo.png"
                                alt="Prime Video logo" /></a>
                        <a href="https://www.paramountplus.com/br/shows/everybody_hates_chris/" target="_blank"
                            class="logo-streaming"><img src="img/paramount_logo.png" alt="Paramount logo" /></a>
                    </div>
                </div>
            </section>

            <section class="card-temporada">
                <div class="conteudo-poster">
                    <div class="poster-img">
                        <img src="img/temporada4.png" alt="poster temporada 4" />
                        <span><b>Imagem: </b><a
                                href="https://www.amazon.com/Everybody-Hates-Chris-Fourth-Season/dp/B01M9IEHGY"
                                target="_blank">Amazon</a></span>
                    </div>
                    <div class="txt-info">
                        <h3>Temporada 4</h3>
                        <p>Já no ensino médio, Chris (Tyler James Williams) decide dirigir um carro, mas,
                            acidentalmente, acaba atropelando Greg (Vincent Martella), que fica com a perna quebrada e
                            vai parar no hospital. Tonya (Imani Hakim) começa a trabalhar em um salão de beleza, mas sua
                            sinceridade com as clientes acaba colocando ela em maus lençóis. Rochelle (Tichina Arnold)
                            tenta ajudar Peaches (Tisha Campbell-Martin) a mudar de vida.</p>
                        <ul>
                            <li>22 episódios</li>
                            <li>Canal original: UPN</li>
                            <li>Exibida desde: 3 de outubro de 2008</li>
                        </ul>
                        <span><b>Fonte: </b><a href="https://www.adorocinema.com/series/serie-458/temporada-7323/"
                                target="_blank">AdoroCinema</a></span>
                    </div>
                </div>
                <div class="streaming-panel">
                    <div class="texto-disponivel">Disponível:</div>
                    <div class="logos-container">
                        <a href="https://globoplay.globo.com/todo-mundo-odeia-o-chris/t/tDyxRKNSFp/temporadas/4/"
                            target="_blank" class="logo-streaming"><img src="img/globoplay_logo.png"
                                alt="GloboPlay logo" /></a>
                        <a href="https://www.primevideo.com/detail/0TRGI0JJI4SVUVKJQCGV4RY1HG/ref=atv_dp_season_select_s4"
                            target="_blank" class="logo-streaming"><img src="img/primevideo_logo.png"
                                alt="Prime Video logo" /></a>
                        <a href="https://www.paramountplus.com/br/shows/everybody_hates_chris/" target="_blank"
                            class="logo-streaming"><img src="img/paramount_logo.png" alt="Paramount logo" /></a>
                    </div>
                </div>
            </section>

        </div>

        <div class="control-footer">
            <a href="personagens.php" class="btn-action">&larr; página anterior</a>
            <a href="contato.php" class="btn-action">próxima página &rarr;</a>
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