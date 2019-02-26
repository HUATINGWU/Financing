/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : gym

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-06-13 20:15:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `adm`
-- ----------------------------
DROP TABLE IF EXISTS `adm`;
CREATE TABLE `adm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adm
-- ----------------------------
INSERT INTO `adm` VALUES ('1', '123', '123');

-- ----------------------------
-- Table structure for `click`
-- ----------------------------
DROP TABLE IF EXISTS `click`;
CREATE TABLE `click` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `num` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of click
-- ----------------------------
INSERT INTO `click` VALUES ('1', '495');

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1', '青大吴彦祖', '值得投资，我会考虑的', '2018-06-08 14:58:09');
INSERT INTO `comments` VALUES ('2', '北美第一帅', '暗示法撒付付付付付付付付付付', '2018-06-08 14:58:33');
INSERT INTO `comments` VALUES ('3', '卡卡西', '买了全买，不买是不可能的', '2018-06-08 15:32:53');
INSERT INTO `comments` VALUES ('4', '切格拉瓦', '看好你的电动车，我要出门了', '2018-06-08 15:33:44');
INSERT INTO `comments` VALUES ('9', '哈哈哈我是谁', '我是江北大表哥', '2018-06-13 05:01:39');
INSERT INTO `comments` VALUES ('10', '房顶上的安抚', '棒棒哒', '2018-06-13 05:09:23');

-- ----------------------------
-- Table structure for `upload`
-- ----------------------------
DROP TABLE IF EXISTS `upload`;
CREATE TABLE `upload` (
  `uploadid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `other` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`uploadid`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of upload
