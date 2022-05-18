-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 09:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs-blambangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `penulis` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `gambar` varchar(120) NOT NULL,
  `isi` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `tanggal`, `gambar`, `isi`) VALUES
(6, 'INOVASI TOMBO WARAS RSUD BLAMBANGAN', 'Grace', '2022-05-16', 'camera.jpg', '<h1>&nbsp;</h1>\r\n\r\n<p><strong>BANYUWANGI - Instalasi Farmasi RSUD Blambangan merupakan instalasi yang senantiasa berkomitmen pada peningkatan mutu pelayanan.Untuk itu, instalasi farmasi selalu senantiasa memberikan pembaruan dan solusi atas permasalahan yang ada terkait pelayanan kefarmasian, termasuk pelayanan kefarmasian di bagian Instalasi Farmasi Rawat Inap. Permasalahan yang ada di Instalasi Farmasi Rawat Inap adalah Pasien tidak patuh meminum obat oral 20,48%, Penggonaan Obat diluar FORNAS 18,20%, Pengantaran obat belum sesuai SPM (diatas jam 3) 7,56%, Kesalahan penulisan resep Rawat Inap 0,57%. dapat disimpulkan bahwasanya permasalahan yang saat ini ada adalah banyaknya pasien yang tidak patuh dalam meminum obat. Oleh karena itu, Tim Inovasi Instalasi Farmasi RSUD Blambangan berinisiatif untuk memberikan solusi agar pasien patuh meminum obat.<br />\r\nBanyaknya pasien yang tidak patuh dalam meminum obat iebbkn kren Kebanyakan pasien tidak dapat mengonsumsi obat secara mandiri (tertidur, anggota badan sakit, lansia, anak) n ini iebbkn kren Keluarga pasien tidak bisa selalu mendampingi dalam minum obat</strong></p>\r\n\r\n<hr />\r\n<p><img alt=\"INOVASI TOMBO WARAS RSUD BLAMBANGAN\" src=\"https://rsudblambangan.banyuwangikab.go.id/asset/foto_berita/antibiotic-capsules-close-up-1393982.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<p><br />\r\n<strong>Keluarga pasien seringkali bergantian dalam menemani pasien sehingga rentan tidak tahu bahwa pasien mendapat obat n itu ienyebbkn Tidak ada yang mengingatkan saat waktu minum obat<br />\r\n<br />\r\nBerdasarkan hasil analisis, penyebab pasien tidak minum obat dengan patuh adalah tidak ada yang mengingatkan. Untuk itu, dalam kesempatan kali ini, Tim Inovasi IFRS RSUD Blambangan menginisiasi inovasi TOMBO WARAS(Teman kOMunikatif minum oBat Oral With Audio attRaction and Attension System) agar dapat meningkatkan kepatuhan pasien dalam mengonsumsi obat oral di rawat inap, sehingga outcome kesembuhan pasien dapat dicapai dengan lebih cepat.<br />\r\n2.1. Edukasi Pasien Masuk Rumah Sakit<br />\r\nSalah satu peran apoteker adalah memberikan konseling dan informasi obat kepada pasien saat pasien baru pertama kali masuk ke rumah sakit. Hal ini telah dilakukan oleh apoteker penangggung jawab masing-masing ruangan. Hal ini akan meningkatkan pengetahuan pasien tentang obat, namun belum efektif untuk memantau kepatuhan pasien karena hanya dilakukan di awal dan pasien terkadang belum mendapatkan obat.<br />\r\n2.2.Once Daily Dispensing<br />\r\nSistem pendistribusian obat ke ruang rawat inap menerapkan sistem Once Daily Dispensing, atau pemberian obat dalam waktu 1 hari. Keuntungan sistem ini adalah obat yang diberikan ke ruangan dapat terkontrol dan dapat meminimalkan penggunaan obat yang tidak diperlukan serta memastikan pasien mendapat obat minum sesuai regimen yang telah dianjurkan oleh dokter penanggungjawab. Namun, sistem pendistribusian ini belum dapat memastikan kepatuhan pasien dalam meminum obat oral, dikarenakan pemberian obat oral hanya dilakukan satu kali dalam sehari dan tidak dilakukan setiap saat meminum obat.<br />\r\n2.3. Konseling oleh Apoteker saat Visite<br />\r\nDalam pelaksanaan visite oleh apoteker di setiap harinya, apoteker akan melakukan kegiatan konseling. Dengan adanya konseling, apoteker akan dapat melihat kepatuhan pasien dalam meminum obat, namun untuk dapat memastikan pasien meminum obatnya sesuai dengan jadwal belum dapat dipastikan dengan kegiatan ini.</strong></p>\r\n'),
(7, 'ASIAP (APLIKASI SISTEM INFORMASI ANALISIS DATA DAN', 'Grace', '2022-05-16', 'camera.jpg', '<p><strong>BANYUWANGI - ASIAP merupakan APLIKASI SISTEM INFORMASI ANALISIS DATA DAN PURIFIKASI. Inovasi ASIAP diterapkan untuk mendukung semua kebijakan pimpinan RS dalam mengatasi fraud yang terjadi. Selain langkah-langkah mengatasi masalah fraud yang sudah dijalankan harapannya aplikasi ini dapat meminimalkan praktek-praktek fraud (permasalahan potensi kecurangan ) yang ada di RS.</strong></p>\r\n\r\n<hr />\r\n<p><img alt=\"ASIAP (APLIKASI SISTEM INFORMASI ANALISIS DATA DAN PURIFIKASI)\" src=\"https://rsudblambangan.banyuwangikab.go.id/asset/foto_berita/b13cf375a58050776b26e58327c0e889_dg.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Aplikasi berbasis teknologi informasi iBANYUWANGFGIni merupakan aplikasi sederhana yang akan dapat mempurifikasi sebelum tagihan klaim diajukan klaimnya ke BPJS Kesehatan. Aplikasi ini akan memfilter Coding-coding yang layak atau tidak layak untuk diajukan klaimnya ke BPJS Kesehatan sehingga kegiatan-kegiatan fraud yang terjadi dapat dicegah karena kita dapat mengganti coding-coding yang tidak layak diklaimkan dengan coding-coding yang layak sehingga Rumah Sakit tidak lagi mengembalikan klaim yang sudah dibayarkan.</strong></p>\r\n\r\n<p><strong>Selain itu aplikasi ini juga sudah terintegrassi dengan E-klaim dan Vklaim sehingga memudahkan pengguna dalam mengkoreksi berkas-berkas klaim. Pengajuan klaim dengan berkas manual akan segera ditinggalkan dan ini merupakan kebijakan BPJS Kesehatan yang akan beralih ke Klaim Digital. Aplikasi inipun sudah terintegrasi dengan Aplikasi Scan Informasi Klaim (ASIK) yang dapat mendukung klaim digital Rumah Sakit khususnya RSUD Blambangan.</strong></p>\r\n'),
(8, 'MEMENGAN (MEngatasi Masalah Emosi aNak denGAn berm', 'Aji', '2022-05-16', 'camera.jpg', '<p><strong>BANYUWANGI- Sebagai perawat yang bertugas di Ruang Anak, sering kali mengalami hambatan dan kesulitan dalam merawat anak- anak, dikarenakan anak &ndash; anak sulit untuk diajak kerjasama dalam pengobatan atau perawatan, berbeda dengan pasien dewasa. Karakteristik anak- anak berbeda-beda untuk masing- masing usia, oleh karena itu perawat harus benar &ndash; benar sabar namun tegas dalam merawat anak- anak yang dirawat di Rumah Sakit. Anak- anak masih sangat bergantung dengan orang tua sehingga perawat perlu melibatkan orang tua dan keluarga di dalam merawat anak. Diperlukan suatu cara bagaimana perawatan dan pengobatan pada anak bisa diberikan dengan lancar tanpa menyakiti anak atau membuat anak stres atau setidaknya meminimalkan.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p><img alt=\"MEMENGAN (MEngatasi Masalah Emosi aNak denGAn bermaiN)\" src=\"https://rsudblambangan.banyuwangikab.go.id/asset/foto_berita/23-29-42-images.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Perawatan anak di Rumah Sakit memaksa anak harus berpisah dari lingkungan yang dirasakan aman, penuh kasih sayang dan menyenangkan, yaitu lingkungan rumah, permainan dan teman sepermainan ( Yupi Supartini 2004: 190-191)</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Dunia anak adalah dunia bermain. Melalui kegiatan bermain, semua aspek permainan anak ditumbuhkan sehingga anak-anak menjadi lebih sehat sekaligus cerdas. Saat bermain, anak-anak mempelajari banyak hal penting. Sebagai contoh dengan bermain bersama teman, anak-anak akan lebih terasa rasa empatinya, mereka juga bisa mengatasi penolakan dan dominasi, serta bisa mengelola emosi.</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Bermain merupakan tuntutan dan kebutuhan anak usia prasekolah karena dunia anak adalah dunia bermain. Ahmadi (1991) memberikan pengertian &ldquo; Bermain adalah suatu perbuatan yang mengandung keasyikan dan dilakukan atas dasar kehendak diri sendiri, bebas tanpa paksaan denga tujuan untuk memperoleh kesenangan pada waktu mengadaka kegiatan bermain&rdquo; . Frobel dan montessori yang dikutip oleh Fuad Hasan (1998) berpendapat bahwa &ldquo; cara terbaik untuk mendidik anak dengan memanfaatkan bermain sebagai kegiatan yang alamiah dalam perkembangan anak, mereka beranggapan bahwa sambil bermain anak dapat belajar&rdquo;.</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Berdasarkan hasil observasi di Ruang Mas Alit RSUD Blambangan Banyuwangi, reaksi anak selama mendapatkan perawatan adalah menangis, merengek,berteriak, menolak saat dilakukan tindakan keperawatan.</strong></p>\r\n\r\n<p><strong>Dari pengalaman tersebut, tentang dampak hospitalisasi pada anak maka kami ingin membuat inovasi yang berjudul &ldquo; MEMENGAN &ldquo; (MEngatasi Masalah Emosi aNak denGAn bermaiN)</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masalah terbesar yang dihadapi di unit anda:</strong></p>\r\n\r\n<p><strong>Pengaruh hospitalisasi pada anak yang dirawat di rumah sakit.</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proses untuk mengatasi masalah tersebut</strong></p>\r\n\r\n<p><strong>Intervensi yang dilakukan perawat terhadap anak pada prinsipnya untuk meminimalkan stresor, mencegah perasaan kehilangan, meminimalkan rasa takutterhadap perlakuan dan nyeri serta memaksimalkan manfaat perawatan di rumah sakit. Hal yang harus di ingat adalah bermain merupakan salah satu cara yang efektif dalam mengatasi dampak hospitalisasi ( Yupi Supartini, 2004: 200)</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keunikan, kebaruan, keistimewaan, ide dari inovasi</strong></p>\r\n\r\n<p><strong>Dengan permainan anak akan terlepas dari ketegangan dan stres yang dialaminya, karena dengan melakukan permainan anak akan dapat mengalihkan rasa sakitnya ( distraksi ) dan relaksasi melalui kesenangannya melakukan permainan. (Yupi Supartini, 2004: 128 )</strong></p>\r\n\r\n<p><strong>&Oslash;&nbsp;Perawat menyambut&nbsp;pasien di depan pintu masuk Ruang Mas Alit dengan memakai atribut ( topi dan pin )</strong></p>\r\n\r\n<p><strong>&Oslash;&nbsp;Di sediakan tempat bermain beserta fasilitasnya yang tidak dimiliki oleh ruangan lain.</strong></p>\r\n\r\n<p><strong>&Oslash;&nbsp;Setiap pasien diberikan topi.</strong></p>\r\n\r\n<p><strong>&Oslash;&nbsp;Meningkatkan kemampuan motorik anak.</strong></p>\r\n\r\n<p><strong>&Oslash;&nbsp;Meningkatkan kemampuan kognitif anak.</strong></p>\r\n\r\n<p><strong>&Oslash;&nbsp;Mengasah kemampuan imajinasi anak.</strong></p>\r\n\r\n<p><strong>&Oslash;&nbsp;Mengasah kemampuan komunikasi dan sosial anak.</strong></p>\r\n\r\n<p><strong>&Oslash;&nbsp;Meningkatkan kepemimpinan dan kemampuan memecahkan masalah.</strong></p>\r\n'),
(9, 'PELANGI (PELAYANAN GAMPANG REGISTRASI)', 'Aji', '2022-05-16', 'camera.jpg', '<p><strong>BANYUWANGI - Latar belakang dari inovasi ini adalah banyaknya Pasien laboratorium dalam kondisi puasa sering mengeluh ingin segera dilayani karena masih menunggu antrian di loket pendaftaran sehingga mereka khawatir menunggu hasil lab terlalu lama, merasa lapar dan ingin segera berbuka, merasa keberatan harus bolak balik dari loket ke lab, lab ke poli dan untuk Ibu hamil yang periksa TTGO banyak yang tidak membawa air minum untuk melarutkan glukosa yang sudah diresepkan sehingga dan harus membeli air dulu di luar sehingga menghambat pelayanan mengimgat pemeriksaan TTGO membutuhkan waktu yang lama.</strong></p>\r\n\r\n<hr />\r\n<p><img alt=\"PELANGI (PELAYANAN GAMPANG REGISTRASI)\" src=\"https://rsudblambangan.banyuwangikab.go.id/asset/foto_berita/Laborat-1024x597.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Inovasi LAB CARE &ldquo;PELANGI&rdquo; adalah upaya laboratorium agar pasien yang periksa BSN/2JPP segera bisa dilayani dan diberi kemudahan registrasi. Laboratorium menyediakan air minum gratis untuk ibu hamil yang periksa TTGO dengan volume yang tepat ( 200 ml ). Tiap hari jum&rsquo;at laboratorium menyediakan nasi gratis untuk pasien BSN/2JPP dengan menu diet yang tepat dan aman bagi penderita diabetes, hipertensi dan jantung. Hari jum&rsquo;at dipilih selain untuk jum&rsquo;at berkah juga karena hari jum&rsquo;at waktunya pendek.</strong></p>\r\n\r\n<p><strong>Dengan adanya inovasi LAB CARE &ldquo;PELANGI&rdquo; diharapkan pasien BSN/2JPP segera bisa dilayani di laboratorium dan diberi kemudahan untuk registrasi di loket pendaftaran. Ibu hamil yang periksa TTGO bisa segera dilayani dan tidak perlu menunggu membeli air terlebih dahulu, serta untuk Pasien BSN/2JPP yang tidak membawa makanan bisa langsung mendapatkan makanan dengan menu diet yang tepat dan aman, dan lebih menghemat waktu.</strong></p>\r\n'),
(10, 'GERANG ASIN (GERAkan peNGambilan dArah pada paSIen', 'Grace', '2022-05-16', 'camera.jpg', '<p><strong>BANYUWANGI - Inovasi &ldquo;Gerang Asin&rdquo; adalah Gerakan Pengambilan Darah pada Pasien Transfusi. Tim inovasi ruangan memberikan pilihan fasilitas pelayanan petugas khusus pengambil kantong darah kepada pasien yang mendapatkan terapi tranfusi, dengan demikian pasien dan keluarga terbantu dalam hal transportasi darah serta untuk mewujudkan peraturan mentri yang berlaku yang pada akhirnya akan meminimalkan keluhan pasien terhadap pelayanan keperawatan dan pelayanan rumah sakit sehingga terjalin kepercayaan pasien dan keluarga terhadap rumah sakit yang akan membawa dampak positif dan pertambahan pendapatan kepada pihak rumah sakit.</strong></p>\r\n\r\n<hr />\r\n<p><img alt=\"GERANG ASIN (GERAkan peNGambilan dArah pada paSIen traNfusi)\" src=\"https://rsudblambangan.banyuwangikab.go.id/asset/foto_berita/611b3aa895025.jpg\" /></p>\r\n\r\n<p><strong>Dalam penerapan ide inovasi terdapat beberapa langkah yang ditempuh seperti mendapatkan persetujuan dari pihak pasien dan keluarga untuk memberikan kuasa kepada petugas khusus pengambil darah dengan melampirkan surat pernyataan yang ditanda-tangani oleh pasien atau keluarga dan pihak memberi pelayanan dalam hal ini adalah perawat ruangan. Setelah mendapat persetujuan tersebut petugas akan melaksanakan tugasnya sesuai dengan prosedur SOP yang ada, dan tidak lupa untuk meminta pendapat dari pasien dan keluarga terkait kepuasan dari pelayanan yang didapatkan.</strong></p>\r\n\r\n<p><strong>Terdapat banyak dampak positif yang didapatkan dari penerapan langkah inovasi ini terutama dalam hal peningkatan kualitas mutu pelayanan yang diberikan dengan penerapan ide ini pelayanan keperawatan dapat ditingkatkan yang pada akhirnya juga akan meningkatkan tingkat kepuasan pasien dan keluarga terhadap ruangan dan rumah sakit serta meminimalkan keluhan yang ada, yang berpotensi terhadap citra buruk pelayanan rumah sakit. Selain itu dengan adanya petugas khusus ini diharapkan juga income terhadap rumah sakit bertambah melalui pendapatan yang didapat dari jasa atau biaya petugas.</strong></p>\r\n\r\n<p><strong>Dengan adanya keterlibatan petugas khusus pengambil darah mutu pelayanan rumah sakit khususnya pelayanan keperawatan dapat meningkat sehingga tingkat kepercayaan dan kepuasan pasien terhadap pelayanan serta visi utama dari rumah sakit dapat terwujud.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(11, 'SKAK MAT OPTIMAL (SKala Kesiapan MenyelenggarakAn ', 'Aji', '2022-05-16', 'camera.jpg', '<p><strong>BANYUWANGI - Pelayanan kesehatan di rumah sakit merupakan pelayanan yang komprehensif. Kelancaran operasi menjadi salah satu pelayanan penting dalam ruang Instalasi Bedah Sentral (IBS). Pembuatan jadwal pelaksaan operasi sagat berbengaruh terhadap proses berjalannya acara operasi. </strong></p>\r\n\r\n<hr />\r\n<p><img alt=\"SKAK MAT OPTIMAL (SKala Kesiapan MenyelenggarakAn Tim Operasi Tepat, Intensif, Aman, dan Lancar)\" src=\"https://rsudblambangan.banyuwangikab.go.id/asset/foto_berita/IMG_3494-1024x683.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Dibutuhkan skala penilaian untuk menjadikan pelayanan mutu di IBS tetap berjalan lancar. Desain penelitian ini menggunkaan metode pendekatan deskriptif dengan analisa data umum dan skakmat cheklist, dengan sampel penelitian menggunakan total sampling yaitu semua populasi yang ada dijadikan sampel penelitian. Jumlah sample yang digunakan adalah 548 sampel. Analisa data yang dilakukan dari data umum yang terdiri dari jenis operasi dan kasus operasi, menggungkapkan bahwa terdapat perbedaan 96,5% managemen waktu pelaksanaan operasi yang ukur dengan skakmat cheklist.<br />\r\n?SKAK MAT OPTIMAL merupakan SKala Kesiapan MenyelenggarakAn Tim Operasi Tepat, Intensif, Aman, dan Lancar. Berdasarkan hasil penelitian yang telah dilakukan, diperoleh hasil bahwa terdapat perbedaan antara sebelum dilakukan pelaksanaan skakmat dan setelah dilakukan skakmat. Hal ini berarti bahwa semakin baik kemampuan managemen waktu maka akan semakin tinggi juga performasi kerja. Sebaliknya semakin buruk kemampuan managemen waktu maka semakin rendah juga performasi kerja.</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nik_users` varchar(20) DEFAULT NULL,
  `id_poli` int(11) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `no_antrian` varchar(5) DEFAULT NULL,
  `jam` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nik_users`, `id_poli`, `tgl_pendaftaran`, `no_antrian`, `jam`, `status`) VALUES
(39, '3501999789000012', 1, '2022-05-04', '1', '00:00:00', 2),
(40, '3501999789000012', 1, '2022-05-04', '2', '00:00:00', 2),
(42, '3501999789000012', 1, '2022-05-04', '3', '00:00:00', 2),
(43, '3501999789000010', 1, '2022-05-05', '1', '00:00:00', 2),
(44, '3501999789000020', 1, '2022-05-09', '1', '00:00:00', 2),
(45, '3501999789000012', 1, '2022-05-13', '1', '00:00:00', 2),
(46, '3501999789000012', 2, '2022-05-14', '1', '00:00:00', 2),
(47, '3501999789000010', 2, '2022-05-14', '2', '00:00:00', 2),
(48, '3501999789000020', 2, '2022-05-14', '3', '00:00:00', 2),
(49, '3501999789000012', 2, '2022-05-14', '4', '00:00:00', 2),
(50, '3501999789000010', 2, '2022-05-15', '1', '00:00:00', 2),
(51, '3501999789000020', 1, '2022-05-15', '1', '00:00:00', 2),
(52, '3501999789000012', 1, '2022-05-15', '2', '00:00:00', 2),
(58, '3501999789000010', 1, '2022-05-15', '3', '1652600827', 1),
(59, '3501999789000012', 1, '2022-05-15', '4', '1652600972', 1),
(61, '3501999789000020', 1, '2022-05-15', '5', '1652604564', 1);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `poli` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `poli`) VALUES
(1, 'klinik anak'),
(2, 'klinik anesthesi'),
(3, 'klinik bedah ortopedhi'),
(4, 'klinik bedah umum'),
(5, 'klinik bedah syaraf'),
(6, 'klinik FNAB'),
(7, 'Klinik Gigi & Mulut'),
(8, 'Klinik Gizi'),
(9, 'klinik jantung'),
(10, 'klinik jiwa'),
(11, 'klinik kulit & kelamin'),
(12, 'klinik mata'),
(13, 'klinik obgyn'),
(14, 'klinik paru'),
(15, 'klinik penyakit dalam'),
(16, 'klinik psikologi'),
(17, 'klinik rehab medik'),
(18, 'klinik spesialis gigi dan mulut'),
(19, 'klinik syaraf'),
(20, 'klinik THT'),
(21, 'klinik urologi'),
(22, 'klinik VCT');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `idtag` int(11) NOT NULL,
  `namatag` varchar(30) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nik` varchar(16) NOT NULL,
  `no_rm` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(11) DEFAULT NULL,
  `no_wa` varchar(13) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nik`, `no_rm`, `nama`, `tgl_lahir`, `jenis_kelamin`, `no_wa`, `password`, `status`) VALUES
('3501999789000010', '24042022288', 'Fahrizal Azi Ferdiansyah', '1999-03-21', 'laki-laki', '081515868592', '$2y$10$C2j8EMfFlWkCDpnfBRYlUOpLsDmfjB0QdJ709vuPDoR61eLYj0g7C', 1),
('3501999789000012', '24042022257', 'Rachel', '1999-09-08', 'perempuan', '085865049304', '$2y$10$ETC96v/HedqK02qfNUqn6ONDaugSEi4wUHFwW/h4Ujh016lptF50y', 1),
('3501999789000014', NULL, 'Aji', '2022-05-18', 'laki-laki', '081515868592', '$2y$10$yNffcDMkQadv89qGGyicW.68ZKs4VBlEKIDZX9O6Hs23YqgwK7YZe', 1),
('3501999789000020', '24042022258', 'Bawik Ardiyan', '1999-09-08', 'laki-laki', '085156484672', '$2y$10$CUieefHs4CQqF1VLC9UG0OU2SJswngNKF5VfVpdVdTfwQVI4sHyje', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`idtag`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `idtag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
