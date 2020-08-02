-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 02 2020 г., 22:23
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `logger`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_07_30_120700_create_sites_info_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sites_info`
--

CREATE TABLE `sites_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_load` datetime NOT NULL,
  `domain_name` longtext NOT NULL,
  `page_url` longtext NOT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `price_promotional` double(8,2) UNSIGNED DEFAULT NULL,
  `price_discount_percentage` double(8,2) UNSIGNED DEFAULT NULL,
  `product_name` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sites_info`
--

INSERT INTO `sites_info` (`id`, `date_load`, `domain_name`, `page_url`, `price`, `price_promotional`, `price_discount_percentage`, `product_name`, `created_at`, `updated_at`) VALUES
(1, '2020-08-02 19:19:33', 'mirinstrumenta.ua', '/product/gaykovert-pnevmaticheskiy-professionalniy-intertool-pt-1104.html', 4099.00, 0.00, 0.00, 'Гайковерт пневматический профессиональный INTERTOOL PT-1104', NULL, NULL),
(2, '2020-08-02 19:19:33', 'mirinstrumenta.ua', '/product/gaykovert-pnevmaticheskiy-professionalniy-intertool-pt-1106.html', 3499.00, 0.00, 0.00, 'Гайковерт пневматический профессиональный INTERTOOL PT-1106', NULL, NULL),
(3, '2020-08-02 19:19:33', 'mirinstrumenta.ua', '/product/gaykovert-pnevmaticheskiy-professionalniy-intertool-pt-1105.html', 3999.00, 0.00, 0.00, 'Гайковерт пневматический профессиональный INTERTOOL PT-1105', NULL, NULL),
(4, '2020-08-02 19:19:33', 'mirinstrumenta.ua', '/product/uglovoy-gaykovert-intertool-pt-1111.html', 620.00, 0.00, 0.00, 'Угловой гайковерт INTERTOOL PT-1111', NULL, NULL),
(5, '2020-08-02 19:19:33', 'mirinstrumenta.ua', '/product/gaykovert-pnevmaticheskiy-v-chemodane--nabor-golovok-17ed-intertool-pt-1101.html', 999.00, 849.00, 15.02, 'Гайковерт пневматический в чемодане + набор головок 17 ед INTERTOOL PT-1101', NULL, NULL),
(6, '2020-08-02 19:19:33', 'mirinstrumenta.ua', '/product/uglovoy-gaykovert-v-chemodane--nabor-golovok-12-intertool-pt-1110.html', 769.00, 0.00, 0.00, 'Угловой гайковерт в чемодане + набор головок 1/2\" INTERTOOL PT-1110', NULL, NULL),
(7, '2020-08-02 19:19:33', 'mirinstrumenta.ua', '/product/gaykovert-pnevmaticheskiy-professionalniy-intertool-pt-1103.html', 1849.00, 1339.00, 27.58, 'Гайковерт пневматический ударный INTERTOOL PT-1103', NULL, NULL),
(8, '2020-08-02 19:19:33', 'mirinstrumenta.ua', '/product/gaykovert-pnevmaticheskiy-professionalniy-intertool-pt-1105-sort-2.html', 3999.00, 3299.00, 17.50, 'Гайковерт пневматический профессиональный INTERTOOL PT-1105', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sites_info`
--
ALTER TABLE `sites_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sites_info`
--
ALTER TABLE `sites_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
