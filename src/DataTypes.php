<?php

namespace textilz\QueryBuilder;

trait DataTypes
{
    public function id()
    {
        return ['id' => 'INT PRIMARY KEY AUTO_INCREMENT'];
    }

    public function text($data, $max = 255)
    {
        return [$data => 'VARCHAR'];
    }
}