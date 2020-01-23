-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Okt 2018 pada 17.12
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temperamen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tag` varchar(10) NOT NULL,
  `slug` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `waktu`, `tag`, `slug`) VALUES
(1, 'Menjadikan semua indah', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n<p>\r\nMenyelesaikan kuliah jadi tanggung jawab dengan tantangan yang cukup besar. Apalagi ketika kamu sudah kehabisan semangat untuk menyelesaikannya. Entah kenapa melihat tumpukan kertasnya saja muak. Tapi saat perjuangan yang berdarah-darah itu selesai, kamu akhirnya dinyatakan lulus dan memakai toga dihadapan semua orang temasuk orangtua pun tak ada uang yang mampu membayarnya. Karena memang kebahagiaan itu terlalu banyak terisi dengan kebanggaan dan kelegaan. Apalagi saat melihat papa dan mamamu tersenyum, mungkin itu yang disebut surga dunia.\r\n</p></br>\r\n\r\n<p>\r\nJangankan dapat gaji, pertama kali tahu lolos interview dan jadi pegawai saja rasanya sudah bangga sekali. Jadi mendapat gaji pertama jelas akan buatmu berada di puncak bahagia. Membuatmu merasa ingin membaginya ke orang-orang terdekat salah satunya keluarga, seperti mengajak mereka makan malam bersama. Sekalipun gaji pertamamu tak seberapa, setidaknya bisa berkumpul dengan mereka sebanding dengan mendapat gaji pertama, bahagia sekaligus bangga.\r\n</p>\r\n</body>\r\n</html>\r\n', '2018-07-09 15:47:00', 'bahagia', 'Menjadikan semua indah'),
(2, 'Menjadi Diri Sendiri', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n<p>Wilde pernah mengatakan Jadilah diri sendiri, diri orang lain sudah diambil. Walaupun terdengar lucu, ini benar. Namun, Anda tidak bisa menjadi diri sendiri jika Anda tidak mengenal, memahami, dan menerima siapa diri Anda. Anda harus menemukannya terlebih dahulu.</p>\r\n\r\n<p>Selami norma-norma yang Anda yakini dan pikirkan hal-hal yang membentuk inti diri Anda. Sebagai bagian dari proses ini, renungkan juga hidup dan pilihan Anda. Cobalah memikirkan hal-hal yang ingin dan tidak ingin Anda lakukan, dan sikapi sesuai dengan panduan. Belajar dari kesalahan akan membantu Anda lebih dari yang mungkin telah diperkirakan sebelumnya.</p>\r\n\r\n<p>Anda juga dapat mencoba tes kepribadian, tetapi ingatlah untuk tidak menerima hasilnya mentah-mentah. Sebaliknya, pastikan pemaknaannya didasarkan pada kesesuaian dan kenyamanan Anda. Anda mungkin merasa minder, tetapi seiring berjalannya waktu jika Anda bergaul dengan tipe orang yang tepat, mereka akan menerima Anda apa adanya.</p>\r\n\r\n</body>\r\n</html>\r\n', '2018-07-13 17:02:16', 'diri', 'Menjadi Diri Sendiri'),
(3, 'Langkah Mencapai Keberhasilan', '<!DOCTYPE html>\r\n<html>\r\n\r\n<body>\r\n\r\n<p>wajar terjadi karena norma-norma hidup berasal dari berbagai sumber, termasuk budaya, agama, mentor, orang-orang yang memicu inspirasi, sumber pendidikan, dsb. Yang terpenting adalah terus berusaha mengatasi konflik untuk menemukan norma apa yang paling Anda hargai.</p>\r\n\r\n<p>Apabila norma-norma yang Anda yakini bertentangan, jangan lantas diabaikan. Anggap pertentangan itu sebagai dinamika diri Anda. Anda tidak bisa dipaksa menjadi siapa pun yang bukan diri Anda. Setiap aspek hidup Anda memiliki norma sendiri, jadi wajar kalau berbeda.</p>\r\n\r\n</body>\r\n</html>\r\n', '2018-07-13 17:05:30', 'sukses', 'Langkah Mencapai Keberhasilan'),
(4, 'Menjadi Lebih Pintar', '<!DOCTYPE html>\r\n<html>\r\n\r\n<body>\r\n\r\n<h3>1</h3>.<p>Tingkatkan daya ingat. Sering kali, yang dianggap sebagai kecerdasan merupakan kemampuan untuk mengingat dengan baik. Anda dapat meingkatkan kemampuan menyimpan dan mengingat ingatan-ingatan dengan berbagai cara, termasuk menggunakan jembatan keledai dan lebih memperhatikan detail. Menghubungkan informasi, pengamatan, atau data baru dengan ingatan lama akan memudahkan Anda mengingat. Teruslah berlatih dan pada akhirnya Anda akan menguasai teknik baru untuk belajar dan mengingat lebih cepat. Pada saat pertama kali mencoba sajalah yang mungkin paling sulit.</p><br>\r\n\r\n<h3>2</h3>.<p>\r\nKembangkan rasa ingin tahu. Bagaimana bisa sebagian orang tahu begitu banyak hal? Ingatan yang baik hanyalah sebagian jawabannya: Anda harus punya rasa ingin tahu. Jika Anda puas menjalani hidup dengan sedikit atau tanpa pemahaman sama sekali mengenai hal-hal yang belum Anda kenal, Anda tidak akan banyak belajar. Usahakan secara sadar untuk lebih ingin tahu dengan mengingatkan diri sendiri bahwa meningkatkan keingintahuan akan melebarkan jangkauan Anda dan membuat Anda lebih cerdas.</p><br>\r\n\r\n<h3>3</h3>.<p>Latih pikiran Anda dengan cara-cara berbeda. Kebanyakan dari kita mahir dalam melakukan hal-hal yang kita kuasai secara alami dengan melakukan aktivitas sehari-hari. Tantang diri Anda untuk belajar kemampuan baru atau untuk berpikir dengan cara berbeda, dan Anda akan benar-benar jadi lebih cerdas. Pilih sesuatu yang ingin Anda pelajari (memainkan akordeon, misalnya) atau mata pelajaran yang kurang Anda kuasai (mungkin matematika) dan berfokuslah pada hal itu. Pada awalnya, Anda akan merasa tidak nyaman dan bahkan merasa jadi lebih bodoh dibanding sebelumnya, namun bila Anda belajar dan latihan dengan rajin, Anda akan lebih percaya diri, dan menciptakan hubungan baru dalam pikiran Anda.</p><br>\r\n\r\n<h3>4</h3>.<p>Bermeditasi. Jika Anda bisa berlatih meditasi secara teratur, hal ini secara alami akan memperbaiki seluruh aspek dan kebiasaan yang disebutkan di sini, maupun dalam artikel pengembangan diri lainnya. Meditasi telah terbukti secara ilmiah tidak hanya dapat meningkatkan konsentrasi, tetapi juga membuat Anda merasa lebih bahagia[1]. Untuk mengetahui manfaat meditasi lainnya, bacalah artikel rujukan.</p><br>\r\n\r\n</body>\r\n</html>\r\n', '2018-07-13 17:15:27', 'smart', 'Menjadi Lebih Pintar'),
(5, '', '', '2018-07-27 15:20:20', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `usia` int(10) NOT NULL,
  `temperamen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `nama`, `jk`, `usia`, `temperamen`) VALUES
