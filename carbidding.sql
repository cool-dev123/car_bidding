-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 03 2019 г., 13:55
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `carbidding`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auctioncats`
--

CREATE TABLE `auctioncats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `auctioncats`
--

INSERT INTO `auctioncats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Trades_CC_RF', NULL, NULL),
(6, 'Leasing', NULL, NULL),
(7, 'Insurance', NULL, NULL),
(8, 'Mototechnics', NULL, NULL),
(9, 'With_mileage', NULL, NULL),
(10, 'Spare_parts', NULL, NULL),
(11, 'Property', NULL, NULL),
(12, 'My_auctions', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `bodies`
--

CREATE TABLE `bodies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bodies`
--

INSERT INTO `bodies` (`id`, `name`, `icons`, `created_at`, `updated_at`) VALUES
(3, 'Легковые', '4.png', NULL, NULL),
(4, 'Легкие коммерческие', '7.png', NULL, NULL),
(5, 'Грузовые', '6.png', NULL, NULL),
(6, 'Седельные тягачи', '5.png', NULL, NULL),
(7, 'Прицепы', '8.png', NULL, NULL),
(8, 'Автобусы', '2.png', NULL, NULL),
(9, 'Спецтехника', '3.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `carmodels`
--

CREATE TABLE `carmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `carmodels`
--

INSERT INTO `carmodels` (`id`, `name`, `icons`, `created_at`, `updated_at`) VALUES
(2, 'BMW', 'BMW-logo.png', NULL, NULL),
(3, 'Mercedes-Benz', 'Mercedes-Benz-logo.png', NULL, NULL),
(5, 'Lada', 'Lada_company_logo.png', NULL, NULL),
(6, 'Porsche', 'Porsche-logo.png', NULL, NULL),
(7, 'Ferrari', 'Ferrari-logo.png', NULL, NULL),
(8, 'Lamborghini', 'Lamborghini-logo.png', NULL, NULL),
(9, 'Audi', 'Audi-logo.png', NULL, NULL),
(10, 'Volkswagen', 'Volkswagen-logo.png', NULL, NULL),
(11, 'Ford', 'Ford-logo.png', NULL, NULL),
(12, 'Toyota', 'Toyota-logo.png', NULL, NULL),
(13, 'Maserati', 'Maserati-logo.png', NULL, NULL),
(14, 'Bugatti', 'Bugatti-logo.png', NULL, NULL),
(15, 'Aston Martin', 'Aston-Martin-logo.png', NULL, NULL),
(16, 'Bentley', 'Bentley-logo.png', NULL, NULL),
(17, 'Nissan', 'Nissan-logo.png', NULL, NULL),
(18, 'Hyundai', 'Hyundai-logo.png', NULL, NULL),
(19, 'Honda', 'Honda-logo.png', NULL, NULL),
(20, 'Mitsubishi', 'Mitsubishi-logo.png', NULL, NULL),
(22, 'Lexus', 'Lexus-logo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `bodyId` int(11) NOT NULL,
  `categorId` int(11) NOT NULL,
  `modelId` int(11) NOT NULL,
  `parkingId` int(11) NOT NULL,
  `stateId` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `milage` int(11) NOT NULL,
  `engNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine` int(11) NOT NULL,
  `transmission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startingPrice` int(11) NOT NULL,
  `currentPrice` int(11) NOT NULL,
  `auctionStep` int(11) NOT NULL,
  `auctionStart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endOfAuction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documents` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mainpics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `name`, `userId`, `bodyId`, `categorId`, `modelId`, `parkingId`, `stateId`, `year`, `milage`, `engNumber`, `engine`, `transmission`, `startingPrice`, `currentPrice`, `auctionStep`, `auctionStart`, `endOfAuction`, `comments`, `documents`, `color`, `completed`, `mainpics`, `created_at`, `updated_at`) VALUES
