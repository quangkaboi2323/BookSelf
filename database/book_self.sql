-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 09:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_self`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id_book` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_book` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty_book` int(11) NOT NULL DEFAULT 100,
  `price` float NOT NULL,
  `image_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_book`, `category_id`, `title`, `author`, `description_book`, `qty_book`, `price`, `image_path`, `date_created`) VALUES
(22, 24, 'Looking For The Land Of Silence', 'NXB Phụ Nữ', 'Với những câu chuyện thú vị, được viết bằng ngôn ngữ tiếng Anh đơn giản, dễ hiểu, cùng tranh minh họa đẹp mắt, bộ sách The Seeds of love sẽ giúp các bé học tiếng Anh một cách hứng thú và hiệu quả hơn.', 100, 70000, '344709_p88343m4.jpg', '2021-11-08 14:03:40'),
(23, 24, 'Christmas Gift', 'NXB Phụ Nữ', 'Với những câu chuyện thú vị, được viết bằng ngôn ngữ tiếng Anh đơn giản, dễ hiểu, cùng tranh minh họa đẹp mắt, bộ sách The Seeds of love sẽ giúp các bé học tiếng Anh một cách hứng thú và hiệu quả hơn.', 100, 70000, '344707_p88342m3.jpg', '2021-11-08 14:04:31'),
(24, 24, 'My Fuzzy Friend', 'NXB Phụ Nữ', 'Với những câu chuyện thú vị, được viết bằng ngôn ngữ tiếng Anh đơn giản, dễ hiểu, cùng tranh minh họa đẹp mắt, bộ sách The Seeds of love sẽ giúp các bé học tiếng Anh một cách hứng thú và hiệu quả hơn.', 100, 69000, '344703_p88338m1.jpg', '2021-11-08 14:05:56'),
(25, 24, 'Secret Garden', 'Johanna Basford', 'Tumble down the rabbit hole and find yourself in an inky black-and-white wonderland. This interactive activity book takes you on a ramble through a secret garden created in beautifully detailed pen-and-ink illustrations all waiting to be brought to life through colouring, but each also sheltering all kinds of tiny creatures just waiting to be found. And there are also bits of the garden that still need to be completed by you. Appealing to all ages, the intricately-realized world of the Secret Garden is both beautiful and inspirational.', 100, 344000, '181893_p63703msecretgarden.jpg', '2021-11-08 14:08:32'),
(26, 24, 'Chuyển đổi số', 'Stephanie L Woerner', 'Chuyển đổi số không phải là vấn đề công nghệ, mà là về sự thay đổi. Đừng hỏi liệu ta có nên thay đổi không, hãy hỏi ta phải thay đổi khi nào và như thế nào.\r\n\r\nTrong nền kinh tế số hiện nay, doanh nghiệp không thể thành công chỉ nhờ vào việc sửa đổi đôi chút phương thức quản lý đã từng hiệu quả trong quá khứ. Và mặc dù nhiều nhà lãnh đạo và quản lý nhận ra mối đe dọa từ kỹ thuật số - cũng như những cơ hội tiềm năng mà nó mang lại – họ vẫn thiếu một tiếng nói chung và một mô hình khung hiệu quả giúp họ đánh giá và phản ứng lại những mối đe dọa này. Họ không biết phải nghĩ về mô hình kinh doanh số như thế nào.', 100, 102000, '367590_p94386mnxbtrefull06572021025745.jpg', '2021-11-08 14:12:50'),
(27, 26, 'Startup Trong Thời Kỳ Bình Thường Mới', 'Lý Quí Trung', 'Đại dịch Covid-19 xuất hiện làm xáo trộn mọi thứ liên quan đến kinh doanh nói chung và khởi nghiệp nói riêng. Các doanh nghiệp đều phải thay đổi những cách thức cũ, thậm chí “khởi nghiệp” lại mô hình kinh doanh cũ, để đáp ứng kịp thời những thay đổi của cuộc chơi mới, trong thời kỳ bình thường mới.\r\n\r\nVà khởi nghiệp trong một thời kỳ vừa chịu ảnh hưởng của đại dịch, vừa chịu ảnh hưởng của chuyển đổi số tăng tốc thì thật là đặc biệt, với thử thách và cơ hội gần tương đương nhau. Nó đòi hỏi các nhà khởi nghiệp phải có một tư duy vô cùng năng động và nhạy bén để nhận diện và nắm bắt cơ hội. Nó đòi hỏi các startup phải làm quen với công nghệ một cách thuần thục. Nó đòi hỏi các startup phải có một tinh thần vững vàng và sức chịu đựng bền bỉ để vượt qua mọi thử thách. Và rất nhiều những thử thách quan trọng vẫn chưa xảy ra nhưng lại nằm ngay phía trước.\r\n\r\nTừ những khát vọng khởi nghiệp và kinh nghiệm trên thương trường cùng với những kiến thức và lý luận chuyên môn thông qua nghiên cứu, tác giả Lý Quí Trung chia sẻ với các bạn trẻ những điều tâm đắc cùng cách thức để khởi nghiệp ở môi trường kinh doanh của Việt Nam, đặc biệt là trong thời kỳ có nhiều thay đổi sau đại dịch.', 100, 85000, '367592_p94387mstartup1.jpg', '2021-11-08 14:13:57'),
(28, 26, 'Đạo Quân Trung Quốc Thầm Lặng', 'Heriberto Araújo, Juan Pablo Cardenal', 'Hai nhà báo thường trú tại Bắc Kinh Juan Pablo Cardenal và Heriberto Araujo đã đi qua hai mươi lăm quốc gia với hàng ngàn dặm để điều tra cách thức người Trung Quốc đang nhanh chóng đưa phần lớn thế giới vào quỹ đạo của Bắc Kinh. Từ các mỏ ở Peru đến các khu rừng ở Siberia, từ các con đập ở Sudan đến các mỏ ngọc của Miến Điện - ở khắp mọi nơi.\r\n\r\nĐây là một tác phẩm xuất sắc của thể loại báo chí điều tra. Là cuốn sách đầu tiên đưa tin chi tiết về cuộc di cư của người Trung Quốc trong lịch sử và ghi lại tiếng nói của những người đang tham gia cũng như người dân bản địa.\r\n\r\nNhưng phần hấp dẫn nhất của cuốn sách là đề cập đến mặt khác của cuộc di cư này, đó là cách thức người Trung Quốc đang tác động trực tiếp và gián tiếp đến toàn thế giới. Những gì mà hai tác giả phát hiện là câu chuyện về con người, kinh tế, và chính trị, đang làm thay đổi tiến trình lịch sử và chưa bao giờ được khám phá, hoặc tường thuật sâu sắc và thực tế.', 100, 223000, '367666_p94423mimage24471812519.jpg', '2021-11-08 14:15:14'),
(29, 26, 'Ai Hiểu Khách Hàng Người Ấy Bán Được Hàng', 'Lí Kiện Lâm', 'Một số nhân viên bán hàng luôn giới thiệu không biết mệt mỏi cho khách hàng nghe công ty của họ đáng tin cậy như thế nào, sản phẩm của họ chất lượng ra sao, và nếu hợp tác làm ăn với họ thì khách hàng sẽ nhận được những lợi ích vô cùng to lớn… nhưng kết quả bán hàng lại không tốt. Tại sao vậy? Vì những điều họ mang đến không phải là thứ khách hàng muốn, có nghĩa là họ không hiểu khách hàng. Nhân viên bán hàng cần thấu hiểu khách hàng, vì khách hàng đóng vai trò quan trọng nhất trong quá trình tiêu thụ. Không hiểu khách hàng, khách hàng sẽ không có hứng thú mua hàng; không hiểu khách hàng, khách hàng sẽ không mở ví lấy tiền mua hàng; không hiểu khách hàng, đương nhiên sẽ không bán được hàng.\r\n\r\nCuốn sách Ai hiểu khách hàng, người ấy bán được hàng giới thiệu quá trình nhân viên bán hàng tìm kiếm khách hàng tiềm năng, quá trình chi tiêu của khách hàng, những chi tiết nhỏ mà khách hàng quan tâm, lời nói và hành động, cử chỉ của khách hàng, tâm lí của khách hàng, tín hiệu giao dịch của khách hàng… giúp người bán hàng hiểu được khách hàng, kịp thời đáp ứng nhu cầu của họ, từ đó dễ dàng có được đơn đặt hàng và nâng cao thành tích tiêu thụ sản phẩm.', 100, 89000, '367720_p94448mimage24471812853.jpg', '2021-11-08 14:16:20'),
(30, 27, 'Sinh Năm 1972 - Khát Vọng Sống (Tự Truyện Nguyễn Cảnh Bình)', 'Nguyễn Cảnh Bình', 'Cuốn tự truyện SINH NĂM 1972 của Nguyễn Cảnh Bình kể về toàn bộ quá trình học tập, trưởng thành và phát triển của bản thân ông. Những thành công, thất bại trên đường đời, những mong muốn và kế hoạch tiếp theo của ông cho sự nghiệp và cuộc đời...\r\n\r\nĐặc biệt trong cuốn sách ông nhấn mạnh giai đoạn có những bước ngoặt, biến động lớn lao đối với ông. Đó là quãng những năm 1986-1992 và giai đoạn thay đổi tư duy 1996-1998, giai đoạn thành lập Alpha Books và quá trình làm sách, xuất bản, hoạt động xã hội từ 2004 đến nay của ông...', 100, 169000, '367729_p94453mkvs1972.jpg', '2021-11-08 14:18:18'),
(31, 27, 'Số Đỏ', 'Vũ Trọng Phụng', 'Nhằm giúp các bạn học sinh có một nền tảng kiến thức văn học phong phú, vững vàng, Nhà xuất bản Kim Đồng tổ chức biên soạn bộ sách Tủ sách Văn học trong nhà trường.\r\n\r\nBộ sách sẽ lần lượt giới thiệu tác phẩm của các tác giả thuộc nhiều trào lưu, thể loại, thời kì...\r\n\r\nNgoài giá trị tư liệu học tập, hi vọng bộ sách còn giúp bồi dưỡng thêm tình yêu văn học, khích lệ tư duy sáng tạo giúp người đọc có được cho mình những nhận định khách quan và hợp lí.', 100, 57000, '367712_p94444mimage24471812877.jpg', '2021-11-08 14:19:41'),
(32, 27, 'Bên Kia Đường Có Đứa Dở Hơi ', 'Wendelin Van Draanen', 'Chỉ hơn 200 trang sách nhưng Bên kia đường có đứa dở hơi thực sự là thứ gia vị ngọt ngào với những bài học tinh thần, tinh khôi với những tình cảm đầu đời, hài hước với những câu chữ giàu tính trí tuệ, những điều cần thiết để cuộc sống trở nên đáng sống và đáng trân trọng hơn với những người trẻ.', 100, 67000, '367692_p94434mimage24471812840.jpg', '2021-11-08 14:22:32'),
(33, 27, 'Đêm Dài Một Đời', 'Lê Tất Điều', 'Những đứa trẻ mù do nghịch cảnh đưa đẩy, đã gặp gỡ nhau trong một trường khiếm thị chật chội, thiếu thốn. Chúng mò mẫm nhận ra nhau, chấp nhận nhau, tìm kiếm và nương nhờ tình thân để tự chữa lành, rồi biết cách đem trái tim thổn thức, giai điệu yêu thương đến cho cuộc đời.\r\n\r\nBóng đêm tàn khốc của cuộc chiến, những tổn thương nghiệt ngã của đời riêng đã được xua tan trên trang văn Lê Tất Điều bằng một lối văn tinh tế, nhẹ nhàng và đầy xúc động.', 100, 121000, '367664_p94422mimage24471812520.jpg', '2021-11-08 14:23:35'),
(34, 28, 'Sau Anh - After You', 'Jojo Moyes', 'Lou Clark có nhiều thắc mắc.\r\nChẳng hạn như, tại sao cô lại chấp nhận làm chân phục vụ tại một quán bar trong sân bay, ca nào cũng thấy người lại người bay tới nơi chốn mới.\r\nHay tại sao căn hộ cô sở hữu suốt một năm qua vẫn không mang lại cảm giác đó là mái nhà.\r\nLiệu gia đình yêu thương của cô có tha thứ cho những gì cô đã làm trước đó mười tám tháng không.\r\nVà liệu cô có vượt qua được tình yêu của cuộc đời mình.\r\nLou chỉ biết biết chắc chắn là cô cần phải thay đổi.\r\n\r\nThế rồi, vào đêm nọ, điều ấy xảy ra.\r\nTuy nhiên, người lạ đứng ở ngưỡng cửa nhà Lou đang nắm giữ mọi câu trả lời bấy lâu nay cô tìm kiếm - hay càng làm tăng thêm thắc mắc trong cô?\r\nĐóng cửa lại để đời mình được: đơn giản, gọn gàng, an toàn.\r\nMở cửa ra và chấp nhận mọi rủi ro.\r\nNhưng Lou đã hứa là mình sẽ sống.\r\nVà nếu vẫn giữ lời hứa đó, thì cô phải mời người ta bước vào…', 100, 161000, '367890_p94527mimage24471813609.jpg', '2021-11-08 14:28:39'),
(35, 28, 'Đố Kỵ', 'Yuri Olesha', 'Đố kỵ là một trong những tác phẩm tiêu biểu nhất của nhà văn, nhà thơ, nhà viết kịch người Nga Yuri Karlovich Olesha (1899 - 1960). Ông được coi là một trong những tiểu thuyết gia Nga vĩ đại nhất thế kỷ 20.\r\n\r\nTác phẩm được in lần đầu trên tạp chí văn học Red Virgin Soil vào năm 1927 và đã tạo ra một sự chấn động. Là một tác phẩm viết về nhiều khía cạnh của cá tính Xô-viết, câu chuyện được thể hiện qua những dẫn giải đậm chất thơ và qua một lối kể mang dấu ấn châm biến.\r\n\r\nĐố kỵ là một khám phá súc tích và sâu sắc về những xung đột trong mô hình thời kỳ đầu của Liên Xô: cũ và mới, trí tưởng tượng với chủ nghĩa Hiện thực Xã hội . Phản ánh số phận của giới trí thức trong xã hội thời hậu cách mạng của Nga.', 100, 125000, '367909_p94535mimage24471814010.jpg', '2021-11-08 14:31:11'),
(36, 28, 'Tôi Vẫn Sống - I Am Still Alive', 'Kate Alice Marshall', 'Hơn mười năm trời, Jess không được thấy mặt người cha từ-bỏ-tiện-nghi-sống-đời-ở-ẩn của mình. Tuy nhiên, sau vụ tai nạn xe hơi khiến mẹ bị tử vong và bản thân bị thương, cô buộc phải về sống cùng cha trong căn lều ở chốn tận cùng hoang dã của Canada. Rồi cha cô bị giết chết, trước khi hai cha con kịp làm quen với nhau và Jess có thể thích nghi với nơi chốn xa lạ này\r\n\r\nJess hiện tại chỉ còn một thân một mình. Căn lều cô ở đã bị hủy hoại. Nếu không nhanh nhanh, cái lạnh sẽ giết chết cô trước khi cô có thời gian để lo lắng về thức ăn, chưa kể những kẻ rình rập với súng đạn và dã tâm.Tuy nhiên cô gái vẫn sống - tính đến thời điểm này.\r\n\r\nChỉ còn có chú chó của cha làm bạn đồng hành, Jess trở lại cuộc sống săn bắt hái lượm, dựng chỗ trú ẩn và giữ ấm. Thoạt đầu cứ ngỡ thiên nhiên hoang đã sẽ đánh bại Jess, nhưng hóa ra cô gái mạnh mẽ hơn cô tưởng.\r\n\r\nJess sẽ vượt qua. Cô phải vượt qua. Cô đã biết kẻ nào đã ra tay với cha mình… và cô muốn trả thù.', 100, 140000, '367888_p94526mimage24471813610.jpg', '2021-11-08 14:32:15'),
(37, 28, 'Thung Lũng Bất Hạnh - The Hollow', 'Agatha Christie', 'Khi có mặt tại trang viên Thung Lũng để ăn trưa theo lời mời của bà Lucy Angkatell, thám tử Hercule Poirot không mấy vui khi thấy những vị khách đã dàn dựng một hiện trường án mạng bên hồ bơi để trêu chọc mình.\r\nThật không may, đó là thật. Lúc những giọt máu loang xuống nước, nạn nhân cũng thì thầm từ cuối “Henrietta”. Khẩu súng trên tay người vợ, vật chứng số một, trong lúc bối rối cũng bị rơi xuống nước.\r\nĐiều tra của Poirot cho thấy mọi chuyện phức tạp hơn ông tưởng. Có vẻ như ai cũng có động cơ gây án, và trong đại gia đình nhiều bí ẩn này, mỗi người đều là nạn nhân của tình yêu.', 100, 102000, '367797_p94483mimage24471812973.jpg', '2021-11-08 14:33:30'),
(38, 29, 'Dốc Toàn Lực Tiến Lên Trước Đã, Chớ Nói Bản Thân Không Có Cơ Hội', 'Tiệm Tạp Hóa Của Lão Hàn', 'Và khi bạn lật giở từng bài viết trong cuốn sách này, bạn sẽ phát hiện ra một quy luật: đúng vậy, mỗi đoạn văn, mỗi chương chính là từng câu chuyện mà tác giả đã trải qua, những chuyện người viết đọc được, nhìn được, nghe thấy, trải qua. Nhưng chỉ cần bạn đọc một mạch hết bài viết, có lẽ vào một đêm tối sâu thẳm nào đó, sau khi khép lại trang sách, nhắm nghiền đôi mắt, bạn sẽ phát hiện ra rằng, suy cho cùng, những chuyện này đều là chuyện của bạn.\r\n\r\nCuốn sách này có thể đánh động đến tâm tư, suy nghĩ, tình cảm cũng như các góc khuất trong bạn, thế nhưng, điều mà tôi hi vọng hơn cả là, sau khi đọc xong cuốn sách này, bạn có thể lẳng lặng bước đến trước tấm gương, soi mình vào đó, tìm thấy chính mình, bình ổn suy nghĩ của mình, dàn xếp ổn thỏa mối quan hệ giữa bạn và chính mình cũng như bạn với thế giới, đồng thời thu hoạch được một chút định lực trong cuộc đời.\r\n\r\nĐây chính cuốn sách để bạn học được cách sống yên phận thực sự giữa một thời đại có thể them vào bất cứ tính từ nào như hiện nay.', 100, 94000, '367835_p94502mimage24471813668.jpg', '2021-11-08 14:37:27'),
(39, 29, 'Mẹ Tự Tôn - Con Tự Tin', 'Kim Mi Kyung', 'Cuốn sách Mẹ tự tôn – Con tự tin chứa đựng nhiều quan điểm tiến bộ bởi đã nêu ra câu hỏi mang tính thách thức đối với quan niệm cố hữu của số đông về “bổn phận làm mẹ”.\r\n\r\nPhụ nữ bắt đầu vai trò làm mẹ từ khi em bé được hình thành trong bụng và duy trì liên tục cho tới khi nhắm mắt xuôi tay. Tuy nhiên, nhiều người thiết lập sai lầm ngay từ đầu mối quan hệ cha mẹ – con cái quý giá này. Nhiều bà mẹ tin chắc rằng “bổn phận chân chính của người làm mẹ” chính là phải trở thành chuyên gia về đào tạo và nuôi dạy trẻ. Và họ dốc toàn lực để theo đuổi niềm tin đó. Nhưng, giây phút chúng ta thiết lập vai trò bản thân theo quan điểm như vậy cũng là lúc bi kịch bắt đầu.', 100, 106000, '367855_p94511mimage24471813721.jpg', '2021-11-08 14:38:22'),
(40, 29, 'Trồng Một Nụ Cười - Cùng Trẻ Thực Hành Chánh Niệm', 'Thích Nhất Hạnh', 'Hiện nay, vai trò của chánh niệm trong giáo dục ngày càng được công nhận một cách rộng rãi. Sự thực tập chánh niệm giúp học sinh tăng cường khả năng chú tâm, ý thức và làm chủ được các hoạt động của thân, điều phục các cảm xúc mạnh cũng như phát triển các kỹ năng giao tiếp, ứng xử trong mối liên hệ giữa mình với mọi người. Nhưng quan trọng hơn hết, chánh niệm giúp các em phát triển một cách toàn diện và lành mạnh, nuôi lớn niềm vui, sự bình an và tự tin nơi chính mình, thông qua những phương pháp thực tập làm lắng dịu căng thẳng, lo lắng và bạo động trong tự thân.\r\nThực tế là hệ thống giáo dục của chúng ta thường đặt trọng tâm vào thành tích thi cử mà chưa chú trọng đầy đủ đến việc dạy cho các em cách chăm sóc những cảm xúc của mình, cũng như các phép ứng xử cần thiết khi giao tiếp với xã hội. Lẽ tất nhiên là trường học cần trang bị cho các em những kỹ năng và kiến thức cần thiết, nhưng việc giúp các em có thêm sức mạnh và sự vững chãi khi đối diện với những cơn bão cảm xúc, cũng như khả năng chấp nhận và bao dung trước những khác biệt trong nhận thức, lối sống của con người trong xã hội cũng quan trọng không kém. Sự thực tập chánh niệm có công năng rất lớn trong việc giúp các em phát triển những kỹ năng chế tác và nuôi lớn bình an trong tự thân, góp phần vào sự bình an của môi trường xung quanh mình.', 100, 169000, '367853_p94510mimage24471813723.jpg', '2021-11-08 14:41:08'),
(41, 29, 'Dạy Con Đối Mặt Với Ván Cờ Cuộc Đời', 'Nguyễn Hữu Huấn', 'Dạy Con Đối Mặt Với Ván Cờ Cuộc Đời được viết với quan niệm: Những quân cờ vua nhỏ bé không chỉ mang đến cho con người những cung bậc cảm xúc khác nhau mà còn dạy con người nhiều bài học về cuộc đời.\r\n\r\nCuốn sách là trang nhật ký của các thành viên trong một gia đình có con đang ở giai đoạn “khủng hoảng tuổi lên 7”. Cu Tý nghịch ngợm, hay tò mò về những thứ xung quanh mình và yêu thích chơi cờ vua. Người mẹ dịu dàng, thường mang trong mình những nỗi lo lắng đến mức thái quá. Người bố bận rộn nhưng luôn cố gắng dành thời gian để làm bạn cùng con.\r\n\r\nXuyên suốt 5 chương sách là những tình huống mà bạn đã bắt gặp đâu đó trong cuộc sống hằng ngày. Tư duy cờ vua sẽ giúp bạn ứng phó với chúng một cách nhẹ nhàng, hiệu quả nhất. Bạn sẽ bất ngờ khi khám phá ra rằng, cờ vua không chỉ đơn thuần là một một thể thao trí tuệ mà còn ẩn chứa nhiều triết lý về cuộc sống.', 100, 84000, '367863_p94515mimage24471813717.jpg', '2021-11-08 14:42:09'),
(42, 30, 'Cổ Tích Trăng Non - Cao Và Thấp', 'Minh Anh, Ngọc Phương', 'Những câu chuyện cổ tích dành cho bé lứa tuổi mầm non.', 100, 14000, '367782_p94476mimage24471812531.jpg', '2021-11-08 14:43:55'),
(43, 30, 'Puzzle Activity - Digger: Đố Vui Với Máy Đào Đất ', 'Catherine Veitch, Kirsten Collier', 'Puzzle Activity - Digger: Đố vui với Máy đào đất (Song ngữ Anh - Việt)\r\n\r\nĐố vui cùng máy đào đất', 100, 30000, '367778_p94474mimage24471812533.jpg', '2021-11-08 14:44:48'),
(44, 30, 'Những Câu Đố Toán Học Kiểu Nhật - Mê Cung', 'Nhiều tác giả', 'Ở Nhật Bản, môn Toán được coi như một trò chơi trí tuệ hơn là một môn học. Các em học sinh sẽ được dạy cách tư duy thực thụ, nâng cao cảm quan Toán học một cách tự nhiên nhất. Điều này giúp học sinh Nhật dễ dàng học tốt môn Toán hơn những đứa trẻ khác trên thế giới.\r\n\r\nTừ việc quan sát phương pháp học trên, nhóm phát triển câu đố Toán học đã cho ra đời bộ sách Những câu đố Toán học kiểu Nhật gồm 6 cuốn với những chủ đề khác nhau: Hình học, Số học, Lập luận, Mê cung, Câu đó logic (1), Câu đố logic (2) nhằm giúp các em học sinh có thể nuôi dưỡng năng lực Toán học toàn diện bao gồm:\r\n\r\n- Khả năng tiếp cận vấn đề một cách logic\r\n\r\n- Kỹ năng phân tích và giải quyết vấn đề\r\n\r\n- Năng lực hình thành các ý tưởng\r\n\r\n- Năng lực đọc hiểu\r\n\r\n- Cảm quan hình học\r\n\r\nvà còn nhiều kỹ năng tư duy khác nữa.\r\n\r\nVới những kỹ năng tư duy có được này, các em sẽ không chỉ học tốt môn Toán mà còn có thể dễ dàng tiếp thu các môn học khác cũng như áp dụng vào nhiều lĩnh vực trong cuộc sống.', 100, 50000, '367839_p94504mimage24471813665.jpg', '2021-11-08 14:46:41'),
(45, 30, 'Bộ Sách Busy Machines + Puzzle Activity - Tractor: Máy Kéo (Song Ngữ Anh - Việt) - Kèm Mô Hình Lắp Ghép', 'Amy Johnson, Ela Smietanka, Catherine Veitch, Ela Smietanka', 'Bộ Sách Busy Machines + Puzzle Activity - Tractor: Máy Kéo (Song Ngữ Anh - Việt) - Kèm Mô Hình Lắp Ghép\r\n\r\nBộ sách tìm hiểu về và đố vui về máy kéo.', 100, 119000, '367772_p94471mimage24471812536.jpg', '2021-11-08 14:47:43'),
(46, 31, 'Thuật Đọc Tâm Lý Sếp', 'Hironori Furukawa', 'Theo thống kê, khoảng 30% nhân viên trẻ và nhân viên mới sẽ rời công ty sau khoảng 3 năm gắn bó. Trong cuốn sách “Thuật đọc tâm lý sếp”, tác giả Hironori Furukawa trình bày một số nguyên nhân khiến nhân viên không thể gắn bó lâu dài với công ty:\r\n\r\n- Bất mãn với người trong công ty.\r\n\r\n- Lo lắng năng lực của bản thân không thể đáp ứng các công việc được giao.\r\n\r\n- Lo lắng về tương lai của mình khi làm việc ở công ty.\r\n\r\n- Không tìm thấy định hướng nghề nghiệp khi làm ở công ty đó.', 100, 109000, '367825_p94497mimage24471813673.jpg', '2021-11-08 14:56:41'),
(47, 31, 'Tâm Lý Học Nhân Cách', 'Matthew Syed', 'Bạn có từng cảm thấy các đồng nghiệp của mình chỉ là một đám ngốc? Bạn không sao chịu được cách hành xử của họ và đôi khi thậm chí không hiểu được những điều họ nói? Nhưng trên thực tế, họ là những cá nhân xứng đáng được tôn trọng và thấu hiểu.\r\n\r\nTrong cuốn sách này, tác giả đã cung cấp chiến lược giao tiếp đơn giản nhưng đột phá nơi văn phòng, dựa trên cơ sở chia con người thành bốn loại tính cách - bốn “màu sắc” Đỏ, Vàng, Xanh Lá, Xanh Dương - đồng thời cung cấp những phương pháp cụ thể để giao tiếp và ứng xử với từng loại. Erikson sẽ giúp bạn thấu hiểu bản thân, trau dồi kỹ năng giao tiếp xã hội, tự tin giải quyết xung đột và hòa đồng hơn với các đồng nghiệp. Ông cũng chia sẻ những thủ thuật về ngôn ngữ cơ thể và cách phòng tránh xung đột.\r\n\r\nVới lồi viết hài hước, tác giả đã biến cuốn sách trở nên vô cùng lôi cuốn, dễ đọc với bất cứ ai, dù là những người nghiên cứu sâu về tâm lý hay những người chỉ muốn tìm hiểu sơ qua. Ngoài ra, sách còn có những bài cung cấp kiến thức chuyên sâu về tâm lý học cũng như lịch sử phát triển của bộ môn này, giúp chúng ta hiểu rõ hơn về ngành khoa học đã có lịch sử từ hàng nghìn năm trước.\r\n\r\nBất cứ ai cũng có thể sử dụng những khung tham chiếu được dựng nên trong cuốn sách này để tiến triển trong trò chơi cuộc đời. Và hãy nhìn nó theo cách này: Nếu bạn không hiểu rõ và vẫn sử dụng các nguyên tắc, bạn sẽ tiếp tục bị bao quanh bởi những kẻ ngốc. Và không ai muốn điều đó xảy ra cả.\r\n\r\nCuốn sách thực sự là một giáo trình toàn diện, cung cấp cho chúng ta những kiến thức để phân loại và đố phó với những người xung quanh, những người mà ta vẫn thường xem là “kẻ ngốc” chỉ bởi không hiểu được họ. Với tất cả những kiến thức này, bạn có thể tự tin rằng không còn “kẻ ngốc” nữa!', 100, 160000, '367823_p94496mimage24471813674.jpg', '2021-11-08 14:57:34'),
(48, 31, 'Tư Duy Hộp Đen', 'Matthew Syed', 'Trong cuộc sống không ai muốn thất bại cả. Tuy nhiên, chúng ta đều từng phải chịu đựng thất bại hết lần này đến lần khác, dù đó là thể hiện kém trong một cuộc phỏng vấn xin việc, thi trượt hay thua một trận bóng rổ. Thành công chỉ đến khi chúng ta dám đối mặt với những sai lầm, rút ra bài học và tạo dựng một môi trường an toàn để trải nghiệm thất bại.\r\n\r\nTrong nhiều trường hợp, không phải cứ gặp sai lầm là bạn nên bỏ cuộc mà chính sai lầm cũng là động lực để phát triển. Ngành hàng không sở hữu một câu chuyện điển hình: Mỗi chiếc máy bay dân dụng đều được trang bị một chiếc hộp đen gần như không thể phá huỷ. Bất cứ khi nào có tai nạn, chiếc hộp đen sẽ được phân tích bởi các chuyên gia để sai lầm tương tự không tái diễn. Bằng cách áp dụng phương pháp này trong những thập kỷ gần đây, ngành hàng không đã lập nên một kỷ lục về an toàn đáng kinh ngạc, trở thành anh cả đi đầu trong việc học hỏi từ những sai lầm.\r\n\r\nQua cuốn sách \"Tư duy hộp đen\", tác giả Matthew Syed sẽ giúp chúng ta hiểu được rằng việc sẵn sàng chấp nhận thất bại chính là yếu tố quan trọng nhất để đạt được thành công, dù là trong lĩnh vực nào.\r\n\r\nVới rất nhiều nguồn tư liệu đa dạng - từ nhân chủng học, tâm lý học đến lịch sử - “Tư duy hộp đen” sẽ dẫn dắt chúng ta trong hành trình đào sâu vào bộ não của con người để khám phá cách tâm trí đánh giá cũng như phản ứng với sai lầm, thay vì sợ hãi, hoảng loạn hay bao biện cho thất bại, chúng ta có thể sử dụng \"tư duy hộp đen\" như thế nào để chuyển bại thành thắng, trở nên kiên cường và \"lợi hại\" hơn xưa? Hãy tìm đọc những câu chuyện trong \"Tư duy hộp đen\" để tìm ra câu trả lời và biết cách sử dụng thất bại như một yếu tố tất yếu dẫn đến thành công.', 100, 186000, '367827_p94498mimage24471813672.jpg', '2021-11-08 14:58:27'),
(49, 31, 'Ám Ảnh Sợ Xã Hội - Chạy Trốn Hay Đối Mặt', 'Lý Thế Cường', 'Hội chứng sợ xã hội đã trở thành một “căn bệnh của thời đại”.\r\n\r\nNgày nay tuy mật độ dân số trong thành phố dày đặc nhưng con người ngày càng sợ hãi xã giao, họ sẵn sàng lựa chọn ở một mình thay vì qua lại thân thiết với người thân, bạn bè hay đồng nghiệp. Với lý do chính là sợ giao tiếp với người khác, không biết giao tiếp như thế nào, khi cần giao tiếp thì toàn thân cảm thấy căng thẳng, bồn chồn. Lâu dần họ trở nên mặc cảm, tự ti với chính mình.\r\n\r\nCó hàng ngàn nguyên nhân tồn tại khiến con người thích ở một mình, tuy nhiên đây cũng là một hiện tượng khá quan ngại. Đặc biệt, trong Tâm lý học, tình trạng này được nhắc đến với tên gọi - “Hội chứng sợ xã hội”. Hội chứng này thường kéo theo các bệnh tâm lý khác như trầm cảm, rối loạn lo âu xã hội, thậm chí có thể nặng nề tới mức gây ảnh hưởng tới việc đi làm, đi học hoặc trong các hoạt động đời sống hàng ngày.\r\n\r\nViệc tự nhốt mình trong phòng cũng được coi là 1 phương pháp có tác dụng, thế nhưng, tuyệt đối không phải cách giải quyết tối ưu. Dẫu sao một con người cũng không thể nào đoạn tuyệt xã giao với người khác. Vậy nên, cuốn sách “Ám ảnh sợ xã hội - Chạy trốn hay đối mặt” sẽ là giải pháp dành cho những người đã, đang và có thể chưa hiểu rõ về “Hội chứng sợ xã hội”.\r\n\r\nCuốn sách sẽ mang đến cho bạn những cái nhìn tổng quát, kết hợp lý thuyết với thực tế, phân tích sự khác biệt giữa lo âu, lo sợ thông thường với “Hội chứng sợ”. Hy vọng mọi thắc mắc của bạn có thể được làm sáng tỏ. Từ đó, các bạn có thể sẵn sàng bước ra khỏi bức màn khép kín, thành thạo mọi trường hợp xã giao, để cuộc sống bước lên đỉnh cao huy hoàng!', 100, 106000, '367881_p94523m600batrcaaaxh.jpg', '2021-11-08 14:59:23'),
(50, 31, 'Tự Chữa Lành Thông Qua Hiểu Biết Về Khoa Học Tâm Thức', 'Matthew Syed', 'Tự chữa lành thông qua hiểu biết về khoa học tâm thức, cuốn sách được ThS. BS Dương Quỳnh Châu ghi chép những lời giảng của Pradeep Vijay & Navneet Kaur. Cuốn sách sẽ phù hợp với ai đang trên hành trình tìm kiếm sứ mệnh tâm linh của mình trong kiếp này, cách để nhận ra các bài học, những tổn thương cần tự mình chữa lành và những phương pháp để giúp bạn chữa lành.\r\n\r\nCuốn sách được chia làm bốn phần. Phần một, viết về hành trình của linh hồn tại phần này bạn sẽ hiểu được linh hồn của chúng ta là vĩnh cửu, các bước tiến hóa của linh hồn qua các kiếp là như thế nào? Quá trình tạm biệt cơ thể vật lý để bước đến một kế hoạch tái sinh mới sẽ ra sao. Phần hai, về luật nhân quả bạn sẽ hiểu được các dòng năng lượng của nghiệp, những hành động gì thì tạo nghiệp quả tốt và nghiệp quả xấu; các bài học liên quan đến nghiệp, những kế hoạch mà bạn đã định ra trước khi tái sinh có ý nghĩa như thế nào? Phần ba, hệ thống các luân xa của mỗi người với vai trò và sự ảnh hưởng của năng lượng của các luân xa này lên đời sống ra sao, và cách để mỗi người có thể tự cân bằng lại dòng năng lượng ở mỗi luân xa như thế nào. Phần cuối cùng, những hướng dẫn giúp bạn thiền định – khi thiền định sẽ giúp bạn sáng tỏ hơn những bài học mình cần phải học, những nghiệp quả mình cần phải trả, giúp bạn quay trở về bên trong của mình và kết nối với tâm thức cao hơn', 100, 101000, '367821_p94495mimage24471813675.jpg', '2021-11-08 15:00:22'),
(51, 31, 'Thánh Kinh Theo Coco Chanel (Tái Bản 2021)', 'Karen Karbo', 'Thánh Kinh Theo Coco Chanel\r\n\r\nCuốn sách THÁNH KINH THEO COCO CHANEL là câu chuyện về một người phụ nữ gầy gò nhỏ bé, mồ côi cha mẹ, từng làm ca sĩ hát lót trong quán rượu… cùng hành trình từng bước vươn lên trở thành nhà sáng lập của một trong những đế chế thời trang lừng danh bậc nhất.\r\n\r\nHành trình thành công của Coco Chanel ly kỳ và độc đáo y như chính con người bà. Bởi thế, điều duy nhất thú vị hơn thành công và vị thế của Coco Chanel chính là tính cách của bà. Coco là một người đàn bà cực kỳ mâu thuẫn. Bà có thể cùng lúc vừa nồng nàn, cuồng nhiệt, vừa lãnh đạm, kín đáo; bà quyết liệt, rõ ràng nhưng cũng rất giỏi chơi nước đôi; bà chăm chỉ và nỗ lực điên cuồng nhưng lại tôn thờ chủ nghĩa “không gắng gượng”…', 100, 118000, '367844_p94506m195c19a9497c9c9bba5db5d429192a70.jpg', '2021-11-08 15:02:08'),
(52, 32, 'IELTS Từ A Đến Z - Reading', 'Ths. Lưu Minh Hiển', 'Bộ sách IELTS từ A đến Z gồm 03 cuốn READING, WRITING, LISTENING,là sản phẩm do Hệ thống Trung tâm Anh ngữ WISE ENGLISH biên soạn, tổng hợp qua quá trình giảng dạy và tiếp nhận những khó khăn, thách thức mà các bạn luyện thi IELTS thường gặp phải. Sứ mệnh của WISE ENGLIGH là giúp các bạn trẻ Việt Nam thay đổi phương pháp học tiếng Anh theo Ngôn ngữ lập trình tư duy (NLP) để chinh phục ngôn ngữ này một cách nhanh nhất và hiệu quả nhất. Slogan của WISE ENGLISH là “study smarter, not harder”. Chịu trách nhiệm chính là ThS. Lưu Minh Hiển (Thủ khoa Đại học Manchester, Vương quốc Anh).', 100, 169000, '366984_p94098mbachnhieltsaz.jpg', '2021-11-08 15:03:59'),
(53, 32, 'Mind Map 24H English - Giao Tiếp - Học Tiếng Anh Giao Tiếp Thực Chiến Cực Kỳ Hiệu Quả Thông Qua Sơ Đồ Tư Duy', 'Huyền Windy', 'Tự ti, hồi hộp, hay xấu hổ khi phải giao tiếp bằng tiếng Anh?\r\n\r\nMất gốc và hoàn toàn ko biết bắt đầu từ đâu?\r\n\r\nQuá bận rộn để cam kết thời gian học cố định?\r\n\r\nĐã thử nhiều cách học, tham gia nhiều khóa học mà không đem lại kết quả như mong muốn?\r\n\r\nCảm thấy chán nản, nhàm chán, thậm chí căng thẳng, bất lực khi học giao tiếp tiếng Anh?\r\n\r\nVậy thì cuốn sách Mind Map 24h English – Giao Tiếp chính là vị cứu tinh của bạn!\r\n\r\nChỉ sau 30 ngày học cuốn sách, bạn sẽ đạt được kết quả đột phá.\r\n\r\nListening: Khả năng nghe hiểu 70 – 90% nội dung trong giao tiếp hằng ngày với người bản ngữ.\r\n\r\nSpeaking: Nói nhanh, nói chuẩn, nói linh loạt theo từng ngữ cảnh, tự tin bắt chuyện với Tây, làm chủ giao tiếp hàng ngày.\r\n\r\nGrammar: Áp dụng nhuần nhuyễn ~ 300 mẫu câu giao tiếp được sử dụng thực tế nhất trong 24h.\r\n\r\nVocabulary: Nằm lòng hơn 1000 từ vựng phổ biến trong giao tiếp.\r\n\r\nLevel: Trình độ B1 theo khung chuẩn Châu Âu, tương đương 5 IELTS hoặc 550 toeic.\r\n\r\nNắm bắt những cơ hội thăng tiến trong sự nghiệp; làm việc cho những công ty lớn hoặc những tập đoàn đa quốc gia; tăng thu nhập từ 48% – 100%.\r\n\r\nVi vu vòng quanh thế giới, tự do khám phá những miền đất mới trên khắp năm châu.\r\n\r\nTại sao Mindmap giao tiếp 24h có thể đem lại kết quả tuyệt vời như vậy?', 100, 27000, '367168_p94181mimage237455.jpg', '2021-11-08 15:04:58'),
(54, 32, 'Input Funny English Stories Faster - Nạp Thẳng Tiếng Anh Qua Truyện Cười Ngay Hôm Nay', 'The Windy', 'nput Funny English Stories Faster - Nạp Thẳng Tiếng Anh Qua Truyện Cười Ngay Hôm Nay\r\n\r\nBạn đọc thân mến!\r\n\r\nTrong cuộc sống hối hả, nhiều lo toan, muộn phiền, những áp lực đè lên vai làm chúng ta cảm thấy căng\r\n\r\nthẳng. Chính vì thế chúng ta tìm đến cách thức để làm cho cuộc sống trở nên dễ chịu hơn, như đi du lịch, shopping…. và đọc truyện cười. Nụ cười không chỉ là thang thuốc hữu hiệu giúp giải toả mệt nhọc lo âu mà còn là chiếc cầu nối, giúp con người xích lại gần nhau hơn.\r\n\r\nHiểu được tâm lý đó chúng tôi xin ra mắt bạn đọc cuốn: “Input Funny English Stories Faster – Nạp thẳng tiếng Anh qua truyện cười ngay hôm nay”. Cuốn truyện bao gồm 127 mẩu truyện cười song ngữ Anh – Việt được chọn lọc. Nội dung mỗi mẩu mang màu sắc dí dỏm với những tình huống hấp dẫn, thú vị, có hình minh hoạ và tranh biếm hoạ bất ngờ được đan xen xuyên suốt tập truyện. Thêm vào đó có phần giải thích từ vựng, giúp bạn đọc có thể gia tăng vốn từ của mình một cách nhanh chóng và hiệu quả, cũng như bạn có thể học giao tiếp tiếng Anh một cách tự nhiên nhất.\r\n\r\nHơn thế nữa cuốn sách còn được thu âm do người bản ngữ đọc, giúp bạn có thể luyện nghe cũng như phát âm chuẩn xác các từ vựng.\r\n\r\nHy vọng rằng, cuốn truyện sẽ trở thành người bạn nhỏ thân thiết mang lại được những nụ cười giòn giã cho bạn đọc mỗi ngày.\r\n\r\nRất mong nhận được nhiều đóng góp quý báu của bạn đọc gần xa.\r\n\r\nChúc các bạn thành công!\r\n\r\nNội dung cuốn sách bao gồm 127 truyện cười đã được chọn lọc, trong đó mỗi câu truyện bao gồm:\r\n\r\n- Nội dung truyện bằng tiếng Anh\r\n\r\n- Danh sách một số từ mới trong truyện\r\n\r\n- Bài luyện nghe được thu âm bởi người bản ngữ\r\n\r\n- Nội dung truyện bằng tiếng Việt\r\n\r\nKhông chỉ là một cuốn truyện cười thông thường “Input Funny English Stories Faster – Nạp thẳng tiếng Anh qua truyện cười ngay hôm nay” còn là cuốn sách học tiếng Anh khơi nguồn cảm hứng tuyệt vời cho người học, để từ đó giúp chúng ta làm chủ ngôn ngữ này.\r\n\r\nNgoài ra, với những tình tiết khôi hài qua các từng mẩu truyện chúng ta được giải trí sau một ngày căng thẳng, đây là thang thuốc xua đi mọi buồn phiền ưu tư, đồng thời là chiếc cầu nối giúp con người xích lại gần nhau hơn. Thực chẳng còn lý do nào nữa mà chúng ta bỏ qua cuốn sách thú vị này.\r\n\r\nCuốn sách Input Funny English Stories này có gì đặc biệt?\r\n\r\n127 mẩu truyện cười chọn lọc, nội dung dí dỏm, hài hước, hấp dẫn, thú vị có kèm theo tranh minh họa và tranh biếm họa bất ngờ đan xen tạo lôi cuốn cho người đọc.\r\n\r\nLà thang thuốc xua đi mọi buồn phiền ưu tư, đồng thời là chiếc cầu nối giúp hai con người xích lại gần nhau hơn.\r\n\r\nSau mỗi mẩu truyện sẽ có phần từ mới giúp bạn củng cố và tăng thêm vốn từ vựng tiếng Anh cho bản thân.\r\n\r\nTăng thêm kiến thức về ngữ pháp, cách hành văn, câu củ, diễn đạt ý trong tiếng Anh.\r\n\r\nGiới thiệu nhóm tác giả The Windy\r\n\r\nNhóm tác giả The Windy được thành lập với tiền thân ban đầu là một nhóm biên tập viên của công ty sách MCBooks đã tiến hành nghiên cứu, tham khảo nhu cầu thị trường và sáng tạo ra những đầu sách với các phương pháp học tiếng Anh mới lạ. Ngay lập tức The Windy nhận được các thư cảm ơn về sách cũng như các bình luận cảm ơn rất tích cực trên các trang diễn đàn, hoặc các trang sách lớn, và độc giả luôn luôn đón chờ các tác phẩm mới ra của nhóm tác giả The Windy.', 100, 168000, '367004_p94106mz2559375178128139a9b353d4ad4bf81c2e8f68cfd15dd.jpg', '2021-11-08 15:06:04'),
(55, 33, 'Chiêm Tinh Học Ứng Dụng', ' Jake Register', 'Bạn đang tìm cách để trở nên gần gũi hơn với những người trong cuộc sống của mình và hiểu họ ở mức độ sâu hơn?\r\n\r\nTìm hiểu tác động của các chòm sao khi lần lượt ở các vị trí cung Mặt Trời, cung Mặt Trăng và cung Mọc sẽ giúp bạn hiểu hơn về tính cách, suy nghĩ của chính mình cũng như những người xung quanh, từ đó có những ứng xử phù hợp và kết nối sâu sắc hơn với họ.\r\n\r\nChiêm tinh học ứng dụng chứa đầy ắp những thông tin thiên văn học, dưới ngòi bút giản dị của tác giả, trở nên vô cùng sống động và gần gũi. Hãy cùng khám phá các chòm sao và cách chúng tác động lên mỗi người!', 100, 160000, '367829_p94499mimage24471813671.jpg', '2021-11-08 15:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `price_b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(24, 'Sách Ngoại Văn', 'Sách ngoại văn 12'),
(25, 'Sách Blockchain', 'Sách Blockchain'),
(26, 'Sách Kinh Tế', 'Sách Kinh Tế'),
(27, 'Sách Văn Học Trong Nước', 'Sách Văn Học Trong Nước'),
(28, 'Sách Văn Học Nước Ngoài', 'Sách Văn Học Nước Ngoài'),
(29, 'Sách Thường Thức - Đời Sống', 'Sách Thường Thức - Đời Sống'),
(30, 'Sách Thiếu Nhi', 'Sách Thiếu Nhi'),
(31, 'Sách Phát Triển Bản Thân', 'Sách Phát Triển Bản Thân'),
(32, 'Sách Tin Học - Ngoại Ngữ', 'Sách Tin Học - Ngoại Ngữ'),
(33, 'Sách Chuyên Ngành', 'Sách Chuyên Ngành');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `contact`, `email`, `password`, `date_created`) VALUES
(9, 'Vinh Quang ', '320 Đoàn Kết, Vĩnh Phước Nha Trang, Khánh Hòa', '0359518651', 'nhvquangc3tbt@gmail.com', '2248ec6e23a2b850a8b0dec3e1113f85', '2021-11-01'),
(10, 'Nguyễn', 'Khánh Hòa', '1234567890', 'quang.nhv.60cntt@ntu.edu.vn', '2248ec6e23a2b850a8b0dec3e1113f85', '2021-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address_order` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` int(11) NOT NULL,
  `created_day` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `customer_id`, `address_order`, `total_amount`, `created_day`) VALUES
(9, 9, '320 Đoàn Kết, Vĩnh Phước Nha Trang, Khánh Hòa', 298000, '2021-11-08 14:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id_order_list` int(11) NOT NULL,
  `order_id` int(20) NOT NULL,
  `book_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id_order_list`, `order_id`, `book_id`, `qty`, `price`) VALUES
(42, 9, 26, 2, 102000),
(43, 9, 38, 1, 94000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(5, 'admin', 'admin', '0192023a7bbd73250516f069df18b500', 1),
(7, 'quang', 'staff2', '202cb962ac59075b964b07152d234b70', 0),
(8, 'quang', 'staff5', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `fk_books_categories` (`category_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cars_books` (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `kf_orders_customers` (`customer_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id_order_list`),
  ADD KEY `fk_orderlist_books` (`book_id`),
  ADD KEY `fk_orderlist_orders` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id_order_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_books_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_cars_books` FOREIGN KEY (`book_id`) REFERENCES `books` (`id_book`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `kf_orders_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `fk_orderlist_books` FOREIGN KEY (`book_id`) REFERENCES `books` (`id_book`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderlist_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
