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








//
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

// if($_GET !== null){


//         $host = '127.0.0.1';
//         $db = 'test1';
//         $user = 'root';
//         $pass = '';
//         $charset = 'utf8';

//         $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//         $opt = [
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//             PDO::ATTR_EMULATE_PREPARES => false,
//         ];
//         // Получение объекта PDO
//         $pdo = new PDO($dsn, $user, $pass, $opt);

//     //$result = json_encode($_GET );
//     $name = htmlspecialchars($_GET['name']);
//     $year = htmlspecialchars($_GET['year']);

//     $stmt = $pdo->prepare("INSERT INTO student (name, year) VALUES (?, ?)");
//     $stmt->bindParam(1, $name);
//     $stmt->bindParam(2, $year);
//     $stmt->execute();
// }


//|||||||||  Конец работы |||||||||||||

//18.03.26


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
    $fam = htmlspecialchars($_GET['fam']);
    $ote = htmlspecialchars($_GET['ote']);
    $year = htmlspecialchars($_GET['year']);
    $pass = htmlspecialchars($_GET['pass']);

    $stmt = $pdo->prepare("INSERT INTO student (name, fam, ote, year, pass) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $fam);
    $stmt->bindParam(3, $ote);
    $stmt->bindParam(4, $year);
    $stmt->bindParam(5, $pass);
    $stmt->execute();
}


//конец



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










/**
 * Базовый класс Человека
 */
// class Human
// {
//     protected string $name;
//     protected int $health = 100;
//     protected int $maxHealth = 100;
//     protected string $settlement;

//     public function __construct(string $name, string $settlement)
//     {
//         $this->name = $name;
//         $this->settlement = $settlement;
//     }

//     public function __destruct()
//     {
//         // Деструктор для очистки ресурсов при необходимости
//     }

//     public function getName(): string
//     {
//         return $this->name;
//     }

//     public function getHealth(): int
//     {
//         return $this->health;
//     }

//     public function getSettlement(): string
//     {
//         return $this->settlement;
//     }

//     public function isAlive(): bool
//     {
//         return $this->health > 0;
//     }

//     public function takeDamage(int $damage): void
//     {
//         $this->health = max(0, $this->health - $damage);
//     }

//     public function heal(int $amount): void
//     {
//         $this->health = min($this->maxHealth, $this->health + $amount);
//     }

//     public function attack(Human $target): void
//     {
//         // Базовый метод атаки - переопределяется в наследниках
//     }

//     public function __toString(): string
//     {
//         return "{$this->name} ({$this->health}/{$this->maxHealth})";
//     }
// }

// /**
//  * Класс Жителя
//  */
// class Resident extends Human
// {
//     public function __construct(string $name, string $settlement)
//     {
//         parent::__construct($name, $settlement);
//     }

//     public function attack(Human $target): void
//     {
//         // Житель не может бить
//         echo "  {$this->name} не умеет сражаться!\n";
//     }
// }

// /**
//  * Класс Воина
//  */
// class Warrior extends Human
// {
//     private int $damage = 10;

//     public function __construct(string $name, string $settlement)
//     {
//         parent::__construct($name, $settlement);
//     }

//     public function attack(Human $target): void
//     {
//         if (!$target->isAlive()) {
//             return;
//         }

//         // Урон зависит от типа цели
//         if ($target instanceof Resident) {
//             $actualDamage = 15; // Урон жителю
//         } else {
//             $actualDamage = $this->damage; // Урон воину
//         }

//         $target->takeDamage($actualDamage);
//         echo "  {$this->name} атакует {$target->getName()} и наносит {$actualDamage} урона!\n";
//     }
// }

// /**
//  * Класс Лекаря
//  */
// class Healer extends Human
// {
//     private int $healPower = 5;

//     public function __construct(string $name, string $settlement)
//     {
//         parent::__construct($name, $settlement);
//     }

//     public function attack(Human $target): void
//     {
//         // Лекарь не участвует в сражении
//         echo "  {$this->name} не участвует в бою!\n";
//     }

//     public function healTarget(Human $target): void
//     {
//         if (!$target->isAlive()) {
//             return;
//         }

//         $target->heal($this->healPower);
//         echo "  {$this->name} лечит {$target->getName()} на {$this->healPower} ед.\n";
//     }
// }

// /**
//  * Класс Поселения
//  */
// class Settlement
// {
//     private string $name;
//     private array $residents = [];
//     private array $warriors = [];
//     private array $healers = [];

//     public function __construct(string $name)
//     {
//         $this->name = $name;
//     }

//     public function __destruct()
//     {
//         // Очистка всех персонажей при уничтожении поселения
//         $this->residents = [];
//         $this->warriors = [];
//         $this->healers = [];
//     }

//     public function getName(): string
//     {
//         return $this->name;
//     }

//     public function addResident(Resident $resident): void
//     {
//         $this->residents[] = $resident;
//     }

//     public function addWarrior(Warrior $warrior): void
//     {
//         $this->warriors[] = $warrior;
//     }

//     public function addHealer(Healer $healer): void
//     {
//         $this->healers[] = $healer;
//     }

//     public function getAliveWarriors(): array
//     {
//         return array_filter($this->warriors, fn($w) => $w->isAlive());
//     }

//     public function getAliveResidents(): array
//     {
//         return array_filter($this->residents, fn($r) => $r->isAlive());
//     }

