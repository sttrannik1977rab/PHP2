<?php
/*require_once "User.php";
require_once "Name.php";
require_once "Person.php";*/

use Geekbrains\Blog\User;
/*use Person\Name;
  use Person\Person;*/
use Person\{Name, Person};

spl_autoload_register('load');

function load($className)
{
    $file = $className . ".php";
    $file = str_replace("/", "\\", $file);
    if (file_exists($file)) {
        include $file;
    }
}
$name = new Name('Peter', 'Sidorov');

$user = new User(1, $name, "Admin" );
echo $user;

$name = new Name('Peter', 'Sidorov');
$person = new Person($name, new DateTimeImmutable());

echo $person;