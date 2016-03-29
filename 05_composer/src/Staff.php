<?php
namespace Hackingangle;

/**
 * Staff
 */
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
