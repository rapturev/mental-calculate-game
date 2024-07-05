<?php

// Abstraction that represents math expression(two numbers and operation between them).

namespace MentalCalculateGame;

use MentalCalculateGame\Builder;

require_once 'Builder.php';

class MathItem {
    public int $a, $b;
    public ?int $c = null;
    public ?string $op = null;
    public function __construct(Builder $builder) {
        $this->a = $builder->produceRandomNumber();
        $this->b = $builder->produceRandomNumber();
        $this->createExpression();
        echo $this->a . " " . $this->op . " " . $this->b . "\n";
    }
    public function createExpression(): void {
        $sign = rand(0, 3);
        if ($sign == 0) {
            $this->c = $this->a + $this->b;
            $this->op = '+';
        } else if ($sign == 1) {
            if ($this->a > $this->b) {
                $this->c = $this->a - $this->b; 
                $this->op = '-';
            } else {
                $this->createExpression();
            }
        } else if ($sign == 2) {
            $this->c = $this->a * $this->b;
            $this->op = '*';
        } else { 
            if (($this->b != 0) && ($this->a % $this->b == 0)) {
                $this->c = $this->a / $this->b;
                $this->op = '/';
            } else {
                $this->createExpression();
               }

        }
    }
}