-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 01:35 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porter_jss`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori_id` int NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jmlh_view` int DEFAULT NULL,
  `user_create` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `kategori_id`, `judul`, `deskripsi`, `image`, `jmlh_view`, `user_create`, `user_update`, `user_delete`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'Anim nostrum aut tem', '<b style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">Catur</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(serapan dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Bahasa_Sanskerta\" title=\"Bahasa Sanskerta\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Sanskerta</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">:&nbsp;</span><span lang=\"sa\" style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">चतुरङ्ग</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">,&nbsp;</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 11.9px;\"><abbr title=\"transliterasi\" style=\"border-bottom-width: 0px; border-bottom-style: initial;\">translit.</abbr>&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><span title=\"Sanskerta-language romanization\"><i lang=\"sa-Latn\">caturaṅga</i></span></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">) adalah&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_papan\" title=\"Permainan papan\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">permainan papan</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_strategi_berbasis_giliran\" class=\"mw-redirect\" title=\"Permainan strategi berbasis giliran\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">strategi</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;dua orang yang dimainkan pada sebuah papan kotak-kotak yang terdiri dari 64 kotak, yang disusun dalam petak 8×8, yang terbagi sama rata (masing-masing 32 kotak) dalam kelompok warna putih dan hitam.</span><sup id=\"cite_ref-EB1911_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Catur#cite_note-EB1911-1\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;Permainan ini dimainkan oleh jutaan orang di seluruh dunia. Catur diyakini berasal dari permainan India,&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Chaturanga\" class=\"mw-redirect\" title=\"Chaturanga\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">chaturanga</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(yang menjadi asal nama&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">catur</i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">), sekitar abad ke-7. Chaturanga juga diperkirakan merupakan nenek moyang dari permainan strategi serupa yang berasal dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Dunia_Timur\" title=\"Dunia Timur\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Dunia Timur</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">, seperti&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Xiangqi\" title=\"Xiangqi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">xiangqi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Cina),&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Janggi\" title=\"Janggi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">janggi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Korea), dan&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Shogi\" class=\"mw-redirect\" title=\"Shogi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">shogi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Jepang). Catur mencapai Eropa pada abad ke-9, saat terjadi&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Penaklukan_Hispania_oleh_Umayyah\" title=\"Penaklukan Hispania oleh Umayyah\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">penaklukan Hispania oleh Umayyah</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">. Buah-buah catur tersebut diperkirakan mendapat bentuknya yang dikenal saat ini pada akhir abad ke-15 di Spanyol, sedangkan aturan catur modern distandardisasi pada abad ke-19.</span>', 'fto1.jpg', NULL, NULL, NULL, NULL, '0', NULL, '2024-06-08 06:22:32', '2024-06-08 08:00:51'),
(2, 4, 'Qui quo velit quis e', 'Enim aliquip numquam.<span class=\"comment-copy\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 13px; vertical-align: baseline; box-sizing: inherit; --theme-base-primary-color-h: 27; --theme-base-primary-color-s: 89%; --theme-base-primary-color-l: 48%; --theme-primary-custom-100: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .9))); --theme-primary-custom-200: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .75))); --theme-primary-custom-300: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .5))); --theme-primary-custom-400: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), var(--theme-base-primary-color-l)); --theme-primary-custom-500: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.3))); --theme-primary-custom-600: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.6))); --theme-primary-custom: var(--theme-primary-custom-400); --theme-button-color: initial; --theme-button-hover-color: initial; --theme-button-hover-background-color: initial; --theme-button-active-background-color: initial; --theme-button-selected-color: initial; --theme-button-selected-background-color: initial; --theme-button-outlined-border-color: initial; --theme-button-outlined-selected-border-color: initial; --theme-button-primary-color: initial; --theme-button-primary-active-color: initial; --theme-button-primary-hover-color: initial; --theme-button-primary-selected-color: initial; --theme-button-primary-background-color: initial; --theme-button-primary-active-background-color: initial; --theme-button-primary-hover-background-color: initial; --theme-button-primary-selected-background-color: initial; --theme-background-color: var(--white); --theme-background-position: top left; --theme-background-repeat: repeat; --theme-background-size: auto; --theme-background-attachment: auto; --theme-content-background-color: var(--white); --theme-content-border-color: var(--black-225); --theme-header-background-color: var(--theme-primary); --theme-header-background-position: center left; --theme-header-background-repeat: repeat; --theme-header-background-size: auto; --theme-header-background-border-bottom: 0; --theme-header-link-color: var(--theme-primary); --theme-header-sponsored-color: hsla(0,0%,100%,0.4); --theme-header-foreground-color: transparent; --theme-header-foreground-position: bottom right; --theme-header-foreground-repeat: no-repeat; --theme-header-foreground-size: auto; --theme-footer-background-color: hsl(210,8%,5%); --theme-footer-background-position: top left; --theme-footer-background-repeat: no-repeat; --theme-footer-background-size: auto; --theme-footer-background-border-top: 0; --theme-footer-title-color: var(--black-250); --theme-footer-text-color: var(--black-300); --theme-footer-link-color: var(--black-300); --theme-footer-link-color-hover: var(--black-200); --theme-footer-divider-color: var(--black-500); --theme-footer-padding-top: 0; --theme-footer-padding-bottom: 0; --theme-link-color: initial; --theme-link-color-hover: initial; --theme-link-color-visited: initial; --theme-body-font-family: var(--ff-sans); --theme-body-font-color: var(--black-600); --theme-post-title-font-family: var(--ff-sans); --theme-post-title-color: var(--theme-link-color); --theme-post-title-color-hover: var(--theme-link-color-hover); --theme-post-title-color-visited: var(--theme-link-color-visited); --theme-post-body-font-family: var(--ff-sans); --theme-post-owner-background-color: var(--theme-secondary-100); --theme-post-owner-new-background-color: var(--theme-secondary-200); --theme-topbar-bottom-border: 1px solid var(--black-225); color: rgb(12, 13, 14);\">my current string holds more than 100 characters because is a description provided from user input and information suppose to be shown on the datatable view few characters about 50 characters from the store description in the database</span><span style=\"color: rgb(12, 13, 14); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-size: 13px;\">&nbsp;</span><div class=\"d-inline-flex ai-center\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 13px; vertical-align: baseline; box-sizing: inherit; --theme-base-primary-color-h: 27; --theme-base-primary-color-s: 89%; --theme-base-primary-color-l: 48%; --theme-primary-custom-100: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .9))); --theme-primary-custom-200: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .75))); --theme-primary-custom-300: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .5))); --theme-primary-custom-400: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), var(--theme-base-primary-color-l)); --theme-primary-custom-500: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.3))); --theme-primary-custom-600: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.6))); --theme-primary-custom: var(--theme-primary-custom-400); --theme-button-color: initial; --theme-button-hover-color: initial; --theme-button-hover-background-color: initial; --theme-button-active-background-color: initial; --theme-button-selected-color: initial; --theme-button-selected-background-color: initial; --theme-button-outlined-border-color: initial; --theme-button-outlined-selected-border-color: initial; --theme-button-primary-color: initial; --theme-button-primary-active-color: initial; --theme-button-primary-hover-color: initial; --theme-button-primary-selected-color: initial; --theme-button-primary-background-color: initial; --theme-button-primary-active-background-color: initial; --theme-button-primary-hover-background-color: initial; --theme-button-primary-selected-background-color: initial; --theme-background-color: var(--white); --theme-background-position: top left; --theme-background-repeat: repeat; --theme-background-size: auto; --theme-background-attachment: auto; --theme-content-background-color: var(--white); --theme-content-border-color: var(--black-225); --theme-header-background-color: var(--theme-primary); --theme-header-background-position: center left; --theme-header-background-repeat: repeat; --theme-header-background-size: auto; --theme-header-background-border-bottom: 0; --theme-header-link-color: var(--theme-primary); --theme-header-sponsored-color: hsla(0,0%,100%,0.4); --theme-header-foreground-color: transparent; --theme-header-foreground-position: bottom right; --theme-header-foreground-repeat: no-repeat; --theme-header-foreground-size: auto; --theme-footer-background-color: hsl(210,8%,5%); --theme-footer-background-position: top left; --theme-footer-background-repeat: no-repeat; --theme-footer-background-size: auto; --theme-footer-background-border-top: 0; --theme-footer-title-color: var(--black-250); --theme-footer-text-color: var(--black-300); --theme-footer-link-color: var(--black-300); --theme-footer-link-color-hover: var(--black-200); --theme-footer-divider-color: var(--black-500); --theme-footer-padding-top: 0; --theme-footer-padding-bottom: 0; --theme-link-color: initial; --theme-link-color-hover: initial; --theme-link-color-visited: initial; --theme-body-font-family: var(--ff-sans); --theme-body-font-color: var(--black-600); --theme-post-title-font-family: var(--ff-sans); --theme-post-title-color: var(--theme-link-color); --theme-post-title-color-hover: var(--theme-link-color-hover); --theme-post-title-color-visited: var(--theme-link-color-visited); --theme-post-body-font-family: var(--ff-sans); --theme-post-owner-background-color: var(--theme-secondary-100); --theme-post-owner-new-background-color: var(--theme-secondary-200); --theme-topbar-bottom-border: 1px solid var(--black-225); color: rgb(12, 13, 14); align-items: center !important;\">–&nbsp;<a href=\"https://stackoverflow.com/users/10749546/reuben-wedson\" title=\"69 reputation\" class=\"comment-user owner\" style=\"margin: 0px; padding: 1px 5px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; --_li-fc: var(--theme-link-color, var(--theme-secondary-400)); --_li-fc-hover: var(--theme-link-color-hover, var(--theme-secondary-500)); --_li-fc-visited: var(--theme-link-color-visited, var(--theme-secondary-600)); color: var(--theme-link-color, var(--theme-secondary-400)); cursor: pointer; user-select: auto; box-sizing: inherit; border-radius: var(--br-sm); --theme-base-primary-color-h: 27; --theme-base-primary-color-s: 89%; --theme-base-primary-color-l: 48%; --theme-primary-custom-100: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .9))); --theme-primary-custom-200: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .75))); --theme-primary-custom-300: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .5))); --theme-primary-custom-400: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), var(--theme-base-primary-color-l)); --theme-primary-custom-500: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.3))); --theme-primary-custom-600: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.6))); --theme-primary-custom: var(--theme-primary-custom-400); --theme-button-color: initial; --theme-button-hover-color: initial; --theme-button-hover-background-color: initial; --theme-button-active-background-color: initial; --theme-button-selected-color: initial; --theme-button-selected-background-color: initial; --theme-button-outlined-border-color: initial; --theme-button-outlined-selected-border-color: initial; --theme-button-primary-color: initial; --theme-button-primary-active-color: initial; --theme-button-primary-hover-color: initial; --theme-button-primary-selected-color: initial; --theme-button-primary-background-color: initial; --theme-button-primary-active-background-color: initial; --theme-button-primary-hover-background-color: initial; --theme-button-primary-selected-background-color: initial; --theme-background-color: var(--white); --theme-background-position: top left; --theme-background-repeat: repeat; --theme-background-size: auto; --theme-background-attachment: auto; --theme-content-background-color: var(--white); --theme-content-border-color: var(--black-225); --theme-header-background-color: var(--theme-primary); --theme-header-background-position: center left; --theme-header-background-repeat: repeat; --theme-header-background-size: auto; --theme-header-background-border-bottom: 0; --theme-header-link-color: var(--theme-primary); --theme-header-sponsored-color: hsla(0,0%,100%,0.4); --theme-header-foreground-color: transparent; --theme-header-foreground-position: bottom right; --theme-header-foreground-repeat: no-repeat; --theme-header-foreground-size: auto; --theme-footer-background-color: hsl(210,8%,5%); --theme-footer-background-position: top left; --theme-footer-background-repeat: no-repeat; --theme-footer-background-size: auto; --theme-footer-background-border-top: 0; --theme-footer-title-color: var(--black-250); --theme-footer-text-color: var(--black-300); --theme-footer-link-color: var(--black-300); --theme-footer-link-color-hover: var(--black-200); --theme-footer-divider-color: var(--black-500); --theme-footer-padding-top: 0; --theme-footer-padding-bottom: 0; --theme-link-color: initial; --theme-link-color-hover: initial; --theme-link-color-visited: initial; --theme-body-font-family: var(--ff-sans); --theme-body-font-color: var(--black-600); --theme-post-title-font-family: var(--ff-sans); --theme-post-title-color: var(--theme-link-color); --theme-post-title-color-hover: var(--theme-link-color-hover); --theme-post-title-color-visited: var(--theme-link-color-visited); --theme-post-body-font-family: var(--ff-sans); --theme-post-owner-background-color: var(--theme-secondary-100); --theme-post-owner-new-background-color: var(--theme-secondary-200); --theme-topbar-bottom-border: 1px solid var(--black-225); display: inline-block; text-wrap: nowrap;\">Reuben Wedson</a></div>', 'Diagram batang panen.png', NULL, NULL, NULL, NULL, '0', NULL, '2024-06-08 06:48:20', '2024-06-08 06:48:20'),
(3, 4, 'Anim nostrum aut tem', '<b style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">Catur</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(serapan dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Bahasa_Sanskerta\" title=\"Bahasa Sanskerta\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Sanskerta</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">:&nbsp;</span><span lang=\"sa\" style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">चतुरङ्ग</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">,&nbsp;</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 11.9px;\"><abbr title=\"transliterasi\" style=\"border-bottom-width: 0px; border-bottom-style: initial;\">translit.</abbr>&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><span title=\"Sanskerta-language romanization\"><i lang=\"sa-Latn\">caturaṅga</i></span></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">) adalah&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_papan\" title=\"Permainan papan\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">permainan papan</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_strategi_berbasis_giliran\" class=\"mw-redirect\" title=\"Permainan strategi berbasis giliran\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">strategi</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;dua orang yang dimainkan pada sebuah papan kotak-kotak yang terdiri dari 64 kotak, yang disusun dalam petak 8×8, yang terbagi sama rata (masing-masing 32 kotak) dalam kelompok warna putih dan hitam.</span><sup id=\"cite_ref-EB1911_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Catur#cite_note-EB1911-1\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;Permainan ini dimainkan oleh jutaan orang di seluruh dunia. Catur diyakini berasal dari permainan India,&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Chaturanga\" class=\"mw-redirect\" title=\"Chaturanga\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">chaturanga</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(yang menjadi asal nama&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">catur</i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">), sekitar abad ke-7. Chaturanga juga diperkirakan merupakan nenek moyang dari permainan strategi serupa yang berasal dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Dunia_Timur\" title=\"Dunia Timur\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Dunia Timur</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">, seperti&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Xiangqi\" title=\"Xiangqi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">xiangqi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Cina),&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Janggi\" title=\"Janggi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">janggi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Korea), dan&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Shogi\" class=\"mw-redirect\" title=\"Shogi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">shogi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Jepang). Catur mencapai Eropa pada abad ke-9, saat terjadi&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Penaklukan_Hispania_oleh_Umayyah\" title=\"Penaklukan Hispania oleh Umayyah\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">penaklukan Hispania oleh Umayyah</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">. Buah-buah catur tersebut diperkirakan mendapat bentuknya yang dikenal saat ini pada akhir abad ke-15 di Spanyol, sedangkan aturan catur modern distandardisasi pada abad ke-19.</span>', 'fto1.jpg', NULL, NULL, NULL, NULL, '0', NULL, '2024-06-08 06:22:32', '2024-06-08 08:00:51'),
(4, 4, 'Anim nostrum aut tem', '<b style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">Catur</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(serapan dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Bahasa_Sanskerta\" title=\"Bahasa Sanskerta\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Sanskerta</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">:&nbsp;</span><span lang=\"sa\" style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">चतुरङ्ग</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">,&nbsp;</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 11.9px;\"><abbr title=\"transliterasi\" style=\"border-bottom-width: 0px; border-bottom-style: initial;\">translit.</abbr>&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><span title=\"Sanskerta-language romanization\"><i lang=\"sa-Latn\">caturaṅga</i></span></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">) adalah&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_papan\" title=\"Permainan papan\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">permainan papan</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_strategi_berbasis_giliran\" class=\"mw-redirect\" title=\"Permainan strategi berbasis giliran\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">strategi</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;dua orang yang dimainkan pada sebuah papan kotak-kotak yang terdiri dari 64 kotak, yang disusun dalam petak 8×8, yang terbagi sama rata (masing-masing 32 kotak) dalam kelompok warna putih dan hitam.</span><sup id=\"cite_ref-EB1911_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Catur#cite_note-EB1911-1\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;Permainan ini dimainkan oleh jutaan orang di seluruh dunia. Catur diyakini berasal dari permainan India,&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Chaturanga\" class=\"mw-redirect\" title=\"Chaturanga\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">chaturanga</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(yang menjadi asal nama&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">catur</i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">), sekitar abad ke-7. Chaturanga juga diperkirakan merupakan nenek moyang dari permainan strategi serupa yang berasal dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Dunia_Timur\" title=\"Dunia Timur\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Dunia Timur</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">, seperti&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Xiangqi\" title=\"Xiangqi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">xiangqi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Cina),&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Janggi\" title=\"Janggi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">janggi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Korea), dan&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Shogi\" class=\"mw-redirect\" title=\"Shogi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">shogi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Jepang). Catur mencapai Eropa pada abad ke-9, saat terjadi&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Penaklukan_Hispania_oleh_Umayyah\" title=\"Penaklukan Hispania oleh Umayyah\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">penaklukan Hispania oleh Umayyah</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">. Buah-buah catur tersebut diperkirakan mendapat bentuknya yang dikenal saat ini pada akhir abad ke-15 di Spanyol, sedangkan aturan catur modern distandardisasi pada abad ke-19.</span>', 'fto1.jpg', NULL, NULL, NULL, NULL, '0', NULL, '2024-06-08 06:22:32', '2024-06-08 08:00:51'),
(5, 4, 'Anim nostrum aut tem', '<b style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">Catur</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(serapan dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Bahasa_Sanskerta\" title=\"Bahasa Sanskerta\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Sanskerta</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">:&nbsp;</span><span lang=\"sa\" style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">चतुरङ्ग</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">,&nbsp;</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 11.9px;\"><abbr title=\"transliterasi\" style=\"border-bottom-width: 0px; border-bottom-style: initial;\">translit.</abbr>&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><span title=\"Sanskerta-language romanization\"><i lang=\"sa-Latn\">caturaṅga</i></span></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">) adalah&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_papan\" title=\"Permainan papan\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">permainan papan</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_strategi_berbasis_giliran\" class=\"mw-redirect\" title=\"Permainan strategi berbasis giliran\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">strategi</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;dua orang yang dimainkan pada sebuah papan kotak-kotak yang terdiri dari 64 kotak, yang disusun dalam petak 8×8, yang terbagi sama rata (masing-masing 32 kotak) dalam kelompok warna putih dan hitam.</span><sup id=\"cite_ref-EB1911_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Catur#cite_note-EB1911-1\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;Permainan ini dimainkan oleh jutaan orang di seluruh dunia. Catur diyakini berasal dari permainan India,&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Chaturanga\" class=\"mw-redirect\" title=\"Chaturanga\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">chaturanga</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(yang menjadi asal nama&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">catur</i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">), sekitar abad ke-7. Chaturanga juga diperkirakan merupakan nenek moyang dari permainan strategi serupa yang berasal dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Dunia_Timur\" title=\"Dunia Timur\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Dunia Timur</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">, seperti&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Xiangqi\" title=\"Xiangqi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">xiangqi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Cina),&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Janggi\" title=\"Janggi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">janggi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Korea), dan&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Shogi\" class=\"mw-redirect\" title=\"Shogi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">shogi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Jepang). Catur mencapai Eropa pada abad ke-9, saat terjadi&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Penaklukan_Hispania_oleh_Umayyah\" title=\"Penaklukan Hispania oleh Umayyah\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">penaklukan Hispania oleh Umayyah</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">. Buah-buah catur tersebut diperkirakan mendapat bentuknya yang dikenal saat ini pada akhir abad ke-15 di Spanyol, sedangkan aturan catur modern distandardisasi pada abad ke-19.</span>', 'fto1.jpg', NULL, NULL, NULL, NULL, '0', NULL, '2024-06-08 06:22:32', '2024-06-08 08:00:51'),
(6, 4, 'Anim nostrum aut tem', '<b style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">Catur</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(serapan dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Bahasa_Sanskerta\" title=\"Bahasa Sanskerta\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Sanskerta</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">:&nbsp;</span><span lang=\"sa\" style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">चतुरङ्ग</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">,&nbsp;</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 11.9px;\"><abbr title=\"transliterasi\" style=\"border-bottom-width: 0px; border-bottom-style: initial;\">translit.</abbr>&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><span title=\"Sanskerta-language romanization\"><i lang=\"sa-Latn\">caturaṅga</i></span></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">) adalah&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_papan\" title=\"Permainan papan\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">permainan papan</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_strategi_berbasis_giliran\" class=\"mw-redirect\" title=\"Permainan strategi berbasis giliran\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">strategi</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;dua orang yang dimainkan pada sebuah papan kotak-kotak yang terdiri dari 64 kotak, yang disusun dalam petak 8×8, yang terbagi sama rata (masing-masing 32 kotak) dalam kelompok warna putih dan hitam.</span><sup id=\"cite_ref-EB1911_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Catur#cite_note-EB1911-1\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;Permainan ini dimainkan oleh jutaan orang di seluruh dunia. Catur diyakini berasal dari permainan India,&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Chaturanga\" class=\"mw-redirect\" title=\"Chaturanga\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">chaturanga</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(yang menjadi asal nama&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">catur</i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">), sekitar abad ke-7. Chaturanga juga diperkirakan merupakan nenek moyang dari permainan strategi serupa yang berasal dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Dunia_Timur\" title=\"Dunia Timur\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Dunia Timur</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">, seperti&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Xiangqi\" title=\"Xiangqi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">xiangqi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Cina),&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Janggi\" title=\"Janggi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">janggi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Korea), dan&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Shogi\" class=\"mw-redirect\" title=\"Shogi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">shogi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Jepang). Catur mencapai Eropa pada abad ke-9, saat terjadi&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Penaklukan_Hispania_oleh_Umayyah\" title=\"Penaklukan Hispania oleh Umayyah\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">penaklukan Hispania oleh Umayyah</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">. Buah-buah catur tersebut diperkirakan mendapat bentuknya yang dikenal saat ini pada akhir abad ke-15 di Spanyol, sedangkan aturan catur modern distandardisasi pada abad ke-19.</span>', 'fto1.jpg', NULL, NULL, NULL, NULL, '0', NULL, '2024-06-08 06:22:32', '2024-06-08 08:00:51');
INSERT INTO `artikel` (`id`, `kategori_id`, `judul`, `deskripsi`, `image`, `jmlh_view`, `user_create`, `user_update`, `user_delete`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 4, 'Anim nostrum aut tem', '<b style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">Catur</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(serapan dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Bahasa_Sanskerta\" title=\"Bahasa Sanskerta\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Sanskerta</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">:&nbsp;</span><span lang=\"sa\" style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">चतुरङ्ग</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">,&nbsp;</span><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 11.9px;\"><abbr title=\"transliterasi\" style=\"border-bottom-width: 0px; border-bottom-style: initial;\">translit.</abbr>&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><span title=\"Sanskerta-language romanization\"><i lang=\"sa-Latn\">caturaṅga</i></span></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">) adalah&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_papan\" title=\"Permainan papan\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">permainan papan</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Permainan_strategi_berbasis_giliran\" class=\"mw-redirect\" title=\"Permainan strategi berbasis giliran\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">strategi</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;dua orang yang dimainkan pada sebuah papan kotak-kotak yang terdiri dari 64 kotak, yang disusun dalam petak 8×8, yang terbagi sama rata (masing-masing 32 kotak) dalam kelompok warna putih dan hitam.</span><sup id=\"cite_ref-EB1911_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Catur#cite_note-EB1911-1\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;Permainan ini dimainkan oleh jutaan orang di seluruh dunia. Catur diyakini berasal dari permainan India,&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Chaturanga\" class=\"mw-redirect\" title=\"Chaturanga\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">chaturanga</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(yang menjadi asal nama&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">catur</i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">), sekitar abad ke-7. Chaturanga juga diperkirakan merupakan nenek moyang dari permainan strategi serupa yang berasal dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Dunia_Timur\" title=\"Dunia Timur\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Dunia Timur</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">, seperti&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Xiangqi\" title=\"Xiangqi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">xiangqi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Cina),&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Janggi\" title=\"Janggi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">janggi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Korea), dan&nbsp;</span><i style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Shogi\" class=\"mw-redirect\" title=\"Shogi\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">shogi</a></i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;(catur Jepang). Catur mencapai Eropa pada abad ke-9, saat terjadi&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Penaklukan_Hispania_oleh_Umayyah\" title=\"Penaklukan Hispania oleh Umayyah\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">penaklukan Hispania oleh Umayyah</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">. Buah-buah catur tersebut diperkirakan mendapat bentuknya yang dikenal saat ini pada akhir abad ke-15 di Spanyol, sedangkan aturan catur modern distandardisasi pada abad ke-19.</span>', 'fto1.jpg', NULL, NULL, NULL, NULL, '0', NULL, '2024-06-08 06:22:32', '2024-06-08 08:00:51'),
(8, 4, 'Qui quo velit quis e', 'Enim aliquip numquam.<span class=\"comment-copy\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 13px; vertical-align: baseline; box-sizing: inherit; --theme-base-primary-color-h: 27; --theme-base-primary-color-s: 89%; --theme-base-primary-color-l: 48%; --theme-primary-custom-100: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .9))); --theme-primary-custom-200: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .75))); --theme-primary-custom-300: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .5))); --theme-primary-custom-400: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), var(--theme-base-primary-color-l)); --theme-primary-custom-500: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.3))); --theme-primary-custom-600: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.6))); --theme-primary-custom: var(--theme-primary-custom-400); --theme-button-color: initial; --theme-button-hover-color: initial; --theme-button-hover-background-color: initial; --theme-button-active-background-color: initial; --theme-button-selected-color: initial; --theme-button-selected-background-color: initial; --theme-button-outlined-border-color: initial; --theme-button-outlined-selected-border-color: initial; --theme-button-primary-color: initial; --theme-button-primary-active-color: initial; --theme-button-primary-hover-color: initial; --theme-button-primary-selected-color: initial; --theme-button-primary-background-color: initial; --theme-button-primary-active-background-color: initial; --theme-button-primary-hover-background-color: initial; --theme-button-primary-selected-background-color: initial; --theme-background-color: var(--white); --theme-background-position: top left; --theme-background-repeat: repeat; --theme-background-size: auto; --theme-background-attachment: auto; --theme-content-background-color: var(--white); --theme-content-border-color: var(--black-225); --theme-header-background-color: var(--theme-primary); --theme-header-background-position: center left; --theme-header-background-repeat: repeat; --theme-header-background-size: auto; --theme-header-background-border-bottom: 0; --theme-header-link-color: var(--theme-primary); --theme-header-sponsored-color: hsla(0,0%,100%,0.4); --theme-header-foreground-color: transparent; --theme-header-foreground-position: bottom right; --theme-header-foreground-repeat: no-repeat; --theme-header-foreground-size: auto; --theme-footer-background-color: hsl(210,8%,5%); --theme-footer-background-position: top left; --theme-footer-background-repeat: no-repeat; --theme-footer-background-size: auto; --theme-footer-background-border-top: 0; --theme-footer-title-color: var(--black-250); --theme-footer-text-color: var(--black-300); --theme-footer-link-color: var(--black-300); --theme-footer-link-color-hover: var(--black-200); --theme-footer-divider-color: var(--black-500); --theme-footer-padding-top: 0; --theme-footer-padding-bottom: 0; --theme-link-color: initial; --theme-link-color-hover: initial; --theme-link-color-visited: initial; --theme-body-font-family: var(--ff-sans); --theme-body-font-color: var(--black-600); --theme-post-title-font-family: var(--ff-sans); --theme-post-title-color: var(--theme-link-color); --theme-post-title-color-hover: var(--theme-link-color-hover); --theme-post-title-color-visited: var(--theme-link-color-visited); --theme-post-body-font-family: var(--ff-sans); --theme-post-owner-background-color: var(--theme-secondary-100); --theme-post-owner-new-background-color: var(--theme-secondary-200); --theme-topbar-bottom-border: 1px solid var(--black-225); color: rgb(12, 13, 14);\">my current string holds more than 100 characters because is a description provided from user input and information suppose to be shown on the datatable view few characters about 50 characters from the store description in the database</span><span style=\"color: rgb(12, 13, 14); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-size: 13px;\">&nbsp;</span><div class=\"d-inline-flex ai-center\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 13px; vertical-align: baseline; box-sizing: inherit; --theme-base-primary-color-h: 27; --theme-base-primary-color-s: 89%; --theme-base-primary-color-l: 48%; --theme-primary-custom-100: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .9))); --theme-primary-custom-200: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .75))); --theme-primary-custom-300: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .5))); --theme-primary-custom-400: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), var(--theme-base-primary-color-l)); --theme-primary-custom-500: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.3))); --theme-primary-custom-600: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.6))); --theme-primary-custom: var(--theme-primary-custom-400); --theme-button-color: initial; --theme-button-hover-color: initial; --theme-button-hover-background-color: initial; --theme-button-active-background-color: initial; --theme-button-selected-color: initial; --theme-button-selected-background-color: initial; --theme-button-outlined-border-color: initial; --theme-button-outlined-selected-border-color: initial; --theme-button-primary-color: initial; --theme-button-primary-active-color: initial; --theme-button-primary-hover-color: initial; --theme-button-primary-selected-color: initial; --theme-button-primary-background-color: initial; --theme-button-primary-active-background-color: initial; --theme-button-primary-hover-background-color: initial; --theme-button-primary-selected-background-color: initial; --theme-background-color: var(--white); --theme-background-position: top left; --theme-background-repeat: repeat; --theme-background-size: auto; --theme-background-attachment: auto; --theme-content-background-color: var(--white); --theme-content-border-color: var(--black-225); --theme-header-background-color: var(--theme-primary); --theme-header-background-position: center left; --theme-header-background-repeat: repeat; --theme-header-background-size: auto; --theme-header-background-border-bottom: 0; --theme-header-link-color: var(--theme-primary); --theme-header-sponsored-color: hsla(0,0%,100%,0.4); --theme-header-foreground-color: transparent; --theme-header-foreground-position: bottom right; --theme-header-foreground-repeat: no-repeat; --theme-header-foreground-size: auto; --theme-footer-background-color: hsl(210,8%,5%); --theme-footer-background-position: top left; --theme-footer-background-repeat: no-repeat; --theme-footer-background-size: auto; --theme-footer-background-border-top: 0; --theme-footer-title-color: var(--black-250); --theme-footer-text-color: var(--black-300); --theme-footer-link-color: var(--black-300); --theme-footer-link-color-hover: var(--black-200); --theme-footer-divider-color: var(--black-500); --theme-footer-padding-top: 0; --theme-footer-padding-bottom: 0; --theme-link-color: initial; --theme-link-color-hover: initial; --theme-link-color-visited: initial; --theme-body-font-family: var(--ff-sans); --theme-body-font-color: var(--black-600); --theme-post-title-font-family: var(--ff-sans); --theme-post-title-color: var(--theme-link-color); --theme-post-title-color-hover: var(--theme-link-color-hover); --theme-post-title-color-visited: var(--theme-link-color-visited); --theme-post-body-font-family: var(--ff-sans); --theme-post-owner-background-color: var(--theme-secondary-100); --theme-post-owner-new-background-color: var(--theme-secondary-200); --theme-topbar-bottom-border: 1px solid var(--black-225); color: rgb(12, 13, 14); align-items: center !important;\">–&nbsp;<a href=\"https://stackoverflow.com/users/10749546/reuben-wedson\" title=\"69 reputation\" class=\"comment-user owner\" style=\"margin: 0px; padding: 1px 5px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; --_li-fc: var(--theme-link-color, var(--theme-secondary-400)); --_li-fc-hover: var(--theme-link-color-hover, var(--theme-secondary-500)); --_li-fc-visited: var(--theme-link-color-visited, var(--theme-secondary-600)); color: var(--theme-link-color, var(--theme-secondary-400)); cursor: pointer; user-select: auto; box-sizing: inherit; border-radius: var(--br-sm); --theme-base-primary-color-h: 27; --theme-base-primary-color-s: 89%; --theme-base-primary-color-l: 48%; --theme-primary-custom-100: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .9))); --theme-primary-custom-200: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .75))); --theme-primary-custom-300: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + ((100% - var(--theme-base-primary-color-l)) * .5))); --theme-primary-custom-400: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), var(--theme-base-primary-color-l)); --theme-primary-custom-500: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.3))); --theme-primary-custom-600: hsl(var(--theme-base-primary-color-h), var(--theme-base-primary-color-s), calc(var(--theme-base-primary-color-l) + (var(--theme-base-primary-color-l) * -.6))); --theme-primary-custom: var(--theme-primary-custom-400); --theme-button-color: initial; --theme-button-hover-color: initial; --theme-button-hover-background-color: initial; --theme-button-active-background-color: initial; --theme-button-selected-color: initial; --theme-button-selected-background-color: initial; --theme-button-outlined-border-color: initial; --theme-button-outlined-selected-border-color: initial; --theme-button-primary-color: initial; --theme-button-primary-active-color: initial; --theme-button-primary-hover-color: initial; --theme-button-primary-selected-color: initial; --theme-button-primary-background-color: initial; --theme-button-primary-active-background-color: initial; --theme-button-primary-hover-background-color: initial; --theme-button-primary-selected-background-color: initial; --theme-background-color: var(--white); --theme-background-position: top left; --theme-background-repeat: repeat; --theme-background-size: auto; --theme-background-attachment: auto; --theme-content-background-color: var(--white); --theme-content-border-color: var(--black-225); --theme-header-background-color: var(--theme-primary); --theme-header-background-position: center left; --theme-header-background-repeat: repeat; --theme-header-background-size: auto; --theme-header-background-border-bottom: 0; --theme-header-link-color: var(--theme-primary); --theme-header-sponsored-color: hsla(0,0%,100%,0.4); --theme-header-foreground-color: transparent; --theme-header-foreground-position: bottom right; --theme-header-foreground-repeat: no-repeat; --theme-header-foreground-size: auto; --theme-footer-background-color: hsl(210,8%,5%); --theme-footer-background-position: top left; --theme-footer-background-repeat: no-repeat; --theme-footer-background-size: auto; --theme-footer-background-border-top: 0; --theme-footer-title-color: var(--black-250); --theme-footer-text-color: var(--black-300); --theme-footer-link-color: var(--black-300); --theme-footer-link-color-hover: var(--black-200); --theme-footer-divider-color: var(--black-500); --theme-footer-padding-top: 0; --theme-footer-padding-bottom: 0; --theme-link-color: initial; --theme-link-color-hover: initial; --theme-link-color-visited: initial; --theme-body-font-family: var(--ff-sans); --theme-body-font-color: var(--black-600); --theme-post-title-font-family: var(--ff-sans); --theme-post-title-color: var(--theme-link-color); --theme-post-title-color-hover: var(--theme-link-color-hover); --theme-post-title-color-visited: var(--theme-link-color-visited); --theme-post-body-font-family: var(--ff-sans); --theme-post-owner-background-color: var(--theme-secondary-100); --theme-post-owner-new-background-color: var(--theme-secondary-200); --theme-topbar-bottom-border: 1px solid var(--black-225); display: inline-block; text-wrap: nowrap;\">Reuben Wedson</a></div>', 'Diagram batang panen.png', NULL, NULL, NULL, NULL, '0', NULL, '2024-06-08 06:48:20', '2024-06-08 06:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_expired` date NOT NULL,
  `biaya` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_create` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_event`, `kategori_id`, `deskripsi`, `tanggal`, `tanggal_expired`, `biaya`, `image`, `status`, `user_create`, `user_update`, `user_delete`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ea ab quidem ipsa q', 3, 'tes dulu', '1987-09-20', '1991-03-16', 8, NULL, '0', NULL, NULL, NULL, '2024-05-27 03:31:57', '2024-05-27 03:24:27', '2024-05-27 03:31:57'),
