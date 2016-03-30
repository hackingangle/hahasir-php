<?php
class Person {
    /**
     * age
     * @var integer
     */
    public $age = 0;

    /**
     * instance counter
     * @var integer
     */
    public static $instanceNum = 0;

    /**
     * add counter
     */
    public function __construct() {
        // static::$instanceNum++;
        self::$instanceNum++;
    }

    /**
     * add age
     * @return null
     */
    public function haveBirthDay() 
    {
        $this->age++;
    }

    /**
     * echo instantce num
     * @return null
     */
    public static function getInstantceNum() 
    {
        var_dump("当前实例数量为：". static::$instanceNum);
    }
}

$hackingangle = new Person();
$hackingangle->haveBirthDay();
$hackingangle->haveBirthDay();
var_dump($hackingangle->age);
Person::getInstantceNum();

$eric = new Person();
$eric->haveBirthDay();
var_dump($eric->age);
Person::getInstantceNum();

$john = new Person();
$john->haveBirthDay();
var_dump($john->age);
Person::getInstantceNum();
