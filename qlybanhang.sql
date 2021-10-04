/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : qlybanhang

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 21/05/2021 10:04:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tendangnhap` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `matkhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `manhom` int(11) NULL DEFAULT NULL,
  `so_dien_thoai` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `chuc_vu` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `avt` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'Administrator', 'admin', '$2y$10$LHUpsRqAWI7lZNvluEntueFThzb8J3WLKDCS8VPu28UPPM8AC3JBi', 1, '0909488390', '123 đường 15 , quận 7 thành phố hồ chí minh', NULL, 'quantri/ckfolder/images/admin-images.png', NULL, 1, '2021-04-24 07:38:27', '2021-05-06 09:07:30');
INSERT INTO `admins` VALUES (8, 'Quản lý bán hàng', 'admin2', '$2y$10$Va4T6GFDkG6qIHLYR.IWZuJZf1tuK1xocURf0/5WkKGemd/IOfDlm', 2, '12312312312', '123 thanh pho ho chi minh', NULL, 'quantri/ckfolder/images/categories/img_6102.jpg', NULL, 2, '2021-04-24 07:38:27', '2021-05-06 09:18:29');
INSERT INTO `admins` VALUES (29, 'quan', 'quan', '$2y$10$hVlV72CMdwAIUzL.YSCg..livu3EQI1ULJK0NjTYS9ekP7qxjVgiu', 2, '12312312312', '123 thanh pho ho chi minh', NULL, 'quantri/ckfolder/images/categories/admin-images.png', NULL, 1, '2021-05-05 08:04:03', '2021-05-06 09:18:01');
INSERT INTO `admins` VALUES (25, 'asd', 'asdsadsd', '524661fe1956e3e94c056720eaa61309', 1, NULL, NULL, NULL, '', NULL, 0, '2021-05-01 12:57:02', NULL);
INSERT INTO `admins` VALUES (28, 'dfsdfdsf', 'sdfsdfsdf', '$2y$10$zPmamfSVRHRRwV6P/6MMieS21jId5flVG/RQ2tSlYTe0d1LIkHk/q', 2, NULL, NULL, NULL, 'quantri/ckfolder/images/categories/cropper.jpg', NULL, 0, '2021-05-05 07:57:31', NULL);
INSERT INTO `admins` VALUES (27, 'them', 'fdsfsd', '9a54dbc4bdd16c1a19804751d113c44b', 1, NULL, NULL, NULL, 'quantri/ckfolder/images/categories/img_6098.jpg', NULL, 0, '2021-05-01 01:10:21', NULL);
INSERT INTO `admins` VALUES (31, 'sdfdsfds', 'sdfsdf', '$2y$10$0YTuA3KPB19po3MfPzA09.djS4Oxqof6GcXDwpxxJ8bGjd5gvHWO2', 1, '24242342343', 'sdfsdf', NULL, 'quantri/ckfolder/images/categories/admin-images.png', NULL, 1, '2021-05-21 05:02:03', NULL);

-- ----------------------------
-- Table structure for email_newsletters
-- ----------------------------
DROP TABLE IF EXISTS `email_newsletters`;
CREATE TABLE `email_newsletters`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `subject` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `message` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of email_newsletters
-- ----------------------------
INSERT INTO `email_newsletters` VALUES (4, 'quan', 'quandn36@gmail.com', 'lien he quang cao', 'toi muon phat trien quang cao', '2021-05-08 01:09:53', '2021-05-08 01:09:53', NULL);
INSERT INTO `email_newsletters` VALUES (5, 'user1', 'quandn36@gmail.com', 'chu de 123', 'chu de 123', '2021-05-08 01:21:06', '2021-05-08 01:21:06', NULL);

