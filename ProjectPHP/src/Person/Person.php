<?php

namespace GeekBrains\Person;
/*GeekBrains\LevelTwo\ - виртуальная часть названия*/
/*use \DateTimeImmutable;*/
class Person
{/*
    private Name $name;
    private DateTimeImmutable $registeredOn;

    public function __construct(Name $name, DateTimeImmutable $registeredOn)
    {
        $this->registeredOn = $registeredOn;
        $this->name = $name;
    }*/

    public function __construct
    (
        private Name $name,
        private \DateTimeImmutable $registeredOn,
    )
    {
    }

    public function __toString()
    {
        return $this->name . ' (на сайте с ' . $this->registeredOn->format('Y-m-d') . ')';
    }
}