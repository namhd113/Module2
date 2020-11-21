<?php
//SplStack Mode is LIFO (Last In First Out)

$queue = new SplQueue();
$queue->enqueue("nam");
$queue->enqueue("nam1");
$queue->enqueue("nam2");
$queue->rewind();
while ($queue->valid()){
    echo $queue->current(), "<br>";
    $queue->next();
}

