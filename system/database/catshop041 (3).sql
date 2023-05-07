-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Bulan Mei 2023 pada 17.16
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catshop041`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories041`
--

CREATE TABLE `categories041` (
  `cate_id_041` int NOT NULL,
  `cate_name_041` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `description_041` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `categories041`
--

INSERT INTO `categories041` (`cate_id_041`, `cate_name_041`, `description_041`) VALUES
(1, 'Anggora', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit duis tristique.'),
(2, 'Persia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit duis tristique.'),
(3, 'Domestic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit duis tristique.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cats041`
--

CREATE TABLE `cats041` (
  `id_041` int NOT NULL,
  `name_041` varchar(100) NOT NULL,
  `type_041` varchar(100) NOT NULL,
  `gender_041` varchar(10) NOT NULL,
  `age_041` int NOT NULL,
  `price_041` int NOT NULL,
  `sold_041` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `cats041`
--

INSERT INTO `cats041` (`id_041`, `name_041`, `type_041`, `gender_041`, `age_041`, `price_041`, `sold_041`) VALUES
(1, 'kiti', 'Anggora', 'Male', 3, 10, 0),
(3, 'robin', 'Anggora', 'Female', 4, 9, 1),
(4, 'cilu', 'Domestic', 'Female', 5, 20, 1),
(5, 'jack', 'Domestic', 'Female', 4, 11, 0),
(6, 'kila', 'Persia', 'Male', 5, 1000, 0),
(7, 'kils', 'Anggora', 'Female', 3, 6, 0),
(8, 'baba', 'Persia', 'Male', 2, 5, 0),
(9, 'robin', 'Persia', 'Female', 4, 7, 0),
(10, 'Ucok', 'Domestic', 'Female', 3, 7, 0),
(11, 'lulu', 'Persia', 'Male', 6, 9, 0),
(12, 'bibi', 'Anggora', 'Female', 2, 6, 0),
(13, 'biba', 'Persia', 'Male', 4, 5, 0),
(14, 'bubi', 'Anggora', 'Female', 5, 8, 0),
(15, 'dadi', 'Anggora', 'Male', 3, 6, 0),
(16, 'didi', 'Persia', 'Male', 5, 12, 0),
(17, 'ghia', 'Persia', 'Male', 4, 7, 0),
(18, 'buna', 'Anggora', 'Female', 4, 11, 0),
(19, 'nabil', 'Persia', 'Female', 4, 6, 0),
(20, 'bubul', 'Domestic', 'Male', 5, 7, 0),
(21, 'rubi', 'Persia', 'Male', 3, 12, 0),
(22, 'rabi', 'Persia', 'Female', 4, 9, 0),
(23, 'Kiti', 'Anggora', 'Male', 3, 6, 0),
(24, 'jack', 'Persia', 'Male', 6, 9, 0),
(25, 'buba', 'Anggora', 'Female', 5, 7, 0),
(26, 'Ucok', 'Domestic', 'Male', 3, 4, 0),
(27, 'lila', 'Domestic', 'Female', 3, 6, 0),
(28, 'nani', 'Domestic', 'Male', 3, 5, 0),
(29, 'dea', 'Persia', 'Male', 4, 5, 0),
(30, 'hida', 'Persia', 'Male', 3, 6, 0),
(31, 'bila', 'Anggora', 'Female', 3, 7, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catseles041`
--

CREATE TABLE `catseles041` (
  `sale_id_041` int NOT NULL,
  `sale_date_041` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cat_id_041` int NOT NULL,
  `customer_name_041` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `customer_address_041` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `customer_phone_041` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `catseles041`
--

INSERT INTO `catseles041` (`sale_id_041`, `sale_date_041`, `cat_id_041`, `customer_name_041`, `customer_address_041`, `customer_phone_041`) VALUES
(1, '2023-03-27 18:44:01', 3, 'ujang', 'bandung', '0851238542'),
(2, '2023-03-27 21:03:15', 4, 'baba', 'majalengka', '0851414141');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid_041` int NOT NULL,
  `username_041` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password_041` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `usertype_041` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `fullname_041` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `photo_041` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid_041`, `username_041`, `password_041`, `usertype_041`, `fullname_041`, `photo_041`) VALUES
(1, 'admin', '$2y$10$MEY/tqDP9c3NdeNOV5tyx.SEhjDjvEgS/SROBPSqsssCiaHCDBb1S', 'Manager', 'Admin1', 'pngwing_com_(2).png'),
(2, 'maman', '$2y$10$W7Fyr0Qk6K73Ob5chVdpk.SocZBBe2d5R71kUjpie4qN8Ib0OCQMm', 'Cashier', 'mamann', 'pngwing_com.png'),
(3, 'wawan', '$2y$10$4Rt5ygYpD6/RJ3K/Hx1KtOoKbqs7eg..4YiRkdRbO14bdmznZyi7e', 'Cashier', 'wawanni', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users041`
--

CREATE TABLE `users041` (
  `userid_041` int NOT NULL,
  `username_041` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password_041` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `usertype_041` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `fullname_041` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users041`
--

INSERT INTO `users041` (`userid_041`, `username_041`, `password_041`, `usertype_041`, `fullname_041`) VALUES
(5, 'admin', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'Manager', 'Admin1'),
(6, 'ujang', '$2y$10$lwzM2uzvv50SBBnpELeDuupupAdFMKHAeRWyWI1WPCl', 'Cashier', 'ujangg'),
(7, 'maman', '$2y$10$Pba1y0geZmTWF1OPwdloQeqfBwlScPZ7ghwKcy.CabR', 'Manager', 'mamann'),
(9, 'wawan', 'Manager', 'Manager', 'wawann'),
(10, 'nana', '$2y$10$H6jmmluPzhfR06ssJsliSu8L7aD4Vc9GVXU7WsqBbQ6', 'Manager', 'nana nini');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories041`
--
ALTER TABLE `categories041`
  ADD PRIMARY KEY (`cate_id_041`);

--
-- Indeks untuk tabel `cats041`
--
ALTER TABLE `cats041`
  ADD PRIMARY KEY (`id_041`);

--
-- Indeks untuk tabel `catseles041`
--
ALTER TABLE `catseles041`
  ADD PRIMARY KEY (`sale_id_041`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid_041`);

--
-- Indeks untuk tabel `users041`
--
ALTER TABLE `users041`
  ADD PRIMARY KEY (`userid_041`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories041`
--
ALTER TABLE `categories041`
  MODIFY `cate_id_041` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `cats041`
--
ALTER TABLE `cats041`
  MODIFY `id_041` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `catseles041`
--
ALTER TABLE `catseles041`
  MODIFY `sale_id_041` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid_041` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users041`
--
ALTER TABLE `users041`
  MODIFY `userid_041` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
