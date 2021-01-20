CREATE TABLE `gold_an` (
  `GOLD_re_num` int(11) NOT NULL COMMENT '답글 고유번호',
  `GOLD_re_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '답글 작성자',
  `GOLD_re_cont` text CHARACTER SET utf8 NOT NULL COMMENT '답글 내용',
  `GOLD_re_wr_num` int(11) NOT NULL COMMENT '원글 번호'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;