<?php


class Stack
{
    protected $limit;
    protected $arr;

    public function __construct($limit = 10, $arr = [])
    {
        $this->limit = $limit;
        $this->arr = $arr;

    }

    public function push($item)
    {
        if ($this->isFull()) {
            echo "thung chua da day";
            exit();
        }
        array_unshift($this->arr, $item);
    }

    public function pop()
    {
        if ($this->isEmpty())
        {
            echo "khong con phan tu";
            exit();
        }
        return array_shift($this->arr);

    }

    public function isEmpty()
    {
        echo "da kiem tra";

        return empty($this->arr);
    }

    public function isFull()
    {
        return count($this->arr) == $this->limit;

    }

    public function top()
    {
        return current($this->arr);
    }

}