(2, 'Elit qui commodo es', 3, 'rerereeeeeeeeeeeeeeeeeeeeeeeee', '1972-03-18', '1985-12-23', 44, NULL, '0', NULL, NULL, NULL, '2024-05-27 04:24:32', '2024-05-27 03:32:12', '2024-05-27 04:24:32'),
(3, 'Dicta quam unde exce', 5, '<span style=\"color: rgb(68, 68, 68); font-family: Karla; font-size: 16px;\">Istilah budaya sudah melekat dan bahkan kerap kali hadir dalam kehidupan sehari-hari. Sebagai warga Indonesia, kamu tentunya tahu bahwa Indonesia mempunyai beraneka ragam budaya yang tersebar di berbagai wilayah. Namun, apakah kamu tahu pengertian budaya,&nbsp;</span>', '1975-07-22', '1994-12-18', 86, 'fto2.jpg', '0', NULL, NULL, NULL, NULL, '2024-05-27 04:24:47', '2024-06-08 08:53:49'),
(4, 'Pariwisata', 6, '<p><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">Jahe diperkirakan merupakan tumbuhan&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Pribumi_(ekologi)\" title=\"Pribumi (ekologi)\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">pribumi</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Asia_Tenggara\" title=\"Asia Tenggara\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Asia Tenggara</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">.</span><sup id=\"cite_ref-:1_3-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://id.wikipedia.org/wiki/Jahe#cite_note-:1-3\" style=\"color: var(--color-progressive,#36c); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[3]</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;Penyebarannya diperkirakan mengikuti&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Migrasi\" title=\"Migrasi\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">migrasi</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;yang dilakukan oleh&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Suku_bangsa_Austronesia\" class=\"mw-redirect\" title=\"Suku bangsa Austronesia\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Suku Bangsa Austronesia</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;pada abad ke-4 SM menyeberangi&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Kepulauan_Melayu\" title=\"Kepulauan Melayu\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Kepulauan Melayu</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;dari&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Tiongkok_Tengah_Selatan\" class=\"mw-redirect\" title=\"Tiongkok Tengah Selatan\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">CIna Tenggara</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;sampai ke&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Taiwan\" title=\"Taiwan\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">Taiwan</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">. Jahe pun menjadi tumbuhan khas wilayah tersebut bersamaan dengan&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Lengkuas\" title=\"Lengkuas\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">lengkuas</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">,&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Temu_putih\" title=\"Temu putih\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">temu putih</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">, dan&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Lempuyang\" title=\"Lempuyang\" style=\"color: var(--color-progressive,#36c); background: none rgb(255, 255, 255); overflow-wrap: break-word; font-family: sans-serif;\">lempuyang</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">.</span><br></p>', '2024-06-01', '2024-06-19', 200000, 'fto2.jpg', '0', NULL, NULL, NULL, NULL, '2024-06-08 08:44:00', '2024-06-08 08:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_layanan`
--

CREATE TABLE `jenis_layanan` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_create` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_layanan`
--

INSERT INTO `jenis_layanan` (`id`, `jenis_layanan`, `status`, `user_create`, `user_update`, `user_delete`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'punten', '0', NULL, NULL, NULL, NULL, '2024-05-27 03:45:43', '2024-05-27 06:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_create` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `status`, `user_create`, `user_update`, `user_delete`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Religius', '0', NULL, NULL, NULL, '2024-05-21 03:46:42', '2024-05-21 03:36:32', '2024-05-21 03:46:42'),
(2, 'Pariwisata', '0', NULL, NULL, NULL, '2024-05-21 03:49:05', '2024-05-21 03:49:02', '2024-05-21 03:49:05'),
(3, 'Pariwisata', '0', NULL, NULL, NULL, '2024-05-27 03:46:46', '2024-05-21 03:49:17', '2024-05-27 03:46:46'),
(4, 'agama', '0', NULL, NULL, NULL, NULL, '2024-05-27 03:46:57', '2024-06-08 06:18:34'),
(5, 'Budaya', '0', NULL, NULL, NULL, NULL, '2024-06-08 08:40:07', '2024-06-08 08:40:07'),
(6, 'Pariwisata', '0', NULL, NULL, NULL, NULL, '2024-06-08 08:40:16', '2024-06-08 08:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nope` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisKomentar` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `nope`, `pesan`, `jenisKomentar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Deleniti vel totam e', 'huzutij@mailinator.com', 'Recusandae Vitae si', 'mantap sekali', '0', NULL, '2024-06-08 22:26:10', '2024-06-08 22:26:10'),
(2, 'Dolore asperiores eo', 'jibu@mailinator.com', 'Cumque vel similique', 'Autem hic eu dolore', '0', NULL, '2024-06-08 22:26:30', '2024-06-08 22:26:30'),
(3, 'Sed earum rerum dolo', 'zehoz@mailinator.com', 'Veritatis hic sed nu', 'Possimus quis dolor', '0', NULL, '2024-06-08 22:26:49', '2024-06-08 22:26:49'),
(4, 'Sed earum rerum dolo', 'zehoz@mailinator.com', 'Veritatis hic sed nu', 'Possimus quis dolor', '0', NULL, '2024-06-08 22:27:23', '2024-06-08 22:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_frame` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `jenis_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_create` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama_layanan`, `deskripsi`, `image`, `jenis_frame`, `jenis_layanan`, `status`, `user_create`, `user_update`, `user_delete`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Layanan Vaksin', 'dsdsdsdsdsds', 'indah 1.jpg', '0', '1', '0', NULL, NULL, NULL, NULL, '2024-05-27 04:22:19', '2024-06-08 20:19:27'),
(3, 'Layanan SIM', 'dsdsdsdsdsds', 'indah 1.jpg', '1', '1', '0', NULL, NULL, NULL, NULL, '2024-05-27 04:22:19', '2024-06-08 20:20:32'),
(4, 'Layanan KTP', 'dsdsdsdsdsds', 'jahe.jpeg', '0', '1', '0', NULL, NULL, NULL, NULL, '2024-05-27 04:22:19', '2024-06-08 20:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_20_160350_create_kategori_table', 1),
(10, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(11, '2014_10_12_000000_create_users_table', 4),
(12, '2024_05_20_155906_create_artikel_table', 5),
(13, '2024_05_20_160444_create_event_table', 5),
(14, '2024_05_27_103421_create_jenis_layanan_table', 6),
(15, '2024_05_20_160843_create_layanan_table', 7),
(16, '2024_06_09_051231_create_komentar_table', 8),
(17, '2024_06_09_053925_create_profile_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah_singkat` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nope` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `alamat`, `sejarah_singkat`, `email`, `nope`, `ig`, `yt`, `fb`, `twite`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Et reprehenderit la', 'Quas dolores ea ad s', 'duzicuku@mailinator.com', 'Laboris architecto u', 'Placeat voluptatum', 'Ut lorem in deserunt', 'Consequat Hic dolor', 'Quia labore sed reru', '2024-06-08 23:57:36', '2024-06-08 23:00:47', '2024-06-08 23:57:36'),
(2, 'jl.cipta karya', 'sejarah singkat', 'serbagunakali@gmail.com', '085321069067', NULL, NULL, NULL, NULL, NULL, '2024-06-08 23:57:57', '2024-06-08 23:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mhd ali usman', 'admin', 'admin@gmail.com', NULL, '$2y$10$x0UW5UWBPsE0YQUiC/KvPewei.I2pBrTlSvMbqwD/thxKnIOXFWlW', NULL, '2024-05-22 08:08:27', '2024-05-22 08:08:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
