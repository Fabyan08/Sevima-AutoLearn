-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 03.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autolearn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanya`
--

CREATE TABLE `tanya` (
  `id_tanya` int(100) NOT NULL,
  `pesan` varchar(2000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanya`
--

INSERT INTO `tanya` (`id_tanya`, `pesan`, `tanggal`) VALUES
(244, 'cara makan iga sapi', '2023-06-25'),
(245, 'cara makan iga sapi', '2023-06-25'),
(246, 'cara makan iga sapi', '2023-06-25'),
(247, 'cara menjadi siswa teladan', '2023-06-25'),
(248, 'cara menjadi siswa yang teladan', '2023-06-25'),
(249, 'Siapa presiden Indonesia saat ini?', '2023-06-25'),
(250, 'Siapa presiden Indonesia saat ini?', '2023-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_hp` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `no_hp`, `password`, `gambar`, `level`) VALUES
(4, 'fabyan', 'fabyan', 'fabyan@gmail.com', '081290192912', '08186241cdc503842859a3bbbf51ca65', 'user.jpg', 'admin'),
(6, 'fab', 'anjayyy', 'fab@gmail.com', '0812912821', '79193aac5d84bc93e3525109a05dc27c', 'user.jpg', 'siswa'),
(7, 'f', 'kelas', 'f@gmail.com', '021920910', 'dccfde041c72e2ac71b9e9de4195d7e7', '855-user2.jpg', 'siswa'),
(8, 'z', 'z', 'z@gmail.com', '08129128291', '839ad0a86347fe9f6b8d16123d098287', '165-user2.jpg', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tanya`
--
ALTER TABLE `tanya`
  ADD PRIMARY KEY (`id_tanya`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tanya`
--
ALTER TABLE `tanya`
  MODIFY `id_tanya` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
