-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 05:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_slug`, `created_at`, `updated_at`) VALUES
(4, 'Iphone', 'iphone', '2020-07-13 20:37:49', '2020-07-13 20:37:49'),
(5, 'Samsung', 'samsung', '2020-07-13 20:37:54', '2020-07-13 20:37:54'),
(6, 'Xiaomi', 'xiaomi', '2020-07-13 20:38:14', '2020-07-13 20:38:14'),
(7, 'Oppo', 'oppo', '2020-07-13 20:38:27', '2020-07-13 20:38:27'),
(8, 'Vsmart', 'vsmart', '2020-07-13 20:38:34', '2020-07-13 20:38:34'),
(9, 'Realme', 'realme', '2020-07-13 20:38:42', '2020-07-13 20:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comm_id` int(10) UNSIGNED NOT NULL,
  `com_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_product` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `com_rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comm_id`, `com_email`, `com_name`, `com_content`, `com_product`, `created_at`, `updated_at`, `com_rating`) VALUES
(1, 'leanhkhoa2205@gmail.com', 'khoa', 'Còn hàng ở quận 7 không shop', 33, '2020-07-17 02:53:58', '2020-07-17 02:53:58', ''),
(2, '5851071036@st.utc2.edu.vn', 'anh khoa', 'Còn màu hồng không shop', 33, '2020-07-17 03:13:20', '2020-07-17 03:13:20', '5');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_12_182000_mr-user', 1),
(4, '2020_07_13_044518_mr-category', 1),
(5, '2020_07_13_161150_mr-product', 1),
(6, '2020_07_14_043002_mr-product_images', 2),
(7, '2020_07_16_044001_mr-product_add_col', 3),
(8, '2020_07_17_091158_mr-comment', 4),
(9, '2020_07_17_100854_mr-comment-add', 5),
(10, '2020_07_19_013848_mr-product-change', 6),
(11, '2020_07_19_155005_create_roles_table', 7),
(12, '2020_07_19_155107_create_user_roles_table', 7),
(13, '2020_07_19_180913_create_permission_tables', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_accessories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_status` tinyint(4) NOT NULL,
  `prod_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_featured` tinyint(4) NOT NULL,
  `prod_cate` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prod_ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_rom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_screen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_slug`, `prod_price`, `prod_img`, `prod_warranty`, `prod_accessories`, `prod_condition`, `prod_promotion`, `prod_status`, `prod_description`, `prod_featured`, `prod_cate`, `created_at`, `updated_at`, `prod_ram`, `prod_rom`, `prod_screen`) VALUES
