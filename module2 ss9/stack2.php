<?php

class Stack
{
    private $stack;
    private $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
    function getStack(){
        return $this->stack;
    }

    function isEmpty()
    {
        if (!empty($this->stack)) {
            return true;
        } else {
            return "aan lol r";
        }
    }

    function push($data)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $data);
        }
    }

    function pop()
    {
        if ($this->isEmpty()) {
        return    array_shift($this->stack);

        }
    }

    function top()
    {
        return current($this->stack);
    }
}

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
echo $stack->pop();
