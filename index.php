<?php
include_once "Stack.php";
$stack=new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
 $stack->push(7);
 $stack->push(8);
echo $stack->isEmpty();
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
echo $stack->isEmpty();