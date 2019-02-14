-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 2 朁E07 日 10:19
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_f02_db07`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(3, 'サピエンス全史', 'https://www.amazon.co.jp/%E3%82%B5%E3%83%94%E3%82%A8%E3%83%B3%E3%82%B9%E5%85%A8%E5%8F%B2%EF%BC%88%E4%B8%8A%EF%BC%89-%E6%96%87%E6%98%8E%E3%81%AE%E6%A7%8B%E9%80%A0%E3%81%A8%E4%BA%BA%E9%A1%9E%E3%81%AE%E5%B9%B8%E7%A6%8F-%E3%82%B5%E3%83%94%E3%82%A8%E3%83%B3%E3%82%B9%E5%85%A8%E5%8F%B2-%E6%96%87%E6%98%8E%E3%81%AE%E6%A7%8B%E9%80%A0%E3%81%A8%E4%BA%BA%E9%A1%9E%E3%81%AE%E5%B9%B8%E7%A6%8F-%E3%83%A6%E3%83%B4%E3%82%A1%E3%83%AB%E3%83%BB%E3%83%8E%E3%82%A2%E3%83%BB%E3%83%8F%E3%83%A9%E3%83%AA-ebook/dp/B01LW7JZLC', '早く読みたい！', '2019-02-07 18:15:16'),
(4, '陰翳礼讃', 'https://www.amazon.co.jp/%E9%99%B0%E7%BF%B3%E7%A4%BC%E8%AE%83-%E8%B0%B7%E5%B4%8E%E6%BD%A4%E4%B8%80%E9%83%8E-ebook/dp/B07MCWW2WF/ref=sr_1_1?s=digital-text&ie=UTF8&qid=1549530931&sr=1-1&keywords=%E9%99%B0%E7%BF%B3%E7%A4%BC%E8%AE%83', '児玉さんおすすめ', '2019-02-07 18:15:59'),
(5, 'カードキャプターさくら', 'https://www.amazon.co.jp/gp/product/B07H7GRJBD/ref=bpbB07H7GRJBD?pf_rd_p=d97fee90-4acc-4c65-8080-352224dcefb5&pf_rd_s=product-alert&pf_rd_t=201&pf_rd_i=4065113075&pf_rd_m=AN1VRQENFRJN5&pf_rd_r=B0WH3FZK20AAX75D0D9A&pf_rd_r=B0WH3FZK20AAX75D0D9A&pf_rd_p=d97fee90-4acc-4c65-8080-352224dcefb5', 'ピュアとは何かを知ることができる（太郎先生&はおっち）', '2019-02-07 18:17:40'),
(6, 'アラベスク', 'https://www.amazon.co.jp/%E3%82%A2%E3%83%A9%E3%83%99%E3%82%B9%E3%82%AF-%E3%80%88%E5%85%A84%E5%B7%BB%E3%80%89%E7%99%BD%E6%B3%89%E7%A4%BE-%E6%96%87%E5%BA%AB%E5%AE%8C%E7%B5%90%E3%82%BB%E3%83%83%E3%83%88-%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF%E3%82%BB%E3%83%83%E3%83%88-%E5%B1%B1%E5%B2%B8-%E5%87%89%E5%AD%90/dp/B00006LNZD/ref=sr_1_3?s=books&ie=UTF8&qid=1549531079&sr=1-3&keywords=%E3%82%A2%E3%83%A9%E3%83%99%E3%82%B9%E3%82%AF', 'スポコン系少女漫画', '2019-02-07 18:18:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