-- ----------------------------
INSERT INTO `upload` VALUES ('2', null, '游泳-蛙泳挺身', null, 'upfiles/CR-deP4aLcjS5.png');
INSERT INTO `upload` VALUES ('3', null, '游泳-仰泳划臂', null, 'upfiles/CR-REu1nX8nbm.png');
INSERT INTO `upload` VALUES ('4', null, '游泳-俯卧对角提膝', null, 'upfiles/CR-JEjhq6gW5m.png');
INSERT INTO `upload` VALUES ('5', null, '游泳-跪姿右侧转体', null, 'upfiles/CR-4DHjqbMCh6.png');
INSERT INTO `upload` VALUES ('56', '15', '正航人力资源管理项目融资500-2000万', null, 'upfiles/CR-ul7WJ7YspM.png');
INSERT INTO `upload` VALUES ('57', '24', '东旧村改造项目融资20亿', null, 'upfiles/CR-oOXMWzGS6V.png');
INSERT INTO `upload` VALUES ('58', '25', '升降窗帘项目融资180万 ', null, 'upfiles/CR-WVRjgO6y69.png');
INSERT INTO `upload` VALUES ('59', '11', '分布式屋顶光伏电站项目融资600万', null, 'upfiles/CR-GG3YEQ0kYZ.png');
INSERT INTO `upload` VALUES ('60', '55', '匠心蛋糕项目融资10万', null, 'upfiles/CR-retTd99Byj.png');
INSERT INTO `upload` VALUES ('61', '4', '汉能薄膜发电项目', '太阳能发电，很强大的一个,来自香港', 'upfiles/CR-TuScOesg8r.jpg');
INSERT INTO `upload` VALUES ('62', '35', '外国语学院项目融资5亿', null, 'upfiles/CR-wW1z5V0z7p.png');
INSERT INTO `upload` VALUES ('63', '11', '九隆天一家居项目融资1500万', null, 'upfiles/CR-t7iEQYekl9.png');
INSERT INTO `upload` VALUES ('64', '25', '以租代购项目融资2000万  ', null, 'upfiles/CR-q7h4pxo3Ag.png');
INSERT INTO `upload` VALUES ('65', '36', '七彩旅游项目融资200万', null, 'upfiles/CR-bu4eUMbz7X.png');
INSERT INTO `upload` VALUES ('66', '45', '我就是我，不一样的烟火，你就是你，两毛钱一盒的擦炮。嘲笑我没肌肉的人等着吧', null, 'upfiles/CR-ZMGd7Qil4Q.png');
INSERT INTO `upload` VALUES ('67', '77', '我要前凸后翘，甩掉我的渣男我会然你后悔的，两个月后遇见一个不一样的自己！', null, 'upfiles/CR-zVEJTIVO7u.png');
INSERT INTO `upload` VALUES ('68', 'classes_swim.php', '游泳课程', 'classes_content_swim', 'upfiles/CR-gDgmU5Dnan.png');
INSERT INTO `upload` VALUES ('69', 'classes_yujia.html', '瑜伽课程', 'classes_content_yujia', 'upfiles/CR-1zB9uZi9Es.png');
INSERT INTO `upload` VALUES ('70', 'classes_run.html', '跑步课程', 'classes_content_run', 'upfiles/CR-5mdzFVcjAP.png');
INSERT INTO `upload` VALUES ('71', 'classes_qixie.html', '器械课程', 'classes_content_jutie', 'upfiles/CR-T0TDZkNAvb.png');
INSERT INTO `upload` VALUES ('72', 'classes_quanji.html', '拳击课程', 'classes_content_quanji', 'upfiles/CR-6jyZK323kT.png');
INSERT INTO `upload` VALUES ('73', 'classes_bike.html', '动感单车课程', 'classes_content_bk', 'upfiles/CR-LJ6kNvEtvN.png');
INSERT INTO `upload` VALUES ('80', null, 'Bike-健身单车初级', null, 'upfiles/CR-zlIk2EseGH.png');
INSERT INTO `upload` VALUES ('81', null, 'Bike-健身单车强化', null, 'upfiles/CR-SObMUYApS0.png');
INSERT INTO `upload` VALUES ('82', null, 'Bike-健身单车进阶', null, 'upfiles/CR-7zDPQhE8Kz.png');
INSERT INTO `upload` VALUES ('83', null, 'Bike-全身燃动', null, 'upfiles/CR-qRFkVg6Uwt.png');
INSERT INTO `upload` VALUES ('84', null, 'Bike-全身燃动', null, 'upfiles/CR-1cKvpywn5H.png');
INSERT INTO `upload` VALUES ('85', null, 'Bike-后续动作', null, 'upfiles/CR-Wi5OFLsEKF.png');
INSERT INTO `upload` VALUES ('86', null, '瑜伽-晨间唤醒', null, 'upfiles/CR-1mKfqsQThW.png');
INSERT INTO `upload` VALUES ('87', null, '瑜伽-睡前舒缓', null, 'upfiles/CR-cLO6NlYQUq.png');
INSERT INTO `upload` VALUES ('88', null, '瑜伽-关节舒展', null, 'upfiles/CR-QoFiDkLV67.png');
INSERT INTO `upload` VALUES ('89', null, '瑜伽-身体韵律', null, 'upfiles/CR-zjZOqqKr0h.png');
INSERT INTO `upload` VALUES ('90', null, '瑜伽-脊柱柔韧', null, 'upfiles/CR-a84W1wggg0.png');
INSERT INTO `upload` VALUES ('91', null, '瑜伽-核心力量', null, 'upfiles/CR-36rZPnalUW.png');
INSERT INTO `upload` VALUES ('92', null, '瑜伽-力量', null, 'upfiles/CR-tR4yDHMkbR.png');
INSERT INTO `upload` VALUES ('93', null, '瑜伽-柔韧', null, 'upfiles/CR-TghwE8X7OZ.png');
INSERT INTO `upload` VALUES ('94', null, '', null, '');
INSERT INTO `upload` VALUES ('95', null, '跑步-膝预防', null, 'upfiles/CR-egR6BiGAYb.png');
INSERT INTO `upload` VALUES ('96', null, '跑步-核心训练', null, 'upfiles/CR-QEVK5ideLN.png');
INSERT INTO `upload` VALUES ('97', null, '跑步-跑步机有氧健步走', null, 'upfiles/CR-DdqzXl4Rx0.png');
INSERT INTO `upload` VALUES ('98', null, '跑步-跑步机有氧慢跑', null, 'upfiles/CR-wzcsQjW9UZ.png');
INSERT INTO `upload` VALUES ('99', null, '跑步-跑前准备', null, 'upfiles/CR-tAvjQEYTld.png');
INSERT INTO `upload` VALUES ('100', null, '跑步-跑后拉伸', null, 'upfiles/CR-J84wRS9LMe.png');
INSERT INTO `upload` VALUES ('101', null, '跑步-跑前热身', null, 'upfiles/CR-Ssc5vWrk87.png');
INSERT INTO `upload` VALUES ('102', null, '跑步-预热激活跑', null, 'upfiles/CR-9w5tSEa3wv.png');
INSERT INTO `upload` VALUES ('103', null, '', null, '');
INSERT INTO `upload` VALUES ('104', null, '器械-强力带塑形女生版', null, 'upfiles/CR-qwZO7rS3ua.png');
INSERT INTO `upload` VALUES ('105', null, '器械-强力带塑形男生版', null, 'upfiles/CR-sFagHAn87N.png');
INSERT INTO `upload` VALUES ('106', null, '器械-增肌特训', null, 'upfiles/CR-n5YWJ71Gof.png');
INSERT INTO `upload` VALUES ('107', null, '器械-零基础适应性训练', null, 'upfiles/CR-1LJEUPAOdt.png');
INSERT INTO `upload` VALUES ('108', null, '器械-健身入门男生版', null, 'upfiles/CR-Rmp4JkrPoA.png');
INSERT INTO `upload` VALUES ('109', null, '器械-健身入门女生版', null, 'upfiles/CR-9oIZ28AVU4.png');
INSERT INTO `upload` VALUES ('110', null, '器械-驼背改善', null, 'upfiles/CR-wbzEmiQFVa.png');
INSERT INTO `upload` VALUES ('111', null, '器械-马甲线养成', null, 'upfiles/CR-t6MXdJII9s.png');
INSERT INTO `upload` VALUES ('112', null, '', null, '');
INSERT INTO `upload` VALUES ('121', null, '', null, '');
INSERT INTO `upload` VALUES ('122', null, '', null, '');
INSERT INTO `upload` VALUES ('123', null, '', null, '');

-- ----------------------------
-- Table structure for `userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `useraccount` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `userpassword` varchar(20) DEFAULT NULL,
  `usergender` varchar(20) DEFAULT NULL,
  `userage` varchar(20) DEFAULT NULL,
  `usertel` varchar(20) DEFAULT NULL,
  `useremail` varchar(20) DEFAULT NULL,
  `useradr` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`useraccount`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('111', 'aaa', 'aaa', 'male', '12', '12345671234', '12@12.com', 'aaa');
INSERT INTO `userinfo` VALUES ('112', 'aaa3', 'aaa2', 'male', '12', '12345678912', '1212@12.com', 'aaa');
INSERT INTO `userinfo` VALUES ('', '', '', '', '', '', '', '');
INSERT INTO `userinfo` VALUES ('a1a1', 'a1a1', '123', 'male', '12', '12345671234', '12@12.com', 'aaa');
