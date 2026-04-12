<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ระบบเจ้าหน้าที่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="dash-body p-0">
    <div class="dash-topbar d-flex justify-content-between" style="background:#c4122d;">
        <span class="fs-5 fw-bold text-white">ระบบจัดการ (Staff)</span>
        <span>Admin | <a href="logout.php" class="text-white fw-bold text-decoration-none">ออกจากระบบ</a></span>
    </div>
    <div class="container-fluid px-5 py-4">
        <div class="card card-form">
            <div class="card-header py-3">คำขอฝึกงานทั้งหมด</div>
        <div class="card-body bg-white p-0">
            <table class="table table-hover text-center m-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>นักศึกษา</th>
                        <th>บริษัท</th>
                        <th>สถานะ</th>
                        <th>อัปเดต</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="text-danger fw-bold"></td>
                            <td>
                                <span class="status-badge bs-"> </span></td>
                            <td>
                                <form method="POST" class="d-flex justify-content-center gap-2">
                                    <input type="hidden" name="id" >
                                    <select name="s" class="form-select form-select-sm" style="width:130px;">
                                        <option value="1">1: รับเรื่อง</option>
                                        <option value="3">3: ออกใบส่งตัว</option>
                                        <option value="9">9: ยกเลิก</option>
                                    </select>
                                    <button class="btn btn-dark btn-sm">บันทึก</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>