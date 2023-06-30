<?php

namespace GeekBrains\Blog;

use GeekBrains\Person\Person;

class Post
{
 /* private int $id;
    private Person $author;
    private string $text;

    public function __construct
    (
        int $id,
        Person $author,
        string $text
    )
    {
        $this->id = $id;
        $this->text = $text;
        $this->author = $author;
    }
 */
    public function __construct
    (
        private int $id,
        private Person $author,
        private string $text
    )
    {

    }
    public function __toString()
    {
        return $this->author . ' пишет: ' . $this->text . PHP_EOL;
    }


}
