```markdown
# Frontend Day 1: PHP Basics 🐘

Repository นี้รวบรวมไฟล์แบบฝึกหัด (Exercises) สำหรับการเริ่มต้นเรียนรู้และทบทวนการเขียนโปรแกรมด้วยภาษา **PHP** เบื้องต้น โดยเจาะลึกตั้งแต่ไวยากรณ์พื้นฐาน (Syntax) การใช้งานตัวแปร โครงสร้างควบคุม ไปจนถึงการเขียนสคริปต์เพื่อประมวลผลข้อมูล

## 📂 โครงสร้างของโปรเจกต์

ใน Repository นี้ประกอบไปด้วยไฟล์แบบฝึกหัดจำนวน 13 ไฟล์ ซึ่งถูกจัดเรียงตามลำดับความซับซ้อนของเนื้อหา ดังนี้:

- `exercise01.php` - แบบฝึกหัดที่ 1
- `exercise02.php` - แบบฝึกหัดที่ 2
- `exercise03.php` - แบบฝึกหัดที่ 3
- `exercise04.php` - แบบฝึกหัดที่ 4
- `exercise05.php` - แบบฝึกหัดที่ 5
- `exercise06.php` - แบบฝึกหัดที่ 6
- `exercise07.php` - แบบฝึกหัดที่ 7
- `exercise08.php` - แบบฝึกหัดที่ 8
- `exercise09.php` - แบบฝึกหัดที่ 9
- `exercise10.php` - แบบฝึกหัดที่ 10
- `exercise11.php` - แบบฝึกหัดที่ 11
- `exercise12.php` - แบบฝึกหัดที่ 12
- `exercise13.php` - แบบฝึกหัดที่ 13

## 🛠️ เครื่องมือที่ใช้ (Tech Stack)

- **PHP**: ภาษาหลักที่ใช้ในการเขียนสคริปต์ฝั่งเซิร์ฟเวอร์ (Server-side scripting)

## 🚀 วิธีการรันโปรเจกต์

เนื่องจาก PHP เป็นภาษาฝั่งเซิร์ฟเวอร์ คุณจำเป็นต้องมี Web Server จำลองในเครื่อง (เช่น XAMPP, MAMP หรือใช้ Built-in Server ของ PHP) เพื่อรันไฟล์เหล่านี้:

1. **Clone Repository** ลงมาที่เครื่องคอมพิวเตอร์ของคุณ:
   ```bash
   git clone [https://github.com/gatunyus/Frontend_Day1_PHP.git](https://github.com/gatunyus/Frontend_Day1_PHP.git)
   ```
**การเปิดรันไฟล์ด้วย PHP Built-in Server (แนะนำ):**
   - เปิด Terminal หรือ Command Prompt แล้วเข้าไปที่โฟลเดอร์ของโปรเจกต์
   - รันคำสั่งต่อไปนี้เพื่อจำลองเซิร์ฟเวอร์:
     ```bash
     php -S localhost:8000
     ```
   - เปิด Web Browser แล้วเข้าไปที่ `http://localhost:8000/exercise01.php` (เปลี่ยนชื่อไฟล์ตามแบบฝึกหัดที่ต้องการดูผลลัพธ์)

**การเปิดรันไฟล์ด้วย XAMPP / MAMP:**
   - ย้ายโฟลเดอร์โปรเจกต์ไปไว้ใน `htdocs` (สำหรับ XAMPP) หรือ `htdocs` / `www` (สำหรับ MAMP)
   - เปิดโปรแกรม XAMPP/MAMP แล้ว Start Service "Apache"
   - เปิด Web Browser เข้าไปที่ `http://localhost/Frontend_Day1_PHP/exercise01.php`

## 📝 เกี่ยวกับโปรเจกต์

โปรเจกต์นี้จัดทำขึ้นเพื่อใช้ในการเรียนการสอนและฝึกฝนทักษะการเขียนโค้ด PHP ขั้นพื้นฐาน ซึ่งเป็นรากฐานสำคัญสำหรับการพัฒนาเว็บแอปพลิเคชัน (Web Application) และการจัดการข้อมูลร่วมกับฐานข้อมูลในอนาคต
```

**วิธีนำไปใช้:**
1. ไปที่ Repository `Frontend_Day1_PHP` ของคุณใน GitHub
2. คลิกปุ่ม **Add file** > **Create new file**
3. ตั้งชื่อไฟล์ว่า `README.md`
4. วางโค้ดด้านบนลงไป
5. กดปุ่ม **Commit changes...** ได้เลยครับ!
