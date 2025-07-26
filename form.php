<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['imagem'])) {
    $titulo = $_POST['titulo'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $imagem = $_FILES['imagem'];

    if ($imagem['error'] === 0) {
        $nome_arquivo = uniqid() . "-" . basename($imagem["name"]);
        $caminho_destino = "uploads/" . $nome_arquivo;

        if (move_uploaded_file($imagem["tmp_name"], $caminho_destino)) {
            $stmt = $conexao->prepare("INSERT INTO imagens (titulo, descricao, nome_arquivo) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $titulo, $descricao, $nome_arquivo);
            $stmt->execute();
            $mensagem = "✅ Imagem enviada com sucesso!";
        } else {
            $mensagem = "❌ Erro ao mover o arquivo.";
        }
    } else {
        $mensagem = "❌ Erro no envio do arquivo: " . $imagem['error'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Galeria Virtual</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/principal.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/formulario.css?<?php echo time(); ?>">
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
                <a href="form.php" class="active" aria-current="page">Formulário</a>
            </nav>
        </div>
    </header>
    <div class="container">
        <div id="formulario">

            <h2>Envie uma imagem <br>para a galeria</h2>
            <?php if (isset($mensagem))
                echo "<p>$mensagem</p>"; ?>

            <form action="form.php" method="POST" enctype="multipart/form-data">
                <label>Título: <input type="text" name="titulo" required></label><br><br>
                <label>Descrição: <textarea name="descricao"></textarea></label><br><br>
                <input type="file" name="imagem" accept="image/*" required><br><br>
                <button type="submit">Enviar</button>
            </form>
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

    <script src="script.js"></script>

</body>

</html>