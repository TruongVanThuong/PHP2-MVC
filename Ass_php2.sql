-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th2 24, 2023 lúc 05:05 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Ass_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Account`
--

CREATE TABLE `Account` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Hinh_Anh` varchar(100) NOT NULL,
  `Gmail` varchar(50) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `Func` int(2) NOT NULL COMMENT '0-admin, 1-website'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Account`
--

INSERT INTO `Account` (`id`, `Name`, `Hinh_Anh`, `Gmail`, `Pass`, `created`, `Func`) VALUES
(1, 'TruongThuong', 'abc.jpg', 'thuong12@gmail.com', '1234567', '0000-00-00 00:00:00', 0),
(2, 'VanThuong', '1.jpg', '123@gmail.com', '1234567', '2023-02-15 13:35:56', 0),
(3, 'Thuong TV', 'avt_ad.jpg', '123@gmail.com', '123123', '2023-02-23 22:06:39', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Admin_acc`
--

CREATE TABLE `Admin_acc` (
  `id` int(11) NOT NULL,
  `Name_ad` varchar(50) NOT NULL,
  `Gmail_ad` varchar(50) NOT NULL,
  `Pass_ad` varchar(20) NOT NULL,
  `Created` datetime NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Catalog`
--

CREATE TABLE `Catalog` (
  `id` int(11) NOT NULL,
  `id_Parent` int(11) NOT NULL,
  `Name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Catalog`
--

INSERT INTO `Catalog` (`id`, `id_Parent`, `Name_category`) VALUES
(3, 3, 'Đá Dán Tường'),
(5, 4, 'Đá Hoa Văn'),
(6, 1, 'Đá Granite'),
(7, 2, 'Đá Marble');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Comment`
--

CREATE TABLE `Comment` (
  `id` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Ma_pd` int(11) NOT NULL,
  `Ma_acc` int(11) NOT NULL,
  `date_cm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Order`
--

CREATE TABLE `Order` (
  `id` int(11) NOT NULL,
  `id_pr` int(11) NOT NULL,
  `id_trans` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Order_detail`
--

CREATE TABLE `Order_detail` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Text` text NOT NULL,
  `Created` datetime NOT NULL,
  `Discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Products`
--

INSERT INTO `Products` (`id`, `Category_id`, `Name`, `Price`, `Image`, `Text`, `Created`, `Discount`) VALUES
(2, 2, 'Đá mable trắng', 1900000, 'MB10.jpg', 'Do đá marble trắng Volakas có nhiều đặc tính chống ẩm, chống thấm, chịu nước, chống cháy, cách âm tốt nên được ứng dụng trong nhiều hạng mục công trình.', '2023-02-23 04:45:27', 2),
(3, 1, 'Đá granite vàng đen', 1900000, 'G2.jpg', 'đá granite vàng đen Volakas có nhiều đặc tính chống ẩm, chống thấm, chịu nước, chống cháy, cách âm tốt nên được ứng dụng trong nhiều hạng mục công trình.', '2023-02-23 04:40:06', 2),
(4, 1, 'Đá granite trắng đen', 1200000, 'G42.jpg', 'Đá granite trắng đen', '2023-02-23 04:40:27', 1),
(6, 2, 'Đá marble trắng sọc', 2300000, 'MB13.jpg', 'Đá marble trắng sọc', '2023-02-23 04:46:41', 2),
(7, 2, 'Đá marble vàng đất', 1500000, 'MB4.jpg', 'Đá marble vàng đất rất là oke', '2023-02-23 04:47:33', 3),
(8, 3, 'Đá Dán Tường vàng đen', 1600000, 'DT6.jpg', 'Đá Dán Tường vàng đen oke', '2023-02-24 15:24:58', 2),
(9, 4, 'Đá Hoa Văn màu xanh làm ấm trà', 1200000, 'HV8.jpg', 'Đá Hoa Văn màu xanh làm ấm trà', '2023-02-24 15:44:31', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Transaction`
--

CREATE TABLE `Transaction` (
  `id` int(11) NOT NULL,
  `Status` tinyint(5) NOT NULL,
  `User_id` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `User_phone` int(10) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Security` int(5) NOT NULL,
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Admin_acc`
--
ALTER TABLE `Admin_acc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Catalog`
--
ALTER TABLE `Catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Order_detail`
--
ALTER TABLE `Order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Transaction`
--
ALTER TABLE `Transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Account`
--
ALTER TABLE `Account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `Admin_acc`
--
ALTER TABLE `Admin_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Catalog`
--
ALTER TABLE `Catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `Comment`
--
ALTER TABLE `Comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Order`
--
ALTER TABLE `Order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Order_detail`
--
ALTER TABLE `Order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `Transaction`
--
ALTER TABLE `Transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