-- ----------------------------
-- Table structure for functions
-- ----------------------------
DROP TABLE IF EXISTS `functions`;
CREATE TABLE `functions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `lienket` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `macha` int(11) NULL DEFAULT 0,
  `hienthimenu` int(11) NULL DEFAULT 1,
  `icon_menu` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `allow` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 76 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of functions
-- ----------------------------
INSERT INTO `functions` VALUES (3, 'Quản lý quản trị', '#', 0, 1, '<i class=\"fa fa-user\" aria-hidden=\"true\"></i>', 1, 0, '2021-04-28 13:59:06', NULL);
INSERT INTO `functions` VALUES (4, 'Thêm quản trị', 'index.php?controller=admin&action=create', 3, 1, '', 1, 0, '2021-04-28 13:59:20', NULL);
INSERT INTO `functions` VALUES (5, 'Sửa quản trị', 'index.php?controller=admin&action=edit', 3, 0, NULL, 1, 0, '2021-04-28 13:48:21', NULL);
INSERT INTO `functions` VALUES (6, 'Lưu thêm quản trị', 'index.php?controller=admin&action=store', 3, 0, NULL, 1, 0, '2021-04-28 13:48:26', NULL);
INSERT INTO `functions` VALUES (7, 'Lưu sửa quản trị', 'index.php?controller=admin&action=update', 3, 0, NULL, 1, 0, '2021-04-28 13:48:28', NULL);
INSERT INTO `functions` VALUES (8, 'Xoá quản trị', 'index.php?controller=admin&action=delete', 3, 0, NULL, 1, 0, '2021-04-28 13:48:31', NULL);
INSERT INTO `functions` VALUES (9, 'Danh sách quản trị', 'index.php?controller=admin&action=index', 3, 1, NULL, 1, 0, '2021-05-01 20:24:49', NULL);
INSERT INTO `functions` VALUES (10, 'Quyền đăng nhập', 'index.php?controller=admin&action=login', 3, 1, NULL, 1, 1, '2021-04-28 13:08:51', NULL);
INSERT INTO `functions` VALUES (11, 'Quyền đăng xuất', 'index.php?controller=admin&action=logout', 3, 1, NULL, 1, 1, '2021-04-28 21:48:19', NULL);
INSERT INTO `functions` VALUES (12, 'Quản lý sản phẩm', '#', 0, 1, '<i class=\"fa fa-product-hunt\"></i>', 1, 0, '2021-04-28 13:59:32', NULL);
INSERT INTO `functions` VALUES (13, 'Thêm sản phẩm', 'index.php?controller=sanpham&action=create', 12, 1, NULL, 1, 0, '2021-04-28 13:08:51', NULL);
INSERT INTO `functions` VALUES (14, 'Sửa sản phẩm', 'index.php?controller=sanpham&action=edit', 12, 0, NULL, 1, 0, '2021-04-28 13:48:59', NULL);
INSERT INTO `functions` VALUES (15, 'Lưu thêm sản phẩm', 'index.php?controller=sanpham&action=store', 12, 0, NULL, 1, 0, '2021-04-28 13:49:00', NULL);
INSERT INTO `functions` VALUES (16, 'Lưu sửa sản phẩm', 'index.php?controller=sanpham&action=update', 12, 0, NULL, 1, 0, '2021-04-28 13:49:01', NULL);
INSERT INTO `functions` VALUES (17, 'Xoá sản phẩm', 'index.php?controller=sanpham&action=delete', 12, 0, NULL, 1, 0, '2021-04-28 13:49:01', NULL);
INSERT INTO `functions` VALUES (18, 'Danh sách sản phẩm', 'index.php?controller=sanpham&action=index', 12, 1, NULL, 1, 0, '2021-05-01 20:24:56', NULL);
INSERT INTO `functions` VALUES (19, 'Quản lý khách hàng', '#', 0, 1, '<i class=\"fa fa-user\" aria-hidden=\"true\"></i>', 1, 0, '2021-04-28 14:00:02', NULL);
INSERT INTO `functions` VALUES (20, 'Thêm khách hàng', 'index.php?controller=user&action=create', 19, 1, NULL, 1, 0, '2021-04-28 13:21:33', NULL);
INSERT INTO `functions` VALUES (21, 'Sửa khách hàng', 'index.php?controller=user&action=edit', 19, 0, NULL, 1, 0, '2021-04-28 13:49:03', NULL);
INSERT INTO `functions` VALUES (22, 'Lưu thêm khách hàng', 'index.php?controller=user&action=store', 19, 0, NULL, 1, 0, '2021-04-28 13:49:04', NULL);
INSERT INTO `functions` VALUES (23, 'Lưu sửa khách hàng', 'index.php?controller=user&action=update', 19, 0, NULL, 1, 0, '2021-04-28 13:49:04', NULL);
INSERT INTO `functions` VALUES (24, 'Xoá khách hàng', 'index.php?controller=user&action=delete', 19, 0, NULL, 1, 0, '2021-04-28 13:49:05', NULL);
INSERT INTO `functions` VALUES (25, 'Danh sách khách hàng', 'index.php?controller=user&action=index', 19, 1, NULL, 1, 0, '2021-05-01 20:25:02', NULL);
INSERT INTO `functions` VALUES (26, 'Quản lý đơn hàng', '#', 0, 1, '<i class=\"fa fa-archive\" aria-hidden=\"true\"></i>', 1, 0, '2021-04-28 14:01:39', NULL);
INSERT INTO `functions` VALUES (27, 'Sửa đơn hàng', 'index.php?controller=order&action=edit', 26, 0, NULL, 1, 0, '2021-04-28 13:49:10', NULL);
INSERT INTO `functions` VALUES (28, 'Lưu đơn hàng', 'index.php?controller=order&action=update', 26, 0, NULL, 1, 0, '2021-04-28 13:49:12', NULL);
INSERT INTO `functions` VALUES (29, 'Xoá đơn hàng', 'index.php?controller=order&action=delete', 26, 0, NULL, 1, 0, '2021-04-28 13:49:13', NULL);
INSERT INTO `functions` VALUES (30, 'Danh sách đơn hàng', 'index.php?controller=order&action=index', 26, 1, NULL, 1, 0, '2021-05-01 20:25:08', NULL);
INSERT INTO `functions` VALUES (31, 'Quản lý nhà cung cấp', '#', 0, 1, '<i class=\"fa fa-truck\" aria-hidden=\"true\"></i>', 1, 0, '2021-04-28 13:59:38', NULL);
INSERT INTO `functions` VALUES (32, 'Thêm nhà cung cấp', 'index.php?controller=nhacungcap&action=create', 31, 1, NULL, 1, 0, '2021-04-28 13:25:18', NULL);
INSERT INTO `functions` VALUES (33, 'Sửa nhà cung cấp', 'index.php?controller=nhacungcap&action=edit', 31, 0, NULL, 1, 0, '2021-04-28 13:49:19', NULL);
INSERT INTO `functions` VALUES (34, 'Lưu thêm nhà cung cấp', 'index.php?controller=nhacungcap&action=store', 31, 0, NULL, 1, 0, '2021-04-28 13:49:20', NULL);
INSERT INTO `functions` VALUES (35, 'Lưu sửa nhà cung cấp', 'index.php?controller=nhacungcap&action=update', 31, 0, NULL, 1, 0, '2021-04-28 13:49:21', NULL);
INSERT INTO `functions` VALUES (36, 'Xoá nhà cung cấp', 'index.php?controller=nhacungcap&action=delete', 31, 0, NULL, 1, 0, '2021-04-28 13:49:22', NULL);
INSERT INTO `functions` VALUES (37, 'Danh sách nhà cung cấp', 'index.php?controller=nhacungcap&action=index', 31, 1, NULL, 1, 0, '2021-05-01 20:09:40', NULL);
INSERT INTO `functions` VALUES (38, 'Quản lý nhóm quản trị', '#', 0, 1, '<i class=\"fa fa-users\" aria-hidden=\"true\"></i>', 1, 0, '2021-04-28 14:00:18', NULL);
INSERT INTO `functions` VALUES (39, 'Thêm nhóm quản trị', 'index.php?controller=groupadmin&action=create', 38, 1, NULL, 1, 0, '2021-04-28 13:27:08', NULL);
INSERT INTO `functions` VALUES (40, 'Sửa nhóm quản trị', 'index.php?controller=groupadmin&action=edit', 38, 0, NULL, 1, 0, '2021-04-28 13:49:29', NULL);
INSERT INTO `functions` VALUES (41, 'Lưu thêm nhóm quản trị', 'index.php?controller=groupadmin&action=store', 38, 0, NULL, 1, 0, '2021-04-28 13:49:30', NULL);
INSERT INTO `functions` VALUES (42, 'Lưu sửa nhóm quản trị', 'index.php?controller=groupadmin&action=update', 38, 0, NULL, 1, 0, '2021-04-28 13:49:30', NULL);
INSERT INTO `functions` VALUES (43, 'Xoá nhóm quản trị', 'index.php?controller=groupadmin&action=delete', 38, 0, NULL, 1, 0, '2021-04-28 13:49:32', NULL);
INSERT INTO `functions` VALUES (44, 'Danh sách nhóm quản trị', 'index.php?controller=groupadmin&action=index', 38, 1, NULL, 1, 0, '2021-05-01 20:25:17', NULL);
INSERT INTO `functions` VALUES (45, 'Quản lý loại sản phẩm', '#', 0, 1, '<i class=\"fa fa-snapchat-square\" aria-hidden=\"true\"></i>', 1, 0, '2021-04-28 14:01:08', NULL);
INSERT INTO `functions` VALUES (46, 'Thêm loại sản phẩm', 'index.php?controller=typeproduct&action=create', 45, 1, NULL, 1, 0, '2021-04-28 13:29:15', NULL);
INSERT INTO `functions` VALUES (47, 'Sửa loại sản phẩm', 'index.php?controller=typeproduct&action=edit', 45, 0, NULL, 1, 0, '2021-04-28 13:49:34', NULL);
INSERT INTO `functions` VALUES (48, 'Lưu thêm loại sản phẩm', 'index.php?controller=typeproduct&action=store', 45, 0, NULL, 1, 0, '2021-04-28 13:49:35', NULL);
INSERT INTO `functions` VALUES (49, 'Lưu sửa loại sản phẩm', 'index.php?controller=typeproduct&action=update', 45, 0, NULL, 1, 0, '2021-04-28 13:49:36', NULL);
INSERT INTO `functions` VALUES (50, 'Xoá loại sản phẩm', 'index.php?controller=typeproduct&action=delete', 45, 0, NULL, 1, 0, '2021-04-28 13:49:41', NULL);
INSERT INTO `functions` VALUES (51, 'Danh sách loại sản phẩm', 'index.php?controller=typeproduct&action=index', 45, 1, NULL, 1, 0, '2021-05-01 20:25:33', NULL);
INSERT INTO `functions` VALUES (52, 'Quản lý phân quyền', '#', 0, 1, '<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>', 1, 0, '2021-05-01 08:39:58', NULL);
INSERT INTO `functions` VALUES (53, 'Cấp quyền', 'index.php?controller=role&action=createrole', 52, 0, NULL, 1, 0, '2021-04-28 23:57:48', NULL);
INSERT INTO `functions` VALUES (54, 'Lưu quyền', 'index.php?controller=role&action=setrole', 52, 0, NULL, 1, 0, '2021-04-28 13:50:08', NULL);
INSERT INTO `functions` VALUES (55, 'Quản lý chi tiết hoá đơn', '#', 0, 0, NULL, 1, 0, '2021-04-28 13:52:49', NULL);
INSERT INTO `functions` VALUES (56, 'Chi tiết danh sách hoá đơn', 'index.php?controller=orderdetail&action=index', 55, 0, NULL, 1, 0, '2021-05-01 20:26:05', NULL);
INSERT INTO `functions` VALUES (57, 'Danh sách phân quyền', 'index.php?controller=role&action=index', 52, 1, NULL, 1, 0, '2021-04-28 13:50:52', NULL);
INSERT INTO `functions` VALUES (58, 'Thông tin admin', 'index.php?controller=admin&action=profile', 0, 0, NULL, 1, 1, '2021-04-28 13:50:52', NULL);
INSERT INTO `functions` VALUES (60, 'Khôi phục', 'index.php?controller=admin&action=restore', 3, 0, NULL, 1, 0, '2021-04-30 11:36:55', NULL);
INSERT INTO `functions` VALUES (61, 'Xoá vĩnh viễn', 'index.php?controller=admin&action=permanently', 3, 0, NULL, 1, 0, '2021-04-30 11:36:54', NULL);
INSERT INTO `functions` VALUES (62, 'Khôi phục', 'index.php?controller=sanpham&action=restore', 12, 0, NULL, 1, 0, '2021-04-30 23:51:37', NULL);
INSERT INTO `functions` VALUES (63, 'Xoá vĩnh viễn', 'index.php?controller=sanpham&action=permanently', 12, 0, NULL, 1, 0, '2021-04-30 23:51:39', NULL);
INSERT INTO `functions` VALUES (64, 'Khôi phục', 'index.php?controller=user&action=restore', 3, 0, NULL, 1, 0, '2021-05-01 00:00:04', NULL);
INSERT INTO `functions` VALUES (65, 'Xoá vĩnh viễn', 'index.php?controller=user&action=permanently', 3, 0, NULL, 1, 0, '2021-05-01 00:00:10', NULL);
INSERT INTO `functions` VALUES (66, 'Khôi phục', 'index.php?controller=typeproduct&action=restore', 45, 0, NULL, 1, 0, '2021-05-01 00:53:15', NULL);
INSERT INTO `functions` VALUES (67, 'Xoá vĩnh viễn', 'index.php?controller=typeproduct&action=permanently', 45, 0, NULL, 1, 0, '2021-05-01 00:53:22', NULL);
INSERT INTO `functions` VALUES (68, 'Khôi phục', 'index.php?controller=groupadmin&action=restore', 38, 0, NULL, 1, 0, '2021-05-01 01:00:39', NULL);
INSERT INTO `functions` VALUES (69, 'Xoá vĩnh viễn', 'index.php?controller=groupadmin&action=permanently', 38, 0, NULL, 1, 0, '2021-05-01 01:01:23', NULL);
INSERT INTO `functions` VALUES (70, 'Đặt lại mật khẩu', 'index.php?controller=admin&action=reset_password', 3, 0, NULL, 1, 0, '2021-05-05 20:14:32', NULL);
INSERT INTO `functions` VALUES (71, 'Đổi mật khẩu', 'index.php?controller=admin&action=change_password', 3, 1, NULL, 1, 1, '2021-05-05 18:11:02', NULL);
INSERT INTO `functions` VALUES (72, 'Quản lý hệ thống', '#', 0, 0, NULL, 1, 1, '2021-05-05 20:13:14', NULL);
INSERT INTO `functions` VALUES (73, 'Tổng quan', 'index.php?controller=hethong&action=index', 72, 0, NULL, 1, 1, '2021-05-05 20:13:18', NULL);

-- ----------------------------
-- Table structure for groupadmins
-- ----------------------------
DROP TABLE IF EXISTS `groupadmins`;
CREATE TABLE `groupadmins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of groupadmins
-- ----------------------------
INSERT INTO `groupadmins` VALUES (1, 'Quản trị cấp cao', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Quản trị c&acirc;́p cao</body>\r\n</html>', 'quantri/ckfolder/images/categories/admin-images.png', 1, '2021-01-15 00:00:00', '2021-05-01 06:47:47');
INSERT INTO `groupadmins` VALUES (2, 'Quản trị bán hàng', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Quản trị bán hàng</body>\r\n</html>', 'quantri/ckfolder/images/categories/admin-images.png', 1, '2021-01-15 00:00:00', '2021-05-01 06:47:58');
INSERT INTO `groupadmins` VALUES (7, 'qweqweqweasdasdsad', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>ewrewrwerweredsaasdsadsadasdsdsad</body>\r\n</html>', '', 0, '2021-04-30 08:24:12', NULL);

-- ----------------------------
-- Table structure for order_details
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `madonhang` int(11) NULL DEFAULT NULL,
  `masanpham` int(11) NULL DEFAULT NULL,
  `soluong` int(11) NULL DEFAULT NULL,
  `gia` float NULL DEFAULT NULL,
  `giamgia` float NULL DEFAULT NULL,
  `trangthai` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 144 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of order_details
-- ----------------------------
INSERT INTO `order_details` VALUES (40, 39, 1, 1, 12490000, 0, 1, '2021-05-09 16:07:03', '2021-05-09 16:07:03');
INSERT INTO `order_details` VALUES (39, 39, 6, 1, 6490000, 0, 1, '2021-05-09 16:07:03', '2021-05-09 16:07:03');
INSERT INTO `order_details` VALUES (38, 39, 2, 8, 7990000, 0, 1, '2021-05-09 16:07:03', '2021-05-09 16:07:03');
INSERT INTO `order_details` VALUES (37, 39, 5, 2, 7490000, 0, 1, '2021-05-09 16:07:03', '2021-05-09 16:07:03');
INSERT INTO `order_details` VALUES (36, 39, 4, 4, 7999000, 0, 1, '2021-05-09 16:07:03', '2021-05-09 16:07:03');
INSERT INTO `order_details` VALUES (51, 47, 2, 1, 7990000, 0, 1, '2021-05-15 12:30:56', '2021-05-15 12:30:56');
INSERT INTO `order_details` VALUES (50, 47, 62, 1, 123, 0, 1, '2021-05-15 12:30:55', '2021-05-15 12:30:55');
INSERT INTO `order_details` VALUES (49, 46, 2, 1, 7990000, 0, 1, '2021-05-09 16:45:25', '2021-05-09 16:45:25');
INSERT INTO `order_details` VALUES (48, 45, 7, 1, 6690000, 0, 1, '2021-05-09 16:39:15', '2021-05-09 16:39:15');
INSERT INTO `order_details` VALUES (47, 44, 1, 1, 12490000, 0, 1, '2021-05-09 16:37:19', '2021-05-09 16:37:19');
INSERT INTO `order_details` VALUES (46, 43, 2, 1, 7990000, 0, 1, '2021-05-09 16:34:36', '2021-05-09 16:34:36');
INSERT INTO `order_details` VALUES (45, 42, 7, 1, 6690000, 0, 1, '2021-05-09 16:32:48', '2021-05-09 16:32:48');
INSERT INTO `order_details` VALUES (44, 41, 1, 1, 12490000, 0, 1, '2021-05-09 16:31:28', '2021-05-09 16:31:28');
INSERT INTO `order_details` VALUES (84, 66, 4, 1, 7999000, 0, 1, '2021-05-15 13:58:32', '2021-05-15 13:58:32');
INSERT INTO `order_details` VALUES (83, 65, 2, 1, 7990000, 0, 1, '2021-05-15 13:58:07', '2021-05-15 13:58:07');
INSERT INTO `order_details` VALUES (82, 65, 4, 1, 7999000, 0, 1, '2021-05-15 13:58:07', '2021-05-15 13:58:07');
INSERT INTO `order_details` VALUES (81, 64, 2, 1, 7990000, 0, 1, '2021-05-15 13:57:06', '2021-05-15 13:57:06');
INSERT INTO `order_details` VALUES (80, 64, 4, 1, 7999000, 0, 1, '2021-05-15 13:57:06', '2021-05-15 13:57:06');
INSERT INTO `order_details` VALUES (79, 63, 2, 1, 7990000, 0, 1, '2021-05-15 13:56:52', '2021-05-15 13:56:52');
INSERT INTO `order_details` VALUES (78, 63, 4, 1, 7999000, 0, 1, '2021-05-15 13:56:52', '2021-05-15 13:56:52');
INSERT INTO `order_details` VALUES (77, 62, 2, 1, 7990000, 0, 1, '2021-05-15 13:56:10', '2021-05-15 13:56:10');
INSERT INTO `order_details` VALUES (76, 62, 4, 1, 7999000, 0, 1, '2021-05-15 13:56:10', '2021-05-15 13:56:10');
INSERT INTO `order_details` VALUES (75, 61, 2, 1, 7990000, 0, 1, '2021-05-15 13:50:15', '2021-05-15 13:50:15');
INSERT INTO `order_details` VALUES (74, 61, 4, 1, 7999000, 0, 1, '2021-05-15 13:50:15', '2021-05-15 13:50:15');
INSERT INTO `order_details` VALUES (73, 60, 2, 1, 7990000, 0, 1, '2021-05-15 13:45:16', '2021-05-15 13:45:16');
INSERT INTO `order_details` VALUES (72, 60, 4, 1, 7999000, 0, 1, '2021-05-15 13:45:16', '2021-05-15 13:45:16');
INSERT INTO `order_details` VALUES (71, 59, 2, 1, 7990000, 0, 1, '2021-05-15 13:35:14', '2021-05-15 13:35:14');
INSERT INTO `order_details` VALUES (70, 59, 4, 1, 7999000, 0, 1, '2021-05-15 13:35:14', '2021-05-15 13:35:14');
INSERT INTO `order_details` VALUES (69, 58, 2, 1, 7990000, 0, 1, '2021-05-15 13:32:28', '2021-05-15 13:32:28');
INSERT INTO `order_details` VALUES (68, 58, 1, 1, 12490000, 0, 1, '2021-05-15 13:32:28', '2021-05-15 13:32:28');
INSERT INTO `order_details` VALUES (67, 57, 6, 1, 6490000, 0, 1, '2021-05-15 12:58:15', '2021-05-15 12:58:15');
INSERT INTO `order_details` VALUES (66, 56, 4, 1, 7999000, 0, 1, '2021-05-15 12:51:07', '2021-05-15 12:51:07');
INSERT INTO `order_details` VALUES (65, 56, 2, 1, 7990000, 0, 1, '2021-05-15 12:51:07', '2021-05-15 12:51:07');
INSERT INTO `order_details` VALUES (85, 66, 2, 1, 7990000, 0, 1, '2021-05-15 13:58:32', '2021-05-15 13:58:32');
INSERT INTO `order_details` VALUES (86, 67, 4, 1, 7999000, 0, 1, '2021-05-15 13:59:06', '2021-05-15 13:59:06');
INSERT INTO `order_details` VALUES (87, 67, 2, 1, 7990000, 0, 1, '2021-05-15 13:59:06', '2021-05-15 13:59:06');
INSERT INTO `order_details` VALUES (88, 68, 4, 1, 7999000, 0, 1, '2021-05-15 13:59:47', '2021-05-15 13:59:47');
INSERT INTO `order_details` VALUES (89, 68, 2, 1, 7990000, 0, 1, '2021-05-15 13:59:47', '2021-05-15 13:59:47');
INSERT INTO `order_details` VALUES (90, 69, 4, 1, 7999000, 0, 1, '2021-05-15 14:00:12', '2021-05-15 14:00:12');
INSERT INTO `order_details` VALUES (91, 69, 2, 1, 7990000, 0, 1, '2021-05-15 14:00:12', '2021-05-15 14:00:12');
INSERT INTO `order_details` VALUES (92, 70, 4, 1, 7999000, 0, 1, '2021-05-15 14:00:43', '2021-05-15 14:00:43');
INSERT INTO `order_details` VALUES (93, 70, 2, 1, 7990000, 0, 1, '2021-05-15 14:00:43', '2021-05-15 14:00:43');
INSERT INTO `order_details` VALUES (94, 71, 4, 1, 7999000, 0, 1, '2021-05-15 14:02:17', '2021-05-15 14:02:17');
INSERT INTO `order_details` VALUES (95, 71, 2, 1, 7990000, 0, 1, '2021-05-15 14:02:17', '2021-05-15 14:02:17');
INSERT INTO `order_details` VALUES (96, 72, 4, 1, 7999000, 0, 1, '2021-05-15 14:03:15', '2021-05-15 14:03:15');
INSERT INTO `order_details` VALUES (97, 72, 2, 1, 7990000, 0, 1, '2021-05-15 14:03:15', '2021-05-15 14:03:15');
INSERT INTO `order_details` VALUES (98, 73, 4, 1, 7999000, 0, 1, '2021-05-15 14:04:44', '2021-05-15 14:04:44');
INSERT INTO `order_details` VALUES (99, 73, 2, 1, 7990000, 0, 1, '2021-05-15 14:04:44', '2021-05-15 14:04:44');
INSERT INTO `order_details` VALUES (100, 74, 4, 1, 7999000, 0, 1, '2021-05-15 14:07:40', '2021-05-15 14:07:40');
INSERT INTO `order_details` VALUES (101, 74, 2, 1, 7990000, 0, 1, '2021-05-15 14:07:40', '2021-05-15 14:07:40');
INSERT INTO `order_details` VALUES (102, 75, 1, 1, 12490000, 0, 1, '2021-05-15 14:27:19', '2021-05-15 14:27:19');
INSERT INTO `order_details` VALUES (103, 75, 2, 1, 7990000, 0, 1, '2021-05-15 14:27:19', '2021-05-15 14:27:19');
INSERT INTO `order_details` VALUES (104, 75, 4, 2, 7999000, 0, 1, '2021-05-15 14:27:19', '2021-05-15 14:27:19');
INSERT INTO `order_details` VALUES (105, 76, 4, 1, 7999000, 0, 1, '2021-05-15 14:42:59', '2021-05-15 14:42:59');
INSERT INTO `order_details` VALUES (106, 77, 4, 1, 7999000, 0, 1, '2021-05-15 14:46:35', '2021-05-15 14:46:35');
INSERT INTO `order_details` VALUES (107, 77, 2, 1, 7990000, 0, 1, '2021-05-15 14:46:35', '2021-05-15 14:46:35');
INSERT INTO `order_details` VALUES (108, 77, 62, 1, 123, 0, 1, '2021-05-15 14:46:35', '2021-05-15 14:46:35');
INSERT INTO `order_details` VALUES (109, 78, 4, 1, 7999000, 0, 1, '2021-05-15 14:56:59', '2021-05-15 14:56:59');
INSERT INTO `order_details` VALUES (110, 78, 2, 1, 7990000, 0, 1, '2021-05-15 14:56:59', '2021-05-15 14:56:59');
INSERT INTO `order_details` VALUES (111, 78, 62, 1, 123, 0, 1, '2021-05-15 14:56:59', '2021-05-15 14:56:59');
INSERT INTO `order_details` VALUES (112, 79, 4, 1, 7999000, 0, 1, '2021-05-15 15:00:49', '2021-05-15 15:00:49');
INSERT INTO `order_details` VALUES (113, 79, 2, 1, 7990000, 0, 1, '2021-05-15 15:00:49', '2021-05-15 15:00:49');
INSERT INTO `order_details` VALUES (114, 79, 62, 1, 123, 0, 1, '2021-05-15 15:00:49', '2021-05-15 15:00:49');
INSERT INTO `order_details` VALUES (115, 80, 4, 1, 7999000, 0, 1, '2021-05-15 15:01:29', '2021-05-15 15:01:29');
INSERT INTO `order_details` VALUES (116, 80, 2, 1, 7990000, 0, 1, '2021-05-15 15:01:29', '2021-05-15 15:01:29');
INSERT INTO `order_details` VALUES (117, 80, 62, 1, 123, 0, 1, '2021-05-15 15:01:29', '2021-05-15 15:01:29');
INSERT INTO `order_details` VALUES (118, 81, 4, 1, 7999000, 0, 1, '2021-05-15 15:03:58', '2021-05-15 15:03:58');
INSERT INTO `order_details` VALUES (119, 81, 2, 2, 7990000, 0, 1, '2021-05-15 15:03:58', '2021-05-15 15:03:58');
INSERT INTO `order_details` VALUES (120, 81, 62, 1, 123, 0, 1, '2021-05-15 15:03:58', '2021-05-15 15:03:58');
INSERT INTO `order_details` VALUES (121, 81, 1, 1, 12490000, 0, 1, '2021-05-15 15:03:58', '2021-05-15 15:03:58');
INSERT INTO `order_details` VALUES (122, 82, 4, 2, 7999000, 0, 1, '2021-05-15 15:27:17', '2021-05-15 15:27:17');
INSERT INTO `order_details` VALUES (123, 82, 2, 3, 7990000, 0, 1, '2021-05-15 15:27:17', '2021-05-15 15:27:17');
INSERT INTO `order_details` VALUES (124, 82, 62, 1, 123, 0, 1, '2021-05-15 15:27:17', '2021-05-15 15:27:17');
INSERT INTO `order_details` VALUES (125, 82, 1, 1, 12490000, 0, 1, '2021-05-15 15:27:17', '2021-05-15 15:27:17');
INSERT INTO `order_details` VALUES (126, 83, 4, 2, 7999000, 0, 1, '2021-05-15 15:27:46', '2021-05-15 15:27:46');
INSERT INTO `order_details` VALUES (127, 83, 2, 3, 7990000, 0, 1, '2021-05-15 15:27:46', '2021-05-15 15:27:46');
INSERT INTO `order_details` VALUES (128, 83, 62, 1, 123, 0, 1, '2021-05-15 15:27:46', '2021-05-15 15:27:46');
INSERT INTO `order_details` VALUES (129, 83, 1, 1, 12490000, 0, 1, '2021-05-15 15:27:46', '2021-05-15 15:27:46');
INSERT INTO `order_details` VALUES (130, 84, 2, 1, 7990000, 0, 1, '2021-05-15 15:28:49', '2021-05-15 15:28:49');
INSERT INTO `order_details` VALUES (131, 84, 1, 1, 12490000, 0, 1, '2021-05-15 15:28:49', '2021-05-15 15:28:49');
INSERT INTO `order_details` VALUES (132, 85, 2, 1, 7990000, 0, 1, '2021-05-15 15:30:01', '2021-05-15 15:30:01');
INSERT INTO `order_details` VALUES (133, 85, 1, 1, 12490000, 0, 1, '2021-05-15 15:30:01', '2021-05-15 15:30:01');
INSERT INTO `order_details` VALUES (134, 86, 1, 1, 12490000, 0, 1, '2021-05-15 15:33:07', '2021-05-15 15:33:07');
INSERT INTO `order_details` VALUES (135, 86, 2, 1, 7990000, 0, 1, '2021-05-15 15:33:07', '2021-05-15 15:33:07');
INSERT INTO `order_details` VALUES (136, 87, 2, 1, 7990000, 0, 1, '2021-05-15 15:35:16', '2021-05-15 15:35:16');
INSERT INTO `order_details` VALUES (137, 87, 4, 1, 7999000, 0, 1, '2021-05-15 15:35:16', '2021-05-15 15:35:16');
INSERT INTO `order_details` VALUES (138, 88, 2, 1, 7990000, 0, 1, '2021-05-15 15:36:02', '2021-05-15 15:36:02');
INSERT INTO `order_details` VALUES (139, 88, 4, 1, 7999000, 0, 1, '2021-05-15 15:36:02', '2021-05-15 15:36:02');
INSERT INTO `order_details` VALUES (140, 89, 1, 1, 12490000, 0, 1, '2021-05-15 15:38:28', '2021-05-15 15:38:28');
INSERT INTO `order_details` VALUES (141, 89, 2, 1, 7990000, 0, 1, '2021-05-15 15:38:28', '2021-05-15 15:38:28');
INSERT INTO `order_details` VALUES (142, 90, 2, 1, 7990000, 0, 1, '2021-05-15 15:56:16', '2021-05-15 15:56:16');
INSERT INTO `order_details` VALUES (143, 90, 4, 1, 7999000, 0, 1, '2021-05-15 15:56:16', '2021-05-15 15:56:16');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngaydat` datetime(0) NULL DEFAULT NULL,
  `sodonhang` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `makhachhang` int(11) NULL DEFAULT NULL,
  `tongtien` float NULL DEFAULT NULL,
  `phiship` float NULL DEFAULT NULL,
  `trangthaidonhang` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int(11) NULL DEFAULT NULL,
  `order_note` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 91 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (65, '2021-05-15 13:58:07', 'DH135807', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:58:07', '2021-05-15 13:58:07');
INSERT INTO `orders` VALUES (64, '2021-05-15 13:57:05', 'DH135705', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:57:06', '2021-05-15 13:57:06');
INSERT INTO `orders` VALUES (63, '2021-05-15 13:56:52', 'DH135652', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:56:52', '2021-05-15 13:56:52');
INSERT INTO `orders` VALUES (61, '2021-05-15 13:50:15', 'DH135015', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:50:15', '2021-05-15 13:50:15');
INSERT INTO `orders` VALUES (62, '2021-05-15 13:56:10', 'DH135610', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:56:10', '2021-05-15 13:56:10');
INSERT INTO `orders` VALUES (60, '2021-05-15 13:45:16', 'DH134516', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:45:16', '2021-05-15 13:45:16');
INSERT INTO `orders` VALUES (59, '2021-05-15 13:35:13', 'DH133513', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:35:13', '2021-05-15 13:35:13');
INSERT INTO `orders` VALUES (58, '2021-05-15 13:32:28', 'DH133228', 36, 20480000, 0, NULL, NULL, '', '2021-05-15 13:32:28', '2021-05-15 13:32:28');
INSERT INTO `orders` VALUES (56, '2021-05-15 12:51:07', 'DH125107', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 12:51:07', '2021-05-15 12:51:07');
INSERT INTO `orders` VALUES (57, '2021-05-15 12:58:15', 'DH125815', 36, 6490000, 0, NULL, NULL, '', '2021-05-15 12:58:15', '2021-05-15 12:58:15');
INSERT INTO `orders` VALUES (39, '2021-05-09 16:07:03', 'DH160703', 36, 143456000, 0, NULL, NULL, 'giao gio hanh chinh nhe', '2021-05-09 16:07:03', '2021-05-09 16:07:03');
INSERT INTO `orders` VALUES (38, '2021-04-17 09:20:07', 'DH092007', 36, 7990000, 0, '1', 1, 'gia gio hanh chinh nhe', '2021-04-17 09:20:07', '2021-04-17 09:20:07');
INSERT INTO `orders` VALUES (37, '2021-04-11 07:51:18', 'DH075118', 36, 12490000, 0, '1', 1, 'Giao hang mau den nhe', '2021-04-11 07:51:18', '2021-04-11 07:51:18');
INSERT INTO `orders` VALUES (71, '2021-05-15 14:02:17', 'DH140217', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 14:02:17', '2021-05-15 14:02:17');
INSERT INTO `orders` VALUES (70, '2021-05-15 14:00:43', 'DH140043', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 14:00:43', '2021-05-15 14:00:43');
INSERT INTO `orders` VALUES (69, '2021-05-15 14:00:12', 'DH140012', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 14:00:12', '2021-05-15 14:00:12');
INSERT INTO `orders` VALUES (68, '2021-05-15 13:59:47', 'DH135947', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:59:47', '2021-05-15 13:59:47');
INSERT INTO `orders` VALUES (67, '2021-05-15 13:59:06', 'DH135906', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:59:06', '2021-05-15 13:59:06');
INSERT INTO `orders` VALUES (66, '2021-05-15 13:58:32', 'DH135832', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 13:58:32', '2021-05-15 13:58:32');
INSERT INTO `orders` VALUES (72, '2021-05-15 14:03:15', 'DH140315', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 14:03:15', '2021-05-15 14:03:15');
INSERT INTO `orders` VALUES (73, '2021-05-15 14:04:44', 'DH140444', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 14:04:44', '2021-05-15 14:04:44');
INSERT INTO `orders` VALUES (74, '2021-05-15 14:07:40', 'DH140740', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 14:07:40', '2021-05-15 14:07:40');
INSERT INTO `orders` VALUES (75, '2021-05-15 14:27:19', 'DH142719', 36, 36478000, 0, NULL, NULL, '', '2021-05-15 14:27:19', '2021-05-15 14:27:19');
INSERT INTO `orders` VALUES (76, '2021-05-15 14:42:59', 'DH144259', 36, 7999000, 0, NULL, NULL, '', '2021-05-15 14:42:59', '2021-05-15 14:42:59');
INSERT INTO `orders` VALUES (77, '2021-05-15 14:46:35', 'DH144635', 36, 15989100, 0, NULL, NULL, '', '2021-05-15 14:46:35', '2021-05-15 14:46:35');
INSERT INTO `orders` VALUES (78, '2021-05-15 14:56:59', 'DH145659', 36, 15989100, 0, NULL, NULL, '', '2021-05-15 14:56:59', '2021-05-15 14:56:59');
INSERT INTO `orders` VALUES (79, '2021-05-15 15:00:48', 'DH150048', 36, 15989100, 0, NULL, NULL, '', '2021-05-15 15:00:49', '2021-05-15 15:00:49');
INSERT INTO `orders` VALUES (80, '2021-05-15 15:01:29', 'DH150129', 36, 15989100, 0, NULL, NULL, '', '2021-05-15 15:01:29', '2021-05-15 15:01:29');
INSERT INTO `orders` VALUES (81, '2021-05-15 15:03:58', 'DH150358', 36, 36469100, 0, NULL, NULL, '', '2021-05-15 15:03:58', '2021-05-15 15:03:58');
INSERT INTO `orders` VALUES (82, '2021-05-15 15:27:17', 'DH152717', 36, 52458100, 0, NULL, NULL, '', '2021-05-15 15:27:17', '2021-05-15 15:27:17');
INSERT INTO `orders` VALUES (83, '2021-05-15 15:27:46', 'DH152746', 36, 52458100, 0, NULL, NULL, '', '2021-05-15 15:27:46', '2021-05-15 15:27:46');
INSERT INTO `orders` VALUES (84, '2021-05-15 15:28:49', 'DH152849', 36, 20480000, 0, NULL, NULL, '', '2021-05-15 15:28:49', '2021-05-15 15:28:49');
INSERT INTO `orders` VALUES (85, '2021-05-15 15:30:01', 'DH153001', 36, 20480000, 0, NULL, NULL, '', '2021-05-15 15:30:01', '2021-05-15 15:30:01');
INSERT INTO `orders` VALUES (86, '2021-05-15 15:33:07', 'DH153307', 36, 20480000, 0, NULL, NULL, '', '2021-05-15 15:33:07', '2021-05-15 15:33:07');
INSERT INTO `orders` VALUES (87, '2021-05-15 15:35:16', 'DH153516', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 15:35:16', '2021-05-15 15:35:16');
INSERT INTO `orders` VALUES (88, '2021-05-15 15:36:02', 'DH153602', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 15:36:02', '2021-05-15 15:36:02');
INSERT INTO `orders` VALUES (89, '2021-05-15 15:38:28', 'DH153828', 36, 20480000, 0, NULL, NULL, '', '2021-05-15 15:38:28', '2021-05-15 15:38:28');
INSERT INTO `orders` VALUES (90, '2021-05-15 15:56:16', 'DH155616', 36, 15989000, 0, NULL, NULL, '', '2021-05-15 15:56:16', '2021-05-15 15:56:16');

-- ----------------------------
-- Table structure for privileges
-- ----------------------------
DROP TABLE IF EXISTS `privileges`;
CREATE TABLE `privileges`  (
  `machucnang` int(11) NOT NULL,
  `maquantri` int(11) NOT NULL,
  PRIMARY KEY (`maquantri`, `machucnang`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of privileges
-- ----------------------------
INSERT INTO `privileges` VALUES (3, 1);
INSERT INTO `privileges` VALUES (4, 1);
INSERT INTO `privileges` VALUES (5, 1);
INSERT INTO `privileges` VALUES (6, 1);
INSERT INTO `privileges` VALUES (7, 1);
INSERT INTO `privileges` VALUES (8, 1);
INSERT INTO `privileges` VALUES (9, 1);
INSERT INTO `privileges` VALUES (12, 1);
INSERT INTO `privileges` VALUES (13, 1);
INSERT INTO `privileges` VALUES (14, 1);
INSERT INTO `privileges` VALUES (15, 1);
INSERT INTO `privileges` VALUES (16, 1);
INSERT INTO `privileges` VALUES (17, 1);
INSERT INTO `privileges` VALUES (18, 1);
INSERT INTO `privileges` VALUES (19, 1);
INSERT INTO `privileges` VALUES (20, 1);
INSERT INTO `privileges` VALUES (21, 1);
INSERT INTO `privileges` VALUES (22, 1);
INSERT INTO `privileges` VALUES (23, 1);
INSERT INTO `privileges` VALUES (24, 1);
INSERT INTO `privileges` VALUES (25, 1);
INSERT INTO `privileges` VALUES (26, 1);
INSERT INTO `privileges` VALUES (27, 1);
INSERT INTO `privileges` VALUES (28, 1);
INSERT INTO `privileges` VALUES (29, 1);
INSERT INTO `privileges` VALUES (30, 1);
INSERT INTO `privileges` VALUES (31, 1);
INSERT INTO `privileges` VALUES (32, 1);
INSERT INTO `privileges` VALUES (33, 1);
INSERT INTO `privileges` VALUES (34, 1);
INSERT INTO `privileges` VALUES (35, 1);
INSERT INTO `privileges` VALUES (36, 1);
INSERT INTO `privileges` VALUES (37, 1);
INSERT INTO `privileges` VALUES (38, 1);
INSERT INTO `privileges` VALUES (39, 1);
INSERT INTO `privileges` VALUES (40, 1);
INSERT INTO `privileges` VALUES (41, 1);
INSERT INTO `privileges` VALUES (42, 1);
INSERT INTO `privileges` VALUES (43, 1);
INSERT INTO `privileges` VALUES (44, 1);
INSERT INTO `privileges` VALUES (45, 1);
INSERT INTO `privileges` VALUES (46, 1);
INSERT INTO `privileges` VALUES (47, 1);
INSERT INTO `privileges` VALUES (48, 1);
INSERT INTO `privileges` VALUES (49, 1);
INSERT INTO `privileges` VALUES (50, 1);
INSERT INTO `privileges` VALUES (51, 1);
INSERT INTO `privileges` VALUES (52, 1);
INSERT INTO `privileges` VALUES (53, 1);
INSERT INTO `privileges` VALUES (54, 1);
INSERT INTO `privileges` VALUES (56, 1);
INSERT INTO `privileges` VALUES (57, 1);
INSERT INTO `privileges` VALUES (60, 1);
INSERT INTO `privileges` VALUES (61, 1);
INSERT INTO `privileges` VALUES (62, 1);
INSERT INTO `privileges` VALUES (63, 1);
INSERT INTO `privileges` VALUES (64, 1);
INSERT INTO `privileges` VALUES (65, 1);
INSERT INTO `privileges` VALUES (66, 1);
INSERT INTO `privileges` VALUES (67, 1);
INSERT INTO `privileges` VALUES (68, 1);
INSERT INTO `privileges` VALUES (69, 1);
INSERT INTO `privileges` VALUES (70, 1);
INSERT INTO `privileges` VALUES (12, 8);
INSERT INTO `privileges` VALUES (13, 8);
INSERT INTO `privileges` VALUES (14, 8);
INSERT INTO `privileges` VALUES (15, 8);
INSERT INTO `privileges` VALUES (16, 8);
INSERT INTO `privileges` VALUES (17, 8);
INSERT INTO `privileges` VALUES (18, 8);
INSERT INTO `privileges` VALUES (55, 8);
INSERT INTO `privileges` VALUES (56, 8);
INSERT INTO `privileges` VALUES (62, 8);
INSERT INTO `privileges` VALUES (63, 8);
INSERT INTO `privileges` VALUES (12, 29);
INSERT INTO `privileges` VALUES (13, 29);
INSERT INTO `privileges` VALUES (14, 29);
INSERT INTO `privileges` VALUES (15, 29);
INSERT INTO `privileges` VALUES (16, 29);
INSERT INTO `privileges` VALUES (17, 29);
INSERT INTO `privileges` VALUES (18, 29);
INSERT INTO `privileges` VALUES (26, 29);
INSERT INTO `privileges` VALUES (27, 29);
INSERT INTO `privileges` VALUES (28, 29);
INSERT INTO `privileges` VALUES (29, 29);
INSERT INTO `privileges` VALUES (30, 29);
INSERT INTO `privileges` VALUES (62, 29);
INSERT INTO `privileges` VALUES (63, 29);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `gia` bigint(20) NULL DEFAULT NULL,
  `gia_khuyen_mai` bigint(20) NULL DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL,
  `hinhdaidien` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `manhacungcap` int(11) NULL DEFAULT NULL,
  `maloai` int(11) NULL DEFAULT NULL,
  `hinhchitiet` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `motachitiet` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL,
  `mavach` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tukhoa` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `soluong` int(11) NOT NULL DEFAULT 0,
  `motatimkiem` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `hinhchiase` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tenrutgon` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 63 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Samsung Galaxy A9 2018', 12490000, 12400000, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Samsung Galaxy A9 2018 l&agrave; mẫu smartphone đầu ti&ecirc;n tr&ecirc;n thế giới c&oacute; tới 4 camera ch&iacute;nh. Với hệ thống camera th&ocirc;ng minh, m&aacute;y c&oacute; khả năng chụp ảnh hết sức chuy&ecirc;n nghiệp.</body>\r\n</html>', 'quantri/ckfolder/images/categories/ss-a9-2018.png', NULL, 1, 1, 'quantri/ckfolder/images/categories/ss-a9-2018.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<table id=\"tskt\">\r\n	<tbody>\r\n		<tr style=\"display: table-row;\">\r\n			<td>K&iacute;ch thước m&agrave;n h&igrave;nh</td>\r\n			<td>6.5 inches</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>C&ocirc;ng nghệ m&agrave;n h&igrave;nh</td>\r\n			<td>IPS LCD</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>Camera sau</td>\r\n			<td>Camera g&oacute;c rộng: 48 MP, f/2.0, 26mm (wide), AF<br />\r\n			Camera g&oacute;c si&ecirc;u rộng: 5 MP, f/2.2, 123˚<br />\r\n			Camera chụp cận cản: 2 MP, f/2.4<br />\r\n			Camera x&oacute;a ph&ocirc;ng: 2 MP, f/2.4</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>Camera trước</td>\r\n			<td>8 MP, f/2.2</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>Chipset</td>\r\n			<td>Helio G35</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>Dung lượng RAM</td>\r\n			<td>4 GB</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>Bộ nhớ trong</td>\r\n			<td>128 GB</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>Pin</td>\r\n			<td>Li-Po 5000 mAh, sạc nhanh 15W</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>Thẻ SIM</td>\r\n			<td>2 SIM (Nano-SIM)</td>\r\n		</tr>\r\n		<tr style=\"display: table-row;\">\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>Android 10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</td>\r\n			<td>720 x 1560 pixes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại CPU</td>\r\n			<td>8 nh&acirc;n (2.3 GHz, 1.8 GHz)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</body>\r\n</html>', '', '', '', 23, '', 'samsung-galaxy-a9-2018', NULL, NULL, 1, '2021-04-18 04:45:07', '2021-05-01 02:20:03');
INSERT INTO `products` VALUES (2, 'Nokia 8.1', 7990000, 7000000, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>N&acirc;ng tầm nhiếp ảnh ở cả camera trước v&agrave; sau; hệ điều h&agrave;nh Android 9 Pie mới nhất c&ugrave;ng hiệu năng mạnh mẽ, Nokia 8.1 đ&aacute;p ứng mọi sự kỳ vọng của người d&ugrave;ng.</body>\r\n</html>', 'quantri/ckfolder/images/categories/nokia-81.png', NULL, 2, 1, 'quantri/ckfolder/images/categories/nokia-81.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 6.18 inches, 1080 x 2280 Pixels Camera trước : 20.0 MP Camera sau : 12.0 MP + 13.0 MP RAM : 4 GB Bộ nhớ trong : 64 GB CPU : Qualcomm Snapdragon 710, 8, 2 x 2.2 GHz &amp; 6x 1.7 GHz GPU : Adreno 616 Dung lượng pin : 3500 mAh Hệ điều h&agrave;nh : Android 9 Thẻ SIM : 2 SIM Nano (SIM 2 chung khe thẻ nhớ), 2 Sim</body>\r\n</html>', NULL, '', '', 23, '', 'nokia-8-1', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:22:35');
INSERT INTO `products` VALUES (4, 'Xiaomi Pocophone F1', 7999000, 7000000, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&quot;&Ocirc;ng vua tốc độ&quot; Pocophone F1 đ&atilde; xuất hiện, bạn sẽ được tận hưởng tốc độ nhanh nhất, hiệu năng xử l&yacute; tuyệt vời nhất trong một mức gi&aacute; kh&oacute; tin.</body>\r\n</html>', 'quantri/ckfolder/images/categories/mi-poco.png', NULL, 3, 1, 'quantri/ckfolder/images/categories/mi-poco.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 6.18 inches, 1080 x 2280 Pixels Camera trước : 20.0 MP Camera sau : Camera k&eacute;p 12MP+5MP RAM : 6 GB Bộ nhớ trong : 64 GB CPU : Snapdragon 845, 8, 2.8 GHz GPU : Adreno 630 Dung lượng pin : 4000 mAh Hệ điều h&agrave;nh : Android 8 Thẻ SIM : Nano SIM, 2 Sim</body>\r\n</html>', NULL, '', '', 23, '', 'xiaomi-pocophone-f1', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:23:01');
INSERT INTO `products` VALUES (5, 'Xiaomi Mi 8 Lite 128GB', 7490000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Xiaomi Mi 8 Lite 128GB c&oacute; kh&ocirc;ng gian lưu trữ cực lớn, thiết kế sang trọng v&agrave; cấu h&igrave;nh vượt trội, lu&ocirc;n sẵn s&agrave;ng cho mọi hoạt động của bạn.</body>\r\n</html>', 'quantri/ckfolder/images/categories/mi-8-lite.png', NULL, 3, 1, 'quantri/ckfolder/images/categories/mi-8-lite.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 6.22 inches, 1080 x 2040 Pixel Camera trước : 24.0 MP Camera sau : 12.0 MP + 5.0 MP RAM : 6 GB Bộ nhớ trong : 128 GB CPU : SnapDragon 660, Octa-Core, 4x2.2 GHz Kryo 260 &amp; 4x1.8 GHz Kryo 260 GPU : Adreno 512 Dung lượng pin : 3300mah Hệ điều h&agrave;nh : Android 8.1 Oreo (phi&ecirc;n bản Go) Thẻ SIM : Nano SIM, 2 Sim</body>\r\n</html>', NULL, '', '', 23, '', 'xiaomi-mi-8-lite-128gb', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:23:29');
INSERT INTO `products` VALUES (6, 'Samsung Galaxy A7 2018 - 128GB', 6490000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Với 3 camera sau, Samsung Galaxy A7 2018 128GB cho bạn thỏa sức s&aacute;ng tạo trong nhiếp ảnh. Hơn nữa, Galaxy A7 c&ograve;n ph&ugrave; hợp với giới trẻ bởi thiết kế phong c&aacute;ch v&agrave; hiệu năng mạnh mẽ.</body>\r\n</html>', 'quantri/ckfolder/images/categories/ss-a7-2018.png', NULL, 3, 1, 'quantri/ckfolder/images/categories/ss-a7-2018.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 6.0 inchs, 1080 x 2220 Pixels Camera trước : 24.0 MP Camera sau : 24 MP+8 MP+5 MP (3 camera) RAM : 6 GB Bộ nhớ trong : 128 GB CPU : Exynos 7885 8 nh&acirc;n 64-bit, 8, 2 nh&acirc;n 2.2 GHz Cortex-A73 &amp; 6 nh&acirc;n 1.6 GHz Cortex-A53 GPU : Mali&trade; G71 Dung lượng pin : 3300 mAh Hệ điều h&agrave;nh : Android 8 (Oreo) Thẻ SIM : Nano SIM, 2 Sim</body>\r\n</html>', NULL, '', '', 23, '', 'samsung-galaxy-a7-2018-128gb', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:23:56');
INSERT INTO `products` VALUES (7, 'Xiaomi Mi 8 Lite 64GB', 6690000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Một si&ecirc;u phẩm với thiết kế nổi bật, camera xuất sắc v&agrave; cấu h&igrave;nh v&ocirc; c&ugrave;ng mạnh mẽ, Xiaomi Mi 8 Lite l&agrave; chiếc điện thoại mang tr&ecirc;n m&igrave;nh tất cả những g&igrave; bạn cần.</body>\r\n</html>', 'quantri/ckfolder/images/categories/mi-8-lite.png', NULL, 3, 1, 'quantri/ckfolder/images/categories/mi-8-lite.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 6.22 inches, 1080 x 2040 Pixel Camera trước : 24.0 MP Camera sau : 12.0 MP + 5.0 MP RAM : 4 GB Bộ nhớ trong : 64 GB CPU : SnapDragon 660, Octa-Core, 4x2.2 GHz Kryo 260 &amp; 4x1.8 GHz Kryo 260 GPU : Adreno 512 Dung lượng pin : 3300mah Hệ điều h&agrave;nh : Android 8.1 Oreo (phi&ecirc;n bản Go) Thẻ SIM : Nano SIM, 2 Sim</body>\r\n</html>', NULL, '', '', 23, '', 'xiaomi-mi-8-lite-64gb', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:24:30');
INSERT INTO `products` VALUES (8, 'Honor 10', 9990000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Honor 10, chiếc smartphone sở hữu thiết kế b&oacute;ng bẩy cuốn h&uacute;t đi k&egrave;m cấu h&igrave;nh mạnh mẽ xuất sắc v&agrave; khả năng chụp ảnh ưu việt.</body>\r\n</html>', 'quantri/ckfolder/images/categories/huawei-honor-10.png', NULL, 4, 1, 'quantri/ckfolder/images/categories/huawei-honor-10.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 5.84&quot;, 1080 x 2280 pixels Camera trước : 24 MP Camera sau : 24 MP v&agrave; 16 MP RAM : 4 GB Bộ nhớ trong : 128 GB CPU : Hisilicon Kirin 970 , 8 nh&acirc;n, 4 nh&acirc;n 2.4 GHz Cortex-A73 &amp; 4 nh&acirc;n 1.8 GHz Cortex-A53 GPU : Mali-G72 MP12 Dung lượng pin : 3400 mAh Hệ điều h&agrave;nh : Android 8.1 (Oreo) Thẻ SIM : Nano SIM, 2 Sim, hỗ trợ 4G</body>\r\n</html>', NULL, '', '', 23, '', 'honor-10', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:24:53');
INSERT INTO `products` VALUES (9, 'Honor 8X 128GB', 6990000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Honor 8X 128GB l&agrave; chiếc điện thoại gần như ho&agrave;n hảo về mọi kh&iacute;a cạnh với thiết kế độc đ&aacute;o, bộ nhớ trong cực lớn, m&agrave;n h&igrave;nh viền mỏng v&agrave; hiệu năng tuyệt vời.</body>\r\n</html>', 'quantri/ckfolder/images/categories/honor-8x.png', NULL, 4, 1, 'quantri/ckfolder/images/categories/honor-8x.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 6.5 inchs, 1080 x 2340 Pixels Camera trước : 16.0 MP Camera sau : 20 MP v&agrave; 2 MP (2 camera) RAM : 4 GB Bộ nhớ trong : 128 GB CPU : Hisilicon Kirin 710, 8, 4 x Cortex-A73 2.2 GHz + 4x Cortex-A53 1.7 GHz GPU : Mali-G51 MP4 Dung lượng pin : 3750 mAh Hệ điều h&agrave;nh : Android 8.1 Thẻ SIM : Nano SIM, 2 Sim</body>\r\n</html>', NULL, '', '', 23, '', 'honor-8x-128gb', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:25:13');
INSERT INTO `products` VALUES (10, 'Honor Play', 6590000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Một sản phẩm đỉnh cao d&agrave;nh ri&ecirc;ng cho game thủ với hiệu năng si&ecirc;u mạnh v&agrave; những tối ưu cho chơi game, đ&oacute; ch&iacute;nh l&agrave; Honor Play.</body>\r\n</html>', 'quantri/ckfolder/images/categories/honor-play.png', NULL, 4, 1, 'quantri/ckfolder/images/categories/honor-play.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 6.3&quot;, 1080 x 2340 pixels Camera trước : 16 MP Camera sau : 16 MP + 2 MP RAM : 4 GB Bộ nhớ trong : 64 GB CPU : Hisilicon Kirin 970, 8 nh&acirc;n, 4 x 2.36 GHz + 4 x 1.8 GHz GPU : Mali-G72 MP12 Dung lượng pin : 3750 mAh Hệ điều h&agrave;nh : Android 8.1 Oreo Thẻ SIM : Nano, 2 Sim, hỗ trợ 4G</body>\r\n</html>', NULL, '', '', 23, '', 'honor-play', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:25:33');
INSERT INTO `products` VALUES (11, 'iPhone 6s Plus 32GB', 9990000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Apple iPhone 6s Plus l&agrave; chiếc iPhone m&agrave;n h&igrave;nh lớn nhất, cho ph&eacute;p người d&ugrave;ng l&agrave;m được nhiều việc hơn tr&ecirc;n kh&ocirc;ng gian rộng lớn.</body>\r\n</html>', 'quantri/ckfolder/images/categories/iphone-6s.png', NULL, 5, 1, 'quantri/ckfolder/images/categories/iphone-6s.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 1080 x 1920 pixels Camera trước : 5.0 MP Camera sau : 12.0 MP RAM : 2 GB Bộ nhớ trong : 32 GB CPU : Apple A9, 2 Nh&acirc;n, 1.8 GHz GPU : PowerVR GT7600 Dung lượng pin : 2750mAh Thẻ SIM : Nano Sim, 1 Sim</body>\r\n</html>', NULL, '', '', 23, '', 'iphone-6s-plus-32gb', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:25:57');
INSERT INTO `products` VALUES (12, 'Xiaomi Mi 9 SE 64GB', 8490000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Được thiết kế hướng tới những người d&ugrave;ng y&ecirc;u th&iacute;ch d&ograve;ng smartphone nhỏ gọn, Xiaomi Mi 9 SE cho ph&eacute;p bạn cầm nắm v&agrave; mang theo b&ecirc;n m&igrave;nh một c&aacute;ch dễ d&agrave;ng</body>\r\n</html>', 'quantri/ckfolder/images/categories/xiaomi-mi-9-se.png', NULL, 3, 1, 'quantri/ckfolder/images/categories/xiaomi-mi-9-se.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh : 5.97 inches, 1080 x 2340 Pixels Camera trước : 20.0 MP Camera sau : 48 MP,13 MP +8 MP ( 3 camera ) RAM : 6 GB Bộ nhớ trong : 64 GB CPU : Snap dragon 712, 8, 2.3Ghz GPU : Adreno 614 Dung lượng pin : 3070 mAh Hệ điều h&agrave;nh : Android 9 Thẻ SIM : Nano SIM, 2 Sim</body>\r\n</html>', NULL, '', '', 23, '', 'xiaomi-mi-9-se-64gb', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:26:20');
INSERT INTO `products` VALUES (13, 'Asus VIVOBOOK X507UA-EJ234T/Core i3-7020U', 2342423234, 10500000, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Asus Vivobook X507UA-EJ234T l&agrave; sự kết hợp ho&agrave;n hảo giữa vẻ đẹp v&agrave; hiệu năng, khi m&aacute;y c&oacute; cấu h&igrave;nh tốt c&ugrave;ng với thiết kế m&agrave;n h&igrave;nh viền mỏng thời trang.</body>\r\n</html>', 'quantri/ckfolder/images/categories/asus-vivo-book.png', NULL, 6, 3, 'quantri/ckfolder/images/categories/asus-vivo-book.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD 5400rpm, HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 SATA3 M&agrave;n h&igrave;nh : 15.6 inchs, 1920 x 1080 Pixels Card m&agrave;n h&igrave;nh : Intel&reg; HD graphics, T&iacute;ch hợp Cổng kết nối : LAN : Kh&ocirc;ng, WIFI : 802.11 b/g/n Hệ điều h&agrave;nh : Windows 10 Home Trọng lượng : 1.68 Kg K&iacute;ch thước : 365 x 266 x 21.9 mm</body>\r\n</html>', NULL, '', '', 23, '', 'asus-vivobook-x507ua-ej234t-core-i3-7020u', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-02 11:39:51');
INSERT INTO `products` VALUES (14, 'Dell Inspiron N3567S', 10990000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Dell Inspiron N3567S l&agrave; chiếc m&aacute;y t&iacute;nh d&agrave;nh cho học sinh, sinh vi&ecirc;n v&agrave; d&acirc;n văn ph&ograve;ng. N&oacute; c&oacute; gi&aacute; b&aacute;n phải chăng, đi k&egrave;m với thiết kế hiện đại, chip Intel thế hệ 7 v&agrave; m&agrave;n h&igrave;nh lớn.</body>\r\n</html>', 'quantri/ckfolder/images/categories/avt1_1vb6-3y.png', NULL, 7, 3, 'quantri/ckfolder/images/categories/avt1_1vb6-3y.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD, 1 TB M&agrave;n h&igrave;nh : 15.6 inchs, 1366 x 768 Pixels Card m&agrave;n h&igrave;nh : Intel HD Graphics 620, T&iacute;ch hợp Cổng kết nối : LAN : 10/100 Mbps Ethernet controller, WIFI : 802.11ac Hệ điều h&agrave;nh : Ubuntu Trọng lượng : 2.30 Kg K&iacute;ch thước : 380 x 260 x 23.65 mm</body>\r\n</html>', NULL, '', '', 0, '', 'dell-inspiron-n3567s', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:28:28');
INSERT INTO `products` VALUES (15, 'HP 15-da0037TX/i3 7020U', 10990000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>HP 15-da0037TX/i3 7020U l&agrave; chiếc m&aacute;y t&iacute;nh sở hữu một thiết kế đơn giản, m&agrave;n h&igrave;nh lớn, chip xử l&yacute; Intel thế hệ thứ 7 v&agrave; nhiều ưu điểm nữa b&ecirc;n cạnh một mức gi&aacute; phải chăng.</body>\r\n</html>', 'quantri/ckfolder/images/categories/hp-15-da.png', NULL, 8, 3, 'quantri/ckfolder/images/categories/hp-15-da.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD, 500 GB M&agrave;n h&igrave;nh : 15.6 inchs, 1366 x 768 pixels Card m&agrave;n h&igrave;nh : NVIDIA&reg; GeForce&reg; MX110, Card rời Cổng kết nối : LAN : Integrated 10/100/1000 GbE LAN, WIFI : 802.11b/g/n (1x1) Wi-Fi&reg; and Bluetooth&reg; 4.2 combo Hệ điều h&agrave;nh : Windows 10 Home Single Language 64 Trọng lượng : 1.77 Kg K&iacute;ch thước : 376 x 246 x 22.5 mm</body>\r\n</html>', NULL, '', '', 23, '', 'hp-15-da0037tx-i3-7020u', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:32:09');
INSERT INTO `products` VALUES (16, 'Asus Vivobook X407UA-BV488T/i3-7020U/4G+16GB Optane/1TB/WIN10', 10690000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Với c&ocirc;ng nghệ bộ nhớ Intel Optane, Asus Vivobook X407UA c&oacute; tốc độ nhanh như ổ cứng SSD v&agrave; bộ nhớ nhiều của ổ cứng HDD.</body>\r\n</html>', 'quantri/ckfolder/images/categories/asus-x407ua-bv351t-600x600.png', NULL, 6, 3, 'quantri/ckfolder/images/categories/asus-x407ua-bv351t-600x600.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>CPU : Intel, Core i3 RAM : 4GB + 16GB Optane, DDR4 Ổ cứng : HDD 5400rpm, 1000 GB M&agrave;n h&igrave;nh : 14.0 inchs, 1366 x 768 Pixels Card m&agrave;n h&igrave;nh : Intel HD Graphics, T&iacute;ch hợp Cổng kết nối : LAN : Kh&ocirc;ng, WIFI : 802.11 a/b/g/n/ac Hệ điều h&agrave;nh : Windows 10 Home Trọng lượng : 1.55 KG K&iacute;ch thước : 328 x 246 x 21.9 ~22.9 mm (WxDxH)</body>\r\n</html>', NULL, '', '', 23, '', 'asus-vivobook-x407ua-bv488t-i3-7020u-4g-16gb-optane-1tb-win10', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:32:59');
INSERT INTO `products` VALUES (17, 'Dell Vostro 3568/Core i3-7020U/VTI32072W', 11890000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Dell Vostro 3568/Core i3-7020U l&agrave; chiếc m&aacute;y t&iacute;nh x&aacute;ch tay 15 inch l&yacute; tưởng d&agrave;nh cho người d&ugrave;ng văn ph&ograve;ng v&agrave; học sinh, sinh vi&ecirc;n. Laptop đến với m&agrave;n h&igrave;nh lớn, b&agrave;n ph&iacute;m số v&agrave; c&aacute;c t&iacute;nh năng bảo mật thiết yếu.</body>\r\n</html>', 'quantri/ckfolder/images/categories/dell-vostro-3568-vti32072w-vv-600x600.png', NULL, 7, 3, 'quantri/ckfolder/images/categories/dell-vostro-3568-vti32072w-vv-600x600.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD, 1 TB M&agrave;n h&igrave;nh : 15.6 inches, 1366 x 768 pixels Card m&agrave;n h&igrave;nh : Intel&reg; UHD Graphics 620, T&iacute;ch hợp Cổng kết nối : LAN : RJ-45- Ethernet port, WIFI : Intel 3165AC - 802.11ac and Bluetooth v4.2 combo Hệ điều h&agrave;nh : Windows 10 Home Single Language English Trọng lượng : 2.18 Kg K&iacute;ch thước : 380 x 260 x 23.65 mm</body>\r\n</html>', NULL, '', '', 23, '', 'dell-vostro-3568-core-i3-7020u-vti32072w', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:31:42');
INSERT INTO `products` VALUES (18, 'HP Pavilion 14-ce1014TU/Core i3-8145U/4GB/500GB/WIN10', 12990000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Nếu bạn đang kiếm t&igrave;m một chiếc laptop c&oacute; diện mạo hiện đại sang trọng, được t&iacute;ch hợp nhiều t&iacute;nh năng th&uacute; vị v&agrave; cũng sở hữu hiệu năng ấn tượng th&igrave; HP Pavilion 14-ce1014TU ch&iacute;nh l&agrave; sản phẩm tối ưu d&agrave;nh cho bạn.</body>\r\n</html>', 'quantri/ckfolder/images/categories/hp-pavilion-14.png', NULL, 8, 3, 'quantri/ckfolder/images/categories/hp-pavilion-14.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD 5400rpm, 500 GB M&agrave;n h&igrave;nh : 14.0 inchs, 1920 x 1080 Pixels Card m&agrave;n h&igrave;nh : Intel&reg; HD Graphics 600, T&iacute;ch hợp Cổng kết nối : LAN : 10/100/1000 Mbps, WIFI : 802.11 b/g/n Hệ điều h&agrave;nh : Windows 10 Home SL 64 Trọng lượng : 1,53kg K&iacute;ch thước : D&agrave;i 324 mm - Rộng 227.6 mm - D&agrave;y 19.9 mm</body>\r\n</html>', NULL, '', '', 0, '', 'hp-pavilion-14-ce1014tu-core-i3-8145u-4gb-500gb-win10', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:31:08');
INSERT INTO `products` VALUES (19, 'Chuột không dây quang Microsoft 1850', 350000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Chuột quang kh&ocirc;ng d&acirc;y Microsoft 1850 l&agrave; giải ph&aacute;p hữu hiệu nhằm thay thế chiếc b&agrave;n chuột touchpad của laptop</body>\r\n</html>', 'quantri/ckfolder/images/categories/chuot-khong-day-microsoft-1850.png', NULL, 9, 5, 'quantri/ckfolder/images/categories/chuot-khong-day-microsoft-1850.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>N&uacute;t ON/OFF Để k&eacute;o d&agrave;i tuổi thọ pin, h&atilde;y sử dụng c&ocirc;ng tắc Bật/Tắt để tắt nguồn khi kh&ocirc;ng sử dụng. Chế độ bảo h&agrave;nh 12 th&aacute;ng 1 đổi 1 M&agrave;u sắc Đen C&aacute;c mức DPI 1000 Đặc điểm nổi bật Nhỏ gọn tinh tế, thiết kế vừa tay cho cả nam v&agrave; nữ Thời lượng pin L&ecirc;n đến 12 th&aacute;ng Độ bền n&uacute;t bấm 1 triệu lần nhấn D&ograve;ng m&aacute;y tương th&iacute;ch M&aacute;y t&iacute;nh với Windows XP/Vista/7/8/10; Linus; Mac OS Nhu cầu sử dụng Phổ th&ocirc;ng, văn ph&ograve;ng Loại chuột Quang, kh&ocirc;ng d&acirc;y Thương hiệu</body>\r\n</html>', NULL, '', '', 23, '', 'chuot-khong-day-quang-microsoft-1850', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:30:37');
INSERT INTO `products` VALUES (21, 'Adapter Sạc 1A ivalue MT-C-013 Trắng', 120000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Chuột quang kh&ocirc;ng d&acirc;y Microsoft 1850 l&agrave; giải ph&aacute;p hữu hiệu nhằm thay thế chiếc b&agrave;n chuột touchpad của laptop</body>\r\n</html>', 'quantri/ckfolder/images/categories/cap-sac-00516865-2.png', NULL, 3, 5, 'quantri/ckfolder/images/categories/cap-sac-00516865-2.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Chất liệu Nhựa ABS Chế độ bảo h&agrave;nh 12 th&aacute;ng 1 đổi 1 Thương hiệu ivalue Cường độ d&ograve;ng điện 5V 1A Cổng c&aacute;p kết nối 1 Cổng Số cổng USB 1 D&ograve;ng m&aacute;y tương th&iacute;ch Thiết bị điện thoại v&agrave; m&aacute;y t&iacute;nh bảng T&iacute;nh năng Sạc v&agrave; truyền dữ liệu</body>\r\n</html>', NULL, '', '', 0, '', 'adapter-sac-1a-ivalue-mt-c-013-trang', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:28:56');
INSERT INTO `products` VALUES (22, 'LG INVERTER 1 HP V10ENW', 8690000, NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Loại m&aacute;y lạnh: 1 HP - 1 chiều</body>\r\n</html>', 'quantri/ckfolder/images/categories/maylanh.png', NULL, 3, 7, 'quantri/ckfolder/images/categories/maylanh.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Loại m&aacute;y lạnh: 1 HP - 1 chiều C&ocirc;ng nghệ Inverter Loại gas: R-32 L&agrave;m lạnh nhanh Bảo h&agrave;nh: 24 th&aacute;ng Xuất xứ: Th&aacute;i Lan</body>\r\n</html>', NULL, '', '', 23, '', 'lg-inverter-1-hp-v10enw', NULL, NULL, 1, '2021-04-18 04:46:13', '2021-05-01 02:29:26');
INSERT INTO `products` VALUES (23, 'PHILIPS 43 INCH 43PFT5853S', 6990000, 0, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh FullHD 43 inch</body>\r\n</html>', 'quantri/ckfolder/images/categories/anh-tv.png', NULL, 3, 8, 'quantri/ckfolder/images/categories/anh-tv.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh FullHD 43 inch &Acirc;m thanh v&ograve;m ảo 16W Pixel Plus HD cải tiến h&igrave;nh ảnh Kết nối mạng, xem nội dung trực tuyến</body>\r\n</html>', NULL, '', '', 12, '', 'philips-43-inch-43pft5853s', NULL, NULL, 1, '2021-04-18 04:38:49', '2021-05-11 04:23:37');
INSERT INTO `products` VALUES (24, 'PHILIPS 43 INCH 43PFT5854', 12990000, 0, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Chuột quang kh&ocirc;ng d&acirc;y Microsoft 1850 l&agrave; giải ph&aacute;p hữu hiệu nhằm thay thế chiếc b&agrave;n chuột touchpad của laptop</body>\r\n</html>', 'quantri/ckfolder/images/categories/anh-tv.png', NULL, 8, 8, 'quantri/ckfolder/images/categories/anh-tv.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>M&agrave;n h&igrave;nh FullHD 43 inch &Acirc;m thanh v&ograve;m ảo 16W Pixel Plus HD cải tiến h&igrave;nh ảnh Kết nối mạng, xem nội dung trực tuyến</body>\r\n</html>', NULL, '', '', 12, '', 'philips-43-inch-43pft5854', NULL, NULL, 1, '2021-04-18 04:22:16', '2021-05-11 04:25:09');
INSERT INTO `products` VALUES (62, 'asddsdsdsds', 123, 12, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>dsdsadad</body>\r\n</html>', 'quantri/ckfolder/images/categories/admin-images.png', NULL, 3, 5, 'quantri/ckfolder/images/categories/anh-tv.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>sdsdfdsf</body>\r\n</html>', NULL, 'sdfsdf', 'sdfsdf', 12, 'sdfsfdsf', 'asddsdsdsds', NULL, NULL, 1, '2021-05-02 08:07:01', NULL);

-- ----------------------------
-- Table structure for suppliers
-- ----------------------------
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinhdaidien` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of suppliers
-- ----------------------------
INSERT INTO `suppliers` VALUES (1, 'quantri/ckfolder/images/images/samsung-4.svg', 'Samsung', 1, '2021-04-15 09:12:59', '2021-05-01 06:37:45');
INSERT INTO `suppliers` VALUES (2, 'quantri/ckfolder/images/images/nokia-1.svg', 'Nokia', 1, '2021-04-15 09:13:03', '2021-05-01 06:37:58');
INSERT INTO `suppliers` VALUES (3, 'quantri/ckfolder/images/images/xiaomi-2019.svg', 'Xiaomi', 1, '2021-04-15 09:13:03', '2021-05-01 06:38:10');
INSERT INTO `suppliers` VALUES (4, 'quantri/ckfolder/images/images/honor.svg', 'Honor', 1, '2021-04-15 09:13:03', '2021-05-01 06:38:27');
INSERT INTO `suppliers` VALUES (5, 'quantri/ckfolder/images/images/apple.svg', 'iPhone', 1, '2021-04-15 09:13:03', '2021-05-01 06:39:04');
INSERT INTO `suppliers` VALUES (6, 'quantri/ckfolder/images/images/asus-6630.svg', 'Asus', 1, '2021-04-15 09:13:03', '2021-05-01 06:39:19');
INSERT INTO `suppliers` VALUES (7, 'quantri/ckfolder/images/images/dell-1.svg', 'Dell', 1, '2021-04-15 09:13:03', '2021-05-01 06:39:30');
INSERT INTO `suppliers` VALUES (8, 'quantri/ckfolder/images/images/hp-5.svg', 'HP', 1, '2021-04-15 09:13:03', '2021-05-01 06:39:44');
INSERT INTO `suppliers` VALUES (9, 'quantri/ckfolder/images/images/microsoft-5.svg', 'Microsoft', 1, '2021-04-15 09:13:03', '2021-05-01 06:40:04');

-- ----------------------------
-- Table structure for typeproducts
-- ----------------------------
DROP TABLE IF EXISTS `typeproducts`;
CREATE TABLE `typeproducts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `macha` int(11) NULL DEFAULT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tukhoa` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `motatimkiem` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `hinhchiase` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tenrutgon` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of typeproducts
-- ----------------------------
INSERT INTO `typeproducts` VALUES (1, 'dien thoai thong minh', 'Điện thoại thông minh được coi như một máy tính di động kết hợp với máy ảnh kỹ thuật số và thiết bị chơi game cầm tay, vì nó có một hệ điều hành riêng biệt được thiết kế để hiển thị phù hợp các website một cách bình thường cùng nhiều chức năng khác của má', 'quantri/ckfolder/images/categories/istockphoto-1132126960-170x170.jpg', 0, 'Điện thoại thông minh', 'dien-thoai-thong-minh', 'Điện thoại thông minh giá rẻ', 'quantri/ckfolder/images/categories/istockphoto-1132126960-170x170.jpg', 'smartphone', 1, '2021-04-15 09:14:41', '2021-05-01 06:11:06');
INSERT INTO `typeproducts` VALUES (2, 'dien thoai thuong', 'Điện thoại phổ thông (tiếng Anh: Feature phone), còn gọi là điện thoại', 'quantri/ckfolder/images/categories/istockphoto-1132126960-170x170.jpg', 0, 'Điện thoại thường', 'dien-thoai-thuong', 'Điện thoại thường giá rẻ', 'quantri/ckfolder/images/categories/istockphoto-1132126960-170x170.jpg', 'cuc gach', 1, '2021-04-15 09:14:41', '2021-05-01 06:11:46');
INSERT INTO `typeproducts` VALUES (3, 'laptop', 'Máy tính hay máy điện toán là một máy có thể được hướng dẫn để thực hiện các chuỗi các phép toán số học hoặc logic một cách tự động thông qua lập trình máy tính . Máy tính hiện đại có khả năng tuân theo các tập hợp lệnh tổng quát, được gọi là chương trình', 'quantri/ckfolder/images/categories/istockphoto-970248760-612x612.jpg', 0, 'Máy tính xách tay', 'laptop', 'Máy tính văn phòng', 'quantri/ckfolder/images/categories/istockphoto-970248760-612x612.jpg', 'laptop', 1, '2021-04-15 09:14:41', '2021-05-01 06:12:09');
INSERT INTO `typeproducts` VALUES (4, 'tablet', 'Máy tính bảng (Tên tiếng Anh là tablet computer) còn được gọi tắt là tablet, là một loại thiết bị điện tử thông minh với màn hình cảm ứng có kích thước từ 7 inch trở lên, có thể sử dụng bút cảm ứng đa năng nếu trong thiết kế của nó có hoặc theo cách thông', 'quantri/ckfolder/images/categories/istockphoto-535073615-612x612.jpg', 0, 'Máy tính bảng', 'tablet', 'Máy tình giải trí', 'quantri/ckfolder/images/categories/istockphoto-535073615-612x612.jpg', 'tablet', 1, '2021-04-15 09:14:41', '2021-05-01 06:12:30');
INSERT INTO `typeproducts` VALUES (5, 'phu kien', 'Phụ kiện điện thoại là những sản phẩm đi kèm với điện thoại, ban đầu phụ kiện chỉ đơn giản là những loại củ cáp sạc, tai nghe, dây sạc… Những phụ kiện này có tác dụng hỗ trợ cơ bản nhất cho điện thoại như sạc, nghe nhạc cơ bản.', 'quantri/ckfolder/images/categories/istockphoto-1248994605-612x612.jpg', 0, 'Phụ kiện điện thoại, máy tính bảng, laptop', 'phu-kien', 'phụ kiện điện thoại thông minh', 'quantri/ckfolder/images/categories/istockphoto-1248994605-612x612.jpg', 'phu kien', 1, '2021-04-15 09:14:41', '2021-05-01 06:12:55');
INSERT INTO `typeproducts` VALUES (6, 'dien may', 'Máy điều hòa, máy lạnh đều là tên gọi tắt của máy điều hòa không khí- là một thiết bị gia dụng, hệ thống hoặc cỗ máy được thiết kế để làm mát và hút nhiệt từ một đơn vị diện tích. Việc làm lạnh được thực hiện theo chu trình làm lạnh.', 'quantri/ckfolder/images/categories/istockphoto-1126163079-612x612.jpg', 0, 'Siêu thị điện máy', 'dien-may', 'Điện máy', 'quantri/ckfolder/images/categories/istockphoto-1126163079-612x612.jpg', 'dien may', 1, '2021-04-15 09:14:41', '2021-05-01 06:13:19');
INSERT INTO `typeproducts` VALUES (7, 'May lanh', 'Máy điều hòa, máy lạnh đều là tên gọi tắt của máy điều hòa không khí- là một thiết bị gia dụng, hệ thống hoặc cỗ máy được thiết kế để làm mát và hút nhiệt từ một đơn vị diện tích. Việc làm lạnh được thực hiện theo chu trình làm lạnh.', 'quantri/ckfolder/images/categories/istockphoto-1047055200-612x612.jpg', 6, 'Máy lạnh', 'may-lanh', 'Máy lạnh giải nhiệt mùa hè', 'quantri/ckfolder/images/categories/istockphoto-1047055200-612x612.jpg', 'may lanh', 1, '2021-04-15 09:14:41', '2021-05-01 06:13:44');
INSERT INTO `typeproducts` VALUES (8, 'Tivi', 'Tivi Samsung 50 inch có khung viền đen đơn giản, viền màn hình mỏng đến 0.5 cm tạo cảm giác không viền 3 cạnh giúp hướng sự chú ý hoàn toàn vào nội dung hiển thị trên màn hình, giảm việc xao lãng, cho trải nghiệm xem tivi thêm trọn vẹn.Chân đế hình ch', 'quantri/ckfolder/images/categories/istockphoto-615893422-612x612.jpg', 6, 'Tivi', 'tivi', 'Tivi giải trí', 'quantri/ckfolder/images/categories/istockphoto-615893422-612x612.jpg', 'tivi', 1, '2021-04-15 09:14:41', '2021-05-01 06:14:02');
INSERT INTO `typeproducts` VALUES (9, 'May giat', 'Máy giặt (tiếng Anh: washing machine, laundry machine, clothes washer, washer) là một thiết bị gia đình được sử dụng để giặt đồ giặt. Thuật ngữ này chủ yếu được áp dụng cho các máy sử dụng nước thay vì giặt khô (sử dụng chất lỏng làm sạch thay thế và được', 'quantri/ckfolder/images/categories/istockphoto-900395812-612x612.jpg', 6, 'Máy giặt', 'may-giat', 'Máy giặt siêu êm', 'quantri/ckfolder/images/categories/istockphoto-900395812-612x612.jpg', 'may giat', 1, '2021-04-15 09:14:41', '2021-05-01 06:14:23');
INSERT INTO `typeproducts` VALUES (10, 'Tu lanh', 'Tủ lạnh là một thiết bị làm mát. Thiết bị gia dụng này bao gồm một ngăn cách nhiệt và nhiệt một máy bơm hóa chất phương tiện cơ khí phương tiện để truyền nhiệt từ nó ra môi trường bên ngoài, làm mát bên trong đến một nhiệt độ thấp hơn môi trường xung quan', 'quantri/ckfolder/images/categories/istockphoto-1026623954-612x612.jpg', 6, 'Tủ lạnh', 'tu-lanh', 'Tủ lạnh siêu to khổng lồ', 'quantri/ckfolder/images/categories/istockphoto-1026623954-612x612.jpg', 'tu lanh', 1, '2021-04-15 09:14:41', '2021-05-01 06:14:42');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `hinhdaidien` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 46 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (36, 'dang ngoc quan', 'quan', 'dangngocquan36@gmail.com', '$2y$10$9hEhxPyDG2.0w6A5Yb/XT.4P0neH5CW01Fjg7CxC.mQrw0zqn3CdS', '733 huynh tan phat, quan 7 , tp. Ho chi minh', 'quantri/ckfolder/images/categories/admin-images.png', '09895884909', 'CHYnMjb7OzA76HcOXX90zaZ86yyCRHN61DMif22vuWHAwFlqLQpbXhsyFNBO', 'WTmmIa8L', 1, '2021-04-11 02:05:39', '2021-05-05 12:28:20', NULL);
INSERT INTO `users` VALUES (43, 'asdasdssdasd', 'sdsdfsdf', 'sdfsdf@sdfsdfsdf', '73a90acaae2b1ccc0e969709665bc62f', '12312 dfsd sdfdsf sd dsf dsf sd', '', '123123123213', NULL, NULL, 0, '2021-04-30 06:38:52', NULL, NULL);
INSERT INTO `users` VALUES (45, 'asdsadsad', 'asdasdsads', 'congthuan012@gmail.com', '38e1c3108ebc24e58492592b56318afa', '123dds fsdf sdf sdf sfdf', 'quantri/ckfolder/images/categories/admin-images.png', '123213123', NULL, 'PC8hHuKu', 2, '2021-05-01 02:49:07', '2021-05-04 11:21:49', NULL);

SET FOREIGN_KEY_CHECKS = 1;
