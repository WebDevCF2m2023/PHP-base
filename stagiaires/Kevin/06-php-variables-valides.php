<?php
class Part{
    private int $id;
    private string $color;
    function __construct($id, $color="green"){
        $this->id = $id;
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}
$snake = [];
for($i = 0; $i < 4; ++$i)
    $snake[] = new Part($i);

$snake[0]->setColor("red");

var_dump($snake);