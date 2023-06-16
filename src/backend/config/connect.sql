-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/06/2023 às 08:00
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
(2, 2, 1),
(2, 3, 1),
(9, 2, 1),
(9, 4, 1),
(2, 5, 1);

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
(2, 'Advil Extra Alivio Ibuprofeno 400mg 20 cÃ¡psulas', 'Advil estÃ¡ indicado no alÃ­vio temporÃ¡rio da febre e de dores de leve a moderada intensidade como: dor de cabeÃ§a; dor nas costas; dor muscular; enxaqueca; cÃ³lica menstrual; de gripes e resfriados ', 'Anti-inflamatÃ³rios', 'NÃ£o Cadastrada', '2025-11-12', 'Advil Extra Alivio Ibuprofeno 400mg 20 cÃ¡psulas_2023.06.15-23.50.39.jpg', 40, '40.16', 1, 0),
(3, 'Benegrip Multi 30mg 20 comprimidos', 'Benegrip Ã© destinado para alÃ­vio dos sintomas decorrentes das gripes e resfriados, como dores de cabeÃ§a, febre e processos alÃ©rgicos. Ã‰ formado por uma associaÃ§Ã£o dos seguintes componentes: dip', 'AnalgÃ©sicos', 'NÃ£o Cadastrada', '2027-11-25', '_2023.06.16-00.05.55jpeg', 0, '25.29', 1, 0),
(4, 'Resfenol Paracetamol 400mg 20 cÃ¡psulas', 'O Resfenol age contra os sintomas de gripes e resfriados, como: congestÃ£o nasal, coriza, febre, cefaleia, dores musculares e demais sintomas presentes nos estados gripais.', 'AnalgÃ©sicos', 'NÃ£o Cadastrada', '2025-11-21', '_2023.06.16-00.10.20.png', 0, '19.29', 1, 0),
(5, 'Fralda Huggies Supreme Care Unissex XXG - 58 unidades', 'Fralda descartÃ¡vel para bebÃªs, tamanho XXG, Com exclusiva tecnologia Xtra-Flex, Distribui o xixi mais rÃ¡pido e uniformemente pela fralda, Oferece flexibilidade e conforto para o bebÃª, Produzida co', 'Outros', 'NÃ£o Cadastrada', '2025-12-15', '_2023.06.16-00.12.36.jpg', 0, '69.90', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `data` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `forma_pagamento` varchar(50) NOT NULL,
  `cod_endereco` int(11) NOT NULL,
  `forma_recebimento` varchar(50) NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_item`
--

CREATE TABLE `pedido_item` (
  `id_pedido` int(11) NOT NULL,
  `id_medicamento` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(9, 'Eduarda Viana dos Santos', 'dudinha', 'eduardaviana@gmail.com', '0aebe5a75ff188d265663102efae6ef3', 1, '');

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
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `secao`
--
ALTER TABLE `secao`
  MODIFY `id_secao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
