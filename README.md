# 🎓 Internship Management System (Project)
ระบบจัดการการฝึกงานสำหรับนิสิต

---

## ภาพรวมโปรเจกต์ (Project Overview)
ระบบเว็บแอปพลิเคชันสำหรับอำนวยความสะดวกในการยื่นคำขอฝึกงาน การอนุมัติโดยอาจารย์ที่ปรึกษา และการบันทึกประวัตินิเทศงาน

### ฟีเจอร์หลัก:
* **นิสิต:** ยื่นคำขอฝึกงาน, เลือกบริษัท, ตรวจสอบสถานะการอนุมัติ
* **อาจารย์:** อนุมัติ/ไม่อนุมัติคำขอ, บันทึกการนิเทศงานและให้คะแนน
* **เจ้าหน้าที่:** จัดการข้อมูลบริษัท, ออกใบส่งตัว, ดูรายงานภาพรวม

---

## โครงสร้างโฟลเดอร์ (Project Structure)
เพื่อให้ระบบเป็นระเบียบ เราแบ่งโฟลเดอร์ตามสิทธิ์การใช้งานดังนี้:

* **`/student`**: หน้าจอและ Logic สำหรับนิสิต (ยื่นคำขอ, เช็คสถานะ)
* **`/staff`**: หน้าจอสำหรับอาจารย์และเจ้าหน้าที่ (อนุมัติคำขอ, บันทึกนิเทศ)
* **`/includes`**: ไฟล์ส่วนกลาง เช่น `db_connect.php` (ห้ามลบ/ย้าย)
* **`/database`**: ไฟล์ SQL สำหรับ Import และ Data Dictionary (PDF)
* **`/docs`**: เก็บเล่มรายงาน (.docx) และรูปภาพ Diagram ต่างๆ

---

## โครงสร้างฐานข้อมูล (Database Structure)
เราใช้ **MySQL** ในการจัดการข้อมูล โดยมีตารางหลักดังนี้:

* **Users:** `student`, `teacher`, `faculty_staff`
* **Master Data:** `company`, `status_master`, `course_showcase`
* **Transactions:** `internships_request`, `status_log`, `supervision_record`

> 📄 **รายละเอียดเชิงลึก:** สามารถดูได้ที่ไฟล์ [Data_Dictionary.pdf](./database/Data_Dictionary.pdf) ในโฟลเดอร์ `/database`

---

## สถานะระบบ (Status Codes)
เพื่อให้การเขียน PHP if-else ตรงกัน ให้ใช้รหัสสถานะตามนี้:
* `1` : **Pending** (รับเรื่อง/รออนุมัติ)
* `2` : **Approved** (อาจารย์อนุมัติ)
* `3` : **Issued** (ออกใบส่งตัวแล้ว)
* `4` : **Completed** (ฝึกงานเสร็จสิ้น)
* `9` : **Rejected** (ยกเลิก/ไม่ผ่าน)

---

## ข้อมูลการเข้าสู่ระบบ (Authentication)
ระบบใช้ **`process_login.php`** ในการแยกสิทธิ์ (Role-based Access Control):

| บทบาท | Username | สิทธิ์การเข้าถึง |
| :--- | :--- | :--- |
| **นิสิต** | รหัสนิสิต (student_code) | เข้าถึงโฟลเดอร์ `/student` |
| **อาจารย์** | ชื่อผู้ใช้ (username) | เข้าถึงโฟลเดอร์ `/staff` |

---

## วิธีการติดตั้งและรันโปรเจกต์ (Setup Guide)
1. **Database:** - เปิด XAMPP > MySQL Admin (phpMyAdmin) หรือ DBeaver
   - สร้าง Database ชื่อ `internships`
   - Import ไฟล์ `/database/internships.sql` เข้าไป
2. **Source Code:**
   - นำโฟลเดอร์โปรเจกต์ไปวางที่ `C:/xampp/htdocs/`
3. **Configuration:**
   - ไฟล์หลักคือ `includes/db_connect.php`
   - ตรวจสอบ Username/Password ของ MySQL ให้ตรงกับเครื่องตัวเอง
4. **Access:**
   - เปิดเบราว์เซอร์ไปที่ `http://localhost/hu_internships/login.php`
5. **การเขียนโค้ดเรียกใช้ DB:**
    * หากเขียนไฟล์ใน `/student` หรือ `/staff` ให้ใช้: 
      `require_once '../includes/db_connect.php';`

---


## การแบ่งงานในทีม (Team Collaboration)
* **Database & Backend Logic (DBA) :** [ไอโกะ ณัฏฐณิชา]
* **Frontend & UI Design:** [ฟีฟ่า ธฤษณัช, ใบเตย สุนัดดา]
* **System Logic & Integration:** [เนเน่ ชลธิชา, โต๋ ภูรินท์]
* **Flowchart/Docs:** [พลอย ณิชาภัทร]

---

** หมายเหตุ:** หากมีการแก้ไขโครงสร้างตาราง รบกวนแจ้ง DBA พื่ออัปเดตไฟล์ SQL กลางทุกครั้ง!

---

## บันทึกการแก้ไข (Change Log)
* **v1.1**: ปรับโครงสร้างโฟลเดอร์ตามคำแนะนำอาจารย์ (เพิ่ม /includes, /student, /staff)
* **v1.0**: เริ่มต้นโครงสร้างฐานข้อมูลและระบบบันทึกคำขอพื้นฐาน
