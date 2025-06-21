<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Galeria Virtual</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/principal.css">
    <link rel="shortcut icon" type="imagex/png" href="img/logo.png">
</head>

<body>
    <header id="home">
        <img src="img/logo.png" alt="Logo">
        <div>
            <h1>Galeria Virtual</h1>
            <h1>de Conceição Cahú</h1>
            <nav class="navbar" aria-label="Navegação principal">
                <a href="principal.php" class="active" aria-current="page">Galeria</a>
                <a href="about.html">Sobre</a>
            </nav>
        </div>
    </header>
    <div class="container">
        <section id="biografia">
            <h2>Biografia</h2>
            <nav class="abas" role="tablist" aria-label="Fases da biografia da artista">
                <button class="aba active" role="tab" aria-selected="true" aria-controls="bio-geral" id="tab-bio-geral"
                    tabindex="0">Biografia</button>
                <button class="aba" role="tab" aria-selected="false" aria-controls="phase1" id="tab-phase1"
                    tabindex="-1">Fase 1</button>
                <button class="aba" role="tab" aria-selected="false" aria-controls="phase2" id="tab-phase2"
                    tabindex="-1">Fase 2</button>
                <button class="aba" role="tab" aria-selected="false" aria-controls="phase3" id="tab-phase3"
                    tabindex="-1">Fase 3</button>
                <button class="aba" role="tab" aria-selected="false" aria-controls="phase4" id="tab-phase4"
                    tabindex="-1">Fase 4</button>
            </nav>
            <article id="bio-geral" class="bio-content">
                <p>xxxxxxxxxxxxxxxxxxxxxxxx</p>
            </article>
            <article id="phase1" class="bio-content" role="tabpanel" aria-labelledby="tab-phase1" hidden>
                <p>fase 1</p>
            </article>
            <article id="phase2" class="bio-content" role="tabpanel" aria-labelledby="tab-phase2" hidden>
                <p>fase 2</p>
            </article>
            <article id="phase3" class="bio-content" role="tabpanel" aria-labelledby="tab-phase3" hidden>
                <p>fase 3</p>
            </article>
            <article id="phase4" class="bio-content" role="tabpanel" aria-labelledby="tab-phase4" hidden>
                <p>fase 4</p>
            </article>
        </section>

        <?php
        include("conexao.php");
        ?>

        <section id="galeria">
            <h2>Exposição de Quadros</h2>
            <div class="galeria-grid" role="list">
                <?php
                $resultado = $conexao->query("SELECT * FROM imagens ORDER BY data_upload DESC");

                while ($img = $resultado->fetch_assoc()) {
                    $titulo = htmlspecialchars($img['titulo']);
                    $descricao = htmlspecialchars($img['descricao']);
                    $imagem = "uploads/" . $img['nome_arquivo'];
                    $ano = "Ano desconhecido"; 
                    $alt = "Quadro " . $titulo;

                    echo "<a href='feedback.php?nomequadro=" . urlencode($titulo) . "'>";
                    echo "<div class='card' role='listitem' tabindex='0' aria-label='Quadro $titulo'";
                    echo " data-title='$titulo'";
                    echo " data-year='$ano'";
                    echo " data-description='$descricao'";
                    echo " data-img='$imagem'>";
                    echo "<img src='$imagem' alt='$alt' class='paint-image' />";
                    echo "<div class='paint-info'>";
                    echo "<span class='paint-title'>$titulo</span>";
                    echo "<span class='paint-year'>$ano</span>";
                    echo "</div></div></a>";
                }
                ?>
            </div>
        </section>


        <section id="video">
            <p>colocar o vídeo</p>
        </section>
    </div>

    <div class="janela" role="dialog" aria-modal="true" aria-labelledby="janela-title" tabindex="-1" hidden>
        <div class="janela-content">
            <button class="janela-close" aria-label="Fechar">&times;</button>
            <img src="" alt="" class="janela-image" />
            <div class="janela-description" id="janela-title"></div>
        </div>
    </div>

    <footer>
        <div style="display: flex; flex-direction: row; justify-content: space-around;">
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#biografia">Biografia</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="#video">Vídeo</a></li>
            </ul>
            <img src="img/logo.png" alt="Logo" width="150px">
        </div>
        <p class="copyright">IFSertãoPE © 2025</p>
    </footer>

    <script src="script.js"></script>

</body>

</html>