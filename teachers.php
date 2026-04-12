<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คณาจารย์ประจำหลักสูตร - IS SWU</title>
    <!-- ไฟล์ CSS Bootstrap และ FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <style>
        .teacher-hero {
            background: linear-gradient(135deg, rgba(196, 18, 45, 0.9), rgba(33, 37, 41, 0.9)), url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=1920') center/cover;
            padding: 80px 0;
            color: white;
            text-align: center;
            margin-top: 0; /* <--- เปลี่ยนตรงนี้เป็น 0 (แบนเนอร์จะชิดขอบพอดี) */
            margin-bottom: 40px;
        }

        /* ตกแต่งการ์ดอาจารย์ ให้เมาส์เป็นรูปนิ้วมือเวลาชี้ */
        .teacher-card {
            background: white; border: 1px solid #eaeaea; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); 
            padding: 40px 20px; text-align: center; transition: all 0.3s ease; height: 100%; cursor: pointer;
        }
        .teacher-card:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(196,18,45,0.15); border-color: #c4122d;}
        
        .profile-img-wrapper {
            width: 140px; height: 140px; background-color: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; overflow: hidden; border: 3px solid white; box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .profile-img-wrapper img { width: 85%; height: 85%; object-fit: cover; border-radius: 50%; }
        
        .click-hint { font-size: 11px; color: #c4122d; margin-top: 15px; font-weight: bold; }

        /* ตกแต่งใน Modal (Popup) */
        .modal-profile-img { width: 100%; max-width: 200px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 20px; }
        .info-list { list-style: none; padding-left: 0; font-size: 14px; line-height: 2; color: #444; text-align: left; }
        .info-list i { color: #c4122d; width: 25px; text-align: center; }
    </style>
</head>
<body class="bg-light">

    <?php include 'navbar.php'; ?>

    <div class="teacher-hero pb-5">
        <div class="container py-4">
            <h1 class="fw-bold mb-3"><i class="fas fa-chalkboard-teacher mb-2"></i><br>คณาจารย์ประจำหลักสูตร</h1>
            <p class="fs-6 fw-light mb-0">คลิกที่รูปอาจารย์เพื่อดูประวัติ วุฒิการศึกษา และข้อมูลการติดต่อ</p>
        </div>
    </div>

    <div class="container py-5 mb-5" style="max-width: 1100px; min-height: 50vh;">
        <div class="row g-4 justify-content-center">
            
            <!-- ================ อาจารย์ 1 ================ -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- กดปุ๊บ เปิด Modal Teacher 1 -->
                <div class="teacher-card" data-bs-toggle="modal" data-bs-target="#modalTeacher1">
                    <div class="profile-img-wrapper"><img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png"></div>
                    <h6 class="fw-bold fs-6 text-dark mb-1">ผศ. ดร. ทดสอบ ระบบ</h6>
                    <p class="text-danger fw-bold mb-2" style="font-size: 12px;">หัวหน้าสาขาวิชา</p>
                    <p class="text-muted small" style="line-height: 1.5; height: 40px;">ความเชี่ยวชาญ: Data Science</p>
                    <div class="click-hint"><i class="fas fa-mouse-pointer"></i> คลิกดูข้อมูลติดต่อ</div>
                </div>
            </div>

            <!-- ================ อาจารย์ 2 ================ -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="teacher-card" data-bs-toggle="modal" data-bs-target="#modalTeacher2">
                    <div class="profile-img-wrapper"><img src="https://cdn-icons-png.flaticon.com/512/4140/4140040.png"></div>
                    <h6 class="fw-bold fs-6 text-dark mb-1">อ. ดร. ใจดี มีธรรม</h6>
                    <p class="text-secondary fw-bold mb-2" style="font-size: 12px;">อาจารย์ประจำหลักสูตร</p>
                    <p class="text-muted small" style="line-height: 1.5; height: 40px;">ความเชี่ยวชาญ: UI/UX Design</p>
                    <div class="click-hint"><i class="fas fa-mouse-pointer"></i> คลิกดูข้อมูลติดต่อ</div>
                </div>
            </div>

            <!-- ================ อาจารย์ 3 ================ -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="teacher-card" data-bs-toggle="modal" data-bs-target="#modalTeacher3">
                    <div class="profile-img-wrapper"><img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png"></div>
                    <h6 class="fw-bold fs-6 text-dark mb-1">อ. สมชาย ขยันเรียน</h6>
                    <p class="text-secondary fw-bold mb-2" style="font-size: 12px;">อาจารย์ที่ปรึกษา ปี 4</p>
                    <p class="text-muted small" style="line-height: 1.5; height: 40px;">ความเชี่ยวชาญ: Information Management</p>
                    <div class="click-hint"><i class="fas fa-mouse-pointer"></i> คลิกดูข้อมูลติดต่อ</div>
                </div>
            </div>
            
            <!-- ================ อาจารย์ 4 ================ -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="teacher-card" data-bs-toggle="modal" data-bs-target="#modalTeacher4">
                    <div class="profile-img-wrapper"><img src="https://cdn-icons-png.flaticon.com/512/4140/4140039.png"></div>
                    <h6 class="fw-bold fs-6 text-dark mb-1">รศ. ดร. ยอดเยี่ยม มาก</h6>
                    <p class="text-secondary fw-bold mb-2" style="font-size: 12px;">อาจารย์ประจำหลักสูตร</p>
                    <p class="text-muted small" style="line-height: 1.5; height: 40px;">ความเชี่ยวชาญ: Artificial Intelligence</p>
                    <div class="click-hint"><i class="fas fa-mouse-pointer"></i> คลิกดูข้อมูลติดต่อ</div>
                </div>
            </div>

        </div>
    </div>


    <!-- ============================================== -->
    <!-- กล่อง MODAL POPUP ข้อมูลอาจารย์ (ซ่อนไว้) -->
    <!-- ============================================== -->

    <!-- Modal อาจารย์ 1 -->
    <div class="modal fade" id="modalTeacher1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 12px; overflow: hidden;">
                <!-- หัวสีแดง มศว เหมือนหน้าข่าว -->
                <div class="modal-header text-white" style="background-color: #c4122d;">
                    <h5 class="modal-title fw-bold fs-6"><i class="fas fa-info-circle"></i> ข้อมูลคณาจารย์</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-4 mb-md-0">
                            <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png" class="modal-profile-img bg-light p-3">
                            <h5 class="fw-bold text-dark mt-2 mb-0">ผศ. ดร. ทดสอบ ระบบ</h5>
                            <p class="text-danger fw-bold small">หัวหน้าสาขาวิชา</p>
                        </div>
                        <div class="col-md-7 border-start ps-md-4">
                            <ul class="info-list mb-0">
                                <li><i class="fas fa-graduation-cap"></i> <b>วุฒิการศึกษา:</b> Ph.D. in Data Science, SWU</li>
                                <li><i class="fas fa-brain"></i> <b>ความเชี่ยวชาญ:</b> Data Science, Database Management</li>
                                <li><i class="fas fa-envelope"></i> <b>อีเมล:</b> test@swu.ac.th</li>
                                <li><i class="fas fa-phone-alt"></i> <b>เบอร์ติดต่อ:</b> 02-649-5000 ต่อ 12345</li>
                                <li><i class="fas fa-map-marker-alt"></i> <b>ที่ทำงาน:</b> คณะมนุษยศาสตร์ มศว ประสานมิตร</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal อาจารย์ 2 -->
    <div class="modal fade" id="modalTeacher2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 12px; overflow: hidden;">
                <div class="modal-header text-white" style="background-color: #c4122d;">
                    <h5 class="modal-title fw-bold fs-6"><i class="fas fa-info-circle"></i> ข้อมูลคณาจารย์</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-4 mb-md-0">
                            <img src="https://cdn-icons-png.flaticon.com/512/4140/4140040.png" class="modal-profile-img bg-light p-3">
                            <h5 class="fw-bold text-dark mt-2 mb-0">อ. ดร. ใจดี มีธรรม</h5>
                            <p class="text-secondary fw-bold small">อาจารย์ประจำหลักสูตร</p>
                        </div>
                        <div class="col-md-7 border-start ps-md-4">
                            <ul class="info-list mb-0">
                                <li><i class="fas fa-graduation-cap"></i> <b>วุฒิการศึกษา:</b> Ph.D. in Information Systems</li>
                                <li><i class="fas fa-brain"></i> <b>ความเชี่ยวชาญ:</b> UI/UX Design, Information Retrieval</li>
                                <li><i class="fas fa-envelope"></i> <b>อีเมล:</b> jaidee@swu.ac.th</li>
                                <li><i class="fas fa-phone-alt"></i> <b>เบอร์ติดต่อ:</b> 02-649-5000 ต่อ 12346</li>
                                <li><i class="fas fa-map-marker-alt"></i> <b>ที่ทำงาน:</b> คณะมนุษยศาสตร์ มศว ประสานมิตร</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- (คุณสามารถก็อปปี้ Modal แล้วเปลี่ยนเป็นของอาจารย์คนที่ 3 และ 4 โดยแก้แค่ ID เป็น modalTeacher3, modalTeacher4 ให้ตรงกับการ์ดได้เลยครับ) -->

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>