//     public function getAliveHealers(): array
//     {
//         return array_filter($this->healers, fn($h) => $h->isAlive());
//     }

//     public function hasAliveUnits(): bool
//     {
//         return count($this->getAliveWarriors()) > 0 || 
//                count($this->getAliveResidents()) > 0;
//     }

//     public function getRandomAliveWarrior(): ?Warrior
//     {
//         $warriors = $this->getAliveWarriors();
//         if (empty($warriors)) {
//             return null;
//         }
//         return $warriors[array_rand($warriors)];
//     }

//     public function getRandomAliveResident(): ?Resident
//     {
//         $residents = $this->getAliveResidents();
//         if (empty($residents)) {
//             return null;
//         }
//         return $residents[array_rand($residents)];
//     }

//     public function getRandomAliveHealer(): ?Healer
//     {
//         $healers = $this->getAliveHealers();
//         if (empty($healers)) {
//             return null;
//         }
//         return $healers[array_rand($healers)];
//     }

//     public function getStats(): string
//     {
//         $warriors = count($this->getAliveWarriors());
//         $residents = count($this->getAliveResidents());
//         $healers = count($this->getAliveHealers());
//         return "{$this->name}: воинов={$warriors}, жителей={$residents}, лекарей={$healers}";
//     }
// }

// /**
//  * Класс Игры
//  */
// class Game
// {
//     private Settlement $settlement1;
//     private Settlement $settlement2;
//     private int $round = 0;
//     private int $maxRounds = 1000;

//     public function __construct(Settlement $s1, Settlement $s2)
//     {
//         $this->settlement1 = $s1;
//         $this->settlement2 = $s2;
//     }

//     public function __destruct()
//     {
//         // Деструктор игры
//     }

//     public function start(): void
//     {
//         echo "=== БИТВА НАЧАЛАСЬ! ===\n";
//         echo "{$this->settlement1->getName()} против {$this->settlement2->getName()}\n\n";

//         while ($this->round < $this->maxRounds) {
//             $this->round++;
//             echo "--- Раунд {$this->round} ---\n";

//             // Атака первого поселения на второе
//             $this->performAttack($this->settlement1, $this->settlement2);
            
//             // Лечение в первом поселении
//             $this->performHealing($this->settlement1);
            
//             // Атака второго поселения на первое
//             $this->performAttack($this->settlement2, $this->settlement1);
            
//             // Лечение во втором поселении
//             $this->performHealing($this->settlement2);

//             echo "\nСтатус: {$this->settlement1->getStats()} | {$this->settlement2->getStats()}\n\n";

//             // Проверка победы
//             $winner = $this->checkWinner();
//             if ($winner !== null) {
//                 echo "=== ИГРА ОКОНЧЕНА! ===\n";
//                 echo "Победитель: {$winner->getName()}!\n";
//                 break;
//             }

//             if ($this->round >= $this->maxRounds) {
//                 echo "=== НИЧЬЯ! ===\n";
//                 echo "Достигнут лимит раундов.\n";
//             }
//         }
//     }

//     private function performAttack(Settlement $attacker, Settlement $defender): void
//     {
//         $warrior = $attacker->getRandomAliveWarrior();
//         if ($warrior === null) {
//             return;
//         }

//         // Случайный выбор цели: воин или житель
//         $target = null;
//         $rand = rand(0, 1);
        
//         if ($rand === 0) {
//             $target = $defender->getRandomAliveWarrior();
//         } else {
//             $target = $defender->getRandomAliveResident();
//         }

//         if ($target !== null) {
//             $warrior->attack($target);
//         }
//     }

//     private function performHealing(Settlement $settlement): void
//     {
//         $healer = $settlement->getRandomAliveHealer();
//         if ($healer === null) {
//             return;
//         }

//         // Лекарь лечит случайного раненого союзника
//         $target = null;
//         $rand = rand(0, 2);
        
//         if ($rand === 0) {
//             $target = $settlement->getRandomAliveWarrior();
//         } elseif ($rand === 1) {
//             $target = $settlement->getRandomAliveResident();
//         } else {
//             // Можно лечить и другого лекаря
//             $target = $settlement->getRandomAliveHealer();
//         }

//         if ($target !== null && $target->getHealth() < $target->getHealth()) {
//             $healer->healTarget($target);
//         }
//     }

//     private function checkWinner(): ?Settlement
//     {
//         $s1Alive = $this->settlement1->hasAliveUnits();
//         $s2Alive = $this->settlement2->hasAliveUnits();

//         if (!$s2Alive && $s1Alive) {
//             return $this->settlement1;
//         }
//         if (!$s1Alive && $s2Alive) {
//             return $this->settlement2;
//         }
//         return null;
//     }
// }

// // ==================== ЗАПУСК ИГРЫ ====================

// // Создание поселений
// $vikings = new Settlement("Викинги");
// $english = new Settlement("Англичане");

// // Создание персонажей для Викингов
// $vikings->addWarrior(new Warrior("Рагнар", "Викинги"));
// $vikings->addResident(new Resident("Бьорн", "Викинги"));
// $vikings->addHealer(new Healer("Фрида", "Викинги"));

// // Создание персонажей для Англичан
// $english->addWarrior(new Warrior("Эдвард", "Англичане"));
// $english->addResident(new Resident("Томас", "Англичане"));
// $english->addHealer(new Healer("Мэри", "Англичане"));

// // Создание и запуск игры
// $game = new Game($vikings, $english);
// $game->start();



