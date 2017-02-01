-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-02-01 16:44:17
-- 服务器版本： 5.5.52-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `www`
--

-- --------------------------------------------------------

--
-- 表的结构 `bangumi`
--

CREATE TABLE IF NOT EXISTS `bangumi` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(11) NOT NULL,
  `yuri` int(11) NOT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `bangumi`
--

INSERT INTO `bangumi` (`id`, `name`, `year`, `time`, `intro`, `b_link`, `star`, `yuri`, `pic`) VALUES
(2, '珈百璃的堕落', 2017, 1, '恶魔般的天使与天使般的恶魔在人间的搞笑日常。', 'http://bangumi.bilibili.com/anime/5793', 5, 2, ''),
(3, '小林家的龙女仆', 2017, 1, '名叫托尔的龙为了报恩成为小林（程序员）家的女仆', 'http://bangumi.bilibili.com/anime/5800', 5, 2, ''),
(4, 'One Room', 2017, 1, '第一视角看可爱的妹子和你的日常故事(/ω＼)', 'http://bangumi.bilibili.com/anime/5798', 5, 0, ''),
(5, 'URARA迷路帖', 2017, 1, '芳文社！轻百合！日常！4个可爱的女孩子为了成为Urara而努力着的有趣的故事。', 'http://bangumi.bilibili.com/anime/5776', 5, 2, ''),
(6, '风夏', 2017, 1, '不错的番，然而我作死看了N卷的剧透之后不忍心看了，怕胃疼。。。', 'http://bangumi.bilibili.com/anime/5778', 4, 0, ''),
(7, '殺せんせーQ', 2017, 1, '暗杀教室的外传类型泡面番，老师成为魔王，学生是勇者，Q版人物莫名地喜感。', 'http://bangumi.bilibili.com/anime/5830', 5, 1, ''),
(8, 'Rewrite第二季', 2017, 1, 'Rewrite的续作，环保番（笑），key社大法好', 'http://bangumi.bilibili.com/anime/5806', 5, 0, ''),
(9, '猫咪日常', 2017, 2, '可爱的妹子与可爱的猫咪的故事，温馨的泡面番。', 'http://bangumi.bilibili.com/anime/5786', 4, 1, ''),
(10, 'Love Live! School Idol Project', 2013, 1, 'LL大法好(=・ω・=)', 'http://bangumi.bilibili.com/anime/3068', 5, 1, ''),
(11, 'Love Live! School Idol Project（第二季）', 2014, 2, 'LL动画化的第二季。Niconiconi~', 'http://bangumi.bilibili.com/anime/3071', 5, 1, ''),
(12, 'Love Live! Sunshine!!', 2017, 1, 'LL的新企划的动画化，水团Aqours的故事。', 'http://bangumi.bilibili.com/anime/5062', 5, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangumi`
--
ALTER TABLE `bangumi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangumi`
--
ALTER TABLE `bangumi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
