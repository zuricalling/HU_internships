<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข่าวสารและกิจกรรม - IS SWU</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #f8f9fa;">

    <!-- ดึง Navbar แบบ PHP -->
    <?php include 'navbar.php'; ?>

    <!-- แถบแบนเนอร์สีแดง -->
    <div class="activity-hero">
        <div class="container">
            <h2 class="fw-bold mb-2"><i class="fas fa-camera-retro"></i> ข่าวสารกิจกรรม & IS Showcase</h2>
            <p class="mb-0 fs-6 fw-light">ผลงานนวัตกรรม โครงการ และชีวิตนิสิตในรั้วมหาวิทยาลัยศรีนครินทรวิโรฒ</p>
        </div>
    </div>

    <!-- เนื้อหาหลัก -->
    <div class="container py-5 mb-5">
        
        <!-- แถบปุ่มจัดหมวดหมู่ -->
        <div class="text-center filter-btn-group mb-5">
            <button class="btn active" data-filter="all">ทั้งหมด</button>
            <button class="btn" data-filter="showcase"><i class="fas fa-star"></i> Showcase ผลงาน</button>
            <button class="btn" data-filter="academic"><i class="fas fa-book-open"></i> วิชาการ/การเรียน</button>
            <button class="btn" data-filter="student"><i class="fas fa-users"></i> กิจกรรมนิสิต</button>
        </div>

        <!-- รายการการ์ดข่าวสาร -->
        <div class="row g-4" id="activity-grid">
            
            <!-- ================= การ์ดที่ 1: Showcase (สีแดง) ================= -->
            <div class="col-lg-4 col-md-6 a-item showcase">
                <div class="activity-card-item h-100 d-flex flex-column bg-white shadow-sm border-0 rounded-4 overflow-hidden position-relative">
                    
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=800" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Showcase">
                    
                    <!-- ป้ายวันที่ -->
                    <div class="activity-date-box" style="top: 15px; left: 15px;">
                        <span class="day">15</span>
                        <span class="month">ต.ค. 66</span>
                    </div>

                    <div class="card-body p-4 d-flex flex-column h-100">
                        <div class="mb-3">
                            <span class="badge bg-danger px-3 py-2 fw-bold rounded-1" style="font-size: 13px;">Showcase ผลงาน</span>
                        </div>
                        <h5 class="fw-bold text-dark mt-1">นิทรรศการ IS Senior Project 2023</h5>
                        <p class="small text-muted mt-2 mb-4" style="line-height: 1.6;">
                            นิทรรศการนำเสนอผลงานปริญญานิพนธ์ของนิสิตชั้นปีที่ 4 หลักสูตรสารสนเทศศึกษา โชว์นวัตกรรมด้านการจัดการข้อมูล...
                        </p>
                        
                        <!-- เปลี่ยนเป็นปุ่มเปิด Modal (สีแดง) ขอบแดง -->
                        <button class="btn btn-outline-danger w-100 mt-auto py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#modalShowcase">
                            อ่านเพิ่มเติม <i class="fas fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- ================= การ์ดที่ 2: Academic (สีน้ำเงิน) ================= -->
            <div class="col-lg-4 col-md-6 a-item academic">
                <div class="activity-card-item h-100 d-flex flex-column bg-white shadow-sm border-0 rounded-4 overflow-hidden position-relative">
                    
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Academic">
                    
                    <!-- ป้ายวันที่ -->
                    <div class="activity-date-box" style="top: 15px; left: 15px;">
                        <span class="day">05</span>
                        <span class="month">พ.ย. 66</span>
                    </div>

                    <div class="card-body p-4 d-flex flex-column h-100">
                        <div class="mb-3">
                            <span class="badge px-3 py-2 fw-bold rounded-1" style="background-color: #0d6efd; font-size: 13px;">วิชาการ</span>
                        </div>
                        <h5 class="fw-bold text-dark mt-1">สัมมนาหัวข้อ Data Trends 2024</h5>
                        <p class="small text-muted mt-2 mb-4" style="line-height: 1.6;">
                            บรรยายพิเศษโดยวิทยากรองค์กรชั้นนำ เพื่อเตรียมความพร้อมนิสิตก่อนออกปฏิบัติงานสหกิจศึกษา...
                        </p>
                        
                        <!-- เปลี่ยนเป็นปุ่มเปิด Modal (สีน้ำเงิน) ขอบน้ำเงิน -->
                        <button class="btn w-100 mt-auto py-2 fw-bold" style="border: 1px solid #0d6efd; color: #0d6efd;" onmouseover="this.style.backgroundColor='#0d6efd'; this.style.color='white';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#0d6efd';" data-bs-toggle="modal" data-bs-target="#modalAcademic">
                            อ่านเพิ่มเติม <i class="fas fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- ================= การ์ดที่ 3: Student Activity (สีเขียว) ================= -->
            <div class="col-lg-4 col-md-6 a-item student">
                <div class="activity-card-item h-100 d-flex flex-column bg-white shadow-sm border-0 rounded-4 overflow-hidden position-relative">
                    
                    <!-- แก้ไขรูปภาพแล้ว -->
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Camp">
                    
                    <!-- ป้ายวันที่ -->
                    <div class="activity-date-box" style="top: 15px; left: 15px;">
                        <span class="day">20</span>
                        <span class="month">ก.ย. 66</span>
                    </div>

                    <div class="card-body p-4 d-flex flex-column h-100">
                        <div class="mb-3">
                            <span class="badge px-3 py-2 fw-bold rounded-1" style="background-color: #198754; font-size: 13px;">กิจกรรมนิสิต</span>
                        </div>
                        <h5 class="fw-bold text-dark mt-1">ค่ายพัฒนาศักยภาพ IS Camp #10</h5>
                        <p class="small text-muted mt-2 mb-4" style="line-height: 1.6;">
                            กิจกรรมทัศนศึกษาและสานสัมพันธ์รุ่นพี่รุ่นน้องชั้นปีที่ 1-4 ณ จังหวัดระยอง เพื่อส่งเสริมทักษะการทำงานเป็นทีม...
                        </p>
                        
                        <!-- เปลี่ยนเป็นปุ่มเปิด Modal (สีเขียว) ขอบเขียว -->
                        <button class="btn w-100 mt-auto py-2 fw-bold" style="border: 1px solid #198754; color: #198754;" onmouseover="this.style.backgroundColor='#198754'; this.style.color='white';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#198754';" data-bs-toggle="modal" data-bs-target="#modalCamp">
                            อ่านเพิ่มเติม <i class="fas fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- ================= กลางจอ (MODAL POPUP ทั้ง 3 อัน) ================= -->

    <!-- Modal 1 : Showcase -->
    <div class="modal fade" id="modalShowcase" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header text-white" style="background-color: #c4122d;">
                    <h5 class="modal-title fw-bold fs-6">นิทรรศการ IS Senior Project 2023</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=1200" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
                    <div class="p-4">
                        <h6 class="fw-bold mb-3" style="color: #c4122d;">รายละเอียดกิจกรรม</h6>
                        <p class="text-muted" style="text-align: justify; font-size: 14px; line-height: 1.7;">
                            นิทรรศการนำเสนอผลงานปริญญานิพนธ์ประจำปีการศึกษา 2566 ของนิสิตชั้นปีที่ 4 หลักสูตรสารสนเทศศึกษา โดยมีผลงานด้านฐานข้อมูล นวัตกรรมแอปพลิเคชัน และการวิเคราะห์สารสนเทศ มากกว่า 30 โครงงาน จัดขึ้น ณ ลานอเนกประสงค์ มศว ประสานมิตร
                        </p>
                        <p class="mb-0" style="font-size: 14px;"><strong>ผู้รับผิดชอบ:</strong> คณะกรรมการนิสิตชั้นปีที่ 4</p>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-secondary btn-sm px-4 fw-bold" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 : Academic (วิชาการ) -->
    <div class="modal fade" id="modalAcademic" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header text-white" style="background-color: #c4122d;">
                    <h5 class="modal-title fw-bold fs-6">สัมมนาหัวข้อ Data Trends 2024</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1200" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
                    <div class="p-4">
                        <h6 class="fw-bold mb-3" style="color: #c4122d;">รายละเอียดกิจกรรม</h6>
                        <p class="text-muted" style="text-align: justify; font-size: 14px; line-height: 1.7;">
                            บรรยายพิเศษโดยวิทยากรองค์กรชั้นนำ เพื่อเตรียมความพร้อมนิสิตก่อนออกปฏิบัติงานสหกิจศึกษา ให้นิสิตได้ตามทันเทรนด์เทคโนโลยีสารสนเทศที่มีการเปลี่ยนแปลงอย่างรวดเร็ว
                        </p>
                        <p class="mb-0" style="font-size: 14px;"><strong>ผู้รับผิดชอบ:</strong> ฝ่ายวิชาการหลักสูตรสารสนเทศศึกษา</p>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-secondary btn-sm px-4 fw-bold" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 : Camp (กิจกรรมนิสิต) -->
    <div class="modal fade" id="modalCamp" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header text-white" style="background-color: #c4122d;">
                    <h5 class="modal-title fw-bold fs-6">ค่ายพัฒนาศักยภาพ IS Camp #10</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
                    <div class="p-4">
                        <h6 class="fw-bold mb-3" style="color: #c4122d;">รายละเอียดกิจกรรม</h6>
                        <p class="text-muted" style="text-align: justify; font-size: 14px; line-height: 1.7;">
                            กิจกรรมทัศนศึกษาและสานสัมพันธ์รุ่นพี่รุ่นน้องชั้นปีที่ 1-4 ณ จังหวัดระยอง เพื่อส่งเสริมทักษะการทำงานเป็นทีม การเป็นผู้นำ และเสริมสร้างความผูกพันภายในสาขาวิชา
                        </p>
                        <p class="mb-0" style="font-size: 14px;"><strong>ผู้รับผิดชอบ:</strong> สโมสรนิสิตหลักสูตรสารสนเทศศึกษา</p>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-secondary btn-sm px-4 fw-bold" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ดึง Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script สำหรับทำระบบปุ่ม Filter คัดกรองข่าว -->
    <script>
        const filterBtns = document.querySelectorAll('.filter-btn-group .btn');
        const activityItems = document.querySelectorAll('.a-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                activityItems.forEach(item => {
                    item.style.display = (filterValue === 'all' || item.classList.contains(filterValue)) ? 'block' : 'none';
                });
            });
        });
    </script>
</body>
</html>