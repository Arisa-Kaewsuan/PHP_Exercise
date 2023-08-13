# [PHP &nbsp; - &nbsp;Professional &nbsp;Home &nbsp;Page &nbsp; <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/>](https://www.w3schools.com/php/php_oop_classes_abstract.asp)
   -  &nbsp; PHP คืออะไร  ใช้ทำอะไร ?

           PHP คือ ภาษาเขียนโปรแกรมที่ใช้ทำ website ฝั่ง back-end
      
   -  &nbsp; PHP ใช้ยังไง ?

           ในการเขียนโปรแกรมไม่ว่าจะภาษาไหน จะเขียนได้ต้องมี environment 2 อย่าง คือ
            1. Editor : ที่ใช้เขียน ใช้ Debug ดู error แก้ไข้โค้ด รันดูผลลัพธ์ผ่าน terminal
            2. compiler/runtime ของภาษานั้นๆ
      
                 แต่ในบางภาษาอย่าง PHP จะมี tool ที่ช่วยให้การพัฒนาโปรแกรมง่ายขึ้น PHP เป็นภาษาใช้พัฒนาเว็บฝั่ง Server
           ดังนั้น จึงมีโปรแกรมที่เรียกว่า web server จำลอง web server ให้เราทำให้เราเขียนโค้ด รัน แล้วดูผลลัพธ์ได้ว่าหน้าเว็บ
           มันจะเปลี่ยนไปยังไง ตัวอย่างโปรแกรม web server เช่น  xampp , wampServer , LampServer

                 xampp เป็นโปรแกรมที่ประกอบไปด้วย โปรแกรมย่อย 4 ตัว คือ
            1.  Apache : โปรแกรมจำลอง web server
            2.  MySQL : โปรแกรมฐานข้อมูล
            3.  phpMyAdmin : โปรแกรม/เว็บจัดการฐานข้อมูล MySQL
            4.  PHP : โปรแกรมแปลภาษา PHP 
      
            ดังนั้น ถ้าเราโหลด xampp มาใช้ เราก็ไม่ต้องโหลด PHP เพิ่ม เพราะมันมีมาให้แล้ว เราแค่มี editor ก็เริ่มเขียนโปรแกรม
            ภาษา PHP ได้เลย editor ที่ใช้เขียน และ debug PHP เช่น window - vscode , mac - sublimetext

            การรันดูผลลัพธ์โปรแกรมภาษา PHP ทำได้ 2 แบบ ( ขึ้นอยู่กับ syntax ที่เขียนด้วย เช่น <br/> ต้องรันผ่านเว็บ
            แต่ถ้าใช้ "\n" ต้องรันผ่าน terminal ถึงจะเห็นว่ามัน เว้นวรรคให้ )
            1.  รันดูผลลัพธ์ผ่าน terminal ของ editor ที่ใช้ : ให้พิมพ์คำสั่ง  php file_name.php
            2.  รันดูผลลัพธ์บน web server : ทำได้ 2 วิธี
                  >>  วิธีแรก :  เปิด xampp รัน Apache กับ MySQL  >> กดรันโค้ด
                  >>  วิธีที่สอง : สำหรับคนใช้ vscode สามารถ install extension ชื่อ PHP Server เวลาจะรันดูผลลัพธ์โค้ด PHP
                               ไม่ต้องรัน xampp (แต่ต้องมีนะ) >> right click แล้วเลือก PHP Server
      
<br/><br/><br/>

