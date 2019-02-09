-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 06:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskopci`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `ID_Film` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Tipe` varchar(5) DEFAULT NULL,
  `Durasi` int(11) DEFAULT NULL,
  `Umur` int(11) NOT NULL,
  `Genre` varchar(255) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `rilis` int(11) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `sinopsis` varchar(8000) DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`ID_Film`, `Judul`, `Tipe`, `Durasi`, `Umur`, `Genre`, `gambar`, `rilis`, `page`, `sinopsis`, `trailer`) VALUES
(1, 'A Man Called Ahok', '2D', 93, 15, 'Drama, Family', 'A-Man-Called-Ahok.jpg', 1, 'ahok', 'Ahok lahir di keluarga dengan seorang ayah pengusaha tambang. Namun, bisnisnya tidak lancar karena oknum yang korup. Masalah-masalah ini membuat hubungan mereka menjadi dingin. Ahok mengikuti langkah ayahnya, Kim Nam membuka pertambangan di Belitung. Namun, ternyata oknum yang sama membuat usahanya bangkrut. Selain itu, keluarga Ahok juga mengalami kejadian tragis. Dalam kondisi kalut, Ahok mengingat pesan ayahnya untuk menjadi pemimpin dan akhirnya ia bertekad untuk terjun ke dunia politik.', 'https://www.youtube.com/embed/HgLhHaJLvkA'),
(2, 'Bohemian Rhapsody', '2D', 90, 15, 'Biography, Drama, Music', 'Bohemian-Rhapsody.jpg', 1, 'bohemian', 'Bohemian Rhapsody adalah perayaan Queen, musik dan penyanyi utama luar biasa mereka, Freddie Mercury. Freddie menentang stereotip dan konvensi yang hancur untuk menjadi salah satu penghibur yang paling dicintai di planet ini. Film ini menelusuri kebangkitan band meteor melalui lagu-lagu ikonik dan suara revolusioner. Mereka mencapai kesuksesan yang tak tertandingi, tetapi dalam perubahan tak terduga Freddie, dikelilingi oleh pengaruh yang lebih gelap, menghindari Queen dalam mengejar karir solonya. Setelah sangat menderita tanpa kolaborasi Queen, Freddie berhasil bersatu kembali dengan teman bandnya tepat pada waktunya untuk Live Aid. Sementara dengan berani menghadapi diagnosis AIDS baru-baru ini, Freddie memimpin band di salah satu pertunjukan terbesar dalam sejarah musik rock. Queen mengukuhkan warisan yang terus mengilhami orang luar, pemimpi dan pecinta musik hingga hari ini.', 'https://www.youtube.com/embed/mP0VHJYFOAU'),
(3, 'Fantastic Beasts The Crimes of Grindelwald', '2D/3D', 112, 15, 'Adventure, Family, Fantasy', 'Fantastic-Beasts-The-Crimes-of-Grindelwald.jpg', 1, 'fantastic', 'Penyihir ilmu hitam Gellert Grindelwald berhasil melepaskan diri dari tahanan MACUSA, lalu melancarkan upaya mengumpulkan pengikut, yang sebagian besarnya tidak tahu niat Grindelwald yang sebenarnya: menggerakkan semua penyihir berdarah murni untuk berkuasa atas dunia non-sihir. Demi menggagalkan rencana Grindelwald, Albus Dumbledore mengutus mantan muridnya, Newt Scamander yang bersedia untuk membantu, tanpa ia ketahui bahwa bahaya telah menantinya. Cinta dan kesetiaan mulai diuji, bahkan di antara sahabat dan keluarga, di tengah-tengah dunia sihir yang semakin terbelah dalam perbedaan.', 'https://www.youtube.com/embed/8bYBOVWLNIs'),
(4, 'Hanum & Rangga (Faith & The City)', '2D', 93, 15, 'Drama', 'Hanum-&-Rangga-(Faith-&-The-City).jpg', 1, 'hanum', 'New York yang elegan, namun mengintai soliditas Hanum dan Rangga. New York yang romantis, menghembuskan mantra magis, namun melahirkan kenyataan ironis. Akankah Hanum mampu mengelak pesona Cooper dan New York City? Mampukah Rangga mempertahankan cinta sejatinya dari impian yang membelitnya? Atau jangan-jangan...impian yang menjadi kenyataan tetaplah ilusi, jika melupakan iman dan keyakinan?', 'https://www.youtube.com/embed/tWG3rHpqN5E'),
(5, 'Robin Hood', '2D/3D', 101, 15, 'Action , Adventure', 'Robin-Hood.jpg', 1, 'robin', 'Robin of Loxley (Taron Egerton), seorang Tentara Salib yang perang-keras dan komandan Moornya (Jamie Foxx) melakukan pemberontakan yang berani melawan mahkota Inggris yang korup dalam aksi-aksi yang menggetarkan yang dikemas dengan eksplorasi medan perang yang memukau, koreografi pertarungan yang memukau, dan abadi percintaan.', 'https://www.youtube.com/embed/zwPn9ZnbCo0'),
(6, 'Suzzanna : Bernapas Dalam Kubur', '2D', 92, 15, 'Horror', 'Suzzanna-Bernapas-Dalam-Kubur.jpg', 1, 'suzzanna', 'Suzzanna dan Satria sudah menikah selama tujuh tahun, tetapi mereka belum juga dikaruniai anak. Mereka tinggal di sebuah rumah bersama tiga pembantunya: Mia, Tohir, dan Pak Rojali. Kehamilan Suzzanna yang ditunggu-tunggu akhirnya terjadi, namun sayangnya bertepatan dengan rencana dinas Satria ke luar negeri. Hal ini dimanfaatkan empat karyawan Satria: Jonal, Umar, Dudun, dan Gino, yang menyimpan dendam kepada Satria dan berniat merampok rumahnya ketika sepi. Namun, rencana perampokan mereka justru berubah menjadi sebuah pembunuhan, ketika Suzzanna yang seharusnya pergi bersama tiga pembantunya ternyata pulang sendiri karena kondisi tubuh yang sedang lemah. Panik, mereka lalu mengubur jenazah Suzzanna di belakang rumah. Anehnya, keesokan hari, Suzzanna tetap beraktivitas seperti biasa di rumahnya, seperti tak terjadi apa-apa. Apakah Suzzanna sebenarnya masih hidup? Apakah Suzzanna berhasil memenuhi janjinya untuk menunggu Satria pulang?', 'https://www.youtube.com/embed/4m5yC1BPNpw'),
(7, 'Aquaman', '2D/3D', 100, 15, 'Action, Adventure, Fantasy', 'Aquaman.jpg', 0, 'aquaman', 'Sebuah kisah asal mula dari seorang separuh manusia dan separuh Atlantean, Arthur Curry, dan petualangan terbesarnya. Petualangan yang tak hanya memaksanya untuk mengungkap jati dirinya, tetapi juga menentukan apakah ia layak memenuhi takdirnya: menjadi seorang raja.', 'https://www.youtube.com/embed/WDkg3h8PCVU'),
(8, 'Arwah Tumbal Nyai', '2D', 87, 15, 'Horror', 'Arwah-Tumbal-Nyai.jpg', 0, 'arwah', 'Setelah kematian neneknya, Rosmalina merasakan ada makhluk gaib yang tinggal di rumahnya. Rosmalina yang merasa tidak nyaman kemudian diminta oleh Reno, pacarnya untuk pindah rumah. Nayla, anak Rosmalina menolak, hingga Rosmalina harus memaksanya ikut. Setelah pindah rumah, Rosmalina merasa nyaman karena makhluk gaib itu tidak muncul di rumahnya lagi. Tetapi, ternyata makhluk gaib itu datang di bioskop tempat Rosmalina kerja, bahkan selalu menerornya. Hingga akhirnya Rosmalina tahu bahwa makhluk gaib yang selalu menerornya itu ternyata sudah berhubungan dekat dengan Nayla. Rosmalina meminta Nayla untuk mengusir makhluk gaib itu, tapi Nayla justru marah dan tidak mau dipisahkan. Ini membuat Rosmalina semakin ketakutan dan berusaha untuk melepaskan Nayla dari makhluk gaib itu.', 'https://www.youtube.com/embed/3waYf033L34'),
(9, 'Bumblebee', '2D/3D', 103, 15, 'Action, Adventure, Sci-fi', 'Bumblebee.jpg', 0, 'bumblebee', 'Dalam pelarian di tahun 1987, Bumblebee menemukan perlindungan di tempat rongsokan di sebuah kota kecil pinggir pantai California. Charlie, gadis yang tengah menyentuh usia 18 tahun dan sedang mencari jati diri, menemukan Bumblebee, yang banyak tergores dan rusak. Ketika berusaha memfungsikannya lagi, Charlie menyaksikan sendiri bahwa ini bukanlah mobil VW kodok berwarna kuning yang biasa.', 'https://www.youtube.com/embed/lcwmDAYt22k'),
(10, 'Creed II', '2D', 95, 15, 'Drama, Sport', 'Creed-II.jpg', 0, 'creedii', 'Adonis Creed berjuang menyeimbangkan kehidupannya. Di antara tanggung jawab kehidupan pribadi dan pelatihan keras untuk pertarungan selanjutnya, ia harus bersiap menghadapi tantangan terberatnya. Bakal melawan petinju yang masih terkait dengan masa lalu keluarganya, semakin memperkuat arti pertarungan itu. Bersama Rocky Balboa yang senantiasa berada di sisinya, keduanya akan menghadapi bagian dari masa lalu mereka bersama, mempertanyakan kembali apa yang sebenarnya patut mereka perjuangkan, dan menyadari bahwa tak ada yang lebih utama dari pada keluarga.', 'https://www.youtube.com/embed/WWSITIJ3o5Q'),
(11, 'Ralph Breaks The Internet', '2D', 108, 15, 'Animation, Adventure, Comedy', 'Ralph-Breaks-The-Internet.jpg', 0, 'ralph', 'Ralph si tokoh musuh dalam permainan video, dan sahabatnya, Vanellope von Schweetz mempertaruhkan segalanya bepergian ke dunia internet demi mencari suku cadang yang dapat menyelamatkan permainan video tempat Vanellope bernaung, Sugar Rush. Kerap kebingungan, Ralph dan Vanellope harus mengandalkan penduduk internet—para Netizen—untuk memberi petunjuk ke tujuan mereka, mulai dari Yesss si pemimpin alogaritma dan inti dari situs pencipta tren “BuzzzTube”, hingga Shank si pembalap tangguh dari permainan balap mobil daring Slaughter Race.', 'https://www.youtube.com/embed/T73h5bmD8Dc'),
(12, 'Silam', '2D', 100, 15, 'Horror', 'Silam.jpg', 0, 'silam', 'Baskara selalu mengalami perlakuan buruk di sekolah maupun di rumahnya oleh Fina, ibu kandungnya. Karena tak tahan, ia memutuskan untuk kabur ke rumah Om Anton yang merupakan saudara kembar ayahnya. Om Anton tinggal bersama istrinya, Tante Ami dan dua anak kembarnya. Sikap ramah keluarga Om Anton membuat Baskara senang. Persoalan muncul, Baskara mulai merasakan keanehan keluarga Om Anton dari sikap mereka yang selalu melakukan akitivitas ritual yang aneh. Hal lainnya, Baskara mulai terteror oleh makhluk halus penghuni rumah. Baskara mempertaruhkan mental dan jiwanya untuk mencari apa yang sebenarnya terjadi dalam keluarga Om Anton dan rumah mereka.', 'https://www.youtube.com/embed/rGWPnk7RbYs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID_Film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `ID_Film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
