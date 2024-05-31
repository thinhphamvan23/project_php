-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 31, 2024 lúc 11:41 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(20) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `pttt` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1.Thanh toán khi nhận hàng 2.Chuyển khoản 3.Thanh toán online',
  `ngaydathang` varchar(50) NOT NULL,
  `tongtien` int(10) NOT NULL,
  `bill_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới 1.Đang chờ 2.Đang giao hàng 3.Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `pttt`, `ngaydathang`, `tongtien`, `bill_status`) VALUES
(1, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:44:58am 28/05/2024', 248, 0),
(2, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:47:55am 28/05/2024', 248, 0),
(3, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:49:32am 28/05/2024', 368, 0),
(4, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:50:51am 28/05/2024', 418, 0),
(5, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:53:54am 28/05/2024', 418, 0),
(6, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:54:10am 28/05/2024', 418, 0),
(7, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:55:31am 28/05/2024', 99, 0),
(8, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:57:35am 28/05/2024', 0, 0),
(9, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 0, '10:58:01am 28/05/2024', 50, 0),
(10, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 0, '10:58:32am 28/05/2024', 0, 0),
(11, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '10:58:48am 28/05/2024', 90, 0),
(12, 0, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 3, '10:59:01am 28/05/2024', 100, 0),
(13, 1, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '03:59:03pm 29/05/2024', 198, 0),
(14, 1, 'vanthinh', 'thanh hoa', '0377999777', 'pvthinh@gmail.com', 1, '03:59:32pm 29/05/2024', 100, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `image`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 1),
(2, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 1),
(3, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 1),
(4, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 2),
(5, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 2),
(6, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 2),
(7, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 3),
(8, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 3),
(9, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 3),
(10, 1, 14, 'upload/laptop.jpg', 'laptop', 120, 1, 120, 3),
(11, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 4),
(12, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 4),
(13, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 4),
(14, 1, 14, 'upload/laptop.jpg', 'laptop', 120, 1, 120, 4),
(15, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 4),
(16, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 5),
(17, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 5),
(18, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 5),
(19, 1, 14, 'upload/laptop.jpg', 'laptop', 120, 1, 120, 5),
(20, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 5),
(21, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 6),
(22, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 6),
(23, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 6),
(24, 1, 14, 'upload/laptop.jpg', 'laptop', 120, 1, 120, 6),
(25, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 6),
(26, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 7),
(27, 1, 19, 'upload/mu.jpg', 'mũ', 50, 1, 50, 9),
(28, 1, 18, 'upload/dienthoai.jpg', 'dienthoai', 90, 1, 90, 11),
(29, 1, 15, 'upload/vali.jpg', 'vali', 100, 1, 100, 12),
(30, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 13),
(31, 1, 21, 'upload/dongho4.jpg', 'đồng hòo 4', 99, 1, 99, 13),
(32, 1, 15, 'upload/vali.jpg', 'vali', 100, 1, 100, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(17, 'phamvanthinh'),
(20, 'đồng hồ'),
(21, 'laptop'),
(22, 'điện thoại'),
(23, 'mũ'),
(24, 'vali');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `noidung`, `iduser`, `idpro`, `date`) VALUES
(5, 'hello', 1, 20, '10:13:38am 24/05/2024'),
(6, 'sản phẩm tốt', 1, 20, '10:13:44am 24/05/2024'),
(7, 'laptop rất tốt', 1, 14, '04:42:53pm 27/05/2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'vanthinh', '123456', 'pvthinh@gmail.com', 'thanh hoa', '0377999777', 1),
(3, 'hello', '123', 'tttt@gmail.com', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `image` varchar(255) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `idcatalog` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `mota`, `view`, `idcatalog`) VALUES
(13, 'Đồng hồ', 100.00, 'dongho3.jpg', 'dong ho', 20, 22),
(14, 'laptop', 120.00, 'laptop.jpg', 'laptop', 10, 21),
(15, 'vali', 100.00, 'vali.jpg', 'vali', 0, 17),
(16, 'rulex', 150.00, 'dongho2.jpg', 'dong ho rulex', 0, 20),
(17, 'dongho new', 100.00, 'dongho.jpg', 'ok', 0, 17),
(18, 'dienthoai', 90.00, 'dienthoai.jpg', 'dienthoai', 120, 17),
(19, 'mũ', 50.00, 'mu.jpg', 'mũ', 0, 17),
(20, 'dienthoai2', 120.00, 'dienthoai2.jpg', 'ddeienj thoại2', 150, 21),
(21, 'đồng hòo 4', 99.00, 'dongho4.jpg', 'đồng hồ 4', 10, 17),
(22, 'vanthinh', 10000.00, '', 'kh', 0, 21),
(23, 'dsax', 123.00, '', 'kkk', 0, 23);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`iduser`),
  ADD KEY `product` (`idpro`),
  ADD KEY `bill` (`idbill`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link_catalog_product` (`idcatalog`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `product` FOREIGN KEY (`idpro`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `user` FOREIGN KEY (`iduser`) REFERENCES `dangky` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `link_catalog_product` FOREIGN KEY (`idcatalog`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
