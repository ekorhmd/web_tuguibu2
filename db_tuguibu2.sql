-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2022 pada 16.42
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tuguibu2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akademik`
--

CREATE TABLE `akademik` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `tanggal1` date NOT NULL,
  `tanggal2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akademik`
--

INSERT INTO `akademik` (`id`, `kegiatan`, `tanggal1`, `tanggal2`) VALUES
(1, 'coba', '2022-01-02', '2022-01-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `title`, `body`, `date`) VALUES
(1, 'Judul Berita', '<p>Lorem ipsum <b>dolor sit amet</b> consectetur, <u>adipisicing elit</u>. <i>Illum</i> <i>magnam cum commodi</i> laborum porro asperi<span style=\"background-color: rgb(255, 0, 0);\">ores laudant</span>ium ipsum nulla dolorem quos autem, perferendis officia quis delectus magni, quia eius architecto quasi!</p><div><br></div>', '2022-01-06 07:51:12'),
(2, 'Berita Kedua', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque cum nisi autem dolor reiciendis consectetur delectus, illo repellendus recusandae necessitatibus suscipit quo officia similique dolores, optio doloremque, impedit minus sapiente.</p><p>Nihil recusandae voluptas aperiam accusantium, dolorum dignissimos labore dicta necessitatibus odit fugiat enim, expedita cumque incidunt sequi veniam corporis debitis repellat voluptatem repudiandae harum in eveniet? Necessitatibus, dicta? Quod, modi.</p><p>Quia, hic autem! Architecto dolorum dolor similique adipisci culpa illum molestiae. Qui inventore debitis illo obcaecati aliquam ipsa at voluptate ullam sequi aperiam, deleniti quos? Pariatur repudiandae officia ipsum aperiam.</p><p>Deserunt voluptatem natus officiis eaque consequatur repudiandae nihil reiciendis commodi sint voluptates incidunt, itaque placeat accusamus delectus similique ab voluptas, fugiat aperiam. Odio, blanditiis ea sint quaerat amet reprehenderit veritatis.</p><p>Officiis modi labore esse deleniti porro dicta quo dolorum cupiditate dolores laboriosam? Quasi, quibusdam, itaque quidem, rerum sed recusandae beatae amet temporibus ad molestias enim minima atque harum reiciendis optio.</p>', '2022-01-06 07:55:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mapel1` varchar(100) DEFAULT NULL,
  `mapel2` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `mapel1`, `mapel2`, `jabatan`, `alamat`, `notelp`, `image`, `priority`) VALUES
(1, 'Dra. Hj. Ita Nur\'asita, M.M', 'Jakarta', '1962-10-31', '-', '-', 'Kepala Sekolah', 'Perum Griya Asri Blok F2 - 16 Depok', '082147142275', 'bu-ita-kepsek.jpg', 1),
(2, 'Asep Umar Mustofa, S.Pd.I', 'Tasikmalaya', '1981-07-02', 'Pendidikan Agama Islam', 'Bahasa Sunda', 'Wakil Kepala Sekolah Bidang Kesiswaan', 'Komp. Koperasi Blok C 67. Cimanggis, Depok', '085691441571', '', 2),
(4, 'Sri Indriastuti, S.E, S.Pd', 'Bogor', '1966-08-06', 'Ilmu Pengetahuan Sosial', '-', 'Guru', 'BTN TNI AD Jl. Enau Blok F3/7 Sukmajaya Baru', '087784449690', 'Ibu_Sri_Indri.jpeg', 4),
(5, 'Iif Rif’ah', 'Jakarta', '1970-05-06', 'Seni Budaya dan Prakarya', '-', 'Guru', 'Jl. Cisadane VII Depok II Tengah', '082113654530', 'Bu_Iif.jpg', 4),
(6, 'Siti Maharani, S.Pd', 'Jakarta', '1982-09-28', 'Ilmu Pengetahuan Alam', '-', 'Guru', 'Kp. Tipar RT 05/08 No. 186 Mekarsari, Cimanggis, Depok', '08567922839', 'Ibu_Rani.jpg', 4),
(7, 'Sigit Ari Widagdo, S.Or', 'Jakarta', '1994-05-28', 'Pendidikan Jasmani dan Olahraga', 'Pendidikan Pancasila dan Kewarganegaraan', 'Guru', 'Jl. Pekapuan Gg. Mandor Tapos', '081717785297', 'Pak_Sigit.jpeg', 4),
(8, 'Bohari Muslim, S.Pd', 'Bekasi', '1991-09-10', 'Bahasa Indonesia', '-', 'Guru', 'Jl. Nusa Indah IX Blok C13 No.12 Jati Asih', '081219345596', 'Pak_Bohari.jpeg', 4),
(9, 'Bambang Agus Setiawan, S.Pd', 'Jakarta', '7968-08-14', 'Bahasa Inggris', '-', 'Guru', 'Kp. Parung Serab RT 04/05 No 56 Depok', '081291279551', 'Pak_Bambang.jpeg', 4),
(10, 'Heru Purwanto, S.Pd', 'Jakarta', '1968-05-16', 'BP/BK', '-', 'Guru', 'BTN TNI AD Jl. Enau Blok F3/7 Sukmajaya Baru', '089517527057', 'Pak_Heru.jpg', 4),
(11, 'Ngatman, S.Pd., M.M', 'Boyolali', '0964-02-07', 'Pendidikan Agama Kristen', '-', 'Guru', 'Rawageni RT 01/01, Pancoran Mas, Depok', '081514455735', 'Pak_Ngatman.jpeg', 4),
(12, 'Anniza Yulandari, S.M', 'Jakarta', '1999-09-24', '-', '-', 'Tata Usaha', 'Jl. Gandaria 1 No. 64 Rt 07/02 Pekayon, Pasar Rebo', '085719636492', 'Anniza1.jpeg', 5),
(21, 'Suko Hadi, S.Pd', 'Kediri', '1973-09-26', 'Matematika', '-', 'Wakil Kepala Sekolah Bidang Kurikulum', 'Puri Nirwana 2 Blok AE No. 29, Cibinong, Bogor', '085692290138', 'Pak_Suko.jpeg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '$2y$10$EKiZQSi6RKFD8P4vsEOGzOQgC.aqGoZHiH/L3rGapRpuVvN3VSW..', 'Administrator'),
(2, 'anniza', '12345', 'Anniza Yulandari');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akademik`
--
ALTER TABLE `akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akademik`
--
ALTER TABLE `akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
