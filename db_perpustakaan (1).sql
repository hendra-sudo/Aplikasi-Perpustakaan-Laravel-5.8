-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 04:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_anggota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `kode_anggota`, `nama`, `jurusan`, `angkatan`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'KA 01', 'Naufal Farid Setiyawan', 'Rekayasa Perangkat Lunak', '2019/2021', 'Jelbuk', '2020-08-27 17:18:00', '2020-12-30 19:58:18'),
(2, 'KA 02', 'Acep', 'Rekayasa Perangkat Lunak', '2019/2021', 'Kebonsari', '2020-08-29 22:45:50', '2020-12-30 19:58:38'),
(3, 'KA 03', 'Umar', 'Rekayasa Perangkat Lunak', '2019/2021', 'Bwi', '2020-08-29 22:46:09', '2020-12-30 19:58:57'),
(4, 'KA 04', 'cinta', 'Rekayasa Perangkat Lunak', '2019/2021', 'Panjaitan', '2020-08-29 22:46:30', '2020-12-30 19:59:25'),
(5, 'KA 05', 'dandi', 'Rekayasa Perangkat Lunak', '2019/2021', 'jember', '2020-08-29 22:47:05', '2020-12-30 19:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `created_at`, `updated_at`) VALUES
(1, 'KB 001', 'mm', 'm', 'mmm', '2020', '2020-08-27 16:35:57', '2020-08-27 17:43:58'),
(2, 'KB 002', 'pp', 'p', 'ppp', '2020', '2020-08-29 23:46:37', '2020-08-29 23:46:37'),
(3, 'KB 003', 'aa', 'a', 'aaa', '2017', '2020-08-29 23:47:01', '2020-08-29 23:47:01'),
(4, 'KB 004', 'yy', 'y', 'yyy', '2010', '2020-08-29 23:47:23', '2020-08-29 23:47:23'),
(5, 'KB 005', 'ee', 'e', 'eee', '1990', '2020-08-29 23:47:43', '2020-08-29 23:47:43'),
(6, 'KB 006', 'ii', 'i', 'iii', '2003', '2020-08-29 23:47:56', '2020-08-29 23:47:56'),
(7, 'KB 007', 'tt', 't', 'ttt', '2004', '2020-08-29 23:48:18', '2020-08-29 23:48:18'),
(8, 'KB 008', 'uu', 'u', 'uuu', '2007', '2020-08-29 23:48:42', '2020-08-29 23:48:42'),
(9, 'KB 009', 'oo', 'o', 'ooo', '1945', '2020-08-29 23:51:01', '2020-08-29 23:51:01'),
(10, 'KB 010', 'kk', 'k', 'kkk', '1890', '2020-08-29 23:52:46', '2020-08-29 23:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_07_121004_create_siswa_table', 1),
(4, '2020_08_08_085907_create_pustakawan_table', 2),
(5, '2020_08_08_090329_create_buku_table', 3),
(6, '2020_08_08_090524_create_peminjaman_table', 4),
(7, '2020_08_08_090703_create_pengembalian_table', 5),
(8, '2020_08_26_234222_create_petugas_table', 6),
(9, '2020_08_26_235257_create_peminjaman_table', 7),
(10, '2020_08_26_235611_create_pengembalian_table', 8),
(11, '2020_08_26_235904_create_buku_table', 9),
(12, '2020_08_27_000113_create_rak_table', 10),
(13, '2020_08_27_000208_create_anggota_table', 11),
(14, '2020_08_27_002228_create_buku_table', 12),
(15, '2020_08_27_010231_create_buku_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pinjam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_petugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_anggota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_buku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_pinjam`, `tgl_pinjam`, `tgl_kembali`, `kode_petugas`, `kode_anggota`, `kode_buku`, `created_at`, `updated_at`) VALUES
(1, '0001', '8 Agustus 2020', '14 Agustus 2020', 'KP 01', 'KA 01', 'KB 001', '2020-08-27 18:02:56', '2020-08-27 18:02:56'),
(2, '0002', '28 agustus 2020', '5 september 2020', 'KP 01', 'KA 01', 'KB 003', '2020-08-29 22:10:26', '2020-08-29 22:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kembali` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jatuh_tempo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denda_per_hari` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_hari` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_petugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_anggota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_buku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `kode_kembali`, `tgl_kembali`, `jatuh_tempo`, `denda_per_hari`, `jumlah_hari`, `total`, `kode_petugas`, `kode_anggota`, `kode_buku`, `created_at`, `updated_at`) VALUES
(2, '0001', '14 Agustus 2020', '14 Agustus 2020', '3000', '5 hari', '15.000', 'KP 01', 'KA 01', 'KB 001', '2020-08-27 18:23:24', '2020-08-27 18:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_petugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_tugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `kode_petugas`, `nama`, `jabatan`, `jam_tugas`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'KP 01', 'Naufal Farid Setiyawan', 'Administator', '08.00-12.00', '089632994007', 'Jember', '2020-08-27 16:51:29', '2020-12-30 20:00:07'),
(2, 'KP 02', 'Christian Adi', 'Administator', '12.00-16.30', '085760692726', 'Jember', '2020-08-29 23:50:21', '2020-12-30 20:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_rak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_rak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_buku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id`, `kode_rak`, `nama_rak`, `kode_buku`, `created_at`, `updated_at`) VALUES
(1, 'KR 01', 'Ensiklopedia', 'KB 001, KB 002, KB 003, KB 004', '2020-08-27 17:42:12', '2020-08-27 17:42:12'),
(2, 'KR 02', 'Fiksi', 'KB 005, KB 006', '2020-08-30 00:20:52', '2020-08-30 00:20:52'),
(3, 'KR 03', 'Technologi Industri', 'KB 007, KB 008, KB 009, KB 010', '2020-08-30 00:23:47', '2020-08-30 00:23:47'),
(4, '123', 'here', '123', '2020-12-25 02:45:30', '2020-12-25 02:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'naufalfarid', 'adminperpus@info.com', NULL, '$2y$10$wwOvcjKFhYXGJ.JZt.bvU.G0jwPcEzPrcMBlz.S13O.RADYHio6xG', NULL, '2020-08-08 07:07:20', '2020-08-08 07:07:20'),
(2, 'mustika arum', 'admin@info.com', NULL, '$2y$10$4d.XxKg1/tAkjecLZR2Re.xIn9qA0h6Kphve2Q/jNU/EA52G4JNpS', NULL, '2020-08-09 03:05:21', '2020-08-09 03:05:21'),
(3, 'naufal', 'adminaplikasi@info.com', NULL, '$2y$10$hiD6BzFgr80Xmp0rY25tOuooqbuEdqD9kVDLH25LL40bmQ4Yjf7L2', NULL, '2020-08-10 01:02:59', '2020-08-10 01:02:59'),
(4, 'admin', 'admin@gmail.com', NULL, '$2y$10$EzqtLeUWO9L5erNfBBlQf.E4Z5pZhgIwdUzV7P/aW8oMUoWOd6a9q', NULL, '2020-12-21 18:02:42', '2020-12-21 18:02:42'),
(5, 'hendra', 'hendra@gmail.com', NULL, '$2y$10$d9cSDc3av/BKAbYwvW41RenP9YF6lhm.tBy2vAHWWbGqqtiVJL6dW', NULL, '2020-12-25 02:43:56', '2020-12-25 02:43:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
