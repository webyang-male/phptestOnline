-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-08-28 10:55:22
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `mytest`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '123'),
(2, 'abc', '456'),
(3, 'zzy', '123');

-- --------------------------------------------------------

--
-- 表的结构 `judge`
--

CREATE TABLE `judge` (
  `id` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '判断题',
  `answer` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `judge`
--

INSERT INTO `judge` (`id`, `question`, `answer`) VALUES
(10, '在返回数组中的所有值，可以使用array_value( )函数', 'T'),
(11, '运算符“++”可以对常量和变量进行累加1', 'F'),
(12, 'php语言中的数值型字符串可以和数字变量进行混合运算.', 'T'),
(13, 'php中,双引号字符串支持变量解析以及转义字符.', 'T'),
(14, 'php语言中的数值型字符串不可以和数字变量进行混合运算.', 'F'),
(15, 'PHP程序的扩展名必须是.php', 'F'),
(16, 'php中,字符串是用引号引起来的字符,单引号和双引号没有区别,都是一样的,随便用哪一个都是一样的.', 'F'),
(17, 'if条件控制语句中，if后面的{ }可有可无，意义一样', 'F'),
(18, '一个MySQL服务器,可以拥有多个数据库,每个数据库可拥有多个表.', 'T'),
(19, 'MS-server200与mysql一样,同属微软公司的产品,用于软件开发的数据库支持', 'F'),
(20, '运算符“--”可以对常量和变量进行自身减1', 'F'),
(21, 'php中,单引号字符串不支持变量解析以及转义字符.', 'T'),
(22, 'if条件控制语句中，if后面的{ }不能省略', 'F'),
(23, '&lt; form id=&quot;form1&quot; name=&quot;form1&quot; method=&quot;&quot; action=&quot;&quot; &gt;，默认的method使用get进行值传递', 'F'),
(24, '〈form id=&quot;form1&quot; name=&quot;form1&quot; method=&quot;&quot; action=&quot;&quot;&gt;，默认的method使用post进行值', 'F'),
(25, '常量的作用域是全局的,不存在全局与局部的概念.', 'T'),
(26, 'if条件控制语句中，if后面必须加括号', 'T'),
(27, '使用get和post传递表单值没有什么区别,可以随便选择一种使用.', 'F'),
(28, 'php中,在任何时候,双引号和单引号都是不一样的.', 'F'),
(29, '运算符“++”只能对常量进行自身加1', 'F'),
(30, 'if条件控制语句中，if后面的{ }可有可无。', 'F'),
(31, 'PHP跟ASP一样,只能应用IIS架设服务器', 'F'),
(32, 'MySQL可以建立个用户,但每个用户的权限一样,仅是名称不一样而已.', 'F'),
(33, 'php中，（）与{ }具有不一样的功能。', 'T'),
(34, 'php中可以使用method=post的方式进行文件上传', 'F'),
(35, 'php中，==与===是同一个运算符。', 'F'),
(36, 'MySQL数据库可以建立多个用户,且各个用户的权限可以分别设置.', 'T'),
(37, 'array_search() 与in_array()函数均可用来查询数组中元素的值。', 'F'),
(38, 'PHP是微软公司开发的,应用于设计网页的语言', 'F'),
(39, 'php中,双引号和单引号在某些时候具有不同的意义,在某些时候具有相同的意义.', 'T');

-- --------------------------------------------------------

--
-- 表的结构 `multiple`
--

CREATE TABLE `multiple` (
  `id` int(11) NOT NULL,
  `question` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '多选题',
  `option1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `multiple`
--

INSERT INTO `multiple` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(9, 'PHP中，不等运算符是（ ）', 'A  ≠', 'B  !=', 'C  &lt;&gt;', 'D  &gt;&lt;', 'BC'),
(10, '函数的参数传递包括：', 'A  按值传递', 'B  按引用传递', 'C  按变量传递', 'D  按作用域传递', 'AB'),
(11, 'php中，赋值运算符有（ ）', 'A  =', 'B  +=', 'C  ==', 'D  .=', 'ABD'),
(12, 'php中可以实现程序分支结构的关键字是（ ）', 'A  while', 'B  for', 'C  if', 'D  switch', 'CD'),
(13, 'continue语句可以用在（ ）中。', 'A  for', 'B  while', 'C  do-while', 'D  switch', 'ABC'),
(14, 'break可以用在（ ）语句中', 'A  switch', 'B  for', 'C  while', 'D  do-while', 'ABCD'),
(15, 'php中可以实现循环的是（ ）', 'A  for', 'B  break', 'C  while', 'D  waiting', 'AC'),
(16, 'PHP中,标识符允许出现的符号有:', 'A  大写字母', 'B  小写字母', 'C  数字', '', 'ABC'),
(17, 'PHP允许的注释符号有:', 'A  //', 'B  闭合的段落', 'C  #', 'D  /*和*/闭合的段落', 'ACD'),
(18, 'PHP表单的提交方法有:', 'A  post', 'B  request', 'C  get', 'D  querystring', 'ABC'),
(19, 'PHP语言标记用的是什么( )符号', 'A  〈? ?&gt;', 'B  〈php &gt;', 'C  〈?php ?&gt;', 'D  〈% %&gt;', 'ACD'),
(20, 'php中数组可以使用哪些键名？', 'A  数字键名', 'B  下标', 'C  随机', 'D  文本（或字符串）键名', 'AB');

-- --------------------------------------------------------

--
-- 表的结构 `single`
--

CREATE TABLE `single` (
  `id` int(11) NOT NULL,
  `question` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '单选题',
  `option1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `single`
--

INSERT INTO `single` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'mysql_connect( )与@mysql_connect( )的区别是(  )', 'A  @mysql_connect( )不会忽略错误,将错误显示到客户端', 'B  mysql_connect( )不会忽略错误,将错误显示到客户端', 'C  没有区别', 'D  功能不同的两个函数', 'B'),
(8, '语句for(k=0; k=0;k=1;k++);和语句for( k++);和语句for(k=0;k==1; k==1;k++);执行的次数分别是:', 'A  无限和0', 'B  0和无限', 'C  都是无限', 'D  都是0', 'A'),
(9, '读取post方法传递的表单元素值的方法是:', 'A  $_post[&quot;名称&quot;]', 'B  $_POST[&quot;名称&quot;]', 'C  $post[&quot;名称&quot;]', 'D  $POST[&quot;名称&quot;]', 'B'),
(10, 'PHP运算符中，优先级从高到低分别是（ ）', 'A  关系运算符，逻辑运算符，算术运算符', 'B  算术运算，关系运算符，逻辑运算符', 'C  逻辑运算符，算术运算符，关系运算符', 'D  关系运算符，算术运算符，逻辑运算符', 'B'),
(11, 'cookie的值存储在（ )', 'A  硬盘中', 'B  程序中', 'C  客户端', 'D  服务器端', 'C'),
(12, '要查看一个变量的数据类型,可使用函数( )', 'A  type()', 'B  gettype()', 'C  GetType()', 'D  Type()', 'B'),
(13, '字符串的比较，是按（  ）进行比较。', 'A  拼音顺序', 'B  ASCII码值', 'C  随机', 'D  先后顺序', 'B'),
(14, '复选框的type属性值是( )', 'A  checkbox', 'B  radio', 'C  select', 'D  check', 'A'),
(15, 'SESSION会话的值存储在(   ）', 'A  硬盘上', 'B  网页中', 'C  客户端', 'D  服务器端', 'D'),
(16, '如果想取得最近一条查询的信息,应该使用哪个函数(   )', 'A  mysql_info', 'B  mysql_stat', 'C  mysql_insert_id( )', 'D  mysql_free_result', 'A'),
(17, '要查看一个结构类型变量的值,可以使用函数( )', 'A  Print( )', 'B  print( )', 'C  Print_r()', 'D  print_r( )', 'D'),
(18, '在PHP中哪个变量数组总是包含所有总客户端发出的cookies数据(    )', 'A   C OOKIE', 'B   COOKIEB_COOKIES', 'C   G ETCOOKIED', 'D   GETCOOKIED_GETCOOKIES', 'A'),
(19, '下列哪个说法是错误的(  )', 'A  gettype( )是查看数据类型的', 'B  没有被赋值的变量是0', 'C  unset( )是被认为NULL', 'D  双引号字符串最重要的一点是其中的变量名会被变量值替代', 'D'),
(20, 'HTML中,超链接用的是什么标签', 'A  〈a&gt;', 'B  〈table&gt;', 'C  〈b&gt;', 'D  〈head&gt;', 'A'),
(21, 'strtolower( )函数的功能是（ ）', 'A  将给定的字符串全部转换为小写字母', 'B  将给定的字符串全部转换为大写字母', '', '', 'A'),
(22, 'HTML中,表格单元格的&quot;值&quot;是存储在( )标签里', 'A  &lt;body&gt;', 'B  &lt;td&gt;', 'C  &lt;tr&gt;', 'D  &lt;table&gt;    &lt;tr&gt;     &lt;td&gt;REFDVCD&lt;/td&gt;   &lt;/tr&gt; &lt;/table&gt;', 'B'),
(23, '将一个值或变量转换为字符类型的函数是( )', 'A  intval( )', 'B  strval( )', 'C  str', 'D  valint( )', 'B'),
(24, 'php中字符串的连接运算符是（ ）', 'A  -', 'B  +', 'C  &amp;', 'D  .', 'D'),
(25, 'php函数不支持的功能有:', 'A  可变的参数个数', 'B  通过引用传递参数', 'C  通过指针传递参数', 'D  实现递归函数', 'C'),
(26, '文件框的type属性值是( )', 'A  text', 'B  hidden', 'C  textarea', 'D  checkbox', 'C'),
(27, '运算符“^”的作用是（ ）', 'A  无效', 'B  乘方', 'C  位非', 'D  位异或', 'D'),
(28, '自定义函数中，返回函数值的关键字是（ ）', 'A  returns', 'B  close', 'C  return', 'D  back', 'A'),
(29, '要检查一个常量是否定义,可以使用函数( )', 'A  defined( )', 'B  isdefin( )', 'C  isdefined( )', 'D  无', 'A'),
(30, '关于mysql_select_db的作用描述正确的是(    )', 'A  连接数据库', 'B  连接并选取数据库', 'C  连接并打开数据库', 'D  选取数据库', 'D'),
(31, 'HTML中,title标签放在什么位置', 'A  body标签里', 'B  head标签里', 'C  script标签里', 'D  table标签里', 'B');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stuno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `name`, `stuno`, `password`, `score`) VALUES
(30, ' 丁一 ', '30101', '丁一', 0),
(31, ' 刘二 ', '30102', '刘二', 0),
(32, ' 张三 ', '30103', '张三', 0),
(33, ' 李四 ', '30104', '李四', 0),
(34, ' 王五 ', '30105', '王五', 0),
(35, 'test', '0000', '123', 100),
(36, 'zzy', '0000', '123', 100);

