<?php
namespace Salad;


use Lettuce\Lettuce;

class Salad
{
    private $lettuce;

    public function __construct()
    {
        echo "Salad v1.1.0\n";
        $this->lettuce = new Lettuce();
    }
}
