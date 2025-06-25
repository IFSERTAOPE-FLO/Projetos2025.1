<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomequadro = $_POST['nomequadro'] ?? '';
    $estrela = $_POST['estrela'] ?? 0;
    $comentario = $_POST['comentario'] ?? '';
    $nome_usuario = $_POST['nome'] ?? 'Anônimo';

    if ($nomequadro && $estrela >= 1 && $estrela <= 5) {
        $stmt = $conexao->prepare("INSERT INTO avaliacoes (nomequadro, estrela, comentario, nome_usuario) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $nomequadro, $estrela, $comentario, $nome_usuario);
        $stmt->execute();

        echo "<script>
                alert('✅ Obrigado pela sua avaliação!');
                window.location.href = 'principal.php';
              </script>";
    } else {
        echo "<script>
                alert('❌ Avaliação inválida. Certifique-se de marcar as estrelas.');
                window.history.back();
              </script>";
    }
}
?>
