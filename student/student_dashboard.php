<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบนิสิต</title>
    <!-- ไฟล์ CSS Bootstrap และ FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Kanit', sans-serif; background: #e9ecef; margin: 0; padding: 0; }
        
        .dash-topbar { background: #212529; color: white; padding: 15px 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000; }
        .dash-body { min-height: 100vh; padding: 40px 15px; }
        
        .card-form, .card-table { border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); background: white; border: none; }
        .card-form .card-header { background: #dc3545; color: white; font-weight: bold; padding: 15px 20px; font-size: 16px; border: none; }
        .card-table .card-header { background: #6c757d; color: white; font-weight: bold; padding: 15px 20px; font-size: 16px; border: none; }
        
        .table { margin-bottom: 0; }
        .table-dark th { background-color: #212529 !important; border-bottom: none; font-size: 14.5px; }
        
        .status-badge { padding: 6px 15px; border-radius: 20px; font-size: 12px; font-weight: bold; color: white; display: inline-block; white-space: nowrap;}
        .bs-1 { background-color: #ffc107; color: black; } 
        .bs-2 { background-color: #0d6efd; } 
        .bs-3 { background-color: #6f42c1; } 
        .bs-4 { background-color: #198754; } 
        .bs-9 { background-color: #dc3545; }

        .btn-custom-submit { background-color: #212529; color: white; font-weight: bold; border-radius: 6px; transition: 0.3s; width: 100%; padding: 10px; border: none;}
        .btn-custom-submit:hover { background-color: #424649; }
    </style>
</head>
<body>
    
    <!-- แถบสีดำด้านบน -->
    <div class="dash-topbar d-flex justify-content-between align-items-center">
        <span class="fs-5 fw-bold text-white"><i class="fas fa-user-graduate me-2"></i> ระบบฝึกงาน (สำหรับนิสิต)</span>
        <span class="fs-6 fw-medium text-white"><?php echo $student_code; ?> | <a href="logout.php" class="text-danger fw-bold text-decoration-none ms-2"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></span>
    </div>

    <!-- พื้นที่เนื้อหา -->
    <div class="dash-body">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">
                
                <!-- ================= ฝั่งซ้าย: ฟอร์มลงข้อมูล ================= -->
                <div class="col-lg-4">
                    <div class="card card-form h-100">
                        <div class="card-header"><i class="fas fa-edit"></i> ฟอร์มขอทำ Internships</div>
                        <div class="card-body p-4 bg-white">
                            <?php echo $msg; ?>
                            <form method="POST">
                                <label class="small fw-bold mb-1 text-dark">บริษัท / สถานประกอบการ</label>
                                <input type="text" name="c" class="form-control mb-3 shadow-sm border-light" placeholder="เช่น Gosoft Thailand" required>
                                
                                <label class="small fw-bold mb-1 text-dark">ตำแหน่งที่ฝึก</label>
                                <input type="text" name="p" class="form-control mb-3 shadow-sm border-light" placeholder="เช่น Programmer, UX/UI" required>
                                
                                <label class="small fw-bold mb-1 text-dark">วันที่เริ่ม - สิ้นสุด</label>
                                <input type="date" name="s" class="form-control mb-2 shadow-sm border-light" required>
                                <input type="date" name="e" class="form-control mb-4 shadow-sm border-light" required>
                                
                                <button type="submit" class="btn-custom-submit"><i class="fas fa-save me-1"></i> บันทึกข้อมูล</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- ================= ฝั่งขวา: ประวัติคำร้อง ================= -->
                <div class="col-lg-8">
                    <div class="card card-table h-100">
                        <div class="card-header"><i class="fas fa-list"></i> ประวัติคำขอฝึกงานของคุณ</div>
                        <div class="card-body p-0 bg-white">
                            <div class="table-responsive">
                                <table class="table table-hover text-center align-middle">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="py-3">วันที่ยื่น</th>
                                            <th class="py-3 text-start ps-4">บริษัท / สถานประกอบการ</th>
                                            <th class="py-3">ตำแหน่ง</th>
                                            <th class="py-3">สถานะ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($res && $res->num_rows > 0): ?>
                                            <?php while($r = $res->fetch_assoc()): ?>
                                                <tr>
                                                    <td class="py-3 fw-bold text-muted" style="font-size:14px;"><?php echo date('d/m/Y', strtotime($r['created_at'])); ?></td>
                                                    <td class="py-3 text-start ps-4 fw-bold text-dark"><?php echo $r['company_name']; ?></td>
                                                    <td class="py-3 text-secondary" style="font-size:14.5px;"><?php echo $r['position']; ?></td>
                                                    <td class="py-3">
                                                        <span class="status-badge bs-<?php echo $r['status']; ?>">Status <?php echo $r['status']; ?></span>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="4" class="py-5 text-muted fw-bold">คุณยังไม่มีประวัติการส่งคำร้องขอฝึกงาน</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>