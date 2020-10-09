<body style="background-color: #585858">
    <div class="container">
        <div class="card text-white bg-dark mt-2 mb-2">
            <div class="card-header text-center">
                <h1 class="card-title">Zumbiland</h1>
                <p class="card-text">Se você é um fã de filme de terror e ação e curte mortos-vivos, experimente um dos nossos jogos de zumbi gratuito!</p>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <?php
                $controle_ativo = 2;
                $controle_num_slide = 1;
                $result_carousel = "SELECT * FROM arquivo ORDER BY codigo ASC";
                $resultado_carousel = mysqli_query($conexao, $result_carousel);
                while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
                    if ($controle_ativo == 2) { ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php
                            $controle_ativo =1;
                            } else { ?>
                               <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $controle_num_slide; ?>"></li>
                               <?php
                                $controle_num_slide++;
                            }
                        }
                    ?>                               
            </ol>
            <div class="carousel-inner">
                <?php
                $controle_ativo = 2;
                $result_carousel = "SELECT * FROM arquivo ORDER BY codigo ASC";
                $resultado_carousel = mysqli_query($conexao, $result_carousel);
                while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
                    if ($controle_ativo == 2) { ?>
                        <div class="carousel-item active">
                            <img src="database/upload/<?php echo $row_carousel['arquivo']; ?>" class="d-block w-100" alt="Inicial">
                        </div><?php
                            $controle_ativo =1;
                            } else { ?>
                                <div class="carousel-item">
                                <img src="database/upload/<?php echo $row_carousel['arquivo']; ?>" class="d-block w-100" alt="Nivel">
                                </div><?php
                            }
                        }
                    ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row mt-2">

            <div class="col-sm-6 col-md-4 mb-2">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <h4 class="card-title">DESTAQUES:</h4>
                        <li class="card-text">Trilha sonora dinâmica, que responde as suas ações e narra os feitos do herói, com uma grande dose de bom-humor.</li>
                        <li class="card-text">Viva a era clássica dos jogos de plataforma de 8 e 16 bits.</li>
                        <li class="card-text">Gráficos e animações em pixel art com resolução nativa de 640x360, widescreen, com sprites, efeitos e elementos de jogo mais detalhados que os dos consoles de 8 e 16 bits.
                        </li>
                        <li class="card-text">Puzzles, segredos, piadas e easter eggs integrados à jogabilidade musical.</li>
                        <li class="card-text">Jogo que bateu o recorde em número de apoiadores no Catarse!
                        </li>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 mb-2">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <h4 class="card-title">REQUISITOS DE SISTEMA</h4>
                        <p class="card-text">MÍNIMOS:
                            Requer um processador e sistema operacional de 64 bits
                            SO: Windows 7 64Bit Service Pack 1
                            Processador: Intel Core 2 Duo 2.8GHz
                            Memória: 3 GB de RAM
                            Placa de vídeo: Nvidia GeForce GTS 450 2GB
                            DirectX: Versão 11
                            Armazenamento: 15 GB de espaço disponível
                            Placa de som: DirectX 11 sound device
                            Outras observações: Not supported on Intel integrated graphics</p>

                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 mb-2">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <h4 class="card-title">DESENVOLVEDORES:</h4>
                        <li class="card-text">Alcides Alves</li>
                        <li class="card-text">Arlley Cardoso</li>
                        <li class="card-text">Arthur de Amorim</li>
                        <li class="card-text">Diego de Lima.</li>
                        <li class="card-text">Lukas Osaki</li>
                        <li class="card-text">Vinícius Marques</li>
                        <li class="card-text">Rafael Lima</li>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <p class="card-text">
                            Faça o download agora mesmo e começe a jogar.
                        </p>
                        <a href="public/executavel.zip" download="Jogo-Executavel" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <p class="card-text">
                            Faça o download do codigo fonte e faça adaptações como queira.
                        </p>
                        <a href="public/jogo.zip" download="Jogo-Completo" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>