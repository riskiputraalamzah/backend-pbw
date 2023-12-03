-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2023 at 05:44 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_pbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `image`, `created_at`) VALUES
(1, 'Kunjungan Joko Widodo', 'kunjungan-joko-widodo', 'Pada hari yang penuh antusiasme, kantor kami menjadi saksi dari kunjungan luar biasa Presiden Joko Widodo. Dengan diiringi oleh keamanan yang ketat, presiden tiba di kantor kami dengan senyuman hangat dan sikap ramahnya yang khas. Rombongan yang ikut dalam kunjungan ini mencerminkan keragaman dan representasi yang kuat dari berbagai sektor masyarakat.<br />\r\n<br />\r\nKunjungan tersebut tidak hanya sekadar pertemuan formal, tetapi juga menjadi kesempatan bagi Presiden untuk mendengarkan aspirasi dan masukan langsung dari para pemimpin di perusahaan kami. Dalam pidatonya, Presiden Joko Widodo menyoroti pentingnya kerjasama antara pemerintah dan sektor swasta dalam memajukan ekonomi dan menciptakan lapangan kerja yang lebih baik.<br />\r\n<br />\r\nKami merasa terhormat karena Presiden menunjukkan minatnya terhadap inovasi dan perkembangan industri di kantor kami. Beliau berdiskusi dengan pemimpin perusahaan dan melibatkan diri dalam sesi tanya jawab yang membangun. Ini bukan hanya kunjungan rutin, tetapi sebuah momen bersejarah yang memberikan inspirasi dan semangat baru bagi semua yang hadir.<br />\r\n<br />\r\nSetelah acara resmi, Presiden mengambil waktu untuk berkeliling di sekitar kantor, bertemu dengan para karyawan, dan meresapi atmosfer kerja kami. Keberadaannya di sini memberikan semangat baru bagi tim kami untuk terus berkontribusi pada pembangunan negara dan mencapai visi pemerintah.<br />\r\n<br />\r\nKunjungan Presiden Joko Widodo di kantor kami bukan hanya sekadar kehormatan, tetapi juga merupakan dorongan positif untuk terus bergerak maju dalam mencapai tujuan bersama. Kami berharap kunjungan ini menjadi awal dari hubungan yang lebih erat antara pemerintah dan sektor swasta, demi kemajuan dan kesejahteraan bersama.', '1701624888.jpeg', '2023-12-03 17:34:48'),
(3, 'Edukasi Bencana', 'edukasi-bencana', 'Edukasi bencana memiliki peran penting dalam mempersiapkan masyarakat menghadapi risiko dan dampak yang mungkin terjadi akibat bencana alam atau insiden serius lainnya. Melalui penyebaran pengetahuan dan pemahaman yang benar tentang ancaman potensial, kita dapat meningkatkan kesiapsiagaan dan mengurangi kerugian yang mungkin timbul.<br />\r\n<br />\r\nSalah satu aspek penting dari edukasi bencana adalah pemahaman akan jenis-jenis bencana yang mungkin terjadi di suatu wilayah. Dengan mengetahui potensi bencana seperti gempa bumi, banjir, kebakaran hutan, atau badai tropis, masyarakat dapat mengambil langkah-langkah preventif dan bersiap diri menghadapi situasi darurat. Informasi ini dapat disampaikan melalui kampanye penyuluhan, seminar, dan sumber daya edukatif lainnya.<br />\r\n<br />\r\nSelain itu, edukasi bencana juga mencakup penekanan pada peran masyarakat dalam sistem peringatan dini. Masyarakat perlu tahu cara merespons peringatan dini, termasuk evakuasi cepat dan mengumpulkan perlengkapan darurat yang diperlukan. Pengembangan keterampilan pertolongan pertama juga menjadi bagian integral dari edukasi ini, karena dapat membantu menyelamatkan nyawa dan mengurangi tingkat cedera saat keadaan darurat.<br />\r\n<br />\r\nSektor pendidikan, mulai dari tingkat sekolah dasar hingga perguruan tinggi, memegang peran kunci dalam mengintegrasikan edukasi bencana ke dalam kurikulum. Program-program ini dapat mencakup simulasi evakuasi, pelatihan pertolongan pertama, dan proyek-proyek penelitian yang terfokus pada mitigasi risiko bencana. Hal ini membantu menciptakan budaya kesiapsiagaan yang ditanamkan sejak dini dalam masyarakat.<br />\r\n<br />\r\nTerakhir, kerja sama antara pemerintah, organisasi non-pemerintah, dan sektor swasta menjadi kunci dalam mendukung upaya edukasi bencana. Sumber daya bersama dan koordinasi yang baik akan memperkuat efektivitas program-program ini, menciptakan lingkungan yang lebih aman, dan meningkatkan kapasitas tanggap darurat masyarakat secara keseluruhan. Dengan mengutamakan edukasi bencana, kita dapat bergerak menuju masyarakat yang lebih siap dan tahan bencana.', '1701625422.jpeg', '2023-12-03 17:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'Riski Putra Alamzah', 'putra', 'putra123'),
(2, 'Muhammad Farhan', 'farhan', 'farhan123'),
(5, 'Muhammad Danil Haqewi', 'danil', 'danil123'),
(6, 'Marshanda Aliza Putra Sudiono', 'danda', 'danda123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