## [PHP &nbsp;Syntax 🔗](https://www.phptutorial.net/)
### 1.  &nbsp; PHP BASIC &nbsp;🧠
   - &nbsp; input &nbsp;:&nbsp; ```echo "Hello World !```
   - &nbsp; output &nbsp;:&nbsp; ```echo "Hello World !```
   - &nbsp; condition &nbsp;:&nbsp; ```if...elseif...else``` &nbsp; ```switch (case)``` 
   - &nbsp; loop &nbsp;:&nbsp; ```while``` &nbsp; ```do-while``` &nbsp; ```for ($x = 0; $x <= 10; $x++)``` &nbsp; ```foreach ($colors as $value)``` &nbsp; ```break;``` &nbsp; ```continue;```
   - &nbsp; Array &nbsp;:&nbsp; ```CREATE : $cars = array("Volvo", "BMW", "Toyota");  OR  array();``` &nbsp; ```ACCESS : $cars[0]```
   - &nbsp; String &nbsp;:&nbsp; ```strlen()``` &nbsp; ```str_replace()``` &nbsp;  . . .
   - &nbsp; File &nbsp;:&nbsp; ```echo readfile("file.txt");``` &nbsp; ```$myfile = fopen("webdictionary.txt", "r"); ต้อง fclose($myfile);ด้วย``` &nbsp;
   - &nbsp; [Cookies & Session](https://www.borntodev.com/2020/07/10/cookie-vs-session/) &nbsp;:&nbsp; ```setcookie(name, value, expire, path, domain, secure, httponly);``` &nbsp; ```session_start();```

<br/>

### 2.  &nbsp; PHP OOP &nbsp;🧠
   - &nbsp; function &nbsp;:&nbsp; ```function helloWorld() {...}```
     
   - &nbsp; class &nbsp;:&nbsp; วิธีเรียกใช้คลาส คือ new class ดังตัวอย่าง ```$strawberry = new Strawberry("Strawberry", "red");``` &nbsp; วิธีใช้ method ในคลาสใช้เครื่องหมาย -> ดังตัวอย่าง ```$strawberry->message();```  &nbsp; วิธีสร้างคลาส และกำหนด condtructor ดังตัวอย่างข้างล่าง
     
        ```
        class Fruit
        {
           public $name;
           function __construct($name)
           {
                 $this->name = $name;
           }
        }
        ```
        
   - &nbsp; inheritance &nbsp;:&nbsp; ```class Strawberry extends Fruit {...}```

<br/>

### 3.  &nbsp; PHP DATABASE &nbsp;🧠

               มี 2 API/driver ให้ใช้  คือ PDO (ใช้ได้กับ 12 ฐานข้อมูล) กับ MySQLi (ใช้ได้แค่กับฐานข้อมูล MySQL) ก่อนจะใช้ก็ 
      install API/driver ก่อน
      
   - connect database แบบใช้ PDO
     
        ```
        <?php
            $servername = "localhost";
            $username = "username";
            $password = "password";

            try
            {
                 $conn = new PDO("mysql:host=$servername", $username, $password);
        
                 // set the PDO error mode to exception
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 $sql = "CREATE DATABASE myDBPDO";
        
                 // use exec() because no results are returned
                 $conn->exec($sql);
                 echo "Database created successfully<br>";
            }
            catch(PDOException $e)
            {
                 echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;
        ?>
        ```
<br/><br/><br/>

## [PHP &nbsp;Exercise 🔗](https://edabit.com/challenges/php)

- **BEGINNER** &nbsp;&nbsp;:&nbsp;&nbsp; ฝึกให้คุ้นกับ syntax ฝึก logic
   - [w3resource](https://www.w3resource.com/php-exercises/php-basic-exercises.php) &nbsp;&nbsp;:&nbsp;&nbsp; โจทย์ฝึก logic
   - [tutorialsclass](https://tutorialsclass.com/exercises/php/php-all-exercises-assignments/) &nbsp;&nbsp;:&nbsp;&nbsp; โจทย์แนวฝึกใช้ syntax
   - [techstudy](https://techstudy.org/php/php-programs-with-output)  &nbsp;&nbsp;:&nbsp;&nbsp; โจทย์แนวฝึกใช้ syntax ให้คล่อง loop , array , ...
   - [javatpoint](https://www.javatpoint.com/php-programs) &nbsp;&nbsp;:&nbsp;&nbsp; มีอธิบายโค้ด
   - [edabit](https://edabit.com/challenges/php) &nbsp;&nbsp;:&nbsp;&nbsp; โจทย์คล้ายๆ leetcode เลือกระดับได้ เหมาะใช้ฝึกทำก่อนไปสัมภาษณ์งาน
  
- **INTERMEDIATE** &nbsp;&nbsp;:&nbsp;&nbsp; ฝึกทำโปรเจค ฝึกอ่านโค้ด  learning by doing PHP project with source code โหลดมาลองรัน ลองแก้ ลองทำความเข้าใจ
   - [sourcecodester](https://www.sourcecodester.com/php-project) &nbsp;&nbsp;:&nbsp;&nbsp; มีอธิบาย idea และ Techstack ค่อนข้างละเอียด
   - [phpgurukul](https://phpgurukul.com/php-projects-free-downloads/) &nbsp;&nbsp;:&nbsp;&nbsp; มีอธิบาย idea และ Techstack
   - [interviewbit](https://www.interviewbit.com/blog/php-projects/) &nbsp;&nbsp;:&nbsp;&nbsp; แนะนำโปรเจค php บน github ที่น่าสนใจ
   - [hackr.io](https://hackr.io/blog/php-projects) &nbsp;&nbsp;:&nbsp;&nbsp; แนะนำโปรเจค php บน github ที่น่าสนใจ
   - [code-projects](https://code-projects.org/c/languages/project/phpprojects/) &nbsp;&nbsp;:&nbsp;&nbsp; มีอธิบาย idea และ Techstack ค่อนข้างละเอียด
   - [phptpoint](https://www.phptpoint.com/projects/) &nbsp;&nbsp;:&nbsp;&nbsp; มีวิดิโอพาทำ
   - [projectworlds](https://projectworlds.in/free-projects/php-projects/) &nbsp;&nbsp;:&nbsp;&nbsp; มีวิดิโอพาทำ
   - [projectsgeek](https://projectsgeek.com/php-projects-source-code) &nbsp;&nbsp;:&nbsp;&nbsp; มีอธิบาย idea และ Techstack
   - [itsourcecode](https://itsourcecode.com/php-project/) &nbsp;&nbsp;:&nbsp;&nbsp; มีวิดิโอพาทำ

<br/>


