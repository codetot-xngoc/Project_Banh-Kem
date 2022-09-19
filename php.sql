-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2022 lúc 03:03 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

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
(1, 0, 49999, 1),
(2, 50000, 100000, 1),
(3, 100000, 500000, 1),
(4, 500000, 1000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tennews` varchar(250) NOT NULL,
  `anhnews` tinytext NOT NULL,
  `motanews` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `tennews`, `anhnews`, `motanews`) VALUES
(1, 'Ngay đầu năm đã \"ba máu sáu cơn\" vì chiếc bánh kem \"treo đầu dê - bán thịt chó\", viết chữ xấu đau đớn nhìn là mất vui!', 'images/news1.jpg', 'Người ta thường nói \"đầu xuôi đuôi lọt\", đặc biệt là trong những ngày đầu năm thế này, ai cũng muốn mọi việc mình làm đều thuận lợi, trơn tru để \"mở hàng\" cho một năm phát đạt.'),
(2, 'Đặt bánh kem chú hà mã nhỏ bé, thanh niên được chủ tiệm vẽ tặng thêm 1 thứ nhìn xong muốn \"gục ngã\"', 'images/news2.jpg', 'Hên xui không kém mua hàng qua mạng chính là order bánh kem. Bất chấp việc bạn đã dành bao nhiêu tâm huyết để tìm mẫu bánh thật xinh xắn, dồn bao nhiêu mong đợi để có 1 ngày lễ đặc biệt thì kết quả'),
(3, 'Không sợ tăng cân khi ăn bánh trung thu ít đường', 'images/news3.jpg', 'Một năm chỉ có mùa trung thu nên việc thèm ăn cũng như tâm lý ăn nhiều bị tăng cân sẽ là một trở ngại lớn nhất. Tuy nhiên, việc chọn loại bánh ít đường cũng như các loại bánh hoàn toàn từ đườn'),
(4, 'Hướng dẫn 3 cách làm bánh trung thu MoChi dẻo dẻo thơm thơm', 'images/news4.jpg', 'Bánh trung thu mochi không nướng từ Nhật Bản là một biến thể của công thức làm bánh mochi để duy trì hương vị mềm, dai của thành phẩm ngay cả sau khi để trong tủ lạnh. Bánh có hương vị đậm đà và');

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
  `trangthaisp` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `THid`, `tensp`, `anhsp`, `giasp`, `mota`, `trangthaisp`) VALUES
(1, 3, 'Bánh Đám Cưới', 'banhdamcuoi.jpg', 1200000, '<section class=\"container\">\n	<p class=\"col-10\" style=\"text-align:center;margin: auto;\">Chiếc bánh tiramisu chính là hiện thân của chiếc bánh kem hiện đại, lại vừa đơn giản lại vừa ngon mà bạn có thể tự làm ở nhà của mình. Với nguyên liệu làm bánh chính là những quả trứng gà tươi ngon, những hộp sữa tươi cùng những vị ngon của đường, vani,... để tạo nên chiếc bánh kem tiramisu ngon đúng vị. Bánh tiramisu được làm nên nhờ những vị rất gần gũi và thân quen với tất cả mọi người, nó được tạo ra để tránh được khâu nướng bánh khi nhà bạn không có lò nướng.</p>\n</section>', 1),
(3, 1, 'Banh Ngot size vua', 'banhngot2.jpg', 100000, '<section class=\"container\">\n	<p class=\"col-10\" style=\"text-align:center;margin: auto;\">Một bộ sưu tập bánh kem búp bê đẹp nhất với những màu sắc và hình ảnh của các cô công chúa nổi tiếng và xinh đẹp. Được dành riêng cho các cô công chúa nhỏ nhà bạn với những mẫu bánh sinh nhật được làm một cách công phu và tỉ mỉ nhất để gửi đến các cô công chúa một ngày sinh nhật thật ý nghĩa và trọn vẹn.</p>\n</section>', 1),
(4, 1, 'Banh Ngot size To', 'banhngot3.jpg', 150000, '<section class=\"container\">\n	<p class=\"col-10\" style=\"text-align:center;margin: auto;\">Mỗi cô vợ luôn là bông hoa xinh đẹp nhất trong mắt người chồng. Mẫu bánh sinh nhật tặng vợ yêu hình những đóa hồng xinh xắn sẽ giúp chồng truyền đạt thông điệp ấy đến vợ yêu đấy. Chính những món quà lãng mạn này sẽ giúp vợ cảm nhận được tình yêu thương của chồng, giúp tình cảm vợ chồng thêm mặn nồng hơn đấy.</p>\n</section>', 1),
(5, 3, 'Banh Kem VIP', 'banhsieuto.jpg', 2000000, '<section class=\"container\">\n	<p class=\"col-10\" style=\"text-align:center;margin: auto;\">Những chiếc bánh kem cưới 3 tầng, bánh kem cưới 2 tầng đẹp, ý nghĩa sẽ là món quà tuyệt vời cho bạn và người ấy trong ngày đặc biệt này. Những tình cảm, những lời yêu thương cảu 2 bạn  sẽ được chiếc bánh của chúng tôi thể hiện một cách tinh tế và ấn tượng!!</p>\n</section>', 1),
(7, 2, 'Banh Sinh Nhat Dau Tay', 'banhsn.jpg', 275000, 'banh sinh nhat vi dau thom ngon. Voi nhung lat dau tuoi phu ben tren banh ', 1),
(8, 2, 'Banh Sinh Nhat ', 'banhsn2.jpg', 275000, 'banh sinh nhat trangg tri dep mat', 1),
(9, 2, 'Banh Sinh Nhat socola', 'banhsinhnhat3.jpg', 300000, 'banh sinh nhat vi socola', 1);

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
(2, 'Banh sinh Nhat', 1),
(3, 'Banh VIP', 1),
(12, 'ngu hiep', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `mobile` varchar(12) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` varchar(120) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `mobile`, `email`, `address`, `status`) VALUES
(1, 'abcd', 'e10adc3949ba59abbe56e057f20f883e', 'AB CD', '0987654321', 'abcd@gmail.com', 'Hà Nội', 1),
(3, 'ngocht', '81dc9bdb52d04dc20036dbd8313ed055', 'Ngoc', '0123456789', 'Ngoc@gmail.com', 'Hà Nội', 0),
(6, 'tunght', '202cb962ac59075b964b07152d234b70', 'TUNG', '99999', 'tunght@email.com', 'Ha Noi', 0),
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
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
