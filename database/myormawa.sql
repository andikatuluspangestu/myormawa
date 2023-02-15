-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2023 at 04:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myormawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id` int(11) NOT NULL,
  `acara` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` text NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `pendaftaran` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id`, `acara`, `tanggal`, `waktu`, `lokasi`, `biaya`, `pendaftaran`, `deskripsi`) VALUES
(1, 'Seminar SERKOM 2023', '2023-03-16', '09:00:00', 'Kampus UBSI Tegal', '20000', 'http://bit.ly/daftar', 'Pelatihan Codeigniter 3, untuk Persiapan Ujian SERKOM mahasiswa semester 5 jurusan sistem informasi');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT 'default.jpg',
  `nama_lengkap` varchar(255) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `divisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('dibaca','belumdibaca') NOT NULL DEFAULT 'belumdibaca'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id`, `nama`, `email`, `isi`, `tanggal`, `status`) VALUES
(3, 'Bang Dodo', 'dodo@gmail.com', 'HIMSI artinya apa bang messi?', '2023-01-27', ''),
(4, 'Bang Messi', 'messi@gmail.com', 'Tes', '2023-01-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  `proker` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`, `proker`) VALUES
(1, 'Ketua Organisasi', '-'),
(2, 'Wakil Ketua', NULL),
(3, 'Sekretaris', NULL),
(4, 'Bendahara', NULL),
(5, 'Hubungan Masyarakat - HUMAS', NULL),
(6, 'Penelitian & Pengembangan - LITBANG', 'http://bit.ly/3Xz0zBY'),
(7, 'Dokumentasi', NULL),
(8, 'Sarana & Prasarana', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_kerja`
--

CREATE TABLE `program_kerja` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` enum('belumselesai','selesai') DEFAULT 'belumselesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_kerja`
--

INSERT INTO `program_kerja` (`id`, `kegiatan`, `periode`, `lokasi`, `detail`, `status`) VALUES
(4, 'Pelantikan Pengurus HIMSI 2023', 'Februari 2023', 'Kampus UBSI Kota Tegal', 'https://docs.google.com/spreadsheets/d/18lVp8MAPHrcgYv4_birtH4Zp3MBDOkdW/edit#gid=554238041', 'belumselesai'),
(5, 'Berbagi Takjil & Buka Bersama - Ramadhan 1444 H', 'April 2023', 'Kota Tegal - Sekitarnya', 'https://docs.google.com/spreadsheets/d/18lVp8MAPHrcgYv4_birtH4Zp3MBDOkdW/edit#gid=554238041', 'belumselesai'),
(6, 'Seminar \"Kunci Sukses menghadapi Sertikom\"', 'Mei 2023', 'Kampus UBSI Kota Tegal', '-', 'belumselesai'),
(7, 'Webinar Perkenalan Karir IT untuk industri ', 'Juni 2023', 'Online - Zoom Meeting', '-', 'belumselesai'),
(8, 'Study Club', 'Juni - Desember 2023', 'Kampus UBSI Kota Tegal', '-', 'belumselesai'),
(12, 'Seminar Profesionalisme Prodi Sistem Informasi ', 'September 2023', 'Kampus UBSI Kota Tegal', '-', 'belumselesai'),
(13, 'Pengabdian Masyarakat', 'Oktober 2023', 'Kota Tegal - Sekitarnya', '-', 'belumselesai'),
(14, 'Workshop UI/UX Design', 'November 2023', 'Kampus UBSI Kota Tegal', '-', 'belumselesai'),
(15, 'Open Recruitment HIMSI 2024', 'Desember 2023', 'Kampus UBSI Kota Tegal', '-', 'belumselesai');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` int(11) NOT NULL,
  `judul` varchar(512) NOT NULL,
  `ketua_panitia` varchar(512) NOT NULL,
  `tanggal_mulai_kegiatan` date NOT NULL,
  `tanggal_selesai_kegiatan` date NOT NULL,
  `deskripsi_kegiatan` text DEFAULT NULL,
  `status` enum('Belum Diterima','Diterima','Ditolak') NOT NULL,
  `file_proposal` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `judul`, `ketua_panitia`, `tanggal_mulai_kegiatan`, `tanggal_selesai_kegiatan`, `deskripsi_kegiatan`, `status`, `file_proposal`) VALUES
(9, 'Rencana Pembuatan Aplikasi HIMSI', 'Andika Tulus Pangestu', '2023-02-15', '2023-03-31', '-', 'Belum Diterima', 'RencanaPembuatanAplHIMSI1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `ruangan` varchar(512) NOT NULL,
  `kegiatan` varchar(512) NOT NULL,
  `tgl_mulai` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `ruangan`, `kegiatan`, `tgl_mulai`, `tgl_selesai`) VALUES
(5, 'Ruang 302', 'Workshop UI/UX Design', '2023-02-20 12:00:00', '2023-02-20 15:00:00'),
(6, 'Aula Kampus', 'Seminar Profesionalisme Prodi Sistem Informasi', '2023-02-15 02:00:00', '2023-02-15 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `title_website` varchar(255) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `sejarah` text NOT NULL,
  `visimisi` text NOT NULL,
  `struktur` varchar(255) DEFAULT 'default.jpg',
  `email` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `tiktok` text DEFAULT NULL,
  `twitter` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `title_website`, `deskripsi`, `sejarah`, `visimisi`, `struktur`, `email`, `instagram`, `tiktok`, `twitter`) VALUES
(1, 'HIMSI Universitas BSI Tegal', '', ' HIMSI adalah sebagai salah satu wadah organisasi yang sangat dibutuhkan oleh seluruh mahasiswa Sistem Informasi Universitas Bina Sarana Informatika untuk mencurahkan ide-ide brilian dan mengembangkan kemampuan mereka dalam menguasai materi-materi informatika, dan mengembangkan kreativitas yang tidak hanya bersifat teoritis, sehingga mereka menjadi akademisi yang profesional dan patut diteladani. Pada tanggal 31 januari HIMSI UBSI Secara resmi berdiri menurut SK No.601/1.02/UBSI/I/2019 oleh REKTOR UBSI. ', '-', 'default.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL DEFAULT '1921684301',
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `password_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `role`, `created_at`, `last_login`, `password_updated_at`) VALUES
('1921684301', 'Yuanita Rahma Putri', 'yuanita@gmail.com', 'yuanitarahma', '$2y$10$50IneFhSondyJzjP6UFJOe0P8aHyy6U7VOUdOngHvln028GzOZTO.', NULL, 2, '2023-01-27 09:10:01', '2023-02-10 21:34:33', '2023-01-27 16:10:01'),
('2pjzwgdGDt', 'Andika Tulus Pangestu', 'andikatulusp@gmail.com', 'andikatulusp', '$2y$10$qEpSbex5NL44s7kHeWowJ.kf/lGk3.mF3NTq8mJc.Fd8DjbFqyUo6', 'default.jpg', 1, '0000-00-00 00:00:00', '2023-02-14 20:15:32', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisi` (`divisi`);

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_kerja`
--
ALTER TABLE `program_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `program_kerja`
--
ALTER TABLE `program_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id`);

--
-- Constraints for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD CONSTRAINT `aspirasi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `divisi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
