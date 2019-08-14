-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 08 月 14 日 17:35
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `news`
--

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `newsID` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`newsID`, `date`, `title`, `content`) VALUES
(1, '2019-08-14 07:08:25', '政院：跨部會合作策進冷凍雞肉標示管理措施123', '針對近日外界關切冷凍雞肉標示議題，行政院林萬億政務委員今(13)日召開「冷凍雞肉標示管理協商會議」，由行政院食品安全辦公室邀集衛福部、農委會及行政院經貿談判辦公室進行討論，獲致共識，冷凍雞肉不論國產或進口，管理標準應一致（相同有效日期評估指引）。另將以半年為試辦期，鼓勵超市（商）及通路業者於包裝上增加標示屠宰或生產日期，作為未來修正相關規定的參考。林政委表示，國產及進口冷凍雞肉的包裝標示，現行必須依「食品安全衛生管理法」，標示原產地（國）及有效日期。衛福部會執行進口雞肉邊境查驗，各地方政府衛生局也會於市場端抽驗；食品製造業者應依據「市售包裝食品有效日期評估指引」訂定有效日期，國產或進口雞肉標準一致，均指從屠宰或生產日期到有效食用日期。林政委進一步說明，除現行已標示原產地（國）及有效日期之外，衛福部將以鼓勵性質試辦增加標示屠宰日期，請超市（商）或量販店等通路業者，於國產或進口冷凍雞肉包裝上，標示屠宰日期，原則試辦半年。試辦期間，請農委會與衛福部合作，針對生產、銷售及消費團體加強溝通與協調、取得共識，後續視試辦情形，檢討並適時調整相關規範。食品安全辦公室強調，將依今日會議共識，持續協助跨部會推動試辦，透過鼓勵方式，請業者在冷凍雞肉包裝上標示充分資訊，藉由試辦期，讓業者有足夠時間調整其進口或國內生產的產銷模式，消費者也能獲得充分資訊，讓國人食用冷凍雞肉時更能安心與放心。'),
(2, '2019-08-14 02:45:00', '公告二', 'test'),
(3, '2019-08-14 02:45:06', '公告三', 'test'),
(5, '2019-08-14 07:30:35', '累一個測試test', '安安累累');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
