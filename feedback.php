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
    <div class="mae">
        <div id="quadro-completo">
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

                        echo "<img id='imagem-obra' src='$imagem' alt='$titulo' width='400px' style='margin-top:25px; border-radius:10px'/>";
                        echo "<h3 style='font-weight:bold;'>$titulo</h3>";
                        echo "<p style='margin-top:-10px;'>$descricao</p>";
                        $stmtMedia = $conexao->prepare("SELECT AVG(estrela) AS media FROM avaliacoes WHERE nomequadro = ?");
                        $stmtMedia->bind_param("s", $nomequadro);
                        $stmtMedia->execute();
                        $resMedia = $stmtMedia->get_result();

                        if ($rowMedia = $resMedia->fetch_assoc()) {
                            $media = round($rowMedia['media'], 1);
                            $mediaInt = floor($media);
                            $estrelas = str_repeat("⭐", $mediaInt) . str_repeat("☆", 5 - $mediaInt);

                            echo "<p style='margin-top: 5px; font-weight:bold;'>Avaliação média: <span style='color:gold;'>$estrelas</span> ($media)</p>";
                        } else {
                            echo "<p>Avaliação média: N/A</p>";
                        }

                    }
                } else {
                    echo "<p>Obra não encontrada.</p>";
                }
            } else {
                echo "<p>Nenhuma obra foi especificada.</p>";
            }
            ?>
        </div>

        <div id="comentarios" style="overflow-y: auto; padding-right: 10px;">
            <h2>Comentários da Obra</h2>

            <?php
            if (isset($nomequadro)) {
                $stmtComentarios = $conexao->prepare("SELECT nome_usuario, estrela, comentario FROM avaliacoes WHERE nomequadro = ?");
                $stmtComentarios->bind_param("s", $nomequadro);
                $stmtComentarios->execute();
                $resComentarios = $stmtComentarios->get_result();

                if ($resComentarios->num_rows > 0) {
                    while ($coment = $resComentarios->fetch_assoc()) {
                        $nome = htmlspecialchars($coment['nome_usuario']);
                        $estrela = (int) $coment['estrela'];
                        $comentario = nl2br(htmlspecialchars($coment['comentario']));
                        $estrelasVisuais = str_repeat("⭐", $estrela) . str_repeat("☆", 5 - $estrela);

                        echo "<div style='border:1px solid #ddd; padding:15px; margin:15px 0; border-radius:10px; background:#f9f9f9'>";
                        echo "<strong>$nome</strong> – <span style='color:gold;'>$estrelasVisuais</span><br>";
                        echo "<p style='margin-top:5px;'>$comentario</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p style='text-align:center;'>Nenhum comentário ainda.</p>";
                }
            } else {
                echo "<p style='text-align:center;'>Obra não especificada na URL.</p>";
            }
            ?>
        </div>
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
                <textarea name="comentario" placeholder="Deixe um comentário..." required></textarea>
                <input type="text" name="nome" class="nome" placeholder="Seu nome" required>
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
        <div class="footer-content">
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#biografia">Biografia</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="#video">Vídeo</a></li>
            </ul>
            <img src="img/logo.png" alt="Logo" width="150px">
            <div id="form-footer">
                <h3>Deixe seu feedback</h3>
                <form class="footer-form" action="salvar_feedback.php" method="POST">

                    <input style="width: 60%;" type="text" name="comentario" class="form" placeholder="Seu comentário"
                        required>
                    <input style="width: 30%;" type="text" name="nome" class="form" placeholder="Seu nome" required>
                    <button class="btn" type="submit">Comentar</button>
                </form>

            </div>
        </div>
        <p class="copyright">IFSertãoPE © 2025</p>
    </footer>

    <script>
        window.addEventListener('load', function () {
            const imagem = document.getElementById('imagem-obra');
            const comentarios = document.getElementById('comentarios');

            if (imagem && comentarios) {
                const altura = imagem.clientHeight;
                comentarios.style.maxHeight = altura + "px";
            }
        });
    </script>

</body>

</html>