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
// 1. Создать класс Людей
// 2. Создать классы наследники - житель, воин, лекарь
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
class Human {
    protected $name;
    protected $health;
    protected $max_health = 100; // Жизнь по умолчанию 100%

    // Конструктор
    public function __construct($name) {
        $this->name = $name;
        $this->health = $this->max_health;
        echo $this->name . " присоединился к игре.\n";
    }

    // Метод атаки (будет переопределен)
    public function attack($target) {
        echo $this->name . " На данный момент ничего не происходит.\n";
    }

    // Метод получения урона
    public function takeDamage($damage) {
        $this->health -= $damage;
        if ($this->health < 0) {
            $this->health = 0;
        }
        echo $this->name . " получил " . $damage . " урона. Здоровье: " . $this->health . ".\n";
        if ($this->health == 0) {
            echo $this->name . " Убит!\n";
        }
    }

    // Метод лечения (будет переопределен)
    public function heal($target) {
        echo $this->name . " не умеет лечить.\n";
    }

    // Геттеры (методы для получения значений полей)
    public function getName() {
        return $this->name;
    }

    public function getHealth() {
        return $this->health;
    }

    public function isAlive() {
        return $this->health > 0;
    }
}

// Класс "Житель"
class Hrestian extends Human {
    public function __construct($name) {
        Human::__construct($name);
        echo $this->name . " - христианин.\n";
    }

    // Переопределяем метод атаки
    public function attack($target) {
        $damage = 15; // Урон жителя
        echo $this->name . " в отчаянии пытается ударить " . $target->getName() . "!\n";
        $target->takeDamage($damage);
    }
}

// Класс "Воин"
class Viking extends Human {
    private $attack_damage = 10; // Урон воина

    public function __construct($name) {
        Human::__construct($name);
        echo $this->name . " - Викинг.\n";
    }

    // Переопределяем метод атаки
    public function attack($target) {
        echo $this->name . " наносит удар " . $target->getName() . "!\n";
        $target->takeDamage($this->attack_damage);
    }
}






?>
