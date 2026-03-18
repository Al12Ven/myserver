<?php
// session_start();
// $param1 = $_GET["param1"];
// $param2 = $_GET["param2"];
// $res = $param1 + $param2;
// $res1= $param1 - $param2;
// $res2= $param1 / $param2;
// $res3= $param1 * $param2;
// $data = array('p1' => $param1, 'p2' => $param2, 'res' => $res, 'res1' => $res1, 'res2' => $res2, 'res3' => $res3);
// $jsonString = json_encode($data);
// echo $jsonString;
// echo "test";

// $data = array('p1' => 123, 'p2' => 456, 'res' => 78);
// foreach ($data as $key => $value) {
//     echo $key. ":".$value."<br>";
//     echo "sum(data) =". array_sum($data). "\n";
// }
// $arr = array(1,2,3,4,5,6,7,8,9);
// for($i=0;$i<count($arr);$i++){
//     echo $arr[$i]."<br>";

// }
/**
 * Задача 1
 * Создать функцию вычисления квадрата числа, без использования встроенной функции
 */
// function a($b){
// return $b * $b;
// }
// print(a(2));

/**
 * Задача 2
 * Создать функцию, которая определяет наибольшее значение из двух чисел, без использования встроенной функции
 */
// function a1($c,$d){
//     if ($c >$d){
//         return $c;
//     }else{
//         return $d;
//     }
// } 
// print(a1(2,3));
/**
 * Задача 3
 * Создать фнкцию,которая приимает в аргументе массив, определяет максимальный элемент и возвращает его
 * 
 */
// function u(array $arr) {
//     if (empty($arr)) {
//         return null;
//     }

//     $max = $arr[0];

//     foreach ($arr as $v) {
//         if ($v > $max) {
//             $max = $v;
//         }
//     }
//     return $max;
// }
// $n = [10, 5, 20, 15, 30, 25];
// print(u($arr));

/**
 * Задача 4
 * Создать функцию, которая вычисляет площадь круга или квадрата, по заданным парамерам
 *
 */
// function p($r){
//     return M_Pi*($r*$r);
// }
// print (p(2));


/**
 * Задача 5
 * Создать функцию, которая определяет длину ассоциативного массива
 */
// function a3(array $g){
//     return count($g);
// }
// $k = array ('name' => 'Alisa', 'age'=> 30);
// print(a3($k));



// class Pers{
//     public $name,  $age, $surname, $ves, $rost;
//     function __construct($name, $age, $surname, $ves, $rost)
//     {

//         $this->name=$name;
//         $this->age=$age;
//         $this->surname=$surname;
//         $this->ves=$ves;
//         $this->rost=$rost;

//     }
//         public function displayInfo()
//     {
//         echo "Name: $this->name<br> Age: $this->age<br> surname: $this->surname<br> Ves: $this->ves<br> rost: $this->rost ";
//         // print $this->name;
//      }
//      public function(){
        
//      }
   
// }

// $obj = new Pers("Yakov", 18, "Sadovskiy", 52, 161);
// $obj->displayInfo();
// print_r($obj)
// echo sumchisl;
// var_dump($obj);





// class King
// {//King
//     public $name;
//     function __construct($name)
//     {
//         $this->name=$name;
//     }
//     public function info()
//     {
//         echo "Name: $this->name";
//     }

// }//King

// class Knight extends King
// {//Knight
    
// }//Knight

// $obj = new Knight("Ivar");
// $obj->info();
















// Разработать простую игру с персонажами:
// 1.Простой житель
// 2.Воин-защитник
// 3.Лекарь

// Суть игры имеется два селения , в них живут жители,некоторые из них лекари. И воины, которые защищают селение
// Происходит нападение воинов одного селения на другое 
// При этом происходит ранение жителей и воинов. Лекари в сражении не участвуют, но лечат воинов и жителей

// Техническое задание на разработку
// 1. Создать класс Людей +
// 2. Создать классы наследники - житель+, воин+, лекарь-
// 3. Создать по 1 объекту - жителя, воина, лекаря, для 2 селений
// 4. Игра запускается в бесконечном цикле
// 5. Выход из игры, победа одной из сторон
// 6.Использовать случайные величины при разработке сценария игры
// 7.Параметры жизни -100
// 8.Урон воина - 10 при ударе другого воина
// 9. Ленчния лекаря -5
// 10. Урон жителя при ударе воина -15
// 11. Житель не может бить
// 12.Лекарь только лечит

