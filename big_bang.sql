-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 04:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big_bang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hang_sua`
--

CREATE TABLE `hang_sua` (
  `Id_HS` int(11) NOT NULL,
  `Ma_HS` varchar(255) NOT NULL,
  `Ten_HS` varchar(255) NOT NULL,
  `Dia_Chi` varchar(255) NOT NULL,
  `Dien_Thoai` varchar(255) NOT NULL,
  `Gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hang_sua`
--

INSERT INTO `hang_sua` (`Id_HS`, `Ma_HS`, `Ten_HS`, `Dia_Chi`, `Dien_Thoai`, `Gmail`) VALUES
(1, 'VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', '8794561', 'vinamilk@vnm.com'),
(2, 'NTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', '7895632', 'nutifood@ntf.com'),
(3, 'AB', 'Abbolt', 'Công ty nhập khẩu Việt Nam', '8741258', 'abbolt@ab.com'),
(4, 'DS', 'Daisy', 'Khu công nghiệp Sóng Thần Bình Dương', '5789321', 'daisy@ds.com'),
(5, 'DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa - Đồng Nai', '7826451', 'dutchlady@dl.com'),
(6, 'DM', 'Dumex', 'Khu công nghiệp Sóng Thần Bình Dương', '6250943', 'dumex@dm.com'),
(7, 'MJ', 'Mead Jonhson', 'Công ty nhập kkahaur Việt Nam', '874125', 'meadjohn@mj.com');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `Id_KH` int(11) NOT NULL,
  `Ma_KH` varchar(255) NOT NULL,
  `Ten_KH` varchar(255) NOT NULL,
  `Gioi_Tinh` varchar(255) NOT NULL,
  `Dia_Chi` varchar(255) NOT NULL,
  `SDT` varchar(255) NOT NULL,
  `Gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`Id_KH`, `Ma_KH`, `Ten_KH`, `Gioi_Tinh`, `Dia_Chi`, `SDT`, `Gmail`) VALUES
