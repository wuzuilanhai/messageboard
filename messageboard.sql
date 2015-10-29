/*
MySQL Data Transfer
Source Host: localhost
Source Database: messageboard
Target Host: localhost
Target Database: messageboard
Date: 2015/10/29 21:01:36
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for message
-- ----------------------------
CREATE TABLE `message` (
  `id` int(11) NOT NULL auto_increment,
  `content` varchar(120) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `uid` int(11) NOT NULL,
  `uname` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user
-- ----------------------------
CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `message` VALUES ('1', 'ccontent1', '2015-10-29 16:10:23', '1', 'admin');
INSERT INTO `message` VALUES ('2', 'ccontent2', '2015-10-29 16:10:23', '2', 'guest');
INSERT INTO `message` VALUES ('3', 'ccontent3', '2015-10-29 16:11:05', '3', 'zhangsan');
INSERT INTO `message` VALUES ('4', 'ccontent4', '2015-10-29 16:11:05', '4', 'lisi');
INSERT INTO `message` VALUES ('13', 'zhangsan', '2015-10-29 18:59:39', '3', 'zhangsan');
INSERT INTO `message` VALUES ('12', 'qwesaasd', '2015-10-29 18:56:36', '1', 'admin');
INSERT INTO `message` VALUES ('11', 'asdasd', '2015-10-29 18:56:33', '1', 'admin');
INSERT INTO `message` VALUES ('14', 'lisi', '2015-10-29 18:59:56', '4', 'lisi');
INSERT INTO `message` VALUES ('15', 'admin\r\n', '2015-10-29 19:00:11', '1', 'admin');
INSERT INTO `message` VALUES ('16', 'guest', '2015-10-29 19:00:24', '2', 'guest');
INSERT INTO `message` VALUES ('17', 'hahahaha', '2015-10-29 19:03:02', '1', 'admin');
INSERT INTO `message` VALUES ('18', 'wangwu', '2015-10-29 19:03:38', '5', 'wangwu');
INSERT INTO `message` VALUES ('19', 'add new user\r\n', '2015-10-29 19:03:53', '1', 'admin');
INSERT INTO `message` VALUES ('20', 'aadd', '2015-10-29 19:21:21', '1', 'admin');
INSERT INTO `message` VALUES ('21', 'asdasdasda', '2015-10-29 19:21:25', '1', 'admin');
INSERT INTO `message` VALUES ('22', 'edasdsa', '2015-10-29 19:21:31', '1', 'admin');
INSERT INTO `message` VALUES ('23', 'ASDSAS', '2015-10-29 19:26:15', '5', 'wangwu');
INSERT INTO `message` VALUES ('24', 'aqwasdaasdsa', '2015-10-29 19:28:19', '5', 'wangwu');
INSERT INTO `message` VALUES ('25', 'qweaxada', '2015-10-29 19:28:24', '5', 'wangwu');
INSERT INTO `message` VALUES ('26', 'asdfafas', '2015-10-29 19:28:28', '5', 'wangwu');
INSERT INTO `message` VALUES ('27', 'aqweqa', '2015-10-29 19:28:32', '5', 'wangwu');
INSERT INTO `message` VALUES ('28', 'asdafasadas', '2015-10-29 19:28:44', '5', 'wangwu');
INSERT INTO `message` VALUES ('29', '哈哈哈', '2015-10-29 19:31:18', '1', 'admin');
INSERT INTO `message` VALUES ('30', '我是傻彪', '2015-10-29 19:31:31', '1', 'admin');
INSERT INTO `message` VALUES ('31', '我是游客', '2015-10-29 19:32:00', '2', 'guest');
INSERT INTO `message` VALUES ('32', '我是张三', '2015-10-29 19:32:20', '3', 'zhangsan');
INSERT INTO `message` VALUES ('33', '我是小米', '2015-10-29 19:40:56', '3', 'zhangsan');
INSERT INTO `message` VALUES ('34', '我是admin', '2015-10-29 19:41:11', '1', 'admin');
INSERT INTO `message` VALUES ('35', '我是张海彪', '2015-10-29 19:45:40', '6', '张海彪');
INSERT INTO `message` VALUES ('36', '哈哈哈哈', '2015-10-29 19:46:09', '1', 'admin');
INSERT INTO `message` VALUES ('37', '来来阿里', '2015-10-29 19:48:20', '1', 'admin');
INSERT INTO `message` VALUES ('38', '哟哟切克闹', '2015-10-29 19:48:55', '1', 'admin');
INSERT INTO `message` VALUES ('39', 'qweq', '2015-10-29 21:00:05', '1', 'admin');
INSERT INTO `user` VALUES ('1', 'admin', 'admin');
INSERT INTO `user` VALUES ('2', 'guest', 'guest');
INSERT INTO `user` VALUES ('3', 'zhangsan', '123');
INSERT INTO `user` VALUES ('4', 'lisi', '123');
INSERT INTO `user` VALUES ('5', 'wangwu', '123');
INSERT INTO `user` VALUES ('6', '张海彪', '123');
