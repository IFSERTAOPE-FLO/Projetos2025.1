-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jul-2025 às 19:13
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `galeria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `nome_arquivo` varchar(255) DEFAULT NULL,
  `data_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `titulo`, `descricao`, `nome_arquivo`, `data_upload`) VALUES
(4, 'Beira-rio Colonial', 'Aquarela delicada retratando uma cidade litorânea histórica, com igreja, casario colonial e barcos sobre águas calmas. A paisagem revela a harmonia entre arquitetura e natureza em um tempo mais sereno.', '688a4cf0d66b0-1.jpg', '2025-07-30 16:48:48'),
(5, 'Dupla Realidade', 'Com estilo cartunesco e traços expressivos, a obra retrata um jovem dividido entre dois computadores, talvez simbolizando a sobrecarga da era digital. A camisa com o nome “Angra” faz referência à banda brasileira de metal, trazendo identidade à cena.', '688a4d0c0cd97-2.jpg', '2025-07-30 16:49:16'),
(6, 'Vaso em Silêncio', 'Natureza-morta realista de um vaso de barro com planta sobre uma pedra. A composição simples e serena ressalta texturas e tons terrosos, evocando paz e contemplação.\r\n', '688a4d26f3ffe-3.jpg', '2025-07-30 16:49:43'),
(7, 'Presença Silenciosa', 'Um gato siamês de olhos azuis observa o espectador ao lado de um vaso de planta sobre uma mesa com toalha rendada. A cena transmite calma, mistério e elegância.', '688a4d479c8cb-4.jpg', '2025-07-30 16:50:15'),
(8, 'Geometria da Fé', 'Aquarela de uma igreja moderna com traços angulados e marcantes. A simetria e a paleta contrastante ressaltam o simbolismo da arquitetura religiosa contemporânea.\r\n', '688a4d5ce4182-5.jpg', '2025-07-30 16:50:36'),
(9, 'Alegria Junina', 'Retrato alegre e colorido de duas crianças fantasiadas para a tradicional festa de São João, com bandeirinhas ao fundo. A expressão dos personagens transmite a felicidade das celebrações nordestinas.\r\n', '688a4d74e9677-6.jpg', '2025-07-30 16:51:00'),
(10, 'Capela do Sertão', 'Cena rural e pacata de uma pequena igreja simples, cercada por terreno rústico e vegetação seca. A composição transmite fé e resistência em meio à paisagem árida.', '688a4d8c8728d-7.jpg', '2025-07-30 16:51:24'),
(11, 'Fé e Feijão', 'Desenho em nanquim que combina elementos do sagrado e do cotidiano: uma refeição típica nordestina em primeiro plano e uma igreja histórica ao fundo. Um convite à reflexão sobre o alimento do corpo e do espírito.\r\n', '688a4da393170-8.jpg', '2025-07-30 16:51:47'),
(12, 'Grupo Escolar Júlio de Mello', 'Aquarela colorida de um prédio escolar clássico, com portas e janelas verdes, árvores simétricas e céu nublado. A cena evoca memória, aprendizado e identidade local.\r\n', '688a4dc2dfb52-9.jpg', '2025-07-30 16:52:18'),
(13, 'Mosteiro entre Palmeiras', 'Vista aérea de um mosteiro colonial entre coqueiros à beira-mar. A arquitetura imponente e o telhado de barro contrastam com o verde exuberante da paisagem tropical.\r\n', '688a4dd90976f-10.jpg', '2025-07-30 16:52:41'),
(14, 'Farol na Penumbra', 'Cena noturna em aquarela com um farol solitário iluminando a escuridão à beira-mar. As luzes refletem na água e contrastam com o céu nebuloso, evocando segurança e isolamento.\r\n', '688a4f2bce5d0-11.jpg', '2025-07-30 16:58:19'),
(15, 'Interior Florido', 'Um vaso de flores coloridas sobre uma toalha rendada, em um ambiente interno sereno. A composição suave e acolhedora remete ao cotidiano poético das casas antigas.\r\n', '688a4f43c4272-12.jpg', '2025-07-30 16:58:43'),
(16, 'Caminho da Missa', 'Pessoas caminham em direção a uma pequena capela branca, rodeada por vegetação e céu limpo. A cena transmite fé, simplicidade e tradição no interior.', '688a4f61bf237-13.jpg', '2025-07-30 16:59:13'),
(17, 'Miragem Urbana', 'Vista ampla de uma cidade com prédios modernos em meio a vegetação e colinas. A sobreposição entre urbano e natural sugere uma reflexão sobre crescimento e permanência.\r\n', '688a4f804d080-14.jpg', '2025-07-30 16:59:44'),
(18, 'Fachada de Memórias', 'Aquarela de um prédio histórico com janelas de madeira, varanda gradeada e arbustos ao redor. A composição revela a beleza da arquitetura tradicional e sua preservação no tempo.', '688a4f9b98d4e-15.jpg', '2025-07-30 17:00:11'),
(19, 'Ruas de Infância', 'Casario colorido com crianças brincando nas ruas. O estilo singelo da pintura remete à nostalgia das pequenas cidades e à liberdade da infância.\r\n', '688a4fb2ab90d-16.jpg', '2025-07-30 17:00:34'),
(20, 'Retrato de Mulher Sertaneja', 'Mulher com expressão serena usando vestido azul e chapéu, diante de um fundo claro. A obra valoriza a beleza da figura feminina nordestina e sua postura resiliente.\r\n', '688a4fca44d4f-17.jpg', '2025-07-30 17:00:58'),
(21, 'Igreja da Colina', 'Igreja em estilo colonial no alto de uma elevação, cercada por árvores e céu limpo. A perspectiva vertical destaca o sagrado como algo elevado, quase inalcançável.\r\n', '688a4ff09f3cc-18.jpg', '2025-07-30 17:01:36'),
(22, 'Matriz de Floresta', 'Representação da tradicional Igreja Matriz de Floresta-PE, com riqueza nos detalhes arquitetônicos e tons quentes que remetem ao calor do sertão e da fé popular.\r\n', '688a50068958f-19.jpg', '2025-07-30 17:01:58'),
(23, 'Chalé Tropical', 'Casinha aconchegante com telhado de barro e plantas ao redor. A pintura transmite simplicidade e acolhimento, típica das moradias tropicais interioranas.', '688a501f509c6-20.jpg', '2025-07-30 17:02:23'),
(24, 'Estação das Cores', 'Estação ferroviária com céu vibrante ao entardecer. A paleta quente e as linhas arquitetônicas remetem ao passado do transporte interiorano e às memórias de partidas e chegadas.\r\n', '688a51811ed5d-21.jpg', '2025-07-30 17:08:17'),
(25, 'Fachada Sertaneja', 'Casario tradicional com tons terrosos e detalhes de plantas e cercas. A pintura valoriza o cotidiano das casas do sertão, marcadas pela resistência e beleza singela.\r\n', '688a51a247e43-22.jpg', '2025-07-30 17:08:50'),
(26, 'Sombra no Alpendre', 'Casa antiga com varanda e vegetação ao redor, pintada com um jogo de luz e sombra. O alpendre é o espaço de descanso e convivência no calor do interior nordestino.', '688a51d07e0d2-23.jpg', '2025-07-30 17:09:36'),
(27, 'Café da Manhã', 'Natureza-morta com xícara, jarro e frutas sobre a mesa. A composição suave e caseira resgata o ritual do café simples e afetivo das manhãs familiares.\r\n', '688a51ec6819f-24.png', '2025-07-30 17:10:04'),
(28, 'Maria Fumaça', 'Locomotiva em movimento atravessando a paisagem. A cena transmite nostalgia e dinamismo, retratando o papel histórico do trem no progresso das pequenas cidades.\r\n', '688a5209a66e9-25.jpg', '2025-07-30 17:10:33'),
(29, 'Casa Azul de Portas Abertas', 'Casinha azul vibrante com portas abertas e plantas à frente. A obra reflete acolhimento e a cultura de hospitalidade típica do interior nordestino.', '688a522c597fc-26.png', '2025-07-30 17:11:08'),
(30, 'Paz no Jardim', 'Ambiente florido com jardim bem cuidado e casa ao fundo. A imagem revela o zelo e o afeto colocados nos pequenos detalhes do lar.\r\n', '688a524519164-27.png', '2025-07-30 17:11:33'),
(31, 'Chalé no Horizonte', 'Casa simples sob céu azul, cercada por árvores e montes. A paisagem aberta transmite sensação de liberdade e tranquilidade.\r\n', '688a5260c731b-28.png', '2025-07-30 17:12:00'),
(32, 'Sol de Telha', 'Telhado vermelho sob o sol forte com árvores frondosas ao redor. O contraste entre o calor das telhas e a sombra natural representa a convivência entre o humano e a natureza no cotidiano do sertão.\r\n', '688a527927101-30.png', '2025-07-30 17:12:25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
