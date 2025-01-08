-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2024 pada 08.44
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'AQUAMAN', 'Aquaman adalah film pahlawan super Amerika tahun 2018 yang didasarkan pada karakter DC Comics, Aquaman, dan didistribusikan oleh Warner Bros. Pictures. Ini adalah angsuran keenam di DC Extended Universe (DCEU). Film ini disutradarai oleh James Wan, dengan skenario oleh David Leslie Johnson-McGoldrick dan Will Beall, dan didasarkan pada sebuah cerita dari Geoff Johns, Wan dan Beall. Ini dibintangi Jason Momoa sebagai karakter judul, dengan Amber Heard, Willem Dafoe, Patrick Wilson, Dolph Lundgren, Yahya Abdul-Mateen II, dan Nicole Kidman dalam peran pendukung. Aquaman merupakan film teater laga hidup ketiga yang menampilkan Aquaman, mengikuti Batman v Superman: Dawn of Justice (2016) dan Justice League (2017), dan film pertama yang berpusat di sekitar karakter. Di Aquaman, karakter tituler mengetahui bahwa ia adalah pewaris kerajaan bawah laut Atlantis dan harus melangkah maju untuk memimpin rakyatnya melawan saudara tirinya, Orm, yang berupaya menyatukan tujuh kerajaan bawah laut melawan dunia permukaan.', 'aquaman.jpg', '2024-12-16 14:20:45', 'aadmin'),
(2, 'HELLBOY', 'Hellboy adalah film aksi supranatural yang dibuat tahun 2004. dibintangi Ron Perlman, John Hurt dan Selma Blair, serta disutradarai Guillermo del Toro. Film ini didasarkan pada komik dari Dark Horse Comics, Hellboy: Seed of Destruction oleh Mike Mignola. Diproduksi Revolution Studios dan didistribusikan Columbia Pictures. Film ini berkisah tentang binatang jahat yang dikenal sebagai Hellboy, bekerja secara diam-diam untuk menjaga dunia dari ancaman paranormal.', 'hellboy.jpg', '2024-12-16 14:21:53', 'aadmin'),
(3, 'JOKER', 'Joker adalah film cerita seru psikologis Amerika Serikat tahun 2019 yang disutradarai oleh Todd Phillips dan diproduseri oleh Todd Philips, Bradley Cooper, dan Emma Tillinger Koskoff.[3]\r\n\r\nJoker ditayangkan secara perdana di Festival Film Venesia pada tanggal 31 Agustus 2019[4] serta ditayangkan di Amerika Serikat pada 4 Oktober 2019 dan Indonesia dua hari sebelumnya.[5][6] Joker adalah film laga hidup pertama Batman yang mendapatkan klasifikasi R dari Motion Picture Association of America karena kekerasan berdarah yang kuat, perilaku mengganggu, bahasa dan gambar seksual singkat.[a]', 'joker.jpg', '2024-12-17 14:23:48', 'admin'),
(4, 'KANGMAK', 'Kang Mak from Pee Mak adalah sebuah film horor komedi Indonesia tahun 2024 yang disutradarai oleh Herwin Novianto. Film tersebut menampilkan Vino G. Bastian, Marsha Timothy, Indro Warkop, Tora Sudiro, Indra Jegel, dan Rigen Rakelna. Film yang dirilis pada 15 Agustus 2024 ini merupakan hasil adaptasi dari film hit bergenre serupa asal Thailand berjudul Pee Mak.[1]', 'kangmmak.jpeg', '2024-12-17 14:25:07', 'admin'),
(5, 'OPPENHEIMER', 'Oppenheimer (/??p?n?ha?m?r/) adalah film biografi drama sejarah tahun 2023 yang disutradarai oleh Christopher Nolan dan diproduseri oleh Christopher Nolan, Emma Thomas dan Charles Roven. Naskah film ini ditulis oleh Christopher Nolan berdasarkan buku American Prometheus tahun 2005 karya Kai Bird dan Martin J. Sherwin. Film ini dibintangi oleh Cillian Murphy, Emily Blunt, Matt Damon, Robert Downey Jr., Florence Pugh, Josh Hartnett, Casey Affleck, Rami Malek dan Kenneth Branagh.', 'oppenheimer.jpg', '2024-12-17 14:25:07', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
