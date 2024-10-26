-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 06:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesonajawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `beritaKODE` char(4) NOT NULL,
  `beritaNAMA` varchar(200) NOT NULL,
  `beritaKET` varchar(500) NOT NULL,
  `beritaTGL` varchar(250) NOT NULL,
  `beritaPIC` char(150) NOT NULL,
  `beritaVID` char(200) NOT NULL,
  `kategoriKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`beritaKODE`, `beritaNAMA`, `beritaKET`, `beritaTGL`, `beritaPIC`, `beritaVID`, `kategoriKODE`) VALUES
('B001', 'Kafe Bertema Anime Cardcaptor Sakura Dibuka di Jepang', 'Kafe bertema anime Cardcaptor Sakura telah dibuka di Shibuya, Jepang, mulai Kamis (23/11/2023). Bernama Cardcaptor Sakura Kero-chan Chinese Cafe, kafe ini ada di lantai enam gedung Shibuya Parco Tokyo Parade Goods & Cafe. Pengunjung bisa menikmati aneka visual karakter Cardcaptor Sakura yaitu Sakura Kinomoto, Li Syaoran, dan Kero. Mereka pun memakai kostum khas China. ', '2 Desember 2023', 'cardcaptorcafe.jpg', 'https://www.youtube.com/embed/iuoxNmWVMLQ', 'K002'),
('B002', 'Onsen di Jepang Ini Tawarkan Pengalaman Berendam dengan Godzilla', 'Onsen atau pemandian air panas di Jepang umumnya tidak hanya menawarkan fasilitas berendam, tapi juga suasana, misalnya dengan gemericik air atau dekorasi dedaunan. Di Prefektur Kanagawa, Jepang, terdapat pemandian air panas Hakone Kowakien Yunessun yang menawarkan tema unik yakni Godzilla. Pengunjung bisa memilih berendam dengan pengalaman berbeda, mulai dari ', '2 Desember 2023', 'bathgodzilla.jpg', 'https://www.youtube.com/embed/cRTfqWJdiVA?si=rir0qng9ftbP4iuI', 'K006'),
('B003', 'Tokyo Jadi Destinasi Favorit Wisatawan Indonesia ke Jepang', 'Pariwisata dunia mulai menggeliat kembali setelah selama dua tahun sempat tidur panjang.  Pada Oktober 2022, Jepang yang sebelumnya membatasi masuknya wisatawan mulai menerima kembali para wisatawan mancanegara (wisman) yang ingin mencicipi keindahan Negeri Sakura itu.  Sebelumnya, memang telah ada pelonggaran terkait wisatawan yang masuk, tapi sejak Oktober pemerintah Jepang kembali memberlakukan skema bebas visa. Ditambah lagi, para wisatawan yang datang tak diwajibkan untuk menunjukkan hasil ', '2 Desember 2023', 'tokyo.jpg', 'https://www.youtube.com/embed/O9B-QFwWW4g?si=Pd1gPyv8ILdehpRy', 'K006');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `destinasiKET` varchar(1000) NOT NULL,
  `destinasiPIC` char(120) NOT NULL,
  `kategoriKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`destinasiKODE`, `destinasiNAMA`, `destinasiKET`, `destinasiPIC`, `kategoriKODE`) VALUES
