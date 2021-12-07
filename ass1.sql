-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 05:36 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ass1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `plate_number` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `travel_fee` int(11) NOT NULL,
  `plate_image` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cars`
--

INSERT INTO `cars` (`id`, `plate_number`, `owner`, `travel_fee`, `plate_image`, `updated_at`, `created_at`) VALUES
(3, 'b', 'aa', 33, 'storage/car/vl2TwsZCgaIvjOWagl3j849dTbVpKyUZbEzYihyI.jpg', '2021-11-21 01:54:23', '2021-11-20 02:49:20'),
(4, 'ye', 'aa', 123, 'storage/car/xyEyMOwyDfIqaTYs6zOkohY7gTBbX6jqjujnDirw.jpg', '2021-11-21 04:02:58', '2021-11-21 04:02:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `passengers`
--

CREATE TABLE `passengers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `car_id` int(11) NOT NULL,
  `travel_time` date NOT NULL,
  `avatar` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `passengers`
--

INSERT INTO `passengers` (`id`, `name`, `car_id`, `travel_time`, `avatar`, `updated_at`, `created_at`) VALUES
(2, 'neymar jr', 3, '2021-11-11', 'storage/passengers/kgZsQm6zactrMUYTAG41VQ1duulauG6Cfohf0ukh.jpg', '2021-11-21 03:39:54', '2021-11-21 03:39:54'),
(3, 'okok', 4, '2021-11-16', 'storage/passengers/JAx6GIq2Hj8BjUX408NMdhzlY9cmiCxFgGLHOvvG.jpg', '2021-11-21 04:03:35', '2021-11-21 04:03:26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
