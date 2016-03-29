<?php
/**
 * 对象间的消息传递
 * Company,Person,Staff
 */
class Company
{
    /**
     * staff
     * @var Staff
     */
    protected $staff;

    /**
     * init staff
     * @param Staff $staff staff
     */
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    /**
     * hire
     * @param  Person $person person
     * @return null
     */
    public function hire(Person $person)
    {
        $this->staff->addMember($person);
    }

    /**
     * get all staff members
     * @return array members
     */
    public function getStaffMembers()
    {
        return $this->staff->getMembers();
    }
}

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

class Staff
{
    /**
     * 员工
     * @var array
     */
    protected $members;

    /**
     * init bosses
     * @param array $bosses bosses
     */
    public function __construct($bosses = [])
    {
        $this->members = $bosses;
    }

    /**
     * 添加组员
     * @param Person $person person
     */
    public function addMember(Person $person)
    {
        $this->members[] = $person;
    }

    /**
     * get all members of staff
     * @return array members
     */
    public function getMembers()
    {
        return $this->members;
    }
}

$hahaSir = new Person("hackingangle");
$eric = new Person("Eric");
$search = new Staff([$hahaSir]);
$google = new Company($search);
$google->hire($eric);
var_dump($google->getStaffMembers());