('D001', 'Akihabara', 'Akihabara merupakan pusat perbelanjaan untuk barang elektronik, suku cadang elektronik, anime, manga, dan doujinshi. Kawasan ini merupakan surga otaku di bidang anime, manga, dan permainan video. Di tempat ini terdapat banyak maid cafe. Di sini juga terdapat theater AKB48.', 'akihabara.jpg', 'K005'),
('D002', 'Hokkaido', 'Hokkaido merupakan Prefektur terbesar dan paling utara di Jepang. Pulau ini sebelumnya dikenal sebagai Ezo, Yezo, Yeso, atau Yesso. Selat Tsugaru memisahkan Hokkaido dari Honsh?. Kedua pulau dihubungkan oleh rel kereta bawah laut Terowongan Seikan. Kota terbesar di Hokkaido sekaligus ibukotanya, Sapporo merupakan satu-satunya kota di pulau ini yang ditunjuk oleh peraturan sebagai kota terpilih.', 'hokkaido.jpg', 'K001'),
('D003', 'Nagano City', 'Kota Nagano adalah ibu kota sekaligus kota terbesar di Prefektur Nagano, dengan kota-kota besar lainnya termasuk Matsumoto, Ueda, dan Iida. Prefektur Nagano memiliki daerah dataran tinggi yang mengesankan di Pegunungan Alpen Jepang, termasuk sebagian besar Pegunungan Hida, Pegunungan Kiso, dan Pegunungan Akaishi yang membentang hingga prefektur tetangga. Karena kelimpahan barisan pegunungan, keindahan pemandangan alam, serta sejarah yang kaya di prefektur ini, sehingga Prefektur Nagano telah mendapatkan pengakuan internasional sebagai tujuan wisata olahraga musim dingin kelas dunia, seperti menjadi tuan rumah Olimpiade Musim Dingin 1998 dan jalur Shinkansen baru ke Tokyo.', 'nagano.jpg', 'K006'),
('D004', 'Okinawa', 'Okinawa adalah prefektur yang terletak di bagian paling selatan Jepang. Prefektur ini terdiri dari ratusan pulau yang disebut Kepulauan Ryukyu dan membentuk rantaian kepulauan yang panjangnya lebih dari 1000 km, antara barat daya Kyushu (pulau paling selatan dari keempat pulau utama Jepang) dan Taiwan. Kepulauan Senkaku yang sedang dipertentangkan juga termasuk wilayah administrasi Prefektur Okinawa.', 'okinawa.jpg', 'K006'),
('D005', 'Kyoto', 'Kyoto adalah kota yang terletak di Pulau Honshu, Jepang. Kota ini merupakan bagian dari daerah metropolitan Osaka-Kobe-Kyoto. Kyoto memiliki banyak situs bersejarah dan merupakan ibu kota Prefektur Kyoto.', 'kyoto.jpg', 'K001'),
('D006', 'Yamanashi', 'Prefektur Yamanashi adalah prefektur Jepang yang terletak di wilayah Chubu, Pulau Honshu.Per 1 Oktober 2020, Prefektur Yamanashi memiliki populasi sebesar 806.210 jiwa dan memiliki luas wilayah sebesar 4.465 km2 (1.724 mil persegi). Prefektur Yamanashi berbatasan dengan Prefektur Saitama di timur laut, Prefektur Nagano di barat laut, Prefektur Shizuoka di barat daya, Prefektur Kanagawa di tenggara, dan Tokyo di timur. Kofu adalah ibu kota sekaligus kota terbesar di Prefektur Yamanashi, sedangkan kota-kota besar lainnya termasuk Kai, Minami-Alps, dan Fuefuki. Prefektur Yamanashi adalah satu dari delapan prefektur yang terkurung daratan, dan mayoritas penduduk tinggal di Cekungan K?fu tengah yang dikelilingi oleh Pegunungan Akaishi, dimana 27% dari total luas daratannya ditetapkan sebagai Taman Nasional. Prefektur Yamanashi adalah rumah bagi banyak gunung tertianggi di Jepang, seperti Gunung Fuji, gunung tertinggi di Jepang dan ikon kebudayaan  negara jepang, sebagia', 'yamanshi.jpg', 'K001');

-- --------------------------------------------------------

--
-- Table structure for table `fotodestinasi`
--

