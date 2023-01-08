<?php

namespace first;

class learn
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo 'MY name is '.$this->name;
    }
}
