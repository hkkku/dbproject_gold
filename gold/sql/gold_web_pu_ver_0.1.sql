-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-15 08:08
-- 서버 버전: 10.4.16-MariaDB
-- PHP 버전: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `gold_web`
--

CREATE TABLE `gold_web` (
  `GOLD_WEB_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_WEB_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `GOLD_WEB_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '시리얼번호',
  `GOLD_WEB_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `GOLD_WEB_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '이미지',
  `GOLD_WEB_mimg` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '모바일 이미지',
  `GOLD_WEB_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '섬네일 이미지',
  `GOLD_WEB_cli` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '납품처',
  `GOLD_WEB_reg` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '등록일',
  `GOLD_WEB_dom` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '도메인'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_web`
--

INSERT INTO `gold_web` (`GOLD_WEB_num`, `GOLD_WEB_tit`, `GOLD_WEB_ser`, `GOLD_WEB_des`, `GOLD_WEB_img`, `GOLD_WEB_mimg`, `GOLD_WEB_thumb`, `GOLD_WEB_cli`, `GOLD_WEB_reg`, `GOLD_WEB_dom`) VALUES
(3, 'Master Dentistry', 'GOLDWEB0101', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras imperdiet in nisl quis gravida. Curabitur placerat rutrum tortor, ut mattis purus. Duis facilisis sapien sit amet tristique porta. Suspendisse in pellentesque ex. Cras turpis nunc, vehicula eu ipsum eget, vehicula maximus mauris. Aliquam nec maximus sapien, eu porta urna. Maecenas placerat ex lectus, et sodales purus pulvinar in. <br />\r\n<br />\r\nPellentesque elementum fringilla lectus quis auctor. Nunc sed tempor sapien, id hendrerit nunc. Praesent luctus pellentesque neque sit amet tempus.', 'web_01.png', 'web_m_01.png', 'web_thumb_01.png', 'Master Dentistry co.', '2021-01-13', 'www.mdentistry.com'),
(4, 'Mightshop', 'GOLDWEB0102', 'Phasellus eget ipsum non purus luctus auctor. Maecenas ac egestas eros, nec eleifend eros. Praesent non commodo metus, at porttitor turpis. Quisque cursus magna eros, sodales egestas metus molestie vel. Integer dapibus ante justo, et convallis nunc molestie vel. Sed eget ante non lacus tempus consequat vel in nibh. Phasellus iaculis velit non aliquam posuere. Praesent accumsan, mauris ut porttitor auctor, neque nisi sollicitudin libero, <br />\r\n<br />\r\nat fringilla elit ante nec urna. Curabitur iaculis laoreet quam non tincidunt. Donec dolor nunc, congue vitae tincidunt vitae, placerat ac sapien. Etiam eget enim quam.', 'web_02.png', 'web_m_02.png', 'web_thumb_02.png', 'mighting', '2021-01-13', 'www.mightshop.com'),
(5, 'Flory', 'GOLDWEB0103', 'Nam feugiat ac lectus suscipit ultrices. Sed varius lorem vitae felis vulputate, semper mollis ipsum ornare. Morbi auctor pellentesque elit eu scelerisque. Donec lacinia id tortor sed varius. Sed malesuada, augue ac finibus pretium, augue sem blandit ipsum, sit amet faucibus nisi velit nec ex. <br />\r\n<br />\r\nIn at magna nunc. Quisque aliquet arcu in lacus sodales rhoncus.', 'web_03.png', 'web_m_03.png', 'web_thumb_03.png', 'Flory furniture', '2021-01-13', 'www.flory.com'),
(6, 'YANKEE', 'GOLDWEB0104', 'Nulla quis viverra neque. Nullam lacinia, justo a volutpat bibendum, nunc nisi molestie sapien, nec maximus nunc erat a enim. Suspendisse dapibus pellentesque sem eget cursus. Cras ac neque volutpat, commodo quam non, mollis quam. Proin finibus eros et arcu semper, ac blandit massa tincidunt. Fusce faucibus leo id mi luctus, et sollicitudin mi bibendum. Mauris sed mauris fermentum, ornare nisl ullamcorper, fringilla odio. Curabitur auctor quam nulla. Donec non mi pharetra, cursus turpis ac, varius ex. Nulla a ante eget ante porttitor venenatis. Vestibulum dictum justo id fringilla elementum. <br />\r\n<br />\r\nNullam a diam nec quam finibus semper vel nec risus. Nam non turpis elit. Praesent tellus quam, auctor id augue eu, blandit gravida tortor. Nam elementum elit quis nibh mollis imperdiet.', 'web_04.png', 'web_m_04.png', 'web_thumb_04.png', 'yankeee corp.', '2021-01-13', 'www.yankee.com'),
(7, 'Joyelle', 'GOLDWEB0105', 'Vivamus nisi augue, viverra eget auctor non, sagittis eu tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent eleifend, ante ac dapibus porta, felis sem vehicula sapien, eu venenatis arcu velit ut nisi. Suspendisse a justo ante. Suspendisse sed dui ac orci lacinia convallis. Morbi vel nibh pulvinar, ornare lacus vitae, porta dui. Fusce gravida efficitur finibus. Integer porta enim non sollicitudin faucibus. Nunc vitae bibendum sem. Quisque commodo, ex nec convallis aliquet, arcu libero tempor nisl, eu convallis tellus nulla at tellus. <br />\r\n<br />\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer non orci nec felis fermentum fermentum. Quisque dapibus vehicula accumsan. Curabitur vitae odio sit amet magna vulputate pellentesque a et nunc.', 'web_05.png', 'web_m_05.png', 'web_thumb_05.png', 'Joyelle art', '2021-01-13', 'www.joyelle.com'),
(8, 'worky', 'GOLDWEB0106', 'In semper mollis mi, ut molestie ligula vestibulum sit amet. Nullam metus erat, eleifend id ante eget, imperdiet cursus metus. Nullam convallis sapien dolor, eu pellentesque velit pharetra sollicitudin. Nulla ut eros euismod, venenatis diam sit amet, egestas felis. Etiam volutpat, quam ut pharetra dapibus, nisl nunc cursus diam, et varius arcu massa quis est. Praesent sodales at elit et tincidunt. Etiam vel ullamcorper felis, ut imperdiet turpis. <br />\r\n<br />\r\nNullam placerat accumsan metus a hendrerit. Vivamus vel dui massa. Vivamus ac tincidunt eros. Aenean id euismod elit. Vestibulum ante sem, pellentesque quis enim ac, tincidunt imperdiet tortor.', 'web_06.png', 'web_m_06.png', 'web_thumb_06.png', 'workwork', '2021-01-13', 'www.worky.com');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_web`
--
ALTER TABLE `gold_web`
  ADD PRIMARY KEY (`GOLD_WEB_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_web`
--
ALTER TABLE `gold_web`
  MODIFY `GOLD_WEB_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
