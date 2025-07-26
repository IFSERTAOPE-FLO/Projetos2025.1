CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `nomequadro` varchar(100) DEFAULT NULL,
  `estrela` int(11) DEFAULT NULL CHECK (`estrela` between 1 and 5),
  `comentario` text DEFAULT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `data_avaliacao` timestamp NOT NULL DEFAULT current_timestamp()
) 

CREATE TABLE `feedback_rodape` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `comentario` text NOT NULL,
  `data_envio` datetime DEFAULT current_timestamp()
)

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `nome_arquivo` varchar(255) DEFAULT NULL,
  `data_upload` timestamp NOT NULL DEFAULT current_timestamp()
)
