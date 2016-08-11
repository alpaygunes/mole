-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 10 Ağu 2016, 23:39:08
-- Sunucu sürümü: 5.5.50-0+deb8u1
-- PHP Sürümü: 5.6.23-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `mole`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pr_mole_istemciler`
--

CREATE TABLE IF NOT EXISTS `pr_mole_istemciler` (
`mole_istemciler_id` int(11) NOT NULL,
  `istemci_ip` varchar(255) NOT NULL,
  `istemci_adi` varchar(255) NOT NULL,
  `son_erisim_zamani` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `pr_mole_istemciler`
--

INSERT INTO `pr_mole_istemciler` (`mole_istemciler_id`, `istemci_ip`, `istemci_adi`, `son_erisim_zamani`) VALUES
(5, '------------::1', 'ALPAY-PC', '2016-08-10 23:30:55'),
(6, '::1', '------------ALPAY-PC', '2016-08-10 23:16:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pr_users`
--

CREATE TABLE IF NOT EXISTS `pr_users` (
`user_id` int(10) unsigned NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adi_soyadi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hatirlatma_keyi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fb_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fb_user_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `uyelik_durumu` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `pr_users`
--

INSERT INTO `pr_users` (`user_id`, `username`, `password`, `rol`, `adi_soyadi`, `hatirlatma_keyi`, `fb_name`, `fb_user_id`, `uyelik_durumu`) VALUES
(102, 'tahirbattal@gmail.com', '8aacdf3ce187b9809e4f6bf4c558b6f6', 'editor', 'Tahir BATTAL', '', '', '', ''),
(116, 'alp_gun@hotmail.com', '', 'uye', 'Alpay Güneş', '', 'Alpay Güneş', '10153105540652991', ''),
(117, 'yukselaydin23@gmail.com', 'dc72a824beae622bfb7e1b5f49c1c33b', 'uye', '', '', '', '', ''),
(126, 'tbattal50@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'uye', '', '', '', '', ''),
(127, 'serdartufan@gmail.com', 'cedcd2255ba8961ede01764ce65c552c', 'uye', '', '', '', '', ''),
(128, '', '', 'uye', 'Aytaç Başok', '', 'Aytaç Başok', '10153624235758540', ''),
(129, 'aytacbasok@gmail.com', '4213ae1ebc867c3ee3111f4a5245bef5', 'uye', '', '', '', '', ''),
(151, 'alpaygunes@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'yonetici', 'Alpay GÜNEŞ', '', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `pr_mole_istemciler`
--
ALTER TABLE `pr_mole_istemciler`
 ADD PRIMARY KEY (`mole_istemciler_id`), ADD UNIQUE KEY `mole_istemciler_id` (`mole_istemciler_id`);

--
-- Tablo için indeksler `pr_users`
--
ALTER TABLE `pr_users`
 ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `pr_mole_istemciler`
--
ALTER TABLE `pr_mole_istemciler`
MODIFY `mole_istemciler_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `pr_users`
--
ALTER TABLE `pr_users`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=152;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
