CREATE TABLE `gold_wr` (
  `GOLD_wr_num` int(11) NOT NULL COMMENT '글 고유번호',
  `GOLD_wr_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '글 작성자',
  `GOLD_wr_title` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '글 제목',
  `GOLD_wr_cont` text CHARACTER SET utf8 NOT NULL COMMENT '글 내용',
  `GOLD_wr_hit` int(11) DEFAULT NULL COMMENT '글 조회수'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;