-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2020 lúc 06:06 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nien_luan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `idtv` int(11) NOT NULL,
  `idma` int(11) NOT NULL,
  `binhluan` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `idtv`, `idma`, `binhluan`) VALUES
(1, 2, 9, 'gfrfghdfh'),
(2, 3, 9, 'hay lam'),
(3, 2, 9, 'món này ngon lam mọi nguoi hay thu lam nó cho gia dinh minh đi'),
(5, 4, 9, 'rất ngon');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `id` int(11) NOT NULL,
  `tenmonan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `nguyenlieu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id`, `tenmonan`, `video`, `hinhanh`, `mota`, `nguyenlieu`) VALUES
(9, 'Canh Khổ Qua', 'Bạn đã biết nấu khổ qua nhồi thịt ngon ngọt không đắng chưa-.mp4', 'canh kho qua.jpg', 'Canh khổ qua dồn thịt món kinh điển của người miền Nam! cũng nhờ có món này mà mình ăn được mướp đắng và ngày càng trở nên ghiền cái vị đắng', 'mướp đắng, thịt heo, củ hành tây, hành lá, đường, tiêu, nước mắm'),
(10, 'Canh Xương Hầm', 'Cách nấu canh xương khoai tây món ngon mùa đông ấm áp!.mp4', 'canh xuong ham.jpg', 'Canh xương heo hầm rau củ là một món ăn đầy màu sắc với sự kết hợp của nhiều loại củ quả khác nhau. Nhờ vào sự đa dạng về nguyên liệu, món ăn này không chỉ ngon mà còn cung cấp nhiều chất dinh dưỡng cho cơ thể. Cùng bắt tay vào làm thôi nào.', 'Xương heo, Củ dền, Su su, Cà rốt, khoai tây, Hành lá, Ngò, bột nêm, muối, bột ngọt.'),
(11, 'CANH CHUA ', 'Cách Nấu Món Cá Nấu Canh Chua Thơm Ngon Dân Dã - Góc Bếp Nhỏ.mp4', 'canh-chua-ca-dieu-hong.jpg', 'là món vô cùng thanh mát, dễ ăn, đặc biệt có sức hấp dẫn trong những bữa cơm ngày có nắng. Những tô canh có hương vị chua đặc trưng, thêm vị ngọt tự nhiên từ cá hoặc thịt, xương... ăn rất đưa cơm và luôn là món ăn không bao giờ lo “ế”.', 'cá lóc, đậu bắp, cà chua, me chua, bạc hà, giá, hành tím, tỏi, ớt , muối và hạt nêm, đường, Rau thơm, ngò gai'),
(12, 'CÁ KHO', 'Cách KHO CÁ ngon đẹp và dễ dàng nhất, Cá ba sa Kho - Món Ăn Ngon.mp4', 'cá kho.jpeg', 'Kho cá không hề khó, nhưng cách kho cá ngon với hương vị đậm đà, không bị tanh, màu sắc đẹp thì cần có bí quyết riêng. Bếp Eva sẽ hướng dẫn bạn làm món này ngay tại nhà mà lại cực đơn giản', 'Cá, mắm, muối, bột canh, hạt nêm, nước hàng, xì dầu, ớt'),
(13, 'CÁ CHIÊN', 'Cách chiên cá vàng ,giòn không dính chảo ❤Cá chẻm chiên giòn chấm mắm chua ngọt đơn giản ngon cơm.mp4', 'cá chien.jpg', 'Nếu bạn là fan của các món chiên rán ngập dầu thì không thể bỏ qua cá chiên xù được. Lớp vỏ vàng giòn rụm cùng với thịt trắng ngon mềm, chấm thêm miếng tương cay cay khiến các thành viên trong gia đình thích mê cho mà xem. Hãy cùng tìm hiểu cách làm món cá chiên xù mềm bên trong giòn bên ngoài nhé!', 'Cá, dầu ăn, muối, tiêu, đường, tỏi, tương ớt, tương cà'),
(14, 'THỊT HEO CHIÊN NƯỚC MẮN', 'thit heo chien.mp4', 'thịt heo chien nuoc man.jpg', 'Không phải đơn giản mà thịt heo chiên giòn là món luôn thu hút nhiều người. Miếng thịt heo giòn rụm với lớp da vàng vô cùng đẹp mắt, phần thịt heo mềm ngọt, mặn mà vị nước mắm. Đây nhất định là một món “rất tốn cơm”. Bí quyết làm sao để sau khi chiên với nước mắm, miếng thịt vẫn giòn mà không bị dai thì không phải ai cũng biết. Vì vậy, bạn nên tham khảo ngay công thức dưới đây.', 'thịt ba chỉ, củ hành tím, tỏi, gừng, ớt, bột chiên giòn, bột gạo, hạt nêm, đường, nước mắm, muối'),
(15, 'ĐẬU SÀO', 'ĐẬU CÔ VE XÀO - Bí quyết xào đậu ve xanh, giòn - Bếp Của Vợ.mp4', 'đậu xào.jpg', 'Món đậu đũa xào thịt băm có màu xanh mát mắt, thơm giòn sẽ gúp bữa cơm gia đình thêm hấp dẫn', 'đậu đũa, Thịt, tỏi, muối, bột nêm, tiêu, nước mắm, Dầu ăn'),
(16, 'GÀ CHIÊN NƯỚC MẮN', 'Cách làm cánh gà chiên nước mắm thơm vàng giòn mà thịt không bị khô.mp4', 'canh-ga-chien-nuoc-mam.jpg', 'Vị mặn thơm của nước mắm, quyện với tỏi băm và bám đều vào miếng cánh gà khiến cho bất cứ ai khi nhìn thấy món ăn này cũng khó có thể cầm lòng', 'Gà, Đường,  Nước mắm, Tỏi'),
(17, 'BÚN ĐẬU MẤN TÔM', 'Món Ăn Ngon - BÚN ĐẬU MẮM TÔM lâu lâu ăn là ghiền.mp4', 'cach-lam-bun-dau-mam-tom.jpg', 'Món bún đậu mắm tôm tuy có nhiều thành phần nguyên liệu nhưng lại vô cùng dễ làm và là món ăn kết nối gia đình vào dịp cuối tuần thật thú vị, chúng ta hãy cùng vào bếp và làm ngay thôi', 'Đậu hũ chiên, Thịt ba chỉ,  Chả cốm, Bún tươi, Mắm tôm, Ớt,  Nước cốt chanh, Đường,  Bột ngọt,  Dầu ăn, Tía tô, rau thơm các loại, Dưa leo '),
(18, 'BÚN NƯỚC LÈO', 'Cách nấu BÚN NƯỚC LÈO đặc sản Miền Tây - Trà Vinh - Tigon luu.mp4', 'bun nước lèo .jpg', 'Món bún nước lèo luôn được các “tín đồ” ẩm thực bầu chọn vào danh sách những món ăn đặc sản miền Tây đáng thưởng thức nhất. Không nhiều người biết rằng đây là món ăn xuất xứ từ người Khmer, trong quá trình giao thoa ẩm thực, bún nước lèo trở thành một đặc sản của người Việt và rất nổi tiếng tại nhiều địa phương với cách chế biến đa dạng, thú vị. ', 'mắm cá sặc, mắm cá linh, cá , tôm, thịt heo quay, củ ngải bún, sả, dừa tươi, Bún tươi, Rau muống, bắp chuối, rau thơm, bông súng, Hạt nêm, đường, chanh và ớt'),
(19, 'PHỞ BÒ', 'PHỞ BÒ - Cách nấu phở đơn giản đúng vị tại nhà - Bếp Của Vợ.mp4', 'phở bò .png', 'là món ăn phổ biến khắp các vùng miền với công thức chế biến khác nhau, nổi tiếng ngon nhất là ở Hà Nội và Nam Định. Hãy tham khảo ngay cách nấu phở bò gia truyền dưới đây để cả gia đình cùng thưởng thức hương vị thơm ngon đậm đà vừa đơn giản mà lại tiết kiệm. ', 'Thịt bòm, Xương bò, Hành tây,ngò gai, Mía, Bánh phở, Bột ngọt, mắm, muối, đường, tiêu, dầu ăn, tương ớt, tương đen, quế khô, hoa hồi, thảo quả, gừng tươi, hành tím, hạt mùi, rau thơm, giá, ớt sừng, chanh, rau mùi, hành lá'),
(20, 'CƠM CHIÊM DƯƠNG CHÂU', 'CƠM CHIÊN DƯƠNG CHÂU - Cách chiên cơm đơn giản thơm ngon - Bếp Của Vợ.mp4', 'com-chien-duong-chau.jpg', 'Thật dễ để nhận ra rằng cơm chiên Dương Châu luôn hấp dẫn với màu sắc bắt mắt đến từ các loại nguyên liệu. Những nguyên liệu này không chỉ đơn thuần tạo sự lôi cuốn mà nó còn thể hiện sự tương quan của âm dương ngũ hành. Do đó, cơm chiên Dương Châu vừa tạo được vị hài hòa, ngon miệng vừa đảm bảo được sự quân bình âm dương trong cơ thể', 'Cơm trắng, trứng gà, Thịt xá xíu, Lạp xưởng, Tôm khô, Đậu Hà Lan, Cà rốt, Tỏi, hành lá, ngò rí, Dầu đều, dầu ăn, nước tương, hạt nêm, đường, muối'),
(21, 'LẨU THÁI', 'Món Ăn Ngon - LẨU THÁI HẢI SẢN chua cay thơm ngon đơn giản nhất.mp4', 'lau-thai-chay.jpg', 'Vị ngọt từ xương cùng các loại hải sản rất hợp với vị cay nồng của sả, ớt và vị chua khiến món lẩu Thái chua cay tuy nhiều chất đạm mà không khiến bạn đầy bụng, ăn tuy no mà không ngán', 'Xương ống, Tôm, mực, ngao, Nấm rơm, rau muống, bắp chuối, mì/bún, - Riềng, Sả, Chanh, Lá chanh, Vị lẩu Thái, Đường, Hạt nêm, Nước mắm, Sa tế'),
(23, 'thịt kho trứng', 'thit_kho.mp4', 'thịt kho.jpeg', 'Thịt kho trứng không phải là món ăn xa lạ gì đối với mỗi người. Chúng thường xuyên xuất hiện trong bữa cơm gia đình. Vậy cách chế biến như thế nào hay bí quyết nằm ở đâu để có được món thịt kho trứng ngon nhất', 'Thịt ba chỉ, Trứng chim cút, Nước màu, Hành khô, ớt , Nước mắm, đường, muối, hạt tiêu, nước dừa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `vaitro` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `ten`, `matkhau`, `vaitro`) VALUES
(2, 'dang ', '111', 'nguoidung'),
(3, 'nhat hao', '222', 'nguoidung'),
(4, 'Admin', '113', 'admin'),
(5, 'nguoidung1', '55555', 'nguoidung'),
(9, 'dang ', '123', 'nguoidung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int(11) NOT NULL,
  `vai_tro` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
