<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST['nome'] ?? 'Anônimo');
    $comentario = trim($_POST['comentario'] ?? '');

    if ($comentario) {
        $stmt = $conexao->prepare("INSERT INTO feedback_rodape (nome, comentario) VALUES (?, ?)");
        $stmt->bind_param("ss", $nome, $comentario);
        $stmt->execute();

        // header("Location: principal.php");
        echo "<script>
        alert('Obrigado pelo seu comentário!');
        location.href = document.referrer;
        </script>";

        exit;
    } else {
        echo "O comentário não pode estar vazio.";
    }
}
?>