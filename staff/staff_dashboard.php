<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ระบบเจ้าหน้าที่คณะ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Kanit', sans-serif; background: #e9ecef; margin: 0; padding: 0; }
        
        .dash-topbar { background: #e3000f; color: white; padding: 15px 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000; }
        .dash-body { min-height: 100vh; padding: 40px 15px; }
        
        .card-table { border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); background: white; border: none; }
        .card-table .card-header { background: #343a40; color: white; font-weight: bold; padding: 15px 20px; font-size: 16px; border: none; }
        
        .table { margin-bottom: 0; }
        .table-dark th { background-color: #212529 !important; border-bottom: none; font-size: 14.5px; }
        
        .status-badge { padding: 6px 15px; border-radius: 20px; font-size: 12px; font-weight: bold; color: white; display: inline-block; white-space: nowrap;}
        .bs-1 { background-color: #ffc107; color: black; } 
        .bs-2 { background-color: #0d6efd; } 
        .bs-3 { background-color: #6f42c1; } 
        .bs-4 { background-color: #198754; } 
        .bs-9 { background-color: #dc3545; }

        .btn-update { background-color: #212529; color: white; transition: 0.3s; font-weight: bold;}
        .btn-update:hover { background-color: #e3000f; color: white;}
    </style>
</head>
<body class="p-0">
    
    <div class="dash-topbar d-flex justify-content-between align-items-center">
        <span class="fs-5 fw-bold text-white"><i class="fas fa-file-signature me-2"></i> ระบบจัดการฝึกงาน (Staff Portal)</span>
        <span class="fs-6 fw-medium text-white"><?php echo $admin_name; ?> | <a href="logout.php" class="text-white fw-bold text-decoration-underline ms-2"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></span>
    </div>

    <div class="dash-body">
        <div class="container-fluid px-lg-5">
            <?php echo $msg; ?>
            <div class="card card-table border-0 shadow-sm">
                <div class="card-header bg-dark d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-list-alt"></i> รายการคำขอฝึกงานทั้งหมดจากนิสิต</span>
                    <span class="badge bg-danger rounded-pill px-3">ผู้ดูแล: เจ้าหน้าที่คณะ</span>
                </div>
                <div class="card-body p-0 bg-white">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped text-center align-middle">
                            <thead class="table-light border-bottom">
                                <tr>
                                    <th class="py-3">รหัสนิสิต</th>
                                    <th class="py-3 text-start ps-3">ชื่อสถานประกอบการ / ตำแหน่ง</th>
                                    <th class="py-3">ระยะเวลาที่ฝึก</th>
                                    <th class="py-3">สถานะปัจจุบัน</th>
                                    <th class="py-3" style="width: 250px;">อัปเดตสถานะเอกสาร (Staff)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($res && $res->num_rows > 0): ?>
                                    <?php while($r = $res->fetch_assoc()): ?>
                                        <tr>
                                            <td class="py-3 fw-bold text-danger" style="font-size:15px;">
                                                <?php echo $r['student_code'] ? $r['student_code'] : "ID:".$r['student_id']; ?>
                                            </td>
                                            
                                            <td class="py-3 text-start ps-3 fw-bold text-dark">
                                                <?php echo $r['company_name']; ?><br>
                                                <small class="text-muted fw-normal"><i class="fas fa-briefcase"></i> <?php echo $r['position']; ?></small>
                                            </td>
                                            
                                            <td class="py-3 text-muted small">
                                                <?php echo date('d/m/Y', strtotime($r['start_date'])); ?> <br>ถึง<br> <?php echo date('d/m/Y', strtotime($r['end_date'])); ?>
                                            </td>

                                            <td class="py-3">
                                                <span class="status-badge bs-<?php echo $r['status']; ?>">
                                                    <?php echo $r['Status_Name'] ? $r['Status_Name'] : "Status ".$r['status']; ?>
                                                </span>
                                            </td>

                                            <td class="py-3">
                                                <form method="POST" class="d-flex gap-2 justify-content-center px-2">
                                                    <input type="hidden" name="req_id" value="<?php echo $r['request_id']; ?>">
                                                    
                                                    <select name="status_val" class="form-select form-select-sm shadow-sm border-secondary fw-medium">
                                                        <option value="1" <?php if($r['status']==1) echo 'selected'; ?>>1: รับเรื่องเข้าระบบ</option>
                                                        <option value="2" <?php if($r['status']==2) echo 'selected'; ?>>2: อาจารย์ที่ปรึกษาอนุมัติ</option>
                                                        <option value="3" <?php if($r['status']==3) echo 'selected'; ?>>3: ออกใบส่งตัว</option>
                                                        <option value="4" <?php if($r['status']==4) echo 'selected'; ?>>4: ฝึกงานเสร็จสิ้น</option>
                                                        <option value="9" <?php if($r['status']==9) echo 'selected'; ?>>9: ยกเลิก</option>
                                                    </select>
                                                    
                                                    <button type="submit" class="btn btn-update btn-sm shadow-sm">บันทึก</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5" class="py-5 text-muted fw-bold">ยังไม่มีรายการคำร้องในระบบ</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>