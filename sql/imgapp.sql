-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2022 lúc 11:17 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `imgapp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `PassWord` varchar(20) NOT NULL,
  `UserImg` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `followers` int(11) NOT NULL,
  `watching` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`ID`, `UserName`, `PassWord`, `UserImg`, `email`, `followers`, `watching`) VALUES
(1, 'kieumy21', 'abcd1234', 'user1.jpg', 'kieumy21@gmail.com', 0, 0),
(2, 'pikachu', 'abcd1234', 'user2.jpg', 'pikachu@gmail.com', 0, 0),
(3, 'tom', 'abcd1234', 'user3.jpg', 'tom@gmail.com', 0, 0),
(4, 'mimi', 'abcd1234', 'user4.jpg', 'mimi@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `ImgName` varchar(200) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `TimePost` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TypeImg` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`ID`, `ImgName`, `IDUser`, `TimePost`, `TypeImg`, `Title`) VALUES
(1, 'meo1.jpg', 1, '2022-05-03 21:48:00', 1, 'Con mèo 1'),
(2, 'meo2.jpg', 2, '2022-05-03 21:48:10', 2, 'Con mèo dễ thương '),
(3, 'meo3.jpg', 4, '2022-05-03 21:48:17', 3, 'Con mèo mơ mộng'),
(4, 'meo4.jpg', 3, '2022-05-03 21:48:27', 4, 'Con mèo ngốc nghếch'),
(7, 'hzigwD7I9F4Bvr6.png', 2, '2022-05-03 21:48:47', 1, 'Hình ảnh mùa thu màu tím'),
(8, 'R6hadHXzpMxBvSo.png', 1, '2022-05-03 21:49:00', 2, 'Hình ảnh cây đổi màu'),
(10, 'tpvjJgPRuK1k8b6.png', 4, '2022-05-03 21:49:07', 4, 'banner test'),
(13, 'nLiMyo5ltYwzAbf.png', 1, '2022-05-03 22:59:06', 1, ''),
(14, '9ybHfRZPEg6zxJl.png', 1, '2022-05-04 10:41:54', 1, ''),
(15, 'maUhwuznoL6E4S2.png', 1, '2022-05-04 10:43:44', 1, 'adcs'),
(31, 'wieqGhA3LVaCDZM.png', 1, '2022-05-04 14:24:04', 1, 'Hình ảnh bầu trời đêm'),
(49, 'BZ0LG1qzEA4ljrR.png', 1, '2022-05-22 12:14:39', 1, 'nhà của my');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(11) NOT NULL,
  `IDImg` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
