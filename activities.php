<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข่าวสารและกิจกรรม - IS SWU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css?v=1">
    <style>
        .activity-hero {
            background: linear-gradient(135deg, rgba(196, 18, 45, 0.9), rgba(33, 37, 41, 0.9)), url('./img/berner.jpg') center/cover;
            padding: 80px 0;
            color: white;
            text-align: center;
            margin-top: 0; 
            margin-bottom: 40px;
        }

        /* =========================================
           CSS สำหรับ Slider การ์ดกิจกรรมและปุ่มเลื่อน
           ========================================= */
        .slider-wrapper {
            position: relative;
            padding: 0 10px; 
        }

        /* ปรับให้กริดเลื่อนแนวนอนได้ และซ่อน Scrollbar */
        #activity-grid {
            flex-wrap: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-behavior: smooth;
            -ms-overflow-style: none;  /* สำหรับ IE และ Edge */
            scrollbar-width: none;  /* สำหรับ Firefox */
            padding-bottom: 15px; 
        }

        #activity-grid::-webkit-scrollbar {
            display: none; /* ซ่อน Scrollbar ของ Chrome, Safari, Opera */
        }

        /* สไตล์ของปุ่มเลื่อน */
        .slide-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 45px;
            height: 45px;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            z-index: 10;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .slide-btn:hover {
            background-color: #f8f9fa;
            color: #c4122d;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }

        .slide-btn-prev { left: -20px; }
        .slide-btn-next { right: -20px; }

        @media (max-width: 768px) {
            .slide-btn { display: none; } /* ซ่อนปุ่มในมือถือให้ใช้นิ้วปัดแทน */
        }
    </style>
</head>
<body style="background-color: #f8f9fa;">

    <?php include 'navbar.php'; ?>

    <div class="activity-hero pb-5">
        <div class="container py-4">
            <h1 class="fw-bold mb-3"><i class="fas fa-camera-retro mb-2"></i><br>ข่าวสารกิจกรรม & IS Showcase</h1>
            <p class="fs-6 fw-light mb-0">ผลงานนวัตกรรม โครงการ และชีวิตนิสิตในรั้วมหาวิทยาลัยศรีนครินทรวิโรฒ</p>
        </div>
    </div>

    <div class="container py-5 mb-5">
        
        <div class="text-center filter-btn-group mb-5">
            <button class="btn active" data-filter="all">ทั้งหมด</button>
            <button class="btn" data-filter="showcase"><i class="fas fa-star"></i> Showcase ผลงาน</button>
            <button class="btn" data-filter="academic"><i class="fas fa-book-open"></i> วิชาการ/การเรียน</button>
            <button class="btn" data-filter="student"><i class="fas fa-users"></i> กิจกรรมนิสิต</button>
        </div>

        <div class="slider-wrapper position-relative">
            
            <button class="slide-btn slide-btn-prev" id="slidePrev">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="row g-4" id="activity-grid">
                
                <div class="col-lg-4 col-md-6 a-item showcase" style="min-width: 320px;">
                    <div class="activity-card-item h-100 d-flex flex-column bg-white shadow-sm border-0 rounded-4 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=800" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Showcase">
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
                            <button class="btn btn-outline-danger w-100 mt-auto py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#modalShowcase">
                                อ่านเพิ่มเติม <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 a-item academic" style="min-width: 320px;">
                    <div class="activity-card-item h-100 d-flex flex-column bg-white shadow-sm border-0 rounded-4 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Academic">
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
                            <button class="btn w-100 mt-auto py-2 fw-bold" style="border: 1px solid #0d6efd; color: #0d6efd;"
                                    onmouseover="this.style.backgroundColor='#0d6efd'; this.style.color='white';" 
                                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#0d6efd';" 
                                    data-bs-toggle="modal" data-bs-target="#modalAcademic">
                                อ่านเพิ่มเติม <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 a-item student" style="min-width: 320px;">
                    <div class="activity-card-item h-100 d-flex flex-column bg-white shadow-sm border-0 rounded-4 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800" class="img-fluid w-100 object-fit-cover" style="height: 220px;" alt="Camp">
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
                            <button class="btn w-100 mt-auto py-2 fw-bold" style="border: 1px solid #198754; color: #198754;"
                                    onmouseover="this.style.backgroundColor='#198754'; this.style.color='white';" 
                                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#198754';" 
                                    data-bs-toggle="modal" data-bs-target="#modalCamp">
                                อ่านเพิ่มเติม <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="slide-btn slide-btn-next" id="slideNext">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
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
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // =========================================
        // Script สำหรับ Filter คัดกรองข่าว
        // =========================================
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

        // =========================================
        // Script สำหรับปุ่มเลื่อนซ้าย-ขวา (Slider)
        // =========================================
        const gridContainer = document.getElementById('activity-grid');
        const btnPrev = document.getElementById('slidePrev');
        const btnNext = document.getElementById('slideNext');

        btnNext.addEventListener('click', () => {
            const firstCard = gridContainer.querySelector('.a-item:not([style*="display: none"])'); 
            if (firstCard) {
                const scrollAmount = firstCard.offsetWidth + 24; // บวกระยะห่าง (gap)
                gridContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        });

        btnPrev.addEventListener('click', () => {
            const firstCard = gridContainer.querySelector('.a-item:not([style*="display: none"])');
            if (firstCard) {
                const scrollAmount = firstCard.offsetWidth + 24;
                gridContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            }
        });
    </script>
</body>
</html>