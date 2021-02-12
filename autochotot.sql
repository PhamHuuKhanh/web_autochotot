-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th2 12, 2021 lúc 08:23 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

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
-- Cấu trúc bảng cho bảng `action_list`
--

CREATE TABLE `action_list` (
  `action_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `action_list`
--

INSERT INTO `action_list` (`action_id`, `action`, `description`) VALUES
(1, 'Tapon', 'mobile,Tap on ex: Tap on button'),
(2, 'Input', 'web,mobile Unput text into textfiled'),
(3, 'Checkvalue', 'Web,mobile check text is correctly content or not'),
(4, 'Scroll_Find_Tap', 'Mobile scroll down, find text and tap on this text'),
(7, 'Enter', 'Enter trên bàn phím');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_epic`
--

CREATE TABLE `ct_epic` (
  `epic_id` int(255) NOT NULL,
  `epic_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `platform` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='0 android, 1 ios, 2 web';

--
-- Đang đổ dữ liệu cho bảng `ct_epic`
--

INSERT INTO `ct_epic` (`epic_id`, `epic_name`, `platform`, `description`, `isActive`) VALUES
(39, 'Seller', '1', 'Dành cho người bán', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_locator`
--

CREATE TABLE `ct_locator` (
  `screen_id` int(255) NOT NULL,
  `id` int(11) NOT NULL,
  `locatorID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locatorXpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_locator`
--

INSERT INTO `ct_locator` (`screen_id`, `id`, `locatorID`, `locatorXpath`, `description`) VALUES
(10, 9, 'nav4More', '_', 'Tab Thêm'),
(11, 10, 'tv_full_name', '_', 'Button đăng nhập/tên'),
(12, 11, 'et_phone', '_', 'TextField sdt'),
(10, 12, 'edt_input', '_', 'TextField pass'),
(10, 13, 'btn_login', '_', 'button đăng nhập'),
(10, 14, 'nav0Home', '_', 'Tab Trang chủ'),
(10, 15, 'search_src_text', '_', 'textfield tìm kiếm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_screen`
--

CREATE TABLE `ct_screen` (
  `epic_id` int(255) NOT NULL,
  `screen_id` int(255) NOT NULL,
  `screen_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `screen_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_screen`
--

INSERT INTO `ct_screen` (`epic_id`, `screen_id`, `screen_name`, `screen_description`) VALUES
(39, 10, 'Home', 'Màn hình vừa mở app'),
(39, 11, 'Thêm', 'Khi vào tab \"Thêm\"'),
(39, 12, 'Login', 'Màn hình nhập sdt + pass');

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
  `isRuned` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_step`
--

INSERT INTO `ct_step` (`testcase_id`, `step_id`, `step_index`, `action`, `locator`, `data`, `note`, `isRuned`, `isActive`) VALUES
(34, 46, 1, 'Tapon', 'et_phone', '1', '3', 'new', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_testcases`
--

CREATE TABLE `ct_testcases` (
  `epic_id` int(255) NOT NULL,
  `testcase_id` int(255) NOT NULL,
  `testcase` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `expected` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='1 passed, 0 failed, 2 not yet, 3 N/A';

--
-- Đang đổ dữ liệu cho bảng `ct_testcases`
--

INSERT INTO `ct_testcases` (`epic_id`, `testcase_id`, `testcase`, `expected`, `result`, `note`, `isActive`) VALUES
(39, 34, '1', '2', 'New', '3', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `action_list`
--
ALTER TABLE `action_list`
  ADD PRIMARY KEY (`action_id`);

--
-- Chỉ mục cho bảng `ct_epic`
--
ALTER TABLE `ct_epic`
  ADD PRIMARY KEY (`epic_id`);

--
-- Chỉ mục cho bảng `ct_locator`
--
ALTER TABLE `ct_locator`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ct_screen`
--
ALTER TABLE `ct_screen`
  ADD PRIMARY KEY (`screen_id`);

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
-- AUTO_INCREMENT cho bảng `action_list`
--
ALTER TABLE `action_list`
  MODIFY `action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `ct_epic`
--
ALTER TABLE `ct_epic`
  MODIFY `epic_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `ct_locator`
--
ALTER TABLE `ct_locator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `ct_screen`
--
ALTER TABLE `ct_screen`
  MODIFY `screen_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `ct_step`
--
ALTER TABLE `ct_step`
  MODIFY `step_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `ct_testcases`
--
ALTER TABLE `ct_testcases`
  MODIFY `testcase_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
