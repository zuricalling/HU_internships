<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ระบบอาจารย์ (Teacher Portal)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- ฝังโค้ด CSS ไว้ในหน้านี้ (ธีมสีกรมท่าของอาจารย์) -->
    <style>
        body { font-family: 'Kanit', sans-serif; background: #e9ecef; margin: 0; padding: 0; }
        .dash-topbar { background: #1a2232; color: white; padding: 15px 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000; }
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
    </style>
</head>
<body class="p-0">
    
    <!-- แถบด้านบน สีน้ำเงินเข้ม (Teacher) -->
    <div class="dash-topbar d-flex justify-content-between align-items-center">
        <span class="fs-5 fw-bold text-white"><i class="fas fa-chalkboard-teacher me-2"></i> ระบบจัดการฝึกงาน (Teacher Portal)</span>
        <span class="fs-6 fw-medium text-white"><?php echo $teacher_name; ?> | <a href="logout.php" class="text-white fw-bold text-decoration-underline ms-2"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></span>
    </div>

    <!-- พื้นที่เนื้อหา -->
    <div class="dash-body">
        <div class="container-fluid px-lg-5">
            <?php echo $msg; ?>
            <div class="card card-table border-0 shadow-sm">
                <div class="card-header bg-dark d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-list-alt"></i> รายการคำขอฝึกงานและการประเมินผล</span>
                    <span class="badge bg-primary rounded-pill px-3">ผู้ดูแล: อาจารย์ที่ปรึกษา</span>
                </div>
                <div class="card-body p-0 bg-white">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped text-center align-middle">
                            <thead class="table-light border-bottom">
                                <tr>
                                    <th class="py-3">รหัสนิสิต</th>
                                    <th class="py-3 text-start">ชื่อสถานประกอบการ / ตำแหน่ง</th>
                                    <th class="py-3">สถานะปัจจุบัน</th>
                                    <th class="py-3" style="width: 150px;">การพิจารณา (Req 5.2)</th>
                                    <th class="py-3" style="width: 180px;">นิเทศน์ (Req 5.3)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($res && $res->num_rows > 0): ?>
                                    <?php while($r = $res->fetch_assoc()): ?>
                                        <tr>
                                            <td class="py-3 fw-bold text-primary" style="font-size:15px;"><?php echo $r['student_code'] ? $r['student_code'] : "ID:".$r['student_id']; ?></td>
                                            
                                            <td class="py-3 text-start fw-bold text-dark">
                                                <?php echo $r['company_name']; ?><br>
                                                <small class="text-muted fw-normal"><i class="fas fa-briefcase"></i> <?php echo $r['position']; ?></small>
                                            </td>

                                            <td class="py-3">
                                                <span class="status-badge bs-<?php echo $r['status']; ?>">
                                                    <?php echo $r['Status_Name'] ? $r['Status_Name'] : "Status ".$r['status']; ?>
                                                </span>
                                            </td>

                                            <!-- คอลัมน์พิจารณาอนุมัติ -->
                                            <td class="py-3 px-3">
                                                <?php if($r['status'] == 1): ?>
                                                    <form method="POST">
                                                        <input type="hidden" name="approve_req_id" value="<?php echo $r['request_id']; ?>">
                                                        <button type="submit" name="approve_id" class="btn btn-primary btn-sm w-100 fw-bold shadow-sm"><i class="fas fa-check-circle"></i> อนุมัติ</button>
                                                    </form>
                                                <?php else: ?>
                                                    <button class="btn btn-secondary btn-sm w-100 fw-medium" disabled>อนุมัติแล้ว</button>
                                                <?php endif; ?>
                                            </td>

                                            <!-- คอลัมน์บันทึกผลการนิเทศ -->
                                            <td class="py-3 px-3">
                                                <?php if($r['status'] == 4): ?>
                                                    <button class="btn btn-success btn-sm w-100 fw-bold" disabled><i class="fas fa-check"></i> ประเมินแล้ว</button>
                                                <?php else: ?>
                                                    <!-- กดแล้วเปิด Modal Popup กึ่งกลางจอ -->
                                                    <button type="button" class="btn btn-success btn-sm w-100 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#modalSupervision_<?php echo $r['request_id']; ?>">
                                                        <i class="fas fa-edit"></i> บันทึกนิเทศ
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <!-- ============================================== -->
                                        <!-- Modal (Popup) บันทึกผลการนิเทศ (ซ่อนไว้สำหรับแต่ละแถว) -->
                                        <!-- ============================================== -->
                                        <div class="modal fade" id="modalSupervision_<?php echo $r['request_id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content shadow-lg border-0 rounded-3">
                                                    <div class="modal-header bg-success text-white">
                                                        <h5 class="modal-title fw-bold"><i class="fas fa-clipboard-check"></i> บันทึกผลการนิเทศ</h5>
                                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST">
                                                        <div class="modal-body text-start px-4 py-4">
                                                            <input type="hidden" name="eval_req_id" value="<?php echo $r['request_id']; ?>">
                                                            <input type="hidden" name="save_supervision" value="1">
                                                            
                                                            <div class="alert alert-light border mb-4">
                                                                <b>นิสิต:</b> <span class="text-primary"><?php echo $r['student_code']; ?></span><br>
                                                                <b>สถานที่:</b> <?php echo $r['company_name']; ?>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label fw-bold text-dark">วันที่ลงพื้นที่นิเทศ <span class="text-danger">*</span></label>
                                                                <input type="date" name="s_date" class="form-control" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label fw-bold text-dark">คะแนนประเมิน (เต็ม 100) <span class="text-danger">*</span></label>
                                                                <input type="number" step="0.01" name="score" class="form-control" placeholder="0.00" required>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label class="form-label fw-bold text-dark">หมายเหตุ / ข้อเสนอแนะ</label>
                                                                <textarea name="remarks" class="form-control" rows="3" placeholder="กรอกข้อเสนอแนะเพิ่มเติม..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer bg-light border-top-0">
                                                            <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">ยกเลิก</button>
                                                            <button type="submit" class="btn btn-success fw-bold"><i class="fas fa-save"></i> บันทึกลงฐานข้อมูล</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

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