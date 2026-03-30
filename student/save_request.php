<?php
// 1. ตั้งค่าการแสดง Error และเริ่ม Session
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. เชื่อมต่อฐานข้อมูล (เปลี่ยน Path เป็น ../ เพื่อถอยออกจากโฟลเดอร์ student ไปหา includes)
require_once '../includes/db_connect.php'; 

// 3. ตรวจสอบสิทธิ์และรับค่าจากฟอร์ม
if (!isset($_SESSION['student_id'])) {
    die("Error: กรุณาล็อกอินก่อนใช้งาน");
}

$student_id = $_SESSION['student_id']; 
$company_id = mysqli_real_escape_string($conn, $_POST['company_id']);
$start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
$end_date   = mysqli_real_escape_string($conn, $_POST['end_date']);
$position   = mysqli_real_escape_string($conn, $_POST['position']);
$status_id  = 1; 

// 4. บันทึกลงตารางหลัก (Internships_Request)
$sql_request = "INSERT INTO Internships_Request (student_id, company_id, start_date, end_date, position, status_id) 
                VALUES ('$student_id', '$company_id', '$start_date', '$end_date', '$position', '$status_id')";

if (mysqli_query($conn, $sql_request)) {
    
    $new_request_id = mysqli_insert_id($conn);
    
    // 5. บันทึกประวัติลงตาราง Log
    $log_remarks = "นิสิตยื่นคำขอใหม่ผ่านระบบ";
    $sql_log = "INSERT INTO Status_Log (request_id, old_status_id, new_status_id, remarks) 
                VALUES ('$new_request_id', NULL, 1, '$log_remarks')"; 
    
    if (mysqli_query($conn, $sql_log)) {
        // ✅ สำเร็จ: เด้งไปหน้าดูสถานะ (ซึ่งอยู่ในโฟลเดอร์เดียวกัน)
        echo "<script>
                alert('ยื่นคำขอสำเร็จ! เลขที่คำขอคือ: $new_request_id');
                window.location.href = 'view_status.php'; 
              </script>";
    } else {
        echo "Error (Log): " . mysqli_error($conn);
    }

} else {
    echo "Error (Request): " . mysqli_error($conn);
}

mysqli_close($conn);
?>