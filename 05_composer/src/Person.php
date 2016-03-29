<?php
namespace Hackingangle;

/**
 * Person
 */
class Person
{
    /**
     * name
     * @var string
     */
    protected $name;

    /**
     * 初始化name
     * @param string $name name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 获取name
     * @return string name
     */
    public function getName()
    {
        return $this->name;
    }
}
