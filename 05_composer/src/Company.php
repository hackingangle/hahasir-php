<?php
namespace Hackingangle;

/**
 * Company
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
