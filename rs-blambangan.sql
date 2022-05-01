-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 01:31 PM
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
(3, 'lmkllklk', 'kjk', '0010-10-10', 'FOTO-(1).png', 'jjjASHhsjhdjad'),
(4, 'Coba artikel', 'Aji Pratama', '1999-09-11', 'manasik.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat, risus sit amet accumsan efficitur, dolor elit volutpat nisl, ac dignissim enim justo in turpis. Fusce rhoncus mauris sed erat suscipit, quis commodo risus pharetra. Praesent at sagittis lorem. Sed placerat ultrices lobortis. Morbi congue pellentesque velit vitae condimentum. Praesent non justo fringilla neque pulvinar porttitor molestie ac odio. Aenean fringilla arcu eget libero aliquam, non ornare massa auctor.\r\n\r\nDuis rhoncus bibendum bibendum. Suspendisse potenti. Duis non ex non tellus rutrum pretium. Sed pulvinar, eros ac auctor aliquam, sapien lectus varius enim, vitae mollis neque ex quis purus. Aliquam turpis nunc, tempor et est at, tincidunt maximus elit. Pellentesque elementum dui eu odio rutrum, non imperdiet nulla consequat. Aenean tincidunt efficitur magna, non iaculis eros ultrices ac. Mauris aliquet ligula lorem, euismod tempus mi aliquam ac. Etiam in ante libero. Morbi tellus est, ullamcorper eget nisi et, convallis volutpat magna.\r\n\r\nNullam sagittis tempus lectus, a accumsan nibh sodales id. Donec urna dui, posuere quis nunc non, posuere molestie nisi. Fusce semper convallis leo ullamcorper fringilla. In auctor est viverra, fringilla massa in, euismod metus. Aenean venenatis mattis urna, non accumsan est ultricies et. Nullam iaculis enim venenatis nisi fermentum convallis. Donec vitae porta dui, eu sagittis orci. Nunc elementum mollis ex, et viverra quam.\r\n\r\nCurabitur commodo elit non felis iaculis aliquet. Ut maximus a arcu lobortis pulvinar. Sed laoreet lobortis massa ut consectetur. Nullam imperdiet metus at turpis semper molestie. Proin cursus, nulla laoreet porttitor ornare, nulla diam consectetur mi, ac dapibus risus ex vel felis. Suspendisse maximus vehicula bibendum. Phasellus bibendum sodales luctus. Ut eleifend nulla orci, vel pharetra risus elementum in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur arcu leo, aliquet sit amet nulla a, ornare rutrum dolor.\r\n\r\nSed elementum ut dolor eget posuere. Donec quis dolor vitae felis gravida lacinia eu non purus. Vivamus odio nulla, condimentum nec facilisis sed, tristique vitae elit. Pellentesque in porttitor arcu. Cras in sodales nisi, nec porttitor augue. Pellentesque faucibus erat quis enim egestas, sit amet pellentesque nisi pharetra. Suspendisse ultricies sem eget mauris fermentum, id viverra tortor eleifend. Morbi aliquam pulvinar diam. Nunc sagittis tristique augue quis imperdiet. Phasellus sed tortor volutpat, consequat elit non, aliquet tortor.');

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
  `no_rm` varchar(20) DEFAULT NULL,
  `id_poli` int(11) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `no_antrian` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `poli` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `poli`) VALUES
(1, 'poli umum'),
(2, 'poli gigi'),
(3, 'poli anak'),
(4, 'poli mata');

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
  `no_rm` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no_rm`, `nama`, `tgl_lahir`, `password`) VALUES
('24042022257', 'Rachel', '1999-02-01', '$2y$10$90fNoWRm0B4wycwN3soq1eWATbPlgo64UmxjmYkaTuiszRFaD8ZHy'),
('24042022812', 'Bawik Ardiyan Ramadhan', '1999-01-09', '$2y$10$qKyOAT46nUHBEGCAJCzRJe2tCpyDT56YJ.09uWayuO6elc0MTHiKO'),
('24042022966', 'asasasa', '2022-04-13', '$2y$10$0bl2vBJR3wRIZBx6qBoFQuXIUERZ/iUMCtYdHsXZrkrJmB.Dv81hK');

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
  ADD PRIMARY KEY (`no_rm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
