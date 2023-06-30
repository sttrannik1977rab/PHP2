<?php
/*require_once "User.php";
require_once "Name.php";
require_once "Person.php";*/


/*use src\Blog\User;
  use src\Blog\Post;
  use Person\Name;
  use Person\Person;
*/

use GeekBrains\Blog\{Post, User};
use GeekBrains\Person\{Person, Name};


spl_autoload_register('load'); /*регистрируем автозагрузчик*/

function load($className) /*автозагрузчик*/
{
    $file = $className . ".php";
    $file = str_replace("\\", "/", $file);
    $file = str_replace("GeekBrains/", "src/", $file);
    if (file_exists($file)) {
        include $file;
    }


}
$name = new Name('Peter', 'Sidorov');

$user = new User(1, $name, "Admin" );
echo $user;

$name = new Name('Peter', 'Sidorov');
$person = new Person($name, new DateTimeImmutable());

$post = new Post
(
    1,
    $person,
    'Всем привет!'
);

echo $post;

