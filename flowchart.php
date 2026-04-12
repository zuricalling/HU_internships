<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html><html lang="th"><head><meta charset="UTF-8"><title>ขั้นตอนการฝึกงาน</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><link rel="stylesheet" href="style.css"></head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="flowchart-hero"><h2 class="fw-bold mb-2"><i class="fas fa-code-branch"></i> ขั้นตอนการดำเนินงาน Internships</h2></div>
    <div class="container py-5"><div class="row g-5">
        <div class="col-lg-8"><div class="timeline-section">
            <div class="timeline-step"><div class="timeline-circle bg-danger">1</div><div class="timeline-card border-start border-danger border-4"><h5 class="fw-bold text-danger">นิสิตยื่นแบบฟอร์มขอฝึกงาน</h5><p class="small text-muted">นิสิตคีย์ข้อมูลสถานประกอบการผ่าน Web Form เข้าสู่ระบบ</p></div></div>
            <div class="timeline-step"><div class="timeline-circle bg-c1 text-dark">2</div><div class="timeline-card border-start border-warning border-4"><h5 class="fw-bold text-warning" style="text-shadow:1px 1px 1px #ddd;">รับเรื่องเข้าระบบ</h5><p class="small text-muted">เจ้าหน้าที่ตรวจสอบข้อมูลเบื้องต้น</p></div></div>
            <div class="timeline-step"><div class="timeline-circle bg-c2">3</div><div class="timeline-card border-start border-primary border-4"><h5 class="fw-bold text-primary">อาจารย์ที่ปรึกษาพิจารณา</h5><p class="small text-muted">อาจารย์ประจำหลักสูตรกดรับทราบและอนุมัติ</p></div></div>
            <div class="timeline-step"><div class="timeline-circle bg-c3">4</div><div class="timeline-card border-start border-4" style="border-color:#6f42c1;"><h5 class="fw-bold" style="color:#6f42c1;">ออกใบส่งตัว</h5><p class="small text-muted">เจ้าหน้าที่จัดพิมพ์หนังสือแบบเป็นทางการ</p></div></div>
            <div class="timeline-step"><div class="timeline-circle bg-c4">5</div><div class="timeline-card border-start border-success border-4"><h5 class="fw-bold text-success">เสร็จสิ้นการฝึกงาน</h5><p class="small text-muted">อาจารย์ประเมินผลนิเทศ</p></div></div>
        </div></div>
        <div class="col-lg-4"><div class="card shadow-sm border-0 sticky-top" style="top:100px;">
            <div class="status-box-header"><i class="fas fa-info-circle"></i> ความหมายของเลขสถานะ (Status)</div>
            <div class="card-body bg-white p-4 lh-lg fw-bold small border-bottom">
                <div><span class="dot bg-c1"></span> 1 : รับเรื่องเข้าระบบ</div>
                <div><span class="dot bg-c2"></span> 2 : อาจารย์ที่ปรึกษาอนุมัติ</div>
                <div><span class="dot bg-c3"></span> 3 : ออกใบส่งตัวแล้ว</div>
                <div><span class="dot bg-c4"></span> 4 : ฝึกงานเสร็จสิ้น</div>
                <div class="text-danger"><span class="dot bg-danger"></span> 9 : ยกเลิก / ข้อมูลผิดพลาด</div>
            </div>
            <div class="card-body bg-light text-center"><a href="portal.php" class="btn fw-bold w-100 mb-2 text-white" style="background:#c4122d;">เข้าระบบยื่นคำร้อง</a></div>
        </div></div>
    </div></div>
    <?php include 'footer.php'; ?><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body></html>