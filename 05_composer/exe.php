<?php

// require __DIR__. '/src/Person.php';
// require __DIR__. '/src/Staff.php';
// require __DIR__. '/src/Company.php';

// function __autoload($className) {
//     require __DIR__. '/src/'. $className. '.php';
// }

require __DIR__. '/vendor/autoload.php';

use Hackingangle\Person;
use Hackingangle\Company;

$hahaSir = new Person("hackingangle");
$eric = new Person("Eric");
$search = new Hackingangle\Staff([$hahaSir]);
$google = new Company($search);
$google->hire($eric);
var_dump($google->getStaffMembers());
