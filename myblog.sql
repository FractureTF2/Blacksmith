-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 12:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Monu Giri', 'whomonugiri@gmail.com', 'admin123'),
(2, 'Fracture', 'fff@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Web Develpoment'),
(2, 'Graphic Design'),
(3, 'Video Editing'),
(4, 'Fronend'),
(5, 'Backend'),
(9, 'Javascript');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `name`, `post_id`, `created_at`) VALUES
(1, 'this is awesome article', 'Monu Sharma', 21, '2021-02-20 19:08:11'),
(2, 'i like thispost', 'Sunidhi Chauhan', 21, '2021-02-20 19:08:11'),
(3, 'this is a test comment', 'Sonali Rana', 21, '2021-02-20 19:32:13'),
(4, 'this is my first comment on this post', 'Monu Giri', 4, '2021-02-20 19:33:31'),
(5, 'this is my another comment', 'Mohan Rana', 4, '2021-02-20 19:35:53'),
(6, 'this was awesome i learned a lot', 'Monu Giri', 20, '2021-02-20 19:36:37'),
(7, 'i love it ', 'Shruti Sharma', 20, '2021-02-20 19:36:52'),
(8, 'it was awesome man', 'Pankaj Udas', 20, '2021-02-20 19:37:48'),
(9, 'i like this post', 'Piyush Raj', 20, '2021-02-20 19:38:05'),
(10, 'this is super cool', 'Shivam Sharma', 20, '2021-02-20 19:38:21'),
(11, 'yeah i like this ', 'Adity Bisht', 20, '2021-02-20 19:38:38'),
(12, 'sdsd', 'sdsd', 21, '2021-02-23 16:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `image`) VALUES
(1, 11, '1.jpg'),
(2, 11, '2.jpg'),
(3, 0, '3.jpg'),
(4, 20, '4.jpg'),
(5, 20, '5.jpg'),
(6, 20, '1.jpg'),
(7, 33, 'moon-2048727_1920.jpg'),
(8, 33, 'children-5833685_1920.jpg'),
(9, 34, 'moon-2048727_1920.jpg'),
(10, 34, 'children-5833685_1920.jpg'),
(11, 35, 'moon-2048727_1920.jpg'),
(12, 35, 'children-5833685_1920.jpg'),
(13, 36, '7-76366_avengers-infinity-war-hd.jpg'),
(14, 36, 'moon-2048727_1920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `action`) VALUES
(1, 'Home', 'index.php'),
(3, 'Categories', '#'),
(4, 'saas', '#');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `model_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_embed` varchar(255) NOT NULL,
  `model_link` varchar(255) NOT NULL,
  `model_user` varchar(255) NOT NULL,
  `model_user_link` varchar(255) NOT NULL,
  `model_site` varchar(255) NOT NULL,
  `model_site_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`model_id`, `model_name`, `model_embed`, `model_link`, `model_user`, `model_user_link`, `model_site`, `model_site_link`) VALUES
(1, 'Bulky Knight', 'https://sketchfab.com/models/002a90cbf12941b792f9685546a7502c/embed', 'https://sketchfab.com/3d-models/bulky-knight-002a90cbf12941b792f9685546a7502c?utm_medium=embed&utm_campaign=share-popup&utm_content=002a90cbf12941b792f9685546a7502c', 'Arthur Krut', 'https://sketchfab.com/OptiCube?utm_medium=embed&utm_campaign=share-popup&utm_content=002a90cbf12941b792f9685546a7502c', 'Sketchfab', 'https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=002a90cbf12941b792f9685546a7502c'),
(2, 'Aventador SVJ Black-Ghost™️', 'https://sketchfab.com/models/412e5ba4c1264a4fab97660ebc0695a4/embed', 'https://sketchfab.com/3d-models/aventador-svj-black-ghosttm-412e5ba4c1264a4fab97660ebc0695a4?utm_medium=embed&utm_campaign=share-popup&utm_content=412e5ba4c1264a4fab97660ebc0695a4', 'SDC PERFORMANCE™️', 'https://sketchfab.com/3Duae?utm_medium=embed&utm_campaign=share-popup&utm_content=412e5ba4c1264a4fab97660ebc0695a4', 'Sketchfab', 'https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=412e5ba4c1264a4fab97660ebc0695a4'),
(3, 'Tunic - medieval - for animation', 'https://sketchfab.com/models/b3cf100c7fed4468a193e0133002cc03/embed', 'https://sketchfab.com/3d-models/tunic-medieval-for-animation-b3cf100c7fed4468a193e0133002cc03?utm_medium=embed&utm_campaign=share-popup&utm_content=b3cf100c7fed4468a193e0133002cc03', 'Andy Woodhead', 'https://sketchfab.com/Andywoodhead?utm_medium=embed&utm_campaign=share-popup&utm_content=b3cf100c7fed4468a193e0133002cc03', 'Sketchfab', 'https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=b3cf100c7fed4468a193e0133002cc03'),
(4, 'Scifi Motorcycle Project_MX_2', 'https://sketchfab.com/models/017d95fd42b2445f905dfe4613ee859e/embed', 'https://sketchfab.com/3d-models/scifi-motorcycle-project-mx-2-017d95fd42b2445f905dfe4613ee859e?utm_medium=embed&utm_campaign=share-popup&utm_content=017d95fd42b2445f905dfe4613ee859e', 'JonnyMANSON', 'https://sketchfab.com/JonnyMANSON?utm_medium=embed&utm_campaign=share-popup&utm_content=017d95fd42b2445f905dfe4613ee859e', 'Sketchfab', 'https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=017d95fd42b2445f905dfe4613ee859e'),
(5, 'Electrical Boxes', 'https://sketchfab.com/models/e5a058d5210448e5b2640cdb3fbcb163/embed', 'https://sketchfab.com/3d-models/electrical-boxes-e5a058d5210448e5b2640cdb3fbcb163?utm_medium=embed&utm_campaign=share-popup&utm_content=e5a058d5210448e5b2640cdb3fbcb163', 'Outlier Spa', 'https://sketchfab.com/outlier_spa?utm_medium=embed&utm_campaign=share-popup&utm_content=e5a058d5210448e5b2640cdb3fbcb163', 'Sketchfab', 'https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=e5a058d5210448e5b2640cdb3fbcb163'),
(6, 'Wooden Wardrobe', 'https://sketchfab.com/models/b9db1b526f86472c9cd2f6a925169fd2/embed', 'https://sketchfab.com/3d-models/wooden-wardrobe-b9db1b526f86472c9cd2f6a925169fd2?utm_medium=embed&utm_campaign=share-popup&utm_content=b9db1b526f86472c9cd2f6a925169fd2', 'Shedmon', 'https://sketchfab.com/shedmon?utm_medium=embed&utm_campaign=share-popup&utm_content=b9db1b526f86472c9cd2f6a925169fd2', 'Sketchfab', 'https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=b9db1b526f86472c9cd2f6a925169fd2'),
(7, 'Toxic Toby | DAE Stylized Creation', 'https://sketchfab.com/models/e3f97c8265ad4ad1845880a6869e24ea/embed', 'https://sketchfab.com/3d-models/toxic-toby-dae-stylized-creation-e3f97c8265ad4ad1845880a6869e24ea?utm_medium=embed&utm_campaign=share-popup&utm_content=e3f97c8265ad4ad1845880a6869e24ea', 'the_Thorminator', 'https://sketchfab.com/the_Thorminator?utm_medium=embed&utm_campaign=share-popup&utm_content=e3f97c8265ad4ad1845880a6869e24ea', 'Sketchfab', 'https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=e3f97c8265ad4ad1845880a6869e24ea'),
(8, 'Wheels SDC - Pure Performance', 'https://sketchfab.com/models/eebae2592aa94ffabc886694bb6d096c/embed', 'https://sketchfab.com/3d-models/free-wheels-sdc-pure-performance-eebae2592aa94ffabc886694bb6d096c?utm_medium=embed&utm_campaign=share-popup&utm_content=eebae2592aa94ffabc886694bb6d096c', 'SDC PERFORMANCE™️', 'https://sketchfab.com/3Duae?utm_medium=embed&utm_campaign=share-popup&utm_content=eebae2592aa94ffabc886694bb6d096c', 'Sketchfab', 'https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=eebae2592aa94ffabc886694bb6d096c');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `category_id`) VALUES
(6, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:55:51', 2),
(7, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:55:55', 4),
(8, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:01', 1),
(9, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:06', 3),
(10, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:12', 2),
(11, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:17', 5),
(12, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:23', 2),
(13, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:28', 5),
(14, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:33', 2),
(15, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:39', 5),
(16, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:44', 2),
(17, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:48', 1),
(18, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:53', 1),
(19, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:56:58', 2),
(20, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:57:02', 3),
(21, 'Where does it come from?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-20 04:57:07', 4),
(22, 'this is a post title', '<p>thisi is post content</p>\r\n', '2021-03-08 07:55:35', 3),
(37, '', '', '2022-07-23 15:20:45', 1),
(38, '', '<p>dfgfsdg<em>fdgfdgdfg<strike>dfgdfgdf&nbsp;</strike></em></p>\r\n', '2022-07-23 15:21:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_detail` varchar(255) NOT NULL,
  `service_link` varchar(255) NOT NULL,
  `service_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_detail`, `service_link`, `service_img`) VALUES
(1, 'Design', 'We design according to requirements.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `parent_menu_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `parent_menu_id`, `name`, `action`) VALUES
(1, 3, 'Web Development', '#'),
(2, 3, 'Graphic Design', '#'),
(3, 3, 'User InterFace', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
