<?php

namespace MyLib\model;

class User
{
    /**
     * @var array[]
     */
    public $arr = [
        ['id' => 1, 'name' => '张三'],
        ['id' => 2, 'name' => '李四'],
        ['id' => 3, 'name' => '王五'],
    ];

    public function getList(): array
    {
        return $this->arr;
    }

    public function getOne(int $id): array
    {
        $arrColumn = array_column($this->arr, null, 'id');
        return $arrColumn[$id] ?? [];
    }
}