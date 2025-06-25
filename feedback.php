<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Página de Feedback</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/principal.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/feedback.css?<?php echo time(); ?>">
    <link rel="shortcut icon" type="imagex/png" href="img/logo.png">
</head>

<body>
    <header id="home">
        <img src="img/logo.png" alt="Logo">
        <div>
            <h1>Galeria Virtual</h1>
            <h1>de Conceição Cahú</h1>
            <nav class="navbar" aria-label="Navegação principal">
                <a href="principal.php">Galeria</a>
                <a href="about.html">Sobre</a>
                <a href="feedback.php" class="active" aria-current="page">Feedback</a>
            </nav>
        </div>
    </header>
    <!-- <div class="container"> -->
    <div id="quadro-completo" style="display: flex; flex-direction: column; align-items: center;">
        <?php
        include("conexao.php");

        if (isset($_GET['nomequadro'])) {
            $nomequadro = $_GET['nomequadro'];

            $stmt = $conexao->prepare("SELECT * FROM imagens WHERE titulo = ?");
            $stmt->bind_param("s", $nomequadro);
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($resultado && $resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $titulo = htmlspecialchars($row['titulo']);
                    $descricao = htmlspecialchars($row['descricao']);
                    $imagem = "uploads/" . $row['nome_arquivo'];

                    echo "<img src='$imagem' alt='$titulo' width='400px'/>";
                    echo "<h3>$titulo</h3>";
                    echo "<p>$descricao</p>";
                }
            } else {
                echo "<p>Obra não encontrada.</p>";
            }
        } else {
            echo "<p>Nenhuma obra foi especificada.</p>";
        }
        ?>
    </div>


    <div id="avaliacao">
        <section class="feedback">
            <div id="voltar">
                <h1>Deixe seu Feedback:</h1>
            </div>
            <!-- <div>
                    Nome da Obra Avaliada: <br>
                    <input type="text" name="nomequadro" value="<?php echo $_GET['nomequadro']; ?>" disabled>
                </div> -->
            <form action="salvar_avaliacao.php" method="POST">
                <div>
                    Nome da Obra Avaliada: <br>
                    <input type="text" name="nomequadro" value="<?php echo $_GET['nomequadro']; ?>" readonly>
                </div>
                <div class="avaliar">
                    <input type="radio" name="estrela" id="estrela5" value="5"><label for="estrela5"
                        class="estrela">&#9733;</label>
                    <input type="radio" name="estrela" id="estrela4" value="4"><label for="estrela4"
                        class="estrela">&#9733;</label>
                    <input type="radio" name="estrela" id="estrela3" value="3"><label for="estrela3"
                        class="estrela">&#9733;</label>
                    <input type="radio" name="estrela" id="estrela2" value="2"><label for="estrela2"
                        class="estrela">&#9733;</label>
                    <input type="radio" name="estrela" id="estrela1" value="1"><label for="estrela1"
                        class="estrela">&#9733;</label>
                </div>
                <textarea name="comentario" placeholder="Deixe um comentário..."></textarea>
                <input type="text" name="nome" class="nome" placeholder="Seu nome">
                <br>
                <button type="submit">Avaliar</button>
            </form>

        </section>
    </div>
    <!-- </div> -->
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

</body>

</html>