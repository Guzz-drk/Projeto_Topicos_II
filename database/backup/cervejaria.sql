-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2022 às 01:12
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cervejaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estilo_levas`
--

CREATE TABLE `estilo_levas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_leva` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_leva` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `estilo_levas`
--

INSERT INTO `estilo_levas` (`id`, `tipo_leva`, `descricao`, `id_leva`, `created_at`, `updated_at`) VALUES
(1, 'Pilsen Amargo', 'Pequenos traços de laranja', 1, '2022-09-20 01:45:10', '2022-09-20 01:45:10'),
(2, 'Stout', 'Escura com leves toques de Café', 3, '2022-09-20 01:45:54', '2022-09-20 01:48:15'),
(3, 'Ale Citrica', 'Pequenos traços Citricos', 2, '2022-09-20 01:48:43', '2022-09-20 01:48:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fermentos`
--

CREATE TABLE `fermentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fermentos`
--

INSERT INTO `fermentos` (`id`, `nome`, `marca`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Safale US-05', 'Fermentis', 'Fermento neutro, com baixa produção de ésteres e diacetil', '2022-09-20 01:18:43', '2022-09-20 01:18:43'),
(2, 'Safale S-04', 'Fermentis', 'Fermentação rápida, neutra e limpa', '2022-09-20 01:20:19', '2022-09-20 01:20:19'),
(3, 'Safbrew Abbaye (BE-256)', 'Fermentis', 'Fermentação rápida, excelente tolerância a álcool', '2022-09-20 01:21:58', '2022-09-20 01:21:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `levas`
--

CREATE TABLE `levas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dt_fabricacao` date NOT NULL,
  `fervura_inicial` double(8,2) NOT NULL,
  `tempo_fervura` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_agua` double(8,2) NOT NULL,
  `qtd_fermento` double(8,2) NOT NULL,
  `id_fermento` int(11) NOT NULL,
  `id_lupulo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tempo_fervura_final` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `levas`
--

INSERT INTO `levas` (`id`, `dt_fabricacao`, `fervura_inicial`, `tempo_fervura`, `qtd_agua`, `qtd_fermento`, `id_fermento`, `id_lupulo`, `created_at`, `updated_at`, `tempo_fervura_final`) VALUES
(1, '2022-09-10', 7.50, '19:35', 1.50, 1.20, 1, 1, '2022-09-20 01:39:12', '2022-09-20 01:39:12', '22:35'),
(2, '2022-09-02', 15.50, '19:05', 2.20, 0.50, 2, 2, '2022-09-20 01:41:13', '2022-09-20 01:41:13', '22:05'),
(3, '2022-08-12', 10.50, '17:25', 1.40, 1.70, 3, 3, '2022-09-20 01:43:08', '2022-09-20 01:43:08', '19:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lupulos`
--

CREATE TABLE `lupulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origem` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `lupulos`
--

INSERT INTO `lupulos` (`id`, `nome`, `descricao`, `origem`, `created_at`, `updated_at`) VALUES
(1, 'Citra', 'Aroma floral e sabor Cítrico', 'Origem Inglesa, criada no período da colionização britânica na Índia', '2022-09-20 01:24:23', '2022-09-20 01:24:23'),
(2, 'Saaz', 'Sabor sutilmente amargo', 'Originário da República Tcheca', '2022-09-20 01:26:16', '2022-09-20 01:26:16'),
(3, 'Northern Brewer', 'Versatilidade de amargor, fácil harmonização com os mais variados pratos', 'Criado na Inglaterra em 1934, a partir de uma planta fêmea Canterbury Golding e a planta macho OB21', '2022-09-20 01:27:44', '2022-09-20 01:27:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `maltes`
--

CREATE TABLE `maltes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `maltes`
--

INSERT INTO `maltes` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Pilsen', 'Base para produção das cervejas Lager', '2022-09-20 01:11:13', '2022-09-20 01:11:13'),
(2, 'Pale Ale', 'Base de produção das cervejas Ale', '2022-09-20 01:12:11', '2022-09-20 01:12:11'),
(3, 'Escuro', 'Sabor intenso e Coloração forte', '2022-09-20 01:13:16', '2022-09-20 01:13:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `malte_levas`
--

CREATE TABLE `malte_levas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qtd` double(8,2) NOT NULL,
  `id_leva` int(11) NOT NULL,
  `id_malte` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2022_09_12_233703_create_usuarios_table', 1),
(22, '2022_09_12_234839_create_maltes_table', 2),
(23, '2022_09_12_234938_create_fermentos_table', 3),
(24, '2022_09_12_235048_create_lupulos_table', 4),
(25, '2022_09_12_235145_create_levas_table', 5),
(26, '2022_09_12_235446_create_estilo_levas_table', 6),
(27, '2022_09_12_235632_create_malte_levas_table', 7),
(28, '2022_09_13_000123_create_receitas_table', 8),
(29, '2022_09_19_220408_add_campo_nome_usuario', 9),
(30, '2022_09_19_223310_add_campo_tempo_fervura_final_leva', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_lupulo` int(11) NOT NULL,
  `id_malte` int(11) NOT NULL,
  `id_estiloLeva` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `id_lupulo`, `id_malte`, `id_estiloLeva`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-09-20 01:51:04', '2022-09-20 01:51:04'),
(2, 2, 2, 2, '2022-09-20 01:51:23', '2022-09-20 01:51:23'),
(3, 3, 3, 3, '2022-09-20 01:51:41', '2022-09-20 01:51:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_nascimento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `dt_nascimento`, `created_at`, `updated_at`, `nome`) VALUES
(1, 'Jorge@gmail.com', 'jorge321@@', '1997-05-20', '2022-09-20 01:06:42', '2022-09-20 01:06:42', 'Jorge Santana'),
(2, 'Bernardo@gmail.com', 'Be321@@', '2002-04-23', '2022-09-20 01:08:08', '2022-09-20 01:08:08', 'Bernardo Radin'),
(3, 'JoaoVitor@gmail.com', 'Joao3211', '2002-03-18', '2022-09-20 01:09:14', '2022-09-20 01:09:14', 'João Vitor');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estilo_levas`
--
ALTER TABLE `estilo_levas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `fermentos`
--
ALTER TABLE `fermentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `levas`
--
ALTER TABLE `levas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lupulos`
--
ALTER TABLE `lupulos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `maltes`
--
ALTER TABLE `maltes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `malte_levas`
--
ALTER TABLE `malte_levas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estilo_levas`
--
ALTER TABLE `estilo_levas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fermentos`
--
ALTER TABLE `fermentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `levas`
--
ALTER TABLE `levas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `lupulos`
--
ALTER TABLE `lupulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `maltes`
--
ALTER TABLE `maltes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `malte_levas`
--
ALTER TABLE `malte_levas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
