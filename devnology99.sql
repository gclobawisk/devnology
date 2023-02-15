-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 186.202.152.237
-- Generation Time: 15-Fev-2023 às 13:06
-- Versão do servidor: 5.7.32-35-log
-- PHP Version: 5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devnology99`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_name`, `blog_url`) VALUES
(1, 'DEVGO', 'https://devgo.com.br'),
(2, 'teste', 'https://teste.com.br'),
(3, 'testeeee3', 'https://dwdwdwdwdwdw.com.br');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE `links` (
  `li_id` bigint(11) UNSIGNED NOT NULL,
  `li_titulo` varchar(255) NOT NULL,
  `li_url` varchar(255) DEFAULT NULL,
  `li_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `li_blog_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`li_id`, `li_titulo`, `li_url`, `li_data`, `li_blog_id`) VALUES
(1, 'Eu deveria usar uma Web View no meu app?', 'https://devgo.com.br/eu-deveria-usar-uma-web-view-no-meu-app', '2023-02-15 00:57:53', 1),
(2, 'Introdução à validação de schema JSON utilizando o Postman', 'https://devgo.com.br/introducao-a-validacao-de-schema-json-utilizando-o-postman', '2023-02-15 00:57:53', 1),
(3, 'Uma API eficiente e simples', 'https://devgo.com.br/uma-api-eficiente-e-simples', '2023-02-15 00:57:53', 1),
(4, 'Trabalhando com arrays em Javascript', 'https://devgo.com.br/trabalhando-com-arrays-em-javascript', '2023-02-15 00:57:53', 1),
(5, 'Você já usa o NestJS?', 'https://devgo.com.br/voce-ja-usa-o-nestjs', '2023-02-15 00:57:54', 1),
(6, 'Como organizar suas demandas', 'https://devgo.com.br/como-organizar-suas-demandas', '2023-02-15 00:57:54', 1),
(7, 'Como dar bons prazos', 'https://devgo.com.br/como-dar-bons-prazos', '2023-02-15 00:57:54', 1),
(8, '10 extensões do Visual Studio Code para facilitar o seu dia a dia.', 'https://devgo.com.br/10-extensoes-do-visual-studio-code-para-facilitar-o-seu-dia-a-dia', '2023-02-15 00:57:54', 1),
(9, 'Monólitos e microsserviços', 'https://devgo.com.br/monolitos-e-microsservicos', '2023-02-15 00:57:54', 1),
(10, 'Como fazer o deploy de sua aplicação do jeito fácil', 'https://devgo.com.br/como-fazer-o-deploy-de-sua-aplicacao-do-jeito-facil', '2023-02-15 00:57:54', 1),
(11, 'Explorando funções assíncronas no Javascript', 'https://devgo.com.br/explorando-funcoes-assincronas-no-javascript', '2023-02-15 00:57:54', 1),
(12, 'Bibliotecas UI no desenvolvimento frontend', 'https://devgo.com.br/bibliotecas-ui-no-desenvolvimento-frontend', '2023-02-15 00:57:54', 1),
(13, 'Entendendo Hooks no React', 'https://devgo.com.br/entendendo-hooks-no-react', '2023-02-15 00:57:54', 1),
(14, 'Boas práticas para desenvolvimento de uma API Rest', 'https://devgo.com.br/boas-praticas-para-desenvolvimento-de-uma-api-rest', '2023-02-15 00:57:54', 1),
(15, 'Porque você deve estudar Flutter', 'https://devgo.com.br/porque-voce-deve-estudar-flutter', '2023-02-15 00:57:54', 1),
(16, 'Conhecendo o GraphQL', 'https://devgo.com.br/conhecendo-o-graphql', '2023-02-15 00:57:54', 1),
(17, 'Como organizo meus projetos frontend', 'https://devgo.com.br/como-organizo-meus-projetos-frontend', '2023-02-15 00:57:54', 1),
(18, 'O que são testes automatizados', 'https://devgo.com.br/o-que-sao-testes-automatizados', '2023-02-15 00:57:54', 1),
(19, 'Como fazemos o Gitflow', 'https://devgo.com.br/como-fazemos-o-gitflow', '2023-02-15 00:57:54', 1),
(20, 'O que é Atomic Design', 'https://devgo.com.br/o-que-e-atomic-design', '2023-02-15 00:57:54', 1),
(21, 'Código limpo e boas práticas de programação', 'https://devgo.com.br/codigo-limpo-e-boas-praticas-de-programacao', '2023-02-15 00:57:54', 1),
(22, 'O que são frameworks', 'https://devgo.com.br/o-que-sao-frameworks', '2023-02-15 00:57:54', 1),
(23, 'O que é uma API', 'https://devgo.com.br/o-que-e-uma-api', '2023-02-15 00:57:54', 1),
(24, 'Começando com HTML e CSS', 'https://devgo.com.br/comecando-com-html-e-css', '2023-02-15 00:57:54', 1),
(25, 'Como preparar o seu PC para desenvolvimento', 'https://devgo.com.br/como-preparar-o-seu-pc-para-desenvolvimento', '2023-02-15 00:57:54', 1),
(26, 'Pós-graduação em TI - Qual devo escolher?', 'https://devgo.com.br/pos-graduacao-em-ti-qual-devo-escolher', '2023-02-15 00:57:56', 1),
(27, 'Como trabalhar com Git', 'https://devgo.com.br/como-trabalhar-com-git', '2023-02-15 00:57:56', 1),
(28, 'Desmistificando o TypeScript 🧐', 'https://devgo.com.br/desmistificando-o-typescript', '2023-02-15 00:57:57', 1),
(29, 'O que existe por trás de um aplicativo', 'https://devgo.com.br/o-que-existe-por-tras-de-um-aplicativo', '2023-02-15 00:57:57', 1),
(30, 'Como se tornar um desenvolvedor de software', 'https://devgo.com.br/como-se-tornar-um-desenvolvedor-de-software', '2023-02-15 00:57:57', 1);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  `usuario` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`, `usuario`, `status`, `image`) VALUES
(1, 'Gabriel Rodrigues', 'gabriel.clobawisk@hotmail.com', NULL, '$2a$12$giChPKO0fm8wL5biwrKIfuAfcBLJ7yJdCBgh7xQ/3Wg77I6jX6Azu', NULL, NULL, '2023-02-09 04:00:54', 0, 1, 0, '26408ffa703a72e8ac0117e74ad46f331675904454.jpg'),
(2, 'Usuário Teste', 'usuarioteste@gmail.com', NULL, '$2y$10$BiriCj7SRoZg/8t.lP9zNuKfEbB6qDVM1lonD3glfcW0UmEpF1cNS', NULL, NULL, '2023-02-15 17:00:29', 0, 1, 0, 'afd4836712c5e77550897e25711e1d961676469629.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`li_id`),
  ADD UNIQUE KEY `li_url` (`li_url`),
  ADD KEY `li_blog_id` (`li_blog_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `li_id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`li_blog_id`) REFERENCES `blogs` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
