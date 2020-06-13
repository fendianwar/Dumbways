-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2020 at 09:24 PM
-- Server version: 5.7.28-0ubuntu0.19.04.2
-- PHP Version: 7.2.24-0ubuntu0.19.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4`
--
CREATE DATABASE IF NOT EXISTS `4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `4`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `tittle` text,
  `image` varchar(225) DEFAULT NULL,
  `deskripsi` text,
  `create_time` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `tittle`, `image`, `deskripsi`, `create_time`, `user_id`) VALUES
(16, 'Virus corona: Gejala Covid-19, penyebaran, penanganan, pengobatan dan penyembuhan', '_112868256_antarafoto-siswa-membuat-pelindung-wajah-120620-ms-3.jpg', 'Negara dengan angka kematian tertinggi adalah di Amerika Serikat, yang telah menembus 113.000, diikuti dengan Inggris dengan lebih 41.000 dan Brasil yang mencatat pasien meninggal lebih dari 40.000.\r\n\r\nDi Indonesia, data yang dirilis gugus tugas bentukan pemerintah menunjukkan, hingga Jumat (12/06), kasus infeksi mencapai setidaknya 36.400.\r\n\r\nTercatat 2.048 orang meninggal sementara 13.213 pasien dinyatakan sembuh.\r\n\r\nAngka infeksi mencatat penambahan 1.043 kasus dalam 24 jam pada Selasa (09/06), tertinggi sejak pemerintah mengumumkan pasien pertama Covid-19 pada 2 Maret lalu.\r\n\r\nDi tengah terus bertambahnya kasus, sejumlah daerah mulai melonggarkan Pembatasan Sosial Berskala Besar (PSBB) dan Kementerian Perhubungan akan menaikkan kapasitas maksimal angkutan umum, dari 50 menjadi 70%.', '2020-06-13 08:02:59', 1),
(17, 'Jangan Lengah Saat New Normal! Nyamuk DBD Tetap Mengintai', 'adv-hit.jpeg', 'kema new normal membuat masyarakat dapat beraktivitas seperti biasa dengan tetap memperhatikan protokol kesehatan yang berlaku. Di samping itu, penting juga memperhatikan berbagai bahaya lainnya yang mengintai saat new normal agar terhindar dari berbagai penyakit, salah satunya adalah nyamuk DBD yang siap mengintai kapanpun.\r\nDemam berdarah masih menjadi persoalan kesehatan dunia.. Dilansir dari situs resmi WHO, demam berdarah selama beberapa dekade terakhir mengalami peningkatan secara dramatis di seluruh dunia. Bahkan sebuah studi tentang prevalensi demam berdarah memperkirakan bahwa 3,9 miliar orang berisiko terinfeksi virus dengue tersebut.\r\n\r\nBegitu bahayanya penyakit ini, sampai-sampai pemerintah Indonesia pun menyarankan untuk melakukan berbagai tindakan preventif, salah satunya melalui program 3M plus, yaitu menguras, menutup dan juga mengubur. Selain itu, melakukan tindakan yang lain seperti memakai obat nyamuk dan juga aktivitas lainnya untuk menekan berkembang biaknya nyamuk-nyamuk ini.\r\n\r\nApalagi kini nyamuk sudah mulai berevolusi menjadi lebih bandel sehingga dibutuhkan solusi yang tepat untuk mengatasinya. Salah satunya adalah HIT EXPERT yang memberikan solusi EXPERT untuk nyamuk DBD membandel. HIT EXPERT Aerosol merupakan inovasi terbaru dari HIT dengan menggunakan teknologi double nozzle dan micro particle!\r\n\r\nDouble Nozzle adalah inovasi dari HIT EXPERT yang akan memberikan semprotan lebih luas dan jauh. Sehingga hanya dengan menyemprotkan secukupnya, hasilnya tetap akan maksimal dan tidak boros. HIT EXPERT Aerosol juga memiliki teknologi baru micro partikel yang menyebar cepat merata ke seluruh ruangan, efektif untuk membasmi nyamuk bandel di tempat sembunyi sekalipun!\r\nHIT EXPERT Aerosol memiliki 3 varian fragrance premium yakni Sweet Flower, Citrus, dan Blooming Tea yang memberikan experience fragrance yang mewah. Dengan desain yang berbeda dengan produk lainnya di pasaran, semakin menambahkan kesan mewah untuk produk ini.\r\n\r\nTidak hanya itu, berbagai produk dari HIT EXPERT lainnya juga bisa untuk mencegah nyamuk-nyamuk bandel ini makin semena-mena berkeliaran di rumah. Seperti HIT LV Xpress yang merupakan obat nyamuk elektrik tanpa kabel dan juga tanpa asap.', '2020-06-13 08:05:20', 1),
(18, 'Alumni Akabri 89 Bagikan 1.500 Paket Sembako di Sukaluyu Bogor', 'polri.jpeg', 'Kabaharkam Polri Komjen Pol Drs. Agus Andrianto SH,MH didampingi Perwira Tinggi dan Pamen TNI/POLRI serta Bhayangkari melaksanakan kegiatan bakti sosial dengan membagikan paket sembako kepada masyarakat yang membutuhkan di Kelurahan Sukaluyu, Kecamatan Taman Sari Bogor.\r\nKegiatan ini merupakan wujud sikap gotong royong dan kepedulian serta kehadiran negara di tengah masyarakat di masa pandemi COVID-19. Adapun bantuan sosial yang dibagikan berupa 1.500 paket sembako yang berisi beras, minyak goreng, kecap manis, teh celup dan sarden.\r\n\r\n\"Aksi baksos Akabri 89 ini merupakan tindak lanjut arahan Panglima TNI dan KAPOLRI untuk menggalang dan menggerakan kepada warga yang tidak terdampak COVID-19 untuk secara bergotong royong melaksanakan bakti sosial kepada masyarakat yang kurang mampu dan terdampak COVID-19,\" kata Agus dalam keterangan tertulis, Sabtu (13/6/2020).\r\nLebih lanjut, Marsekal Pertama Eding Sungkana menyampaikan, kegiatan bakti sosial Akabri Angkatan 89 ini diperuntukkan kepada masyarakat yang terdampak COVID-19. Dalam pelaksanaannya, kegiatan baksos tetap menerapkan protokol COVID-19 yakni dengan penggunaan masker, pengecekan suhu badan, cuci tangan dan jaga jarak baik kepada penerima bantuan dan peserta yang hadir.\r\n\r\n\"Paket sembako yang dibagikan dihimpun dari rekan-rekan Alumni Akabri 89 dan donasi dari masyarakat yang sukarela membantu kegiatan ini,\" pungkasnya.\r\n\r\nKehadiran Alumni Akabri 89 ini disambut gembira oleh masyarakat Sukaluyu dan sekitarnya. Masyarakat berharap kegiatan ini tidak hanya dilakukan untuk saat ini saja, tetapi berkelanjutan. Pasalnya, bantuan paket sembako ini sangat membantu dan meringankan beban disaat masa pandemi COVID-19.', '2020-06-13 08:07:09', 27),
(20, 'Novel Baswedan Komentari Video Viral Komika Bintang Emon soal Kasusnya', 'ebbec863-d3f7-4bc4-882c-e35b33684dcf_169.jpeg', 'Komika Bintang Emon membuat video pendek berisi sindiran soal tuntutan 1 tahun penjara terhadap terdakwa kasus teror air keras terhadap penyidik KPK Novel Baswedan. Novel pun memberi komentar soal video dari Bintang Emon tersebut.\r\nDilihat detikcom, Sabtu (13/6/2020), dalam video viral itu, Bintang Emon mengungkapkan keheranannya karena kedua penyerang disebut tidak sengaja menyiramkan air keras ke kepala Novel Baswedan.\r\n\r\n\"Katanya nggak sengaja, tapi kok bisa sih kena muka? Kan kita tinggal di bumi. Gravitasi pasti ke bawah. Nyiram badan nggak mungkin meleset ke muka, kecuali Pak Novel Baswedan emang jalannya handstand, bisa lu protes,\" ujar Bintang Emon.\r\n\"Pak hakim, saya niatnya nyirem badan. Cuma gegara dia jalannya betingkah, jadi kena muka. Bisa, masuk akal,\" lanjutnya.\r\n\r\nBintang Emon kemudian memberi sindiran soal tuntutan tersebut. Dia mempertanyakan, apakah cara berjalan Novel yang tidak normal atau tuntutan 1 tahun penjara itu.\r\n\r\n\"Kita cek, yang kagak normal cara jalannya Pak Novel Baswedan atau hukuman buat kasusnya?\" tutur Bintang Emon.\r\n\"Katanya cuma buat kasih pelajaran. Bos, lu kalau mau kasih pelajaran, Pak Novel Baswedan jalan lu pepet. Terus bisikin, \'Eh, tahu nggak, kita punya grup yang nggak ada lu-nya, lo\'. Pergi. Nah, pasti insecure tuh, \'salah gue apa ya?\' Introspeksi, Pak Novel, pelajaran jatuhnya. Nah aer keras mah dari namanya juga keras, kekerasan. Nggak mungkin keaeran,\" sambungnya.', '2020-06-13 08:09:39', 27),
(21, 'Pertama di Malaysia, YouTube Upin & Ipin Raih Diamond Play Button', 'upin-ipin_43.jpeg', 'Apabila Amerika Serikat (AS) punya dengan Micky Mouse, maka Malaysia punya Upin & Ipin. Bahkan, ketenarannya membuat Les\' Copaque Production, channel YouTube Upin & Ipin baru saja meraih Diamond Play Button.\r\nSebagai informasi, penghargaan Diamond Play Button diberikan YouTube kepada konten kreator yang sudah mencapai 10 juta subscribers.\r\n\r\nMenariknya, Les\' Copaque Production menjadi channel YouTube Malaysia yang mendapatkan jumlah 10 juta subscribers, seperti dikutip dari Mashable, Sabtu (13/6/2020).\r\nYouTube memang akan memberi penghargaan kepada konten kreatornya, apabila mereka telah mencapai jumlah subscribers tertentu.\r\n\r\nSampai saat ini, layanan video on demand milik Google itu baru menempatkan Red Diamond Play Button sebagai tahta paling tinggi, bagi YouTuber yang mampu menarik 100 juta subscribers. Penghargaan prestisius baru dihuni dunia channel, yaitu T-Series 142 juta subscribers dan PewDiePie 105 juta subscribers.', '2020-06-13 08:12:06', 28),
(22, 'Keluarga Harap Megawati dan Jokowi Bantu Istri Pengawal Bung Karno yang Sakit', 'ajudan-bung-karno-serma-r-koesno-elizabeth-koesno-istri-ajudan-bung-karno-4_43.jpeg', 'Istri pengawal Presiden RI pertama Sukarno, Elizabeth Koesno (93), saat ini sedang sakit dan dirawat di RSPAD Gatot Soebroto, Jakarta Pusat. Pihak keluarga berharap agar keluarga Bung Karno dan Presiden Joko Widodo memberikan bantuan kepada Oma Elizabeth.\r\n\"Kami ingin sekali beliau tahu,\" ungkap cucu Elizabeth, Roland Anziano (39), dalam perbincangan dengan detikcom, Sabtu (13/6/2020).\r\n\r\nOma Elizabeth mengalami retak tulang punggung belakang karena jatuh pada Januari lalu. Ia seharusnya mengenakan korset khusus, namun karena pihak keluarga tak mampu membelinya, kini Oma Elizabeth bungkuk.\r\n\"Tadinya saya kumpulin uang buat beli. Karena ada wabah COVID, kami jadi parah keadaan. Sampai jualin barang-barang di rumah termasuk peninggalan almarhum Opa buat bertahan hidup. Karena saya tidak pakein Oma korset selama ini, jadinya tulang punggung Oma jadi melengkung, bongkok. Dan tiap malam kesakitan sampai nangis, apalagi kalau obat pereda nyeri habis,\" tutur Roland.\r\n\r\nSerma Koesno meninggal dunia pada 1998. Karena dianggap berjasa oleh negara, suami Oma Elizabeth itu dimakamkan di TMP Kalibata.\r\n\r\nRoland pun menunjukkan foto-foto saat Serma Koesno masih bekerja sebagai ajudan Sukarno. Selain berfoto bersama Bung Karno, terlihat momen Koesno bersama anak-anak Bung Karno, seperti Megawati Soekarnoputri dan Guntur Soekarnoputra.\r\n\r\n\"Itu ada foto-foto Ibu Megawati dan Pak Guntur saat kecil digendong almarhum Opa saya,\" jelas Roland.\r\n\r\nOma Elizabeth merupakan keturunan Belanda dari ayahnya. Saat Indonesia merdeka, 10 adik-kakak Elizabeth kembali ke Belanda. Namun Elizabeth memilih bertahan di Indonesia karena menikah dengan Serma Koesno.', '2020-06-13 08:48:37', 28),
(23, 'Penurunan Harga Gas Bumi Dorong Kinerja Dunia Industri', 'penurunan-harga-gas-bumi-dorong-kinerja-dunia-industri.jpg', 'Sektor industri nasional perlu makin di dorong agar lebih berdaya saing sehingga dapat mendorong peningkatan perekonomian nasional. Energi harus menjadi modal pembangunan yang memberikan multiplier ekonomi termasuk sektor industri dan tidak hanya berperan sebagai komoditas ekspor semata dalam mendapatkan devisa negara.\r\n\r\nSelama ini, harga gas untuk industri yang mahal menyebabkan Industri tidak kompetitif. Sebagai contoh industri baja, peningkatan harga gas sebesar 21,2 persen mengakibatkan antara lain penurunan utilitas pabrik sebesar 40 persen, serta peningkatan komoditas impor sebesar 13,5 persen. Begitu juga yang terjadi dengan industri sarung tangan karet. Meningkatnya harga gas di plant gate sebesar 31,6 persen menyebabkan turunnya kapasitas produksi 29,4 persen dan peningkatan komoditas impor sebesar 48,9 persen, bahkan terdapat 9 pabrik sarung tangan yang tutup.\r\n\r\nPada industri keramik peningkatan harga gas sebesar 21,2 persen mengakibatkan penurunan utilitas pabrik sebesar 33,3 persen, serta penurunan produksi sebesar 21,1 persen dan penurunan komoditas ekspor sebesar 16,8 persen. Selain itu untuk memenuhi kebutuhan domestik komoditas impor keramik naik sebesar 63,3 persen. Pada industri gelas peningkatan harga gas sebesar 21,2 persen mengakibatkan penurunan kapasitas produksi sebesar 38,2 persen, penurunan komoditas ekspor sebesar 33,3 persen, dan naiknya komoditas impor sebesar 12,7 persen. Bahkan 4 pabrik antaranya tutup operasi, termasuk glass Surabaya yang sudah 30 tahun beroperasi.\r\nTerkait harga gas bumi, pada tahun 2006-2011 harga gas industri di Jawa Bagian Barat terus mengalami peningkatan, walaupun harga hulu relatif tetap. Biaya penyaluran terus naik dari USD3,5/MMBTU sampai dengan USD4,6/MMBTU. Selanjutnya pada tahun 2012-2013, harga hulu hanya naik USD1,1/MMBTU namun harga gas ke industri naik USD1,9/MMBTU dari sekitar USD7,3/MMBTU ke USD9,2/MMBTU.\r\n\r\nDalam menindaklanjuti isu tersebut, Pemerintah berusaha mencari kebijakan agar industri lebih kompetitif dan berdaya saing sekaligus mendorong pembangunan ekonomi nasional. Salah satu kebijakan yang diambil melalui implementasi Peraturan Presiden Nomor 40 Tahun 2016 tentang Penetapan Harga Gas Bumi.\r\n\r\nPenerapan kebijakan penyesuaian harga gas bumi untuk industri tertentu sangat penting bagi sektor industri, karena harga gas merupakan komponen signifikan dalam struktur biaya produksi. Sehingga penurunan harga gas akan meningkatkan daya saing dan industri menjadi lebih kompetitif.\r\n\r\n\"Melalui harga gas yang kompetitif diharapkan dapat meningkatkan daya saing, kapasitas produksi, investasi dan menyerap tambahan tenaga kerja, sehingga iklim investasi di Indonesia terus lebih baik. Dan bisa memberikan kontribusi yang signifikan terhadap pembangunan ekonomi,\" jelas Direktur Executive Energy Watch Mamit Setiawan di Jakarta, Sabtu (13/6/20).\r\n\r\nPenyesuaian harga gas dilakukan dengan mekanisme penurunan harga gas hulu menjadi USD 4,0-4,5/MMBTU melalui pengurangan porsi Pemerintah dan melakukan efisiensi biaya penyaluran menjadi USD 1,5-2,0/MMBTU, sehingga harga gas di plant gate menjadi USD 6,0/MMBTU.\r\n\r\nKebijakan tersebut tentu disambut baik oleh sektor industri dan telah ditindaklanjuti oleh para stakeholders. Perusahaan Gas Negara (PGN) dan grup telah menandatangani Nota Kesepahaman Implementasi Kepmen ESDM No.89K/10/MEM/2020 dengan pelanggan industri tertentu pada Jumat (6/6). Komitmen ini mencakup 177 pelanggan industri tertentu dan diwakili secara simbolis oleh beberapa Sales Area PGN untuk area Jakarta, Bogor, Tangerang, Bekasi, Surabaya dan Medan dengan beberapa perwakilan pelanggan industri tertentu.\r\n\r\nKami yakin penurunan harga gas industri tersebut akan meningkatkan produktivitas dan utilitas sektor manufaktur di dalam negeri sehingga sektor industri dapat meningkatkan efisiensi proses produksinya, yang ujungnya akan bisa menghasilkan produk-produk yang berdaya saing baik di kancah domestik maupun global.\r\n\r\n\"Semoga dengan adanya kebijakan ini bisa meningkatkan peran industri secara signifikan dalam pembangunan ekonomi nasional, dan berharap akan berlaku terus ke depan,\" pungkas Mamit Setiawan.', '2020-06-13 09:23:27', 27);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`) VALUES
(1, 'Fendi Anwar Rifa\'i', 'fendianwar36@gmail.com'),
(27, 'alone', 'alone@gmail.com'),
(28, 'coba', 'coba@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
