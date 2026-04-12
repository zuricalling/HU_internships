<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ระบบอาจารย์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="dash-body p-0">
    <div class="dash-topbar d-flex justify-content-between" style="background:#1a2232;">
        <span class="fs-5 fw-bold text-white">ระบบพิจารณา (Teacher)</span>
        <span>Teacher | <a href="logout.php" class="text-danger fw-bold text-decoration-none">ออกจากระบบ</a></span>
    </div>
    <div class="container-fluid px-5 py-4">
        <div class="card card-table">
            <div class="card-header py-3" style="background:#343a40;">พิจารณาอนุมัติและนิเทศน์</div>
            <div class="card-body bg-white p-0">
                <table class="table table-bordered text-center m-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>นักศึกษา</th>
                            <th>สถานะ</th>
                            <th>อนุมัติ</th>
                            <th>นิเทศน์</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class="text-primary fw-bold"></td>
                                <td>
                                    <span class="status-badge bs-"> Status: </span></td>
                                <td>
                                    <form method="POST">
                                        <input type="hidden" name="app" >
                                        <button class="btn btn-primary btn-sm">อนุมัติ</button>
                                    </form></td>
                                <td>
                                    <form method="POST" class="d-flex w-75 mx-auto">
                                        <input type="hidden" name="ev" >
                                        <input type="text" name="ev_txt" class="form-control form-control-sm me-2" value="<?php echo $r['evaluation'];?>" required>
                                        <button class="btn btn-success btn-sm">เซฟ</button>
                                    </form></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>