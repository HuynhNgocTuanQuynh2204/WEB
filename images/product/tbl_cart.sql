-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 13, 2023 lúc 06:50 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int NOT NULL,
  `id_khachhang` int NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int NOT NULL,
  `thoigian` datetime NOT NULL,
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `thoigian`, `cart_payment`, `cart_shipping`) VALUES
(1, 1, '1138', 2, '2023-11-01 22:38:22', 'tienmat', 2),
(2, 1, '2756', 2, '2023-11-02 12:38:45', 'tienmat', 2),
(3, 1, '6149', 2, '2023-11-02 22:31:05', 'tienmat', 2),
(4, 1, '1363', 2, '2023-11-02 22:31:46', 'tienmat', 2),
(5, 1, '150', 2, '2023-11-04 16:29:44', 'tienmat', 2),
(6, 1, '8559', 2, '2023-11-04 16:30:12', 'paypal', 2),
(7, 1, '7491', 2, '2023-11-04 16:30:25', 'vnpay', 2),
(8, 1, '8821', 2, '2023-11-08 13:26:18', 'vnpay', 2),
(9, 1, '8370', 2, '2023-11-08 13:27:57', 'vnpay', 2),
(10, 1, '8026', 2, '2023-11-28 18:23:19', 'vnpay', 2),
(11, 1, '5394', 2, '2023-11-28 18:44:08', 'MOMO', 2),
(12, 1, '3858', 2, '2023-11-28 22:01:21', 'MOMO', 2),
(13, 1, '8706', 2, '2023-12-05 02:37:19', 'chuyenkhoan', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_khachhang` (`id_khachhang`),
  ADD KEY `cart_shipping` (`cart_shipping`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_dangky` (`id_dangky`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`cart_shipping`) REFERENCES `tbl_shipping` (`id_shipping`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
