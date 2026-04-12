<?php include('includes/db_connect.php'); if(isset($_SESSION['user_id'])) { header("Location: index.php"); exit(); } ?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <title>Portal</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="style.css"></head>
<body><?php include 'navbar.php'; ?>
    <div class="portal-wrapper">
        <div class="container pb-5">
            <div class="text-center mb-5">
                <h1 class="portal-title">Internships System</h1>
                <p>เลือกระบบการเข้าใช้งาน</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <a href="student/login_student.php" class="portal-card bg-p1">
                        <div class="portal-icon">
                            <i class="fas fa-user-graduate"> </i>
                        </div>
                        <h3>นิสิต</h3>
                        <h4>Student Login</h4>
                        <p>เข้าสู่ระบบเพื่อยื่นคำร้อง<br>และติดตามสถานะ</p>
                        <div class="portal-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="staff/login_staff.php" class="portal-card bg-p2">
                        <div class="portal-icon">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h3>เจ้าหน้าที่คณะ</h3>
                        <h4>Staff Portal</h4>
                        <p>ตรวจสอบและอัปเดต<br>สถานะใบส่งตัว</p>
                        <div class="portal-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="staff/login_teacher.php" class="portal-card bg-p3">
                        <div class="portal-icon">
                            <i class="fas fa-chalkboard-teacher"> </i>
                        </div>
                            <h3>อาจารย์</h3>
                            <h4>Teacher Portal</h4>
                            <p>อนุมัติคำร้องขอฝึกงาน<br>และประเมินผล</p>
                        <div class="portal-arrow">
                                <i class="fas fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
        <div class="col-lg-3 col-md-6">
            <a href="flowchart.php" class="portal-card bg-p4">
                <div class="portal-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Manual</h3>
                <h4>คู่มือการใช้งาน</h4>
                <p>ขั้นตอนการดําเนินงาน<br>และระเบียบการ</p>
                <div class="portal-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
</body>
</html>