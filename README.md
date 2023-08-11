# PHP  &nbsp;Professional &nbsp;Home &nbsp;Page &nbsp;🚀

### [1.&nbsp;) &nbsp;&nbsp; Introduction 🔗](https://www.w3schools.com/php/php_oop_classes_abstract.asp)

   -  &nbsp; PHP คืออะไร  ใช้ทำอะไร ?
   -  &nbsp; PHP ใช้ยังไง ?
   -  &nbsp; DBMS คืออะไร ?
   -  &nbsp; NoSQL คืออะไร ?
   -  &nbsp; Relational Database คืออะไร ?

<br/>

### [2.&nbsp;) &nbsp;&nbsp; PHP &nbsp;Syntax 🔗](https://www.php.net/manual/en/)

   -  &nbsp; PHP BASIC
      - &nbsp; input &nbsp;:&nbsp; ```echo "Hello World !```
      - &nbsp; output &nbsp;:&nbsp; ```echo "Hello World !```
      - &nbsp; condition &nbsp;:&nbsp; ```if...elseif...else``` &nbsp; ```switch (case)``` 
      - &nbsp; loop &nbsp;:&nbsp; ```while``` &nbsp; ```do-while``` &nbsp; ```for ($x = 0; $x <= 10; $x++)``` &nbsp; ```foreach ($colors as $value)``` &nbsp; ```break;``` &nbsp; ```continue;```
      - &nbsp; Array &nbsp;:&nbsp; ```CREATE : $cars = array("Volvo", "BMW", "Toyota");  OR  array();``` &nbsp; ```ACCESS : $cars[0]```
      - &nbsp; String &nbsp;:&nbsp; ```strlen()``` &nbsp; ```str_replace()``` &nbsp;  . . .
      - &nbsp; File &nbsp;:&nbsp; ```echo readfile("file.txt");``` &nbsp; ```$myfile = fopen("webdictionary.txt", "r"); ต้อง fclose($myfile);ด้วย``` &nbsp;
      - &nbsp; [Cookies & Session](https://www.borntodev.com/2020/07/10/cookie-vs-session/) &nbsp;:&nbsp; ```setcookie(name, value, expire, path, domain, secure, httponly);``` &nbsp; ```session_start();```

<br/>

   -  &nbsp; PHP OOP
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

   -  &nbsp; PHP DATABASE
      - &nbsp; มี 2 API ให้ใช้  คือ PDO (ใช้ได้กับ 12 ฐานข้อมูล) กับ MySQLi (ใช้ได้แค่กับฐานข้อมูล MySQL) ก่อนจะใช้ก็ install API ก่อน
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
<br/>

### [3.&nbsp;) &nbsp;&nbsp; PHP &nbsp;Exercise 🔗](https://edabit.com/challenges/php)

- &nbsp; Practice B1 - B10 &nbsp;:&nbsp; input/output in java (scanner / print)
  
- &nbsp; Practice C1 - C8 &nbsp;:&nbsp; loop & recursive
  
- &nbsp; Practice D1 - D5 &nbsp;:&nbsp; Arithmetic (+ / -/ */ sqr/ % ...)
  
- &nbsp; Practice E1 - E3 &nbsp;:&nbsp; loop + if-else
  
- &nbsp; Practice F1 - F6 &nbsp;:&nbsp; find prime number / LCM / GCF
  
- &nbsp; Practice H1 - H10 &nbsp;:&nbsp; Arrray / sum / min / max / sort
  
- &nbsp; Practice J1 - J4 &nbsp;:&nbsp; statistics (avg / mode / medien)
  
- &nbsp; Exercise1_01_E5 &nbsp;:&nbsp; applied problems

<br/>


