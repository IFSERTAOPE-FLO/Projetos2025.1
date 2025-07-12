<?php
include("conexao.php");

$queryMedia = "SELECT nomequadro, ROUND(AVG(estrela), 2) AS media, COUNT(*) AS total
          FROM avaliacoes
          GROUP BY nomequadro
          ORDER BY media DESC";
$resultadoMedia = $conexao->query($queryMedia);

$queryDestaques = "SELECT nomequadro, ROUND(AVG(estrela),2) AS media, COUNT(*) AS total
                   FROM avaliacoes
                   GROUP BY nomequadro
                   ORDER BY media DESC";
$resultadoDestaques = $conexao->query($queryDestaques);

$melhor = $resultadoDestaques->fetch_assoc();
$resultadoDestaques->data_seek($resultadoDestaques->num_rows - 1);
$pior = $resultadoDestaques->fetch_assoc();

function buscarImagem($conexao, $nomequadro)
{
    $stmt = $conexao->prepare("SELECT nome_arquivo FROM imagens WHERE titulo = ?");
    $stmt->bind_param("s", $nomequadro);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($row = $res->fetch_assoc()) {
        return "uploads/" . $row['nome_arquivo'];
    }
    return "img/placeholder.png";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Galeria Virtual</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/relatorio.css">
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
                <a href="relatorio.php" class="active" aria-current="page">Relatório</a>
            </nav>
        </div>
    </header>
    <div class="container">
        <section>
            <h2>Média das Avaliações de Cada Obra</h2>
            <?php if ($resultadoMedia->num_rows > 0): ?>
                <table>
                    <tr>
                        <th>Obra</th>
                        <th>Média de Avaliação</th>
                        <th>Total de Avaliações</th>
                    </tr>
                    <?php while ($row = $resultadoMedia->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['nomequadro']) ?></td>
                            <td><?= $row['media'] ?></td>
                            <td><?= $row['total'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php else: ?>
                <p style="text-align: center;">Nenhuma avaliação registrada ainda.</p>
            <?php endif; ?>
        </section>
        <section class="destaques">
            <h2>Obra com Melhor Avaliação</h2>
            <div class="obras-destaques">
                <img width="300px" src="<?= buscarImagem($conexao, $melhor['nomequadro']) ?>"
                    alt="<?= htmlspecialchars($melhor['nomequadro']) ?>">
                <div>
                    <p><strong>Obra:</strong> <?= htmlspecialchars($melhor['nomequadro']) ?></p>
                    <p><strong>Média:</strong> <?= $melhor['media'] ?> estrelas</p>
                    <p><strong>Avaliações:</strong> <?= $melhor['total'] ?></p>
                </div>
            </div>
        </section>
        <section class="destaques">
            <h2>Obra com Pior Avaliação</h2>
            <div class="obras-destaques">
                <img width="300px" src="<?= buscarImagem($conexao, $pior['nomequadro']) ?>"
                    alt="<?= htmlspecialchars($pior['nomequadro']) ?>">
                <div>
                    <p><strong>Obra:</strong> <?= htmlspecialchars($pior['nomequadro']) ?></p>
                    <p><strong>Média:</strong> <?= $pior['media'] ?> estrelas</p>
                    <p><strong>Avaliações:</strong> <?= $pior['total'] ?></p>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div style="display: flex; flex-direction: row; justify-content: space-around;">
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#carousel">Carrossel</a></li>
                <li><a href="#creators">Criadoras</a></li>
            </ul>
            <img src="img/logo.png" alt="Logo" width="150px">
        </div>
        <p class="copyright">IFSertãoPE © 2025</p>
    </footer>

</body>

</html>