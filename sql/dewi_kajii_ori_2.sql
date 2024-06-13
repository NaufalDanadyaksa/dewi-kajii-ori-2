-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2024 at 07:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewi_kajii_ori_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `atraksi`
--

CREATE TABLE `atraksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atraksi`
--

INSERT INTO `atraksi` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Edukasi Budidaya Ikan Konsumsi', 'Sobat Kajii dapat bergabung bersama kami untuk mempelajari teknik-teknik terbaik dalam merawat dan memelihara ikan konsumsi secara langsung, loh! Sobat Kajii akan diajak dalam proses-proses pemilihan bibit hingga pemberian pakan yang tepat, semuanya disertai dengan panduan dari pakar kami, ya. Melalui kegiatan ini, Sobat akan belajar tentang prinsip-prinsip budidaya yang ramah lingkungan dan berkelanjutan, sehingga dapat memberikan manfaat yang baik bagi lingkungan sekitar. Tak hanya itu, kegiatan ini juga memberikan kesempatan bagi Sobat Kajii untuk menggali potensi ekonomi dari budidaya ikan konsumsi. Yuk, jangan lewatkan kesempatan menarik ini untuk memperluas pengetahuan dan keterampilan Sobat dalam bidang budidaya ikan.', '2024-03-21 07:10:08', '2024-06-11 19:50:43'),
(5, 'Edukasi Budidaya Ikan Hias', 'Dewi Kajii juga menyediakan kegiatan untuk Sobat Kajii yang ingin berinteraksi langsung dengan para pembudidaya ikan hias di Kadisoro, lho. Sobat Kajii dapat melakukan sifon, menangkap dan memberi makan ikan hias, serta grading ikan hias. Sobat Kajii dapat mengunjungi farm ikan hias kapanpun sesuai dengan waktu luang Sobat Kajii. Jika Sobat Kajii tertarik, Sobat Kajii bisa langsung datang ke Farm Ikan Hias yang berlokasi di Kadisoro, Gilangharjo, Pandak, Bantul,  D. I. Yogyakarta. Jangan khawatir, farm dan pokdakan yang disediakan sangat banyak dan variatif sehingga Sobat Kajii dapat memilih sendiri sesuai dengan preferensi Sobat Kajii. Para pemilik farm ikan hias juga dijamin memiliki kompetensi dalam bidang ikan hias dan beberapa pemilik farm juga pernah dan masih aktif menjadi juri kompetisi ikan hias di berbagai tingkatan! Tak perlu merogoh kocek yang mahal, mulai dari Rp.25.000 Sobat Kajii dapat berinteraksi langsung dengan para pembudidaya ikan hias yang sudah sangat mumpuni. Selain itu, disini juga disediakan mushola, tempat makan, dan kamar mandi umum. Wah, menarik sekali ya, Sobat Kajii.', '2024-03-21 07:10:43', '2024-06-11 19:53:04'),
(7, 'Pagelaran Wayang Kulit', 'Pagelaran Wayang Kulit ini diadakan sebagai malam puncak rangkaian acara Merti Dusun Padukuhan Kadisoro. Pagelaran wayang ini didalangi oleh Ki Rois Hadi Suyadi dengan Cerita Boyong Dewi Sri. Cerita ini mengangkat kisah Dewi Sri yang merupakan lambang kemakmuran pertanian dan hasil bumi. Pagelaran wayang ini dilaksanakan di Pendapa Dewi Kajii, dihadiri oleh Perwakilan Pemerintah Kalurahan Gilangharjo, Jajaran Pamong, Dukuh, RT, Tokoh Masyarakat, dan seluruh Warga Kadisoro. Selain itu, acara ini juga menampilkan pentas seni dari warga Kadisoro, termasuk tarian anak, tari dewasa, dan karawitan oleh ibu-ibu dasawisma. Semua hadirin terlihat sangat antusias dan turut bangga atas suksesnya rangkaian acara Merti Dusun ini.', '2024-03-24 07:05:27', '2024-06-11 19:56:18'),
(11, 'Reog Ria Kelana', 'Pertunjukan reog ini dapat Sobat Kajii saksikan saat acara-acara tertentu di Dewi Kaji. Biasanya pagelaran reog ini dilaksanakan di Lapangan Bola Voli di Kadisoro, Gilangharjo, Pandak, Bantul, D. I. Yogyakarta. Selain dapat ikut melestarikan budaya Jawa dengan melihat pertunjukan reog, jika memungkinkan Sobat Kajii juga dapat ikut menari dengan kostum yang disediakan. Saat menyaksikan pertunjukan Reog Ria Kelana, Sobat Kaji dapat menikmati fasilitas mushola, tempat makan, kamar mandi umum, dan selfie area. Hanya dengan mengeluarkan uang mulai dari Rp20.000, Sobat Kajii akan mendapatkan pengalaman unik yang tak terlupakan saat berkunjung ke Dewi Kajii.', '2024-05-19 06:53:13', '2024-06-11 19:58:41'),
(12, 'Merti Dusun', 'Merti Dusun sendiri merupakan tradisi yang sudah ada dalam kehidupan masyarakat sejak dahulu, loh. Tradisi Merti Dusun dilakukan sebagai wujud rasa syukur kepada Tuhan Yang Maha Esa atas segala keberkahan, kegembiraan, dan keselamatan yang telah dilimpahkan, serta sebagai bentuk perlindungan dari segala mara bahaya. Tradisi ini berbentuk kirab budaya. Masyarakat akan melakukan kirab mengelilingi wilayah Padukuhan Kadisoro dari selatan hingga utara, yang start dan finish nya ada di meeting point Dewi Kajii. Acara ini begitu meriah dengan diwarnai oleh ratusan peserta dari berbagai kalangan dan elemen, menampilkan kreativitas yang memukau dari RT 01 hingga RT 08 Kadisoro. Melalui Merti Dusun ini, kita dapat memaknai pentingnya kebersamaan dan semangat gotong royong untuk memajukan Kadisoro, yang memiliki beragam prestasi unggulan, salah satunya adalah destinasi wisata Dewi Kajii.  Hmm, Sobat Kajii juga berkesempatan untuk menyaksikan tradisi ini dan bahkan ikut menjadi bagian, loh. Yuk, bergabung, harga mulai dari Rp10.000,00 saja!', '2024-06-09 03:57:46', '2024-06-11 20:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `atraksi_image`
--

CREATE TABLE `atraksi_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `atraksi_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atraksi_image`
--

INSERT INTO `atraksi_image` (`id`, `atraksi_id`, `url`, `created_at`, `updated_at`) VALUES
(23, 4, '1718135443_1budidayakaji', '2024-06-11 19:50:43', '2024-06-11 19:50:43'),
(24, 5, '1718135584_1budidayaikanhias', '2024-06-11 19:53:04', '2024-06-11 19:53:04'),
(25, 7, '1718135778_1pagelaranwayangkaji', '2024-06-11 19:56:18', '2024-06-11 19:56:18'),
(26, 11, '1718135921_1reogkaji', '2024-06-11 19:58:41', '2024-06-11 19:58:41'),
(27, 12, '1718136016_1mertidusunkaji', '2024-06-11 20:00:16', '2024-06-11 20:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `article`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Kontes Ikan Hias', 'Desa Wisata Kadisoro , Bantul, DI Yogyakarta pada tanggal 21-27 September 2020 nampak berbeda. Banyak spanduk dan bendera terpajang menyambut pengunjung yang datang. Kontes Guppy Kadisoro ini merupakan agenda Dewi Kajii, Mina Muda Sejahtera bersama Jogja Fancy Guppy untuk menggaet wisatawan berkunjung.\r\n\r\nKontes ini bermula dari dampak Covid 19 yang membuat sektor pariwisata lesu, himbuan dari pemerintah untuk tetap berada di rumah membuat orang tidak berpergian. Maka dari itu, perlunya strategi agar wisatawan tetap dapat berkunjung yaitu dengan menerapkan protokol kesehatan.\r\n\r\nMengambil tema “Bersama Ikan Hias Kuatkan Ekonomi Rakyat.” agenda ini harapannya dapat menguatkan ekonomi masyarakat sekitar menghadapi dampak Pandemi Covid 19. Serangkaian acara dalam Kontes Guppy Kadisoro ini mulai dari bursa ikan hias, workshop, dan kontes guppy yang memperebutkan Piala Bupati Bantul', 'posts/berita/1718134358.jpg', '2024-04-26 12:49:49', '2024-06-11 19:32:38'),
(4, 'Bursa Ikan Hias, Workshop, Kontes Guppy', 'Bursa ikan hias menjual ikan hasil budidaya masyarakat Kadisoro sendiri. Ada berbagai jenis mulai dari guppy, cupang, peacock bass, manfish, rainbow, dan sebagainya. Workshop pemasaran ikan hias ini menyasar masyarakat umum dan pada khususnya pembudidaya ikan di Kadisoro. Penyampaian materi ini harapannya dapat membantu pembudidaya dalam meningkatkan penjualan hasil budidayanya.  \r\n\r\nKontes Guppy Kadisoro yang berlangsung tanggal 27 September 2020 di Desa Wisata Kadisoro merupakan puncak acara dan telah sukses berjalan. Lomba terbagi ke dalam 15 kelas berbagai jenis dengan jumlah ikan kontes sebanyak 788 ekor guppy. Jumlah ini jauh melebihi target dari panitia bahkan banyak peserta kontes guppy yang “kecelik” karena tidak dapat mendaftarkan ikannya.\r\n\r\nPeserta yang hadir tidak hanya berasal dari Yogya tapi juga dari berbagai daerah , seperti Cilacap, Temanggung, Solo, Jakarta, Semarang, Cirebon, dan lainnya. Tak heran jika event ini boleh dibilang event nasional.\r\n\r\nMenurut Muh Gema Ramadhan selaku koordinator dalam Kontes Guppy Kadisoro, agenda ini rencananya akan dilakukan secara rutin setiap tahunnya. Ini akan mendukung eksitensi Desa Wisata Kadisoro dalam menuju Kampung Wisata Ikan Hias. Sampai Jumpa Di Kontes Guppy Kadisoro 2021. (Dedy Wahyu Ardyanto)', 'posts/berita/1718134500.jpg', '2024-04-26 13:02:23', '2024-06-11 19:35:00'),
(7, 'Reong Ria Kelana, Sepeda Onthel, dan Bonsai', 'Reog Ria Kelana merupakan sebuah seni yang sudah tumbuh dan berkembang sejak lama di wilayah Kadisoro. Pegiat seni Reog Ria Kelana merupakan warga Kadisoro yang terdiri dari pemuda, paruh baya, hingga lansia. Pagelaran Reog Ria Kelana biasanya dilaksanakan hampir sekali setiap tahun, namun akhir-akhir ini utamanya saat kondisi pandemi Covid-19, pagelaran tersebut harus dihentikan sementara demi menjaga keamanan dan kesehatan semua warga yang terlibat dalam pagelaran tersebut. Kehadiran Reog Ria Kelana di tengah masyarakat Kadisoro menjadi hal yang sangat membahagiakan karena dapat menjadi salah satu hiburan bagi mereka. Adanya Reog Ria Kelana ini juga menjadi salah satu daya tarik bagi wisatawan Dewi Kajii.\r\n\r\nKomunitas pertama yang ada di Dewi Kajii yaitu Komunitas Sepeda Onthel.Sepeda Onthel atau yang sering juga disebut sebagai sepeda unta adalah tipe sepeda yang desainnya mengacu pada sepeda Belanda yang bercirikan posisi duduk tegak. Sepeda ontel yang khas ini menjadi daya tarik tersendiri bagi para penggemar kendaraan tak bermotor. Para warga Kadisoro, khususnya para kaum adam, banyak yang tertarik dengan sepeda onthel. Selain bentuknya yang unik, sepeda onthel juga kerap menjadi kendaraan sehari-hari para warga. Bahkan hampir setiap Sabtu dan Minggu pagi para pemilik sepeda onthel ini melakukan gowes bersama. Hal ini juga menjadi salah satu daya tarik bagi wisatawan Dewi Kajii karena para wisatawan juga bisa meminjam sepeda onthel milik warga untuk berkeliling Kadisoro.\r\n\r\nAda satu lagi yang menjadi daya tarik wisatawan di Dewi Kajii yaitu komunitas bonsai. Berawal dari beberapa orang yang gemar mengoleksi tumbuhan unik ini, terbentuklah komunitas bonsai kadisoro.', 'posts/berita/1718134731.jpg', '2024-05-03 13:22:22', '2024-06-11 19:38:51'),
(8, 'Lomba Mancing Bersama Warga Kadisoro', 'Rabu 4 Mei 2022 bertempat di Sawah Kolam Terpadu Pokdakan Mina Muda Sejahtera Kadisoro RT 04 Gilangharjo Pandak Bantul DI Yogyakarta. Pokdakan Mina Muda Sejahtera bersama Desa Wisata Kajii dan Forum Keakraban Muda Mudi Kadisoro (FKMMK) melangsungkan Lomba Mancing bersama. Pelaksanaan lomba ini juga sebagai ajang silaturahmi warga Kadisoro dan sekitarnya bersamaan juga dengan momen lebaran idul fitri 1443 H. \r\n\r\nPada Acara ini juga dihadiri oleh Bapak Ibu Andriana Wulandari selaku DPRD Provinsi DIY dan Dukuh Kadisoro Bapak Basuki Pantoro . Lomba ini diadakan di Sawah milik dewi Kajii yang nantinya akan dikelola oleh Pokdakan Mina Muda Sejahtera sebagai salah satu lahan mina padi. Lomba mancing ini merupakan lomba perdana setelah sekian lama dari wabah pandemi , serta mengenalkan desa wisata Kajii merupakan desa wisata berbasis edukasi ikan , ikan yang ada dalam lomba ini ialah ikan lele.\r\n\r\nSetelah ikan lele dilepaskan ke kolam lomba berlangsung dari pukul 19.30 s.d. 23.00 WIB. Panitia mengundi tempat duduk bagi peserta dan joran pancing terbuat dari bambu membuat lomba mancing kali ini terasa berbeda. Lada lomba kali ini berjumlah 64 peserta mulai dari anak-anak, pemuda hingga orang tua. Sdr. Abi, Raffan & Rehan memenangkan lomba karena berhasil mendapatkan timbangan jumlah ikan terberat. Selain itu terdapat berbagai doorprize mulai dari minyak, pisau dapur, dan berbagai peralatan dapur. Doorprize ini untuk bagi peserta yang mendapatkan ikan berpita.', 'posts/berita/1718134872.jpg', '2024-05-03 13:22:32', '2024-06-11 19:41:12'),
(10, 'Halal Bihalal Masyarakat Kadisoro', 'Kadisoro – pada hari Ahad, 15 Mei 2022. Bertempat di Halaman Rumah Bapak Basuki Pantoro selaku Dukuh Kadisoro melalui kepengurusan pedukuhan mengadakan halal bi halal dan sosialisasi terkait dengan rencana kedepan pedukuhan kadisoro , juga sosialisasi tentang sapta pesona desa wisata kajii. \r\n\r\nDalam acara ini dihadiri juga Lurah Desa Gilangharjo Bapak Drs.H. Pardiyono, Ibu Andriana Wulandari selaku DPRD Provinsi DIY dan juga ibu ibu PKK.Dalam acara tersebut hadir pula Ketua RT 01 s.d 08 bersama perwakilan masyarakat dan kepemudaan.\r\n\r\nAcara dibuka dengan pembacaan ayat suci al Qur’an oleh Bapak Purnomo. Dilanjutkan ikrar syawalan oleh Bapak Martupon. Kemudian sambutan dan sosialisasi Penguatan Sapta Pesona Pada Desa Wisata Kajii oleh Sdr. Muh. Gema Ramadhan selaku perwakilan dari Pokdarwis Gilang Wicitra Gilangharjo. Penyampaian materi sangat mudah diterima masyarakat terlihat dari respon warga Kadisoro yang sangat baik. Acara ditutup dengan makan dan foto bersama seluruh undangan.', 'posts/berita/1718134997.jpg', '2024-06-11 19:43:17', '2024-06-11 19:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE `homestay` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homestay`
--

INSERT INTO `homestay` (`id`, `name`, `description`, `location`, `created_at`, `updated_at`) VALUES
(18, 'Homestay Channa', 'Homestay yang dimiliki oleh Robi Dwi Saputro ini berlokasi di Kadisoro RT 03, Gilangharjo, Pandak,\r\nBantul, D.I Yogyakarta menyediakan satu buah kamar, Sobat Kajii hanya perlu merogoh kocek sebesar\r\nRp150.000,00 per malam (max 2 orang) dan Rp200.000,00 per malam (max 4 orang) sudah dapat\r\nmenginap di Homestay Channa ini. Homestay ini menyediakan fasilitas berupa kamar mandi bersama,\r\nperalatan mandi, kasur, almari, kipas angin, perlengkapan P3K, tempat sampah, dan tempat parkir.\r\nSobat Kajii juga akan mendapatkan sarapan pagi serta air minum, sehingga tidak perlu ambil pusing akan\r\nkelaparan ketika menginap disini. Di homestay ini terdapat pembesaran Channa, Robi, selaku pemilik\r\nhomestay dengan senang hati menjelaskan kepada Sobat Kajii bagaimana cara pembesarannya yang\r\nbaik dan benar. Selain itu, terdapat pula koleksi motor vespa. Bagi pecinta motor vespa pasti sangat\r\nsenang jika menginap disini.\r\nApabila Sobat Kajii datang ke Yogyakarta menggunakan jalur udara, cukup menempuh jarak 25 km dari\r\nBandara Adisucipto Yogyakarta dan 34 km dari Bandara Yogyakarta International Airport untuk sampai\r\ndi Homestay Channa ini. Sedangkan, apabila menggunakan jalur darat, cukup menempuh jarak 17 km\r\nbaik itu dari Stasiun Kereta Api Tugu Yogyakarta maupun Stasiun Kereta Api Lempuyangan Yogyakarta,\r\nSobat Kajii akan sampai di Homestay Channa ini.', 'Homestay Chana', '2024-06-12 16:17:04', '2024-06-12 16:17:04'),
(19, 'Homestay Guppy', 'Sobat Kajii dapat menginap di Homestay Guppy. Homestay yang dimiliki oleh Muhammad Gema\r\nRamadhan ini berlokasi di Kadisoro RT 03, Gilangharjo, Pandak, Bantul, D.I. Yogyakarta. Menyediakan\r\nsatu buah kamar, Sobat Kajii dapat menginap di Homestay ini mulai dari Rp150.000,00 per malam (max\r\n2 orang) dan Rp200.000,00 per malam (max 4 orang). Adapun fasilitas yang akan Sobat Kajii dapatkan\r\nantara lain: kamar mandi bersama, peralatan mandi, kasur, kipas angin, tempat shalat, televisi,\r\nperlengkapan P3K, tempat sampah, dan tempat parkir. Selain itu, akan disediakan sarapan pagi serta air\r\nminum. Sobat Kajii juga dapat melihat serta belajar bagaimana cara budidaya guppy, pemilik homestay\r\ndengan senang hati akan menjelaskannya. Di Homestay ini juga terdapat aquarium system, Sobat Kajii\r\ndapat bertanya bagaimana cara kerja aquarium system tersebut. Selanjutnya, terpajang berbagai\r\nmacam guppy kontes yang sangat menarik mata. Homestay Guppy ini mempunyai keunikan yaitu\r\ntersedianya perpustakaan (Rumah Pintar) yang berisi berbagai macam jenis buku. Setelah melihat\r\nberbagai aktivitas yang ada di homestay, Sobat Kajii dapat sekalian menambah ilmu dengan berkunjung\r\nke perpustakaan ini.\r\nApabila Sobat Kajii datang ke Yogyakarta menggunakan jalur udara, cukup menempuh jarak 25 km dari\r\nBandara Adisucipto Yogyakarta dan 34 km dari Bandara Yogyakarta International Airport untuk sampai\r\ndi Homestay Guppy ini. Sedangkan, apabila menggunakan jalur darat, cukup menempuh jarak 17 km\r\nbaik itu dari Stasiun Kereta Api Tugu Yogyakarta maupun Stasiun Kereta Api Lempuyangan Yogyakarta,\r\nSobat Kajii akan sampai di Homestay Guppy ini.', 'Homestay Guppy', '2024-06-12 16:26:51', '2024-06-12 16:26:51'),
(20, 'Homestay Manfish', 'Homestay Manfish. Homestay ini berlokasi di Kadisoro RT 03, Gilangharjo, Pandak, Bantul, D.I.\r\nYogyakarta. Bangkit Wirasmoyo selaku pemilik homestay akan menyambut Sobat Kajii dengan senang\r\nhati. Menyediakan satu buah kamar, Sobat Kajii tidak perlu risau dengan harga sewanya, dibandrol\r\ndengan harga Rp150.000,00 per malam (max 2 orang) dan Rp200.000,00 per malam (max 4 orang)\r\nsudah dapat menginap di Homestay Manfish ini. Ketika menginap di homestay ini, Sobat Kajii akan\r\nmendapatkan fasilitas berupa kamar mandi pribadi, peralatan mandi, kasur, almari, AC, perlengkapan\r\nP3K, tempat sampah, dan tempat parkir. Tak perlu khawatir kelaparan di pagi hari karena akan\r\ndisediakan sarapan pagi serta air minum. Sobat Kajii juga dapat bercengkrama dengan pemilik homestay\r\nmaupun warga lokal di Gazebo yang ada. Selain itu, Sobat Kajii dapat belajar bagaimana cara budidaya\r\nmanfish lengkap dengan pemasaran serta packing ikan hias.\r\nApabila Sobat Kajii datang ke Yogyakarta menggunakan jalur udara, cukup menempuh jarak 25 km dari\r\nBandara Adisucipto Yogyakarta dan 34 km dari Bandara Yogyakarta International Airport untuk sampai\r\ndi Homestay Manfish ini. Sedangkan, apabila menggunakan jalur darat, cukup menempuh jarak 17 km\r\nbaik itu dari Stasiun Kereta Api Tugu Yogyakarta maupun Stasiun Kereta Api Lempuyangan Yogyakarta,\r\nSobat Kajii akan sampai di Homestay Manfish ini.', 'Homestay Manfish', '2024-06-12 16:28:16', '2024-06-12 16:28:16'),
(21, 'Homestay Molly', 'Homestay Molly dapat menjadi pilihan Sobat Kajii saat singgah di Dewi Kajii. Homestay yang dimiliki oleh\r\nLaras Ismayadi atau yang sering dipanggil dengan Mas Maya ini berlokasi di Kadisoro RT 03, Gilangharjo,\r\nPandak, Bantul, D.I Yogyakarta. Menyediakan dua buah kamar yang dapat ditempati ketika singgah di\r\nDewi Kajii yang tentunya dengan harga yang terjangkau. Mulai dari Rp150.000 per malam (max 2 orang)\r\nhingga Rp200.000 per malam (max 4 orang) Sobat Kajii sudah dapat bermalam di homestay ini.\r\nHomestay milik Mas Maya ini menyediakan fasilitas berupa kamar mandi pribadi, peralatan mandi,\r\nkasur, almari, kipas angin, tempat shalat, perlengkapan P3K, tempat sampah, dan tempat parkir. Tak\r\nperlu khawatir untuk mencari sarapan, Sobat Kajii akan mendapatkan sarapan pagi dan juga air minum.\r\nDisini, Sobat Kajii dapat belajar bagaimana cara membuat aquarium loh! Menarik bukan? Selain itu, Mas\r\nMaya merupakan pembudidaya molly yang telah berkecimpung di dunia per-molly-an sedari lama, akan\r\nsangat rugi jika Sobat Kajii tidak memanfaatkan kesempatan yang ada untuk belajar budidaya molly\r\ndisini. Homestay ini mempunyai bangunan unik yaitu bangunan jawa/pendapa yang berada di sisi\r\nbelakang.\r\nApabila Sobat Kajii datang ke Yogyakarta menggunakan jalur udara, cukup menempuh jarak 25 km dari\r\nBandara Adisucipto Yogyakarta dan 34 km dari Bandara Yogyakarta International Airport untuk sampai\r\ndi Homestay Molly ini. Sedangkan, apabila menggunakan jalur darat, cukup menempuh jarak 17 km baik\r\nitu dari Stasiun Kereta Api Tugu Yogyakarta maupun Stasiun Kereta Api Lempuyangan Yogyakarta, Sobat\r\nKajii akan sampai di Homestay Molly ini.', 'Homestay Molly', '2024-06-12 16:29:05', '2024-06-12 16:29:05'),
(22, 'Homestay Platy', 'Homestay Platy dapat menjadi opsi lain Sobat Kajii ketika singgah di Dewi Kajii. Mbah Untung, sapaan\r\nakrabnya, merupakan pemilik Homestay Platy yang berlokasi di Kadisoro RT 03, Gilangharjo, Pandak,\r\nBantul, D.I Yogyakarta. Menyediakan dua buah kamar yang dapat dipilih untuk menginap dengan harga\r\nsewa yang tidak menguras kantong. Dipatok dengan harga Rp150.000,00 per malam (max 2 orang) dan\r\nRp200.000,00 per malam (max 4 orang), Sobat Kajii sudah bisa bermalam di homestay ini. Adapun\r\nfasilitas yang akan diperoleh yaitu kamar mandi bersama, peralatan mandi, kasur, almari, kipas angin,\r\ntempat shalat, perlengkapan P3K, tempat sampah, dan tempat parkir. Sobat Kajii juga akan\r\nmendapatkan sarapan pagi serta air minum sehingga tak perlu risau akan kelaparan. Tak perlu khawatir\r\n\r\njika kebutuhan sehari - hari telah menipis, homestay milik Mbah Untung ini memiliki toko kelontong\r\nsederhana yang akan memenuhi kebutuhan kalian. Hamparan rumput yang berada tidak jauh dari\r\nhomestay dapat digunakan untuk bersantai atau bercengkrama dengan warga sekitar. Di homestay ini,\r\nSobat Kajii dapat belajar mengenai budidaya platy, Mbah Untung telah melakukan budidaya ini sedari\r\nlama dan sangat bersedia dengan senang hati akan menjelaskan kepada Sobat Kajii. Selain platy,\r\nterdapat pula lobster di homestay ini.\r\nApabila Sobat Kajii datang ke Yogyakarta menggunakan jalur udara, cukup menempuh jarak 25 km dari\r\nBandara Adisucipto Yogyakarta dan 34 km dari Bandara Yogyakarta International Airport untuk sampai\r\ndi Homestay Platy ini. Sedangkan, apabila menggunakan jalur darat, cukup menempuh jarak 17 km baik\r\nitu dari Stasiun Kereta Api Tugu Yogyakarta maupun Stasiun Kereta Api Lempuyangan Yogyakarta, Sobat\r\nKajii akan sampai di Homestay Platy ini.', 'Homestay Platy', '2024-06-12 16:31:58', '2024-06-12 16:31:58'),
(23, 'Homestay Oranda', 'Homestay Oranda menawarkan suasana yang tenang dan bersahabat. Homestay Oranda dimiliki\r\noleh Ibu Sulis dan berlokasi di Kadisoro RT 05. Homestay ini terdapat 2 kamar tidur yang nyaman\r\ndengan kamar mandi bersama yang dilengkapi dengan shower. Kamar tidur juga  sudah\r\ndilengkapi dengan kaca rias, tempat sampah, dan lemari. Selain itu, fasilitas lain yang akan\r\ndidapatkan yaitu  perlengkapan P3K, ruang makan dan ruang tamu dengan meja dan kursi yang\r\nnyaman, serta dapur yang sudah dilengkapi dengan kompor gas juga wastafel untuk memasak\r\nmakanan. Pemilik homestay merupakan pembudidaya ikan konsumsi dan hias, terutama ikan\r\nGoldfish Oranda. Sehingga saat Sobat Kajii menginap di homestay ini dapat sekaligus berbagi\r\npengalaman dan pengetahuan tentang budidaya ikan.\r\nApabila Sobat Kajii datang ke Yogyakarta menggunakan jalur udara, cukup menempuh jarak 25\r\nkm dari Bandara Adisucipto Yogyakarta dan 34 km dari Bandara Yogyakarta International Airport\r\nuntuk sampai di Homestay Oranda ini. Sedangkan, apabila menggunakan jalur darat, cukup\r\nmenempuh jarak 17 km baik itu dari Stasiun Kereta Api Tugu Yogyakarta maupun Stasiun Kereta\r\nApi Lempuyangan Yogyakarta.', 'Homestay Oranda', '2024-06-12 16:48:32', '2024-06-12 16:48:32'),
(24, 'Homestay Koi', 'Homestay Koi yang dimiliki oleh Ibu Ninik Wati. Homestay ini menawarkan kenyamanan dan keramahan\r\nkepada para tamu yang menginap. Fasilitas yang dapat dinikmati para tamu ketika menginap di sini yaitu\r\nada kamar mandi pribadi/bersama, peralatan mandi, tempat tidur yang nyaman, lemari, kipas angin,\r\narea untuk shalat, perlengkapan pertolongan pertama (P3K), akses wifi, televisi, tempat sampah, serta\r\ntempat parkir yang aman. Dengan suasana yang hangat dan fasilitas yang lengkap, Homestay Koi dapat\r\nmenjadi pilihan yang menarik bagi Sobat Kajii yang akan menginap.\r\nApabila Sobat Kajii datang ke Yogyakarta menggunakan jalur udara, cukup menempuh jarak 25 km dari\r\nBandara Adisucipto Yogyakarta dan 34 km dari Bandara Yogyakarta International Airport untuk sampai\r\ndi Homestay Koi ini. Sedangkan, apabila menggunakan jalur darat, cukup menempuh jarak 17 km baik\r\nitu dari Stasiun Kereta Api Tugu Yogyakarta maupun Stasiun Kereta Api Lempuyangan Yogyakarta', 'Homestay Koi', '2024-06-12 16:49:10', '2024-06-12 16:49:10'),
(25, 'Homestay Glowfish', 'Sobat Kajii memiliki pilihan untuk menginap di Homestay Glow Fish yang hangat dan menyenangkan.\r\nTerletak di Kadisoro RT 07, homestay ini dimiliki oleh Ibu Rini Purnama. Dengan satu kamar yang\r\ntersedia, Sobat Kajii dapat merasakan kenyamanan dengan fasilitas yang disediakan, termasuk kamar\r\nmandi bersama, perlengkapan mandi, kasur yang nyaman, lemari untuk penyimpanan barang bawaan,\r\nkipas angin, tempat untuk shalat, perlengkapan pertolongan pertama (P3K), televisi untuk hiburan,\r\ntempat sampah, dan area parkir yang aman untuk kendaraan. Dengan suasana yang hangat dan fasilitas\r\nyang lengkap, Homestay Glow Fish menjadi pilihan menarik bagi Sobat Kajii yang mencari penginapan\r\nsederhana namun nyaman.\r\nApabila Sobat Kajii datang ke Yogyakarta menggunakan jalur udara, cukup menempuh jarak 25 km dari\r\nBandara Adisucipto Yogyakarta dan 34 km dari Bandara Yogyakarta International Airport untuk sampai\r\ndi Homestay Glow Fish ini. Sedangkan, apabila menggunakan jalur darat, cukup menempuh jarak 17 km\r\nbaik itu dari Stasiun Kereta Api Tugu Yogyakarta maupun Stasiun Kereta Api Lempuyangan.', 'Homestay Glowfish', '2024-06-12 16:51:22', '2024-06-12 16:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `homestay_image`
--

CREATE TABLE `homestay_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homestay_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homestay_image`
--

INSERT INTO `homestay_image` (`id`, `homestay_id`, `url`, `created_at`, `updated_at`) VALUES
(24, 18, '1channakajii.jpg', '2024-06-12 16:17:04', '2024-06-12 16:17:04'),
(25, 19, '1guppykajii.jpg', '2024-06-12 16:26:51', '2024-06-12 16:26:51'),
(26, 20, '1manfishkajii.jpg', '2024-06-12 16:28:16', '2024-06-12 16:28:16'),
(27, 21, '1mollykajii.jpg', '2024-06-12 16:29:05', '2024-06-12 16:29:05'),
(28, 22, '55157.jpg', '2024-06-12 16:31:58', '2024-06-12 16:31:58'),
(29, 23, '1orandakajii.jpg', '2024-06-12 16:48:32', '2024-06-12 16:48:32'),
(30, 24, '1koikajii.jpg', '2024-06-12 16:49:10', '2024-06-12 16:49:10'),
(31, 25, '1glowfishkajii.jpg', '2024-06-12 16:51:22', '2024-06-12 16:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `katalog_ikan`
--

CREATE TABLE `katalog_ikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `katalog_ikan`
--

INSERT INTO `katalog_ikan` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(7, 'Platy', 15000, '2024-06-12 15:20:51', '2024-06-12 15:20:51'),
(8, 'Molly', 20000, '2024-06-12 15:21:27', '2024-06-12 15:21:27'),
(9, 'Manfish', 50000, '2024-06-12 15:51:09', '2024-06-12 15:51:09'),
(10, 'GoldFish', 50000, '2024-06-12 15:51:47', '2024-06-12 15:51:47'),
(11, 'Guppy', 10000, '2024-06-12 15:52:30', '2024-06-12 15:52:30'),
(12, 'Arwana', 1000000, '2024-06-12 15:53:28', '2024-06-12 15:53:28'),
(13, 'Chana', 200000, '2024-06-12 15:54:04', '2024-06-12 15:54:04'),
(14, 'Koi', 1000000, '2024-06-12 15:56:26', '2024-06-12 15:56:26'),
(15, 'Belida', 200000, '2024-06-12 15:57:01', '2024-06-12 15:57:01'),
(16, 'Hifin', 50000, '2024-06-12 15:57:32', '2024-06-12 15:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `katalog_ikan_image`
--

CREATE TABLE `katalog_ikan_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `katalog_ikan_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `katalog_ikan_image`
--

INSERT INTO `katalog_ikan_image` (`id`, `katalog_ikan_id`, `url`, `created_at`, `updated_at`) VALUES
(9, 7, 'platykajii.png', '2024-06-12 15:20:51', '2024-06-12 15:20:51'),
(10, 8, 'mollykajii.png', '2024-06-12 15:21:27', '2024-06-12 15:21:27'),
(11, 9, 'manfishkajii.png', '2024-06-12 15:51:09', '2024-06-12 15:51:09'),
(12, 10, 'goldfishkajii.jpg', '2024-06-12 15:51:47', '2024-06-12 15:51:47'),
(13, 11, 'guppykajii.png', '2024-06-12 15:52:30', '2024-06-12 15:52:30'),
(14, 12, 'arwanakajii.png', '2024-06-12 15:53:28', '2024-06-12 15:53:28'),
(15, 13, 'channakajii.png', '2024-06-12 15:54:04', '2024-06-12 15:54:04'),
(16, 14, 'koi.jpeg', '2024-06-12 15:56:26', '2024-06-12 15:56:26'),
(17, 15, 'belidakajii.png', '2024-06-12 15:57:01', '2024-06-12 15:57:01'),
(18, 16, 'hifinkajii.png', '2024-06-12 15:57:32', '2024-06-12 15:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_20_141753_create_atraksis_table', 1),
(7, '2024_03_24_080655_create_katalog_ikans_table', 2),
(8, '2024_03_24_083531_create_homestays_table', 2),
(9, '2024_03_24_072159_create_paket_wisata_table', 3),
(10, '2024_03_26_154704_create_sejarahs_table', 4),
(11, '2024_03_26_154828_create_beritas_table', 4),
(12, '2024_03_26_154840_create_ulasans_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(25, 'Paket A - Live In Regular (2H1M) *Special', 500, '2024-06-10 06:27:08', '2024-06-11 21:45:31'),
(26, 'Paket B - Live In Regular (2H1M)', 450, '2024-06-11 21:56:11', '2024-06-11 21:58:24'),
(27, 'Paket A - Visit Farm Dewasa/Reguler', 150, '2024-06-11 22:02:21', '2024-06-11 22:04:05'),
(28, 'Paket B - Visit Farm Dewasa/Reguler', 234, '2024-06-11 22:04:52', '2024-06-11 22:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata_content`
--

CREATE TABLE `paket_wisata_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_wisata_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_wisata_content`
--

INSERT INTO `paket_wisata_content` (`id`, `paket_wisata_id`, `content`, `created_at`, `updated_at`) VALUES
(130, 25, 'Minimal 10 orang', '2024-06-11 21:45:31', '2024-06-11 21:45:31'),
(131, 25, 'Durasi 2 hari 1 malam', '2024-06-11 21:45:31', '2024-06-11 21:45:31'),
(132, 25, 'Welcome Drink + Visit Farm + Gala Dinner', '2024-06-11 21:45:31', '2024-06-11 21:45:31'),
(133, 25, 'Homestay + Sepeda + Edukasi Wayang Ikan & Nggamel', '2024-06-11 21:45:31', '2024-06-11 21:45:31'),
(134, 25, 'Gerobak Sapi + Melukis Topeng + Membatik', '2024-06-11 21:45:31', '2024-06-11 21:45:31'),
(140, 26, 'Minimal 10 orang', '2024-06-11 21:58:24', '2024-06-11 21:58:24'),
(141, 26, 'Durasi 2 hari 1 malam', '2024-06-11 21:58:24', '2024-06-11 21:58:24'),
(142, 26, 'Welcome Drink + Visit Farm + Gala Dinner', '2024-06-11 21:58:24', '2024-06-11 21:58:24'),
(143, 26, 'Homestay + Sepeda + Edukasi Wayang Ikan', '2024-06-11 21:58:24', '2024-06-11 21:58:24'),
(144, 26, 'Gerobak Sapi + Melukis Topeng + Membatik', '2024-06-11 21:58:24', '2024-06-11 21:58:24'),
(150, 27, 'Minimal 30 orang', '2024-06-11 22:04:05', '2024-06-11 22:04:05'),
(151, 27, 'Durasi 5 jam', '2024-06-11 22:04:05', '2024-06-11 22:04:05'),
(152, 27, 'Visitasi 2 Farm Ikan Hias & Konsumsi', '2024-06-11 22:04:05', '2024-06-11 22:04:05'),
(153, 27, 'Membuat Wayang Ikan + Sepeda + Makan & Minum', '2024-06-11 22:04:05', '2024-06-11 22:04:05'),
(154, 27, 'Melukis Topeng + Membatik + Gerobak Sapi', '2024-06-11 22:04:05', '2024-06-11 22:04:05'),
(160, 28, 'cvx', '2024-06-11 22:12:07', '2024-06-11 22:12:07'),
(161, 28, 'vvx', '2024-06-11 22:12:07', '2024-06-11 22:12:07'),
(162, 28, 'xvvd', '2024-06-11 22:12:07', '2024-06-11 22:12:07'),
(163, 28, 'vdvd', '2024-06-11 22:12:07', '2024-06-11 22:12:07'),
(164, 28, 'vdvd', '2024-06-11 22:12:07', '2024-06-11 22:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata_image`
--

CREATE TABLE `paket_wisata_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_wisata_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_wisata_image`
--

INSERT INTO `paket_wisata_image` (`id`, `paket_wisata_id`, `url`, `created_at`, `updated_at`) VALUES
(21, 25, '1718142331_1paketalivekajii', '2024-06-11 21:45:31', '2024-06-11 21:45:31'),
(22, 26, '1718142971_1paketblivekajii', '2024-06-11 21:56:11', '2024-06-11 21:56:11'),
(23, 27, '1718143341_paketadewasakaji', '2024-06-11 22:02:21', '2024-06-11 22:02:21'),
(24, 28, '1718143492_paketbdewasakaji', '2024-06-11 22:04:52', '2024-06-11 22:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `article`, `created_at`, `updated_at`) VALUES
(1, 'Desa Wisata Kadisoro Nyawiji Dadi Siji atau yang dikenal sebagai Dewi Kajii di Desa Gilangharjo muncul dari keinginan masyarakat untuk menjadikan Dusun Kadisoro sebagai destinasi wisata berbasis masyarakat. Mayoritas penduduk Kadisoro adalah pembudidaya ikan hias, yang menjadi alasan utama pengembangan wilayah tersebut menjadi Desa Wisata. Identifikasi potensi desa diikuti dengan sosialisasi kepada masyarakat, yang kemudian sepakat untuk menciptakan lingkungan dan suasana kondusif guna mendukung perkembangan kepariwisataan melalui penerapan prinsip Sadar Wisata dan SAPTA PESONA.', NULL, '2024-06-11 19:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ulasan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id`, `name`, `email`, `ulasan`, `created_at`, `updated_at`) VALUES
(4, 'asda', 'asda@gmail.com', 'SDAASD', '2024-05-04 15:57:00', '2024-05-04 15:57:00'),
(5, 'asda', 'asda@gmail.com', 'SDAASD', '2024-05-04 15:58:21', '2024-05-04 15:58:21'),
(11, 'asdasd122', 'naufal060906@gmail.com', 'asd', '2024-06-12 15:36:25', '2024-06-12 15:36:25'),
(12, 'sad', 'naufal060906@gmail.com', 's2213', '2024-06-12 15:36:43', '2024-06-12 15:36:43'),
(13, 'asd', 'naufal060906@gmail.com', 'asdasd', '2024-06-12 15:36:54', '2024-06-12 15:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Clementina Ratke DDS', 'athena.reinger@example.net', '2024-03-26 09:38:25', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'a9x5lSsJ3h', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(2, 'Caroline Pollich', 'steuber.alvera@example.com', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'NMbs4PWQNn', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(3, 'Mathew Gutmann', 'ansel.bradtke@example.org', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'KLmmCP7Lvc', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(4, 'Raymond Kautzer', 'yundt.amanda@example.com', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'VmyOzCIAgM', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(5, 'Allie Mueller', 'qosinski@example.net', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'llyoKOQWon', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(6, 'Prof. Johnpaul Kub', 'bernice98@example.org', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'Z5muEp5Hzj', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(7, 'Sandra Dooley', 'jarvis93@example.com', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'Li3W745Qjb', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(8, 'Elise Witting', 'rupert.mertz@example.net', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'mSLyOECein', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(9, 'Marguerite Kunde', 'epadberg@example.org', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'LPIydajot3', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(10, 'Mylene Haley', 'leilani59@example.com', '2024-03-26 09:38:26', '$2y$12$f/sc71sGEal1ev1Njwbx.epf6jA.CqJ7i86GXfGqEP/pxaip2iPsy', 'XnOcbZ24Kt', '2024-03-26 09:38:26', '2024-03-26 09:38:26'),
(11, 'admin', 'admin@test.com', '2024-03-26 09:38:26', '$2y$12$bXQ9jMzWFgJHERFDntbGFenV1rokdIS7B2jweCyMzXJm/wAMUGame', 'XhNi7e8X9y1ahXXGtaLVaeT2nlXciixDxSgoJ0VPWlxXRJbT2Fd8yJdDkfEd', '2024-03-26 09:38:26', '2024-03-26 09:38:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atraksi`
--
ALTER TABLE `atraksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atraksi_image`
--
ALTER TABLE `atraksi_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atraksi_image_atraksi_id_foreign` (`atraksi_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homestay_image`
--
ALTER TABLE `homestay_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `homestay_image_homestay_id_foreign` (`homestay_id`);

--
-- Indexes for table `katalog_ikan`
--
ALTER TABLE `katalog_ikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog_ikan_image`
--
ALTER TABLE `katalog_ikan_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `katalog_ikan_image_katalog_ikan_id_foreign` (`katalog_ikan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_wisata_content`
--
ALTER TABLE `paket_wisata_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket_wisata_content_paket_wisata_id_foreign` (`paket_wisata_id`);

--
-- Indexes for table `paket_wisata_image`
--
ALTER TABLE `paket_wisata_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket_wisata_image_paket_wisata_id_foreign` (`paket_wisata_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
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
-- AUTO_INCREMENT for table `atraksi`
--
ALTER TABLE `atraksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `atraksi_image`
--
ALTER TABLE `atraksi_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homestay`
--
ALTER TABLE `homestay`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `homestay_image`
--
ALTER TABLE `homestay_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `katalog_ikan`
--
ALTER TABLE `katalog_ikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `katalog_ikan_image`
--
ALTER TABLE `katalog_ikan_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `paket_wisata_content`
--
ALTER TABLE `paket_wisata_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `paket_wisata_image`
--
ALTER TABLE `paket_wisata_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atraksi_image`
--
ALTER TABLE `atraksi_image`
  ADD CONSTRAINT `atraksi_image_atraksi_id_foreign` FOREIGN KEY (`atraksi_id`) REFERENCES `atraksi` (`id`);

--
-- Constraints for table `homestay_image`
--
ALTER TABLE `homestay_image`
  ADD CONSTRAINT `homestay_image_homestay_id_foreign` FOREIGN KEY (`homestay_id`) REFERENCES `homestay` (`id`);

--
-- Constraints for table `katalog_ikan_image`
--
ALTER TABLE `katalog_ikan_image`
  ADD CONSTRAINT `katalog_ikan_image_katalog_ikan_id_foreign` FOREIGN KEY (`katalog_ikan_id`) REFERENCES `katalog_ikan` (`id`);

--
-- Constraints for table `paket_wisata_content`
--
ALTER TABLE `paket_wisata_content`
  ADD CONSTRAINT `paket_wisata_content_paket_wisata_id_foreign` FOREIGN KEY (`paket_wisata_id`) REFERENCES `paket_wisata` (`id`);

--
-- Constraints for table `paket_wisata_image`
--
ALTER TABLE `paket_wisata_image`
  ADD CONSTRAINT `paket_wisata_image_paket_wisata_id_foreign` FOREIGN KEY (`paket_wisata_id`) REFERENCES `paket_wisata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