CREATE TABLE `fotodestinasi` (
  `fotodestinasiKODE` char(4) NOT NULL,
  `fotodestinasiNAMA` char(120) NOT NULL,
  `fotodestinasiFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fotodestinasi`
--

INSERT INTO `fotodestinasi` (`fotodestinasiKODE`, `fotodestinasiNAMA`, `fotodestinasiFILE`, `destinasiKODE`) VALUES
('K101', 'Mendut', 'candisari1.jpg', ''),
('K102', 'Kawah Putih', '20180604_123609.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelKODE` char(4) NOT NULL,
  `hotelNAMA` char(160) NOT NULL,
  `hotelALAMAT` varchar(250) NOT NULL,
  `hotelKET` varchar(500) NOT NULL,
  `hotelHARGA` varchar(250) NOT NULL,
  `hotelPIC` char(150) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelKODE`, `hotelNAMA`, `hotelALAMAT`, `hotelKET`, `hotelHARGA`, `hotelPIC`, `destinasiKODE`) VALUES
('H001', 'Akihabara Bay Hotel', '44-4 Kanda Neribeicho, ???? Chiyoda City, Tokyo 101-0022, Jepang', 'Hotel kapsul santai untuk tamu perempuan ini berjarak 4 menit berjalan kaki dari stasiun kereta Akihabara, beberapa menit berjalan kaki dari sejumlah restoran, dan 3 km dari kuil Sens?-ji yang dibangun pada abad ke-7. Hotel kapsul modern & simpel menawarkan kamar mandi bersama dan Wi-Fi gratis. Kapsul di kelas yang lebih tinggi dilengkapi TV layar datar. Tersedia loker.  Fasilitas meliputi lounge nyaman dan santai serta fasilitas laundry yang dioperasikan dengan koin.', 'Rp 450.000,00 / Malam', 'akbHotel.jpg', 'D001'),
('H002', 'Onsen Ryokan Yuen Sapporo', 'Jepang, ?060-0001 Hokkaido, Sapporo, Chuo Ward, Kita 1 Jonishi, 7 Chome??', '\"Yuen, nama Ryokan kami, memiliki arti asal-usul.  Ryokan, penginapan tradisional Jepang, telah menjadi tempat untuk memberikan tidur yang nyaman dan makanan lezat bagi para wisatawan. Dalam proses penyempurnaannya, mereka telah memainkan peran penting dalam memberikan keramahan khas Jepang. Ini termasuk struktur yang sederhana dan efisien, ruang yang tenang dan damai, keindahan yang halus, serta keramahtamahan untuk merasakan empat musim dengan lima indra.  ONSEN RYOKAN YUEN SAPPORO telah mende', 'Rp 5.500.000,00 / Malam', 'onsenryokanHokkaido.jpg', 'D002'),
('H003', 'Kokusai 21', 'Agatamachi-576 Minaminagano, Nagano, 380-0838, Jepang', 'Hotel kelas atas ini berjarak 1 km dari stasiun kereta Nagano, serta 2 km dari kuil Buddha dan museum Zenk?ji yang dibangun pada abad ke-7 dan Taman Joyama. Kamar dengan furnitur bernuansa hangat menawarkan pemandangan kota dan menyediakan TV layar datar, Wi-Fi gratis, dan kulkas mini. Beberapa kamar memiliki sofa tarik. Suite yang luas dan trendi memiliki ruang keluarga.  Parkir, serta sarapan prasmanan bergaya Jepang dan Barat tersedia gratis. Ada 2 kafe dan 5 restoran, yang meliputi bistro Pr', 'Rp 1.250.000,00 / Malam', 'kokusai21Nagano.jpg', 'D003'),
('H004', 'The Royal Park Hotel Iconic Osaka-Midosuji', 'Jepang, ?541-0046 Osaka, Chuo Ward, Hiranomachi, 4 Chome?2?3, Obic Midosuji Building, 15F', 'Hotel indah yang terletak di antara gedung-gedung tinggi di jalan utama ini berjarak 5 menit berjalan kaki dari stasiun kereta Yodoyabashi, 3 km dari Shinsaibashi-Suji Shopping Street yang ramai, dan 5 km dari Osaka Castle Park. Kamar-kamar mewah memiliki TV layar datar, Wi-Fi, kulkas mini, dan ketel. Suite memiliki ruang keluarga terpisah. Kamar di kelas yang lebih tinggi menawarkan resepsi sosial dengan camilan dan minuman. Beberapa di antaranya menyediakan area duduk.  Restoran elegan menyaji', 'Rp 2.000.000,00 / Malam', 'theroyalOsaka.jpg', 'D004'),
('H005', 'Hotel Resol Kyoto Shijo Muromachi', 'Jepang, ?600-8424 Kyoto, Shimogyo Ward, Sannocho, 554', 'Hotel santai yang terletak di area komersial ini berjarak 4 menit berjalan kaki dari stasiun kereta bawah tanah Shij?, 13 menit berjalan kaki dari Pasar Nishiki yang semarak, dan 20 menit berjalan kaki dari Menara Kyoto. Kamar bebas rokok yang nyaman menyediakan Wi-Fi gratis, TV layar datar, kulkas mini, serta fasilitas pembuat teh dan kopi.  Terdapat lounge di lobi kontemporer dengan area merokok. Sarapan prasmanan ala Jepang dan Barat (berbayar) disajikan di kafe kasual bergaya Italia.', 'Rp 1.600.000,00 / Malam', 'hotelKyoto.jpg', 'D005');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriwisata`
--

CREATE TABLE `kategoriwisata` (
  `kategoriKODE` char(4) NOT NULL,
  `kategoriNAMA` char(25) NOT NULL,
  `kategoriKET` text NOT NULL,
  `kategoriREFERENCE` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategoriwisata`
--

INSERT INTO `kategoriwisata` (`kategoriKODE`, `kategoriNAMA`, `kategoriKET`, `kategoriREFERENCE`) VALUES
('K001', 'Budaya', 'Budaya adalah cara hidup yang berkembang dan dimiliki oleh seseorang atau sekelompok orang dan diwariskan dari generasi ke generasi namun tidak turun temurun', 'Buku Sejarah'),
('K002', 'Kuliner', 'Kuliner adalah istilah yang sering kali dikatakan ketika Anda ingin menyebut sebuah olahan makanan atau masakan. Selain itu, istilah ini juga sering digunakan ketika Anda melakukan kegiatan mencicipi makanan-makanan dari berbagai daerah, atau berwisata kuliner.  Namun, sebenarnya apa yang dimaksud dengan kata kuliner. Pengertian kuliner diartikan sebagai suatu proses pembuatan makanan. Istilah ini bukan dari bahasa Indonesia melainkan bahasa Inggris, yaitu culinary, yang berarti teknik memasak, mempersiapkan, dan menyajikan makanan.  Dalam hal ini, kata kuliner tidak hanya digunakan untuk menyebutkan suatu olahan atau sajian makanan, tetapi bisa meliputi berbagai bidang lainnya. Seperti seni kuliner, industri kuliner, bisnis kuliner, kuliner tradisional, dan kuliner internasional. Masing-masing kata kuliner ini memiliki pengertian yang berbeda-beda sesuai bidang atau konteks yang dimaksud.', 'Website Internet'),
('K003', 'Penginapan', 'Pengertian penginapan adalah suatu bangunan atau sebagian bangunan yang disediakan secara khusus, dimana setiap orang dapat menggunakan sebagai tempat tinggal sementara dengan membayar sewa.', 'Website Internet'),
('K004', 'Transportasi', 'Transportasi adalah perpindahan manusia atau barang dari satu tempat ke tempat lainnya dengan menggunakan sebuah kendaraan yang digerakkan oleh manusia atau mesin. Transportasi digunakan untuk memudahkan manusia dalam melakukan aktivitas sehari-hari.', 'Website Internet'),
('K005', 'Pusat Perbelanjaan', 'Pusat perbelanjaan adalah sekelompok penjual eceran dan usahawan komersial lainnya yang merencanakan, mengembangkan, mendirikan, memiliki dan mengelola sebuah properti tunggal. Pada lokasi properti ini berdiri disediakan juga tempat parkir. Tujuan dan ukuran besar dari pusat perbelanjaan ini umumnya ditentukan dari karakteristik pasar yang dilayani.', 'Website Internet'),
('K006', 'Hiburan', 'Hiburan adalah segala sesuatu yang dapat menjadi penghibur atau pelipur lara. Pada umumnya hiburan dapat berupa musik, film, opera, drama ataupun berupa permainan bahkan olahraga. Fungsi hiburan cukup penting, karena manusia membutuhkannya di sela-sela kehidupannya yang serba serius.', 'Website Internet');

-- --------------------------------------------------------

--
-- Table structure for table `oleholeh`
--

CREATE TABLE `oleholeh` (
  `olehKODE` char(4) NOT NULL,
  `olehNAMA` varchar(50) NOT NULL,
  `olehKet` varchar(250) NOT NULL,
  `olehPIC` varchar(250) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oleholeh`
--

INSERT INTO `oleholeh` (`olehKODE`, `olehNAMA`, `olehKet`, `olehPIC`, `destinasiKODE`) VALUES
('OL01', 'Anime Merchandise', 'Merchandise Anime merujuk kepada berbagai barang dagangan atau produk-produk yang terkait dengan anime, yakni karya animasi dari Jepang. ', 'asukas.jpg', 'D001'),
('OL02', 'White Chocolate Pudding', 'Kue Shiroi Koibito versi pudding ini merupakan produk terbaru Ishiya Co., Ltd. yang dijual dengan harga 1.080 Yen (isi 3 bungkus).  Di dalamnya ada set saus Haskappu dengan rasa asam dan manis buah Blue Honeysuckle yang meningkatkan kelezatan rasa co', 'shiroikoibito.jpg', 'D002'),
('OL03', 'Marugoto Apple Pie', 'Marugoto Apple Pie adalah pastry Barat yang menggunakan apel khusus. Apel dari Nagano direndam dalam madu, bagian tengahnya diisi dengan castella, dibungkus dengan adonan pie, lalu dipanggang.  Nagano memiliki iklim dataran tinggi, dan sangat bagus u', 'apples.jpg', 'D003'),
('OL04', 'Rikuro Ojisan no Mise', 'Paman Rikuro Cheesecake merupakan rantai toko roti terkenal di Osaka. Hotel berjarak 2 menit berjalan kaki dari stasiun kereta bawah tanah Midosuji line namba. Antrian panjang di sekitar blok setiap hari untuk membeli kue keju dan telah terbukti bahw', 'ojisancake.jpg', 'D004'),
('OL05', 'Yatsuhashi', 'Yatsuhashi adalah kue manis khas Kyoto yang terbuat dari tepung beras. Ada dua macam yatsuhashi, yaitu yaki-yatsuhashi (baked yatsuhashi) dan nama-yatsuhashi (raw yatsuhashi). Yaki-yatsuhashi memiliki tekstur yang renyah dan rasa yang manis, sementar', 'yatsuhashi.jpg', 'D005');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurantID` char(4) NOT NULL,
  `restaurantNAMA` varchar(50) NOT NULL,
  `restaurantKET` varchar(250) NOT NULL,
  `restaurantPIC` char(150) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurantID`, `restaurantNAMA`, `restaurantKET`, `restaurantPIC`, `destinasiKODE`) VALUES
('R001', 'Maidcafe Maidreamin', 'Berlokasi di Jepang, 〒101-0021 Tokyo, Chiyoda City, Sotokanda, 1 Chome−8−10 バウハウス 2F', 'maidreamin.jpg', 'D001'),
('R002', 'Sushi Watanabe', 'Berlokasi di Jepang, 〒064-0806 Hokkaido, Sapporo, Chuo Ward, Minami 6 Jonishi, 4 Chome−1 プラザ6・4ビル ６階', 'watanabe.jpg', 'D002'),
('R003', 'Tsukiji-Nihonkai', 'Berlokasi di Jepang, 〒380-0823 Nagano, Minamichitose, 1 Chome−19−3 千歳ビル 1・2階', 'naganorestaurant.jpg', 'D003'),
('R004', 'Sekai Ichi Hima Na Ramenya', 'Berlokasi di gedung 2F Nakanoshima Dai, 3-3-23 Nakanoshima, Kita-ku, Osaka 〒530-0005', 'sekairamenOsaka.jpg', 'D004'),
('R005', 'Katsukura Tonkatsu Sanjo Main Store', 'Berlokasi di Jepang, 〒604-8036 Kyoto, Nakagyo Ward, Ishibashicho, 16 三条通寺町東入ル', 'katsuKyoto.jpg', 'D005');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travelKODE` char(4) NOT NULL,
  `travelNAMA` varchar(50) NOT NULL,
  `travelKET` varchar(250) NOT NULL,
  `travelPIC` char(150) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travelKODE`, `travelNAMA`, `travelKET`, `travelPIC`, `destinasiKODE`) VALUES
('T001', 'Kohaku Travel A', 'Paket jalan - jalan ke kota di Jepang. Akihabara merupakan destinasi dari paket A dari kohaku travel. Paket ini termasuk transportasi, akomodasi, tempat hiburan, dan konsumsi. Hanya dengan harga Rp 11.000.000,', 'japanline.jpg', 'D001'),
('T002', 'Kohaku Travel B', 'Paket jalan - jalan ke kota di Jepang. Hokkaido merupakan destinasi dari paket B dari kohaku travel. Paket ini termasuk transportasi, akomodasi, tempat hiburan, dan konsumsi. Hanya dengan harga Rp 11.000.000,', 'anaairlines.jpg', 'D002'),
('T003', 'Kohaku Travel C', 'Paket jalan - jalan ke kota di Jepang. Nagano merupakan destinasi dari paket C dari kohaku travel. Paket ini termasuk transportasi, akomodasi, tempat hiburan, dan konsumsi. Hanya dengan harga Rp 11.000.000,', 'scootairlines.jpg', 'D003'),
('T004', 'Kohaku Travel D', 'Paket jalan - jalan ke kota di Jepang. Osaka merupakan destinasi dari paket D dari kohaku travel. Paket ini termasuk transportasi, akomodasi, tempat hiburan, dan konsumsi. Hanya dengan harga Rp 11.000.000,', 'airasia.jpg', 'D004'),
('T005', 'Kohaku Travel E', 'Paket jalan - jalan ke kota di Jepang. Kyoto merupakan destinasi dari paket E dari kohaku travel. Paket ini termasuk transportasi, akomodasi, tempat hiburan, dan konsumsi. Hanya dengan harga Rp 11.000.000,', 'macanair.jpg', 'D005');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `userKODE` char(4) NOT NULL,
  `userNAMA` char(30) NOT NULL,
  `userEMAIL` char(60) NOT NULL,
  `userPASS` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`userKODE`, `userNAMA`, `userEMAIL`, `userPASS`) VALUES