(1, 'kh001', 'Khuất Thủy Phương', 'Nữ', 'A21 Nguyễn Oanh quận Gò Vấp', '9874125', 'ktphuong@hcmuns.edu.vn'),
(2, 'kh002', 'Đỗ Lâm Thiên', 'Nam', '357 Lê Hồng Phong quận 10', '8351056', 'dlthien@hcmuns.edu.vn'),
(3, 'kh003', 'Phạm Thị Nhung', 'Nữ', '56 Đinh Tiên Hoàng Quận ', '19745698', 'ptnhung@hcmuns.edu.vn'),
(4, 'kh004', 'Nguyễn Khắc Thiện', 'Nam', '12 Bi Đường 3-2 quận 10', '3424342', 'nkthien@hcmuns.edu.vn'),
(5, 'kh005', 'Tô Trần Hồ Giang', 'Nam', '75 Nguyễn Kiệm quận gò vấp', '3532463', 'tthgiang@hcmuns.edu.vn'),
(6, 'kh006', 'Nguyễn Kiên Thi', 'Nữ', '357 Nguyễn Kiệm quận gò vấp', '5165616', 'nkthi@hcmuns.edu.vn'),
(7, 'kh008', 'Nguyễn Anh Tuấn', 'Nam', '1/2bis Nơ Trang Long Q.BT TP.HCM', '2131124', 'natuan@hcmuns.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `Id_KH` int(11) NOT NULL,
  `Ten_SP` varchar(255) NOT NULL,
  `ma_HS` varchar(255) NOT NULL,
  `Hang_SP` varchar(255) NOT NULL,
  `Loai_SP` varchar(255) NOT NULL,
  `Trong_Luong` int(11) NOT NULL,
  `Don_Gia` int(11) NOT NULL,
  `Thanh_Phan` varchar(255) NOT NULL,
  `Loi_Ich` varchar(255) NOT NULL,
  `Hinh_Anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`Id_KH`, `Ten_SP`, `ma_HS`, `Hang_SP`, `Loai_SP`, `Trong_Luong`, `Don_Gia`, `Thanh_Phan`, `Loi_Ich`, `Hinh_Anh`) VALUES
(1, 'Fristi', 'DL', 'Dutch Lady', 'SỮa tươi', 180, 3600, 'Sữa chua Fristi hương dâu được làm từ nguồn sữa tươi sạch tự nhiên, kết hợp cùng hương cam tự nhiên tạo nên vị ngọt dịu, thơm ngon, hấp dẫn vị giác.\r\nThành phần trong sản phẩm giúp cung cấp nhiều loại dưỡng chất cần thiết cho cơ thể như protein, canxi và ', 'đem lại sức đề kháng cao cho các em nhỏ.\r\nĐược sản xuất trên dây chuyền công nghệ cao, đảm bảo đáp ứng các tiêu chuẩn chất lượng và an toàn cho sức khỏe của người sử dụng.', 'https://cdn.tgdd.vn/Products/Images/2944/84121/bhx/loc-6-chai-sua-chua-uong-huong-tao-fristi-80ml-202005081552152669.jpg'),
(2, 'Sữa chua flus', 'VNM', 'Vinamilk', 'Sữa chua', 120, 4000, 'ỡng da chống viêm giảm mụn, và giúp làn da trắng sáng thì công dụng của sữa chua uống trong việc làm đẹp da cũng không kém sữa chua ăn chút nào đâu nhé! Những sản phẩm sữa chua uống được lên men tự nhiên sẽ tốt cho cơ thể và hệ tiêu hóa hơn những sản phẩm', 'cây được bổ sung trong sản phẩm góp phần phát huy tối đa hiệu quả các cách làm đẹp từ sữa chua. Hiện nay, sữa chua uống Yomilk là một trong số những sản phẩm sữa chua uống được lên men tự nhiên với chủng men Streptococcus Thermophilus và Lactobacillus Bul', 'https://cdn.tgdd.vn/Products/Images/7558/198079/bhx/loc-4-hu-sua-chua-khong-duong-vinamilk-len-men-tu-nhien-100g-201901091637502569.jpg'),
(3, 'Sữa chua Cô Gái Hà Lan', 'DL', 'Dutch Lady', 'Sữa chua', 100, 3000, 'ữa chua thanh trùng Dutch Lady Vị Ngon Nhà Làm – thật thơm ngon, thật sánh mịn, tròn vị nguyên kem và bổ dưỡng, được làm từ nguồn sữa tươi nguyên chất chứa Canxi và Protein, thông qua quá trình lên men tự nhiên không chất bảo quản, sản xuất theo công nghệ', 'Protein, thông qua quá trình lên men tự nhiên không chất bảo quản, sản xuất theo công nghệ thanh trùng hiện đại giữ trọn các dưỡng chất và vị ngon như sữa chua làm tại nhà.\r\n Hàng công ty bán giá tận gốc nhé các mẹ\r\n Hàng chạy số nên giá bằng sỉ luôn nhé', 'https://bizweb.dktcdn.net/100/165/205/products/sua-chua.jpg?v=1539058205557'),
(4, 'Dielac Sure', 'VNM', 'Vinamilk', 'Sữa bột', 400, 90000, 'Chiết xuất tự nhiên từ mầm bông cải xanh Glucoraphanin có tác dụng thúc đẩy và duy trì các phản ứng chống oxi hóa, giúp cơ thể đào thải chất độc. Kết hợp các Vitamin nhóm B, A, C, E và các khoáng chất Kẽm, Magie, Selen giúp tăng cường sức đề kháng, giảm m', 'Bổ sung dưỡng chất SPS (Soy Phosphatidylserin) hỗ trợ trí nhớ, giúp giảm nguy cơ suy giảm nhận thức và sa sút trí tuệ ở người lớn tuổi. Kết hợp thêm Choline là dưỡng chất thiết yếu đối với hoạt động của não bộ và trí nhớ.\r\n', 'https://cdn.vatgia.vn/pictures/thumb/400x400/2013/07/agp1374801886.jpg'),
(5, 'Sữa tươi Nuti', 'NTF', 'Nutifood', 'Sữa tươi', 180, 8000, 'Sữa tươi Nuti 100% được sản xuất hoàn toàn bằng nguồn sữa tươi nguyên chất từ trang trại bò sữa quy mô, hiện đại trên cao nguyên Gia Lai; là nơi có điều kiện thiên nhiên lý tưởng để đàn bò tận hưởng bầu không khí mát mẻ, trong lành và nguồn thức ăn sạch, ', 'Các chuyên gia dinh dưỡng NutiFood đã nghiên cứu bổ sung Vitamin A, D3 và Kẽm vào sữa tươi Nuti 100% giúp sáng mắt, xương và răng chắc khỏe, tăng cường miễn dịch, cho cả gia đình khỏe mạnh.\r\nSữa tươi Nuti 100% - Ngon mê ly, giàu dinh dưỡng', 'https://cdn.tgdd.vn/Products/Images/2386/80502/stt-nuti-fresh-milk-cd-ho-p-180ml-1.jpg'),
(6, 'Grow plus+', 'NTF', 'Nutifood', 'Sữa bột', 900, 280000, 'Sữa cho trẻ suy dinh dưỡng thấp còi -  Nutifood Grow Plus + Đỏ : Với công thức Weight Pro+ giàu dinh dưỡng, đầy đủ hàm lượng đạm, béo cần thiết giúp trẻ tăng cân, tăng chiều cao tốt; sự hiện diện MCT - chất béo chuyển hóa nhanh giúp trẻ dễ tiêu hóa, dễ hấ', 'Sữa cho trẻ suy dinh dưỡng thấp còi từ 12 tháng tuổi  - Nuti GrowPLUS+ Đỏ :  còn giúp phát triển trí não thông qua việc bổ sung DHA, AA, Taurin, Cholin, trẻ sẽ thông minh, lanh lợi hơn, giúp bắt kịp đà phát triển về chiều cao và cân nặng, mà còn phát triể', 'https://cdn.tgdd.vn/Products/Images/9079/78799/bhx/sua-bot-grow-plus-do-ht-900g-2-org.jpg'),
(7, 'kem đặc Nuti', 'NTF', 'Nutifood', 'Sữa đặc', 380, 17000, 'Sản phẩm có hương vị thơm ngon, với vị sữa béo hấp dẫn, giúp bạn pha chế nên nhiều thức uống ngon tuyệt. Sữa đặc với các dưỡng chất lên men tốt cho hệ miễn dịch và tiêu hóa của cơ thể, tốt cho sức khỏe người dùng.', 'hóa của cơ thể, tốt cho sức khỏe người dùng. Bên cạnh đó, với công nghệ sản xuất hiện đại, sản phẩm đạt tiêu chuẩn vệ sinh an toàn thực phẩm, không ảnh hưởng đến sức khỏe người tiêu dùng. Sản phẩm phù hợp sử dụng cho nhiều lứa tuổi', 'https://cdn.tgdd.vn/Products/Images/2526/91900/bhx/sua-dac-co-duong-nuti-creamer-xanh-380g-2-org.jpg'),
(8, 'Abbott Grow 4', 'AB', 'Abbott', 'Sữa bột', 900, 285000, '- Giàu canxi, vitamin D, tỷ lệ canxi/phốt pho thích hợp theo khuyến cáo của Hoa Kỳ(1) hỗ trợ sự phát triển xương và chiều cao._x000D_\r\n- DHA, taurin, omega 9 giúp trẻ phát triển trí não và thị giác._x000D_\r\n- Protein chất lượng cao (đặc biệt giàu lysin) g', 'Abbott sở hữu nhiều dòng sản phẩm đa dạng như: Ensure, Similac, Glucerna, Grow, Pediasure...Trong suốt gần một thế kỷ, Abbott đã trở thành một phần không thể thiếu của cộng đồng để mang đến cuộc sống khỏe mạnh. ', 'https://concung.com/2019/06/25421-50071-large_mobile/abbott-grow-3-g-power-1-2-tuoi-900g.jpg'),
(9, 'Fristi', 'DL', 'Dutch Lady', 'SỮa tươi', 180, 3600, 'Sữa chua Fristi hương dâu được làm từ nguồn sữa tươi sạch tự nhiên, kết hợp cùng hương cam tự nhiên tạo nên vị ngọt dịu, thơm ngon, hấp dẫn vị giác.\r\nThành phần trong sản phẩm giúp cung cấp nhiều loại dưỡng chất cần thiết cho cơ thể như protein, canxi và ', 'đem lại sức đề kháng cao cho các em nhỏ.\r\nĐược sản xuất trên dây chuyền công nghệ cao, đảm bảo đáp ứng các tiêu chuẩn chất lượng và an toàn cho sức khỏe của người sử dụng.', 'https://cdn.tgdd.vn/Products/Images/2944/84121/bhx/loc-6-chai-sua-chua-uong-huong-tao-fristi-80ml-202005081552152669.jpg'),
(10, 'Sữa chua flus', 'VNM', 'Vinamilk', 'Sữa chua', 120, 4000, 'ỡng da chống viêm giảm mụn, và giúp làn da trắng sáng thì công dụng của sữa chua uống trong việc làm đẹp da cũng không kém sữa chua ăn chút nào đâu nhé! Những sản phẩm sữa chua uống được lên men tự nhiên sẽ tốt cho cơ thể và hệ tiêu hóa hơn những sản phẩm', 'cây được bổ sung trong sản phẩm góp phần phát huy tối đa hiệu quả các cách làm đẹp từ sữa chua. Hiện nay, sữa chua uống Yomilk là một trong số những sản phẩm sữa chua uống được lên men tự nhiên với chủng men Streptococcus Thermophilus và Lactobacillus Bul', 'https://cdn.tgdd.vn/Products/Images/7558/198079/bhx/loc-4-hu-sua-chua-khong-duong-vinamilk-len-men-tu-nhien-100g-201901091637502569.jpg'),
(11, 'Sữa chua Cô Gái Hà Lan', 'DL', 'Dutch Lady', 'Sữa chua', 100, 3000, 'ữa chua thanh trùng Dutch Lady Vị Ngon Nhà Làm – thật thơm ngon, thật sánh mịn, tròn vị nguyên kem và bổ dưỡng, được làm từ nguồn sữa tươi nguyên chất chứa Canxi và Protein, thông qua quá trình lên men tự nhiên không chất bảo quản, sản xuất theo công nghệ', 'Protein, thông qua quá trình lên men tự nhiên không chất bảo quản, sản xuất theo công nghệ thanh trùng hiện đại giữ trọn các dưỡng chất và vị ngon như sữa chua làm tại nhà.\r\n Hàng công ty bán giá tận gốc nhé các mẹ\r\n Hàng chạy số nên giá bằng sỉ luôn nhé', 'https://bizweb.dktcdn.net/100/165/205/products/sua-chua.jpg?v=1539058205557'),
(12, 'Dielac Sure', 'VNM', 'Vinamilk', 'Sữa bột', 400, 90000, 'Chiết xuất tự nhiên từ mầm bông cải xanh Glucoraphanin có tác dụng thúc đẩy và duy trì các phản ứng chống oxi hóa, giúp cơ thể đào thải chất độc. Kết hợp các Vitamin nhóm B, A, C, E và các khoáng chất Kẽm, Magie, Selen giúp tăng cường sức đề kháng, giảm m', 'Bổ sung dưỡng chất SPS (Soy Phosphatidylserin) hỗ trợ trí nhớ, giúp giảm nguy cơ suy giảm nhận thức và sa sút trí tuệ ở người lớn tuổi. Kết hợp thêm Choline là dưỡng chất thiết yếu đối với hoạt động của não bộ và trí nhớ.\r\n', 'https://cdn.vatgia.vn/pictures/thumb/400x400/2013/07/agp1374801886.jpg'),
(13, 'Sữa tươi Nuti', 'NTF', 'Nutifood', 'Sữa tươi', 180, 8000, 'Sữa tươi Nuti 100% được sản xuất hoàn toàn bằng nguồn sữa tươi nguyên chất từ trang trại bò sữa quy mô, hiện đại trên cao nguyên Gia Lai; là nơi có điều kiện thiên nhiên lý tưởng để đàn bò tận hưởng bầu không khí mát mẻ, trong lành và nguồn thức ăn sạch, ', 'Các chuyên gia dinh dưỡng NutiFood đã nghiên cứu bổ sung Vitamin A, D3 và Kẽm vào sữa tươi Nuti 100% giúp sáng mắt, xương và răng chắc khỏe, tăng cường miễn dịch, cho cả gia đình khỏe mạnh.\r\nSữa tươi Nuti 100% - Ngon mê ly, giàu dinh dưỡng', 'https://cdn.tgdd.vn/Products/Images/2386/80502/stt-nuti-fresh-milk-cd-ho-p-180ml-1.jpg'),
(14, 'Grow plus+', 'NTF', 'Nutifood', 'Sữa bột', 900, 280000, 'Sữa cho trẻ suy dinh dưỡng thấp còi -  Nutifood Grow Plus + Đỏ : Với công thức Weight Pro+ giàu dinh dưỡng, đầy đủ hàm lượng đạm, béo cần thiết giúp trẻ tăng cân, tăng chiều cao tốt; sự hiện diện MCT - chất béo chuyển hóa nhanh giúp trẻ dễ tiêu hóa, dễ hấ', 'Sữa cho trẻ suy dinh dưỡng thấp còi từ 12 tháng tuổi  - Nuti GrowPLUS+ Đỏ :  còn giúp phát triển trí não thông qua việc bổ sung DHA, AA, Taurin, Cholin, trẻ sẽ thông minh, lanh lợi hơn, giúp bắt kịp đà phát triển về chiều cao và cân nặng, mà còn phát triể', 'https://cdn.tgdd.vn/Products/Images/9079/78799/bhx/sua-bot-grow-plus-do-ht-900g-2-org.jpg'),
(15, 'kem đặc Nuti', 'NTF', 'Nutifood', 'Sữa đặc', 380, 17000, 'Sản phẩm có hương vị thơm ngon, với vị sữa béo hấp dẫn, giúp bạn pha chế nên nhiều thức uống ngon tuyệt. Sữa đặc với các dưỡng chất lên men tốt cho hệ miễn dịch và tiêu hóa của cơ thể, tốt cho sức khỏe người dùng.', 'hóa của cơ thể, tốt cho sức khỏe người dùng. Bên cạnh đó, với công nghệ sản xuất hiện đại, sản phẩm đạt tiêu chuẩn vệ sinh an toàn thực phẩm, không ảnh hưởng đến sức khỏe người tiêu dùng. Sản phẩm phù hợp sử dụng cho nhiều lứa tuổi', 'https://cdn.tgdd.vn/Products/Images/2526/91900/bhx/sua-dac-co-duong-nuti-creamer-xanh-380g-2-org.jpg'),
(16, 'Abbott Grow 4', 'AB', 'Abbott', 'Sữa bột', 900, 285000, '- Giàu canxi, vitamin D, tỷ lệ canxi/phốt pho thích hợp theo khuyến cáo của Hoa Kỳ(1) hỗ trợ sự phát triển xương và chiều cao._x000D_\r\n- DHA, taurin, omega 9 giúp trẻ phát triển trí não và thị giác._x000D_\r\n- Protein chất lượng cao (đặc biệt giàu lysin) g', 'Abbott sở hữu nhiều dòng sản phẩm đa dạng như: Ensure, Similac, Glucerna, Grow, Pediasure...Trong suốt gần một thế kỷ, Abbott đã trở thành một phần không thể thiếu của cộng đồng để mang đến cuộc sống khỏe mạnh. ', 'https://concung.com/2019/06/25421-50071-large_mobile/abbott-grow-3-g-power-1-2-tuoi-900g.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `Id_TK` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`Id_TK`, `User`, `Pass`) VALUES
(1, 'lehuuphu', '123'),
(2, 'nguyentrongthanh', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hang_sua`
--
ALTER TABLE `hang_sua`
  ADD PRIMARY KEY (`Id_HS`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`Id_KH`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`Id_KH`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`Id_TK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hang_sua`
--
ALTER TABLE `hang_sua`
  MODIFY `Id_HS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `Id_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `Id_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `Id_TK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
