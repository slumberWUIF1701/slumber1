-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-06 05:18:42
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zhaopin`
--

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `posid` int(11) NOT NULL AUTO_INCREMENT,
  `posname` varchar(255) NOT NULL,
  PRIMARY KEY (`posid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `position`
--

INSERT INTO `position` (`posid`, `posname`) VALUES
(1, '轮播'),
(3, '其他');

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(100) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`rid`, `rname`) VALUES
(1, 'HR');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(32) NOT NULL,
  `zhiwei` varchar(255) NOT NULL,
  `uphoto` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `zhiwei`, `uphoto`, `rid`, `email`, `sex`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '超级管理员', '', 1, '', ''),
(15, '张三', '96e79218965eb72c92a549dd5a330112', '人力资源主管', '', 0, '', '男');

-- --------------------------------------------------------

--
-- 表的结构 `zpmess`
--

CREATE TABLE IF NOT EXISTS `zpmess` (
  `zid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `ch` varchar(100) NOT NULL,
  `en` varchar(100) NOT NULL,
  `zhiwei` varchar(100) NOT NULL,
  `money` int(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `con` varchar(1000) NOT NULL,
  `posid` varchar(110) NOT NULL,
  PRIMARY KEY (`zid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zpmess`
--

INSERT INTO `zpmess` (`zid`, `uid`, `ch`, `en`, `zhiwei`, `money`, `address`, `con`, `posid`) VALUES
(3, 15, '百度', 'Baidu', '前端工程师', 10000, '北京', '<p>阿三上的撒旦撒撒发撒瓦屋山东西</p>', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
