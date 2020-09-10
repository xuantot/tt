-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2019 at 04:55 PM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp571903_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `short_description`, `img`, `level`, `parent_id`, `order`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'CẬP NHẬT VISA', 'cap-nhat-visa', 'những visa về', 'category-j9fC9bCXF.jpg', 1, 0, 999999, 1, 0, '2019-03-27 17:48:05', '2019-04-02 19:48:04'),
(2, 'VISA HOT', 'visa-hot', 'thành công', 'category-22YRYIHAS.jpg', 2, 1, 999999, 1, 0, '2019-03-27 17:48:38', '2019-04-13 13:18:34'),
(9, 'GIỚI THIỆU', 'gioi-thieu', 'Giới thiệu công ty Betonamuwaku', 'category-dp5FMaKW6.jpg', 1, 0, 10, 1, 1, '2019-03-28 16:46:31', '2019-04-24 13:41:03'),
(10, '日本方のお客様へ', 'japaneses-customers', '日本方へ挨拶', 'category-29GGuwzR9.jpg', 2, 9, 20, 1, 1, '2019-03-28 16:47:30', '2019-04-24 13:43:50'),
(11, 'Giới thiệu chung', 'gioi-thieu-chung', 'Giới thiệu chung về công ty Betonamuwaku', 'category-UDcO8ihU1.jpg', 2, 9, 30, 1, 1, '2019-03-28 16:48:21', '2019-04-24 13:53:01'),
(12, 'JOB HOT', 'job-hot', 'jobs đang tuyển', 'category-W772CzxpG.jpg', 1, 0, 20, 1, 1, '2019-03-28 17:07:25', '2019-04-02 09:01:35'),
(14, 'KỸ THUẬT', 'ky-thuat', 'Cơ khí', 'category-z2ofduLDc.jpg', 2, 12, 30, 1, 1, '2019-03-28 17:08:33', '2019-04-02 13:38:30'),
(15, 'KINH TẾ', 'kinh-te', 'phiên dịch - khách sạn - nhà hàng', 'category-lfBVGgGEJ.jpg', 2, 12, 40, 1, 1, '2019-03-28 17:09:32', '2019-04-02 12:52:21'),
(16, 'CHUYỂN VIỆC', 'chuyen-viec', 'Kỹ sư chuyển việc', 'category-MHvpvyYcv.jpg', 1, 0, 30, 1, 1, '2019-03-28 17:10:28', '2019-04-02 09:02:04'),
(17, 'Vùng Tokyo', 'vung-tokyo', 'Vùng Tokyo, Saitama, Kanagawa, .....', 'category-KD5WjnTBV.jpg', 2, 16, 10, 1, 1, '2019-03-28 17:11:23', '2019-04-19 14:02:31'),
(18, 'Vùng Osaka', 'vung-osaka', 'Vùng Osaka, Kyouto, Nara, Mie, .....', 'category-8GTQPYpfJ.jpg', 2, 16, 20, 1, 1, '2019-03-28 17:12:24', '2019-04-19 14:02:48'),
(21, 'THÔNG TIN HỮU ÍCH', 'thong-tin-huu-ich', 'Cuộc sống NHẬT BẢN', 'category-EC3nf9eo6.jpg', 1, 0, 50, 1, 1, '2019-03-28 17:17:57', '2019-04-02 19:21:32'),
(24, 'NHỮNG THAY ĐỔI CỦA NHẬT BẢN', 'nhung-thay-doi-cua-nhat-ban', 'LUẬT PHÁP - TIN TỨC', 'category-geJXElwBq.jpg', 2, 21, 40, 1, 1, '2019-03-28 17:20:41', '2019-04-05 14:12:06'),
(25, 'DU LỊCH', 'du-lich', '4 mùa', 'category-WCKV2FpaS.jpg', 1, 0, 60, 1, 1, '2019-03-28 17:53:39', '2019-04-02 19:45:43'),
(26, 'BỐN MÙA', 'xuan-ha-thu-dong', 'du lịch bốn mùa', 'category-aRGhXAWIJ.jpg', 2, 25, 10, 1, 1, '2019-03-28 17:55:32', '2019-04-03 09:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `contentgt`
--

CREATE TABLE `contentgt` (
  `id_gt` int(10) UNSIGNED NOT NULL,
  `gt_pic_a` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gt_title_a` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gt_content_a` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contentgt`
--

INSERT INTO `contentgt` (`id_gt`, `gt_pic_a`, `gt_title_a`, `gt_content_a`) VALUES
(1, 'ita-gioithieu-GzglQ9j0O.gif', 'Bạn muốn chuyển visa học sinh sang visa kỹ sư?', '<h2><strong>&nbsp;<a href=\"http://vnjob.jp\" target=\"chuynvisaduhcsangvisaks\">chuyển visa học sinh sang visa kỹ sư</a>&nbsp;như thế n&agrave;o?</strong></h2>\r\n\r\n<p>&nbsp; &nbsp;H&atilde;y nhanh ch&acirc;n đến với Betonamuwaku. Với sự nhiệt t&igrave;nh của đội ngũ nh&acirc;n vi&ecirc;n trẻ - c&oacute; kinh nghiệm, v&agrave; c&ocirc;ng ty đối t&aacute;c của Betonamuwaku l&agrave; những c&ocirc;ng ty chuyển về c&aacute;c ngh&agrave;nh c&ocirc;ng nghiệp trọng điểm của Nhật Bản. Betonamuwaku hứa hẹn sẽ đem lại cho bạn những dịch vụ h&agrave;i l&ograve;ng nhất.</p>'),
(2, 'ita-gioithieu-QVOPVg6Fb.jpg', 'VISA GIA ĐÌNH ? Thủ tục bảo lãnh như thế nào?', '<h2><strong>Bạn đang ở Nhật? Bạn muốn <a href=\"http://vnjob.jp\" target=\"bolnhgianh\">bảo l&atilde;nh gia đ&igrave;nh</a> ?</strong></h2>\r\n\r\n<p>H&atilde;y nhanh ch&acirc;n đến với Betonamuwaku. Với sự nhiệt t&igrave;nh của đội ngũ nh&acirc;n vi&ecirc;n trẻ - c&oacute; kinh nghiệm, v&agrave; c&ocirc;ng ty đối t&aacute;c của Betonamuwaku l&agrave; những c&ocirc;ng ty chuyển về c&aacute;c ngh&agrave;nh c&ocirc;ng nghiệp trọng điểm của Nhật Bản. Betonamuwaku hứa hẹn sẽ đem lại cho bạn những dịch vụ h&agrave;i l&ograve;ng nhất.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `diachi`
--

CREATE TABLE `diachi` (
  `id_add` int(10) UNSIGNED NOT NULL,
  `ad_here` text COLLATE utf8mb4_unicode_ci,
  `ad_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_fb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_bank` text COLLATE utf8mb4_unicode_ci,
  `ad_chat` text COLLATE utf8mb4_unicode_ci,
  `ad_fanpage` text COLLATE utf8mb4_unicode_ci,
  `ad_fbroot` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diachi`
--

INSERT INTO `diachi` (`id_add`, `ad_here`, `ad_phone`, `ad_email`, `ad_fb`, `ad_bank`, `ad_chat`, `ad_fanpage`, `ad_fbroot`) VALUES
(1, '東京都新宿区高田馬場1-33-6平和相互ビル403', '03-6265-9756', 'vnjob1969@gmail.com', 'FB: ベトナムワーク', 'Vietcombank, BVID', '<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5cbd76fbd6e05b735b43a76e/default\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->', '<div class=\"fb-page\" data-href=\"https://www.facebook.com/luyenthitiengnhatonline/\" data-tabs=\"timeline\" data-height=\"150\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/luyenthitiengnhatonline/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/luyenthitiengnhatonline/\">Luyện thi tiếng nhật online</a></blockquote></div>', '<div id=\"fb-root\"></div>\r\n<script async defer src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=253708038620990&autoLogAppEvents=1\"></script>');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id_dv` int(10) UNSIGNED NOT NULL,
  `dv_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_des` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dktheodoi`
--

CREATE TABLE `dktheodoi` (
  `id_dktd` int(10) UNSIGNED NOT NULL,
  `dkth_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dktheodoi`
--

INSERT INTO `dktheodoi` (`id_dktd`, `dkth_email`, `created_at`, `updated_at`) VALUES
(17, 'vanphi.tegff@gmail.com', '2019-04-01 15:38:50', '2019-04-01 15:38:50'),
(19, 'xuantot@gmail.com', '2019-04-02 12:55:45', '2019-04-02 12:55:45'),
(20, 'tu.betonamuwaku180520@gmail.com', '2019-04-13 13:01:00', '2019-04-13 13:01:00'),
(27, 'nguyenthitu291193@gmail.com', '2019-04-19 08:43:47', '2019-04-19 08:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `doitac`
--

CREATE TABLE `doitac` (
  `id_vendor` int(10) UNSIGNED NOT NULL,
  `vd_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vd_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vd_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vd_order` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doitac`
--

INSERT INTO `doitac` (`id_vendor`, `vd_name`, `vd_pic`, `vd_link`, `vd_order`) VALUES
(2, 'ILTEA', 'ita_doitac_SD4BfGmcU.jpg', 'bvc', 200),
(3, 'FPT', 'ita_doitac_BJc6b4rP5.jpg', 'abc', 43),
(4, 'Lanh', 'ita_doitac_qWfQgYmty.jpg', 'nbv', 15),
(5, 'Google', 'ita_doitac_y53I0IqLp.jpg', '#', 15),
(6, 'Facebook', 'ita_doitac_M1Ne554OY.jpg', 'fabook', 21);

-- --------------------------------------------------------

--
-- Table structure for table `infor`
--

CREATE TABLE `infor` (
  `id_info` int(10) UNSIGNED NOT NULL,
  `infor_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infor_des` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ita_user`
--

CREATE TABLE `ita_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ita_user`
--

INSERT INTO `ita_user` (`id`, `full_name`, `name`, `avatar`, `email`, `phone`, `short_des`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Betonamuwaku', 'admin_news', 'user_avatar_pWJWyCWQ1.jpg', 'vnjob1969@gmail.com', '0362659756', 'Your splendid beginning', '$2y$10$eQsUw7AietZWLi.s80Op0u7BW2Gp4RWGME4Jrw.Ur.HMCLKr7Ia3O', 1, 't8vN30J42A6haDNwl7EMsE6cjmf6JfF6PIOpcBW9QTHxKX2U2NonIF1syf9m', NULL, '2019-04-20 16:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_contact` int(10) UNSIGNED NOT NULL,
  `ct_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ct_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ct_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ct_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ct_content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_contact`, `ct_name`, `ct_phone`, `ct_email`, `ct_title`, `ct_content`, `created_at`, `updated_at`) VALUES
(1, 'Vo van phi aaaaa', '095345', 'dsgsdgsg@gmail.com', 'gfdgdfg', 'gdfgdfgdfgdf', '2019-02-19 23:48:32', '2019-02-20 00:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_01_19_171307_create_khoahoc_table', 1),
(9, '2019_01_19_171347_create_giangvien_table', 1),
(10, '2019_01_19_171428_create_slideanh_table', 1),
(11, '2019_01_19_171459_create_camnhanhv_table', 1),
(12, '2019_01_19_171543_create_dktheodoi_table', 1),
(13, '2019_01_19_171609_create_tintuc_table', 1),
(14, '2019_01_19_171650_create_lienhe_table', 1),
(15, '2019_01_19_171740_create_doitac_table', 1),
(16, '2019_01_19_171846_create_diachi_table', 1),
(17, '2019_01_28_155906_ita_user', 2),
(18, '2019_01_30_152021_create_khoahoc_giangvien_table', 3),
(19, '2019_01_31_133440_create_landingpage_table', 3),
(20, '2019_02_17_115525_create_dichvu_tbl', 4),
(21, '2019_02_17_115636_create_lydochonct_table', 4),
(22, '2019_02_17_153556_create_infor_table', 4),
(23, '2019_02_19_225207_create_video_home', 5),
(24, '2019_02_19_225812_create_content_gioithieu', 5),
(26, '2019_02_23_114957_create_members_khoahoc', 6),
(27, '2019_03_23_131416_create_category_table', 7),
(28, '2019_03_28_090210_create_tags_table', 8),
(29, '2019_03_30_174256_create_news_tags_table', 9),
(30, '2019_03_30_234054_create_news_tag_table', 10),
(31, '2019_03_31_000041_create_news_tag_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news_tags`
--

CREATE TABLE `news_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tags` int(10) UNSIGNED NOT NULL,
  `id_blog` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id_seo` int(11) NOT NULL,
  `seo_pic` varchar(255) DEFAULT NULL,
  `seo_page` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_des` text,
  `seo_keywords` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id_seo`, `seo_pic`, `seo_page`, `seo_title`, `seo_des`, `seo_keywords`) VALUES
(1, 'ita-seo-vmLOFWct0.jpg', 'Trang Chủ', 'vnjob.jp - Home', 'Đây là kênh thông tin của vnjob.jp , vui lòng dẫn nguồn khi sao chép thông tin', 'vnjob.jp, home'),
(2, 'ita-seo-WVw0uUcp4.jpg', 'Giới Thiệu', 'Giới Thiệu', 'Giới thiệu về vnjob.jp', 'giới thiệu vnjob.jp'),
(3, 'ita-seo-LWQH4kXiW.jpeg', 'blog', 'Gallery', 'Thư viện ảnh của vnjob.jp', 'gallery'),
(4, 'ita-seo-v3wNQndiK.jpg', 'Liên Hệ', 'Liên Hệ', 'Liên Hệ', 'Liên Hệ');

-- --------------------------------------------------------

--
-- Table structure for table `slideanh`
--

CREATE TABLE `slideanh` (
  `id_pic` int(10) UNSIGNED NOT NULL,
  `pic_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_order` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideanh`
--

INSERT INTO `slideanh` (`id_pic`, `pic_name`, `pic_img`, `pic_link`, `pic_order`) VALUES
(1, 'Núi Phú Sỹ', 'ita_slideanh_Qg5ygdnFv.jpg', 'https:vnjob.jp', 10),
(10, 'Trang phục Japan', 'ita_slideanh_uDGLjD0dy.jpg', 'https:vnjob.jp', 20),
(11, 'Ảnh 4', 'ita_slideanh_IaiM5kMN0.jpg', '#', 30),
(12, 'anh đào ở công viên', 'ita_slideanh_HIuu7g14a.jpg', 'https:vnjob.jp', 15),
(13, 'Ảnh 6', 'ita_slideanh_Q0UxiEkmc.jpg', 'https:vnjob.jp', 25),
(14, 'cơ khí', 'ita_slideanh_EUALSia5O.jpg', 'https:vnjob.jp', 10),
(15, 'sản xuất linh kiện', 'ita_slideanh_XSxaQNF9k.jpg', 'https:vnjob.jp', 15),
(16, 'xây dựng - mộc', 'ita_slideanh_vsc6mwVFZ.jpg', 'https:vnjob.jp', 20),
(17, 'xây dựng tổng hợp', 'ita_slideanh_d2oCqRn5s.jpg', 'https:vnjob.jp', 15),
(18, 'slogan', 'ita_slideanh_tOc56aOSF.jpg', 'https:vnjob.jp', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `tag_slug`, `created_at`, `updated_at`) VALUES
(18, 'Mỹ Hàn Triều', 'my-han-trieu-18', '2019-04-01 16:18:19', '2019-04-01 16:18:19'),
(19, 'Gifu', 'gifu-19', '2019-04-01 16:18:32', '2019-04-13 12:59:56'),
(20, 'Shiga', 'shiga-20', '2019-04-01 16:18:44', '2019-04-13 12:59:46'),
(21, 'Kanagawa', 'kanagawa-21', '2019-04-01 16:33:40', '2019-04-13 12:59:33'),
(22, 'Osaka', 'osaka-22', '2019-04-01 16:33:51', '2019-04-13 12:59:05'),
(23, 'Nagoya', 'nagoya-23', '2019-04-01 16:34:04', '2019-04-13 12:58:53'),
(24, 'Shizuoka', 'shizuoka-24', '2019-04-01 16:50:28', '2019-04-13 12:58:40'),
(25, 'Mie', 'mie-25', '2019-04-01 16:50:34', '2019-04-13 12:58:26'),
(26, 'Ibaraki', 'ibaraki-26', '2019-04-01 16:50:40', '2019-04-13 12:58:14'),
(27, 'Kyoto', 'kyoto-27', '2019-04-01 16:50:47', '2019-04-13 12:58:00'),
(28, 'Tokyo', 'tokyo-28', '2019-04-01 17:05:05', '2019-04-13 12:57:51'),
(29, 'bảo lãnh gia đình', 'bao-lanh-gia-dinh-29', '2019-04-01 17:05:19', '2019-04-13 12:57:29'),
(30, 'kiểm tra', 'kiem-tra-30', '2019-04-01 17:05:26', '2019-04-13 12:55:25'),
(31, 'sản xuất', 'san-xuat-31', '2019-04-01 17:05:36', '2019-04-13 12:55:10'),
(32, 'ô tô', 'o-to-32', '2019-04-01 17:08:29', '2019-04-13 12:54:59'),
(33, 'linh kiện điện tử', 'linh-kien-dien-tu-33', '2019-04-01 17:08:37', '2019-04-13 12:54:48'),
(34, 'nhà hàng', 'nha-hang-34', '2019-04-01 17:11:38', '2019-04-13 12:54:31'),
(35, 'khách sạn', 'khach-san-35', '2019-04-01 17:12:05', '2019-04-13 12:54:19'),
(36, 'Nhật Bản', 'nhat-ban-36', '2019-04-01 17:12:26', '2019-04-05 16:31:08'),
(37, 'hoa anh đào', 'hoa-anh-dao-37', '2019-04-01 17:21:38', '2019-04-05 16:30:53'),
(38, 'cơ khí', 'co-khi-38', '2019-04-01 17:21:44', '2019-04-05 15:28:40'),
(39, 'Chế độ', 'che-do-39', '2019-04-01 17:21:51', '2019-04-03 16:34:21'),
(40, 'luật pháp', 'luat-phap-40', '2019-04-01 17:33:00', '2019-04-03 16:34:00'),
(41, 'yêu cầu chung', 'yeu-cau-chung-41', '2019-04-01 17:33:09', '2019-04-03 16:33:51'),
(42, 'Nhà', 'nha-42', '2019-04-01 17:33:14', '2019-04-03 16:33:20'),
(43, 'Lương cơ bản', 'luong-co-ban-43', '2019-04-01 17:35:47', '2019-04-05 16:30:29'),
(44, 'Địa điểm', 'dia-diem-44', '2019-04-01 17:35:53', '2019-04-03 16:32:46'),
(45, 'Nội dung công việc', 'noi-dung-cong-viec-45', '2019-04-01 17:36:36', '2019-04-03 16:32:34'),
(46, 'Visa', 'visa-46', '2019-04-02 01:18:23', '2019-04-03 16:32:08'),
(47, 'Việt Nam', 'viet-nam-47', '2019-04-02 01:18:32', '2019-04-02 01:18:32'),
(48, 'xây dựng', 'xay-dung-48', '2019-04-02 13:21:10', '2019-04-02 13:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_blog` int(10) UNSIGNED NOT NULL,
  `blog_cate` int(11) DEFAULT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_des` text COLLATE utf8mb4_unicode_ci,
  `blog_content` text COLLATE utf8mb4_unicode_ci,
  `blog_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_order` int(11) NOT NULL DEFAULT '10',
  `blog_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_active` tinyint(4) NOT NULL DEFAULT '0',
  `blog_hot` tinyint(3) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_blog`, `blog_cate`, `blog_title`, `blog_slug`, `blog_des`, `blog_content`, `blog_pic`, `blog_order`, `blog_keywords`, `blog_active`, `blog_hot`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 11, 'Giới thiệu chung về công ty Betonamuwaku', 'gioi-thieu-chung-ve-cong-ty-betonamuwaku', 'Công ty Betonamuwaku được thành lập như thế nào?', '<h2><strong><a href=\"http://vnjob.jp/gioi-thieu-chung\" target=\"Betonamuwaku\">Betonamuwaku</a>&nbsp;l&agrave; c&ocirc;ng ty g&igrave;? C&aacute;c bạn c&oacute; thấy quen?</strong></h2>\r\n\r\n<p><strong>Betonamuwaku</strong> ch&iacute;nh l&agrave; t&ecirc;n gọi tắt của <strong><a href=\"http://vnjob.jp\">合同会社ベトナムワーク</a></strong>. Những bạn đang sinh sống tại Nhật v&agrave; c&oacute; &yacute; định muốn đi Shyu chắc hẳn đ&atilde; nghe t&ecirc;n Betonamuwaku qua bạn b&egrave;, facebook,...</p>\r\n\r\n<p>Gi&aacute;m đốc L&ecirc; Văn Hưng hiểu được sự lo lắng của c&aacute;c bạn du học sinh khi muốn chuyển sang visa kỹ sư, n&ecirc;n Betonamuwaku được th&agrave;nh lập v&agrave;o th&aacute;ng 4 năm 2018.&nbsp;</p>\r\n\r\n<p>Trụ sở tại: 東京都新宿区高田馬場1－33－6　平和相互ビル403</p>\r\n\r\n<p>Thời gian mở cửa: 9:00~18:00</p>\r\n\r\n<p>TEL: 03-6265-9756</p>\r\n\r\n<p>Email: vnjob1969@gmail.com</p>\r\n\r\n<p>Website: http://vnjob.jp/</p>\r\n\r\n<p>Betonamuwaku với đội ngũ nh&acirc;n vi&ecirc;n trẻ, nhiệt t&igrave;nh, tr&aacute;ch nhiệm sẽ cung cấp những dịch vụ tốt nhất cho kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p><a href=\"vnjob.jp\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/45537539_184737999076569_2387709479626997760_o(1).jpg\" style=\"height:300px; width:500px\" /></a></p>\r\n\r\n<p>&nbsp;</p>', 'ita_tintuc_x7LTaLIpx.jpg', 20, NULL, 1, 1, 1, '2019-03-28 18:09:17', '2019-04-24 15:37:26'),
(19, 10, '人材紹介サービスのご案内', 'dich-vu-gioi-thieu-lao-dong', '合同会社ベトナムワークベトナム人人材のご紹介', '<h2><strong>人材紹介サービス</strong></h2>\r\n\r\n<h3><strong>１．サービス内容</strong></h3>\r\n\r\n<p>　十分な日本語能力を持ち日本語でのコミュニケーションに問題がなく、貴社の企業文化に順応するエンジニアを紹介！</p>\r\n\r\n<p>　ベトナムワークは以下の特徴を持ったベトナム人の人材サービスを提供しています。</p>\r\n\r\n<p>　　・日本留学経験者多数！</p>\r\n\r\n<p>　ベトナムの大学を卒業して在日しているベトナム人留学生、日本の学校で学習しているベトナム人留学生も多数在籍しています。</p>\r\n\r\n<p>　　・日本での就業経験者多数！</p>\r\n\r\n<p>　日本での就業経験がある人材も多数在籍。 日本の文化や慣習を熟知しています。</p>\r\n\r\n<p>　　・エンジニア多数！</p>\r\n\r\n<p>　工業大学や工科大学の電気-電子テクノロジー、自動車技術テクノロジー、機械加工、機械技術テクノロジー学部などを卒業し就労経験を有し即戦力となるベトナムエンジニアも多数在籍しております。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ビザ取得手続きは弊社が代行！</p>\r\n\r\n<p>　留学生が就労する際には在留資格変更手続が、また、在ベトナム人が日本で就労する際には在留資格認定手続が必要ですが、その際の手続きや費用等は弊社が一切を負担いたします。</p>\r\n\r\n<h3><strong>２．人材紹介サービスの仕組み</strong></h3>\r\n\r\n<p>　貴社様の採用ニーズに応じて適切な人材をご紹介。 ご紹介者の入社が決定し３カ月就労した後に紹介料をいただくシステム です。</p>\r\n\r\n<p>　人材紹介サービスは、貴社様の求人申込みと求職者の求職申込みを受け、貴社様と求職者との間における雇用関係の成立をあっせんすることです。派遣元(派遣会社)が雇用主となる人材派遣とは異なり、貴社様が雇用主となります。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=\"vnjob.jp\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/so%20do%20new.PNG\" style=\"height:276px; width:500px\" /></a></p>\r\n\r\n<h3><strong>３．人材紹介サービス利用のメリット</strong></h3>\r\n\r\n<p>　採用にかかる手間とコストを省きます！</p>\r\n\r\n<p>　現在、少子高齢化や産業構造の変化などによって、多くの業種で人材不足が深刻となっており、この人材不足を補う手段として外国人労働者は日本社会において欠かすことのできない貴重な戦力となっております。</p>\r\n\r\n<p>　仕事が体力的にきついとか、勤務地が不便だとか、給与水準が高くないなどの理由から日本人が敬遠する仕事でも、多くの外国人はやりがいを感じ、まじめに働いてくれ、このような外国人社員を積極的に採用することで業績を拡大され、また、このような外国人社員が今では中核社員として活躍しているという企業様も少なくありません。</p>\r\n\r\n<p>　外国人は、少々のことで不満を述べたり仕事を投げ出したりしません。日本人以上に仕事に真面目に前向きに取り組みます。</p>\r\n\r\n<p>　今まで日本人の採用のために多額の費用をかけた募集広告を行ってきたが、外国人人材を採用しようにもそのノウハウがわからない・・・。</p>\r\n\r\n<p>　求人にかかる膨大な手間をすべて省ける のが人材紹介サービスです。</p>\r\n\r\n<p>　ベトナムワークにお任せいただければ、書類審査や面接へスムーズに進むことができます。</p>\r\n\r\n<h3><strong>4．サービスの流れ</strong></h3>\r\n\r\n<p>①条件・ニーズの確認</p>\r\n\r\n<p>　求人内容や採用条件などについてお伺いいたします。</p>\r\n\r\n<p>②お申込み（ご契約締結）</p>\r\n\r\n<p>　個人情報保護、企業情報保護の観点から、人選の前にお申込書を頂戴し、人選を開始させて頂いております。</p>\r\n\r\n<p>③求人票作成&rarr;マッチング</p>\r\n\r\n<p>　お伺いした内容を基に求人票を作成致し、その後、弊社営業とともに貴社求人にマッチした人選を行います。</p>\r\n\r\n<p>④求職者への応募意思の確認</p>\r\n\r\n<p>　貴社求人の対象となる求職者に対し、貴社の求人内容、文面だけでは分からない貴社の魅力をお伝えし、応募意思の確認を行います。その際には、実際に職場見学などをも行わせていただく場合もあります。</p>\r\n\r\n<p>⑤求職者の推薦、書類選考&rarr;面接</p>\r\n\r\n<p>　ご希望に沿う人材を弊社の推薦理由と供に推薦させて頂き、貴社の採用手続きをサポートさせていただきます。</p>\r\n\r\n<p>⑥内定&rarr;採用</p>\r\n\r\n<p>　採用決定後、就労者の引越手続、就労開始日の調整など、弊社にてサポートさせていただきます。</p>\r\n\r\n<p>⑦紹介料のご請求</p>\r\n\r\n<p>　就労開始から3か月経過した時点で、紹介料を請求させていただきます。</p>\r\n\r\n<h3><strong>5．紹介料</strong></h3>\r\n\r\n<p>紹介料は、ご紹介した人材が3か月就労した後にはじめて紹介料をいただく完全成功報酬型です。ご紹介した人材が実際に就労しなかった場合や就労しても3か月以内に退職した場合などには、一切紹介料をいただきません。</p>\r\n\r\n<p>&nbsp;</p>', 'ita_tintuc_hEOHkFUth.JPG', 100, NULL, 1, 1, 1, '2019-04-02 01:18:13', '2019-04-24 13:57:31'),
(20, 14, 'Tuyển kỹ sư xây dựng', 'tuyen-ky-su-xay-dung', 'Ibaraki - Fukushima - Fukuoka - Osaka - Nagoya', '<h2><strong>1. Giới thiệu chung <a href=\"http://vnjob.jp/ky-thuat\" target=\"cngtySUGANAMI\">c&ocirc;ng ty SUGANAMI</a></strong></h2>\r\n\r\n<p>&nbsp; &nbsp;C&ocirc;ng ty cổ phần SUGANAMI c&oacute; trụ sở ch&iacute;nh ở tỉnh FUKUSHIAMA. C&ocirc;ng ty hoạt động về lĩnh vực <a href=\"http://vnjob.jp/ky-thuat\" target=\"xydng\">x&acirc;y dựng</a> cầu, đường, c&aacute;c c&ocirc;ng tr&igrave;nh trọng điểm của Nhật Bản. Ngo&agrave;i ra c&ocirc;ng ty c&ograve;n hoạt động về lĩnh vực m&aacute;y lắp đặt c&aacute;c hệ thống ph&aacute;t điện bằng năng lượng mặt trời. Trụ sở ch&iacute;nh nằm ở tỉnh FUKUSHIMA, nhưng c&aacute;c c&ocirc;ng tr&igrave;nh của c&ocirc;ng ty trải d&agrave;i từ bắc xuống nam, đặc biệt tập trung ở 1 số v&ugrave;ng như Fukuoka, Osaka, Kyoto, Fukushima, Ibaraki,.....&nbsp;</p>\r\n\r\n<p>&nbsp; Nhờ sự chỉ đạo của gi&aacute;m đốc c&ocirc;ng ty, c&ugrave;ng đội ngũ nh&acirc;n vi&ecirc;n c&oacute; kinh nghiệm, hiện nay c&ocirc;ng ty đ&atilde; lớn mạnh hơn.&nbsp;</p>\r\n\r\n<p><a href=\"vnjob.jp\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/xay%20dung(1).jpg\" style=\"height:333px; width:500px\" /></a></p>\r\n\r\n<h2><strong>2. <a href=\"http://vnjob.jp/ky-thuat\" target=\"Tuynksxydng\">Tuyển kỹ sư x&acirc;y dựng</a></strong></h2>\r\n\r\n<p>&nbsp; C&aacute;c chi nh&aacute;nh của c&ocirc;ng ty đ&atilde; mở rộng ra c&aacute;c v&ugrave;ng l&acirc;n cận. V&igrave; vậy, lực lượng lao động m&agrave; c&ocirc;ng ty cần đến cũng rất nhiều. Tuy nhi&ecirc;n, x&acirc;y dựng l&agrave; c&ocirc;ng việc cần đến sưc khỏe v&agrave; sự nhanh nhẹn, m&agrave; lao động Nhật đang dần bị gi&agrave; h&oacute;a. N&ecirc;n c&ocirc;ng ty đ&atilde; quyết định sử dụng nguồn lao động nước ngo&agrave;i, đặc biệt l&agrave; người Việt Nam.</p>\r\n\r\n<p><strong><em>&nbsp; TH&Ocirc;NG TIN TUY</em></strong><strong><em>Ể</em></strong><strong><em>N D</em></strong><strong><em>Ụ</em></strong><strong><em>NG</em></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Y&ecirc;u cầu chung: c&aacute;c bạn du học sinh đ&atilde; tốt nghiệp căo đẳng, đại học, senmon chuy&ecirc;n ngh&agrave;nh x&acirc;y dựng, AUTO - CAD,..</li>\r\n	<li>&nbsp;Địa điểm: tỉnh IBARAKI, FUKUSHIMA, FUKUOKA, OSAKA, NAGOYA,...</li>\r\n	<li>&nbsp;Nội dung c&ocirc;ng việc: x&acirc;y dựng d&acirc;n dụng, cầu đường (việc nặng c&oacute; m&aacute;y m&oacute;c hỗ trợ, an to&agrave;n trong c&ocirc;ng việc)</li>\r\n	<li>&nbsp;Lương cơ bản: 19万8千 / th&aacute;ng</li>\r\n	<li>&nbsp;Thời gian l&agrave;m việc: 8h-18h (giải lao 2 tiếng)</li>\r\n	<li>&nbsp;Chế độ: bảo hiểm, nenkin,&nbsp;bản l&atilde;nh gia đ&igrave;nh,...</li>\r\n	<li>&nbsp;Nh&agrave; cửa: c&ocirc;ng ty hỗ trợ 100% ( tiền nh&agrave; + ga+ điện+ nước)</li>\r\n	<li>&nbsp;Số lượng tuyển: 20 người</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'ita_tintuc_w8AlxRX0t.jpg', 10, NULL, 1, 1, 1, '2019-04-02 13:19:55', '2019-04-24 15:35:02'),
(21, 14, 'CƠ KHÍ', 'co-khi', 'Tỉnh Mie', '<p>C&Ocirc;NG TY SẢN XUẤT LINH KIỆN ĐIỆN TỬ</p>\r\n\r\n<hr />\r\n<p>+ Địa điểm: Tỉnh Mie (三重）</p>\r\n\r\n<p>＋ C&ocirc;ng việc: Sản xuất - kiểm tra linh kiện điện tử</p>\r\n\r\n<p>+ Lương cơ bản: 18万/ th&aacute;ng</p>\r\n\r\n<p>+ Nh&agrave;: 1,5万/ người</p>\r\n\r\n<p>+ Thời gian l&agrave;m việc: 8h-17h (giải lao 1 tiếng)<br />\r\n<br />\r\n&nbsp;</p>', 'ita_tintuc_dI2yxySuB.jpg', 10, NULL, 1, 1, 1, '2019-04-02 13:54:45', '2019-04-02 13:54:45'),
(22, 14, 'XÂY DỰNG - MỘC', 'xay-dung---moc', 'IBARAKI', '<p>Nguồn lao động trẻ ở Nhật Bản đang thiếu trầm trọng. V&igrave; vậy, Nhật hiện nay đang rất cần nguồn lao động nước ngo&agrave;i, đặc biệt l&agrave; ngh&agrave;nh x&acirc;y dựng.</p>\r\n\r\n<p>Để b&ugrave; đắp nguồn lao động n&agrave;y, c&ocirc;ng ty Taka tuyển lao động theo h&igrave;nh thức 正社員 (ưu ti&ecirc;n c&aacute;c bạn từ Việt Nam)</p>\r\n\r\n<p>- Y&ecirc;u cầu chung: c&aacute;c bạn du học sinh đ&atilde; tốt nghiệp căo đẳng, đại học, senmon chuy&ecirc;n ngh&agrave;nh x&acirc;y dựng, AUTO - CAD,..</p>\r\n\r\n<p>- Địa điểm: tỉnh IBARAKI</p>\r\n\r\n<p>- Nội dung c&ocirc;ng việc: lắp r&aacute;p khung gỗ, chế tạo c&aacute;c sản phẩm về gỗ.</p>\r\n\r\n<p>- Lương cơ bản: 18man / th&aacute;ng</p>\r\n\r\n<p>- Thời gian l&agrave;m việc: t&ugrave;y v&agrave;o địa điểm l&agrave;m việc (xong việc sớm sẽ được nghỉ sớm v&agrave; vẫn t&iacute;nh lương 1 ng&agrave;y)</p>\r\n\r\n<p>- Chế độ: bảo hiểm, thưởng 2 lần/ năm, bản l&atilde;nh vợ con, l&agrave;m tr&ecirc;n 2 năm m&agrave; nghỉ được hưởng tr&ecirc;n 20 man.</p>\r\n\r\n<p>- Nh&agrave; cửa: 2man ( tiền nh&agrave; + ga+ điện+ nước)</p>\r\n\r\n<p>- Số lượng tuyển: 2 người</p>', 'ita_tintuc_SHQW3cg9u.jpg', 10, NULL, 1, 1, 1, '2019-04-02 14:21:23', '2019-04-02 14:21:23'),
(23, 14, 'KỸ SƯ XÂY DỰNG', 'ky-su-xay-dung', 'Công ty cổ phần YAMAGATA tuyển kỹ sư thiết kế công trình', '<h2><strong>1. Giới thiệu chung về <a href=\"http://vnjob.jp/ky-thuat\" target=\"cngtycphnYamagata\">c&ocirc;ng ty cổ phần&nbsp;YAMAGATA</a></strong></h2>\r\n\r\n<p>C&ocirc;ng ty cổ phần Yamagata l&agrave; c&ocirc;ng ty chuy&ecirc;n về c&aacute;c dự &aacute;n <a href=\"http://vnjob.jp/ky-thuat\" target=\"xydng\">x&acirc;y dựng</a>. Với đội ngũ nh&acirc;n vi&ecirc;n nhiệt t&igrave;nh, chăm chỉ c&ocirc;ng ty đ&atilde; ho&agrave;n th&agrave;nh được những dự &aacute;n lớn với chất lượng mong đợi. C&ocirc;ng ty đ&atilde; từng c&oacute; kinh nghiệm l&agrave;m việc với thực tập sinh ngoại quốc, n&ecirc;n việc hướng dẫn cho nh&acirc;n vi&ecirc;n ngoại quốc mới v&agrave;o l&agrave;m việc sẽ rất nhiệt t&igrave;nh.&nbsp;</p>\r\n\r\n<p><a href=\"vnjob.jp/ky-thuat\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/c_00000052_L1_1366104734(1).JPG\" style=\"height:333px; width:500px\" /></a></p>\r\n\r\n<p>C&ocirc;ng ty cổ phần Yamagata c&oacute; trụ sở tại Tokyo, n&ecirc;n c&aacute;c c&ocirc;ng tr&igrave;nh m&agrave; c&ocirc;ng ty nhận cũng sẽ ở Tokyo hoặc khu vực l&acirc;n cận. Ngo&agrave;i ra, để nh&acirc;n vi&ecirc;n c&oacute; thời gian nghỉ ngơi sau khi l&agrave;m việc vất vả, c&ocirc;ng ty cũng đ&atilde; chuẩn bị sẵn cơm cho nh&acirc;n vi&ecirc;n (trừ chủ nhật). V&agrave; nh&acirc;n vi&ecirc;n c&ocirc;ng ty cũng kh&ocirc;ng cần lo về chỗ ở ra sao, v&igrave; c&ocirc;ng ty cũng đ&atilde; chuẩn bị sẵn k&yacute; t&uacute;c x&aacute;.&nbsp;</p>\r\n\r\n<p>Tokyo la thủ đ&ocirc; của Nhật Bản, do vậy c&ocirc;ng ty cũng ch&iacute;nh l&agrave; nơi m&agrave; rất nhiều bạn du học sinh sau khi tốt nghiệp lựa chọn.</p>\r\n\r\n<h2><strong>2. Th&ocirc;ng tin tuyển dụng</strong></h2>\r\n\r\n<p>Chế độ c&ocirc;ng ty cao, th&igrave; đồng nghĩa với việc y&ecirc;u cầu của c&ocirc;ng ty cũng cao, kh&ocirc;ng chỉ chuy&ecirc;n m&ocirc;n m&agrave; c&ograve;n cả về năng lực tiếng Nhật.</p>\r\n\r\n<p>- Y&ecirc;u cầu chung: c&aacute;c bạn du học sinh đ&atilde; tốt nghiệp căo đẳng, đại học, senmon chuy&ecirc;n ngh&agrave;nh x&acirc;y dựng, AUTO - CAD,.. - TIẾNG NHẬT N3 TRỞ L&Ecirc;N</p>\r\n\r\n<p>- Địa điểm: tỉnh TOKYO</p>\r\n\r\n<p>- Nội dung c&ocirc;ng việc: l&agrave;m ở c&ocirc;ng trường 1 năm để hiểu r&otilde; c&ocirc;ng việc, rồi l&ecirc;n thiết kế</p>\r\n\r\n<p>- Lương cơ bản: 24,5man / th&aacute;ng</p>\r\n\r\n<p>- Thời gian l&agrave;m việc: 8h-18h （từ 17h sắp xếp đồ rồi nghỉ)</p>\r\n\r\n<p>- Chế độ: bảo hiểm, tăng lương 1 lần/ năm,&nbsp;&nbsp;thưởng 2 lần/ năm, bản l&atilde;nh vợ con, l&agrave;m tr&ecirc;n 3 năm được hưởng chế độ thất nghiệp 30 man</p>\r\n\r\n<p>- Nh&agrave; cửa: 2,6man/ th&aacute;ng</p>\r\n\r\n<p>- Ăn uống: 1,5man/ th&aacute;ng - kh&ocirc;ng bao gồm chủ nhật</p>\r\n\r\n<p>- Số lượng tuyển: 3&nbsp;người</p>', 'ita_tintuc_zZjL11Qit.JPG', 10, NULL, 1, 1, 1, '2019-04-02 15:09:30', '2019-04-20 16:17:03'),
(24, 24, 'Nhật Bản thay đổi niên hiệu', 'nhat-ban-thay-doi-nien-hieu', 'Niên hiệu mới của Nhật Bản đã được công bố và được áp dụng từ ngày 1/5/2019', '<h2><em><strong><a href=\"http://vnjob.jp/nhung-thay-doi-cua-nhat-ban\">令和</a>(<a href=\"http://vnjob.jp/nhung-thay-doi-cua-nhat-ban\" target=\"REIWA\">REIWA</a>) - <a href=\"http://vnjob.jp/nhung-thay-doi-cua-nhat-ban\" target=\"ninhiumi\">ni&ecirc;n hiệu mới</a>&nbsp;</strong></em></h2>\r\n\r\n<p>&nbsp; &nbsp;Ni&ecirc;n hiệu mới &ndash; Nhật Bản vừa c&ocirc;ng bố ni&ecirc;n hiệu mới để sử dụng bắt đầu từ ng&agrave;y 1/5</p>\r\n\r\n<p><a href=\"vnjob.jp/nhung-thay-doi-cua-nhat-ban\"><img src=\"/ckfinder/userfiles/images/image.png\" style=\"height:283px; width:500px\" /></a></p>\r\n\r\n<p>&nbsp; Ni&ecirc;n hiệu mới của Nhật Bản l&agrave; Reiwa, c&oacute; nghĩa l&agrave; Lệnh H&ograve;a. Đ&acirc;y l&agrave; ni&ecirc;n hiệu thứ 248 của Nhật Bản. Vậy l&agrave; ni&ecirc;n hiệu Heisei (B&igrave;nh Th&agrave;nh) được trị v&igrave; bởi Nhật Ho&agrave;ng Akihito sẽ chấm dứt. Thay v&agrave;o đ&oacute; Th&aacute;i tử Naruhito sẽ l&ecirc;n ng&ocirc;i.</p>\r\n\r\n<p>&nbsp;Ni&ecirc;n hiệu mới l&agrave; ni&ecirc;n hiệu đầu ti&ecirc;n được bắt nguồn từ văn học Nhật, chứ kh&ocirc;ng phải Trung Quốc.　Lệnh H&ograve;a được bắt nguồn từ Manoyoshu, tuyển tập thơ ca l&acirc;u đời nhất của Nhật Bản với lịch sử hơn 1200 năm. L&agrave; một trong những thay đổi lớn nhất trong thực tế, t&acirc;m l&yacute; đối với người d&acirc;n Nhật Bản.</p>\r\n\r\n<p>&nbsp;Ni&ecirc;n hiệu mới đ&atilde; d&agrave;nh được dự quan t&acirc;m của người d&acirc;n Nhật Bản. Mọi người tr&ecirc;n khắp c&aacute;c nẻo đưởng đều muốn chứng kiến khoảnh khắc giao ni&ecirc;n.</p>\r\n\r\n<p><a href=\"vnjob.jp/nhung-thay-doi-cua-nhat-ban\"><img alt=\"\" src=\"/ckfinder/userfiles/images/nien.jpg\" style=\"height:281px; width:500px\" /></a></p>\r\n\r\n<p>Ảnh: Nikkei asian review</p>\r\n\r\n<p>Ni&ecirc;n hiệu mới c&ograve;n được in tr&ecirc;n c&aacute;c sản phẩm ( đồ ti&ecirc;u d&ugrave;ng, b&aacute;nh, ....)&nbsp;</p>\r\n\r\n<p><a href=\"vnjob.jp/nhung-thay-doi-cua-nhat-ban\"><img alt=\"Niên hiệu mới được in trên bánh ngọt\" src=\"/ckfinder/userfiles/images/nikkei%20asian%20review.jpg\" style=\"border-style:solid; border-width:1px; height:281px; width:500px\" /></a></p>\r\n\r\n<p>Ảnh: Nikkei asian review</p>', 'ita_tintuc_cc5j0qe1y.jpg', 10, NULL, 1, 1, 1, '2019-04-02 19:24:46', '2019-04-20 10:52:52'),
(26, 14, 'Tuyển kỹ sư cơ khí', 'tuyen-ky-su-co-khi', 'Công ty cổ phần FUTTO tuyển nhân viên làm sản xuất linh kiện, phụ tùng ô tô', '<h2><strong>1.Giới thiệu về <a href=\"http://vnjob.jp/ky-thuat\" target=\"CngtycphnFUTTO\">C&ocirc;ng&nbsp;ty cổ phần Futto</a></strong></h2>\r\n\r\n<p>&nbsp; &nbsp; C&ocirc;ng ty cổ phần FUTTO l&agrave; một trong những c&ocirc;ng ty lớn của Nhật Bản trong lĩnh vực cơ kh&iacute;. C&ocirc;ng ty chuy&ecirc;n sản xuất về linh kiện điện tử, phụ t&ugrave;ng &ocirc; t&ocirc; của c&aacute;c h&atilde;ng xe lớn như TOYOTA, HONDA, MAZDA, .... Ngo&agrave;i ra, c&ocirc;ng ty c&ograve;n hoạt động về c&aacute;c lĩnh vực kh&aacute;c như x&acirc;y dựng, sản xuất c&aacute;c thiết bị y tế, .....</p>\r\n\r\n<p>&nbsp; &nbsp; C&ocirc;ng ty cổ phần FUTTO c&oacute; c&aacute;c chi nh&aacute;nh trải khắp khu vực kansai (Osaka, kyoto, shiga, mie, ...).&nbsp;</p>\r\n\r\n<p>&nbsp; <a href=\"http://vnjob.jp/ky-thuat\" target=\"ckh\">&nbsp;Cơ kh&iacute;</a> l&agrave; ngh&agrave;nh&nbsp;kh&ocirc;ng thể thiếu với một đất nước c&ocirc;ng nghiệp như Nhật Bản. Với sự ph&aacute;t triển để vươn l&ecirc;n tầm cao mới, FUTTO đ&atilde; mở rộng thị trường tr&ecirc;n to&agrave;n quốc. C&ugrave;ng với sự ph&aacute;t triển, c&ocirc;ng ty cần đến một lực lượng nh&acirc;n lực đế đ&aacute;p ứng năng suất　m&agrave; FUTTO đ&atilde; đề ra.</p>\r\n\r\n<p><a href=\"vnjob.jp/ky-thuat\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/1735100669-1-small_59994.jpeg\" style=\"border-style:solid; border-width:1px; height:336px; width:500px\" /></a></p>\r\n\r\n<p>&nbsp; &nbsp; Cơ kh&iacute; l&agrave; ngh&agrave;nh cần đến rất nhiều nh&acirc;n c&ocirc;ng trẻ. Nhưng Nhật Bản l&agrave; đất nước gi&agrave; h&oacute;a d&acirc;n số, n&ecirc;n kh&ocirc;ng thể đ&aacute;p ứng được lực lượng n&agrave;y. V&igrave; vậy Futto quyết định tuyển dụng người ngoại quốc, đặc biệt l&agrave; đối với thị trường du học sinh Việt Nam đ&atilde; tốt nghiệp senmon, cao đẳng, đại học.</p>\r\n\r\n<h2><strong><a href=\"http://vnjob.jp/ky-thuat\" target=\"Tuynksckh\">2. Tuyển kỹ sư cơ kh&iacute;</a></strong></h2>\r\n\r\n<p>&nbsp; &nbsp;Cơ kh&iacute; l&agrave; ngh&agrave;nh thu h&uacute;t nhiều du học sinh sau khi tốt nghiệp. Dưới đ&acirc;y l&agrave; th&ocirc;ng tin tuyển dụng của FUTTO.</p>\r\n\r\n<p>&nbsp; &nbsp;Y&ecirc;u cầu : tốt nghiệp senmon, cao đẳng, đại học chuy&ecirc;n ngh&agrave;nh CƠ KH&Iacute;, ĐIỆN-ĐIỆN TỬ, IT CAD, ...</p>\r\n\r\n<p>&nbsp; &nbsp;Địa điểm l&agrave;m việc: tỉnh Kyoto</p>\r\n\r\n<p>&nbsp; Nội dung c&ocirc;ng việc: Cơ kh&iacute; (sản xuất linh kiện điện tử - &ocirc; t&ocirc;,...)</p>\r\n\r\n<p>&nbsp;&nbsp;Thời gian l&agrave;m việc: 8h-17h</p>\r\n\r\n<p>&nbsp; Lương cơ bản: 18man/ th&aacute;ng</p>\r\n\r\n<p>&nbsp; Nh&agrave;: 2.5-3man/ th&aacute;ng</p>\r\n\r\n<p>&nbsp; Chế độ: bảo hiểm, nenkin, bảo l&atilde;nh gia đ&igrave;nh,.....</p>\r\n\r\n<p>&nbsp; Số lượng: 10 người</p>\r\n\r\n<p>LI&Ecirc;N HỆ: 合同会社ベトナムワーク</p>\r\n\r\n<p>東京都新宿区高田馬場1－33－6　平和相互ビル403</p>\r\n\r\n<p>&nbsp;</p>', 'ita_tintuc_lr2Va9Lrb.jpg', 10, NULL, 1, 1, 1, '2019-04-05 11:13:11', '2019-04-20 15:39:15'),
(27, 17, 'CƠ KHÍ', 'chuyen-viec-co-khi', 'Tỉnh Nagoya, Shizuoka, Gifu, .....', '<h2><strong>1. Giới thiệu chung về <a href=\"http://vnjob.jp/ky-thuat\" target=\"cngtycphnAnkuru\">c&ocirc;ng ty cổ phần Ankuru</a></strong></h2>\r\n\r\n<p>&nbsp; Với vốn điều lệ 1000 man y&ecirc;n, c&ocirc;ng ty cổ phần Ankuru hiện tại đang hoạt động với quy m&ocirc; rất lớn về lĩnh vực giới thiệu lao động cho c&aacute;c c&ocirc;ng ty. Những c&ocirc;ng việc chủ yếu m&agrave; c&ocirc;ng ty tập trung: sản xuất linh kiện điện tử, x&acirc;y dựng, ....</p>\r\n\r\n<p>C&ocirc;ng ty c&oacute; c&aacute;c chi nh&aacute;nh tập trung ở v&ugrave;ng kansai của Nhật Bản. V&agrave; c&aacute;c c&ocirc;ng cũng hoạt động chủ yếu về c&aacute;c ngh&agrave;nh chuy&ecirc;n cơ kh&iacute;.</p>\r\n\r\n<p><a href=\"http://vnjob.jp/ky-thuat\" target=\"ckh\">&nbsp; Cơ kh&iacute; </a>- ngh&agrave;nh c&ocirc;ng nghiệp hot của Nhật Bản v&agrave; cũng cần đến rất nhiều nguồn nh&acirc;n lực. Tuy nhi&ecirc;n, Nhật Bản hiện nay đang trong nguy cơ gi&agrave; h&oacute;a d&acirc;n số. Ch&iacute;nh v&igrave; vậy, đ&acirc;y cũng ch&iacute;nh l&agrave; cơ hội l&agrave;m việc của người ngoại quốc.</p>\r\n\r\n<p><a href=\"vnjob.jp/ky-thuat\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/1735100669-1-small_59994.jpeg\" style=\"height:336px; width:500px\" /></a></p>\r\n\r\n<h2><strong>2. Th&ocirc;ng tin tuyển dụng</strong></h2>\r\n\r\n<p>Cơ kh&iacute; - C&ocirc;ng ty Ankuru chuy&ecirc;n sản xuất về linh kiện điện tử, phụ t&ugrave;ng &ocirc; t&ocirc;; v&agrave; c&ocirc;ng ty rất mong người Việt Nam ứng tuyển c&ocirc;ng việc&nbsp;n&agrave;y để n&acirc;ng cao năng suất.&nbsp;</p>\r\n\r\n<p>&nbsp;Cơ kh&iacute; cũng l&agrave; thế mạnh của c&aacute;c bạn trẻ Việt Nam khi c&aacute;c bạn đ&atilde; tốt nghiệp c&aacute;c chuy&ecirc;n ngh&agrave;nh li&ecirc;n quan.&nbsp;</p>\r\n\r\n<p>Y&ecirc;u cầu chung: tốt nghiệp cao đẳng, đại học, senmon về chuy&ecirc;n ngh&agrave;nh cơ kh&iacute;, điện - điện tử, CAD, .... (C&oacute; giấy nghỉ việc của c&ocirc;ng ty trước&nbsp; Địa điểm: Nagoya, Shizuoka, Gifu,...</p>\r\n\r\n<p>Nội dung c&ocirc;ng việc: sản xuất linh kiện điện tử, phụ t&ugrave;ng &ocirc; t&ocirc;.</p>\r\n\r\n<p>Lương: 1.200y/h (nam) - 1.100y/h (nữ)</p>\r\n\r\n<p>Nh&agrave; ở: c&ocirc;ng ty hỗ trợ</p>\r\n\r\n<p>Chế độ: bảo hiểm, nenkin, bảo l&atilde;nh gia đ&igrave;nh, ....</p>\r\n\r\n<p>Li&ecirc;n lạc qua : 合同会社ベトナムワーク<br />\r\n東京都新宿区高田馬場1-33-6平和相互403<br />\r\nhotline : 03-6265-9756<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'ita_tintuc_kWKPkbBTd.jpg', 10, NULL, 1, 1, 1, '2019-04-05 15:23:30', '2019-04-20 16:02:24'),
(28, 18, 'Chuyển việc - Cơ Khí', 'co-khi-chuyen-viec', 'Các tỉnh Nagoya, Shizuoka, Gifu, ......', '<h1>Cơ kh&iacute; l&agrave; hoạt động kinh doanh chủ yếu của c&ocirc;ng ty&nbsp;Ankuru .&nbsp;</h1>\r\n\r\n<h2>Cơ kh&iacute; - ngh&agrave;nh c&ocirc;ng nghiệp hot của Nhật bản. L&agrave; ngh&agrave;nh đang cần đến rất nhiều nguồn lao động người ngoại quốc.</h2>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/1735100669-1-small_59994.jpeg\" /></p>\r\n\r\n<h2>Cơ kh&iacute; - C&ocirc;ng ty Ankuru chuy&ecirc;n sản xuất về linh kiện điện tử, phụ t&ugrave;ng &ocirc; t&ocirc;; v&agrave; c&ocirc;ng ty rất mong người Việt Nam ứng tuyển c&ocirc;ng việc&nbsp;n&agrave;y để n&acirc;ng cao năng suất.&nbsp;</h2>\r\n\r\n<h2>Cơ kh&iacute; cũng l&agrave; thế mạnh của c&aacute;c bạn trẻ Việt Nam khi c&aacute;c bạn đ&atilde; tốt nghiệp c&aacute;c chuy&ecirc;n ngh&agrave;nh li&ecirc;n quan.&nbsp;</h2>\r\n\r\n<h3>Bạn n&agrave;o quan t&acirc;m đến c&ocirc;ng việc n&agrave;y th&igrave; li&ecirc;n lạc với b&ecirc;n c&ocirc;ng ty qua hot line 03-6265-9756</h3>\r\n\r\n<h3>Y&ecirc;u cầu chung: tốt nghiệp cao đẳng, đại học, senmon về chuy&ecirc;n ngh&agrave;nh cơ kh&iacute;, điện - điện tử, CAD, .... (C&oacute; giấy nghỉ việc của c&ocirc;ng ty trước)</h3>\r\n\r\n<h3>Địa điểm: Nagoya, Shizuoka, Gifu,...</h3>\r\n\r\n<h3>Nội dung c&ocirc;ng việc: sản xuất linh kiện điện tử, phụ t&ugrave;ng &ocirc; t&ocirc;.</h3>\r\n\r\n<h3>Lương: 1.200y/h (nam) - 1.100y/h (nữ)</h3>\r\n\r\n<h3>Nh&agrave; ở: c&ocirc;ng ty hỗ trợ</h3>\r\n\r\n<h3>Chế độ: bảo hiểm, nenkin, bảo l&atilde;nh gia đ&igrave;nh, ....</h3>\r\n\r\n<h3>Li&ecirc;n lạc qua : 合同会社ベトナムワーク<br />\r\n東京都新宿区高田馬場1-33-6平和相互403<br />\r\nhotline : 03-6265-9756<br />\r\n&nbsp;</h3>\r\n\r\n<p>&nbsp;</p>', 'ita_tintuc_r3oz9gM7f.jpg', 10, NULL, 1, 1, 1, '2019-04-05 15:28:08', '2019-04-05 15:28:08'),
(29, 26, 'Lễ hội hoa anh đào', 'hoa-anh-dao', 'Tháng 4 - lễ hội mùa hoa anh đào trên khắp đất nước mặt trời mọc', '<h2><strong><a href=\"http://vnjob.jp/bon-mua\" target=\"hoaanho\">Hoa anh đ&agrave;o</a> l&agrave; lo&agrave;i hoa như thế n&agrave;o?</strong></h2>\r\n\r\n<p>Hoa anh đ&agrave;o l&agrave; lo&agrave;i hoa tượng trưng cho Nhật Bản - đất nước mặt trời mọc.</p>\r\n\r\n<p>Hoa anh đ&agrave;o c&oacute; rất nhiều loại, v&agrave; mỗi một loại lại c&oacute; 1 m&agrave;u sắc v&agrave; mang những vẻ đẹp kh&aacute;c nhau.</p>\r\n\r\n<p>Hoa anh đ&agrave;o thường nở v&agrave;o cuối th&aacute;ng 3 - đầu th&aacute;ng 4 h&agrave;ng năm. V&agrave; đ&oacute; cũng l&agrave; l&uacute;c lễ hội hoa anh đ&agrave;o được mở ra. Tr&ecirc;n khắp nẻo đường, dọc c&aacute;c bờ s&ocirc;ng, nơi n&agrave;o c&oacute; hoa anh l&agrave; nơi đ&oacute; trỗi trong m&igrave;nh vẻ đẹp đặc trưng của đất nước mặt trời mọc n&agrave;y. Đặc biệt, v&agrave;o buổi tối, dưới &aacute;nh đ&egrave;n lung linh những b&ocirc;ng hoa anh đ&agrave;o bay bay trong gi&oacute;, lấp l&aacute;nh&nbsp;&nbsp;như những ngọn đ&egrave;n pha l&ecirc; tạo ra một khung cảnh l&atilde;ng mạn khiến bao người say đắm trong cảnh đẹp đ&oacute;.&nbsp;</p>\r\n\r\n<p><a href=\"vnjob.jp/bon-mua\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/du-lich-nhat-ban-ngam-hoa-anh-dao-thang-4-20141226167233.jpg\" style=\"border-style:solid; border-width:1px; height:333px; margin-left:1px; margin-right:1px; width:500px\" /></a></p>\r\n\r\n<p><a href=\"http://vnjob.jp/bon-mua\" target=\"Lhihoaanho\">Lễ hội hoa anh đ&agrave;o</a> c&ograve;n l&agrave; thời điểm để người d&acirc;n Nhật Bản nghỉ ngơi sau những ng&agrave;y đắm ch&igrave;m trong c&ocirc;ng việc. Họ ngồi dưới những gốc c&acirc;y anh đ&agrave;o, c&ugrave;ng nhau ăn uống, nh&acirc;m nhi ch&uacute;t rườu rồi tr&ograve; chuyện với người th&acirc;n gia đ&igrave;nh, bạn b&egrave;, .....&nbsp;</p>\r\n\r\n<p><a href=\"vnjob.jp\"><img alt=\"\" src=\"/ckfinder/userfiles/images/hoi.png\" style=\"height:281px; width:500px\" /></a></p>\r\n\r\n<p>Lễ hội hoa anh đ&agrave;o cũng l&agrave; m&ugrave;a để cho những đ&ocirc;i trai g&aacute;i c&oacute; thể hẹn h&ograve;, c&ugrave;ng nhau tạo ra những khoảnh khắc đẹp đ&aacute;ng nhớ - đặc biệt đối với những bạn trẻ nước ngo&agrave;i. Những c&aacute;nh hoa anh đ&agrave;o bay bay trong gi&oacute;, tiếng cười đ&ugrave;a - một khung cảnh l&agrave;m cho con người ta c&oacute; cảm gi&aacute;c thoải m&aacute;i, tan đi bao mệt mỏi.</p>\r\n\r\n<p><a href=\"vnjob.jp\"><img alt=\"\" src=\"/ckfinder/userfiles/images/Hoa-Anh-%C4%90%C3%A0o.jpg\" style=\"border-style:solid; border-width:1px; height:339px; margin-left:1px; margin-right:1px; width:500px\" /></a></p>\r\n\r\n<p>&nbsp;</p>', 'ita_tintuc_axaRWMuHR.jpg', 10, NULL, 1, 1, 1, '2019-04-05 16:29:59', '2019-04-20 11:21:28'),
(30, 2, '在留カード比べ', 'so-sanh-the-gai', '留学ビザと就労ビザの違うこと。', '<h2><strong>１．「<a href=\"http://vnjob.jp/nhung-thay-doi-cua-nhat-ban\">留学ビザ</a>」とは</strong></h2>\r\n\r\n<p>&nbsp; 学生の場合「留学」という在留資格を持っています。この資格は「日本で勉強する」という活動ための資格であり、働くための資格ではありません。学業に支障がない範囲というのが、ここでいう週28時間なのです。4時間＊7日ですが、実際には週1日の法定休日がアルバイトにも適用されますから、1日5時間弱くなります。</p>\r\n\r\n<p><a href=\"vnjob.jp/visa-hot\" target=\"_blank\"><img alt=\"留学ビザ\" src=\"/ckfinder/userfiles/images/nguyen%20thi%20my%20linh%20-%202.png\" style=\"height:308px; width:500px\" /></a></p>\r\n\r\n<p>　　　　　　　　　　　　　留学ビザ</p>\r\n\r\n<h2><strong>２．「<a href=\"http://vnjob.jp/visa-hot\">技術・人文知識・国際業務ビザ</a>」とは</strong></h2>\r\n\r\n<p>&nbsp; 日本で働くためには、一般に就労ビザと言われている、在留資格が必要です。「技術・人文知識・国際業務ビザ」は就労ビザの一つです。就労在留資格で、日本人と同じように職種、時間に制限なく働くことができます。</p>\r\n\r\n<p><a href=\"vnjob.jp/visa-hot\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/duy%20viet%20-%202.png\" style=\"height:313px; width:500px\" /></a></p>\r\n\r\n<p>　　　　　　　　　　　　　　　　就労ビザ</p>', 'ita_tintuc_cfZWmrKTQ.jpg', 10, NULL, 1, 1, 1, '2019-04-11 09:41:03', '2019-04-20 10:04:03'),
(31, 24, 'Visa kỹ năng đặc định', 'visa-ky-nang-dac-dinh', 'Bạn có biết sự khác nhau giữa các loại visa đặc đinh và visa kỹ sư', '<h2><strong><a href=\"http://vnjob.jp/nhung-thay-doi-cua-nhat-ban\" target=\"Visaknngcnh\">Visa kỹ năng đặc định</a> l&agrave; g&igrave; ?</strong></h2>\r\n\r\n<p>&nbsp; &nbsp; Visa kỹ năng đặc định l&agrave; loại h&igrave;nh visa mới được Nhật Bản &aacute;p dụng từ ng&agrave;y 1/4/2019. Visa kỹ năng đặc định được chia l&agrave;m 2 loại: Visa kỹ năng đặc định loại 1 v&agrave; kỹ năng đặc định loại 2.</p>\r\n\r\n<h3><a href=\"http://vnjob.jp/nhung-thay-doi-cua-nhat-ban\" target=\"Visaknngcnhloi1\"><strong>Visa kỹ năng đặc định loại 1</strong></a></h3>\r\n\r\n<p>&nbsp; &nbsp;Visa đặc định loại 1 l&agrave; visa d&agrave;nh cho thực tập sinh đ&atilde; hết k&igrave; hạn 3 &ndash; 5 năm tại c&ocirc;ng ty tiếp nhận. Nếu c&ocirc;ng ty vẫn muốn c&aacute;c bạn tiếp tục l&agrave;m việc th&igrave; đ&acirc;y ch&iacute;nh l&agrave; visa m&agrave; c&aacute;c bạn cần xin. Điều kiện để xin loại h&igrave;nh visa n&agrave;y: c&aacute;c bạn thực tập sinh phải đỗ kỳ thi kỹ năng số 2 trong 3-5 l&agrave;m việc tại c&ocirc;ng ty với tư c&aacute;ch thực tập sinh.</p>\r\n\r\n<p><strong><em>Visa kỹ năng đặc định loại 1 th&igrave; c&aacute;c bạn du học sinh c&oacute; được xin kh&ocirc;ng?</em></strong></p>\r\n\r\n<p>&nbsp; &nbsp;C&aacute;c bạn du học sinh c&oacute; thể tham gia v&agrave;o loại h&igrave;nh visa n&agrave;y. Tuy nhi&ecirc;n, c&aacute;c bạn phải trải qua 1 kỳ thi s&aacute;t hạch v&agrave; để tham gia được v&agrave;o kỳ thi n&agrave;y th&igrave; năng lực tiếng Nhật phải từ N4 trở l&ecirc;n. Kỳ thi được chia ra l&agrave;m 2 phần: thi trắc nghiệm (chọn đ&uacute;ng, sai) v&agrave; thi vấn đ&aacute;p. N&oacute;i l&agrave; năng lực tiếng Nhật từ N4 trở l&ecirc;n, nhưng với tr&igrave;nh độ N4 đối với phần thi vấn đ&aacute;p theo m&igrave;nh nghĩ l&agrave; kh&oacute; (v&igrave; c&aacute;c bạn &iacute;t vốn từ v&agrave; thời gian suy nghĩ chỉ c&oacute; 1 ph&uacute;t.). Kỳ thi n&agrave;y Nhật Bản cũng đang thử nghiệm ở Nhật v&agrave; 1 số quốc gia như Philippins.</p>\r\n\r\n<p>&nbsp; &nbsp;Visa kỹ năng đặc định loại 1 đang được mở rộng với 14 ngh&agrave;nh nghề được tiếp nhận: x&acirc;y dựng, đ&oacute;ng t&agrave;u, sửa chữa &ocirc; t&ocirc;, h&agrave;ng kh&ocirc;ng, kh&aacute;ch sạn, hộ l&yacute;, vệ sinh t&ograve;a nh&agrave;, n&ocirc;ng nghiệp, ngư nghiệp, nh&agrave; h&agrave;ng, thực phẩm, vật liệu, chế tạo m&aacute;y, điện &ndash; điện tử.</p>\r\n\r\n<p><em><strong>Visa kỹ năng đặc đinh loại 1 n&agrave;y c&oacute; ưu điểm v&agrave; hạn chế g&igrave;?</strong></em></p>\r\n\r\n<p>&nbsp; &nbsp;Ưu điểm: Đối với c&aacute;c bạn thực tập sinh th&igrave; c&aacute;c bạn sẽ được k&eacute;o d&agrave;i thời gian l&agrave;m việc tại Nhật hơn. V&agrave; đối với những bạn muốn sang Nhật th&igrave; chỉ cần đỗ trong kỳ thi s&aacute;t hạch m&agrave; kh&ocirc;ng cần bằng cao đẳng hay đại học.</p>\r\n\r\n<p>&nbsp; &nbsp;Hạn chế: Đối với c&aacute;c bạn du học sinh, nếu c&aacute;c bạn chọn h&igrave;nh thức n&agrave;y để l&agrave;m việc th&igrave; c&aacute;c bạn sẽ kh&ocirc;ng được l&agrave;m việc l&acirc;u d&agrave;i tại Nhật, v&agrave; kh&ocirc;ng được bảo l&atilde;nh gia đ&igrave;nh (đặc biệt đối với c&aacute;c bạn đ&atilde; tốt nghiệp đại học, cao đẳng). Hơn nữa khi c&aacute;c bạn đ&atilde; v&agrave;o c&ocirc;ng ty l&agrave;m việc m&agrave; cảm thấy c&ocirc;ng việc kh&ocirc;ng ph&ugrave; hợp th&igrave; cũng kh&ocirc;ng thể chuyển sang c&ocirc;ng ty kh&aacute;c. Hay n&oacute;i c&aacute;ch kh&aacute;c loại visa n&agrave;y như visa d&agrave;nh cho thực tập sinh hiện nay. V&agrave; loại h&igrave;nh visa n&agrave;y cứ 1 năm lại gia hạn 1 lần.</p>\r\n\r\n<h3><a href=\"http://vnjob.jp/visa-hot\" target=\"Visaknngcnhloi2\"><strong>Visa kỹ năng đặc định loại 2</strong></a></h3>\r\n\r\n<p>&nbsp; &nbsp;Visa kỹ năng đặc định loại 2 l&agrave; loại h&igrave;nh visa giống như visa kỹ sư hiện nay. Loại h&igrave;nh visa n&agrave;y sẽ được cấp từ 3-5 năm/ 1 lần, khi hết hạn c&oacute; thể gia hạn, v&agrave; c&oacute; thể bảo l&atilde;nh gia đ&igrave;nh. Khi c&aacute;c bạn l&agrave;m việc với h&igrave;nh thức visa n&agrave;y th&igrave; sẽ được hưởng chế độ giống với chế độ của người Nhật về lương, thưởng v&agrave; c&aacute;c khoản trợ cấp (nếu c&oacute;).</p>\r\n\r\n<p>&nbsp; &nbsp;Visa kỹ năng đặc định số 2 cần những điều kiện sau: c&oacute; chuy&ecirc;n m&ocirc;n v&agrave; kinh nghiệm nhiều năm trong ngh&agrave;nh.</p>\r\n\r\n<p>&nbsp; &nbsp;Loại h&igrave;nh n&agrave;y được Nhật Bản ph&aacute;t triển về 2 ngh&agrave;nh ngh&ecirc; x&acirc;y dựng v&agrave; ngh&agrave;nh đ&oacute;ng t&agrave;u, h&agrave;ng hải.</p>', 'ita_tintuc_vMQ1fOyFJ.jpg', 10, NULL, 1, 1, 1, '2019-04-15 16:53:57', '2019-04-19 17:01:57'),
(32, 24, 'Sự khác nhau giữa visa du học và visa kỹ sư', 'su-khac-nhau-giua-visa-du-hoc-va-visa-ky-su', 'Bạn đã biết sự khác nhau giữa visa du học và visa kỹ sư?', '<h2><strong>１．「<a href=\"http://vnjob.jp/nhung-thay-doi-cua-nhat-ban\">留学ビザ</a><a href=\"http://vnjob.jp/visa-hot\" target=\"-visaduhc\">」- Visa du học</a></strong></h2>\r\n\r\n<p>&nbsp;Đ&atilde; l&agrave; visa du học th&igrave; mục đ&iacute;ch ch&iacute;nh của visa n&agrave;y l&agrave; để c&aacute;c bạn tập trung v&agrave;o việc học, kh&ocirc;ng phải l&agrave; đi l&agrave;m. Mặt sau của visa khi c&aacute;c bạn nhập cảnh lần đầu th&igrave; sẽ được cục Xuất nhập cảnh đ&oacute;ng cho c&aacute;c bạn dấu ph&iacute; sau thẻ tư c&aacute;ch lưu tr&uacute; dấu được ph&eacute;p l&agrave;m th&ecirc;m 28 tiếng. Tuy nhi&ecirc;n c&oacute; rất nhiều bạn du học sinh sang đ&acirc;y l&agrave;m qu&aacute; tiếng. Việc n&agrave;y sẽ dẫn đến kh&oacute; khăn khi c&aacute;c bạn gia hạn visa sau n&agrave;y.</p>\r\n\r\n<p><a href=\"vnjob.jp/visa-hot\" target=\"_blank\"><img alt=\"留学ビザ\" src=\"/ckfinder/userfiles/images/nguyen%20thi%20my%20linh%20-%202.png\" /></a></p>\r\n\r\n<p>　　　　　　　　　留学ビザ - visa du học</p>\r\n\r\n<h2><strong>２．<a href=\"http://vnjob.jp/nhung-thay-doi-cua-nhat-ban\" target=\"-visaks\">「技術・人文知識・国際業務ビザ」- visa kỹ sư</a></strong></h2>\r\n\r\n<p>&nbsp; Visa kỹ sư l&agrave; visa để c&aacute;c bạn c&oacute; thể l&agrave;m việc tại Nhật l&acirc;u d&agrave;i. Gọi l&agrave; visa kỹ sư, nhưng kh&ocirc;ng chỉ c&aacute;c bạn thuộc khối ngh&agrave;nh kỹ lấy được tư c&aacute;ch visa n&agrave;y, m&agrave; c&aacute;c bạn học khối ngh&agrave;nh kinh tế cũng c&oacute; thể xin được tư c&aacute;ch của visa kỹ sư. Visa kỹ sư c&oacute; thể gia hạn đến khi c&aacute;c bạn kh&ocirc;ng muốn sinh sống tại Nhật. V&agrave; loại h&igrave;nh visa n&agrave;y c&oacute; thể bảo l&atilde;nh gia đ&igrave;nh, đ&acirc;y ch&iacute;nh l&agrave; ưu điểm của visa kỹ sư m&agrave; c&aacute;c bạn đ&atilde; tốt nghiệp cao đẳng, đại học hướng tới.</p>\r\n\r\n<p><a href=\"vnjob.jp/visa-hot\" target=\"_blank\"><img alt=\"\" src=\"/ckfinder/userfiles/images/duy%20viet%20-%202.png\" /></a></p>\r\n\r\n<p>　　　　　　　　　　　　　　　　就労ビザ - visa kỹ sư</p>', 'ita_tintuc_gCZQ7P4GX.gif', 10, NULL, 1, 1, 1, '2019-04-20 10:34:31', '2019-04-20 10:34:31'),
(33, 10, '日本方へ挨拶', 'introduce-for-japaneses-customers', '日本人方へ挨拶', '<h2><strong>弊社よりお客様へ挨拶</strong></h2>\r\n\r\n<p>　　　ご担当者各位様へ</p>\r\n\r\n<p>　拝啓　時下ますますご清栄のこととお慶び申し上げます。</p>\r\n\r\n<p>　平素は格別のご愛顧を賜り、厚く御礼申し上げます。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>　さて、このたび弊社は合同会社ベトナムワークです。弊社はベトナム人の人材を提供するサービスをしております。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>　LE VAN HUNGがベトナム人であることから、弊社には多くのベトナム人が求職者として登録しています。</p>\r\n\r\n<p>　ベトナム人はその国民性から大変真面目で明るく社交的であることから、人材をお求めの企業様からの人気も高いことから、弊社でもベトナム人人材を積極的に紹介させていただいております。</p>\r\n\r\n<p>　</p>\r\n\r\n<p>　弊社では、求職者の学習した分野や職務経歴、得意分野、就職・転職に当たっての希望条件などを的確に把握し、</p>\r\n\r\n<p>　人材をお求めの企業様の希望条件等を突き合わせて、企業様に最も適合すると考える人材を紹介させていただきます。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>　今後とも倍旧のご支援おひきたてを賜りますようお願い申し上げます。</p>\r\n\r\n<p>　まずは略儀ながら、書面をもってご挨拶かたがたご案内申し上げます。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>　敬具</p>\r\n\r\n<p>&nbsp;</p>', 'ita_tintuc_2QjggtJQq.jpg', 10, NULL, 1, 1, 1, '2019-04-24 14:13:44', '2019-04-24 14:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videohome`
--

CREATE TABLE `videohome` (
  `id_video` int(10) UNSIGNED NOT NULL,
  `video_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videohome`
--

INSERT INTO `videohome` (`id_video`, `video_pic`, `video_url`) VALUES
(1, 'ita-videohome-X8yjH8WlF.jpg', 'https://www.youtube.com/embed/F0AT_7uVbeo?autoplay=1&loop=1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contentgt`
--
ALTER TABLE `contentgt`
  ADD PRIMARY KEY (`id_gt`);

--
-- Indexes for table `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id_add`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id_dv`);

--
-- Indexes for table `dktheodoi`
--
ALTER TABLE `dktheodoi`
  ADD PRIMARY KEY (`id_dktd`);

--
-- Indexes for table `doitac`
--
ALTER TABLE `doitac`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `infor`
--
ALTER TABLE `infor`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `ita_user`
--
ALTER TABLE `ita_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_tags_id_tags_foreign` (`id_tags`),
  ADD KEY `news_tags_id_blog_foreign` (`id_blog`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id_seo`);

--
-- Indexes for table `slideanh`
--
ALTER TABLE `slideanh`
  ADD PRIMARY KEY (`id_pic`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videohome`
--
ALTER TABLE `videohome`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contentgt`
--
ALTER TABLE `contentgt`
  MODIFY `id_gt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id_add` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id_dv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dktheodoi`
--
ALTER TABLE `dktheodoi`
  MODIFY `id_dktd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `doitac`
--
ALTER TABLE `doitac`
  MODIFY `id_vendor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `infor`
--
ALTER TABLE `infor`
  MODIFY `id_info` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ita_user`
--
ALTER TABLE `ita_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_contact` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id_seo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slideanh`
--
ALTER TABLE `slideanh`
  MODIFY `id_pic` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_blog` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videohome`
--
ALTER TABLE `videohome`
  MODIFY `id_video` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD CONSTRAINT `news_tags_id_blog_foreign` FOREIGN KEY (`id_blog`) REFERENCES `tintuc` (`id_blog`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_tags_id_tags_foreign` FOREIGN KEY (`id_tags`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
