-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 31, 2020 lúc 02:08 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `autochotot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_epic`
--

CREATE TABLE `ct_epic` (
  `epic_id` int(255) NOT NULL,
  `epic_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `platform` int(255) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='0 android, 1 ios, 2 web';

--
-- Đang đổ dữ liệu cho bảng `ct_epic`
--

INSERT INTO `ct_epic` (`epic_id`, `epic_name`, `platform`, `description`) VALUES
(1, 'Sample test case for android', 0, 'description for android'),
(3, 'epic name test cho iPhone', 1, 'cho iOS'),
(4, 'epic name test cho iPhone', 1, 'miêu tả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_step`
--

CREATE TABLE `ct_step` (
  `testcase_id` int(11) NOT NULL,
  `step_id` int(11) NOT NULL,
  `step_index` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isRuned` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_step`
--

INSERT INTO `ct_step` (`testcase_id`, `step_id`, `step_index`, `action`, `locator`, `data`, `note`, `isRuned`) VALUES
(1, 1, 1, 'Tap on', 'xpath chổ này', '123000', 'chỉ chọn vào vị trí này', 0),
(1, 2, 2, 'Tap on', 'xpath chổ này', '123000', 'chỉ chọn vào vị trí này', 0),
(1, 3, 1, 'Tap on 2', 'xpath chổ này 2', '123000 2', 'chỉ chọn vào vị trí này 2', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_testcases`
--

CREATE TABLE `ct_testcases` (
  `epic_id` int(255) NOT NULL,
  `testcase_id` int(255) NOT NULL,
  `testcase` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `expected` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='1 passed, 0 failed, 2 not yet, 3 N/A';

--
-- Đang đổ dữ liệu cho bảng `ct_testcases`
--

INSERT INTO `ct_testcases` (`epic_id`, `testcase_id`, `testcase`, `expected`, `result`, `note`) VALUES
(1, 1, 'Check login happy case 1', 'login success 1', 0, 'sample test data 1'),
(1, 2, 'Check login happy case 1', 'login success 1', 0, 'sample test data 1'),
(1, 3, 'Check login happy case 2', 'login success 2', 0, 'sample test data 2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_epic`
--
ALTER TABLE `ct_epic`
  ADD PRIMARY KEY (`epic_id`);

--
-- Chỉ mục cho bảng `ct_step`
--
ALTER TABLE `ct_step`
  ADD PRIMARY KEY (`step_id`);

--
-- Chỉ mục cho bảng `ct_testcases`
--
ALTER TABLE `ct_testcases`
  ADD PRIMARY KEY (`testcase_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ct_epic`
--
ALTER TABLE `ct_epic`
  MODIFY `epic_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ct_step`
--
ALTER TABLE `ct_step`
  MODIFY `step_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ct_testcases`
--
ALTER TABLE `ct_testcases`
  MODIFY `testcase_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
