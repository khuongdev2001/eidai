/*
Navicat MySQL Data Transfer

Source Server         : erp
Source Server Version : 100424
Source Host           : localhost:3306
Source Database       : eidai_new

Target Server Type    : MYSQL
Target Server Version : 100424
File Encoding         : 65001

Date: 2022-12-27 19:49:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `page_title` varchar(500) DEFAULT NULL,
  `page_content` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `page_slug` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-pages-user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('1', null, '1', 'Danh sách showroom / đại lý', '<table style=\"height: 197px;\" width=\"956\">\r\n<tbody>\r\n<tr>\r\n<td width=\"114\">Hà Nội</td>\r\n<td width=\"443\">LK49, Lô 11, khu dịch vụ Dương Nội, P. Dương Nội, Q. Hà Đông, TP. Hà Nội</td>\r\n<td width=\"242\">Mr Hùng 0977185377\r\n\r\nMr Bình 0869798666</td>\r\n</tr>\r\n<tr>\r\n<td width=\"114\">Đà Nẵng</td>\r\n<td width=\"443\">138 Điện Biên Phủ, P. Chính Gián, Q. Thanh Khê, TP. Đà Nẵng</td>\r\n<td width=\"242\">Mr Sinh 0934056468</td>\r\n</tr>\r\n<tr>\r\n<td width=\"114\">Hồ Chí Minh</td>\r\n<td width=\"443\">42/1 đường số 19, P. Hiệp Bình Chánh, Q. Thủ Đức, TP. Hồ Chí Minh</td>\r\n<td width=\"242\">Mr Định 0986348372</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2022-12-27 13:44:06', '2022-12-27 13:44:08', null, 'danh-sach-showroom-dai-ly');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_title` varchar(500) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `post_slug` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `publish_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `post_content` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-posts-user_id` (`user_id`),
  KEY `idx-posts-category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', null, 'SÀN GỖ EIDAI KHÁNG KHUẨN, KHÁNG VIRUS', '1', 'san-go-eidai-khang-khuan-khang-virus', '1', '2022-12-26 16:11:58', '2022-12-26 16:11:58', '2022-12-26 16:11:58', null, '<span class=\"fontstyle0\">Ngày nay khi nhu cầu về sức khỏe, sạch sẽ về nơi ở ngày càng tăng và để hiện thực hóa một môi trường sống an toàn, đảm bảo hơn thì Công ty TNHH Eidai Việt Nam đã phát triển và cho ra mắt một số sản phẩm sàn gỗ có chức năng kháng khuẩn, kháng virus. Với chức năng này sẽ làm giảm số lượng vi khuẩn, virus bám trên bề mặt sản phẩm đến 99% trong 24 giờ. Chính vì thế khách hàng hoàn toàn yên tâm khi sử dụng sản phẩm sàn gỗ Eidai của chúng tôi.</span>\r\n\r\nSàn gỗ cao cấp EIDAI Nhật Bản là sàn gỗ duy nhất tại Việt Nam đạt tiêu chuẩn kháng khuẩn, kháng virus SIAA\r\n\r\n<img class=\" wp-image-768 aligncenter\" src=\"http://eidai.com.vn/wp-content/uploads/2022/06/Capture1-300x199.png\" alt=\"\" width=\"502\" height=\"333\" />\r\n\r\nSIAA <span class=\"fontstyle0\">(The Society of International sustaining growth for Antimicrobial Articles) </span>là gì ?\r\n\r\n<span class=\"fontstyle0\">SIAA (Hội đồng Công nghệ Sản phẩm Kháng khuẩn) là một tổ chức công nghiệp chứng nhận nhãn hiệu cho 1 doanh nghiệp nào đó gồm các nhà sản xuất, cơ quan kiểm tra kháng sinh của các chất kháng khuẩn, thuốc diệt nấm và các sản phẩm kháng khuẩn, kháng nấm đã được qua xử lý với mục tiêu phổ biến sản phẩm kháng khuẩn,kháng nấm được xử lý thích hợp và an toàn.</span>\r\n\r\n<img class=\" wp-image-760 aligncenter\" src=\"http://eidai.com.vn/wp-content/uploads/2022/06/Capture-300x118.png\" alt=\"\" width=\"468\" height=\"184\" /><img class=\"wp-image-763 aligncenter\" src=\"http://eidai.com.vn/wp-content/uploads/2022/06/Capture4-300x199.png\" alt=\"\" width=\"469\" height=\"311\" />\r\n\r\n<span class=\"fontstyle0\">Tiếp thu nhiều ý kiến không chỉ từ ngành công nghiệp mà còn từ đại diện người tiêu dùng, các chuyên gia, chính phủ, từ đó hội đồng SIAA đã thiết lập các quy tắc về chất lượng và an toàn cần thiết cho các sản phẩm chế biến kháng khuẩn. Nhãn hiệu SIAA là biểu tượng của sự an tâm cho sản phẩm tuân thủ các quy tắc đó.</span>\r\n\r\n&nbsp;\r\n\r\n&nbsp;');
INSERT INTO `posts` VALUES ('2', null, 'Thăng Long WF là đơn vị phân phối chính thức của EIDAI Nhật Bản.', '1', 'thang-long-wf-la-don-vi-phan-phoi-chinh-thuc-cua-eidai-nhat-ban', '1', '2022-12-26 22:25:07', '2022-12-26 16:11:58', '2022-12-26 16:11:58', null, 'Ngày 01/04/2021 Công ty TNHH Gỗ và Nội Thất Thăng Long tiếp tục là đơn vị ủy quyền chính thức của công ty EIDAI Nhật Bản tại Việt Nam phân phối các sản phẩm sàn gỗ chính hãng tới Quý khách hàng.\r\n\r\nBuổi làm việc giữa ban lãnh đạo EIDAI Việt Nam và ban giám đốc của Thăng Long WF.\r\n\r\n<img class=\" wp-image-597 aligncenter\" src=\"http://eidai.com.vn/wp-content/uploads/2021/06/z2545654428252_c506d50648086be45f672afea51a4d75-300x225.jpg\" alt=\"\" width=\"516\" height=\"387\" />\r\n\r\nMr Morita Shinji - Tổng giám đốc EIDAI Việt Nam trao giấy chứng nhận cho Mr Hùng Trần - Giám đốc công ty Thăng Long.\r\n\r\n<img class=\"alignnone wp-image-598 aligncenter\" src=\"http://eidai.com.vn/wp-content/uploads/2021/06/z2545654323655_1796b1fe98aca1626b281028404c38e0-300x225.jpg\" alt=\"\" width=\"517\" height=\"387\" />\r\n\r\n<img class=\" wp-image-602 aligncenter\" src=\"http://eidai.com.vn/wp-content/uploads/2021/06/Capture-200x300.png\" alt=\"\" width=\"308\" height=\"462\" />\r\n\r\nChúng tôi luôn cam kết mang đến Quý khách hàng sản phẩm chất lượng nhất theo tiêu chuẩn khắt khe của Nhật Bản (JAS, F****, 4VOC). Hàng hóa cung cấp tới Quý khách hàng đầy đủ giấy tờ nhập khẩu và chứng nhận chất lượng của hãng EIDAI.\r\n\r\n&nbsp;');
INSERT INTO `posts` VALUES ('3', null, 'Khai trương chi nhánh Thành Phố Đà Nẵng.', '1', 'khai-truong-chi-nhanh-thanh-pho-da-nang', '1', '2022-12-26 22:14:27', '2022-12-26 16:11:58', '2022-12-26 16:11:58', null, 'Với nỗ lực phục vụ quí khách hàng được tốt hơn. Chúng tôi liên tục mở rộng hệ thống phân phối trên toàn quốc.\r\n\r\nNgày 11/07/2020 vừa qua công ty đã khai trương đại lý chi nhánh tại TP. Đà Nẵng. Địa chỉ : 138 Điện Biên Phủ, P. Chính Gián, Q. Thanh Khê.\r\n\r\n<img class=\"wp-image-458 alignleft\" src=\"http://eidai.com.vn/wp-content/uploads/2020/07/z1962503021745_b31778abe462becd878c585130cafbcc-225x300.jpg\" alt=\"\" width=\"369\" height=\"493\" /><img class=\"alignnone wp-image-460\" src=\"http://eidai.com.vn/wp-content/uploads/2020/07/z1962501259030_16ac0d9d19c78620495a08bd4821ed25-225x300.jpg\" alt=\"\" width=\"376\" height=\"502\" />\r\n\r\nNhân dịp khai trương chi nhánh mới công ty có áp dụng chương trình ưu đãi giảm giá trên tất cả các dòng sản phẩm tới hết ngày 31/07/2020. Kính mời quí khách hàng tới tham quan và xem sản phẩm của EIDAI.\r\n\r\nChi tiết liên hệ tại chi nhánh Đà Nẵng : Mr Sinh 0934 056 468\r\n\r\nTrân trọng kính mời và cảm ơn quí khách hàng.\r\n\r\n&nbsp;\r\n\r\n&nbsp;\r\n\r\n&nbsp;');
INSERT INTO `posts` VALUES ('4', null, 'Tiêu chuẩn chất lượng của sàn gỗ cao cấp EIDAI', '1', 'tieu-chuan-chat-luong-cua-san-go-cao-cap-eidai', '1', '2022-12-26 16:11:58', '2022-12-26 16:11:58', '2022-12-26 16:11:58', null, 'SÀN GỖ EIDAI NHẬT BẢN ĐƯỢC QUẢN LÝ BẰNG TIÊU CHUẨN GÌ ?\r\n\r\nTrong bài viết này. Chúng tôi sẽ nói về các bộ tiêu chuẩn mà sàn gỗ của EIDAI phải đạt trước khi được đưa tới người tiêu dùng.\r\n\r\n<img class=\"alignnone wp-image-435\" src=\"http://eidai.com.vn/wp-content/uploads/2020/06/89437573_3072787989420798_7215051608487362560_n-300x289.png\" alt=\"\" width=\"500\" height=\"481\" />\r\n\r\n1. Là sàn phẩm của Nhật nên trước tiên EIDAI phải đạt tiêu chuẩn chất lượng của Nhật. Sản phẩm là sàn gỗ nên có hai bộ tiêu chuẩn đó là tiêu chuẩn JAS và tiêu chuẩn F****.\r\n<ul>\r\n 	<li>JAS : Japanese Agricultural Standards System<span class=\"text_exposed_show\">. Đây là tiêu chuẩn hữu cơ nông nghiệp Nhật Bản. Sàn gỗ thuộc danh mục sản phẩm Nông-lâm-sản chế biến. Nên chịu sự điều chỉnh của tiêu chuẩn này.</span></li>\r\n 	<li>F**** : Đây là tiêu chuẩn cho sự phát thải Formaldehyde (chất gây ung thư ) của sơn hoặc chất dính gỗ hoặc vật liệu sợi.\r\n+ F* : hàm lượng phát thải &gt; 0.12 mg/m2h\r\n+ F** : hàm lượng phát thải &lt; / = 0.12 mg/m2h\r\n+ F*** : hàm lượng phát thải = 0.005 mg/m2h\r\n+ F**** : hàm lượng phát thải &lt; 0.005 mg/m2h\r\nSàn gỗ cao cấp của EIDAI đạt tiêu chuẩn cao nhất F****. Không ảnh hưởng tới sức khỏe con người.</li>\r\n</ul>\r\n2. Sàn gỗ EIDAI bán tại thị trường Việt Nam thì ngoài tiêu chuẩn Nhật phải đạt thì còn phải đạt tiêu chuẩn của Việt Nam TCVN. Đó là tiêu chuẩn VOC . TCVN 10370-1:2014 (ISO 11890-1 : 2007) về Sơn và vecni - Xác định hàm lượng hợp chất hữu cơ dễ bay hơi.\r\n\r\nChúng tôi tin với sự quản lý chặt chẽ về tiêu chuẩn chất lượng cao. Sàn gỗ EIDAI hoàn toàn an toàn với sức khỏe của quí khách hàng.');
INSERT INTO `posts` VALUES ('5', null, 'Lễ ký kết hợp tác', '1', 'chao-moi-nguoi', '1', '2022-12-26 16:11:58', '2022-12-26 16:11:58', '2022-12-26 16:11:58', null, '<!-- wp:paragraph -->\r\n<p>Ngày 24/05/2019 Công ty TNHH Gỗ và Nội Thất Thăng Long trở thành đối tác chính thức của công ty EIDAI Nhật Bản tại Việt Nam. Công ty Thăng Long trở thành đối tác chính thức phân phối các sản phẩm sàn gỗ cao cấp của tập đoàn EIDAI Nhật Bản tại Việt Nam. Buổi lễ ký kết được diễn ra tại nhà máy EIDAI.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\"} -->\r\n<p class=\"has-text-align-center\"><img class=\"wp-image-407\" style=\"width: 500px;\" src=\"http://eidai.com.vn/wp-content/uploads/2020/05/87320161_3033814806651450_536638730362945536_o.jpg\" alt=\"\" /></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Hy vọng sự hợp tác này sẽ mang tới cho quí khách hàng sản phẩm sàn gỗ cao cấp nhất. Các sản phẩm được kiểm soát chặt chẽ bằng tiêu chuẩn Nhật Bản JAS &amp; F**** và TCVN</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->');

-- ----------------------------
-- Table structure for post_categories
-- ----------------------------
DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_title` varchar(500) DEFAULT NULL,
  `category_slug` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-post_categories_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of post_categories
-- ----------------------------
INSERT INTO `post_categories` VALUES ('1', null, 'Hihi Tin tức & Bài viết', 'tin-tuc-and-bai-viet', '1', '2022-12-26 16:04:36', '2022-12-26 16:04:36', null);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_title` varchar(500) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_slug` varchar(500) DEFAULT NULL,
  `product_excerpt` text DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `price` double DEFAULT 0,
  `old_price` double DEFAULT 0,
  `status` int(11) DEFAULT NULL,
  `publish_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-products-user_id` (`user_id`),
  KEY `idx-products-category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', null, 'Sàn gỗ xương cá – gỗ tự nhiên nguyên khối sồi đỏ biến tính (MKHV-TOA-C)', '1', 'san-go-xuong-ca-go-tu-nhien-soi-do-bien-tinh-mkhv-toa-c', '<strong>Sản phẩm hoàn thành</strong>\r\n\r\nKích thước ( dày x rộng x dài ): 12 x 90 x 600 mm\r\n\r\nBề mặt sản phẩm : Sơn bóng – kháng khuẩn – bóng mịn\r\n\r\nTiêu chuẩn chất lượng : JAS, F****, VOC thấp theo tiêu chuẩn 4VOC\r\n\r\nLoại gỗ : gỗ tự nhiên nguyên khối được xử lý nhiệt\r\n\r\nSố lượng trong một kiện : 1 hộp/30 tấm/1.62m2', null, '2090000', '0', '1', '2022-12-27 16:40:40', '2022-12-27 16:40:44', '2022-12-27 16:40:46', null);

-- ----------------------------
-- Table structure for product_categories
-- ----------------------------
DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_name` varchar(500) DEFAULT NULL,
  `category_slug` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-product_categories_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of product_categories
-- ----------------------------
INSERT INTO `product_categories` VALUES ('1', null, 'SÀN GỖ TỰ NHIÊN', 'san-go-tu-nhien', '1', '2022-12-27 16:38:55', '2022-12-27 16:38:52', null);

-- ----------------------------
-- Table structure for product_properties
-- ----------------------------
DROP TABLE IF EXISTS `product_properties`;
CREATE TABLE `product_properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `property_value` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-product_properties-user_id` (`user_id`),
  KEY `idx-product_properties-product_id` (`product_id`),
  KEY `idx-product_properties-property_id` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of product_properties
-- ----------------------------

-- ----------------------------
-- Table structure for properties
-- ----------------------------
DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `property_name` varchar(500) DEFAULT NULL,
  `property_slug` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-properties-user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of properties
-- ----------------------------
INSERT INTO `properties` VALUES ('1', null, 'Kiểu Lát', 'kieu-lat', '1', '2022-12-27 16:18:29', '2022-12-27 16:18:24', null);
INSERT INTO `properties` VALUES ('2', null, 'Loại Sàn', 'loai-san', '1', '2022-12-27 16:18:40', '2022-12-27 16:18:44', null);
INSERT INTO `properties` VALUES ('3', null, 'Loại gỗ', 'loai-go', '1', '2022-12-27 16:19:59', '2022-12-27 16:20:04', null);

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `link_to` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-sliders-user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of sliders
-- ----------------------------

-- ----------------------------
-- Table structure for system_db_migration
-- ----------------------------
DROP TABLE IF EXISTS `system_db_migration`;
CREATE TABLE `system_db_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of system_db_migration
-- ----------------------------
INSERT INTO `system_db_migration` VALUES ('m000000_000000_base', '1671890038');
INSERT INTO `system_db_migration` VALUES ('m221224_133613_create_table_product_categories', '1671890039');
INSERT INTO `system_db_migration` VALUES ('m221224_133626_create_table_products', '1671979368');
INSERT INTO `system_db_migration` VALUES ('m221224_133639_create_table_post_categories', '1671979368');
INSERT INTO `system_db_migration` VALUES ('m221224_133643_create_table_posts', '1671979368');
INSERT INTO `system_db_migration` VALUES ('m221224_133651_create_table_pages', '1671979368');
INSERT INTO `system_db_migration` VALUES ('m221224_140423_create_table_sliders', '1671979368');
INSERT INTO `system_db_migration` VALUES ('m221226_151049_update_table_posts', '1672067510');
INSERT INTO `system_db_migration` VALUES ('m221227_075100_update_table_pages', '1672128485');
INSERT INTO `system_db_migration` VALUES ('m221227_090421_create_table_properties', '1672132669');
INSERT INTO `system_db_migration` VALUES ('m221227_091040_create_table_product_properties', '1672132670');
INSERT INTO `system_db_migration` VALUES ('m221227_093610_update_table_product_categories', '1672133901');
