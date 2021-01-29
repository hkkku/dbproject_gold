-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-29 02:17
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
-- 테이블 구조 `gold_app`
--

CREATE TABLE `gold_app` (
  `GOLD_APP_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_APP_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `GOLD_APP_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '시리얼 넘버',
  `GOLD_APP_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `GOLD_APP_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '이미지',
  `GOLD_APP_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '섬네일 이미지',
  `GOLD_APP_cli` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '납품처',
  `GOLD_APP_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_app`
--

INSERT INTO `gold_app` (`GOLD_APP_num`, `GOLD_APP_tit`, `GOLD_APP_ser`, `GOLD_APP_des`, `GOLD_APP_img`, `GOLD_APP_thumb`, `GOLD_APP_cli`, `GOLD_APP_reg`) VALUES
(2, 'Tesla Model  X', 'GOLDAPP0101', 'Etiam non egestas risus. Suspendisse at dapibus nibh, id bibendum erat. Praesent malesuada egestas justo vitae lobortis. Curabitur consequat finibus est vitae pellentesque. Morbi laoreet porta quam, eu condimentum nisl mollis non. Donec eros nisl, tristique id efficitur vitae, mollis quis nulla. Suspendisse potenti. Nullam sit amet condimentum quam. Sed elementum felis vitae leo commodo, ut sollicitudin magna posuere. Suspendisse volutpat mauris non sem pellentesque egestas. Donec varius massa neque, vel aliquam nisl ullamcorper eget. In hac habitasse platea dictumst.<br />\r\n<br />\r\n Vestibulum in dui id ligula malesuada posuere nec eget nibh. Vivamus ex nunc, ornare quis congue at, consequat a enim. Suspendisse quam risus, sagittis sit amet blandit ac, pellentesque hendrerit turpis. Aliquam a fringilla ex, vel lacinia justo.', 'app_main_001.png', 'app_001.png', 'Tesla', '2021-01-19'),
(3, 'Portfolio', 'GOLDAPP0102', 'Praesent placerat fermentum libero sed venenatis. Aliquam commodo facilisis vehicula. Curabitur non risus hendrerit, porta magna non, aliquet nibh. Mauris efficitur mauris at consectetur dignissim. Integer gravida tortor neque, ac rhoncus ex laoreet eu. Sed luctus nisi ipsum, vel semper nunc luctus sed. Donec sed risus quam. Pellentesque efficitur leo ut eleifend faucibus. Vivamus ac ultrices augue. Curabitur sed dui maximus, eleifend sem eu, sollicitudin massa. Fusce in felis erat. Cras eu porttitor neque. Etiam finibus odio a turpis sodales, at vehicula tellus pulvinar.<br />\r\n<br />\r\n Vivamus blandit tellus nec massa interdum feugiat eget vitae orci. Nam sollicitudin aliquam risus sed eleifend. Vestibulum vel quam volutpat, dictum orci vel, convallis sapien.', 'app_main_002.jpg', 'app_002.jpg', 'folio', '2021-01-19'),
(4, 'Store', 'GOLDAPP0103', 'Proin lobortis porttitor urna ac egestas. Praesent a malesuada odio, a posuere odio. Donec in auctor neque. Vestibulum eget commodo lorem. Maecenas dignissim justo vel imperdiet consectetur. In hac habitasse platea dictumst. Mauris viverra sapien eu pharetra blandit. Phasellus ultricies, erat quis laoreet tincidunt, eros lorem vestibulum lacus, a tincidunt nulla odio id libero. Proin ultricies quis tellus non tincidunt. <br />\r\n<br />\r\nSed accumsan accumsan commodo. Sed sed porttitor massa. Fusce dapibus massa purus, ac elementum justo dapibus suscipit. Phasellus et mi placerat, ullamcorper velit et, facilisis nibh. In eu mi sed velit dapibus blandit.', 'app_main_003.png', 'app_003.png', 'plant store', '2021-01-19'),
(5, 'Beranda', 'GOLDAPP0104', 'Donec posuere faucibus iaculis. Quisque facilisis lacinia orci sit amet sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras non pellentesque tellus. Integer porttitor, ex vitae aliquet pharetra, ligula eros tempor nulla, at laoreet nulla diam eu urna. Nulla congue dui in justo mattis, quis lobortis arcu accumsan. Donec ultrices posuere tellus, vel viverra risus vestibulum non. <br />\r\n<br />\r\nCurabitur suscipit tellus eu est aliquam, sed condimentum libero rutrum.', 'app_main_004.png', 'app_004.png', 'Beranda co', '2021-01-19'),
(6, 'AudioBooks', 'GOLDAPP0105', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc ultrices euismod tellus, sit amet auctor sapien accumsan in. Nam semper mauris a metus tempus consequat. Nam nec quam aliquet, cursus risus non, suscipit nulla. In et orci ultrices, aliquam erat a, faucibus magna. Suspendisse lectus enim, faucibus quis egestas nec, luctus in sapien. Pellentesque cursus consequat velit, at facilisis orci bibendum in. Vivamus vehicula orci ex, non semper enim malesuada ac. <br />\r\n<br />\r\nVivamus tristique metus velit, at tincidunt est pharetra at. Phasellus rhoncus ipsum at velit rhoncus placerat quis ut felis. Aenean id arcu justo.', 'app_main_005.png', 'app_005.png', 'Optimist', '2021-01-20'),
(7, 'Plants', 'GOLDAPP0106', 'Vestibulum quam dui, suscipit id dolor vel, dictum vestibulum nulla. Ut id tristique diam. Vivamus congue laoreet varius. Donec ac varius urna. Nunc et congue erat. Mauris cursus bibendum arcu, ac euismod lacus hendrerit sit amet. Sed ut convallis tellus, ultrices rhoncus enim. Nunc vitae leo ligula. Praesent vitae tempor ligula. Phasellus sollicitudin, sapien in eleifend tristique, quam dui vehicula mi, non condimentum justo augue quis est. Phasellus ut tempus arcu. Sed pretium vulputate tortor eu porta. <br />\r\n<br />\r\nNullam tempor placerat felis et vehicula. Sed gravida eros sed sagittis suscipit. Sed quis efficitur urna. Morbi suscipit neque eget libero mattis aliquet.', 'app_main_006.png', 'app_006.png', 'plant opp', '2021-01-20'),
(8, 'Dimest', 'GOLDAPP0107', 'Maecenas interdum commodo consectetur. Pellentesque et massa dictum, pellentesque eros sit amet, pellentesque arcu. Nam mollis quam et magna scelerisque malesuada. Ut tristique, eros vitae porttitor faucibus, felis odio lobortis quam, vitae molestie massa justo quis leo. Maecenas convallis elit ut libero pellentesque tempus. Quisque volutpat aliquam erat, eu tristique enim viverra ut. Nullam ac sem eget ipsum imperdiet lacinia. Nam gravida est eu diam tincidunt sollicitudin. Etiam pellentesque nulla nec tempus commodo. Nullam semper libero massa, sit amet tempus tortor volutpat in. Vestibulum quis mattis nisi. <br />\r\n<br />\r\nFusce in elit in tortor placerat rutrum et at odio. Phasellus dui lectus, maximus eget eros ac, pretium dapibus nulla. Etiam vehicula felis eget placerat semper.', 'app_main_007.png', 'app_007.png', 'hm card', '2021-01-20'),
(9, 'Medicine Reminder', 'GOLDAPP0108', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non magna in nulla ullamcorper imperdiet quis vitae eros. Aliquam risus ante, mollis id ante nec, efficitur facilisis nisi. Ut a metus tellus. Sed egestas egestas orci quis sollicitudin. Curabitur sem ipsum, ultrices ac lectus vel, suscipit viverra erat. Donec efficitur, nisi eget hendrerit tempus, nisl sem venenatis libero, eu luctus leo purus eget lectus. Pellentesque aliquam arcu et rhoncus ornare. Praesent tincidunt venenatis dapibus. Etiam aliquet nisl arcu. <br />\r\n<br />\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam et consequat dui. Nullam ac mi metus. Etiam et ex ut lectus commodo sodales.', 'app_main_008.jpg', 'app_008.jpg', 'Gusri', '2021-01-20');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_app`
--
ALTER TABLE `gold_app`
  ADD PRIMARY KEY (`GOLD_APP_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_app`
--
ALTER TABLE `gold_app`
  MODIFY `GOLD_APP_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
