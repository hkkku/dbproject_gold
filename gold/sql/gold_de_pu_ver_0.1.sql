-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-15 08:07
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
-- 테이블 구조 `gold_de`
--

CREATE TABLE `gold_de` (
  `GOLD_DE_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_DE_tit` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '제목',
  `GOLD_DE_ser` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '시리얼넘버',
  `GOLD_DE_des` text CHARACTER SET utf8 DEFAULT NULL COMMENT '설명',
  `GOLD_DE_img1` varchar(30) CHARACTER SET utf8 DEFAULT NULL COMMENT '이미지1',
  `GOLD_DE_img2` text CHARACTER SET utf8 DEFAULT NULL COMMENT '이미지2',
  `GOLD_DE_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일 이미지',
  `GOLD_DE_cli` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '납품처',
  `GOLD_DE_reg` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '입력일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_de`
--

INSERT INTO `gold_de` (`GOLD_DE_num`, `GOLD_DE_tit`, `GOLD_DE_ser`, `GOLD_DE_des`, `GOLD_DE_img1`, `GOLD_DE_img2`, `GOLD_DE_thumb`, `GOLD_DE_cli`, `GOLD_DE_reg`) VALUES
(13, 'Computer Arts', 'GOLDDE0101', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\n<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like <br />\r\n<br />\r\nAldus PageMaker including versions of Lorem Ipsum.', 'design_01_01.jpg', 'design_01_02.jpg', 'design_01_thumb.jpg', 'Merijn Hos', '2021-01-06'),
(14, 'MIT Technology', 'GOLDDE0102', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, <br />\r\n<br />\r\nmaking this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'design_02_01.jpg', 'design_02_02.jpg', 'design_02_thumb.jpg', 'MIT Technology', '2021-01-06'),
(15, 'Down The Rabbit Hole', 'GOLDDE0103', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. <br />\r\n<br />\r\nLorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'design_03_01.jpg', 'design_03_02.jpg', 'design_03_thumb.jpg', 'Rabbit Hole festival', '2021-01-06'),
(16, 'Diptyque', 'GOLDDE0104', 'Vestibulum volutpat arcu at diam luctus, ac ullamcorper felis dignissim. Vestibulum sodales sit amet ante vitae maximus. Cras feugiat malesuada felis, eu malesuada massa faucibus at. Pellentesque sapien dolor, ultricies a felis porttitor, rutrum varius nisi. Fusce auctor, orci a posuere pharetra, dolor tortor fermentum lacus, nec sollicitudin purus erat eu metus. Aliquam ultricies congue tempor. Nunc eu leo tincidunt, posuere nulla a, mollis leo.<br />\r\n<br />\r\n Aliquam odio leo, euismod consectetur dolor vitae, eleifend porttitor mi. Duis nisi elit, dignissim sit amet mauris at, bibendum facilisis est. In bibendum ultricies mollis. Donec et sem lacus. Aenean rutrum fermentum ligula. Proin orci purus, aliquam nec felis vitae, volutpat laoreet mi. Morbi semper sit amet enim sed ultricies. In gravida lacinia nulla, id vestibulum nisi dictum sed.', 'design_04_01.jpg', 'design_04_02.jpg', 'design_04_thumb.jpg', 'Diptyque', '2021-01-06'),
(17, 'Endlessness', 'GOLDDE0105', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut sit amet ultricies sem. Phasellus nulla metus, aliquam vel felis sed, sodales auctor lectus. Aenean placerat est tristique, fermentum nunc sit amet, laoreet sapien. Nulla nec metus sit amet massa rutrum euismod. Praesent sem lorem, lobortis vel eros at, ullamcorper porta sapien. Proin non lacus risus. Proin a tortor ut libero egestas congue eget non quam. Suspendisse in scelerisque quam. Duis quis nunc vulputate, pulvinar tortor non, tempus nibh.<br />\r\n<br />\r\nInteger venenatis justo nec lacus faucibus, in suscipit quam porta. Sed volutpat felis et dapibus vestibulum. Donec mollis cursus odio non vehicula. Nullam ac neque eros. In viverra, dui congue ultrices semper, diam nisl luctus massa, sit amet dignissim urna nisi at eros. Suspendisse id massa massa. Pellentesque quis varius metus.', 'design_05_01.jpg', 'design_05_02.jpg', 'design_05_thumb.jpg', 'Utrecht', '2021-01-06'),
(18, 'Dolby', 'GOLDDE0106', 'Radio waves in motion. Day and night. I wake up and go to bed listening to the radio, it’s my start of the day since I can ever remember this piece is a homage to FM and AM frequency that will become history due to digital radio very soon.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae sodales sem. Vestibulum neque quam, volutpat vitae scelerisque vel, tincidunt eu mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique dui metus. Sed malesuada diam nec lobortis luctus. Vivamus non dolor quis felis egestas vestibulum tempus et eros. Cras pulvinar varius ante in ultricies.', 'design_06_01.jpg', 'design_06_02.jpg', 'design_06_thumb.jpg', 'Dolby', '2021-01-06'),
(19, 'Dropbox', 'GOLDDE0107', 'I partnered with 72&Sunny to create an image paired with an Aydin Buyuktas photograph for the recent rebrand of Dropbox.<br />\r\n<br />\r\nMaecenas hendrerit sed ante et condimentum. Donec accumsan nunc nec porta hendrerit. Vestibulum vehicula ut arcu id suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel erat sed arcu sollicitudin porta. Quisque tempor tellus libero, in interdum mauris blandit faucibus. Ut a lacus elementum, congue nulla at, fringilla odio. Vivamus condimentum eros tellus, ut porta libero tempor vitae.', 'design_07_01.jpg', 'design_07_02.jpg', 'design_07_thumb.jpg', '72&Sunny', '2021-01-06'),
(20, 'Gradient Exploration', 'GOLDDE0108', 'Ut commodo feugiat enim, quis finibus ligula vestibulum vitae. Donec convallis pretium rutrum. Ut id eros purus. Donec fermentum et enim eget venenatis. Duis volutpat tellus orci, ut luctus metus congue ac. Morbi congue sapien at sem rhoncus eleifend. Suspendisse sodales odio non neque auctor eleifend. Maecenas posuere erat dui, ut blandit dolor ullamcorper nec.<br />\r\n<br />\r\nDonec eget congue magna. Quisque ullamcorper, ex ac pharetra feugiat, nisl velit gravida risus, vel blandit sapien orci eu sem. Vestibulum vitae risus elit. Pellentesque et mauris nec leo ultricies laoreet. Vivamus ac rhoncus lorem. Nullam auctor eget quam in dictum. Nunc ut lacus maximus, lobortis ante sagittis, sodales nisi. Nullam fringilla sagittis augue sit amet mollis. Aenean semper magna vel diam pharetra, id hendrerit ex sollicitudin. Integer luctus eleifend tempor. Vivamus commodo turpis sapien, eget viverra augue lobortis ac. Phasellus ac egestas ex.', 'design_08_01.jpg', 'design_08_02.jpg', 'design_08_thumb.jpg', 'Personal work', '2021-01-06'),
(21, 'The Conference 2017', 'GOLDDE0109', 'Cras ac dui congue, convallis mauris vitae, vehicula nibh. Integer et purus vestibulum, posuere nunc ac, placerat nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus velit velit, pharetra vel cursus facilisis, vehicula et velit. Etiam pharetra mi sem, sit amet interdum tellus aliquet nec. Donec rhoncus massa neque, ac fringilla augue porta a. Quisque tempus egestas purus non tincidunt. Suspendisse a sapien tempus, rutrum purus non, aliquam lorem. Cras quis quam dapibus, finibus urna et, aliquam nulla. Etiam id lectus lectus. Sed hendrerit est euismod ipsum auctor congue elementum in nibh. <br />\r\n<br />\r\nPellentesque nisi est, hendrerit sit amet risus a, aliquet laoreet purus. Nunc congue, tellus ac dignissim facilisis, purus nunc hendrerit ligula, sed lacinia ligula elit sed turpis. Donec laoreet enim orci, quis volutpat nibh imperdiet ut. Mauris dapibus, dui id consequat iaculis, erat leo tristique purus, vel facilisis odio ex sed leo.', 'design_09_01.jpg', 'design_09_02.jpg', 'design_09_thumb.jpg', 'The Conference in Malmo', '2021-01-06'),
(22, 'Wired US', 'GOLDDE0110', 'Nam varius odio id turpis bibendum, consequat pellentesque dolor faucibus. Quisque a porta diam, ut commodo tellus. Vestibulum porta feugiat nisi, non facilisis est imperdiet ut. Nam vel fermentum turpis. Sed facilisis, sem eu vehicula molestie, augue nisi pretium orci, sit amet ornare magna massa eget nibh. Suspendisse pulvinar convallis risus. In auctor ante ante, at rhoncus turpis tincidunt in. Praesent varius arcu vitae magna accumsan laoreet. Nullam maximus mollis diam, sit amet imperdiet nisi auctor a. Pellentesque tristique ut est ut finibus. Maecenas gravida velit et rutrum ultricies. <br />\r\n<br />\r\nAenean gravida quis magna vitae blandit. Praesent et nibh iaculis, placerat ante id, luctus sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam lobortis urna non nunc semper, vel vestibulum quam egestas. Aliquam a dolor efficitur, cursus ex ac, luctus libero.', 'design_10_01.jpg', 'design_10_02.jpg', 'design_10_thumb.jpg', 'google', '2021-01-06'),
(23, 'Fanfare - Simon Weis', 'GOLDDE0111', 'Vestibulum tempus arcu lacus, ut cursus tellus blandit eu. Donec sit amet augue condimentum, pretium justo quis, egestas nunc. Ut sagittis lobortis ante varius ullamcorper. Donec auctor vitae erat eu tempus. Sed viverra, augue ac rutrum feugiat, ex mi rutrum eros, vitae dictum metus est vitae augue. Curabitur porta vehicula sem, vel vehicula purus viverra at. Sed eget arcu id sem fermentum rutrum. <br />\r\n<br />\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla a vehicula nunc. Nulla ullamcorper facilisis ornare. Maecenas sollicitudin neque ligula, quis ornare magna mattis nec. Duis sem tortor, tristique non dictum nec, molestie eget velit.', 'design_11_01.jpg', 'design_11_02.jpg', 'design_11_thumb.jpg', 'Fanfare', '2021-01-06'),
(24, 'Let it Grow', 'GOLDDE0112', 'Pellentesque varius enim sit amet euismod tempor. Sed sit amet felis condimentum, tempor risus quis, ornare lacus. Quisque lectus est, placerat eu nibh quis, convallis mollis ante. Nulla faucibus ut felis ac blandit. Morbi ornare id felis ut ullamcorper. Nam vel augue a massa eleifend commodo. Nunc at purus in eros aliquet consectetur vel vel lacus. In nec varius urna. Morbi dictum sapien non commodo aliquet. Maecenas sagittis, leo eu imperdiet tincidunt, ipsum mi porta ante, pulvinar placerat massa dui ullamcorper erat. Etiam pulvinar neque et eros rhoncus sodales. Proin vitae massa tellus.<br />\r\n<br />\r\n Integer et dui tincidunt eros pulvinar interdum rhoncus eget arcu. Aliquam sit amet tincidunt augue, vitae varius est. Morbi volutpat, massa in commodo mollis, orci erat ultricies lectus, non rutrum nulla massa sed ligula. Nulla ultricies ex odio, sed blandit ipsum sollicitudin sed.', 'design_12_01.jpg', 'design_12_02.jpg', 'design_12_thumb.jpg', 'Flora Holland', '2021-01-06');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_de`
--
ALTER TABLE `gold_de`
  ADD PRIMARY KEY (`GOLD_DE_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_de`
--
ALTER TABLE `gold_de`
  MODIFY `GOLD_DE_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
