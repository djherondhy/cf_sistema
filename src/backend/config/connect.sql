-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2023 às 00:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `connect`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`id_cliente`, `id_produto`, `quantidade`) VALUES
(9, 2, 1),
(9, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nome_completo` varchar(200) NOT NULL,
  `cep` varchar(200) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `logradouro` varchar(200) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `id_cliente`, `nome_completo`, `cep`, `cidade`, `estado`, `logradouro`, `bairro`, `numero`, `complemento`) VALUES
(1, 0, 'Djherondhy', '0', '', '', '', '', '0', ''),
(2, 10, 'DJHERONDHY FELIPE BEZERRA PINHEIRO', '69830000', 'LÃ¡brea', 'AM', 'Luis FalcÃ£o', 'da Fonte', '1517', 'Casa'),
(3, 2, 'DjhÃ©rondhy Felipe Bezerra', '69104570', 'Itacoatiara', 'AM', 'Rua Nossa Senhora do RosÃ¡rio', 'Jardim Lorena', '3164', 'Apto 1'),
(14, 2, 'DjhÃ©rondhy Felipe Bezerra Pinheiro', '69830000', 'LÃ¡brea', 'AM', 'Rua LuÃ­s FalcÃ£o', 'da Fonte', '212', 'Casa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `codigo` int(11) NOT NULL,
  `nome_fantasia` varchar(100) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id_medicamento` int(11) NOT NULL,
  `nome_comercial` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `secao` varchar(100) NOT NULL,
  `validade` varchar(100) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `onCatalogo` int(11) NOT NULL,
  `codFornecedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `medicamentos`
--

INSERT INTO `medicamentos` (`id_medicamento`, `nome_comercial`, `descricao`, `categoria`, `secao`, `validade`, `imagem`, `quantidade`, `preco`, `onCatalogo`, `codFornecedor`) VALUES
(2, 'Advil Extra Alivio Ibuprofeno 400mg - 20 cÃ¡psulas', 'Advil estÃ¡ indicado no alÃ­vio temporÃ¡rio da febre e de dores de leve a moderada intensidade como: dor de cabeÃ§a; dor nas costas; dor muscular; enxaqueca; cÃ³lica menstrual; de gripes e resfriados ', 'Anti-inflamatÃ³rios', 'NÃ£o Cadastrada', '2025-11-12', 'Advil Extra Alivio Ibuprofeno 400mg 20 cÃ¡psulas_2023.06.15-23.50.39.jpg', 40, '40.16', 1, 0),
(3, 'Benegrip Multi 30mg - 20 comprimidos', 'Benegrip Ã© destinado para alÃ­vio dos sintomas decorrentes das gripes e resfriados, como dores de cabeÃ§a, febre e processos alÃ©rgicos. Ã‰ formado por uma associaÃ§Ã£o dos seguintes componentes: dip', 'AnalgÃ©sicos', 'NÃ£o Cadastrada', '2027-11-25', '_2023.06.16-00.05.55jpeg', 0, '25.29', 1, 0),
(4, 'Resfenol Paracetamol 400mg - 20 cÃ¡psulas', 'O Resfenol age contra os sintomas de gripes e resfriados, como: congestÃ£o nasal, coriza, febre, cefaleia, dores musculares e demais sintomas presentes nos estados gripais.', 'AnalgÃ©sicos', 'NÃ£o Cadastrada', '2025-11-21', '_2023.06.16-00.10.20.png', 0, '19.29', 1, 0),
(5, 'Fralda Huggies Supreme Care Unissex XXG - 58 unidades', 'Fralda descartÃ¡vel para bebÃªs, tamanho XXG, Com exclusiva tecnologia Xtra-Flex, Distribui o xixi mais rÃ¡pido e uniformemente pela fralda, Oferece flexibilidade e conforto para o bebÃª, Produzida co', 'Outros', 'NÃ£o Cadastrada', '2025-12-15', '_2023.06.16-00.12.36.jpg', 0, '69.90', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `notificacao`
--

CREATE TABLE `notificacao` (
  `id_cliente` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `notificacao`
--

INSERT INTO `notificacao` (`id_cliente`, `id_pedido`, `mensagem`) VALUES
(2, 7, 'O Pedido #7 teve status alterado para <b>Confirmado</b>'),
(10, 9, 'O Pedido #9 teve status alterado para <b>Confirmado</b>'),
(2, 7, 'O <b>Pedido #7</b> foi colocado na list de Entrega'),
(10, 9, 'O <b>Pedido #9</b> foi colocado na list de Entrega'),
(2, 10, 'O Pedido #10 teve status alterado para <b>Confirmado</b>'),
(2, 10, 'O <b>Pedido #10</b> foi colocado na lista de Entrega.'),
(2, 11, 'O Pedido #11 teve status alterado para <b>Confirmado</b>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `forma_pagamento` varchar(50) NOT NULL,
  `cod_endereco` int(11) NOT NULL,
  `forma_recebimento` varchar(50) NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `data`, `hora`, `status`, `id_cliente`, `forma_pagamento`, `cod_endereco`, `forma_recebimento`, `subtotal`) VALUES
(7, '2023-06-17', '17:05', 'Apto para Entrega', 2, 'Pix', 14, 'Entrega', 40.16),
(8, '2023-06-17', '03:06', 'Entregue', 2, 'Dinheiro', 0, 'Retirada', 0),
(9, '2023-06-17', '23:58', 'Apto para Entrega', 10, 'Pix', 2, 'Entrega', 38.58),
(10, '2023-06-19', '14:28', 'Apto para Entrega', 2, 'Pix', 3, 'Entrega', 65.45),
(11, '2023-06-19', '14:37', 'Entregue', 2, 'Pix', 14, 'Retirada', 65.45);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_item`
--

CREATE TABLE `pedido_item` (
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedido_item`
--

INSERT INTO `pedido_item` (`id_pedido`, `id_produto`, `quantidade`) VALUES
(7, 2, 1),
(9, 4, 2),
(10, 2, 1),
(10, 3, 1),
(11, 2, 1),
(11, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `secao`
--

CREATE TABLE `secao` (
  `id_secao` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `localizacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `secao`
--

INSERT INTO `secao` (`id_secao`, `codigo`, `localizacao`) VALUES
(11, 'CD-104', 'Prateleira X'),
(15, 'CD-768', 'Prateleira 25, Coluna 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL,
  `perfil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `nome_completo`, `username`, `email`, `password`, `tipo`, `perfil`) VALUES
(2, 'DjhÃ©rondhy Felipe Bezerra Pinheiro', 'Djherondhy', 'djherondhy@gmail.com', '0aebe5a75ff188d265663102efae6ef3', 1, ''),
(9, 'Eduarda Viana dos Santos', 'dudinha', 'eduardaviana@gmail.com', '0aebe5a75ff188d265663102efae6ef3', 1, ''),
(10, 'Jhorlen Souza Bianor', 'Pitch', 'jhorlesouza@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--
-- Erro ao ler a estrutura para a tabela connect.usuario: #1932 - Table &#039;connect.usuario&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela connect.usuario: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `connect`.`usuario`&#039; na linha 1

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices de tabela `pedido_item`
--
ALTER TABLE `pedido_item`
  ADD KEY `fk_id_pedido` (`id_pedido`);

--
-- Índices de tabela `secao`
--
ALTER TABLE `secao`
  ADD PRIMARY KEY (`id_secao`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `secao`
--
ALTER TABLE `secao`
  MODIFY `id_secao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pedido_item`
--
ALTER TABLE `pedido_item`
  ADD CONSTRAINT `fk_id_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