(33, 'Iphone 11 Pro Max', 'iphone-11-pro-max', '28000000', 'ip11-pro-max-white.PNG', 'Bảo hành chính hãng 12 tháng tại trung tâm bảo hành của Apple Việt Nam.', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Máy mới 100% , chính hãng Apple Việt Nam.', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<p>&lt;h2&gt;&lt;strong&gt;iPhone 11 Pro Max &amp;ndash; Bộ ba camera sau chụp ảnh đỉnh cao&lt;/strong&gt;&lt;/h2&gt;</p>', 1, 4, '2020-07-15 23:22:36', '2020-07-16 23:51:16', '4', '64', '6.5 inches'),
(34, 'Iphone 8 Plus', 'iphone-8-plus', '13000000', 'ip8-plus-gold.jpg', 'Bảo hành chính hãng 12 tháng tại trung tâm bảo hành của Apple Việt Nam.', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Máy mới 100% , chính hãng Apple Việt Nam.', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h3><strong>iPhone 8 Plus 64GB với mặt lưng k&iacute;nh cường lực bo cong hiện đại</strong></h3>', 1, 4, '2020-07-15 23:27:44', '2020-07-15 23:27:44', '3', '64', '5.5 inches'),
(35, 'Iphone 11 Pro', 'iphone-11-pro', '25000000', 'ip11-pro-max-black.jpg', 'Bảo hành chính hãng 12 tháng tại trung tâm bảo hành của Apple Việt Nam.', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Máy mới 100% , chính hãng Apple Việt Nam.', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h3><strong>iPhone 11 Pro chạy con chip Apple A13 Bionic mạnh mẽ c&ugrave;ng ram 4GB đa nhiệm cực tốt</strong></h3>', 1, 4, '2020-07-15 23:31:59', '2020-07-15 23:31:59', '4', '64', '5.8 inches'),
(36, 'Iphone 7 Plus', 'iphone-7-plus', '9000000', 'iphone7.jpg', 'Bảo hành chính hãng 12 tháng tại trung tâm bảo hành của Apple Việt Nam.', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Máy mới 100% , chính hãng Apple Việt Nam.', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h3><strong>iPhone 7 Plus 32GB sở hữu thiết kế tinh tế, sang trọng với khung kim loại nguy&ecirc;n khối</strong></h3>', 0, 4, '2020-07-15 23:35:34', '2020-07-15 23:35:34', '3', '32', '5.5 inches'),
(37, 'Samsung Galaxy S20 Ultra', 'samsung-galaxy-s20-ultra', '23600000', 'ss-galaxy-s20-ultra.png', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<p>&lt;h3&gt;&lt;strong&gt;M&amp;agrave;n h&amp;igrave;nh Samsung S20 Ultra c&amp;oacute; k&amp;iacute;ch thước 6.9 inch với tần số qu&amp;eacute;t 120Hz&lt;/strong&gt;&lt;/h3&gt;</p>', 1, 5, '2020-07-15 23:42:46', '2020-07-16 23:56:10', '4', '64', '6.5 inches'),
(38, 'Vsmart Active 3', 'vsmart-active-3', '4000000', 'vsmart-3.jpg', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<p>&lt;h2&gt;&lt;strong&gt;Vsmart Active 3&amp;nbsp;-&lt;/strong&gt;&lt;strong&gt;&amp;nbsp;Điện thoại gi&amp;aacute; rẻ thương hiệu Việt&lt;/strong&gt;&lt;/h2&gt;</p>', 0, 8, '2020-07-16 00:05:24', '2020-07-17 00:00:54', '4', '64', '6.5 inches'),
(39, 'Xiaomi Redmi Note 9 Pro', 'xiaomi-redmi-note-9-pro', '6000000', 'redmi-note-9.jpg', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h2><strong>Điện thoại Xiaomi Redmi Note 9 Pro&nbsp;</strong><strong>&ndash; Smartphone m&agrave;n h&igrave;nh rộng, vi&ecirc;n pin lớn</strong></h2>', 1, 6, '2020-07-16 00:07:32', '2020-07-16 00:07:32', '6', '64', '6.67 inches'),
(40, 'Oppo Reno 3', 'oppo-reno-3', '7600000', 'oppo-reno-3-blue.jpg', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h2><strong>Điện thoại OPPO Reno 3 &ndash; M&agrave;n h&igrave;nh tr&agrave;n viền, hệ thống 4 camera khủng v&agrave; hiệu năng vượt trội</strong></h2>', 1, 7, '2020-07-16 00:10:02', '2020-07-16 00:10:02', '8', '128', '6.4 inches'),
(41, 'Realme c6', 'realme-c6', '5600000', 'realme-6.png', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h2><strong>Điện thoại Realme 6 &ndash; M&agrave;n h&igrave;nh 90Hz, sạc nhanh 30W c&ugrave;ng 4 camera sau ấn tượng</strong></h2>', 1, 9, '2020-07-16 00:13:50', '2020-07-16 00:13:50', '4', '128', '6.5 inches'),
(42, 'Samsung Galaxy S10+ (Plus)', 'samsung-galaxy-s10-plus', '12800000', 'ss-galaxy-s10.png', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h2><strong>Samsung Galaxy S10 Plus - H</strong><strong>iệu năng đỉnh cao, 3</strong><strong>&nbsp;camera sau chuy&ecirc;n nghiệp</strong></h2>', 1, 5, '2020-07-16 00:18:35', '2020-07-16 00:18:35', '8', '128', '6.4 inches'),
(43, 'Xiaomi Mi Note 10 Lite', 'xiaomi-mi-note-10-lite', '8450000', 'mi-note-10-lite_all.jpg', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h2>Mi Note 10 Lite &ndash; Phi&ecirc;n bản r&uacute;t gọn với hệ thống 4 camera sau 64MP</h2>', 1, 6, '2020-07-16 00:24:10', '2020-07-16 00:24:10', '8', '128', '6.5 inches'),
(44, 'Realme 5i', 'realme-5i', '2300000', 'realme-5i.png', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h1>Realme 5i 3GB 32GB điện thoại gi&aacute; rẻ hiệu năng cao</h1>', 0, 9, '2020-07-16 00:27:34', '2020-07-16 00:27:34', '3', '32', '6.5 inches'),
(45, 'Vsmart Joy 3', 'vsmart-joy-3', '2290000', 'joy-3-1_7 white.png', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h2>Vsmart Joy 3&nbsp;&ndash; Smartphone Việt gi&aacute; rẻ, cấu h&igrave;nh ấn tượng</h2>', 0, 8, '2020-07-16 00:32:10', '2020-07-16 00:32:10', '2', '32', '6.5 inches'),
(46, 'Oppo Find X2', 'oppo-find-x2', '19990000', 'oppo-find-x2-all.png', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<h2><strong>Oppo Find X2</strong><strong>&nbsp;&ndash;</strong><strong>&nbsp;Hiệu năng đỉnh cao</strong><strong>, m&agrave;n h&igrave;nh chiếm trọn mặt trước</strong></h2>', 1, 7, '2020-07-16 00:37:59', '2020-07-16 00:37:59', '8', '256', '6.7 inches'),
(47, 'Samsung Galaxy A51', 'samsung-galaxy-a51', '7050000', 'galaxy-a51-pink.jpg', 'Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất', 'Máy - Sạc USB-C 18W - Cáp USB-C to Lightning - Tai nghe - Que lấy SIM, sách hướng dẫn', 'Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất', 'Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)', 1, '<p>&lt;p&gt;Samsung A51 chụp ảnh cực n&amp;eacute;t pin cực tr&amp;acirc;u&lt;/p&gt;</p>', 0, 5, '2020-07-16 00:42:03', '2020-07-16 23:59:23', '4', '64', '5.8 inches');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_img_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `image`, `prod_img_id`, `created_at`, `updated_at`) VALUES
(17, '[\"http://localhost:8080/upload_Image/ip11-pro-max.png\",\"http://localhost:8080/upload_Image/ip11-pro-max-white.PNG\",\"http://localhost:8080/upload_Image/ip11-pro-max-blue.jpg\",\"http://localhost:8080/upload_Image/ip11-pro-max-black.jpg\"]', 33, '2020-07-15 23:22:36', '2020-07-16 23:51:16'),
(18, '[\"http://localhost:8080/upload_Image/ip8-plus-white.jpg\",\"http://localhost:8080/upload_Image/ip8-plus-gold.jpg\",\"http://localhost:8080/upload_Image/ip8-plus-black.jpg\"]', 34, '2020-07-15 23:27:44', '2020-07-15 23:27:44'),
(19, '[\"http://localhost:8080/upload_Image/iphone-11-pro-gold.png\",\"http://localhost:8080/upload_Image/ip11-pro-max-white.PNG\",\"http://localhost:8080/upload_Image/ip11-pro-max-blue.PNG\",\"http://localhost:8080/upload_Image/ip11-pro-max-black.jpg\"]', 35, '2020-07-15 23:32:00', '2020-07-15 23:32:00'),
(20, '[\"http://localhost:8080/upload_Image/iphone-7-plus-gold_3_3_1_1.jpg\",\"http://localhost:8080/upload_Image/iphone-7-plus-black_3_3_1_1.jpg\"]', 36, '2020-07-15 23:35:34', '2020-07-15 23:35:34'),
(21, '[\"http://localhost:8080/upload_Image/ss-galaxy-s20-ultra-white.png\",\"http://localhost:8080/upload_Image/ss-galaxy-s20-ultra-black.png\",\"http://localhost:8080/upload_Image/ss-galaxy-s20-ultra-1.png\"]', 37, '2020-07-15 23:42:46', '2020-07-16 23:56:10'),
(22, '[\"http://localhost:8080/upload_Image/vsmart-3.jpg\",\"http://localhost:8080/upload_Image/vsmart-3-pink.png\",\"http://localhost:8080/upload_Image/vsmart-3-blue.png\"]', 38, '2020-07-16 00:05:25', '2020-07-17 00:00:54'),
(23, '[\"http://localhost:8080/upload_Image/redmi-note-9.jpg\",\"http://localhost:8080/upload_Image/redmi-note-9-white.jpg\",\"http://localhost:8080/upload_Image/redmi-note-9-black.jpg\"]', 39, '2020-07-16 00:07:33', '2020-07-16 00:07:33'),
(24, '[\"http://localhost:8080/upload_Image/oppo-reno-3.jpg\",\"http://localhost:8080/upload_Image/oppo-reno-3-blue.jpg\",\"http://localhost:8080/upload_Image/oppo-reno-3-black.jpg\"]', 40, '2020-07-16 00:10:03', '2020-07-16 00:10:03'),
(25, '[\"http://localhost:8080/upload_Image/realme-6.png\",\"http://localhost:8080/upload_Image/realme-6-white.png\",\"http://localhost:8080/upload_Image/realme-6-detail.png\",\"http://localhost:8080/upload_Image/realme-6-blue.png\"]', 41, '2020-07-16 00:13:51', '2020-07-16 00:13:51'),
(26, '[\"http://localhost:8080/upload_Image/ss-galaxy-s10.png\",\"http://localhost:8080/upload_Image/s10_plus_white.png\",\"http://localhost:8080/upload_Image/s10_plus_green.jpg\",\"http://localhost:8080/upload_Image/s10_plus_black.jpg\"]', 42, '2020-07-16 00:18:35', '2020-07-16 00:18:35'),
(27, '[\"http://localhost:8080/upload_Image/mi-note-10-lite.jpg\",\"http://localhost:8080/upload_Image/mi-note-10-lite-white.jpg\",\"http://localhost:8080/upload_Image/mi-note-10-lite-black.jpg\"]', 43, '2020-07-16 00:24:10', '2020-07-16 00:24:10'),
(28, '[\"http://localhost:8080/upload_Image/realme-5i.png\",\"http://localhost:8080/upload_Image/realme-5i-3gb-2.png\"]', 44, '2020-07-16 00:27:34', '2020-07-16 00:27:34'),
(29, '[\"http://localhost:8080/upload_Image/joy-3-1_7_black.png\",\"http://localhost:8080/upload_Image/joy-3-1_7_b.png\",\"http://localhost:8080/upload_Image/joy-3-1_7%20white.png\"]', 45, '2020-07-16 00:32:10', '2020-07-16 00:32:10'),
(30, '[\"http://localhost:8080/upload_Image/oppo-find-x2.png\",\"http://localhost:8080/upload_Image/oppo-find-x2-detail.png\",\"http://localhost:8080/upload_Image/oppo-find-x2-blue.png\",\"http://localhost:8080/upload_Image/oppo-find-x2-black.png\"]', 46, '2020-07-16 00:37:59', '2020-07-16 00:37:59'),
(31, '[\"http://localhost:8080/upload_Image/galaxy-a51-white.jpg\",\"http://localhost:8080/upload_Image/galaxy-a51-blue.jpg\",\"http://localhost:8080/upload_Image/galaxy-a51-black.jpg\"]', 47, '2020-07-16 00:42:04', '2020-07-16 23:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'leanhkhoa2205@gmail.com', '$2y$10$tLAvHBZkNf6ncJUQAXxiX.Ff7UaScuC5w51GEmz9kDZK4fL2zfOKC', 0, 's94MOHQ1HxBAys6D0gF1QjiIzegmt6RgOVBrw2eoisknrFlfu1zAnBBFy7Xv', NULL, NULL),
(2, '5851071036@st.utc2.edu.vn', '$2y$10$fa9WKiHKgrmw5qWZneYVhe0/a3UdzguD01LOrMB426qVBB1EKWFe2', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `comment_com_product_index` (`com_product`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `products_prod_cate_index` (`prod_cate`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_prod_img_id_index` (`prod_img_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_com_product_foreign` FOREIGN KEY (`com_product`) REFERENCES `products` (`prod_id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_prod_cate_foreign` FOREIGN KEY (`prod_cate`) REFERENCES `category` (`cate_id`) ON DELETE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_prod_img_id_foreign` FOREIGN KEY (`prod_img_id`) REFERENCES `products` (`prod_id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
