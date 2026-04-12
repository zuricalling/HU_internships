<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Staff Login - เจ้าหน้าที่คณะ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Kanit', sans-serif; }
        .clean-login-bg { background-color: #f6f6f6; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .clean-login-card { background: white; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); width: 100%; max-width: 400px; text-align: center; }
        
        /* สไตล์ไอคอนด้านบน */
        .login-icon-circle { width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: white; margin: 0 auto 15px auto; box-shadow: 0 4px 10px rgba(227, 0, 15, 0.3); background-color: #e3000f; }
        
        /* สไตล์ช่องกรอกรหัส */
        .custom-input-group { border: 1px solid #ced4da; border-radius: 6px; overflow: hidden; margin-bottom: 20px; display: flex; align-items: center; }
        .custom-input-group .input-group-text { background-color: transparent; border: none; color: #e3000f; padding-left: 15px; }
        .custom-input-group .form-control { border: none; font-size: 14.5px; padding: 10px; box-shadow: none; }
        .custom-input-group .form-control:focus { outline: none; }
        
        .login-label { text-align: left; display: block; font-size: 13px; font-weight: 700; margin-bottom: 5px; color: #333; }
        .btn-staff { background-color: #e3000f; color: white; transition: 0.3s; }
        .btn-staff:hover { background-color: #ba000c; color: white; }
    </style>
</head>
<body class="clean-login-bg">

    <div class="clean-login-card">
        
        <div class="login-icon-circle">
            <i class="fas fa-file-signature"></i>
        </div>
        
        <h3 class="fw-bold" style="color: #e3000f;">Staff Login</h3>
        <p class="text-muted small mb-4">เข้าสู่ระบบสำหรับ "เจ้าหน้าที่คณะ"</p>
        
        <form method="POST">
            <label class="login-label">Username</label>
            <div class="input-group custom-input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="u" class="form-control" placeholder="กรอก admin" required>
            </div>
            
            <label class="login-label">Password</label>
            <div class="input-group custom-input-group mb-1">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" name="p" class="form-control" placeholder="กรอก 1234" required>
            </div>
            
            <div class="text-start mb-4" style="font-size: 11.5px; color: #e3000f;">
                <i class="fas fa-info-circle"></i> Mockup: User: <b>admin</b> | Pass: <b>1234</b>
            </div>
            
            <button class="btn btn-staff w-100 rounded-5 py-2 mt-1 fw-bold">เข้าสู่ระบบ</button>
        </form>
        
        <div class="mt-4">
            <a href="portal.php" class="text-muted small fw-bold text-decoration-none"><i class="fas fa-arrow-left"></i> กลับไปหน้าเลือกระบบ</a>
        </div>
    </div>

</body>
</html>