(8, 'Rido Simbolon', 'Pria', 19, 'Melankolis'),
(9, 'sdf', 'Pria', 23, 'Sanguinis'),
(10, 'Simbolon', 'Pria', 21, 'Melankolis'),
(11, 'maria chelsea olivia laksana', 'Wanita', 20, 'Sanguinis'),
(12, 'Almasita Ghassani Aginsha', 'Wanita', 20, 'Sanguinis'),
(13, 'tasya', 'Wanita', 18, 'Melankolis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `jawaban` varchar(250) NOT NULL,
  `kd_jawaban` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepribadian`
--

CREATE TABLE `kepribadian` (
  `id` int(11) NOT NULL,
  `temperamen` varchar(20) NOT NULL,
  `emosi` varchar(500) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepribadian`
--

INSERT INTO `kepribadian` (`id`, `temperamen`, `emosi`, `level`) VALUES
(1, 'Sanguinis', 'Kepribadian yang menarik, Suka berbicara, Menghidupkan pesta, Rasa humor yang hebat, Ingatan kuat untuk warna, Secara fisik memukau pendengar, Emosional dan demostratif, Antusias dan Ekspresif, Periang dan penuh semangat, Penuh rasa igin tahu, Baik di panggung, lugu dan polos, Hidup di masa sekarang, Mudah diubah, Berhati tulus, Selalu kekanak-kanakan.', 'emosi'),
(2, 'Sanguinis', 'Sukarelawan, untuk tugas, Memikirkan kegiatan baru, Tampak hebat di permukaan, Kreatif dan inovatif, Punya energi dan antusiame, Mulai dengan cara cemerlang, Mengilhami orang lain untuk bekerja.', 'pekerjaan'),
(3, 'Sanguinis', 'Membuat rumah menyenangkan, Disukai teman anak-anak, Mengubah bencana menjadi humor, Merupakan pemimpin sirkus.', 'orang tua'),
(4, 'Sanguinis', 'Mudah berteman, Mencintai orang, Suka dipuji, Tampak menyenangkan, Dicemburui orang lain, Bukan pendendam, Cepat minta maaf, Mencegah saat membosankan, Suka kegiatan spontan.', 'teman'),
(5, 'Melankolis', 'Mendalam dan penuh pikiran, Analitis, Serius dan tekun, Cenderung jenius, Berbakat dan kreatif, Artistik atau musikal, Filosofis dan puitis, Menghargai keindahan, Perasa terhadap orang lain, Suka berkorban, Penuh kesadaran, Idealis.', 'emosi'),
(6, 'Melankolis', 'Berorientasi jadwal, Perfeksionis, standar tinggi, Sadar perincian, Gigih dan cermat, Tertib dan terorganisasi, Teratur dan rapi, Ekonomis, Melihat masalah, Mendapat pemecahan kreatif, Perlu menyelesaikan apa yang dimulai, Suka diagram, grafik, bagan, daftar.', 'pekerjaan'),
(7, 'Melankolis', 'Menetapkan standar tinggi, Ingin segalanya dilakukan dengan benar, Menjaga rumah selalu rapi, Merapikan barang anak-anak, Mengorbankan keinginan sendiri untuk yang lain, Mendorong intelegensi dan bakat.', 'orang tua'),
(8, 'Melankolis', 'Hati-hati dalam berteman, Puas tinggal di latar-belakang, Menghindari perhatian, Setia dan berbakti, Mau mendengarkan keluhan, Bisa memecahkan masalah orang lain', 'teman'),
(9, 'Koleris', 'Berbakat pemimpin, Dinamis dan aktif, Sangat memerlukan perubahan, Harus memperbaiki kesalahan, Berkemauan kuat dan tegas, Tidak emosional bertindak, Tidak mudah patah semangat, Bebas dan mandiri, Memancarkan keyakinan, Bisa menjalakan apa saja.', 'emosi'),
(10, 'Koleris', 'Berorientasi target, Melihat seluruh gambaran, Terorganisasi dengan baik, Mencari pemecahan praktis, Bergerak cepat untuk bertindak, Mendelegasikan pekerjaan, Menekankan pada hasil, Membuat target Meransang kegiatan, Berkembang karena saingan.', 'pekerjaan'),
(11, 'Koleris', 'Memberikan kepemimpinan kuat, Menetapkan tujuan, Memotivasi keluarga untuk kelompok, Mengetahui jawaban yang "tepat", Mengorganisasi rumah tangga.', 'orang tua'),
(12, 'Koleris', 'Tidak terlalu perlu teman, Mau bekerja untuk kegiatan, Mau memimpin dan mengorganisasi, Biasanya selalu "tepat", Unggul dalam keadaan darurat.', 'teman'),
(13, 'Phlegmatis', 'Kepribaian rendah hati, Mudah bergaul dan santai, Dian tenang dan mampu, Sabar baik keseimbangannya, Hidup konsisten, Tenang tapi cerdas, Simpatik dan baik hati, Menyembunyikan emosi, Bahagia menerima kehidupan, Serba guna.', 'emosi'),
(14, 'Phlegmatis', 'Cakap dan mantap, Damai dan mudah sepakat, Punya kemampuan administratif, Menjadi penengah masalah, menghindari konflik, baik di abwah tekanan, Menemukan cara yang mudah.', 'pekerjaan'),
(15, 'Phlegmatis', 'Menjadi orang tua yang baik, Menyediakan waktu bagi anak-anak, Tidak tergesa-gesa, Bisa mengambil yang baik dari yang buruk, Tidak mudah marah.', 'orang tua'),
(16, 'Phlegmatis', 'Mudah diajak bergaul Menyenangkan, Tidak suka menyinggung, Pendegar yang baik, Selera humor yang menggigit, Suka mengawasi orang, Punya banyak teman, Punya belas kasihan dan perhatian.', 'teman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `usia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `sw` varchar(250) NOT NULL,
  `jawaban1` varchar(250) NOT NULL,
  `jawaban2` varchar(250) NOT NULL,
  `jawaban3` varchar(250) NOT NULL,
  `jawaban4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `sw`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`) VALUES
(1, 'Apa kekuatan 1 anda ?', 'Adventaurus. Orang yang mau melakukan suatu hal yang baru dan berani dengan tekad untuk menguasainya.', 'Adaptable. Mudah menyesuaikan diri dan senang dalam setiap situasi.', 'Animated. Penuh kehidupan, sering menggunakan isyarat tangan, lengan dan wajah secara hidup.', 'Analitical. Suka menyelidiki bagian-bagian hubungan yang logis dan semestinya'),
(2, 'Apa kekuatan 2 anda ?', 'Persistent. Melakukan sesuatu sampai selesai sebelum memulai lainnya.', 'Playful. Penuh kesenangan dan selera humor yang baik.', 'Persuasive. Menyakinkan orang dengan logika dan fakta, bukannya pesona atau kekuasaan.', 'Peaceful, Tampak tidak terganggu dan tenang serta menghindari setiap bentuk kekacauan.'),
(3, 'Apa kekuatan 3 anda ?', 'Submissive. Dengan mudah menerima pandangan atau keinginan orang lain tanpa banyak perlu mengemukakan pendapatnya sendiri.', 'Self-Sacrificing. Bersedia mengorbankan dirinya demi atau untuk memenuhi kebutuhan orang lain.', 'Sociable. Orang yang memandang bersama orang lain sebagai kesempatan untuk bersikap manis dan menghibur, bukan sebagai tantangan atau kesempatan bisnis.', 'Strong-Willed. Orang yang yakin akan caranya sendiri.'),
(4, 'Apa kekuatan 4 anda ?', 'Considerate. Menghargai keperluan dan perasaan orang lain.', 'Controlled. Mempunyai perasaan emosional tetapi jarang memperlihatkannya.', 'Competitive. Mengubah setiap situasi, kejadian, atau permainan menjadi kontes dan selalu bermain untuk menang.', 'Convincing. Bisa merebut hati Anda melalui pesona kepribadiannya.'),
(5, 'Apa kekuatan 5 anda ?', 'Refreshing. Memperbaharui dan membantu atau membuat orang lain merasa senang.', 'Respectful. Memperlakukan orang lain dengan rasa segan, kehormatan dan penghargaan.', 'Reserved. Menahan diri dalam menunjukkan emosi atau antusiasme.', 'Resourceful. Bisa bertindak cepat dan efektif boleh dikatakan dalam semua situasi.'),
(6, 'Apa kekuatan 6 anda ?', 'Satidfied. Orang yang mudah menerima keadaan atau situasi apa saja.', 'Sensitive. Secara intensif memperhatikan orang lain, dan apa yang terjadi.', 'Self-Reliant. Orang mandiri yang bisa sepenuhnya mengandalkan kemampuan, penilaian, dan sumber dayanya sendiri.', 'Spirited. Penuh kehidupan dan gairah.'),
(7, 'Apa kekuatan 7 anda ?', 'Planner. Memilih untuk mempersiapkan aturan-aturan yang terinci sebelumnya dalam menyelesaikan proyek atau target, dan lebih menyukai keterlibatan dengan tahap-tahap perencanaan dan produk jadi, bukannya melaksanakan tugas.', 'Patient. Tidak terpengaruh oleh penundaan, tetap tenang dan toleran.', 'Posistive. Mengetahui segala-galanya akan beres kalau dia yang meminpin.', 'Promoter. Mendorong atau memaksa orang lain mengikuti, berbagung, atau menanam investasi melalui pesona kepribadiannya.'),
(8, 'Apa kekuatan 8 anda ?', 'Sore. Yakin, jarang ragu-ragu atau goyah.', 'Spontaneous. Memilih agar semua kehidupan merupakan kegiatan yang implusif, tidak dipikirkan lebh dulu, dan tidak dihambatkan oleh rencana.', 'Schediled. Membuat, dan menghayati, menurut rencana sehari-hari, tidak menyukai rencananya terganggu.', 'Shy. Pendiam, tidak mudah terseret ke dalam percakapan.'),
(9, 'Apa kekuatan 9 anda ?', 'Orderly. Orang yang mengatur segala-galanya secara metodis dan sistematis.', 'Obliging. Bisa menerima apa saja. Orang yang cepat melakukannya dengan cara lain.', 'Outspoken. Bicara terang-terangan dan tanpa menahan diri.', 'Optimistic. Orang yang periang dan meyakinkan dirinya dan orang lain bahwa segala-galanya akan beres.'),
(10, 'Apa kekuatan 10 anda ?', 'Friendly. Orang yang menanggapi dan bukan orang yang punya inisiatif, jarang memulai percakapan.', 'Faithful. Secara konsisten bisa diandalkan, teguh, setia, dan mengabdi dan kadang-kadang tanpa alasan.', 'Funny. Punya selera humor yang cemerlang dan bisa membuat cerita  apa saja menjadi peristiwa yang menyenangkan.', 'Forceful. Kepribadian yang mendominasi dan menyebabkan orang lain ragu-ragu untuk melawannya.'),
(11, 'Apa kekuatan 11 anda ?', 'Daring. Bersedia mengambil resiko; tak kenal takut, dan berani.', 'Delightful. Orang yang menyenangkan sebagai teman.', 'Diplomatic. Berurusan degan orang lain secara penuh siasat, perasa, dan sabar.', 'Detailed. Melakukan segala-ganya secara berurutan dengan ingatan yang jernih tentang segala hal yang terjadi.'),
(12, 'Apa kekuatan 12 anda ?', 'Sheerful. Secara konsisten memiliki semangat tinggi dan mempromosikan kebahagiaan pada orang lain.', 'Consistent. Tetap memiliki keseimbangan secara emosional, menanggapi sebagaimana yang diharapkan orang lain.', 'Cultured. Orang yang perhatiannya melibatkan tujuan intelektual dan artistik, seperti teater, simfoni, balet.', 'Confident. Percaya diri dan yakin akan kemampuan dan suksesnya sendiri.'),
(13, 'Apa kekuatan 13 anda ?', 'Idealistic. Memvisualisasikan hal-hal dalm bentuk yang sempurna, dan perlu memenuhi standar itu sendiri.', 'Independent. Memenuhi diri sendiri, mandiri, penuh kepercayaan diri dan rupanya tidak begitu memerlukan bantuan.', 'Inoffensive. Orang yang tidak pernah mengatakan atau menyebabkan apapun yang tidak menyenangkan atau menimbulkan rasa keberatan.', 'Inspiring. Mendorong orang lain untuk bekerja, bergabung, atau terlibat, dan membuat seluruhnya menyenangkan.'),
(14, 'Apa kekuatan 14 anda ?', 'Demonstrative. Terang-terangan menyatakan emosi, terutama rasa sayang dan tidak ragu-ragu menyentuh orang lain ketikan bicara kepada mereka.', 'Decisive. Orang yang mempunyai kemampuan membuat penilaian yang cepat dan tuntas.', 'Dry Humor. Memperlihatkan "kepandaian bicara yang menggigit" biasanya kalimat satu baris yang sifatnya sarkastis.', 'Deep. Intensif dan introspektif tanpa rasa senang kepada percakapan dan pengejaran yang pulasan.'),
(15, 'Apa kekuatan 15 anda ?', 'Mediator. Secara konsisten mencari peranan merukunkan pertikaian supaya bisa menghindari konflik.', 'Musical. Ikut serta atau punya apresiasi mendalam untuk musik, punya komitmen terhadap musik sebagai bentuk seni, bukannya kesenangan pertunjukan.', 'Mover. Terdorong oleh keperluan untuk produktif, pemimpin yang diikuti orang lain, merasa sulit duduk diam-dian.', 'Mixes Easily. Menyukai pesta dan tidak bisa menunggu untuk bertemu dengan setiap orang dalam ruangan, tidak pernah menganggap orang lain asing.'),
(16, 'Apa kekuatan 16 anda ?', 'Thoughtful. Orang yang tanggap dan mengingat kesempatan istimewa dan cepat memberikan isyarat yang baik.', 'Tenacious. Memegang teguh, dengan keras kepala, dan tidak mau melepaskan sampai tujuan tercapai.', 'Talker. Terus menerus bicara, biasanya menceritakan kisah lucu dan menghibur setiap orang di sekelilingnya, merasa perlu mengisi kesunyian supaya membuat orang lain merasa senang.', 'Tolerant. Mudah menerima pemikiran dan cara-cara orang lain tanpa perlu tidak menyetujui atau mengubahnya.'),
(17, 'Apa kekuatan 17 anda ?', 'Listener. Selalu bersedia mendengar apa yang Anda katakan.', 'Loyal. Setia kepada seseorang, gagasan, atau pekerjaan, kadang-kadang melampaui alasan.', 'Leader. Pemberi pengarahan karena pembawaan, yang terdorong untuk meminmpin, dan sering merasa sulit mempercayai bahwa orang lain bisa melakukan pekerjaan yang sama baiknya.', 'Lively. Penuh kehidupan, kuat, penuh semangat.'),
(18, 'Apa kekuatan 18 anda ?', 'Contented. Mudah puas dengan apa yang dimilikinya, jarang iri hati.', 'Chief. Memegang kepemimpinan dan mengharapkan orang lain mengikutinya.', 'Chartmaker. Mengatur kehidupan, tugas, dan pemecahan masalah dengan membuat daftar, formulir, atau grafik.', 'Cute. Tak ternilai harganya, dicintai, pusat perhatian.'),
(19, 'Apa kekuatan 19 anda ?', 'Perfectionist. Menempatkan standar tinggi pada dirinya, dan sering pada orang lain, menginginkan segala-galanya pada urutan yang semestinya sepanjang waktu.', 'Pleasant. Mudah bergaul, bersifat terbuka, Mudah diajak bicara.', 'Productive. Harus terus-menerus bekerja atau mencapai sesuatu, sering merasa sulit beristirahat.', 'Popular. Orang yang menghidupkan pesta dan dengan demikian sangat diinginkan sebagai tamu pesta.'),
(20, 'Apa kekuatan 20 anda ?', 'Bouncy. Kepribadian yang hidup, berlebihan, penuh tenaga.', 'Bold. Tidak kenal takut, berani, terus terang, tidak takut akan resiko.', 'Behaved. Secara konsisten ingin membawa dirinya di dalam batas-batas apa yang dirasakan semestinya.', 'Balanced. Keperibadian yang stabil dan mengambil tengah-tengah, tidak menjadi sasaran ketinggian atau kerendahan yang tajam.'),
(21, 'Apa kelemahan 1 anda ?', 'Blank. Orang yang memperlihatkan sedikit ekspresi wajah atau emosi.', 'Bashful. Menghindari perhatian, akibat rasa malu.', 'Brassy. Orang yang suka pamer, memperlihatkan apa yang gemerlap dan kuat, terlalu bersuara.', 'Bossy. Suka memerintah, mendominasi, kadang-kadang mengesalkan dalam hubungan antara orang dewasa.'),
(22, 'Apa kelemahan 2 anda ?', 'Undisciplined. Orang yang kurang keteraturannya mempengaruhi hampir semua bidang kehidupannya.', 'Unsympathetic. Merasa sulit mengenali masalah atau sakit hati atau perasaan orang lain.', 'Unenthusiasthetic. Merasa sulit mengenali masalah atau sakit hati atau perasaan orang lain.', 'Unforgiving. Orang yang sulit memaafkan dan melupakan sakit hati atau ketidakadilan yang dilakukan kepada mereka, biasa menyimpan dendam.'),
(23, 'Apa kelemahan 3 anda ?', 'Reticent. Tidak bersedia atau menolak ikut terlibat, terutama kalau rumit.', 'Resentful. Sering memendam rasa tidak senang sebagai akibat merasa tersinggung oleh sesuatu yang sebenarnya atay sesuatu yang dibayangkan.', 'Resisttant. Berjuang, melawan, atau ragu-ragu menerima cara lain yang bukan caranya sendiri.', 'Repititious. Menceritakan kembali kisah atau insiden untuk menghibur anda tanpa menyadari dia sudah menceritakannya beberapa kali sebelumnya, terus-menerus memerlukan sesuatu untuk dikatakan'),
(24, 'Apa kelemahan 4 anda ?', 'Fussy. Bersikeras tentang persoalan atau perincian sepele, minta perhatian besar kepada perincian yang tidak penting.', 'Fearful. Punya ingatan kurang kuat yang biasanya berkaitan dengan kurang disiplin dan tidak mau repot-repot mencatat secara mental hal-hal yang tidak menyenangkan.', 'Forgetful. Punya ingatan kurang kuat yang biasanya berkaitan dengan kurang disiplin dan tidak mau repot-repot mencatat secara mental hal-hal yang tidak menyenangkan.', 'Frank. Langsung, blak-blakan, tidak sungkan-sungkan mengatakan kepada anda tepat apa yang dipikirkannya. '),
(25, 'Apa kelemahan 5 anda ?', 'Impatient. Orang yang merasa sulit bertahan untuk menghadapi kesalahan atau menunggu orang lain.', 'Insecure. Orang yang merasa sedih atau kurang kepercayaan.', 'Indecisive. Orang yang merasa sulit membuat keputusan apa saja. (Bukan kepribadian yang lama-lama memikirika setiap keputusan supaya bisa membuat keputusan sempurna).', 'Interupts. Orang yang lebih banyak bicara  daripada mendengarkan, yang mulai bicara bahkan tanpa menyadari bahwa orang lain sudah bicara.'),
(26, 'Apa kelemahan 6 anda ?', 'Unpopular. Orang yang intensitas dan tuntunannya akan kesempurnaan bisa membuat orang lain menjauhinya.', 'Uninvolved. Tidak punya keinginan untuk mendengarkan atau tertarik kepada perkumpulan, kelompok, aktivitas, atau kehidupan orang lain.', 'Unpredictable. Bisa bergairah sesaat dan sedih pada saat berikutnya atau bersedia membantu tatapi kemudian menghilan, atau berjanji akan datang tetapi kemudian lupa untuk kembali. ', 'Unpredictable. Merasa sulit secara lisan atau fisik memperlihatkan kasih sayang dengan terbuka.'),
(27, 'Apa kelemahan 7 anda ?', 'Headstrong. Bersikeras memaksakan caranya sendiri.', 'Haphazard. Tidak punya cara yang konsisten untuk melakukan banyak hal.', 'Hard to please. Orang yang standarnya ditetapkan begitu tinggi sehingga orang lain sulit memuaskannya.', 'Hesitant. Lambat dalam bergerak dan sulit ikut teribat.'),
(28, 'Apa kelemahan 8 anda ?', 'Plain. Kepribadian tengah-tengah tanpa tinggi rendah dan tidak memperlihatkan banyak emosi, kalau ada.', 'Pessimistic. Sementara mengharapkan yang terbaik, orang ini biasanya melihat sisi buruk suatu situasi lebih dulu.', 'Proud. Orang yang punya harga diri tinggi dan menganggap dirinya selalu benar, serta orang terbaik untuk pekerjaan.', 'Permissive. Memperbolehkan orang lain (termasuk anak-anak) melakukan apa saja sesukanya untuk menghindari dirinya tidak disukai.'),
(29, 'Apa kelemahan 9 anda ?', 'Angered Easily. Orang yang perangainya seperti anak-anak yang mengutarakan diri dengan ngambek dan berbuat berlebihan serta melupakannnya hampir seketika.', 'Aimless. Bukan orang yang menetapkan tujuan dan tidak ingin menjadi orang yang seperti itu.', 'Argumentative. Mengorbankan perdebatan karena biasanya dia benar, tidak peduli bagaimana situasinya.', 'Alianated. Mudah terasa terasing dari orang lain, sering karena rasa tidak aman atau takut jangan-jangan orang lain tidak benar-benar senang bersamanya.'),
(30, 'Apa kelemahan 10 anda ?', 'Naive. Perspektif yang sederhana dan kekanan-kanakan, kurang bu=ijaksana atau pengertian tentang tingkat kehidupan yang lebih mendalam.', 'Negative Attitude. Orang yang sikapnya jarang positif dan sering hanya bisa melihat sisi buruk atau gelap dari setiap situasi.', 'Nervy. Penuh keyakinan, semangat, dan keberanian, sering dalam pengertian negatif.', 'Nonchalant. Mudah bergaul, tidak peduli, masa bodoh.'),
(31, 'Apa Kelemahan 11 Anda ?', 'Worrier. Secara konsisten merasa tidak tetap, terganggu atau resah.', 'Withdrawn. Orang yang menarik diri dan memerlukan banyak waktu untuk sendirian atau mengasingkan diri.', 'Workaholic. Orag yang menetapkan tujuan secara agresif serta harus terus menerus produktif dan merasa bersalah kalau beristirahat, tidak terdorong oleh keperluan untuk sempurna atau tuntas, tetapi kebutuhan untuk pencapaian dan imbalan. ', 'Wants Credit. Merasa senang mendapat penghargaan atau persetujuan orang lain. Sebagai penghibur orang ini menyukai tepuk tangan, tertawa, dan/atau penerimaan peonton.'),
(32, 'Apa Kelemahan 12 Anda ?', 'Too Sensitive. Terlalu introspektif dan mudah tersinggung kalau disalah pahami.', 'Tactless. Kadang-kadang menyatakan dirinya dengan cara yang agak menyinggung perasaan dan kurang pertimbangan.', 'Timid. Mundur dari situasi sulit.', 'Talkactive. Pembicara yang menghibur dan memaksa diri yang merasa sulit mendengarkan.'),
(33, 'Apa Kelemahan 13 Anda ?', 'Doubtful. Mempunyai ciri khas selalu tidak tetap dan kurang keyakinan bahwa sesuatu hal akan berhasil.', 'Disorganized. Kurang kemampuan untuk membuat kehidupan teratur.', 'Domineering. Dengan memaksa mengambil kontrol atas situasi dan atau orang lain, biasanya dengan mengatakan kepada orang lain apa yang harus mereka lakukan.', 'Depressed. Orang yang hampir sepanjang waktu merasa tertekan.'),
(34, 'Apa Kelemahan 14 Anda ?', 'Inconsistent. Tidak menentu, serba berlawanan, dengan tindakan dan emosi yang tidak berdasarkan logika.', 'Introvert. Orang yang pemikiran dan perhatiannya ditujukan ke dalam, hidup di dalam dirinya sendiri.', 'Intolerant. Tampaknya tidak bisa tahan atau menerima sikap, pandangan, atau cara orang lain.', 'Indifferent. Orang yang merasa bahwa bahwa kebanyakan hal tidak pentik dalam satu atau lain cara.'),
(35, 'Apa Kelemahan 15 Anda ?', 'Messy. Hidup dalam keadaan tidak teratur, tidak bisa menemukan banyak benda.', 'Moody. Tidak mempunyai emosi yang tinggi, tetapi biasanya semangatnya merosot sekali, sering kalau merasa tidak dihargai.', 'Mumbles. Bicara pelan kalau didesak, tidak mau repot-repot bicara dengan jelas.', 'Manipulative. Mempengaruhi atau mengurus dengan cerdik atau penuh tipu muslihat demi keuntungannya sendiri dan dengan suatu cara akan bisa memaksakan kehendaknya.'),
(36, 'Apa Kelemahan 16 Anda ?', 'Slow. Tidak sering bertindak atau berpikir dengan cepat, sangat mengganggu.', 'Stubborn. Bertekad memaksakan kehendaknya tidak mudah dibujuk, keras kepala.', 'Show-Off. Perlu menjadi pusat perhatian, ingin dilihat.', 'Skeptical. Tidak mudah percaya, mempertanyakan motif dibalik kata-kata.'),
(37, 'Apa Kelemahan 17 Anda ?', 'Loner. Memerlukan banyak waktu peibadi dan cenderung menghindari orang lain.', 'Lord Over Others. Tidak ragu-ragu mengatakan kepada anda bahwa dia benar atau memegang kendali.', 'Lazy. Menilai pekerjaan atau kegiatan dengan ukuran berapa banyak tenaga yang diperlukannya.', 'Loud. Orang yang tertawa atau suaranya bisa didengar di atas suara lain-lainnya dalam ruangan.'),
(38, 'Apa Kelemahan 18 Anda ?', 'Sluggish. Lambat untuk memulai, perlu dorongan untuk termotivasi.', 'Suspicious. Cenderung mencurigai atau tidak mempercayai gagasan atau orang lain.', 'Short Tempered. Punya kemarahan yang menuntut berdasarkan ketidak sabaran dan sumbu yang pendek. Kemarahan dinyatakan ketika orang lain tidak bergerak cukup cepat atau tidak menyelesaikan apa yang diperintahkan kepada mereka.', 'Scatterbrained. Tidak punya kekuatan untuk berkonsentrasi atau menaruh perhatian, pikirannya berubah-ubah.'),
(39, 'Apa Kelemahan 19 Anda ?', 'Revengeful. Secara sadar atau tidak menyimpan dendam dan menghukum orang yang melanggar, sering dengan diam-diam menahan persahabatan atau kasih sayang.', 'Restless. Menyukai kegiatan baru terus-menerus karena tidak merasa senang melakukan hal yang sama sepanjang waktu.', 'Reluctant. Tidak bersedia atau melawan keharusan untuk terlibat.', 'Rash. Bisa bertindak tergesa-gesa, tanpa memikirkan dengan tuntas, biasanya karena ketidaksadaran.'),
(40, 'Apa Kelemahan 20 Anda ?', 'Compromising. Sering mengendurkan pendiriannya, bahkan ketika dia benar, untuk menghindari konflik.', 'Critical. Selalu mengevaluasi dan membuat  penilaian, sering memikirkan atau menyatakan reaksi negatif.', 'Crafty. Cerdik, orang yang selalu bisa menemukan cara untuk mencapai tujuan yang diinginkan.', 'Changeable Missing. Rentang perhatian yang kekanak-kanakan dan pendek yang memerlukan banyak perubahan dan variasi supaya tidak merasa bosan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban` (`jawaban`);

--
-- Indexes for table `kepribadian`
--
ALTER TABLE `kepribadian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kepribadian`
--
ALTER TABLE `kepribadian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
