-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 01:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1_hl`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(225) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'đẹp', 2, 4, '2023-11-11'),
(5, 'areh', 2, 8, '2023-11-25'),
(8, 'đẹp', 2, 5, '2023-11-26'),
(9, 'xinh', 2, 8, '2023-11-26'),
(21, 'dẹp cá', 15, 26, '2023-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `iddonhang` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `giamoi` int(11) NOT NULL,
  `size` varchar(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ctdonhang`
--

INSERT INTO `ctdonhang` (`id`, `iduser`, `iddonhang`, `idsp`, `img`, `name`, `giamoi`, `size`, `soluong`, `tt`) VALUES
(52, 1, 101, 41, 'upload/trang phục hip hop cho bé trai bé gái 4-16 tuổi.jpg', 'Trang phục hip hop', 460000, 'S', 1, 460000),
(53, 2, 102, 41, 'upload/trang phục hip hop cho bé trai bé gái 4-16 tuổi.jpg', 'Trang phục hip hop', 460000, 'S', 1, 460000),
(54, 2, 103, 41, 'upload/trang phục hip hop cho bé trai bé gái 4-16 tuổi.jpg', 'Trang phục hip hop', 460000, 'M', 1, 460000),
(55, 2, 104, 41, 'upload/trang phục hip hop cho bé trai bé gái 4-16 tuổi.jpg', 'Trang phục hip hop', 460000, 'S', 1, 460000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Thời Trang Nam'),
(2, 'Thời Trang Nữ'),
(3, 'Thời Trang Trẻ Em');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `iduser` int(11) DEFAULT 0,
  `user` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pttt` varchar(255) NOT NULL DEFAULT '1' COMMENT '1. Thanh toán khi nhận được hàng',
  `tongtien` int(11) NOT NULL,
  `ngaydat` date DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1. Đang xử lý\r\n2. Đang giao hàng\r\n3. Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `iduser`, `user`, `address`, `tel`, `email`, `pttt`, `tongtien`, `ngaydat`, `trangthai`) VALUES
(101, 1, 'admin', 'Ninh Bình', '0987257023', 'linhlinh26052004@gmail.com', '1', 460000, '2023-12-10', 0),
(102, 2, 'linh2004', 'Ninh Bình', '0987254753', 'linh@gamil.com', '1', 460000, '2023-12-10', 2),
(103, 2, 'linh2004', 'Ninh Bình', '0987254753', 'linh@gamil.com', '1', 460000, '2023-12-10', 0),
(104, 2, 'linh2004', 'Ninh Bình', '0987254753', 'linh@gamil.com', '1', 460000, '2023-12-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `giacu` double(10,2) NOT NULL DEFAULT 0.00,
  `giamoi` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(225) NOT NULL,
  `mota` text NOT NULL,
  `motadai` varchar(1000) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `giacu`, `giamoi`, `img`, `mota`, `motadai`, `luotxem`, `iddm`) VALUES
(4, 'Đồ bộ sang chảnh cho bé', 300000.00, 250000.00, 'tải xuống (5).jpg', 'Đồ Trẻ Em Đồ Bộ Đồ Cotton Mẫu Mỏng Mùa Hè Trẻ Em Cotton\r\n', 'Quần áo trẻ em thanh lịch\r\nGiá rẻ\r\nChất lượng tốt\r\nMát mẻ\r\nXuất xứ quảng châu\r\nHàng thanh lý bán nốt giá rẻ', 0, 3),
(5, 'Váy nữ chất liệu cotton', 300000.00, 250000.00, 'ảnh 4.jpg', 'Kiểu dáng loose fit\r\nChất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn', 'Chất liệu cao cấp, tạo cảm giác thoải mái khi mặc Tôn được vóc dáng của phái đẹp Dễ dàng phối đồ với nhiều phong cách\r\nSet Quần Áo Nữ Thời Trang Cao Cấp sẽ là sự lựa chọn hoàn hảo cho bạn trong mùa hè này.\r\nVới thiết kế kiểu đồ âu nhưng vô cùng thoải mái sẽ mang lại sự nữ tính và năng động cho bạn, bạn có thể mặc đi chơi, đi làm hay đi dự tiệc, đi du lịch đều được.\r\nVì thế ngày hôm nay mình sẽ giới thiệu đến các bạn nữ set áo phối quần thời trang mới đẹp hè này và hứa hẹn sẽ là một sự lựa chọn hợp lý, hoàn hảo cho các nàng.\r\nSet đồ mang phong cách nữ tính nhưng lại sành điệu phá cách cho các bạn trẻ yêu thích thời trang.\r\nSet đồ có thể phối cùng với giày cao gót, túi xá khi đi làm, đi chơi với gia đình bạn bè hay là hẹn hò với người yêu.', 0, 2),
(6, 'Váy baby cho bé', 900000.00, 700000.00, 'anh3.jpg', 'Đồ Trẻ Em Mùa Hè Bộ Đồ Cotton Mẫu Mỏng Mùa Hè Trẻ Em Cotton\r\n', 'Quần áo trẻ em thanh lịch\r\nGiá rẻ\r\nChất lượng tốt\r\nMát mẻ\r\nXuất xứ quảng châu\r\nHàng thanh lý bán nốt giá rẻ', 0, 3),
(7, 'Áo sơ mi nam', 500000.00, 450000.00, 'ảnh nam 1.jpg', 'Chất liệu cotton mềm mại thoáng mát', 'Thiết kế dáng rộng có mang lại vẻ ngoài và cảm giác thoải mái.\r\nChất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.\r\nKiểu dáng loose fit\r\nSản phẩm có thể giặt máy\r\nChất liệu: 100% cotton', 0, 1),
(8, 'Đầm xinh ', 200000.00, 150000.00, 'anh1.jpg', 'Chất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn\r\n', 'Chất liệu cao cấp, tạo cảm giác thoải mái khi mặc Tôn được vóc dáng của phái đẹp Dễ dàng phối đồ với nhiều phong cách\r\nSet Quần Áo Nữ Thời Trang Cao Cấp sẽ là sự lựa chọn hoàn hảo cho bạn trong mùa hè này.\r\nVới thiết kế kiểu đồ âu nhưng vô cùng thoải mái sẽ mang lại sự nữ tính và năng động cho bạn, bạn có thể mặc đi chơi, đi làm hay đi dự tiệc, đi du lịch đều được.\r\nVì thế ngày hôm nay mình sẽ giới thiệu đến các bạn nữ set áo phối quần thời trang mới đẹp hè này và hứa hẹn sẽ là một sự lựa chọn hợp lý, hoàn hảo cho các nàng.\r\nSet đồ mang phong cách nữ tính nhưng lại sành điệu phá cách cho các bạn trẻ yêu thích thời trang.\r\nSet đồ có thể phối cùng với giày cao gót, túi xá khi đi làm, đi chơi với gia đình bạn bè hay là hẹn hò với người yêu.', 0, 2),
(21, 'Đầm xinh bé gái', 300000.00, 250000.00, 'tải xuống (3).jpg', 'Chất liệu mềm mại', 'Quần áo trẻ em thanh lịch\r\nGiá rẻ\r\nChất lượng tốt\r\nMát mẻ\r\nXuất xứ quảng châu\r\nHàng thanh lý bán nốt giá rẻ', 0, 3),
(22, 'Vest nam', 400000.00, 300000.00, 'images (4).jpg', 'Chất vải cotton thấm hút mồ hôi', 'Thiết kế dáng rộng có mang lại vẻ ngoài và cảm giác thoải mái.\r\nChất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.\r\nKiểu dáng loose fit\r\nSản phẩm có thể giặt máy\r\nChất liệu: 100% cotton', 0, 1),
(23, 'Sét bạc nữ', 400000.00, 350000.00, 'fs2305051dxwobk.jpg', 'Chất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.', 'Chất liệu cao cấp, tạo cảm giác thoải mái khi mặc Tôn được vóc dáng của phái đẹp Dễ dàng phối đồ với nhiều phong cách\r\nSet Quần Áo Nữ Thời Trang Cao Cấp sẽ là sự lựa chọn hoàn hảo cho bạn trong mùa hè này.\r\nVới thiết kế kiểu đồ âu nhưng vô cùng thoải mái sẽ mang lại sự nữ tính và năng động cho bạn, bạn có thể mặc đi chơi, đi làm hay đi dự tiệc, đi du lịch đều được.\r\nVì thế ngày hôm nay mình sẽ giới thiệu đến các bạn nữ set áo phối quần thời trang mới đẹp hè này và hứa hẹn sẽ là một sự lựa chọn hợp lý, hoàn hảo cho các nàng.\r\nSet đồ mang phong cách nữ tính nhưng lại sành điệu phá cách cho các bạn trẻ yêu thích thời trang.\r\nSet đồ có thể phối cùng với giày cao gót, túi xá khi đi làm, đi chơi với gia đình bạn bè hay là hẹn hò với người yêu.', 0, 2),
(25, 'Đầm thiết kế dành cho nữ', 500000.00, 400000.00, 'ảnh 2.jpg', 'Chất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.', 'Chất liệu cao cấp, tạo cảm giác thoải mái khi mặc Tôn được vóc dáng của phái đẹp Dễ dàng phối đồ với nhiều phong cách\r\nSet Quần Áo Nữ Thời Trang Cao Cấp sẽ là sự lựa chọn hoàn hảo cho bạn trong mùa hè này.\r\nVới thiết kế kiểu đồ âu nhưng vô cùng thoải mái sẽ mang lại sự nữ tính và năng động cho bạn, bạn có thể mặc đi chơi, đi làm hay đi dự tiệc, đi du lịch đều được.\r\nVì thế ngày hôm nay mình sẽ giới thiệu đến các bạn nữ set áo phối quần thời trang mới đẹp hè này và hứa hẹn sẽ là một sự lựa chọn hợp lý, hoàn hảo cho các nàng.\r\nSet đồ mang phong cách nữ tính nhưng lại sành điệu phá cách cho các bạn trẻ yêu thích thời trang.\r\nSet đồ có thể phối cùng với giày cao gót, túi xá khi đi làm, đi chơi với gia đình bạn bè hay là hẹn hò với người yêu.', 0, 2),
(26, 'Áo sơ mi', 300000.00, 380000.00, 'images (8).jpg', 'Bộ thun in loang màu LAMLICK cho bé trai là sản phẩm không thể thiếu trong tủ đồ của bé yêu. Với chất liệu vải cotton co giãn nhẹ nhàng, đảm bảo sự thoải mái khi mặc và không gây kích ứng da cho bé.', 'Bộ thun in loang màu LAMLICK cho bé trai là sản phẩm không thể thiếu trong tủ đồ của bé yêu. Với chất liệu vải cotton co giãn nhẹ nhàng, đảm bảo sự thoải mái khi mặc và không gây kích ứng da cho bé.\r\n\r\nBộ sản phẩm gồm áo phông và quần short, tạo nên set đồ trẻ trung và năng động cho các chàng nhỏ.\r\nThiết kế in loang màu sắc tươi sáng,  chất liệu thun cotton mềm mịn, thấm hút mồ hôi cao.\r\nĐường may tỉ mỉ, cẩn thận từng chi tiết.\r\nVới phong cách thiết kế mới lạ,trendy,chất liệu cao cấp,bé yêu của bạn không chỉ được diện lại set quần áo mới ,đầy cá tính ,tự tin mọi khung hình.\r\n\r\nVới các dòng size: Nhí size 5 - 9. Đại size 10 - 16. Cồ size 18 - 24, bạn chỉ cần đặt hàng online tại website của chúng tôi để nhận được sản phẩm ngay trong vòng từ 1 - 3 ngày.', 0, 3),
(29, 'Bộ đồ cộc tay bé gái', 300000.00, 280000.00, 'đồ ngủ cộc tay cho bé gái.jpg', 'Đồ Trẻ Em Mùa Hè Bộ Đồ Cotton Mẫu Mỏng Mùa Hè Trẻ Em Cotton ', 'Quần áo trẻ em thanh lịch\r\nGiá rẻ\r\nChất lượng tốt\r\nMát mẻ\r\nXuất xứ quảng châu\r\nHàng thanh lý bán nốt giá rẻ\r\n\r\nLoại sản phẩm : Cả nam và nữ', 0, 3),
(30, 'Váy đầm 2 dây', 350000.00, 300000.00, 'dg021-2-1912842791-d637304094933707892.jpg', 'Đầm DG021 Màu Xanh lục', 'Xin lưu ý: Áo và quần được bán riêng!\r\nĐộ tuổi phù hợp: 4-16 tuổi\r\nChất liệu: Cotton pha. Chất liệu cotton mềm mại và co giãn, thoáng khí và mát mẻ khi mặc bộ đồ nhảy múa này.\r\nPhong cách thiết kế ---In chữ đẹp và ngầu, vui vẻ và thời trang; chi tiết cổ áo thời trang, thoải mái khi mặc và cởi ra. Hãy để con bạn mặc một kiểu thời trang khác,Rộng và thoải mái, không có cảm giác gò bó', 0, 3),
(31, 'Sơ mi nam tay dài cổ vest', 480000.00, 450000.00, 'sơ mi nam tay dài cổ vest.jpg', 'Áo sơ Mi, Áo sơ Mi Nam dài tay cổ vest chất liệu Cotton cao cấp, mát mẻ, thấm mồ hôi, không nhăn, không nhàu', 'MẪU ÁO SƠ MI nam dài thiết kế trẻ trung, thoải mái phong cách nam tính:\r\n👉 Áo sơ Mi Có thể mặc đi làm, đi chơi, Lễ, Tết với gam màu cơ bản dễ phối đồ, không kén dáng người mặc.\r\n👉 Chất liệu: Áo sơ Mi được làm từ chất liệu Vải poplin mềm, thấm hút mô hôi tốt.\r\n👉 Áo sơ mi vải cao cấp Không nhăn, không nhàu, dáng đứng form khỏe khoắn.\r\n👉 Áo sơ Mi có Chất vải đẹp, không xù lông, không phai màu.Đường may kĩ càng, cực tỉ mỉ, đep đến từng xentimet.\r\n👉 Kiểu dáng: Thiết kế theo form ôm body trẻ trung lịch lãm, với Vai phối nếp tạo thân hình rắn chắc, khỏe khoắn.\r\n👉 Áo sơ Mi hàng thiết kế riêng được sản xuất tại xưởng giá cả hơp lý không Đụng hàng.\r\n👉 Áo sơ Mi có 2 màu sắc chủ đạo là ĐEN- TRẮNG sang trọng thích hợp với mọi màu quần đi kèm.\r\n👉 Khả năng giữ form dáng tương đối tốt, không bị dão hay xô dạt trong quá trình sử dụng.', 0, 1),
(32, 'Áo tay ngắn thời trang nam Nike As Prem Essential Sust Tee', 480000.00, 400000.00, 'DO7393-386-1.webp', 'Áo thun Nike Sportswear Premium Essentials có kiểu dáng rộng rãi giúp bạn luôn cảm thấy thoải mái. Sản phẩm này được làm từ ít nhất 75% sợi cotton hữu cơ.\r\nTHÔNG SỐ', 'Thiết kế dáng rộng có phần vai trễ xuống mang lại vẻ ngoài và cảm giác thoải mái.\r\nChất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.\r\nLogo thêu phía trước tạo điểm nhấn tinh tế.\r\nKiểu dáng loose fit\r\nSản phẩm có thể giặt máy\r\nChất liệu: 100% cotton', 0, 1),
(33, 'Áo polo nam', 430000.00, 400000.00, 'M3kgxQRTkUDsNSNKQjbQzB5mrcDLsAJ35GvcR2PD.jpg', 'Áo Polo Nam 5S Fashion, Vải Viscose, Thấm Hút Mồ Hôi Tốt ', 'Áo Polo Nam 5S Fashion, Vải Viscose, Thấm Hút Mồ Hôi Tốt APC23102 là một trong những mẫu áo Polo hot hit nhờ thiết kế đơn giản, chẳng lo \"lỗi mốt\". Mẫu áo này ghi điểm bởi thiết kế trẻ trung, nam tính, cuốn hút cùng kiểu dáng Slim fit tôn dáng, dễ mặc và dễ phối đồ. Cổ - tay áo được dệt bo bền đẹp, sang trọng, mang đến diện mạo cuốn hút cho nam giới. \r\n\r\nÁo được làm từ chất liệu Viscose thoáng mát, mềm mại, mang đên trải nghiệm hoàn hảo khi mặc. Kết hợp với thành phần chất liệu Polyamide và Spandex giúp tăng độ mềm mại, co giãn cực tốt khi mặc, giúp chiếc áo mềm mượt - mát mẻ - mau khô và đặc biệt không lo nhăn nhàu suốt cả ngày.', 0, 1),
(34, 'Áo gió nam', 450000.00, 430000.00, 'ao-gio-nam-1.jpg', 'Áo gió nam đẹp siêu ấm nên có cho mùa đông năm nay', 'Thiết kế dáng rộng có mang lại vẻ ngoài và cảm giác thoải mái.\r\nChất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.\r\nKiểu dáng loose fit\r\nSản phẩm có thể giặt máy\r\nChất liệu: 100% cotton', 0, 1),
(35, 'Áo len nam', 480000.00, 460000.00, 'TE8XhOuKULgLaddv2WeIopNmE8wRkl92ToiE8DSo.jpg', 'Áo Len Nam 5S Fashion, Mềm Mịn, Chuẩn Form', 'Thiết kế dáng rộng có phần vai trễ xuống mang lại vẻ ngoài và cảm giác thoải mái.\r\nChất liệu len dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.\r\nHọa tiết kẻ phía trước tạo điểm nhấn tinh tế.\r\nKiểu dáng loose fit\r\nSản phẩm có thể giặt máy\r\nChất liệu: 100% len tăm ', 0, 1),
(36, 'Set đồ nữ', 380000.00, 350000.00, '1676707123_9c8ec993c8f225353e1210069d7339882c23dd54.jpg', 'SET BỘ ĐỒ NỮ QUẦN SHORT + ÁO NGẮN TRỄ VAI', 'Thiết kế dáng rộng có phần vai trễ xuống mang lại vẻ ngoài và cảm giác thoải mái.\r\nChất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.\r\nPhần trễ vai tạo điểm nhấn tinh tế.\r\nKiểu dáng loose fit\r\nSản phẩm có thể giặt máy\r\nChất liệu: 100% cotton', 0, 2),
(37, 'Áo khoác thu đông nữ', 500000.00, 480000.00, 'gmt30_10__2.jpg', 'Áo khoác thu đông măng tô nữ Hàn Quốc thời trang', 'Thiết kế dáng rộng có phần cổ trễ xuống mang lại vẻ ngoài và cảm giác thoải mái.\r\nKiểu dáng loose fit\r\nChất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.\r\nChất liệu: 100% cotton', 0, 2),
(38, 'Đồ bộ dáng dài ', 400000.00, 390000.00, 'bo-quan-ao-nu-phoi-mau-xinh-xan-1626238818765.png', 'Bộ Quần Áo Nữ Thời Trang Cao Cấp giá rẻ nhất tháng 12/2023', 'Chất liệu cao cấp, tạo cảm giác thoải mái khi mặc Tôn được vóc dáng của phái đẹp Dễ dàng phối đồ với nhiều phong cách\r\nSet Quần Áo Nữ Thời Trang Cao Cấp sẽ là sự lựa chọn hoàn hảo cho bạn trong mùa hè này.\r\nVới thiết kế kiểu đồ âu nhưng vô cùng thoải mái sẽ mang lại sự nữ tính và năng động cho bạn, bạn có thể mặc đi chơi, đi làm hay đi dự tiệc, đi du lịch đều được.\r\nVì thế ngày hôm nay mình sẽ giới thiệu đến các bạn nữ set áo phối quần thời trang mới đẹp hè này và hứa hẹn sẽ là một sự lựa chọn hợp lý, hoàn hảo cho các nàng.\r\nSet đồ mang phong cách nữ tính nhưng lại sành điệu phá cách cho các bạn trẻ yêu thích thời trang.\r\nSet đồ có thể phối cùng với giày cao gót, túi xá khi đi làm, đi chơi với gia đình bạn bè hay là hẹn hò với người yêu.', 0, 2),
(39, 'Đồ bộ sang chảnh nữ', 430000.00, 400000.00, 'bo-quan-ao-nu-thoi-trang-cao-cap.png', 'Bộ Quần Áo Nữ Thời Trang Cao Cấp Sang Chảnh tháng 12/2023', 'Chất liệu cao cấp, tạo cảm giác thoải mái khi mặc Tôn được vóc dáng của phái đẹp Dễ dàng phối đồ với nhiều phong cách\r\nSet Quần Áo Nữ Thời Trang Cao Cấp sẽ là sự lựa chọn hoàn hảo cho bạn trong mùa hè này.\r\nVới thiết kế kiểu đồ âu nhưng vô cùng thoải mái sẽ mang lại sự nữ tính và năng động cho bạn, bạn có thể mặc đi chơi, đi làm hay đi dự tiệc, đi du lịch đều được.\r\nVì thế ngày hôm nay mình sẽ giới thiệu đến các bạn nữ set áo phối quần thời trang mới đẹp hè này và hứa hẹn sẽ là một sự lựa chọn hợp lý, hoàn hảo cho các nàng.\r\nSet đồ mang phong cách nữ tính nhưng lại sành điệu phá cách cho các bạn trẻ yêu thích thời trang.\r\nSet đồ có thể phối cùng với giày cao gót, túi xá khi đi làm, đi chơi với gia đình bạn bè hay là hẹn hò với người yêu.', 0, 2),
(40, 'Áo Bông Khoác Nữ', 500000.00, 480000.00, '2fw22j001-xanh_2e8299370ac040dd9b7341ce9504f5c1_master.png', 'Áo Khoác Nữ 3 Lớp LIZARD Bông Nhồi, Siêu Ấm', 'Áo Khoác Nữ 3 Lớp LIZARD Bông Nhồi, Siêu Ấm - 2FW22J001\r\n\r\nMùa lạnh ùa về, áo phao là kiểu áo được nhiều cô nàng tìm mua vì vừa giữ ấm tốt lại tạo cảm giác trẻ trung, năng động\r\n\r\nÁo khoác chần bông siêu nhẹ mang đậm phong cách \"Hàn xẻng\" với 5 sắc màu đa dạng chính là lựa chọn tuyệt vời cho cô nàng ưa chuộng sự tinh gọn và thời trang \r\n\r\nThiết kế áo đơn giản, siêu nhẹ, và giữ nhiệt siêu tốt \r\nÁo phao dáng ngắn, trẻ trung và thoải mái \r\nPhần cổ áo có thể mặc cách điệu được 2 kiểu dáng\r\nMàu sắc đa dạng và tươi sáng, đem đến cho nàng nhiều lựa chọn\r\nChất liệu dày dặn, mềm mịn, giữ ấm tốt cho mùa đông', 0, 2),
(41, 'Trang phục hip hop', 490000.00, 460000.00, 'trang phục hip hop cho bé trai bé gái 4-16 tuổi.jpg', 'Trang Phục Hip Hop Cho Bé Trai Bé Gái 4-16 Tuổi Trẻ Em Thời Trang Dạo Phố Quần Áo Hiệu Suất, Màu Đen Giản Dị Mặc', 'Chiều dài tay áo: dài tay\r\n\r\n♦Chất liệu: Cotton pha\r\n\r\n♦Giới tính: Nữ/Nam\r\n\r\n♦Bao gồm:Áo hoặc quần Hoặc 2Pcs = Top + Quần\r\n\r\n♦Tình trạng: mới 100%\r\n\r\n♦Hướng dẫn chăm sóc: rửa tay bằng nước lạnh với chất tẩy nhẹ, khô phẳng, không tẩy trắng, không ủi.\r\n\r\n♦Lưu ý: Độ lệch màu có thể khác nhau do cài đặt màn hình khác nhau, vui lòng hiểu.', 0, 3),
(42, 'Đầm đi tiệc ', 500000.00, 350000.00, 'ảnh 5.jpg', 'Chất liệu cotton dày dặn có độ rủ cứng giúp outfits của bạn trông bắt mắt và đặc biệt hơn.', 'Chất liệu cao cấp, tạo cảm giác thoải mái khi mặc Tôn được vóc dáng của phái đẹp Dễ dàng phối đồ với nhiều phong cách Set Quần Áo Nữ Thời Trang Cao Cấp sẽ là sự lựa chọn hoàn hảo cho bạn trong mùa hè này. Với thiết kế kiểu đồ âu nhưng vô cùng thoải mái sẽ mang lại sự nữ tính và năng động cho bạn, bạn có thể mặc đi chơi, đi làm hay đi dự tiệc, đi du lịch đều được. Vì thế ngày hôm nay mình sẽ giới thiệu đến các bạn nữ set áo phối quần thời trang mới đẹp hè này và hứa hẹn sẽ là một sự lựa chọn hợp lý, hoàn hảo cho các nàng. Set đồ mang phong cách nữ tính nhưng lại sành điệu phá cách cho các bạn trẻ yêu thích thời trang. Set đồ có thể phối cùng với giày cao gót, túi xá khi đi làm, đi chơi với gia đình bạn bè hay là hẹn hò với người yêu.', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'admin', 'linh2004', 'linhlinh26052004@gmail.com', 'Ninh Bình', '0987257023', 1),
(2, 'linh2004', '123', 'linh@gamil.com', 'Ninh Bình', '0987254753', 0),
(13, 'lethithuylinh', '111111', 'linhlttph37534@fpt.edu.vn', 'Việt Nam', '0987257067', 0),
(14, 'chị linh', '111111', 'linhlttph37534@fpt.edu.vn', 'Việt Nam', '0987257067', 0),
(15, 'Nan Hoang', '1234567890', 'ln229474@gmail.com', 'Hà Nội', '0789555434', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`);

--
-- Indexes for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddonhang` (`iddonhang`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD CONSTRAINT `ctdonhang_ibfk_1` FOREIGN KEY (`iddonhang`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctdonhang_ibfk_3` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctdonhang_ibfk_4` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
