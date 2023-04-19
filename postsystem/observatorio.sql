-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jul-2022 às 20:17
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `observatorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `usuario`, `senha`, `nivel`) VALUES
(1, 'Nícolas', 'nicolassanini@gmail.com', 'adm', 'observatorio', '1'),
(11, 'Luiz', 'naosei@gmail.com', 'frter', 'aadaaaa', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatos`
--

CREATE TABLE `relatos` (
  `id` int(11) NOT NULL,
  `arquivo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_biblioteca`
--

CREATE TABLE `tb_biblioteca` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_biblioteca`
--

INSERT INTO `tb_biblioteca` (`id`, `titulo`, `imagem`, `descricao`) VALUES
(9, 'Organização da Vigilância Alimentar e Nutricional', '995294479.png', '<p style=\"text-align: left;\"><br></p><div style=\"text-align: center;\"><br></div><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><div style=\"text-align: center;\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/protocolo_sisvan.pdf\" title=\"\" target=\"\" style=\"color: rgb(84, 84, 84); text-decoration-line: underline; outline: 0px; font-size: 12pt;\"><font color=\"#000033\">Protocolos do Sistema de Vigilância Alimentar e Nutricional – SISVAN na Assistência à Saúde&nbsp;</font></a></div></span><div style=\"text-align: center;\"><font face=\"Times New Roman, serif\"><span style=\"font-size: 16px;\"><br></span></font></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><font color=\"#000033\"><a href=\"http://189.28.128.100/nutricao/docs/geral/orientacoes_basicas_sisvan.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Vigilância Alimentar e Nutricional – Sisvan – Orientações Básicas para a Coleta, Processamento, Análise de Dados e Informação em Serviços de Saúde</font></a>&nbsp;</font></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px;\"><font face=\"Times New Roman, serif\" color=\"#000033\"><br></font></span></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"https://bvsms.saude.gov.br/bvs/publicacoes/orientacoes_coleta_analise_dados_antropometricos.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Orientações para coleta e análise de dados antropométricos em serviços de saúde: norma técnica do sistema de Vigilância Alimentar e Nutricional – SISVAN&nbsp;</font></a></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px;\"><font face=\"Times New Roman, serif\" color=\"#000033\"><br></font></span></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"https://bvsms.saude.gov.br/bvs/publicacoes/politica_nacional_alimentacao_nutricao.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Política Nacional de Alimentação e Nutrição&nbsp;</font></a></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px;\"><font face=\"Times New Roman, serif\" color=\"#000033\"><br></font></span></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/manual_equipamentos_2012_1201.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Manual orientador para aquisição de equipamentos antropométricos&nbsp;</font></a></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px;\"><font face=\"Times New Roman, serif\" color=\"#000033\"><br></font></span></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/marcadores_consumo_alimentar_atencao_basica.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Orientações para Avaliação de Marcadores de Consumo Alimentar na Atenção Básica&nbsp;</font></a></span></div><div style=\"text-align: center;\"><font color=\"#000033\"><br></font></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/marco_referencia_vigilancia_alimentar.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Marco de Referência da Vigilância Alimentar e Nutricional na Atenção Básica&nbsp;</font></a></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px;\"><font face=\"Times New Roman, serif\" color=\"#000033\"><br></font></span></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/dados_atlas_obesidade.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Atlas da Obesidade Infantil no Brasil&nbsp;</font></a></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px;\"><font face=\"Times New Roman, serif\" color=\"#000033\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/situacao_alimentar_populacao_idosa.pdf\" title=\"\" target=\"_blank\"><br></a></font></span></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/matriz_organizacao_cuidados_nutricao_aps.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Situação alimentar e nutricional da população idosa na atenção primária à saúde no Brasil&nbsp;</font></a></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px;\"><font face=\"Times New Roman, serif\" color=\"#000033\"><br></font></span></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/instrutivo_inseguranca_alimentar_aps.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Matriz para Organização dos Cuidados em Alimentação e Nutrição na Atenção Primária à Saúde&nbsp;</font></a></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px;\"><font face=\"Times New Roman, serif\" color=\"#000033\"><br></font></span></div><div style=\"text-align: center;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"https://bvsms.saude.gov.br/bvs/publicacoes/matriz_alimentacao_nutricao.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Insegurança Alimentar na Atenção Primária à Saúde: Manual de Identificação dos Domicílios e Organização da Rede</font></a></span></div><div style=\"text-align: center;\"><font color=\"#000033\"><br></font></div><div><div style=\"text-align: center;\"><font color=\"#000033\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:pt-br;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"http://189.28.128.100/dab/docs/portaldab/publicacoes/situacao_nutricional_gestantes_aps.pdf\" title=\"\" target=\"_blank\"><font color=\"#000033\">Matriz de Ações de Alimentação e Nutrição</font>&nbsp;</a></span><br></font></div></div><div style=\"text-align: center;\"><font color=\"#000033\"><br></font></div><div><p class=\"MsoListParagraph\" style=\"text-align: center; text-indent: -18pt;\"><font color=\"#000033\"><span style=\"font-size: 12pt; line-height: 17.12px; font-family: Symbol;\"><span times=\"\" new=\"\" roman\";\"=\"\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp; &nbsp;</span></span><span times=\"\" new=\"\" roman\",\"serif\"\"=\"\" style=\"font-size: 12pt; line-height: 17.12px;\"><a href=\"http://colecoes.sibi.usp.br/fsp/items/show/3630#?c=0&amp;m=0&amp;s=0&amp;cv=0\" title=\"\" target=\"_blank\"><font color=\"#000033\">Situação alimentar e nutricional de gestantes na Atenção Primária à Saúde no Brasil – Versão Preliminar</font></a>&nbsp;</span></font></p><p class=\"MsoListParagraph\" style=\"text-align: center; text-indent: -18pt;\"><span times=\"\" new=\"\" roman\",=\"\" \"serif\";=\"\" font-size:=\"\" 12pt;\"=\"\"><font color=\"#000033\">&nbsp;<a href=\"https://aps.saude.gov.br/biblioteca/visualizar/MjEyOQ==\" title=\"\" target=\"_blank\">&nbsp;&nbsp; &nbsp;&nbsp;<font color=\"#000033\">Manual instrutivo das oficinas de qualificação de profissionais da APS: vigilância alimentar e nutricional</font></a>&nbsp;</font></span></p><p class=\"MsoListParagraph\" style=\"text-align: center; text-indent: -18pt;\"><span times=\"\" new=\"\" roman\",=\"\" \"serif\";=\"\" font-size:=\"\" 12pt;\"=\"\"><font color=\"#000033\">&nbsp; &nbsp; &nbsp;<a>&nbsp;<font color=\"#000033\">Situação alimentar e nutricional de crianças na Atenção Primária à Saúde no Brasil</font></a></font></span></p></div>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_coberturas`
--

CREATE TABLE `tb_coberturas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_coberturas`
--

INSERT INTO `tb_coberturas` (`id`, `titulo`, `descricao`) VALUES
(2, 'Cobertura', 'Insira o texto aqui!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cursos`
--

CREATE TABLE `tb_cursos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipe`
--

CREATE TABLE `tb_equipe` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cargo` varchar(120) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_equipe`
--

INSERT INTO `tb_equipe` (`id`, `nome`, `cargo`, `descricao`) VALUES
(1, 'Laura Virgili Claro', 'Estudantes de Pós-graduação', 'Estudante de Pós-graduação em Gerontologia (UFSM), Nutricionista  e colaboradora-http://lattes.cnpq.br/1165508243129609'),
(2, 'Vanessa Ramos Kirsten', 'Docentes da UFSM', 'Docente (UFSM) e coordenadora- http://lattes.cnpq.br/3910334578555570'),
(3, 'Ana Carolina Bertoletti de Marchi', 'Participantes externos', 'Docente (UPF) e participante externo – http://lattes.cnpq.br/4180557886735944'),
(6, 'Laura Gabriela de Oliveira', 'Bolsistas', 'Acadêmica de Nutrição (UFSM) e bolsista – http://lattes.cnpq.br/1758507722728382'),
(7, 'Lisiane Vecchi', 'Bolsistas', 'Acadêmica de Nutrição (UFSM) e bolsista  – http://lattes.cnpq.br/2658720895544230'),
(8, 'Greisse Viero da Silva Leal', 'Docentes da UFSM', 'Docente (UFSM) e vice-coordenadora – http://lattes.cnpq.br/3520973955022819'),
(9, 'Darielli Gindri Resta Fontana', 'Docentes da UFSM', 'Docente enfermagem (UFSM) e colaboradora –http://lattes.cnpq.br/3313403564756284'),
(10, 'Adriane Cervi Blümke', 'Docentes da UFSM', 'ocente (UFSM) e colaboradora –&nbsp;http://lattes.cnpq.br/5658490336057131'),
(11, 'Andréia Silva de Oliveira', 'Estudantes de Pós-graduação', 'Estudante de Pós-graduação em Gerontologia (UFSM), Nutricionista e colaboradora –&nbsp;http://lattes.cnpq.br/7386011344730979'),
(12, 'Eliza Sella Battisti', 'Estudantes de Pós-graduação', 'Estudante de Pós-graduação em Gerontologia (UFSM), Nutricionista e colaboradora –&nbsp;http://lattes.cnpq.br/0361496587616464'),
(13, 'Eliza Sella Battisti', 'Estudantes de Pós-graduação', 'Estudante de Pós-graduação em Gerontologia (UFSM), Nutricionista e colaboradora –&nbsp;http://lattes.cnpq.br/0361496587616464');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_eventos`
--

CREATE TABLE `tb_eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `organizador` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pesquisas`
--

CREATE TABLE `tb_pesquisas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_portarias`
--

CREATE TABLE `tb_portarias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_portarias`
--

INSERT INTO `tb_portarias` (`id`, `titulo`, `descricao`) VALUES
(5, 'PORTARIA GM/MS Nº 411, DE 25 DE FEVEREIRO DE 2022', 'Habilita Estados, Distrito Federal e Municípios ao recebimento de incentivo para estruturação e implementação de ações de alimentação e nutrição, com base na Política Nacional de Alimentação e Nutrição – PNAN, referente ao exercício financeiro de 2022.  https://www.in.gov.br/en/web/dou/-/portaria-gm/ms-n-411-de-25-de-fevereiro-de-2022-383101681');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_postagens`
--

CREATE TABLE `tb_postagens` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(12) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `exibir` varchar(5) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_postagens`
--

INSERT INTO `tb_postagens` (`id`, `titulo`, `data`, `imagem`, `exibir`, `descricao`) VALUES
(48, 'Em Breve....', '20/07/2022', '2019214484.png', 'Sim', '<h3><b><i><font color=\"#6600cc\">Novidades...</font></i></b></h3>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_relatos`
--

CREATE TABLE `tb_relatos` (
  `id` int(11) NOT NULL,
  `titulo` mediumtext NOT NULL,
  `descricao` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_relatos`
--

INSERT INTO `tb_relatos` (`id`, `titulo`, `descricao`) VALUES
(2, 'Relatos de Experiência', 'Convidamos todas as referências técnicas, gestores\r\nda Vigilância Alimentar e Nutricional (OVAN) e demais profissionais da Atenção\r\nPrimária à Saúde para compartilhar as ações desenvolvidas no âmbito da\r\nVigilância Alimentar e Nutricional (VAN).\r\n\r\nPara enviar o relato de sua ação, preencha o\r\nformulário através do link: https://forms.gle/MCQ1TnB9hmtnsCf39\r\n\r\nO edital se encontra disponível a seguir, juntamente\r\ncom o Termo de Autorização de Uso de Imagem.\r\n\r\nNão esqueça que após o envio do seu relato, este não\r\npoderá mais ser alterado.\r\n\r\nO período de envio dos relatos será até às 23h59min\r\ndo dia 15/07/2022.\r\n\r\nEm caso de dúvidas, você poderá entrar em contato\r\ndiretamente com a equipe do Observatório de Vigilância Alimentar e Nutricional\r\n(OVAN): ovan@ufsm.br\r\n\r\n&nbsp;\r\n\r\nAgradecemos imensamente sua colaboração com a VAN!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_webnarios`
--

CREATE TABLE `tb_webnarios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `relatos`
--
ALTER TABLE `relatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_biblioteca`
--
ALTER TABLE `tb_biblioteca`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_coberturas`
--
ALTER TABLE `tb_coberturas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_eventos`
--
ALTER TABLE `tb_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_pesquisas`
--
ALTER TABLE `tb_pesquisas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_portarias`
--
ALTER TABLE `tb_portarias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_postagens`
--
ALTER TABLE `tb_postagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_relatos`
--
ALTER TABLE `tb_relatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_webnarios`
--
ALTER TABLE `tb_webnarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_biblioteca`
--
ALTER TABLE `tb_biblioteca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_coberturas`
--
ALTER TABLE `tb_coberturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_eventos`
--
ALTER TABLE `tb_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_pesquisas`
--
ALTER TABLE `tb_pesquisas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_portarias`
--
ALTER TABLE `tb_portarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_postagens`
--
ALTER TABLE `tb_postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `tb_relatos`
--
ALTER TABLE `tb_relatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_webnarios`
--
ALTER TABLE `tb_webnarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
