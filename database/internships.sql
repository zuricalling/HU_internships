-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2026 at 07:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internships`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL COMMENT 'รหัสบริษัท',
  `company_name` varchar(200) NOT NULL COMMENT 'ชื่อบริษํท',
  `industry` varchar(100) DEFAULT NULL COMMENT 'ประเภทอุตสาหกรรม / หมวดหมู่ธุรกิจ',
  `address` text DEFAULT NULL COMMENT 'ที่อยู่',
  `province` varchar(100) DEFAULT NULL COMMENT 'จังหวัด',
  `phone` varchar(20) DEFAULT NULL COMMENT 'เบอร์ติดต่อ',
  `email` varchar(150) DEFAULT NULL COMMENT 'อีเมล',
  `website` varchar(200) DEFAULT NULL COMMENT 'เว็บไซต์',
  `contact_person_name` varchar(150) DEFAULT NULL COMMENT 'ชื่อผู้ติดต่อ (พี่เลี้ยง,HR)',
  `contact_person_phone` varchar(20) DEFAULT NULL COMMENT 'เบอร์ผู้ติดต่อ (พี่เลี้ยง,HR)',
  `contact_person_email` varchar(150) DEFAULT NULL COMMENT 'อีเมลผู้ติดต่อ (พี่เลี้ยง,HR)',
  `status` varchar(20) DEFAULT 'active' COMMENT 'สถานะการใช้งานของบริษัท',
  `created_at` datetime DEFAULT current_timestamp() COMMENT 'วันที่สร้างข้อมูล',
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'วันที่อัปเดตข้อมูล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ข้อมูลบริษัท';

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `industry`, `address`, `province`, `phone`, `email`, `website`, `contact_person_name`, `contact_person_phone`, `contact_person_email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tech Innovate Co., Ltd.', 'IT & Technology', '123 อาคารซอฟต์แวร์พาร์ค ชั้น 10 ถ.แจ้งวัฒนะ', 'กรุงเทพมหานคร', '02-111-2222', NULL, NULL, 'คุณวิภาวดี สมใจ (HR)', '081-111-2222', NULL, 'active', '2026-03-30 00:47:38', '2026-03-30 00:47:38'),
(2, 'Data Solutions Group', 'IT & Technology', '456 ตึกไซเบอร์เวิลด์ ชั้น 5 ถ.รัชดาภิเษก', 'กรุงเทพมหานคร', '02-333-4444', NULL, NULL, 'คุณสมพงษ์ ยอดเยี่ยม (Senior Dev)', '082-333-4444', NULL, 'active', '2026-03-30 00:47:38', '2026-03-30 00:47:38'),
(3, 'Fintech Future Bank', 'Banking & Finance', '789 สำนักงานใหญ่ ถ.สีลม', 'กรุงเทพมหานคร', '02-555-6666', NULL, NULL, 'คุณอารยา รักดี (HR)', '083-555-6666', NULL, 'active', '2026-03-30 00:47:38', '2026-03-30 00:47:38'),
(4, 'Creative Media Agency', 'Media & Communication', '321 ซอยสุขุมวิท 21', 'กรุงเทพมหานคร', '02-777-8888', NULL, NULL, 'คุณใจดี มีสุข (Manager)', '084-777-8888', NULL, 'inactive', '2026-03-30 00:47:38', '2026-03-30 00:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `course_showcase`
--

CREATE TABLE `course_showcase` (
  `course_id` int(11) NOT NULL COMMENT 'รหัสลำดับที่ในฐานข้อมูล',
  `course_code` varchar(10) NOT NULL COMMENT 'รหัสวิชาตามหลัสูตร',
  `course_name` varchar(255) NOT NULL COMMENT 'ชื่อรายวิชา',
  `description` text DEFAULT NULL COMMENT 'คำอธิบายรายวิชา',
  `image_path` varchar(255) DEFAULT NULL COMMENT 'ที่อยู่รูปภาพประกอบรายวิชา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='โชว์เคสรายวิชา ใช้ใน web frontend';

--
-- Dumping data for table `course_showcase`
--

INSERT INTO `course_showcase` (`course_id`, `course_code`, `course_name`, `description`, `image_path`) VALUES
(1, 'IS222', 'ระบบฐานข้อมูล (Database Systems)', 'เรียนรู้การออกแบบและจัดการฐานข้อมูลเชิงสัมพันธ์ด้วย SQL, การทำ ER-Diagram และ Normalization', 'assets/img/courses/is222.jpg'),
(2, 'IS223', 'การพัฒนาเว็บแอปพลิเคชัน (Web Development)', 'การสร้างเว็บไซต์แบบโต้ตอบด้วย HTML, CSS, JavaScript, Bootstrap และ PHP', 'assets/img/courses/is223.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_staff`
--

CREATE TABLE `faculty_staff` (
  `faculty_staff_id` int(11) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `username` varchar(50) DEFAULT NULL COMMENT 'ชื่อผู้ใช้ของเจ้าหน้าที่ (admin)',
  `first_name` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `last_name` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `faculty` varchar(100) DEFAULT NULL COMMENT 'คณะ',
  `email` varchar(150) NOT NULL COMMENT 'อีเมล',
  `password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `phone` varchar(15) DEFAULT NULL COMMENT 'เบอร์ติดต่อ',
  `created_at` datetime DEFAULT current_timestamp() COMMENT 'วันที่สร้างข้อมุล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ข้อมูลเจ้าหน้าที่คณะ';

--
-- Dumping data for table `faculty_staff`
--

INSERT INTO `faculty_staff` (`faculty_staff_id`, `username`, `first_name`, `last_name`, `faculty`, `email`, `password`, `phone`, `created_at`) VALUES
(1, 'admin', 'สมศรี', 'ใจดี', NULL, 'admin@faculty.swu.ac.th', '1234', NULL, '2026-03-28 01:29:03'),
(2, 'admin1', 'สมหญิง', 'งานเนี๊ยบ', NULL, 'admin1@email.com', '1234', NULL, '2026-03-30 00:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `internships_request`
--

CREATE TABLE `internships_request` (
  `request_id` int(11) NOT NULL COMMENT 'รหัสใบขอฝึกงาน',
  `student_id` int(11) NOT NULL COMMENT 'รหัสนิสิต',
  `company_id` int(11) NOT NULL COMMENT 'รหัสบริษัท',
  `start_date` date DEFAULT NULL COMMENT 'วันเริ่มฝึกงาน',
  `end_date` date DEFAULT NULL COMMENT 'วันสิ้นสุดฝึกงาน',
  `position` varchar(150) DEFAULT NULL COMMENT 'ตำแหน่ง',
  `remarks` text DEFAULT NULL COMMENT 'หมายเหตุ',
  `created_at` datetime DEFAULT current_timestamp() COMMENT 'วันที่สร้างข้อมูล',
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'วันที่อัพเดตข้อมูล',
  `status_id` int(11) DEFAULT 1 COMMENT 'เลขสถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ใบคำร้องขอการฝึกงาน';

--
-- Dumping data for table `internships_request`
--

INSERT INTO `internships_request` (`request_id`, `student_id`, `company_id`, `start_date`, `end_date`, `position`, `remarks`, `created_at`, `updated_at`, `status_id`) VALUES
(1, 1, 1, '2026-06-01', '2026-09-30', 'Web Developer', 'เกรดถึงเกณฑ์ อาจารย์อนุมัติแล้ว', '2026-03-30 00:47:48', '2026-03-30 00:47:48', 2),
(2, 2, 2, '2026-06-01', '2026-09-30', 'Database Admin', 'รออาจารย์ที่ปรึกษาตรวจสอบ', '2026-03-30 00:47:48', '2026-03-30 00:47:48', 1),
(3, 3, 3, '2026-06-01', '2026-09-30', 'IT Support', 'บริษัทแจ้งว่าปีนี้ไม่รับเด็กฝึกงานเพิ่มแล้ว', '2026-03-30 00:47:48', '2026-03-30 00:47:48', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `event_id` int(11) NOT NULL COMMENT 'รหัสกิจกรรม',
  `title` varchar(255) NOT NULL COMMENT 'ชื่อเรื่องกิจกรรม',
  `content` text DEFAULT NULL COMMENT 'เนื้อหา/รายละเอียดกิจกรรม',
  `event_date` date DEFAULT NULL COMMENT 'วันที่จัดกิจกรรม',
  `category` enum('Project','Activity','General') DEFAULT 'General' COMMENT 'หมวดหมู่กิจกรรม',
  `image_url` varchar(255) DEFAULT NULL COMMENT 'ที่อยู่ลิงก์รูปภาพกิจกรรม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ข้อมูลประชาสัมพันธ์กิจกรรมต่าง ๆ';

-- --------------------------------------------------------

--
-- Table structure for table `status_log`
--

CREATE TABLE `status_log` (
  `log_id` int(11) NOT NULL COMMENT 'รหัสลำดับเหตุการณ์',
  `request_id` int(11) NOT NULL COMMENT 'รหัสใบขอฝึกงาน',
  `faculty_staff_id` int(11) DEFAULT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `teacher_id` int(11) DEFAULT NULL COMMENT 'รหัสอาจารย์',
  `remarks` text DEFAULT NULL COMMENT 'หมายเหตุ',
  `changed_at` datetime DEFAULT current_timestamp() COMMENT 'เวลาลำดับเหตุการณ์',
  `old_status_id` int(11) DEFAULT NULL COMMENT 'สถานะเก่า',
  `new_status_id` int(11) DEFAULT 1 COMMENT 'สถานะใหม่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ข้อมูลการดำเนินรายการ';

--
-- Dumping data for table `status_log`
--

INSERT INTO `status_log` (`log_id`, `request_id`, `faculty_staff_id`, `teacher_id`, `remarks`, `changed_at`, `old_status_id`, `new_status_id`) VALUES
(1, 1, NULL, NULL, 'นิสิตยื่นคำขอเข้าระบบ', '2026-03-30 00:47:51', NULL, 1),
(2, 1, NULL, 1, 'ตรวจสอบเอกสารครบถ้วน อนุมัติให้ฝึกงานได้', '2026-03-30 00:47:51', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status_master`
--

CREATE TABLE `status_master` (
  `Status_ID` int(11) NOT NULL COMMENT 'รหัสสถานะ',
  `Status_Name` varchar(100) NOT NULL COMMENT 'ชื่อสถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ตารางเก็บข้อมูลชื่อสถานะ';

--
-- Dumping data for table `status_master`
--

INSERT INTO `status_master` (`Status_ID`, `Status_Name`) VALUES
(1, 'รับเรื่องเข้าระบบ'),
(2, 'อาจารย์ที่ปรึกษาอนุมัติ'),
(3, 'ออกใบส่งตัวแล้ว'),
(4, 'ฝึกงานเสร็จสิ้น'),
(9, 'ยกเลิก');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL COMMENT 'รหัสลำดับที่ของนิสิต',
  `student_code` varchar(20) NOT NULL COMMENT 'รหัสประจำตัว',
  `first_name` varchar(100) NOT NULL COMMENT 'ชื่อจริง',
  `last_name` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `email` varchar(150) NOT NULL COMMENT 'อีเมล',
  `password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `phone` varchar(15) DEFAULT NULL COMMENT 'เบอร์ติดต่อ',
  `faculty` varchar(100) DEFAULT NULL COMMENT 'คณะ',
  `major` varchar(100) DEFAULT NULL COMMENT 'สาขา',
  `gpa` decimal(3,2) DEFAULT NULL COMMENT 'เกรดเฉลี่ย',
  `enrollment_date` date DEFAULT NULL COMMENT 'วันที่เข้าเรียน',
  `created_at` datetime DEFAULT current_timestamp() COMMENT 'วันที่สร้างข้อมูล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ข้อมูลนิสิต';

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_code`, `first_name`, `last_name`, `email`, `password`, `phone`, `faculty`, `major`, `gpa`, `enrollment_date`, `created_at`) VALUES
(1, '6610501234', 'สมชาย', 'เรียนดี', 'somchai@student.swu.ac.th', '1234', NULL, NULL, NULL, NULL, NULL, '2026-03-28 01:29:01'),
(2, '6610500001', 'นภัสสร', 'เรียนเก่ง', 'napasorn@email.com', '1234', '089-000-1111', 'วิทยาศาสตร์', 'เทคโนโลยีสารสนเทศ', 3.85, NULL, '2026-03-30 00:47:43'),
(3, '6610500002', 'พีรพล', 'โค้ดไว', 'peerapol@email.com', '1234', '089-000-2222', 'วิทยาศาสตร์', 'วิทยาการคอมพิวเตอร์', 3.42, NULL, '2026-03-30 00:47:43'),
(4, '6610500003', 'สุดาพร', 'นอนน้อย', 'sudaporn@email.com', '1234', '089-000-3333', 'วิทยาศาสตร์', 'เทคโนโลยีสารสนเทศ', 2.95, NULL, '2026-03-30 00:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `supervision_record`
--

CREATE TABLE `supervision_record` (
  `supervision_id` int(11) NOT NULL COMMENT 'รหัสลำดับการนิเทศ',
  `request_id` int(11) NOT NULL COMMENT 'รหัสใบคำขอฝึกงาน',
  `teacher_id` int(11) NOT NULL COMMENT 'รหัสลำดับอาจารย์',
  `supervision_date` date DEFAULT NULL COMMENT 'วันที่ลงพื้นที่นิเทศ',
  `score` decimal(5,2) DEFAULT NULL COMMENT 'คะแนนประเมิน',
  `remarks` text DEFAULT NULL COMMENT 'หมายเหตุ',
  `created_at` datetime DEFAULT current_timestamp() COMMENT 'วันที่สร้างข้อมูล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ข้อมูลบันทึกการนิเทศ';

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL COMMENT 'รหัสลำดับที่อาจารย์',
  `username` varchar(50) DEFAULT NULL COMMENT 'ชื่อผู้ใช้ (teacher)',
  `first_name` varchar(100) NOT NULL COMMENT 'ชื่อจริง',
  `last_name` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `department` varchar(100) DEFAULT NULL COMMENT 'ภาควิชา',
  `email` varchar(150) NOT NULL COMMENT 'อีเมล',
  `password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `phone` varchar(15) DEFAULT NULL COMMENT 'เบอร์ติดต่อ',
  `created_at` datetime DEFAULT current_timestamp() COMMENT 'วันที่สร้างข้อมูล',
  `academic_position` varchar(100) DEFAULT NULL COMMENT 'ตำแหน่งทางวิชาการ',
  `expertise` text DEFAULT NULL COMMENT 'ประสบการณ์',
  `profile_image` varchar(255) DEFAULT NULL COMMENT 'รูปโปรไฟล์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ข้อมูลอาจารย์';

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `first_name`, `last_name`, `department`, `email`, `password`, `phone`, `created_at`, `academic_position`, `expertise`, `profile_image`) VALUES
(1, 'teacher', 'สมเกียรติ', 'สอนดี', NULL, 'teacher@faculty.swu.ac.th', '1234', NULL, '2026-03-28 01:29:07', NULL, NULL, NULL),
(2, 'teacher1', 'สมเกียรติ', 'สอนดี', 'วิทยาการคอมพิวเตอร์', 'somkiat@email.com', '1234', NULL, '2026-03-30 00:47:41', 'ผศ.ดร.', 'Database Management, SQL, NoSQL', 'assets/img/teachers/t1.jpg'),
(3, 'teacher2', 'วิไลวรรณ', 'ใจเย็น', 'เทคโนโลยีสารสนเทศ', 'wilaiwan@email.com', '1234', NULL, '2026-03-30 00:47:41', 'รศ.', 'Web Development, UX/UI Design', 'assets/img/teachers/t2.jpg'),
(4, 'teacher3', 'ธนากร', 'มุ่งมั่น', 'วิทยาการคอมพิวเตอร์', 'thanakorn@email.com', '1234', NULL, '2026-03-30 00:47:41', 'อ.', 'Artificial Intelligence, Python', 'assets/img/teachers/t3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `company_name` (`company_name`);

--
-- Indexes for table `course_showcase`
--
ALTER TABLE `course_showcase`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty_staff`
--
ALTER TABLE `faculty_staff`
  ADD PRIMARY KEY (`faculty_staff_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `internships_request`
--
ALTER TABLE `internships_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `status_log`
--
ALTER TABLE `status_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `faculty_staff_id` (`faculty_staff_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `old_status_id` (`old_status_id`),
  ADD KEY `new_status_id` (`new_status_id`);

--
-- Indexes for table `status_master`
--
ALTER TABLE `status_master`
  ADD PRIMARY KEY (`Status_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_code` (`student_code`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `supervision_record`
--
ALTER TABLE `supervision_record`
  ADD PRIMARY KEY (`supervision_id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสบริษัท', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_showcase`
--
ALTER TABLE `course_showcase`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสลำดับที่ในฐานข้อมูล', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_staff`
--
ALTER TABLE `faculty_staff`
  MODIFY `faculty_staff_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสเจ้าหน้าที่', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internships_request`
--
ALTER TABLE `internships_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสใบขอฝึกงาน', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกิจกรรม';

--
-- AUTO_INCREMENT for table `status_log`
--
ALTER TABLE `status_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสลำดับเหตุการณ์', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_master`
--
ALTER TABLE `status_master`
  MODIFY `Status_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสถานะ', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสลำดับที่ของนิสิต', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervision_record`
--
ALTER TABLE `supervision_record`
  MODIFY `supervision_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสลำดับการนิเทศ';

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสลำดับที่อาจารย์', AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `internships_request`
--
ALTER TABLE `internships_request`
  ADD CONSTRAINT `internships_request_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `internships_request_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `internships_request_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status_master` (`Status_ID`);

--
-- Constraints for table `status_log`
--
ALTER TABLE `status_log`
  ADD CONSTRAINT `status_log_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `internships_request` (`request_id`),
  ADD CONSTRAINT `status_log_ibfk_2` FOREIGN KEY (`faculty_staff_id`) REFERENCES `faculty_staff` (`faculty_staff_id`),
  ADD CONSTRAINT `status_log_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `status_log_ibfk_4` FOREIGN KEY (`old_status_id`) REFERENCES `status_master` (`Status_ID`),
  ADD CONSTRAINT `status_log_ibfk_5` FOREIGN KEY (`new_status_id`) REFERENCES `status_master` (`Status_ID`);

--
-- Constraints for table `supervision_record`
--
ALTER TABLE `supervision_record`
  ADD CONSTRAINT `supervision_record_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `internships_request` (`request_id`),
  ADD CONSTRAINT `supervision_record_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