// Требования
// 1. В классах должны быть конструкторы и диструкторы (диструкторы по необходимости)
// 2. В классах должны быть методы и поля
// 3. В родительском классе должны быть методы, которые должны быть использованы в наследниках
// 4. В наследниках должны быть переопределенные методы




//--------------------------------------------------------------------------------------------------------------------------------------

// Краткое описание: Будет сражение между двумя поселениями Северянинами и Англичанами.

//--------------------------------------------------------------------------------------------------------------------------------------

// Класс "Человек" - базовый класс
// class Human {
//     protected $name;
//     protected $health;
//     protected $max_health = 100; // Жизнь по умолчанию 100%

//     // Конструктор
//     public function __construct($name) {
//         $this->name = $name;
//         $this->health = $this->max_health;
//         echo $this->name . " присоединился к игре.\n";
//     }

//     // Метод атаки (будет переопределен)
//     public function attack($target) {
//         echo $this->name . " На данный момент ничего не происходит.\n";
//     }

//     // Метод получения урона
//     public function takeDamage($damage) {
//         $this->health -= $damage;
//         if ($this->health < 0) {
//             $this->health = 0;
//         }
//         echo $this->name . " получил " . $damage . " урона. Здоровье: " . $this->health . ".\n";
//         if ($this->health == 0) {
//             echo $this->name . " Убит!\n";
//         }
//     }

//     // Метод лечения (будет переопределен)
//     public function heal($target) {
//         echo $this->name . " не умеет лечить.\n";
//     }

//     // Геттеры (методы для получения значений полей)
//     public function getName() {
//         return $this->name;
//     }

//     public function getHealth() {
//         return $this->health;
//     }

//     public function isAlive() {
//         return $this->health > 0;
//     }
// }

// // Класс "Житель"
// class Christian extends Human {
//     public function __construct($name) {
//         Human::__construct($name);
//         echo $this->name . " - христианин.\n";
//     }

//     // Переопределяем метод атаки
//     public function attack($target) {
//         $damage = 15; // Урон жителя
//         echo $this->name . " в отчаянии пытается ударить " . $target->getName() . "!\n";
//         $target->takeDamage($damage);
//     }
// }

// // Класс "Воин"
// class Viking extends Human {
//     private $attack_damage = 10; // Урон воина

//     public function __construct($name) {
//         Human::__construct($name);
//         echo $this->name . " - Викинг.\n";
//     }

//     // Переопределяем метод атаки
//     public function attack($target) {
//         echo $this->name . " наносит удар " . $target->getName() . "!\n";
//         $target->takeDamage($this->attack_damage);
//     }
// }






//17.03.26||||  Начало работы   ||||||||||||||||||




// Взаимодействие с front

