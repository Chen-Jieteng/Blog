-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-12-27 03:09:21
-- 服务器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `articles`
--

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_topic` varchar(100) NOT NULL,
  `article_subtopic` varchar(100) NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `article_name` varchar(100) NOT NULL,
  `article_desc` text NOT NULL,
  `article_author` varchar(100) NOT NULL,
  `article_body` longtext NOT NULL,
  `article_timeUpdate` datetime NOT NULL DEFAULT current_timestamp(),
  `article_timeStamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`article_id`, `article_topic`, `article_subtopic`, `article_image`, `article_name`, `article_desc`, `article_author`, `article_body`, `article_timeUpdate`, `article_timeStamp`) VALUES
(1, '数据科学', '人工智能', 'images/Oxford-Economics-Canadian-Real-Estate-Bubble-Correction.webp', '利用IBM Watson Studio系统预测以及分析未来房价', '2022年底时，全球房地产行业看起来一片光明。在经合组织的38个成员国中，房价正以50年来的最快速度增长。但不到一年时间，情况就完全不同了。牛津经济研究院预计，其数据库中几乎所有国家明年都将经历经济放缓，这是自2000年以来最普遍的一次房价增长减速，超过一半的国家可能会出现价格彻底收缩，相似情况发生还是在2009年。', 'Edwin', '       2022年底时，全球房地产行业看起来一片光明。在经合组织的38个成员国中，房价以50年来的最快速度增长。但不到一年时间，情况就完全不同了。牛津经济研究院预计，其数据库中几乎所有国家明年都将经历经济放缓，这是自2000年以来最普遍的一次房价增长减速，超过一半国家或会出现价格彻底收缩，相似情况发生还是在2009年。\r\n\r\n      “这是2007年、2008年以来最令人担忧的房地产前景，市场在温和下跌和大幅下跌两种可能间徘徊。”牛津经济研究院首席经济学家Adam Slate分析认为，在他看来“发达经济体抵押贷款利率的持续飙升，有可能将一些房地产市场推向急剧下滑”。IMF警示，全球房地产市场正处于“临界点”。\r\n\r\n      “随着全球央行积极收紧货币政策以应对价格压力，借贷成本飙升和贷款标准收紧，再加上房屋估值过高，可能导致房价大幅下跌。”国际货币组织（IMF）发布的全球金融稳定报告称。美国8月份的年度房价增长率从上个月的16%放缓至13%，这是该指数自1975年以来的最快减速。咨询公司Capital Economics预计美国房价明年将下跌8个百分点。在欧元区，银行越来越多地拒绝住房贷款，并对已经发放的贷款收紧条件。\r\n\r\n        这种“急剧下降”可能将是普遍的。虽然牛津经济研究院的数据分析主要是发达经济体，但IMF预测，在严重不利的情况下，未来三年新兴市场的实际房价可能下降25%，而发达经济体的降幅为10%。房地产市场放缓也可能抑制更广泛的经济活动，损害建筑业及其供应商。Slate预测，由于支出减少，全球房地产市场低迷可能使经济增长减少0.2个百分点，而住宅投资减少又可能使经济增长减少0.6个百分点。加拿大央行则估计，房地产市场低迷将使明年的经济增长下降0.6至0.9个百分点。\r\n\r\n        房地产活动“已被彻底摧毁”？在美联储连续快速加息之后，美国30年期交易的利率稳定在7%左右，是去年利率的两倍多，这是2008年以来的最高水平。加上前两年房价的飙升，典型资产的每月抵押贷款还款额从一年前的1700美元升至2600多美元。美国花旗银行首席经济学家Nathan Sheets说：“我认为利率可能会带来更大阻力，而且确实看到房地产市场正在放缓。”这种模式在许多国家都是相似的，欧元区、加拿大、澳大利亚和新西兰的抵押贷款利率已升至近年来的最高水平。宏观经济咨询机构Pantheon Macroeconomics的经济学家Melanie Debono称：“随着抵押贷款利率上升，银行停止放贷，抑制需求，我们仍然相信这一观点，即欧元区房价涨势将急剧下降，并将在2023年底前转为负增长。”英国经济咨询公司Capital Economics的经济学家Marcel Thieliant估计，新西兰的抵押贷款还款额已经飙升至收入中位数的60%以上，高于新冠肺炎疫情前的45%以下。随着利率进一步上升，他预测新西兰的房价将从11月的峰值下跌25%。英国特拉斯政府提出的大规模减税政策，令抵押贷款市场陷入动荡。随着新首相苏纳克上台，市场平静下来，但明年利率仍有望从目前的3%升至4.6%左右。英国智库Resolution Foundation计算得出，到2023年底，近五分之一的家庭抵押贷款付款额或以每年5000英镑的速度上涨。', '2022-12-26 19:21:55', '2022-12-26 02:48:55'),
(2, '自然语言', '上古语言', 'images/Map-of-the-Ainu-language-varieties-Colored-circles-represent-two-major-subgroups.png', '阿伊努族语言的扩张与濒危，及其语法变化', '在阿伊努语中“阿伊努”即“人”的意思，该民族分布的地区亦称阿伊努茅希利，即阿伊努语中“人居住的地方”。至今，很多阿伊努人都希望人们称谓他们为“ウタリ”（日语罗马拼音：Utari，阿伊努语中“伙伴”的意思）。在官方文献中，“阿伊努”和“乌塔利”此两种称呼都有。由于已被同化入日本人之中，纯阿伊努人血统基本上已经消失。[5]官方估计，人口约25,000，非官方数字为200,000人以上。', 'Edwin', '', '2022-12-26 19:26:54', '2022-12-26 01:28:54'),
(3, 'UI/UX', '作业项目', 'images/Mental-Health-Support-in-Schools.jpg', '记录：校园技术和生活支持的软件设计小项目', '约克校园支持app是ITEC3230的课堂强木的技术支持手机客户端,在华为技术支持app您可以快速浏览华为多款产品资料、视频及案例,并可通过查询工具快速告警和命令,并可以获得最', 'Edwin', '', '2022-12-26 19:27:44', '2022-12-26 01:39:44'),
(4, '技术笔记', '故障排除', 'images/Amazon_Web_Services_Logo-kl-1000x880.png', '对AWS Route53服务所创建域名失效的故障排除和解决方案', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis eros sed risus sollicitudin fringilla dictum in metus.', 'Edwin', '', '2022-12-26 19:30:27', '2022-12-26 01:40:27');

--
-- 转储表的索引
--

--
-- 表的索引 `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