-- --------------------------------------------------------

--
-- 表的结构 `testpaper`
--

CREATE TABLE `testpaper` (
  `id` int(11) NOT NULL,
  `setter` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL COMMENT '试卷设置人',
  `setdate` date NOT NULL COMMENT '试卷设置时间',
  `bin` int(11) NOT NULL COMMENT '判断题数',
  `bin1` int(11) NOT NULL COMMENT '判断题分',
  `sin` int(11) NOT NULL COMMENT '单选题数',
  `sin1` int(11) NOT NULL COMMENT '单选题分',
  `mul` int(11) NOT NULL COMMENT '多选题数',
  `mul1` int(11) NOT NULL COMMENT '多选题分'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `testpaper`
--

INSERT INTO `testpaper` (`id`, `setter`, `setdate`, `bin`, `bin1`, `sin`, `sin1`, `mul`, `mul1`) VALUES
(1, '赵洲洋', '2020-05-27', 5, 6, 3, 10, 5, 8),
(10, '赵洲洋', '2020-05-28', 5, 6, 5, 6, 4, 10);

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `multiple`
--
ALTER TABLE `multiple`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `single`
--
ALTER TABLE `single`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `testpaper`
--
ALTER TABLE `testpaper`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `judge`
--
ALTER TABLE `judge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- 使用表AUTO_INCREMENT `multiple`
--
ALTER TABLE `multiple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `single`
--
ALTER TABLE `single`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- 使用表AUTO_INCREMENT `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- 使用表AUTO_INCREMENT `testpaper`
--
ALTER TABLE `testpaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