('U001', 'wasino', 'wwasino@yahoo.com', '202cb962ac59075b964b07152d234b70'),
('U002', 'Nicolas', 'nicolasnsa28@gmail.com', '097884b586be6fcaff492aa97c8251be');

-- --------------------------------------------------------

--
-- Table structure for table `waifu`
--

CREATE TABLE `waifu` (
  `waifuKODE` char(4) NOT NULL,
  `waifuNAMA` varchar(100) NOT NULL,
  `waifuANIME` varchar(250) NOT NULL,
  `waifuFOTO` char(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waifu`
--

INSERT INTO `waifu` (`waifuKODE`, `waifuNAMA`, `waifuANIME`, `waifuFOTO`) VALUES
('W22', 's', 's', '20231104_111652.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `webuser`
--

CREATE TABLE `webuser` (
  `webuserKODE` char(4) NOT NULL,
  `webuserNAMA` varchar(200) NOT NULL,
  `webuserEMAIL` varchar(100) NOT NULL,
  `webuserKOMEN` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webuser`
--

INSERT INTO `webuser` (`webuserKODE`, `webuserNAMA`, `webuserEMAIL`, `webuserKOMEN`) VALUES
('KO1', 'Nicolas', 'nicolasnsa@gmail.com', 'This website is amazing, i love japan'),
('KO2', 'Bubu', 'bubuya@gmail.com', 'Kelass abisss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`beritaKODE`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`destinasiKODE`);

--
-- Indexes for table `fotodestinasi`
--
ALTER TABLE `fotodestinasi`
  ADD PRIMARY KEY (`fotodestinasiKODE`);

--
-- Indexes for table `kategoriwisata`
--
ALTER TABLE `kategoriwisata`
  ADD PRIMARY KEY (`kategoriKODE`);

--
-- Indexes for table `oleholeh`
--
ALTER TABLE `oleholeh`
  ADD PRIMARY KEY (`olehKODE`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurantID`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travelKODE`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`userKODE`);

--
-- Indexes for table `waifu`
--
ALTER TABLE `waifu`
  ADD PRIMARY KEY (`waifuKODE`);

--
-- Indexes for table `webuser`
--
ALTER TABLE `webuser`
  ADD PRIMARY KEY (`webuserKODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
