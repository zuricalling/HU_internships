<?php 
include 'includes/db_connect.php'; 
$msg = ""; 


?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ลงทะเบียนนิสิตใหม่ - IS SWU</title>
    <!-- ไฟล์ CSS ภายนอก -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { 
            font-family: 'Kanit', sans-serif; background-color: #f6f7f9; 
            display: flex; align-items: center; justify-content: center; 
            min-height: 100vh; margin: 0; padding: 40px 15px; 
        }
        
        .reg-card { 
            background: white; padding: 45px; border-radius: 15px; 
            box-shadow: 0 10px 40px rgba(0,0,0,0.06); width: 100%; max-width: 800px; 
        }
        .reg-icon { 
            width: 75px; height: 75px; border-radius: 50%; display: flex; 
            align-items: center; justify-content: center; font-size: 32px; 
            color: white; margin: 0 auto 15px auto; box-shadow: 0 4px 15px rgba(255, 193, 7, 0.4); 
            background-color: #ffc107; 
        }
        
        .custom-input { 
            border: 1px solid #ced4da; border-radius: 8px; overflow: hidden; margin-bottom: 18px; display: flex; align-items: center; 
        }
        .custom-input .input-group-text { background: transparent; border: none; color: #ffc107; padding-left: 15px; width: 45px; justify-content: center;}
        .custom-input .form-control { border: none; font-size: 14.5px; padding: 11px 10px 11px 0; box-shadow: none; outline: none; }
        
        .reg-label { text-align: left; display: block; font-size: 13.5px; font-weight: 700; margin-bottom: 6px; color: #444; }
        
        .btn-reg { background-color: #212529; color: white; border: none; font-size: 16px; font-weight: bold; letter-spacing: 0.5px; transition: 0.3s; padding: 12px 0;}
        .btn-reg:hover { background-color: #ffc107; color: black; box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3); }
        
        .section-title { font-size: 16px; color: #c4122d; font-weight: 800; border-bottom: 2px solid #f0f0f0; padding-bottom: 8px; margin-bottom: 20px; margin-top: 15px; }
    </style>
</head>
<body>
        <div class="reg-card">
        
        <div class="reg-icon">
            <i class="fas fa-user-plus"></i>
        </div>
        
        <h3 class="fw-bold text-dark text-center mb-1">ลงทะเบียนบัญชีนิสิต</h3>
        <p class="text-muted small text-center mb-4">ระบบบันทึกคำร้องขอฝึกงาน (Internships System)</p>
        
        <?php echo $msg; ?>
        
        <form method="POST">
            
            <div class="section-title">1. ข้อมูลการเข้าสู่ระบบ</div>
            <div class="row">
                <div class="col-md-6">
                    <label class="reg-label">รหัสนิสิต / Username <span class="text-danger">*</span></label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                        <input type="text" name="std_code" class="form-control" placeholder="รหัสนิสิต 9 หลัก" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="reg-label">รหัสผ่าน / Password <span class="text-danger">*</span></label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="ตั้งรหัสผ่าน" required>
                    </div>
                </div>
            </div>

            <div class="section-title">2. ข้อมูลส่วนตัวพื้นฐาน</div>
            <div class="row">
                <div class="col-md-6">
                    <label class="reg-label">ชื่อจริง (First Name) <span class="text-danger">*</span></label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" name="fname" class="form-control" placeholder="ระบุชื่อจริง" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="reg-label">นามสกุล (Last Name) <span class="text-danger">*</span></label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" name="lname" class="form-control" placeholder="ระบุนามสกุล" required>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label class="reg-label">อีเมล (E-Mail) <span class="text-danger">*</span></label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="example@g.swu.ac.th" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="reg-label">เบอร์โทรศัพท์ (Phone)</label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        <input type="text" name="phone" class="form-control" placeholder="08X-XXX-XXXX">
                    </div>
                </div>
            </div>

            <div class="section-title">3. ข้อมูลการศึกษา</div>
            <div class="row">
                <div class="col-md-6">
                    <label class="reg-label">คณะ (Faculty)</label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                        <input type="text" name="faculty" class="form-control" placeholder="มนุษยศาสตร์">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="reg-label">สาขาวิชา (Major)</label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                        <input type="text" name="major" class="form-control" placeholder="สารสนเทศศึกษา">
                    </div>
                </div>
                <!-- ================= เพิ่มใหม่: กล่องเลือกภาคเรียน ================= -->
                <div class="col-md-6">
                    <label class="reg-label">ภาคการศึกษา (Program Type)</label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                        <!-- ใช้แท็ก select แทน input เพื่อทำ Dropdown -->
                        <select name="program_type" class="form-control" style="appearance: auto; cursor: pointer;">
                            <option value="" disabled selected>เลือกภาคการศึกษา</option>
                            <option value="ปกติ">ภาคปกติ</option>
                            <option value="พิเศษ">ภาคพิเศษ</option>
                        </select>
                    </div>
                </div>
                <!-- ================= เพิ่มใหม่: กล่องเลือกชั้นปี ================= -->
                <div class="col-md-6">
                    <label class="reg-label">ชั้นปี (Year Level)</label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-layer-group"></i></span>
                        <select name="year_level" class="form-control" style="appearance: auto; cursor: pointer;">
                            <option value="" disabled selected>เลือกชั้นปี</option>
                            <option value="1">ชั้นปีที่ 1</option>
                            <option value="2">ชั้นปีที่ 2</option>
                            <option value="3">ชั้นปีที่ 3</option>
                            <option value="4">ชั้นปีที่ 4</option>
                        </select>
                    </div>
                </div>
                <!-- ================= จบส่วนที่เพิ่มใหม่ ================= -->
                
                <div class="col-md-6">
                    <label class="reg-label">เกรดเฉลี่ยสะสม (GPA)</label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                        <input type="number" step="0.01" name="gpa" class="form-control" placeholder="เช่น 3.50">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="reg-label">วันที่เข้าเรียน (Enrollment Date)</label>
                    <div class="custom-input">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        <input type="date" name="enrollment_date" class="form-control">
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-reg w-100 rounded-5 mt-4"><i class="fas fa-save me-2"></i> สร้างบัญชีผู้ใช้นิสิต</button>
        </form>
        
        <div class="text-center mt-4">
            <a href="portal.php" class="text-muted small fw-bold text-decoration-none"><i class="fas fa-arrow-left"></i> กลับไปหน้าเลือกระบบ</a>
        </div>
    </div>

</body>
</html>