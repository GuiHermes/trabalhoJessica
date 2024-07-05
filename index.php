<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de jogos</title>
    <link rel="shortcut icon" href="assets/img/iconpag.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container-fluid bg-body-tertiary">
    <!--Inicio da navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="iconpag.png" alt="Logo da página" width="40">Paraguay Games
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#carouselExampleCaptions" aria-current="page"
                            href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jogos">Jogos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ação</a></li>
                            <li><a class="dropdown-item" href="/jogos/forza.html">Corrida</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Fps</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrihnho.php">Carrinho</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Ache seu Jogo" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    <!--Fim da navbar-->

    <!--inicio do carrosel de imagens-->
    <?php
    $items = array(['imagem'=>'forza.jpg','preco'=>'150'],
        ['imagem'=>'ww2.jpg','preco'=>'150'],
        ['imagem'=>'spiderman.jpg','preco'=>'99'],
        ['imagem'=>'gta6.png','preco'=>'660']);

        foreach ($items as $key){

    ?>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner" id="carouselAutoPlay">
            <div class="carousel-item active h-100">
                <img src="<?php echo $key['imagem'] ?>" class="d-block w-100 vh-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-3">Forza Horizon 5</h5>
                    <p class="fs-4">Em Forza Horizon 5, sua maior aventura te espera! Lidere impressionantes expedições
                        pelo mundo aberto vibrante e em constante evolução nas terras mexicanas.</p>
                    <div>
                        <a href="?adicionar=<?php echo $key ?>" class="btn btn-success btn-lg text-white">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-100">
                <img src="ww2.jpg" class="d-block w-100 vh-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-3">Call Of Duty:WW2</h5>
                    <p class="fs-4">O Call of Duty® regressa às raízes com o Call of Duty®: WWII, uma experiência
                        arrebatadora que redefine a II Guerra Mundial para uma nova geração de jogadores.</p>
                    <div>
                        <button type="button" class="btn btn-success btn-lg text-white">Adicionar ao Carrinho
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="spiderman.jpg" class="d-block w-100 vh-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-3">Spider-Man</h5>
                    <p class="fs-4"> Sinta todo o poder de um Spider-Man mais experiente com uma mecânica de combate
                        improvisada, habilidades acrobáticas dinâmicas, movimentos urbanos brandos e interações com o
                        ambiente.</p>
                    <div>
                        <button type="button" class="btn btn-success btn-lg text-white">Adicionar ao Carrinho
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="fortnite.jpg" class="d-block w-100 vh-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-3">Fortnite Passe de Batalha</h5>
                    <p class="fs-4">Fortnite Battle Royale é um modo de jogo do gênero battle royale para até 100
                        jogadores, jogando sozinho ou em grupos de dois a quatro amigos.</p>
                    <div>
                        <button type="button" class="btn btn-success btn-lg text-white">Adicionar ao Carrinho
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <?php
        }
    ?>    
    <!--Fim do carrosel de imagens-->

    <!-- cards dos jogos depois do carrosel de imagens-->
        <div id="jogos" class="row row-cols-1 row-cols-md-2 g-4 p-3">
            <div class="col">
                <div class="card text-bg-dark text-white">
                    <img src="forza.jpg" class="card-img-top" alt="forza">
                    <div class="card-body text-center">
                        <h5 class="card-title">Forza Horizon 5</h5>
                        <small class="text-secondary">Categoria: Corrida</small>
                        <p class="card-text">R$ 150,00  <small class="text-success">6x R$25,00</small></p>
                        
                        <a href="/jogos/forza.html" class="btn btn-success btn-sm">Adiciona</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark text-white">
                    <img src="gta6.png" class="card-img-top" alt="gta6">
                    <div class="card-body text-center">
                        <h5 class="card-title">Grand Theft Auto 6</h5>
                        <small class="text-secondary">Categoria: Ação</small>
                        <p class="card-text">R$ 660,00  <small class="text-success">6x R$110,00</small></p>
                        <a href="/jogos/gta6.html" class="btn btn-success btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark text-white">
                    <img src="wildlands.jpg" class="card-img-top" alt="wildlands">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tom Clancy's: Wildlands</h5>
                        <small class="text-secondary">Categoria: Ação</small>
                        <p class="card-text">R$ 75,00  <small class="text-success">6x R$12,50</small></p>
                        <a href="#" class="btn btn-success btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark text-white">
                    <img src="daysgone.jpg" class="card-img-top" alt="daysgone">
                    <div class="card-body text-center">
                        <h5 class="card-title">Days Gone</h5>
                        <small class="text-secondary">Categoria: Ação</small>
                        <p class="card-text">R$ 100,00  <small class="text-success">6x R$16,66</small></p>
                        <a href="#" class="btn btn-success btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark text-white">
                    <img src="gta5.jpg" class="card-img-top" alt="gta5">
                    <div class="card-body text-center">
                        <h5 class="card-title">Grand Theft Auto 5</h5>
                        <small class="text-secondary">Categoria: Ação</small>
                        <p class="card-text">R$ 170,00  <small class="text-success">6x R$28,33</small></p>
                        <a href="#" class="btn btn-success btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark text-white">
                    <img src="ww2.jpg" class="card-img-top" alt="codww2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Call Of Duty:WW2</h5>
                        <small class="text-secondary">Categoria: Ação, Fps</small>
                        <p class="card-text">R$ 150,00  <small class="text-success">6x R$25,00</small></p>
                        <a href="#" class="btn btn-success btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark text-white">
                    <img src="spiderman.jpg" class="card-img-top" alt="spiderman">
                    <div class="card-body text-center">
                        <h5 class="card-title">Spider-Man</h5>
                        <small class="text-secondary">Categoria: Ação</small>
                        <p class="card-text">R$ 99,00  <small class="text-success">3x R$33,00</small></p>
                        <a href="#" class="btn btn-success btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark text-white">
                    <img src="fortnite.jpg" class="card-img-top" alt="fortnite">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fortnite Battle Royale</h5>
                        <small class="text-secondary">Categoria: Ação</small>
                        <p class="card-text">R$ 25,00  <small class="text-success">no Pix</small></p>
                        <a href="#" class="btn btn-success btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- fim dos cards dos jogos depois do carrosel de imagens-->

    <footer class="text-dark"><p>Todos os Direitos &copy; reservados a Guilherme H.</p></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        
</body>

</html>