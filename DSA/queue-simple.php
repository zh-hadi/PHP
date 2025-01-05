<?php 


class Queue
{
    public $data = [];

    public function enqueue($value)
    {
        array_unshift($this->data, $value);
    }

    public function dequeue()
    {
         array_pop($this->data);
    }
}


$queue = new Queue();

$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(5);

var_dump($queue->data);

$queue->dequeue();
echo "<hr>";

var_dump($queue->data);