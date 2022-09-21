-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 21, 2022 lúc 08:26 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `tendn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mk` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`tendn`, `mk`, `trangthai`) VALUES
('ngocadmin', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banggia`
--

CREATE TABLE `banggia` (
  `id` int(11) NOT NULL,
  `fromGia` int(11) NOT NULL,
  `toGia` int(11) NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banggia`
--

INSERT INTO `banggia` (`id`, `fromGia`, `toGia`, `trangthai`) VALUES
(1, 0, 50000, 1),
(2, 50000, 100000, 1),
(3, 100000, 500000, 1),
(4, 500000, 1000000, 1),
(5, 1000000, 3000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `iddonhang` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `Soluong` tinyint(4) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`iddonhang`, `idsp`, `Soluong`, `gia`) VALUES
(3, 5, 1, 2000000),
(3, 1, 2, 1200000),
(6, 7, 1, 275000),
(7, 1, 1, 1200000),
(7, 9, 1, 300000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `idthanhtoan` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:chưa xử lý; 2:đang xử lý; 3:đã xử lý; 4:hủy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `userid`, `idthanhtoan`, `date`, `trangthai`) VALUES
(1, 1, 2, '2022-09-19 21:44:23', 1),
(2, 1, 2, '2022-09-19 21:46:48', 1),
(3, 1, 2, '2022-09-19 21:47:10', 1),
(4, 6, 3, '2022-09-19 21:53:33', 1),
(5, 6, 3, '2022-09-19 21:54:13', 1),
(6, 6, 3, '2022-09-19 21:54:41', 1),
(7, 6, 1, '2022-09-19 21:56:34', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthuctt`
--

CREATE TABLE `phuongthuctt` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthuctt`
--

INSERT INTO `phuongthuctt` (`id`, `ten`, `trangthai`) VALUES
(1, 'Thanh Toán Cho Người Giao Hàng', 1),
(2, 'Thanh Toán Tại Cửa Hàng', 1),
(3, 'Chuyển Khoản', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `THid` int(11) NOT NULL,
  `tensp` varchar(30) CHARACTER SET utf8 NOT NULL,
  `anhsp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `mota` longtext CHARACTER SET utf8 NOT NULL,
  `view` int(11) NOT NULL,
  `trangthaisp` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `THid`, `tensp`, `anhsp`, `giasp`, `mota`, `view`, `trangthaisp`) VALUES
(1, 3, 'Bánh Đám Cưới', 'banhdamcuoi.jpg', 1200000, '<section class=\"container\">\n	<p class=\"col-10\" style=\"text-align:center;margin: auto;\">Chiếc bánh tiramisu chính là hiện thân của chiếc bánh kem hiện đại, lại vừa đơn giản lại vừa ngon mà bạn có thể tự làm ở nhà của mình. Với nguyên liệu làm bánh chính là những quả trứng gà tươi ngon, những hộp sữa tươi cùng những vị ngon của đường, vani,... để tạo nên chiếc bánh kem tiramisu ngon đúng vị. Bánh tiramisu được làm nên nhờ những vị rất gần gũi và thân quen với tất cả mọi người, nó được tạo ra để tránh được khâu nướng bánh khi nhà bạn không có lò nướng.</p>\n</section>', 0, 1),
(2, 1, 'Banh Ngot Mini', 'banhngot.jpg', 50000, 'banh ngot loai nho voi kich thuoc 6cm-7cm day du cac vi', 0, 1),
(3, 1, 'Banh Ngot size vua', 'banhngot2.jpg', 100000, '<section class=\"container\">\n	<p class=\"col-10\" style=\"text-align:center;margin: auto;\">Một bộ sưu tập bánh kem búp bê đẹp nhất với những màu sắc và hình ảnh của các cô công chúa nổi tiếng và xinh đẹp. Được dành riêng cho các cô công chúa nhỏ nhà bạn với những mẫu bánh sinh nhật được làm một cách công phu và tỉ mỉ nhất để gửi đến các cô công chúa một ngày sinh nhật thật ý nghĩa và trọn vẹn.</p>\n</section>', 0, 1),
(4, 1, 'Banh Ngot size To', 'banhngot3.jpg', 150000, '<section class=\"container\">\n	<p class=\"col-10\" style=\"text-align:center;margin: auto;\">Mỗi cô vợ luôn là bông hoa xinh đẹp nhất trong mắt người chồng. Mẫu bánh sinh nhật tặng vợ yêu hình những đóa hồng xinh xắn sẽ giúp chồng truyền đạt thông điệp ấy đến vợ yêu đấy. Chính những món quà lãng mạn này sẽ giúp vợ cảm nhận được tình yêu thương của chồng, giúp tình cảm vợ chồng thêm mặn nồng hơn đấy.</p>\n</section>', 0, 1),
(5, 3, 'Banh Kem VIP', 'banhsieuto.jpg', 2000000, '<section class=\"container\">\n	<p class=\"col-10\" style=\"text-align:center;margin: auto;\">Những chiếc bánh kem cưới 3 tầng, bánh kem cưới 2 tầng đẹp, ý nghĩa sẽ là món quà tuyệt vời cho bạn và người ấy trong ngày đặc biệt này. Những tình cảm, những lời yêu thương cảu 2 bạn  sẽ được chiếc bánh của chúng tôi thể hiện một cách tinh tế và ấn tượng!!</p>\n</section>', 0, 1),
(7, 2, 'Banh Sinh Nhat Dau Tay', 'banhsn.jpg', 275000, 'banh sinh nhat vi dau thom ngon. Voi nhung lat dau tuoi phu ben tren banh ', 0, 1),
(8, 2, 'Banh Sinh Nhat ', 'banhsn2.jpg', 275000, 'banh sinh nhat trangg tri dep mat', 0, 1),
(9, 2, 'Banh Sinh Nhat socola', 'banhsinhnhat3.jpg', 300000, 'banh sinh nhat vi socola', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `name`, `trangthai`) VALUES
(1, 'Banh Ngot', 1),
(2, 'Banh Sinh Nhat', 1),
(3, 'Banh VIP', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `mobie` varchar(12) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` varchar(120) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `mobie`, `email`, `address`, `status`) VALUES
(1, 'abcd', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Xuân Ngọc', '0987654321', 'abcd@gmail.com', 'Hà Nội', 1),
(2, 'abcd1', 'e10adc3949ba59abbe56e057f20f883e', 'ABCDE', '0123456789', 'abcd1@gmail.com', 'HCM', 0),
(3, 'ngocht', '81dc9bdb52d04dc20036dbd8313ed055', 'Ngoc', '0123456789', 'Ngoc@gmail.com', 'Hà Nội', 0),
(6, 'tunght', '202cb962ac59075b964b07152d234b70', 'tùng ngu', '039966887755', 'tunght@email.com', 'Hà Nội', 0),
(7, 'haiht', 'e10adc3949ba59abbe56e057f20f883e', 'Hai', '123456789', 'Hai@gmail.com', 'Hà Nội', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`tendn`);

--
-- Chỉ mục cho bảng `banggia`
--
ALTER TABLE `banggia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phuongthuctt`
--
ALTER TABLE `phuongthuctt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banggia`
--
ALTER TABLE `banggia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phuongthuctt`
--
ALTER TABLE `phuongthuctt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
