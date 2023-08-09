-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2023 pada 06.45
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skpt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri_lahan`
--

CREATE TABLE `tbl_galeri_lahan` (
  `id_galeri_lahan` int(11) NOT NULL,
  `id_lahan` int(11) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri_lahan`
--

INSERT INTO `tbl_galeri_lahan` (`id_galeri_lahan`, `id_lahan`, `ket`, `foto`) VALUES
(1, 1, 'Foto Dari Utara', 'IMG-20200215-WA0023.jpg'),
(2, 1, 'Foto Dari Selatan', 'IMG-20200215-WA0023.jpg'),
(3, 1, 'Foto Dari Udara', 'IMG-20200215-WA0023.jpg'),
(4, 2, 'Foto Dari Atas', 'IMG_3909.JPG'),
(5, 2, 'Foto Isi Lahan', 'IMG_3909.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lahan`
--

CREATE TABLE `tbl_lahan` (
  `id_lahan` int(11) NOT NULL,
  `nama_lahan` varchar(255) DEFAULT NULL,
  `luas_lahan` varchar(100) DEFAULT NULL,
  `isi_lahan` varchar(100) DEFAULT NULL,
  `pemilik_lahan` varchar(100) DEFAULT NULL,
  `alamat_pemilik` text DEFAULT NULL,
  `denah_geojson` mediumtext DEFAULT NULL,
  `warna` varchar(100) DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_lahan`
--

INSERT INTO `tbl_lahan` (`id_lahan`, `nama_lahan`, `luas_lahan`, `isi_lahan`, `pemilik_lahan`, `alamat_pemilik`, `denah_geojson`, `warna`, `gambar`) VALUES
(2, 'Lahan 2', '200 m', 'Ada_pemilik', 'mamat', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.494397,-0.048326],[117.49511,-0.04941],[117.493861,-0.050376],[117.493362,-0.049732],[117.49362,-0.049201],[117.493738,-0.049035],[117.494397,-0.048326]]]}}]}', '#3C11F1', 'IMG-20191010-WA0002.jpg'),
(3, 'Lahan 3', '450 m', 'Ada_pemilik', 'Sopianto', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.488952,-0.047483],[117.489939,-0.046925],[117.490893,-0.046742],[117.492953,-0.046539],[117.49365,-0.047429],[117.491698,-0.049661],[117.489874,-0.048652],[117.489553,-0.049199],[117.489038,-0.048963],[117.488952,-0.047483]]]}}]}', '#EDF37B', 'IMG-20200215-WA0023.jpg'),
(4, 'Lahan 4', '450 m', 'Ada_pemilik', 'Sopianto', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.493194,-0.050006],[117.494315,-0.051508],[117.493827,-0.052355],[117.492755,-0.050848],[117.493194,-0.050006]]]}}]}', '#8737F1', 'IMG-20200215-WA0023.jpg'),
(5, 'Lahan 5', '450 m', 'Ada_pemilik', 'Sopianto', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.493876,-0.050358],[117.49512,-0.049453],[117.495898,-0.050429],[117.494584,-0.051331],[117.493876,-0.050358]]]}}]}', '#8737F1', 'IMG-20200215-WA0023.jpg'),
(6, 'Lahan 6', '450 m', 'Ada_pemilik', 'Sopianto', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.498135,-0.049287],[117.499078,-0.050574],[117.498649,-0.051025],[117.498151,-0.051776],[117.497952,-0.052092],[117.49689,-0.050563],[117.498135,-0.049287]]]}}]}', '#8737F1', 'IMG-20200215-WA0023.jpg'),
(7, 'Lahan 7', '450 m', 'Ada_pemilik', 'Sopianto', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.495089,-0.051014],[117.495802,-0.050515],[117.496783,-0.05191],[117.49607,-0.052446],[117.495089,-0.051014]]]}}]}', '#8737F1', 'IMG-20200215-WA0023.jpg'),
(8, 'Lahan 8', '450 m', 'Lahan 8', 'Salman', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.49201,-0.051996],[117.492471,-0.052373],[117.491956,-0.052866],[117.492541,-0.053338],[117.492085,-0.053991],[117.490922,-0.052994],[117.49201,-0.051996]]]}}]}', '#8737F1', 'IMG-20200215-WA0023.jpg'),
(9, 'Lahan 9', '450 m', 'Ada_pemilik', 'Sopianto', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.492353,-0.053632],[117.49371,-0.055011],[117.493244,-0.055611],[117.491876,-0.054335],[117.492353,-0.053632]]]}}]}', '#8737F1', 'IMG-20200215-WA0023.jpg'),
(10, 'Lahan 10', '450 m', 'Lahan 10', 'Sopianto', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.490524,-0.053272],[117.491844,-0.054442],[117.491431,-0.054946],[117.491543,-0.05447],[117.490636,-0.053591],[117.490208,-0.053841],[117.490524,-0.053272]]]}}]}', '#8737F1', 'IMG-20200215-WA0023.jpg'),
(11, 'Lahan 1', '600 m', 'Lahan 1', 'Salman', 'kersik', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[117.493671,-0.044672],[117.496868,-0.046088],[117.496696,-0.048362],[117.496106,-0.049156],[117.495463,-0.049553],[117.493264,-0.046378],[117.493671,-0.044672]]]}}]}', '#3C11F1', 'IMG_3909.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(5, 'Salman', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_galeri_lahan`
--
ALTER TABLE `tbl_galeri_lahan`
  ADD PRIMARY KEY (`id_galeri_lahan`);

--
-- Indeks untuk tabel `tbl_lahan`
--
ALTER TABLE `tbl_lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri_lahan`
--
ALTER TABLE `tbl_galeri_lahan`
  MODIFY `id_galeri_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_lahan`
--
ALTER TABLE `tbl_lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
