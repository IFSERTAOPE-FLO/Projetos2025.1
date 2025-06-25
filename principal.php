<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Galeria Virtual</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/principal.css?<?php echo time(); ?>" >
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
            <article id="bio-geral" class="bio-content" >
                <p>No ano de 1944, a pequena cidade de Floresta do Navio, no interior de Pernambuco, serviu de berço
                    para esta que se tornou uma ilustre representante dos artistas nordestinos.</p>
                <p>Maria da Conceição de Souza Cahú deixou Floresta ainda jovem, foi para Recife estudar Belas Artes e,
                    aos 25 anos, chegou a São Paulo.</p>
                <p>Caricaturista, cartunista, retratista, quadrinista e ilustradora. Estas diferentes técnicas marcaram
                    seu trabalho na capital paulista nos últimos 20 anos.
                    Combatente e sensível, Cahú emprestou sua arte à luta política, ao movimento feminista, às questões
                    sociais.</p>
                <p> As imagens reproduzidas neste catálogo, selecionadas entre centenas de originais, foram organizadas
                    respeitando a cronologia, em quatro fases:</p>
                <ul>
                    <li>Seus primeiros trabalhos em Floresta e Recife;</li>
                    <li>A década de 70, marcada predominantemente por suas charges e caricaturas sobre o ambiente
                        político;</li>
                    <li>A década de 80, quando retrata a elite empresarial brasileira nas várias publicações da Gazeta
                        Mercantil;</li>
                    <li>Os anos 90, registro de sua maturidade e ousadia
                        para enfrentar o óleo sobre tela.</li>
                </ul>
            </article>
            <article id="phase1" class="bio-content" role="tabpanel" aria-labelledby="tab-phase1" hidden>
                <h4>Início</h4>
                <p>A aventura parece ser uma marca fatal na vida de Conceição Cahú.
                    Ainda muito jovem, deixa a paisagem agreste do sertão pernambucano,
                    e foi bater no mar, no Recife, em busca de horizontes mais largos 
                    para sua arte. Conheceu o êxito, mas não o conformismo. em 1973, 
                    estava em São Paulo, com uma nova cabeça, mas com a mesma 
                    inconfundível qualidade da sua arte, que se manisfesta em
                    vários jornais, revistas, agências de publicidade, exposições,
                    nas suas mlitâncias ou em charges e ilustrações primorosas no 
                    jornal Gazeta Mercantil.</p>
            </article>
            <article id="phase2" class="bio-content" role="tabpanel" aria-labelledby="tab-phase2" hidden>
                <h4>Anos 70</h4>
                <p>Com traço limpo, técnica apurada e aguda sensibilidade, ela mostra um pouco do seu esforço para
                    colocar a sua arte a serviço das comunidades com que passou a conviver e a trabalhar desde que se
                    mudou para a plúmbea paisagem paulistana. Deixou de lado empregos bem-remunerados e caiu na vida.
                    Foi à luta, descobrindo, desta vez, que não estava só no seu sofrimento. Havia toda uma massa
                    precisando, tanto quanto ela, de solidariedade.</p>
                <p>Sentiu, com emoção confessada, que sua atte era uma arma poderosa e poderia ajudar muito a causa da
                    sua gente. Ligou-se a sindicatos, a partidos políticos, a associações comunitárias, ao movimento de
                    libertação das mulheres e, a partir de seu desempenho honesto e direito começou a aprender com o
                    povo novas formas de expressão. Encheu folhetos, panfletos e cartazes defendendo direitos populares,
                    que se misturam com naturalidade com os sonhos, fantasias e estandartes das principais organizações
                    carnavalescas de São Paulo.</p>
            </article>
            <article id="phase3" class="bio-content" role="tabpanel" aria-labelledby="tab-phase3" hidden>
                <h4>Anos 80</h4>
                <p>Nesta fase. Cahú já acumulava grande experiência com suas interferências na vida política e social do
                    país.</p>
                <p>Começa, então, a permear as informações económicas e a elite empresarial brasileira com imaginação,
                    colorido e técnica.</p>
                <p>A primeira ilustração colorida, feita para o Relatório Turista Sofisticado, da Gazeta Mercantil,
                    abriu
                    mais um espaço para a continuidade de seu trabalho, e assim tem sido nos últimos 15 anos.</p>
                <p>Praticamente nenhum empresário escapou das mãos hábeis e talentosas de Maria da Conceição, a Cahú.
                </p>
            </article>
            <article id="phase3" class="bio-content" role="tabpanel" aria-labelledby="tab-phase3" hidden>
                <h4>Anos 80</h4>
                <p>Nesta fase. Cahú já acumulava grande experiência com suas interferências na vida política e social do
                    país.</p>
                <p>Começa, então, a permear as informações económicas e a elite empresarial brasileira com imaginação,
                    colorido e técnica.</p>
                <p>A primeira ilustração colorida, feita para o Relatório Turista Sofisticado, da Gazeta Mercantil,
                    abriu
                    mais um espaço para a continuidade de seu trabalho, e assim tem sido nos últimos 15 anos.</p>
                <p>Praticamente nenhum empresário escapou das mãos hábeis e talentosas de Maria da Conceição, a Cahú.
                </p>
            </article>
            <article id="phase4" class="bio-content" role="tabpanel" aria-labelledby="tab-phase4" hidden>
                <h4>Anos 90</h4>
                <p>O que se tem a destacar é o mistério que se arremessa de cada uma destas pinturas e das suas geometrias simples. São os milagres da arte. No exemplo de Conceição Cahú, “consistência” liga-se à consistência artesanal, que é toda a sua verdade, o ponto de união entre sensível e inteligível. </p>
                <p>Começa, então, a permear as informações económicas e a elite empresarial brasileira com imaginação,
                    colorido e técnica.</p>
                <p>Os quadros de Conceição Cahú seriam reconhecidos como retratos da … humana se estivessem em Manaus ou Nova York. Com essa inexplicável capacidade que têm os artistas de serem intemporais no seu próprio tempo e serem do mundo nas suas aldeias. Conceição Cahú junta índios e civilização, mulheres e paisagens, Xingú e Capibaribe, como juntaria idealmente Manhattans e Rasos da Catarina, Volgas e seus Riachos do Navio.</p>
                <p>Garibaldi Otávio, jornalista, Editor-sênior da Gazeta Mercantil de São Paulo</p>
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