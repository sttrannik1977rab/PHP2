<?php

namespace GeekBrains\Blog;
use GeekBrains\Person\Name;

class User
{
    /*  private int $id;
    private Name $username;
    private string $login;
    */
    /**
     * @param int $id
     * @param Name $username
     * @param string $login
     */
   /* public function __construct(int $id, Name $username, string $login)
    {
        $this->id = $id;
        $this->username = $username;
        $this->login = $login;
    }
    */

    public function __construct
    (
        private int $id,
        private Name $username,
        private string $login,
    )
    {
    }
    public function __toString(): string
    /*этот метод вызывается тогда, когда мы пытаемся получить объект как строку*/
    {
        return "Юзер $this->id с именем $this->username и логином $this->login." .PHP_EOL;
    }

}