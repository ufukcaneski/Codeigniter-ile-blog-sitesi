-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 22 Eyl 2021, 12:45:09
-- Sunucu sürümü: 8.0.21
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloglar`
--

DROP TABLE IF EXISTS `bloglar`;
CREATE TABLE IF NOT EXISTS `bloglar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `katid` int NOT NULL,
  `kategori` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `katsef` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sef` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hit` int NOT NULL,
  `resim` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tmb` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mini` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `etiket` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bloglar`
--

INSERT INTO `bloglar` (`id`, `katid`, `kategori`, `katsef`, `title`, `sef`, `hit`, `resim`, `tmb`, `mini`, `icerik`, `tarih`, `etiket`) VALUES
(19, 1, 'Genel', 'genel', 'Deneme1', 'deneme1', 0, 'assets/front/img/blog/091c946382d23c1a5b71c6ca7c428c9f.jpg', '', '', '&lt;p&gt;i&ccedil;erik1&lt;/p&gt;', '2021-02-20 21:00:00', 'etiket1'),
(25, 1, 'Genel', 'genel', 'Deneme7', 'deneme7', 0, 'assets/front/img/blog/45a850b8b43c919a47281b0cb3f5e5f7.jpg', '', '', '&lt;p&gt;&lt;code&gt;deneme&lt;/code&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(0,0,0);&quot;&gt;, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960\'larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;language-php&quot;&gt;#include &amp;lt;stdio.h&amp;gt;\r\nint main()\r\n{\r\n    int number;\r\n\r\n    printf(&quot;Bir tamsayı girin: &quot;);\r\n    scanf(&quot;%d&quot;, &amp;amp;number);\r\n\r\n    // Sayı 0\'dan k&uuml;&ccedil;&uuml;kse test ifadesi doğrudur\r\n    if (number &amp;lt; 0)\r\n    {\r\n        printf(&quot;girdiğin sayı:  %d.\\n&quot;, number);\r\n    }\r\n\r\n    printf(&quot;İf ifadesi kolaydır.&quot;);\r\n\r\n    return 0;\r\n}&lt;/code&gt;&lt;/pre&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '2021-02-27 13:16:10', 'etiket7'),
(27, 15, 'Codeigniter', 'codeigniter', 'Codeigniter 3 ve PHPExcel ile excel yükleyerek veri güncelleme', 'codeigniter-3-ve-phpexcel-ile-excel-yukleyerek-veri-guncelleme', 0, 'assets/front/img/blog/aaedcaf196646241fe87dc17f7c4d20a.jpg', '', '', '&lt;p&gt;Merhabalar,&lt;/p&gt;&lt;p&gt;&Ouml;ncelikle &lt;a href=&quot;https://github.com/PHPOffice/PHPExcel&quot;&gt;PHPExcel&lt;/a&gt; eklentimizi &lt;a href=&quot;https://github.com/PHPOffice/PHPExcel&quot;&gt;indiriyoruz.&lt;/a&gt;&lt;br&gt;&lt;br&gt;Bize lazım olan sadece &lt;code&gt;Classes&lt;/code&gt; klas&ouml;r&uuml;. &lt;code&gt;Classes&lt;/code&gt; klas&ouml;r&uuml;n&uuml;n i&ccedil;indekileri kopyalayıp &lt;code&gt;application/third_party&lt;/code&gt; klas&ouml;r&uuml;n&uuml;n i&ccedil;ine yapıştırıyoruz.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;application/libraries&lt;/strong&gt; klas&ouml;r&uuml;n&uuml;n i&ccedil;ine&lt;strong&gt; Excel.php&lt;/strong&gt; adında bir dosya oluşturuyoruz ve i&ccedil;ine aşağıdaki kodları yerleştiriyoruz.&lt;/p&gt;&lt;p&gt;Controller &amp;nbsp;dosyamız şu şekilde olmalı;&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;language-php&quot;&gt;if(@$_FILES[&quot;excel&quot;]) {\r\n	$allowedFileType = array(\'application/vnd.ms-excel\',\'application/xls\',\'application/xlsx\',\'application/vnd.openxmlformats-	officedocument.spreadsheetml.sheet\',\'text/csv\');\r\n			if(in_array($_FILES[&quot;excel&quot;][&quot;type&quot;],$allowedFileType)){\r\n				$targetPath = \'./upload/excel/\'.$_FILES[\'excel\'][\'name\'];\r\n				move_uploaded_file($_FILES[\'excel\'][\'tmp_name\'], $targetPath);\r\n				$this-&amp;gt;load-&amp;gt;library(\'Excel\');\r\n				$objPHPExcel = PHPExcel_IOFactory::load($targetPath);\r\n				$cell_collection = $objPHPExcel-&amp;gt;getActiveSheet()-&amp;gt;getCellCollection();\r\n				foreach($cell_collection as $cell){\r\n					$column = $objPHPExcel-&amp;gt;getActiveSheet()-&amp;gt;getCell($cell)-&amp;gt;getColumn();\r\n					$row = $objPHPExcel-&amp;gt;getActiveSheet()-&amp;gt;getCell($cell)-&amp;gt;getRow();\r\n					$data_value = $objPHPExcel-&amp;gt;getActiveSheet()-&amp;gt;getCell($cell)-&amp;gt;getValue();\r\n					if ($row != 1) {\r\n						$arr_data[$row][$column] = $data_value;\r\n					}\r\n				}\r\n				$total_row = count($arr_data);\r\n				$arr_data = array_slice($arr_data, intval(@$_POST[&quot;num&quot;]), 25);\r\n				\r\n				foreach ($arr_data as $key =&amp;gt; $value) {\r\n					$this-&amp;gt;Admin_model-&amp;gt;update_dealer($value);\r\n				}\r\n				$this-&amp;gt;session-&amp;gt;set_flashdata(&quot;success_message&quot;, &quot;Y&uuml;kleme başarılı!&quot;);\r\n			}else{\r\n				$this-&amp;gt;session-&amp;gt;set_flashdata(&quot;error_message&quot;, &quot;Y&uuml;kleme başarısız!&quot;);\r\n			}\r\n			redirect($_SERVER[\'HTTP_REFERER\']);\r\n			}\r\n		}&lt;/code&gt;&lt;/pre&gt;&lt;p&gt;view dosyamızda bu şekilde olacak;&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;language-php&quot;&gt;session-&amp;gt;flashdata(\'success_message\'))): ?&amp;gt;\r\n	\r\n		&times;\r\n		session-&amp;gt;flashdata(\'success_message\'); ?&amp;gt; \r\n		\r\n	\r\n\r\nsession-&amp;gt;flashdata(\'error_message\'))): ?&amp;gt;\r\n	\r\n		&times;\r\n		session-&amp;gt;flashdata(\'error_message\'); ?&amp;gt;\r\n		\r\n	\r\n\r\n \r\n 				\r\n					\r\n					\r\n					Y&uuml;kle\r\n				&lt;/code&gt;&lt;/pre&gt;&lt;p&gt;Şimdi sıra model dosyamızı yazmada burada dikkat edilmesi gereken nokta hangi s&uuml;tunun hangi veriye denk olması.&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;language-php&quot;&gt;public function excel_yukle($post)\r\n{\r\n		$data = array();\r\n		if(isset($post[\'A\'])) $data[\'id\'] = $post[\'A\'];\r\n		if(isset($post[\'B\'])) $data[\'uye_name\'] = $post[\'B\'];\r\n		if(isset($post[\'C\'])) $data[\'phone\'] = $post[\'C\'];\r\n        if(isset($post[\'D\'])) $data[\'email\'] = $post[\'D\'];\r\n		$this-&amp;gt;db-&amp;gt;where(\'id\',$post[\'A\']);\r\n		$records = $this-&amp;gt;db-&amp;gt;update(\'uyeler\',$data);\r\n}&lt;/code&gt;&lt;/pre&gt;&lt;p&gt;Bu şekilde mevcutta olan verilerimizi excel ile y&uuml;kleyip g&uuml;ncellemiş oluruz. Aklınıza takılan herhangi bir sorunuz olursa aşağıda yorumlar kısmında sorularınızı sorabilirsiniz veya &lt;a href=&quot;htttps://ufukcaneski.com/contact&quot;&gt;iletişim&lt;/a&gt; sayfasından bana ulaşabilirsiniz.&lt;/p&gt;', '2021-09-08 16:07:21', 'codeigniter, codeigniter ile excel yükleme, excel ile güncelleme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sef` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `title`, `sef`) VALUES
(1, 'Genel', 'genel'),
(16, 'Sosyal', 'sosyal'),
(15, 'Codeigniter', 'codeigniter');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mesajgonderen` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesajmail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesajaciklama` longtext COLLATE utf8_turkish_ci NOT NULL,
  `mesajtarih` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `mesajgonderen`, `mesajmail`, `mesajaciklama`, `mesajtarih`, `ip`, `durum`) VALUES
