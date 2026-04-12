<!DOCTYPE html><html lang="th"><head><meta charset="UTF-8"><title>ระบบนิสิต</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><link rel="stylesheet" href="style.css"></head>
<body class="dash-body p-0">
    <div class="dash-topbar d-flex justify-content-between align-items-center">
        <span class="fs-5 fw-bold"><i class="fas fa-user-graduate"></i> ระบบฝึกงาน (นิสิต)</span><span><?php echo $sid;?> | <a href="logout.php" class="text-danger fw-bold text-decoration-none">ออกจากระบบ</a></span>
    </div>
    <div class="container-fluid px-4 py-5"><div class="row g-4">
        <div class="col-lg-4"><div class="card card-form"><div class="card-header py-3 px-4"><i class="fas fa-edit"></i> ฟอร์มขอฝึกงาน</div><div class="card-body bg-white p-4"><?php echo $msg;?><form method="POST"><label class="small fw-bold">บริษัท</label><input type="text" name="c" class="form-control mb-3" required><label class="small fw-bold">ตำแหน่ง</label><input type="text" name="p" class="form-control mb-3"><label class="small fw-bold">เริ่ม-สิ้นสุด</label><input type="date" name="s" class="form-control mb-2"><input type="date" name="e" class="form-control mb-4"><button class="btn btn-outline-dark w-100 fw-bold">บันทึกข้อมูล</button></form></div></div></div>
        <div class="col-lg-8"><div class="card card-table"><div class="card-header py-3 px-4"><i class="fas fa-list"></i> ประวัติของคุณ</div><div class="card-body bg-white p-0"><table class="table table-hover text-center m-0 align-middle"><thead class="table-dark"><tr><th>วันส่ง</th><th>บริษัท</th><th>สถานะ</th></tr></thead><tbody>
        <?php while($r=$res->fetch_assoc()): ?><tr><td><?php echo date('d M Y',strtotime($r['created_at']));?></td><td><?php echo $r['company_name'];?></td><td><span class="status-badge bs-<?php echo $r['status'];?>">Status <?php echo $r['status'];?></span></td></tr><?php endwhile;?>
        </tbody></table></div></div></div>
    </div></div>
</body></html>