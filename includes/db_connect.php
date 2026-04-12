<?php
// 1. ตั้งค่าการเชื่อมต่อ (ให้เพื่อนแก้ตรงนี้ตามเครื่องตัวเอง)
$host = "localhost";
$username = "root";      // ปกติ XAMPP คือ root
$password = "";          // ปกติ XAMPP คือค่าว่าง
$dbname = "internships"; // ชื่อ Database 

// 2. สร้างการเชื่อมต่อ
$conn = mysqli_connect($host, $username, $password, $dbname);

// 3. ตรวจสอบการเชื่อมต่อ (Error Handling)
if (!$conn) {
    die("❌ การเชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
}

// 4. ตั้งค่า Encoding ให้รองรับภาษาไทย (UTF-8)
mysqli_set_charset($conn, "utf8");

// 5. ตั้งค่า Timezone ให้เป็นเวลาประเทศไทย
date_default_timezone_set('Asia/Bangkok');

/**
 * คู่มือสำหรับเพื่อนๆ:
 * เวลาจะใช้งานในหน้า PHP อื่นๆ ให้พิมพ์:
 * require_once '../includes/db_connect.php'; (ถ้าไฟล์อยู่ในโฟลเดอร์ย่อย)
 * หรือ
 * require_once 'includes/db_connect.php'; (ถ้าไฟล์อยู่นอกสุด)
 */
?>