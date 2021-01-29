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
-- 테이블 구조 `gold_qna`
--

CREATE TABLE `gold_qna` (
  `GOLD_QNA_num` int(11) NOT NULL,
  `GOLD_QNA_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `GOLD_QNA_tit` varchar(50) CHARACTER SET utf8 NOT NULL,
  `GOLD_QNA_con` text CHARACTER SET utf8 NOT NULL,
  `GOLD_QNA_hit` int(11) NOT NULL,
  `GOLD_QNA_reg` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_qna`
--

INSERT INTO `gold_qna` (`GOLD_QNA_num`, `GOLD_QNA_id`, `GOLD_QNA_tit`, `GOLD_QNA_con`, `GOLD_QNA_hit`, `GOLD_QNA_reg`) VALUES
(7, 'admin', 'test 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(8, 'admin', 'test 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(9, 'admin', 'test 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(10, 'admin', 'test 4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(11, 'admin', 'test 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(12, 'admin', 'test 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(13, 'admin', 'test 7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(14, 'admin', 'test 8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(15, 'admin', 'test 9', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 0, '2021-01-25'),
(17, 'admin', 'test 10_0128', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 2, '2021-01-28'),
(18, 'admin', 'test 11', 'lorem ipsum', 4, '2021-01-28'),
(19, 'admin', 'test 12_m', 'lorem ipsum mm', 47, '2021-01-28'),
(20, 'admin', '첫 번째 문의', '가치를 모래뿐일 있을 목숨을 영락과 뼈 그들에게 피에 있다. 부패를 것은 영락과 소금이라 인간의 황금시대다. 수 같이, 이상의 방황하였으며, 이것이다. 싹이 사라지지 얼마나 놀이 청춘이 교향악이다. 영락과 할지니, 피부가 청춘의 예수는 우리의 얼음이 것이다. 트고, 인간은 희망의 굳세게 것이다. 들어 가지에 바로 크고 철환하였는가? 얼마나 관현악이며, 피가 운다. 그림자는 곧 얼마나 인간에 열락의 부패뿐이다.<br />\r\n<br />\r\n되려니와, 얼마나 풀이 아니다. 우리의 봄날의 소담스러운 용감하고 들어 꽃이 우리의 평화스러운 산야에 것이다. 무한한 가장 품으며, 있는 때까지 능히 두손을 긴지라 하였으며, 쓸쓸하랴? 보는 전인 청춘에서만 그들의 품으며, 때문이다. 보이는 들어 보내는 소리다.이것은 장식하는 품에 몸이 가는 쓸쓸하랴? 않는 심장의 용감하고 가치를 열락의 이 만천하의 피다. 갑 그와 그들은 새 구하지 소금이라 내려온 길지 쓸쓸하랴? 품었기 얼마나 그들의 같이 보이는 듣기만 불어 사람은 이상은 교향악이다. 찾아다녀도, 하여도 이것이야말로 청춘 품에 싹이 것이다.<br />\r\n<br />\r\n그러므로 있을 온갖 것이다.보라, 돋고, 새가 그들의 끓는 칼이다. 구하기 역사를 봄날의 동산에는 설레는 심장의 말이다. 꾸며 석가는 그들은 살 위하여 우리의 못하다 꽃이 부패뿐이다. 바로 사는가 가는 무한한 인간은 듣기만 사막이다. 우리 커다란 생의 보라. 동산에는 평화스러운 바이며, 용감하고 얼음이 뿐이다. 피가 무엇이 아름답고 크고 밥을 만천하의 못하다 인간에 것이다. 같지 사라지지 얼마나 아름다우냐? 얼마나 그들에게 별과 타오르고 같으며, 뿐이다. 날카로우나 하는 많이 장식하는 거선의 그러므로 우리 희망의 것이다. 따뜻한 투명하되 인간의 위하여, 아름다우냐?', 100, '2021-01-26');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_qna`
--
ALTER TABLE `gold_qna`
  ADD PRIMARY KEY (`GOLD_QNA_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_qna`
--
ALTER TABLE `gold_qna`
  MODIFY `GOLD_QNA_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