if($_GET !== null){


        $host = '127.0.0.1';
        $db = 'test1';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        // Получение объекта PDO
        $pdo = new PDO($dsn, $user, $pass, $opt);

    //$result = json_encode($_GET );
    $name = htmlspecialchars($_GET['name']);
    $year = htmlspecialchars($_GET['year']);

    $stmt = $pdo->prepare("INSERT INTO student (name, year) VALUES (?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $year);
    $stmt->execute();
}


//|||||||||  Конец работы |||||||||||||


// try {
//     $host = '127.0.0.1';
//     $db = 'university_db';
//     $user = 'root';
//     $pass = '';
//     $charset = 'utf8mb4';

//     $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//     $opt = [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES => false,
//     ];
    
//     // Получение объекта PDO
//     $pdo = new PDO($dsn, $user, $pass, $opt);
//     echo "<h2>База данных: university_db</h2>";

//     // ============================================
//     // 1. Получение всех студентов
//     // ============================================
//     echo "<h3>Студенты:</h3>";
//     $stmt = $pdo->query('SELECT * FROM students');
//     echo "<table border='1' cellpadding='5'>";
//     echo "<tr><th>ID</th><th>Имя</th><th>Email</th><th>Возраст</th></tr>";
//     while ($row = $stmt->fetch()) {
//         echo "<tr>";
//         echo "<td>{$row['id']}</td>";
//         echo "<td>{$row['name']}</td>";
//         echo "<td>{$row['email']}</td>";
//         echo "<td>{$row['age']}</td>";
//         echo "</tr>";
//     }
//     echo "</table><br/>";

//     // ============================================
//     // 2. Получение всех курсов
//     // ============================================
//     echo "<h3>Курсы:</h3>";
//     $stmt = $pdo->query('SELECT * FROM courses');
//     echo "<table border='1' cellpadding='5'>";
//     echo "<tr><th>ID</th><th>Название</th><th>Кредиты</th></tr>";
//     while ($row = $stmt->fetch()) {
//         echo "<tr>";
//         echo "<td>{$row['id']}</td>";
//         echo "<td>{$row['title']}</td>";
//         echo "<td>{$row['credits']}</td>";
//         echo "</tr>";
//     }
//     echo "</table><br/>";

//     // ============================================
//     // 3. Промежуточная таблица: студенты на курсах
//     // ============================================
//     echo "<h3>Промежуточная таблица (enrollments):</h3>";
//     $stmt = $pdo->query('
//         SELECT 
//             s.name AS student_name,
//             c.title AS course_title,
//             e.enrollment_date,
//             e.grade
//         FROM enrollments e
//         JOIN students s ON e.student_id = s.id
//         JOIN courses c ON e.course_id = c.id
//         ORDER BY s.name, c.title
//     ');
//     echo "<table border='1' cellpadding='5'>";
//     echo "<tr><th>Студент</th><th>Курс</th><th>Дата записи</th><th>Оценка</th></tr>";
//     while ($row = $stmt->fetch()) {
//         echo "<tr>";
//         echo "<td>{$row['student_name']}</td>";
//         echo "<td>{$row['course_title']}</td>";
//         echo "<td>{$row['enrollment_date']}</td>";
//         echo "<td>" . ($row['grade'] ?? 'Нет оценки') . "</td>";
//         echo "</tr>";
//     }
//     echo "</table><br/>";

//     // ============================================
//     // 4. INSERT: Добавление нового студента
//     // ============================================
//     echo "<h3>INSERT: Добавление студента</h3>";
//     $new_student = 'Павел Иванов';
//     $new_email = 'pavel.ivanov@example.com';
//     $new_age = 24;
    
//     $stmt = $pdo->prepare("INSERT INTO students (name, email, age) VALUES (?, ?, ?)");
//     $stmt->execute([$new_student, $new_email, $new_age]);
//     echo "Добавлен студент: <b>$new_student</b> (ID: " . $pdo->lastInsertId() . ")<br/><br/>";

//     // ============================================
//     // 5. UPDATE: Изменение оценки студента
//     // ============================================
//     echo "<h3>UPDATE: Изменение оценки</h3>";
//     $stmt = $pdo->prepare("UPDATE enrollments SET grade = :grade WHERE student_id = :student_id AND course_id = :course_id");
//     $stmt->execute(['grade' => 4.5, 'student_id' => 1, 'course_id' => 3]);
//     echo "Обновлена оценка студента ID=1 по курсу ID=3 на <b>4.5</b><br/><br/>";

//     // ============================================
//     // 6. DELETE: Удаление записи из enrollments
//     // ============================================
//     echo "<h3>DELETE: Удаление записи</h3>";
//     $stmt = $pdo->prepare("DELETE FROM enrollments WHERE student_id = ? AND course_id = ?");
//     $stmt->execute([5, 4]);
//     echo "Удалена запись: студент ID=5, курс ID=4<br/><br/>";

//     // ============================================
//     // 7. Выборка с JOIN: все курсы каждого студента
//     // ============================================
//     echo "<h3>Все студенты и их курсы (JOIN):</h3>";
//     $stmt = $pdo->query('
//         SELECT 
//             s.name AS student_name,
//             GROUP_CONCAT(c.title SEPARATOR ", ") AS courses
//         FROM students s
//         LEFT JOIN enrollments e ON s.id = e.student_id
//         LEFT JOIN courses c ON e.course_id = c.id
//         GROUP BY s.id, s.name
//         ORDER BY s.name
//     ');
//     echo "<table border='1' cellpadding='5'>";
//     echo "<tr><th>Студент</th><th>Курсы</th></tr>";
//     while ($row = $stmt->fetch()) {
//         echo "<tr>";
//         echo "<td>{$row['student_name']}</td>";
//         echo "<td>" . ($row['courses'] ?? 'Нет курсов') . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";

// } catch (PDOException $e) {
//     die('Подключение не удалось: ' . $e->getMessage());
// }



?>