(1, 'aa', 'ufukcan@hotmail.com', 'asdad', '18.03.2021', '', 1),
(2, 'aa', 'ufukcan@hotmail.com', 'asdad', '18.03.2021', '', 0),
(47, 'kkk', 'asda@asda.com', 'asdasda', '30.08.2021', '::1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteayarlari`
--

DROP TABLE IF EXISTS `siteayarlari`;
CREATE TABLE IF NOT EXISTS `siteayarlari` (
  `id` int NOT NULL,
  `title` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sitemail` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sitebilgi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sitekey` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `bakim` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `siteayarlari`
--

INSERT INTO `siteayarlari` (`id`, `title`, `url`, `sitemail`, `sitebilgi`, `sitekey`, `bakim`) VALUES
(1, 'Ufukcan Eski', 'https://localhost/blog', 'info@ufukcaneski.com', 'Ufukcan Eski | Kişisel Web Bloğu', 'ufukcan eski', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyalmedya`
--

DROP TABLE IF EXISTS `sosyalmedya`;
CREATE TABLE IF NOT EXISTS `sosyalmedya` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sef` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `durum` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sosyalmedya`
--

INSERT INTO `sosyalmedya` (`id`, `title`, `sef`, `url`, `durum`) VALUES
(13, 'İnstagram', 'instagram', 'ufukcane', 1),
(12, 'Twitter', 'twitter', 'UfukcanEski', 1),
(11, 'Facebook', 'facebook', 'UfukcanEski', 1),
(19, 'linkedin', 'linkedin', 'UfukcanEski', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetim`
--

DROP TABLE IF EXISTS `yonetim`;
CREATE TABLE IF NOT EXISTS `yonetim` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(254) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetim`
--

INSERT INTO `yonetim` (`id`, `adsoyad`, `kullaniciadi`, `mail`, `sifre`) VALUES
(1, 'Ufukcan Eski', 'ufukcan', 'ufukcan.b@hotmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