(1, 'BMW E60', 3, 3, 3, 2, 2, 2, 2014, 65000, 'CJS 223973', 3, 'АКПП', 22000, 22000, 12000, '2019-09-24', '2019-10-05', 'BMW e60, milage 65000km, color: black', 'fgdsfg', 'black', '1', 'prodam-bmw-e60-2014-awt-bovariya-restailing-photo-ff52.jpg', NULL, '2019-09-25 07:39:35'),
(2, 'Mercedes-Benz c-class', 4, 3, 3, 3, 1, 2, 2016, 24000, 'CJS 223973', 4, 'АКПП', 19000, 19000, 1300, '2019-09-28', '2019-10-03', 'Mercedes Benz c-class, milage 24000km, color: white', 'sfdsdf', 'white', '1', 'e4fd8da7a86cd5ba69357a5c9995f3d5.jpg', NULL, '2019-09-24 05:07:04'),
(3, 'Audi a8', 3, 1, 2, 9, 1, 1, 2017, 44000, '3', 3, 'АКПП', 36000, 36000, 1600, '25.09.19', '29.09.19', '....', '..', 'white', '1', 'gC6xqu78OCACK4zRxHyw4A=s800.jpg', NULL, '2019-09-25 07:39:33'),
(4, 'BMW X5', 3, 2, 1, 1, 1, 1, 2015, 21000, '5', 5, 'АКПП', 18000, 18000, 980, '25.09.19', '31.09.19', 'jj', 'jjj', 'silver', '1', 'prueba-bmw-x5-xdrive30d-2019.jpg', NULL, '2019-09-25 07:39:31'),
(5, 'Lexus RX 350', 3, 2, 1, 1, 1, 1, 2013, 68000, '3', 3, 'АКПП', 9500, 9500, 950, '26.09.19', '27.09.19', '444', '444', 'red', '1', '384422_2020_Lexus_RX.jpg', NULL, '2019-09-25 07:39:28'),
(6, 'Toyora c-HR', 3, 2, 1, 1, 1, 1, 2011, 36000, '2', 2, 'АКПП', 11000, 11000, 1000, '23.03.19', '26.09.19', '11', 'sdfgsdf', 'white', '1', 'Toyota_C-HR__267593764f.jpg', NULL, '2019-09-25 07:39:25'),
(7, 'Ford', 3, 1, 1, 1, 1, 1, 2012, 46000, '3', 3, 'АКПП', 7000, 7000, 650, '25.09.19', '28.09.19', 'dsfg', 'sdfg', 'white', '1', '019e61d0-d2e9-11e8-addd-f58706eddd5e.jpg', NULL, '2019-09-26 11:53:17'),
(8, 'Mercedes-Benz GLE', 3, 3, 6, 3, 1, 2, 2019, 8500, '524524524', 4, 'АКПП', 22000, 22000, 2100, '2019-10-01', '2019-10-09', 'coments', 'documents', 'silver', '1', '0e1a5a4edadb209896d225027d3dd06aa846d84b.jpg', NULL, '2019-10-03 08:53:30'),
(9, 'Hyundai Sonata', 3, 3, 3, 18, 1, 2, 2015, 25000, '222222', 2, 'АКПП', 13000, 13000, 1600, '2019-09-30', '2019-10-08', 'comments', 'documents', 'white', '1', '001_16052019113444ecae_800600.jpg', NULL, '2019-10-03 08:53:38'),
(10, 'Toyota Prado', 3, 3, 6, 12, 1, 2, 2008, 168000, '2222222', 3, 'АКПП', 7800, 7800, 980, '2019-10-01', '2019-10-01', 'comments', 'documents', 'white', '1', '9a8f38c5.jpg', NULL, '2019-10-03 08:53:37'),
(11, 'Honda', 3, 8, 3, 19, 1, 2, 2011, 250000, '555555', 5, 'АКПП', 35000, 35000, 2600, '2019-10-01', '2019-10-01', 'comments', 'documents', 'blue', '1', '28_texteDetail_v_custom-bus-wrap.jpg', NULL, '2019-10-03 08:53:33'),
(12, 'Lexus IS', 3, 3, 6, 22, 1, 2, 2014, 65000, '33333', 3, 'АКПП', 8900, 8900, 1300, '2019-10-01', '2019-10-01', 'comments', 'documents', 'red', '1', 'Article_164317_860_575.jpg', NULL, '2019-10-03 08:53:32'),
(14, 'Mercedes-Benz G-class', 3, 3, 6, 3, 1, 2, 2017, 32000, '5', 5, 'АКПП', 36000, 36000, 2400, '2019-10-01', '2019-10-07', 'comments', 'documents', 'black', '1', 'mercedes-benz_g-63-amg__207259835f.jpg', NULL, '2019-10-03 08:59:21'),
(15, 'BMW F10', 3, 3, 3, 2, 1, 2, 2011, 46000, '4444', 4, 'АКПП', 11000, 11000, 1500, '2019-09-27', '2019-09-29', 'comments', 'documents', 'black', '1', 'BMW_535i_(F10)_front_20100425.jpg', NULL, '2019-10-03 08:59:17');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `carID`, `created_at`, `updated_at`) VALUES
(1, '2bb36a771b9947b85191525cea81e0ee.jpg', 2, NULL, NULL),
(2, '470x0_4Vub2hmCvt1c4M2CLS6pQ8YbpBkQWZFJ___jpg____4_a82c4d48.jpg', 1, NULL, NULL),
(3, '4614fea0e25be110e91e3b651f7a3edb.jpg', 2, NULL, NULL),
(4, 'e4fd8da7a86cd5ba69357a5c9995f3d5.jpg', 2, NULL, NULL),
(5, 'prodam-bmw-e60-2014-awt-bovariya-restailing-photo-ff52.jpg', 1, NULL, NULL),
(6, 's-l1600-18-e1533904295706.jpg', 1, NULL, NULL),
(7, 'Е-60-2004-М.jpg', 1, NULL, NULL),
(8, '0e1a5a4edadb209896d225027d3dd06aa846d84b.jpg', 8, NULL, NULL),
(9, '001_16052019113444ecae_800600.jpg', 9, NULL, NULL),
(10, '9a8f38c5.jpg', 10, NULL, NULL),
(11, '18c0625-051.jpg', 8, NULL, NULL),
(12, '28_texteDetail_v_custom-bus-wrap.jpg', 11, NULL, NULL),
(13, 'Article_164317_860_575.jpg', 12, NULL, NULL),
(14, 'Lexus-IS_2.jpg', 12, NULL, NULL),
(15, 'test-drajv_lexus_is_250_kreativ.jpg', 12, NULL, NULL),
(16, 'BMW_535i_(F10)_front_20100425.jpg', 15, NULL, NULL),
(17, 'BMW_550i_(F10)_–_Frontansicht_(2),_17._Juli_2011,_Mettmann.jpg', 15, NULL, NULL),
(18, 'ed1572b028e409ae1673a57ff08a1241.jpg', 9, NULL, NULL),
(19, 'pfrTbGpRmB.jpg', 9, NULL, NULL),
(20, 'maxresdefault.jpg', 10, NULL, NULL),
(21, 'mercedes-benz_g-63-amg__207259835f.jpg', 14, NULL, NULL),
(22, 'mercedes-benz-brabus-g-63-amg-b63-620-c814909012017235809_1.jpg', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_11_124543_create_users_table', 2),
(5, '2019_09_12_064433_add_gender_to_users_table', 3),
(6, '2019_09_13_062453_create_bodies_table', 4),
(7, '2019_09_13_071027_add_icons_to_bodies_table', 5),
(8, '2019_09_13_083639_create_carmodels_table', 6),
(9, '2019_09_13_083805_create_carmodels_table', 7),
(10, '2019_09_13_091011_create_states_table', 8),
(11, '2019_09_13_144409_create_parkings_table', 9),
(12, '2019_09_13_145420_create_auctioncats_table', 10),
(13, '2019_09_16_140225_create_cars_table', 11),
(14, '2019_09_16_142756_create_images_table', 12),
(15, '2019_09_16_143128_create_cars_table', 13),
(16, '2019_09_17_095827_add_name_to_images_table', 14),
(17, '2019_09_17_100518_add_mainpic_to_cars_table', 15),
(18, '2019_09_17_100948_create_cars_table', 16),
(19, '2019_09_17_102538_create_cars_table', 17),
(20, '2019_09_17_105540_add_mainpics_to_cars_table', 18),
(21, '2019_09_17_110108_add_name_to_cars_table', 19),
(22, '2019_09_17_115521_add_transmission_to_cars_table', 20),
(23, '2019_09_17_132208_add_verified_to_cars_table', 21),
(24, '2019_09_17_134516_add_completed_to_cars_table', 22);

-- --------------------------------------------------------

--
-- Структура таблицы `parkings`
--

CREATE TABLE `parkings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'С пробегом', NULL, NULL),
(3, 'С наработкой', NULL, NULL),
(4, 'Битый', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additionally` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '/public/img/avatar.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `sname`, `gender`, `phone`, `date_of_birth`, `usertype`, `postcode`, `Adress`, `additionally`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'Armenia', 'male', '+37491854535', NULL, 'admin', NULL, NULL, 'Armenia Developer', 'sardaryan17@gmail.com', NULL, '$2y$10$aMfsikwsl/ztxjaYn.wlQ.mkEBf5Khqekfcv.dzH4x.asFMRbZ4Ri', '20130319_083314_1174_admin.png', 'PSI35uMj1vzgtCbv6pe3Du9VB8vFCoVLlwEcQdf1JVL6szUS5qqtkG3ab3no', '2019-09-12 03:04:39', '2019-09-12 03:04:39'),
(4, 'Анжела', 'Иванова', 'female', '+37496554499', NULL, 'user', NULL, NULL, 'Привет всем', 'anjela@mail.ru', NULL, '$2y$10$YwFmJlDgJsBLgKURtVhItuzgnWfZiY8wfNEs9VEaY9kOFC6f0SF6a', NULL, NULL, '2019-09-12 03:41:59', '2019-09-12 03:41:59'),
(5, 'Василий', 'Павлюк', 'male', '+37498556688', NULL, 'user', NULL, NULL, 'Я Василий !!!', 'vasili@mail.ru', NULL, '$2y$10$5n4fSv9tyj/QNkccTOI8dumSdoOI/03wL9MQmGlXLQcNiH.zbenxO', NULL, NULL, '2019-09-12 04:03:04', '2019-09-12 04:03:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auctioncats`
--
ALTER TABLE `auctioncats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bodies`
--
ALTER TABLE `bodies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `carmodels`
--
ALTER TABLE `carmodels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parkings`
--
ALTER TABLE `parkings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auctioncats`
--
ALTER TABLE `auctioncats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `bodies`
--
ALTER TABLE `bodies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `carmodels`
--
ALTER TABLE `carmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `parkings`
--
ALTER TABLE `parkings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
